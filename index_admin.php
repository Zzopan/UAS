<?php
session_start();
include 'koneksi.php';
if($_SESSION['sesi']==""){
  header("location:index.php");
}else{
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM INFORMASI PERPUSTAKAAN</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/sb-admin.css" rel="stylesheet">
</head>
<body>

    <div id="wrapper">
        
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">PERPUSTAKAAN KAMPUS</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
              
            </ul>

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index_admin.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-book"></i>Data Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index_admin.php?p=anggota">Anggota</a>
                                </li>
                                <li>
                                    <a href="index_admin.php?p=buku">Buku</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart"></i> Transaksi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index_admin.php?p=pinjam">Peminjaman</a>
                                </li>
                                <li>
                                    <a href="index_admin.php?p=kembali">Pengembalian</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list-alt"></i> Laporan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               
                                <li>
                                    <a href="index_admin.php?p=rp">Peminjaman</a>
                                </li>
                                <li>
                                    <a href="index_admin.php?p=rk">Pengembalian</a>
                                </li>
                            </ul>
                        </li>
                       
                        <li>
                            <a href="#"><i class="fa fa-list-alt"></i> Profil<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               
                                <li>
                                    <a href="index_admin.php?p=profil_shafwan">Muhammad Raffi Shafwan</a>
                                </li>
                                <li>
                                    <a href="index_admin.php?p=profil_nopal">Muhammad Naufal</a>
                                </li>
                                <li>
                                    <a href="index_admin.php?p=profil_nadya">Nadya Putri Dwinta</a>
                                </li>
                            </ul>
                        </li> 
                        <li>
                            <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
			$pages_dir='pages';
			if(!empty($_GET['p'])){
				$pages=scandir($pages_dir,0);
				unset($pages[0],$pages[1]);
				$p=$_GET['p'];
				if(in_array($p.'.php',$pages)){
					include($pages_dir.'/'.$p.'.php');
				}else{
					echo'Halaman Tidak Ditemukan';
				}
			}else{
				include($pages_dir.'/home.php');
			}
		?>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/js/sb-admin.js"></script>
</body>
</html>
<?php } ?>