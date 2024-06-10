<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .vh-100 {
            min-height: 100vh;
        }

        .gradient-custom-3 {
            background: rgba(0, 0, 0, 0.5);
        }

        .gradient-custom-4 {
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
                                     <h4 class="mt-1 mb-5 pb-1 font-weight-bold">Register With</h4>
    </div>

                            <form method="post" action="{{ route('register') }}">
                                @csrf
                                <div class="form-outline mb-4">
                                    <label class="form-label font-weight-bold" for="name">Nama</label>
                                    <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Anda" required/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label font-weight-bold" for="email">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda" required/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label font-weight-bold" for="password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda" required/>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-lg btn-danger btn-user btn-block btn-lg w-100 mt-4 mb-0">Register</button>
                                </div>

                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Sudah Punya Akun?
                                        <br> <a class="text-danger text-gradient font-weight-bold" href="/login">Sign in</a>
                                    </p>
                                </div>
                            </form>

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
