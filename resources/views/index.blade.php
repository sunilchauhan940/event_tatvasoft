<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
table{
    margin: 10px;
}
th,td{
    padding:10px;
}
body{
    padding: 10px;
}
</style>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Events</title>
    </head>
    <body>
        <h1>Event List Page</h1>
        <table>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Dates</th>
            <th>Occurance</th>
            <th>Actions</th>
        </tr>
        @foreach ($events as $k=>$event)
            <tr>
                <td>{{$k}}</td>
                <td>{{$event->title}}</td>
                <td>{{$event->start_date}} to {{$event->end_date}}</td>
                <td>{{config('constants.OCCURANCE')[$event->recurrence_occurance]}} {{config('constants.DURATION')[$event->recurrence_duration]}} </td>
                <td><a href="{{ route('events.show',$event->id)}}"><button>View</button></a></td>
            </tr>
        @endforeach
        </table>
        <a href="{{ route('events.create')}}"><button>Add Event</button>
    </body>
</html>
