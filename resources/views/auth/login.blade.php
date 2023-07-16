<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Register</title>
</head>
<body>
    <div class="container">
        @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
        <div class="row align-items-center justify-content-center vh-100">
            <div class="col-lg-9">
                <div class="shadow rounded-2">
                    <div class="row">
                        <div class="col-lg-5">
                           <div class="bg-login h-100 rounded"></div>
                        </div>
                        <div class="col-lg-7">
                            <div class="p-5 ps-4 text-dark">
                                <h5 class="mb-1 fw-bold">Login Disini!</h5>
                                <p class="mb-4 text-muted"></p>
                                <form action="/login" method="POST">
                                    @csrf

                                      <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                      </div>

                                    <div class="row mb-3">
                                        <div class="col">
                                        <label for="password" class="form-label">Password</label>
                                        <input id="password" type="password" class="form-control" name="password" required>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                      
                                    
                                    <div class="d-grid mb-3">
                                        <button type="submit" class="btn btn-primary py-2">Login</button>
                                    </div>
                                </form>
                                
                                <p class="text-muted fz-13 text-center">Belum punya akun? <a href="/register">Register disini</a></p>
                                <p class="text-muted fz-13 text-center"><a href="/" style="text-decoration: none">Kembali ke beranda.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
                      
</body>
</html>
