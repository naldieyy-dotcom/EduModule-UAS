<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - EduModule</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body{
            font-family:'Poppins',sans-serif;
            background:#F5F7FA;
        }

        .login-card{
            border:none;
            border-radius:20px;
        }

        .btn-login{
            background:#19376D;
            color:white;
        }

        .btn-login:hover{
            background:#0B2447;
            color:white;
        }

        .logo{
            font-size:60px;
            color:#19376D;
        }
    </style>

</head>

<body>

<div class="container">

<div class="row justify-content-center align-items-center vh-100">

<div class="col-md-5">

<div class="card shadow login-card">

<div class="card-body p-5">

<div class="text-center mb-4">

<div class="logo">
<i class="bi bi-book-half"></i>
</div>

<h2 class="fw-bold">EduModule</h2>

<p class="text-muted">
Learning Management System
</p>

</div>

@if(session('error'))
<div class="alert alert-danger">
{{ session('error') }}
</div>
@endif

<form action="{{ route('login.authenticate') }}" method="POST">

@csrf

<div class="mb-3">

<label>Email</label>

<input
type="email"
name="email"
class="form-control"
required>

</div>

<div class="mb-4">

<label>Password</label>

<input
type="password"
name="password"
class="form-control"
required>

</div>

<button class="btn btn-login w-100">

<i class="bi bi-box-arrow-in-right"></i>

Login

</button>

</form>

</div>

</div>

</div>

</div>

</div>

</body>
</html>