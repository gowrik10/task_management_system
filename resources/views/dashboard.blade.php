<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Other meta tags and CSS links -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>.primary-button-link {
    display: inline-block;
    padding: 0.5rem 1rem;
    background-color: #1F2937; /* Change color as needed */
    color: #fff; /* Text color */
    border: none;
    border-radius: 0.20rem;
    text-decoration: none;
    transition: background-color 0.3s ease;
    font-size: 15px;
    font-style: inherit;
    text-align:right;
    align-items:right;
    
}
.lg{display:flex;
    justify-content:flex-end;
    margin:20px;}
</style>
</head>

<body>
    <!-- Your content here -->
    <br>
    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
        

                        
               <div class="lg">         
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="primary-button-link " href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
</a>
                </form>
</div>
            
</nav>
    <br>
    <div class="container text-center">
        <h1>Bus Management System</h1>

        <h2>Task List</h2> @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <!-- Rest of your content -->
    </div>

    <div class="container">
        <form action='/createe' method='POST'>
            @csrf
           <button  style="margin:15px;">Create</button> 
    </form>

        

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Travels and Name</th>
                    <th>Account Details</th>
                    <th>Bus Name</th>
                    <th>Bus Number</th>
                    <th>Bus Seat Counts</th>
                    <th>Date of Birth</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->Name }}</td>
                    <td>{{ $task->Travels_an_Name }}</td>
                    <td>{{ $task->Account_Details }}</td>
                    <td>{{ $task->Bus_Name }}</td>
                    <td>{{ $task->Bus_Number}}</td>
                    <td>{{ $task->Bus_Seats_Counts}}</td>
                    <td>{{ $task->Date_of_Birth}}</td>
                </tr>
                    <form action='/tedit/{{$task->id}}' method='POST'>
                    <form action='/tboard/{{$task->id}}' method='POST'>
            @csrf
           <button  style="margin:15px;">Edit</button> 
           <button  style="margin:15px;">Board</button> 
    </form>
<form action="/deletee/{{$task->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button >Delete</button>
                          </form>
                       
                      
                    </td>



                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>