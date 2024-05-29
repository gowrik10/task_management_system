
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
    <h1>Create Task</h1>
    <form action="/createtask" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="Title" >
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="Description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="priority">Priority</label>
            <select class="form-control" id="priority" name="Priority" >
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
        </div>
        <div class="form-group">
            <label for="priority">Status</label>
            <select class="form-control" id="status" name="Status" >
                <option value="NotStarted">Not Started</option>
                <option value="Ongoing">Ongoing</option>
                <option value="Completed">Completed</option>
            </select>
        </div>
        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" class="form-control" id="Duedate" name="Duedate">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>