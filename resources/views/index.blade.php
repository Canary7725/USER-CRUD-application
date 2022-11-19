<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body style=" background-image: url( {{url('images/book.jpg')}})">
    

    <div class="container" style="margin-top:200px;">
        <div class="row">
            <div class="col-md-3 col-md-offset" style="color:#ffffff ;margin:0px auto; background-color:rgb(0, 0, 0, 0.7)">
            <h2>Login </h2>
                <form action="{{route('login-verify')}}" method="post" style=" margin-top:20px;">
                    @csrf

                    <div class="md3">
                      <label class="form-label">Username</label>  
                      <input style="margin-top:-10px; background: transparent; color: #ffffff;border: none; border-radius:0px ; border-bottom: 3px solid #ffffff; outline: none;  " type="text" class="form-control" name="user" placeholder="Enter username" value="{{old('user')}}">  
                      @error('user')
                        <div class="text-danger" role="alert">
                            {{$message}}
                        </div>
                      @enderror                  
                    </div>

                    <div class="md3" style="margin-top:30px ;">
                      <label class="form-label">Password</label>  
                      <input style="margin-top:-10px; background: transparent; color: #ffffff;border: none; border-radius:0px ; border-bottom: 3px solid #ffffff; outline: none;  " type="text" class="form-control" name="pass" placeholder="Enter password">
                      @error('pass')
                        <div class="text-danger" role="alert">
                            {{$message}}
                        </div>
                      @enderror
                    </div>

                    <br>
                    <button type="submit" class="btn btn-success">Submit</button>

                    <a href="{{url('book-list')}}" class="btn btn-secondary">Back</a>
                </form>
                <div style="margin: 20px 0px;">
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('fail')}}
                </div>

                @endif
                </div>
            </div>
        </div>
</div>
</body>
</html>