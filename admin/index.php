<?php
session_start(); 
//KONEKSI DATABADE
$koneksi= new mysqli("localhost","root","","salamwisata");

if (!isset($_SESSION['admin'])) 
{
    echo "<script>alert('anda belum login');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}

 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Salam Wisata Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
     <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> -->
    <!-- DATA TABLES -->
    <!-- <link href="assets/dataTables/datatables.min.css" rel="stylesheet" /> -->
     <!-- JQUERY SCRIPTS -->
    <!-- <script src="assets/js/jquery-1.10.2.js"></script> -->

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-cls-top navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php" style="font-size: 24px">SALAM WISATA</a> 
            </div>
            <div style="color: white;
                padding: 15px 50px 5px 50px;
                float: right;
                font-size: 14px;"> Last access : Tomorrow &nbsp; 
                <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> 
            </div>
        </nav>  

        <!-- /. NAV TOP  -->
                <nav class="navbar-inverse navbar-side fixed-top" role="navigation" style="margin-top: 10px">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard"></i> Home</a>
                    </li> 
                    <li>
                        <a  href="index.php?halaman=pesanan"><i class="fa fa-shopping-cart"></i> Pesanan</a>
                    </li>
                    <li>
                        <a  href="index.php?halaman=laporan_pemesanan"><i class="fa fa-tags"></i> Laporan Pemesanan</a>
                    </li>
                    <li>
                        <a  href="index.php?halaman=paket"><i class="fa fa-book"></i> Paket </a>
                    </li>
                     <li>
                        <a  href="index.php?halaman=hotel"><i class="fa fa-user"></i> Hotel</a>
                    </li>
                    <li>
                        <a  href="index.php?halaman=transportasi"><i class="fa fa-user"></i> Transportasi</a>
                    </li>
                    <li>
                        <a  href="index.php?halaman=galeri"><i class="fa fa-user"></i> Galeri</a>
                    </li>
                     <li>
                        <a  href="index.php?halaman=logout"><i class="fa fa-sign-out"></i> LogOut</a>
                    </li>
                  
                </ul>
               
            </div>
            
        </nav> 
         
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" style="margin-top: 50px">
            <div id="page-inner">
                <?php 
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="pesanan") 
                    {
                        include 'pesanan.php';
                    }
                    elseif ($_GET['halaman']=="laporan_pemesanan") 
                    {
                        include 'laporan_pemesanan.php';
                    }
                    elseif ($_GET['halaman']=="destinasi") 
                    {
                        include 'destinasi.php';
                    }
                    elseif ($_GET['halaman']=="tambah_destinasi") 
                    {
                        include 'tambah_destinasi.php';
                    }
                    elseif ($_GET['halaman']=="edit_destinasi") 
                    {
                        include 'edit_destinasi.php';
                    }
                    elseif ($_GET['halaman']=="hapus_destinasi") 
                    {
                        include 'hapus_destinasi.php';
                    }
                    elseif ($_GET['halaman']=="hapus_destinasi_foto") 
                    {
                        include 'hapus_destinasi_foto.php';
                    }
                    elseif ($_GET['halaman']=="detail_destinasi") 
                    {
                        include 'detail_destinasi.php';
                    }
                    elseif ($_GET['halaman']=="paket") 
                    {
                        include 'paket.php';    
                    }
                    elseif ($_GET['halaman']=="tambah_paket") 
                    {
                        include 'tambah_paket.php';    
                    }
                    elseif ($_GET['halaman']=="edit_paket") 
                    {
                        include 'edit_paket.php';    
                    }
                    elseif ($_GET['halaman']=="hapus_paket") 
                    {
                        include 'hapus_paket.php';    
                    }
                    elseif ($_GET['halaman']=="hapus_paket_foto") 
                    {
                        include 'hapus_paket_foto.php';    
                    }
                    elseif ($_GET['halaman']=="detail_paket") 
                    {
                        include 'detail_paket.php';    
                    }
                    elseif ($_GET['halaman']=="hotel") 
                    {
                        include 'hotel.php';
                    }
                    elseif ($_GET['halaman']=="tambah_hotel") 
                    {
                        include 'tambah_hotel.php';
                    }
                    elseif ($_GET['halaman']=="edit_hotel") 
                    {
                        include 'edit_hotel.php';
                    }
                    elseif ($_GET['halaman']=="hapus_hotel") 
                    {
                        include 'hapus_hotel.php';
                    }
                    elseif ($_GET['halaman']=="hapus_hotel_foto") 
                    {
                        include 'hapus_hotel_foto.php';
                    }
                    elseif ($_GET['halaman']=="detail_hotel") 
                    {
                        include 'detail_hotel.php';
                    }
                    elseif ($_GET['halaman']=="transportasi") 
                    {
                        include 'transportasi.php';
                    }
                    elseif ($_GET['halaman']=="tambah_transportasi") 
                    {
                        include 'tambah_transportasi.php';
                    }
                    elseif ($_GET['halaman']=="edit_transportasi") 
                    {
                        include 'edit_transportasi.php';
                    }
                    elseif ($_GET['halaman']=="hapus_transportasi") 
                    {
                        include 'hapus_transportasi.php';
                    }
                    elseif ($_GET['halaman']=="hapus_transportasi_foto") 
                    {
                        include 'hapus_transportasi_foto.php';
                    }
                    elseif ($_GET['halaman']=="detail_transportasi") 
                    {
                        include 'detail_transportasi.php';
                    }
                    elseif ($_GET['halaman']=="galeri") 
                    {
                        include 'galeri.php';
                    }
                    elseif ($_GET['halaman']=="tambah_galeri") 
                    {
                        include 'tambah_galeri.php';
                    }
                    elseif ($_GET['halaman']=="edit_galeri") 
                    {
                        include 'edit_galeri.php';
                    }
                    elseif ($_GET['halaman']=="detail_galeri") 
                    {
                        include 'detail_galeri.php';
                    }
                    elseif ($_GET['halaman']=="hapus_galeri") 
                    {
                        include 'hapus_galeri.php';
                    }
                    elseif ($_GET['halaman']=="hapus_foto_galeri") 
                    {
                        include 'hapus_foto_galeri.php';
                    }
                    elseif ($_GET['halaman']=="logout") 
                    {
                        include 'logout.php';
                    }
                }
                else 
                {
                    include 'home.php';
                }
                ?>
                
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    
     <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
     <!-- METISMENU SCRIPTS -->
    <!-- <script src="assets/js/jquery.metisMenu.js"></script> -->
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
     <!-- CUSTOM SCRIPTS -->
    <!-- <script src="assets/js/custom.js"></script> -->
     <!-- DATA TABLES -->
    <script src="assets/dataTables/datatables.min.js"></script>
    <script src="assets/dataTables/datatables.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#datatables').DataTable();
            $('#datatabless').DataTable({
                // scrollY : '400px',
                dom : 'Bfrtip',
                buttons : [
                {
                    extend : 'pdf',
                    oriented : 'potrait',
                    pageSize : 'Legal',
                    title : 'Data Pembelian',
                    download : 'open'
                },
                'csv','excel','print','copy'
                ]
            });
        } );
    </script>
    
   
</body>
</html>
