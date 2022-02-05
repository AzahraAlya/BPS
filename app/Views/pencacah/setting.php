<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Change Password</title>

    <!-- Custom fonts for this template-->
    <link href="assets/startbootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/startbootstrap/css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body class="bg-gradient-white">

    <div class="container">

    <div class="row justify-content-center mt-5 pt-lg-5">

        <div class="col-xl-8 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body p-lg-5 p-0">
                 
                    <div class="col-lg-12">
                        <div class="p-3">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Ubah Password</h1>
                            </div>
                           

                            <form class="user" action = "/setting" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" readonly id="Kode_Mitra" value="<?= $pencacah['Kode_Mitra'] ?>">
                                </div>
                             
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" placeholder="Password"  name="password" id="password" value="">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" placeholder="Confirm Password" name="password_confirm" id="password_confirm" value="" >
                                    </div>
                                </div>
                                
                         
                                <!-- <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i> Daftar </button> -->
                                <div class ='from-group'>
                                    <input type="submit" name="update" value="Update" class="btn btn-primary btn-sm">
                                    <a href = "/pencacah" class = "btn btn-sm btn-danger">Kembali</a>
                                </div>
                            </form>
                            <hr>
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