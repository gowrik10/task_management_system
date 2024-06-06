
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
    <h1>Edit Task</h1>
    
    <form action="/edittask/{{$task->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="Name" >
        </div>
        <div class="form-group">
            <label for="travelsandname">Travels and Name</label>
            <textarea class="form-control" id="travelsandname" name="Travels and Name" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="accountdetails">Account Details</label>
            <textarea class="form-control" id="accountdetails" name="Account Details" rows="3" >{{$task->Account_Details}}</textarea>
        </div>
        <div class="form-group">
            <label for="busname">Bus Name</label>
            <textarea class="form-control" id="busname" name="Bus Name" rows="3" >{{$task->Bus_Name}}</textarea>
        </div>
        <div class="form-group">
            <label for="busnumber">Bus Number</label>
            <textarea class="form-control" id="busnumber" name="Bus Number" rows="3" >{{$task->Bus_Number}}</textarea>
        </div>
        <div class="form-group">
            <label for="busseatcounts">Bus Seat counts</label>
            <textarea class="form-control" id="busseatcounts" name="Bus Seat counts" rows="3" >{{$task->Bus_Seat_counts}}</textarea>
        </div>
        <div class="form-group">
            <label for="dateofbirth">Date of Birth</label>
            <textarea class="form-control" id="dateofbirth" name="Date of Birth" rows="3" >{{$task->Date_of_Birth}}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>