<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('asset/css/icheck-bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/adminlte.min.css') }}">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="{{url('/')}}"><b>SMK Antartika 1 Sidoarjo</a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Daftar Akun Anda Dengan Gratis </p>
                <form action="{{route('simpanRegister')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Full name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        
                        <div class="container"></div>                       
                            <a href="{{route('login')}}" class="nav-link">Sudah Memiliki Akun</a>
                    </div>
                </form>

            </div>
            <!-- form-box -->
        </div>
        <!-- card -->
    </div>
    <!-- register-box -->

    <!-- JQuery -->
    <script src="{{asset('asset/js/jquery.min.js') }}"></script>

    <script src="{{asset('asset/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{asset('asset/js/adminlte.min.js') }}"></script>
</body>

</html>
