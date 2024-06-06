<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Other meta tags and CSS links -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Your content here -->
    <br>
    <br>
<div class="container">
    <h1>Board Task</h1>
    
    <form action="/boardtask/{{$task->id}}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="city">City</label>
            <select class="form-control" id="city" name="City" >
                <option value="coimbatore" {{ $task->City=="coimbatore" ? 'selected' : '' }}>coimbatore</option>
                <option value="chennai" {{ $task->City=="chennai" ? 'selected' : '' }}>chennai</option>
                <option value="kochi" {{ $task->City=="kochi" ? 'selected' : '' }}>kochi</option>
            </select>
        </div>
        <div class="form-group">
            <label for="startingpoint">Starting Point</label>
            <textarea class="form-control" id="startingpoint" name="Starting Point" rows="3" >{{$task->Starting_Point}}</textarea>
        </div>
        <div class="form-group">
            <label for="endingpoint">Ending Point</label>
            <textarea class="form-control" id="endingpoint" name="Ending Point" rows="3" >{{$task->Ending_Point}}</textarea>
        </div>
        <div class="form-group">
            <label for="startindtime">Starting Time</label>
            <textarea class="form-control" id="startingtime" name="Starting Time" rows="3" >{{$task->Starting_Time}}</textarea>
        </div>
        <div class="form-group">
            <label for="description">Ending Time</label>
            <textarea  type="time"  class="form-control" id="endingtime" name="Ending Time" rows="3" >{{$task->Ending_Time}}</textarea>
        </div>
        <div class="form-group">
            <label for="starting_date">Starting Date</label>
            <textarea type="time" class="form-control"  id="startingdate" name="Starting" rows="3" >{{$task->Staring_Date}}</textarea>
        </div>
        <div class="form-group">
            <label for="ending_date">Ending Date</label>
            <textarea class="form-control" id="description" name="Ending Date" rows="3" >{{$task->Ending_Date}}</textarea>
        </div>
        
        <div class="form-group">
            <label for="starting_date">Starting Date</label>
            <input type="date" class="form-control" id="startingdate" name="Starting Date" value="{{$task->Starting_Date}}">
        </div>
        <div class="form-group">
            <label for="ending_date">Ending Date</label>
            <input type="date" class="form-control" id="endingdate" name="Ending Date" value="{{$task->Ending_Date}}">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
       
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>