<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    
<div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-4 col-offset">
                <h2>Edit User</h2>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <form action="{{url('update-user')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="md3">
                      <label class="form-label">Name</label>  
                      <input type="text" class="form-control" name="name" placeholder="Enter Name of the user" value="{{$data->name ?? 'None'}}">
                      @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                    <div class="md3">
                      <label class="form-label">Phone Number</label>  
                      <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" value="{{$data->phone ?? 'None'}}">
                      @error('phone')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                    <div class="md3">
                      <label class="form-label">Gender</label>  
                      <select class="form-select" id="exampleFormControlSelect1" name="gender">{{$data->gender ?? 'None'}}
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                      </select>

                      @error('condition')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                      @enderror
                    </div><br>
                    <button type="submit" class="btn btn-success">Submit</button>

                    <a href="{{url('user-list')}}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
</div>
</body>
</html>