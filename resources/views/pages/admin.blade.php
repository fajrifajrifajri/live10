<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | {{ config ('app.name', 'RS Borobudur')}}</title>
    @include('layouts.css')
</head>
<body id="admin">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="{{ asset('img/Borobudur logo.png') }}" alt="borobudur logo">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Login</button>
                </form>
                <div class="position-relative">
                    <a href="">Lost your password?</a>
                    <span class="fas fa-arrow-left"></span>
                    <a href="">Back to home</a>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.scripts')
</body>
</html>
    