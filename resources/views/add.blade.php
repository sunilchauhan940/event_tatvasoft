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
    .invalid-feedback{
        color: red;
    }
    </style>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Events</title>
    </head>
    <body>
        <h1>Add Event</h1>
        <form  method="post" action="{{ route('events.store')}}" id="event-create"
            enctype="multipart/form-data">
            @csrf
            <div class="row ml-2">
                <div class="col-md-1">
                    <label>Event Title</label>
                </div>
                <div class="col-md-2">
                    <input type="text" name="title" placeholder="Event Title..."
                            class="form-control @error('title') is-invalid @enderror" >
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-1">
                    <label>Start Date</label>
                </div>
                <div class="col-md-2">
                    <input type="date" name="start_date" 
                    class="form-control @error('start_date') is-invalid @enderror" >
                    @error('start_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <br>
            
            <div class="row">
                <div class="col-md-1">
                    <label>End Date</label>
                </div>
                <div class="col-md-2">
                    <input type="date" name="end_date" 
                    class="form-control @error('end_date') is-invalid @enderror" >
                    @error('end_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-1">
                    <label>Recurrence</label>
                </div>
                <div class="col-md-2">
                    <select name="recurrence_occurance">
                        <option value="1">Every</option>
                        <option value="2">Every Other</option>
                        <option value="3">Every Third</option>
                        <option value="4">Every Fourth</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select name="recurrence_duration">
                        <option value="1">Day</option>
                        <option value="2">Week</option>
                        <option value="3">Month</option>
                        <option value="4">Year</option>
                    </select>
                </div>
            </div>
            <br>

            <input type="submit" value="Submit">
            
        </form>
    </body>
</html>