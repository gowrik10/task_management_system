
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
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="Title"  value="{{$task->Title}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="Description" rows="3" >{{$task->Description}}</textarea>
        </div>
        <div class="form-group">
            <label for="priority">Priority</label>
            <select class="form-control" id="priority" name="Priority" >
                <option value="low" {{ $task->Priority=="low" ? 'selected' : '' }}>Low</option>
                <option value="medium" {{ $task->Priority=="medium" ? 'selected' : '' }}>Medium</option>
                <option value="high" {{ $task->Priority=="high" ? 'selected' : '' }}>High</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Status">Status</label>
            <select class="form-control" id="status" name="Status" >
                <option value="NotStarted" {{ $task->Status=="NotStarted" ? 'selected' : '' }}>Not Started</option>
                <option value="Ongoing" {{ $task->Status=="Ongoing" ? 'selected' : '' }}>Ongoing</option>
                <option value="Completed" {{ $task->Status=="Completed" ? 'selected' : '' }}>Completed</option>
            </select>
        </div>
        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" class="form-control" id="Duedate" name="Duedate" value="{{$task->Duedate}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
       
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>