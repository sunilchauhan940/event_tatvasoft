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
        <h1>Event View Page</h1>
        <div class="row ml-2">
            <div class="col-md-1">
                <label>Event Name</label>
            </div>
            <div class="col-md-2">
                <p>{{$event->title}}</p>
            </div>
        </div>
        <div class="row ml-2">
            <div class="col-md-1">
                <label>Event Occurances</label>
            </div>
        
            <div class="col-md-2">
                <table>
                <tr>
                    <th>Date</th>
                    <th>Day Name</th>
                </tr>
                @foreach ($eventDates as $k=>$date)
                <tr>
                    <td>{{$date}}</td>
                    <td>{{date('l', strtotime($date))}}</td>
                </tr>
                @endforeach
                <tr>
                    <th>Total Recurrence Event</th>
                    <td>{{$total_recurrence_occurance}}</td>
                </tr>
                </table>
            </div>
        </div>
        
    </body>
</html>
