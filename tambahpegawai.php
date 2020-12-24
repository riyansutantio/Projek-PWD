<!DOCTYPE html>
<html>
<head>
    <?php  
       require 'config.php';
       //menampilkan data pegawai
        $result = mysqli_query($conn, "SELECT * FROM pegawai");
        
    ?>
	<title>Human Resource Management</title>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.ico">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" /> -->
	<!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="css/demo.css" rel="stylesheet" />
</head>
<body>
	<div class="wrapper">
        <!-- Side Bar -->
        <div class="sidebar" data-image="img/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="real.php" class="simple-text">
                      Human Resource Management
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="DataPegawai.php">
                            <i class="nc-icon nc-icon nc-paper-2"></i>
                            <p>Data Pegawai</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="DataGaji.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Data Gaji Pegawai</p>
                        </a>
                    </li>
                        <li>
                        <a class="nav-link" href="DataPresensi.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Data Presensi Pegawai</p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="javascript:;">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Setting</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end SideBar -->
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo">Template</a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Edit Data</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="tambahpegawai.php">Tambah Data</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <!-- isi Content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="section">
                        <p align="center" class="content-data">Tambah Data Pegawai</p>  
                        <form method="POST" action="tambahpegawai.php" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $id;?>">
                            <center>
                                <table>
                                    <tr>
                                        <td>
                                            <label>Nama Pegawai</label></td>
                                        <td>
                                            <input type="text" name="nama" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>NIP</label></td>
                                        <td>
                                            <input type="text" name="nip" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Jenis Kelamin</label></td>
                                        <td>
                                            <input type="text" name="jenis_kelamin" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>alamat</label></td>
                                        <td>
                                            <input type="text" name="alamat" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>no hp</label></td>
                                        <td>
                                            <input type="text" name="no_hp" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>divisi</label></td>
                                        <td>
                                            <select name='divisi'>
                                                <option value="">---Pilih Divisi---</option>
                                                <?php  
                                                    $sql = "SELECT*FROM divisi";
                                                    $retval = mysqli_query($conn,$sql);
                                                    while ($row = mysqli_fetch_array($retval)) {
                                                        echo "<option value='$nama_divisi'>($row[nama_divisi])</option>";
                                                    }
                                                ?>
                                            </select><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>    
                                            <input type="submit" name="submit" value="Tambah Data"></input>
                                        </td>
                                    </tr>
                                </table>
                                <hr>
                                <p align="center" class="content-data">Data Pegawai</p>  
                                <table class="table">
                                <thead>
                                    <tr>
                                      <th scope="col">ID</th>
                                      <th scope="col">Nama Pegawai</th>
                                      <th scope="col">NIP</th>
                                      <th scope="col">Jenis Kelamin</th>
                                      <th scope="col">Alamat</th>
                                      <th scope="col">No Hp</th>
                                      <th scope="col">Divisi</th>
                                    </tr>
                                </thead>
                                <?php  
                                    $i =1;
                                    while ($row = mysqli_fetch_array($result)) { ?>
                                        <tbody>
                                            <td><?= $i ?></td>
                                            <td><?= $row["nama"]; ?></td>
                                            <td><?= $row["nip"]; ?></td>
                                            <td><?= $row["jenis_kelamin"]; ?></td>
                                            <td><?= $row["alamat"]; ?></td>
                                            <td><?= $row["no_hp"]; ?></td>
                                            <td><?= $row["divisi"]; ?></td>
                                            <?php $i++; } ?>
                                        </tbody>
                                        </table>
                            </center>
                        </form>
                            <?php  
                                error_reporting(E_ALL^E_NOTICE);
                                $nama = $_POST['nama'];
                                $nip = $_POST['nip'];
                                $jenis_kelamin = $_POST['jenis_kelamin'];
                                $alamat = $_POST['alamat'];
                                $no_hp = $_POST['no_hp'];
                                $divisi = $_POST['divisi'];
                                $submit = $_POST['submit'];

                                $insert ="INSERT INTO pegawai(id, nama, nip, jenis_kelamin, alamat, no_hp, divisi) VALUES ('','$nama','$nip','$jenis_kelamin','$alamat','$no_hp','$divisi')"; 

                                if (isset($submit)) {
                                    mysqli_query($conn,$insert);
                                    echo "<script>
                                        alert('Data berhasil ditambahkan');
                                        document.location.href='DataPegawai.php';
                                    </script>";
                                }
                            ?>
                    </div>
                </div>
            </div>
            <!-- end content -->
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="">Creative Tim</a>, made with love for tugas PWD
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="js/core/popper.min.js" type="text/javascript"></script>
<script src="js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
<!--  Chartist Plugin  -->
<script src="js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="js/demo.js"></script>
</html>