<?php
session_start();

$_SESSION['status']="view";
include 'controller/User.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Log ITB</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
         <?php
            include($_SERVER['DOCUMENT_ROOT'] . "/LogITB/Menu.php");
        ?>
	</header>
	<!-- end header -->
	<section id="inner-headline">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                            <li class="active">Home</li>
                        </ul>
                    </div>
                </div>
            </div>
	</section>
	<section id="content">
            <div class="container">
		<div class="row">
                    <div class="jumbotron">
                        <h1>Selamat Datang</h1>
                        <p>
                        Hak akses anda telah ditetapkan oleh sistem, jika anda merasa hak akses tidak sesuai dengan peran anda silahkan hubungi
                        <strong>Tata Usaha Akademik</strong>
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <div id="images_hz" class="col-lg-3">
                            <h3>Hak Akses</h3>  
                            <form action="checker.php" method="POST" enctype="multipart/form-data">

                                <?php
                                    if(in_array("Admin", $_SESSION['role'])){
                                ?>
                                <div>
                                    <button class = "btn btn-default etalaseButton" type="submit" name="Admin" value="Admin"><img src="img/icon etalase/Admin Icon.png" alt="Mountain View" style="width:150px;height:150px;"></button>
                                    <h4 class="text-center" style="margin-top:20px;">Admin Sistem</h4>
                                </div>
                                <?php
                                    }
                                    if(in_array("TU_Akademik", $_SESSION['role'])){
                                ?>
                                <div>
                                    <button class = "btn btn-default  etalaseButton" type="submit" name="TU_Akademik" value="TU_Akademik"><img src="img/icon etalase/TU Akademik Icon.png "alt="Mountain View" style="width:150px;height:150px;"></button>
                                     <h4 class="text-center" style="margin-top:20px;">TU Akademik</h4>
                                </div>
                                <?php
                                    }
                                    if(in_array("Mahasiswa", $_SESSION['role'])){
                                ?>
                                <div>
                                    <button class = "btn btn-default  etalaseButton" type="submit" name="Mahasiswa" value="Mahasiswa"><img src="img/icon etalase/Mahasiswa Icon 2.png" alt="Mountain View" style="width:150px;height:150px;"></button>
                                     <h4 class="text-center" style="margin-top:20px;">Mahasiswa</h4>
                                </div>
                                <?php
                                    }
                                    if(in_array("Pembimbing_TA", $_SESSION['role'])){
                                ?>
                                <div>
                                    <button class =  "btn btn-default etalaseButton" type="submit" name="Pembimbing_TA" value="Pembimbing_TA"><img src="img/icon etalase/Pembimbing Icon.png" alt="Mountain View" style="width:150px;height:150px;"></button>
                                     <h4 class="text-center" style="margin-top:20px;">Pembimbing Tugas Akhir</h4>
                                </div>
                                <?php
                                    }
                                    if(in_array("Penguji_TA", $_SESSION['role'])){
                                ?>
                                <div>
                                    <button class = "btn btn-default  etalaseButton" type="submit" name="Penguji_TA" value="Penguji_TA"><img src="img/icon etalase/penguji Icon.png"alt="Mountain View" style="width:150px;height:150px;"></button>
                                     <h4 class="text-center" style="margin-top:20px;">Penguji Tugas Akhir</h4>
                                </div>
                                 <?php
                                    }
                                    if(in_array("Pembimbing_KP", $_SESSION['role'])){
                                ?>
                                <div>
                                    <button class = "btn btn-default  etalaseButton" type="submit" name="Pembimbing_KP" value="Pembimbing_KP"><img src="img/icon etalase/Pembimbing Icon.png"alt="Mountain View" style="width:150px;height:150px;"></button>
                                     <h4 class="text-center" style="margin-top:20px;">Pembimbing Kerja Praktek</h4>
                                </div>
                                 <?php
                                    }
                                    if(in_array("Penguji_KP", $_SESSION['role'])){
                                ?>
                                <div>
                                    <button class = "btn btn-default  etalaseButton" type="submit" name="Penguji_KP" value="Penguji_KP"><img src="img/icon etalase/penguji Icon.png"alt="Mountain View" style="width:150px;height:150px;"></button>
                                     <h4 class="text-center" style="margin-top:20px;">Penguji Kerja Praktek</h4>
                                </div>
                                 <?php
                                    }
                                    if(in_array("Tim_TA", $_SESSION['role'])){
                                ?>
                                <div>
                                    <button class = "btn btn-default  etalaseButton" type="submit" name="Tim_TA" value="Tim_TA"><img src="img/icon etalase/team-icon.png "alt="Mountain View" style="width:150px;height:150px;"></button>
                                     <h4 class="text-center" style="margin-top:20px;">Tim Tugas Akhir</h4>
                                </div>
                                <?php
                                    }
                                    if(in_array("Tim_KP", $_SESSION['role'])){
                                ?>
                                <div>
                                    <button class = "btn btn-default  etalaseButton" type="submit" name="Tim_KP" value="Tim_KP"><img src="img/icon etalase/team-icon.png"alt="Mountain View" style="width:150px;height:150px;"></button>
                                     <h4 class="text-center" style="margin-top:20px;">Tim Kerja Praktek</h4>
                                </div>
                                <?php
                                    }
                                    if(in_array("Tim_Kemahasiswaan", $_SESSION['role'])){
                                ?>
                                <div>
                                    <button class = "btn btn-default  etalaseButton" type="submit" name="Tim_Kemahasiswaan" value="Tim_Kemahasiswaan"><img src="img/icon etalase/team-icon.png"alt="Mountain View" style="width:150px;height:150px;"></button>
                                     <h4 class="text-center" style="margin-top:20px;">Tim Kemahasiswaan</h4>
                                </div>
                                <?php
                                    }
                                    if(in_array("Wali", $_SESSION['role'])){
                                ?>
                                <div>
                                    <button class = "btn btn-default  etalaseButton" type="submit" name="Wali" value="Wali"><img src="img/icon etalase/Wali Icon.png"alt="Mountain View" style="width:150px;height:150px;"></button>
                                     <h4 class="text-center" style="margin-top:20px;">Dosen Wali</h4>
                                </div>
                                <?php
                                    }
                                    if(in_array("Kaprodi", $_SESSION['role'])){
                                ?>
                                <div>
                                    <button class = "btn btn-default  etalaseButton" type="submit" name="Kaprodi" value="Kaprodi"><img src="img/icon etalase/Kaprodi Icon.png"alt="Mountain View" style="width:150px;height:150px;"></button>
                                     <h4 class="text-center" style="margin-top:20px;">Kapordi</h4>
                                </div>
                                <?php
                                    }
                                ?>
                            </form>
                        </div>
                        <div class="col-lg-9">
                        <h3>Pengumuman</h3>
                        <?php
