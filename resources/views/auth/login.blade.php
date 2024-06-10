<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .vh-100 {
            min-height: 100vh;
        }

        .gradient-custom {
            background: linear-gradient(to right, #ffafbd, #ffc3a0);
        }

        .gradient-custom-2 {
            background: #ff616d;
            background: linear-gradient(to right, #ff616d, #ee9ca7);
        }
    </style>
</head>
<body>
<section class="vh-100 bg-image"
         style="background-image: url('assets/img/background.jpg');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">

                            <div class="text-center">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                     style="width: 185px;" alt="logo">
                                <h4 class="mt-1 mb-5 pb-1 font-weight-bold">Welcome Back</h4>
                            </div>

                            @if(session()->has('pesan'))
                            <div class="alert alert-danger">
                                {{ session()->get('pesan') }}
                            </div>
                            @endif

                            <p>Silahkan Login Ke Akun Anda</p>
                            <form class="user" method="post" action="{{ route('auth.verify') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label font-weight-bold" for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label font-weight-bold" for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" required>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-lg btn-danger btn-user btn-block btn-lg w-100 mt-4 mb-0">Sign in</button>
                                </div>
                            </form>
                            <div class="d-flex align-items-center justify-content-center pb-4">
                                <p class="mb-0 me-2">Belum Punya Akun?</p>
                                <a href="{{ route('register') }}" class="text-danger text-gradient">Sign up</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
