<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


</head>
<body>
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12">
                <h2>User List</h2>


                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif


                <div style="margin-right:10px; float:right">
                    <a class="btn btn-info" href="{{url('add-user')}}">Add User</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <tbody>
                        @php
                        $i =1
                        @endphp
                        @foreach($data as $users)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->phone}}</td>
                            <td>{{$users->gender}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{url('edit-user/'.$users->id)}}">Edit</a> 
                                <a class="btn btn-danger" href="{{url('delete-user/'.$users->id)}}">Delete</a>

                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
                <a href="{{url('/')}}" class="btn btn-dark" style="height:100px; width:100px; border-radius:50%; margin-top:100px; display:flex; align-items:center; justify-content:center;">Logout</a>
            </div>
        </div>
    </div>

</div>
</body>
</html>