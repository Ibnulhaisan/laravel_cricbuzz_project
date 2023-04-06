<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="custom-file-login" style="background: #EAEAEA">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <form class="col-md-6 p-4 bg-light rounded" method="POST" action="{{ route('admin_login') }}" style="box-shadow: 0 0 10px rgb(21,161,215);">
            @csrf
            <h2 class="text-center mb-4" style="color:rgb(21,161,215);">Admin Login</h2>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" >
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me">
                <label class="form-check-label" for="remember_me">Remember me</label>
            </div>
            <button type="submit" class="btn btn-success w-50 mt-3" style="background-color: #71d9e3; border-color: #28a745; margin-left: 130px; size: 30px">Login</button>
        </form>
    </div>
</div>

<!-- Your page content goes here -->
<div class="container-fluid">

    <div class="d-flex justify-content-center mt-5">
        <button type="button" class="btn btn-primary shadow p-3">
            Click Me!
        </button>
    </div>

</div>

</body>
</html>
