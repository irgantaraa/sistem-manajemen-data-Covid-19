<?php
session_start();
include 'koneksi.php';
if ( $_SESSION['username']) {
    ;
  
}else {
  echo "Login Gagal:(";
       header("location:login_admin.php");}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-dark p-0" id="content">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="dashboard.php">
                    <div class="sidebar-brand-icon"><i class="fas fa-user"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Admin</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="dashboard.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="logout_admin.php"><i class="fas fa-door-open"></i><span>Logout</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" name="cari" type="text" placeholder="Search Manger">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                    </div>
                </nav>

                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Daerah Covid</p>
                        </div>
                        <div class="card-body">
                                <form method="post" action="dashboard_add_aksi.php">
                                    <div class="form-group">
                                        <label>
                                            <strong>Lokasi</strong>
                                            <br>
                                        </label>
                                        <input class="form-control" type="text" name="Lokasi1">
                                    </div>
                                     <div class="form-group">
                                        <label>
                                            <strong>Terkonfirmasi</strong>
                                            <br>
                                        </label>
                                        <input class="form-control" type="text" name="Terkonfimarsi">
                                    </div>
                                     <div class="form-group">
                                        <label>
                                            <strong>Sembuh</strong>
                                            <br>
                                        </label>
                                        <input class="form-control" type="text" name="Sembuh1">
                                    </div>
                                     <div class="form-group">
                                        <label>
                                            <strong>Meninggal</strong>
                                            <br>
                                        </label>
                                        <input class="form-control" type="text" name="Meninggal1">
                                    </div>
                                    <div class="form-group"><button class="btn btn-success btn-sm" type="submit">Simpan</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>