//                            $post = $_SESSION['post'];
//                            $x = count($post['id']);
//                            for($i=0;$i<$x;$i++){
//                                echo "<div class=\"well\">";
//                                echo "<h4 class=\"judulpengumuman\">".$post['judul'][$i]."</h4>";
//                                echo "<p class=\"subjudulpenguman\"><strong>oleh ".$post['author'][$i]." pada tanggal ".$post['tgl1'][$i]."</strong></p>";
//                                echo "<p>".$post['isi'][$i]."</p>";
//                                echo "</div>";
//                            }
                        ?>
                        
                        </div>
                    </div>
		</div>
            </div>
	</section>
	<footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
<!--                        <div class="widget">
                            <h5 class="widgetheading">Info Lebih Lanjut</h5>
                            <address>
                                <strong>Contact Person: Dian Ramadhani</strong><br>
                                Institut Teknologi Bandung<br>
                                Labtek V Jl. Ganesha 10 Bandung
                            </address>
                            <p>
                                <i class="icon-phone"></i> +62-85265863357 (a.n. Dian Ramadhani) <br/>
                                <i class="icon-phone"></i> +62-22-2508135 (a.n. Fazat Nur Azizah)<br/>
                                Fax: +62-22-2500940 <br/>
                                <i class="icon-envelope-alt"></i> dse@informatika.org <br/>
                                Facebook fan page	: DSE Days
                            </p>
                        </div>-->
                    </div>
                    <div class="col-lg-3">
<!--                        <div class="widget">
                            <h5 class="widgetheading">Pages</h5>
                            <ul class="link-list">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="registrasi.html">Registrasi</a></li>
                                <li><a href="contact.html">Hubungi Kami</a></li>
                            </ul>
                        </div>-->
                    </div>
                    <div class="col-lg-3">
<!--                        <div class="widget">
                            <h5 class="widgetheading">Kegiatan DSE Days</h5>
                            <ul class="link-list">
                                <li>Tutorial on Software Engineering in DevOps Context</li>
                                <li>Konferensi Nasional Rekayasa Data</li>
                                <li>Seminar dan Workshop Pendidikan Rekayasa Perangkat Lunak</li>
                                <li>Tutorial on Data Analytics and Visualization</li>
                            </ul>
                        </div>-->
                    </div>
                    <div class="col-lg-3">
<!--                        <div class="widget">
                            <h5 class="widgetheading">Link</h5>
                            <div class="flickr_badge">
                                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
                            </div>
                            <div class="clear">
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>