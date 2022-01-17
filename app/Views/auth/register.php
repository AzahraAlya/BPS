<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="assets/startbootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/startbootstrap/css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body class="bg-gradient-white">

    <div class="container">

    <div class="row justify-content-center mt-3 pt-lg-5">

        <div class="col-xl-8 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body p-lg-5 p-0">
                 
                    <div class="col-lg-12">
                        <div class="p-3">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Silahkan Buat Akun Terlebih Dahulu!</h1>
                            </div>
                            <form class="user" action = "/saveRegister" method="post">
                              
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"  value="<?= old('firstname'); ?>" placeholder="First Name"  name="firstname" required >
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" value="<?= old('lastname'); ?>" placeholder="Last Name" name="lastname" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" value="<?= old('username'); ?>" placeholder="Username" name="username" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" value="<?= old('email'); ?>" placeholder="Email Address" name="email" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" value="<?= old('password'); ?>" placeholder="Password" name="password"  required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                        name="confpassword"  value="<?= old('confpassword'); ?>" placeholder="Repeat Password" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i> Daftar </button>
                            </form>
                            <hr>
                           
                            <div class="text-center">
                                <a class="small" href="/login">sudah punya akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="assets/startbootstrap/vendor/jquery/jquery.min.js"></script>
    <script src="assets/startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/startbootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/startboostrap/js/sb-admin-2.min.js"></script>

</body>

</html>