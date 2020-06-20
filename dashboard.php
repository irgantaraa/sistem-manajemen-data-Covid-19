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
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-dark p-0" id="content" >
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="dashboard.php">
                    <div class="sidebar-brand-icon"><i class="fas fa-book-dead""></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Admin</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="dashboard.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="logout_admin.php"><i class="fas fa-door-open"></i><span>Logout</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        
        <div class="container-fluid">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" name="cari" type="text" placeholder="Cari Daerah">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Database Covid 19</h3>
                    </div>
                </div>
            </div>
            
            <div class="card shadow">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Info Covid</p>
                        </div>
                         <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="dashboard_add.php" style="margin-right: 50px;width: 110px; height: 30px">Tambah</a></div>
                 <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Lokasi</th>
                                            <th>Terkonfirmasi</th>
                                            <th>Sembuh</th>
                                            <th>Meninggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include "koneksi.php";
                                        if(isset($_GET['cari'])){
                                            $cari = $_GET['cari'];
                                            $query = "SELECT * FROM indonesia WHERE lokasi LIKE '%".$cari."%'";
                                        }
                                        else{
                                            $query = "SELECT * FROM indonesia";
                                        }
                                        $result = mysqli_query($connect, $query) or die(mysqli_error($connect));

                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>

                                            <tr>
                                                <td><?php echo $row['id_covid']; ?></td>
                                                <td><?php echo $row['lokasi']; ?></td>
                                                 <td><?php echo $row['confirmed']; ?></td>
                                                <td><?php echo $row['recovery']; ?></td>
                                                 <td><?php echo $row['death']; ?></td>
                                                 <td>
                                                    <div class="btn-group" role="group">
                                                        <a href='dashboard_edit.php?id=<?php echo $row['id_covid']; ?>'>
                                                            <button class="btn btn-info btn-sm d-none d-sm-inline-block" type="button" style="margin-right: 10px;width: 110px;height:30px;">Edit</button>
                                                        </a>
                                                        <a href='dashboard_delete.php?id=<?php echo $row['id_covid']; ?>'>
                                                            <button class="btn btn-danger btn-sm d-none d-sm-inline-block" type="button" style="margin-right: 10px;width: 110px;height:30px;">Hapus</button>
                                                        </a>
                                                    </div>
                                                </td>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
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