<?php
session_start();
    if(!isset($_SESSION['usedrole'])||(isset($_SESSION['usedrole'])&&$_SESSION['usedrole']!="Admin")){
        if(!isset($_SESSION['usedrole'])||(isset($_SESSION['usedrole'])&&$_SESSION['usedrole']!="Wali")){
            header("Location: index.php");    
        } 
    }
$_SESSION['status']="view";
include 'controller/Mahasiswa.php';
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
                            <li><a href="DBAdmin.php">Admin</a></li>
                            <li class="active">Lihat Mahasiswa</li>
                        </ul>
                    </div>
                </div>
            </div>
	</section>
	<section id="content">
            <div class="container">
		<div class="row whitebgc">
                    <div class="col-lg-2"><?php include './SideMenu.php';?></div>
                    <div class="col-lg-10">
                        <h3>Data Mahasiswa</h3>
                        <table class="table table-bordered">
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>No. Telp</th>
                                <?php
                                    if(!isset($_SESSION['usedrole'])||(isset($_SESSION['usedrole'])&&$_SESSION['usedrole']=="Admin")){
                                    ?><th>Aksi</th>
                                <?php
                                } ?>
                                
                            </tr>
                            <?php
                                $val = $_SESSION['value'];
                                $x = count($val['nim']);
                                for($i=0;$i<$x;$i++){
                                    echo "<tr>";
                                    echo "<td>".$val['nim'][$i]."</td>";
                                    echo "<td>".$val['nama'][$i]."</td>";
                                    echo "<td>".$val['email'][$i]."</td>";
                                    echo "<td>".$val['alamat'][$i]."</td>";
                                    echo "<td>".$val['telp'][$i]."</td>";
                                    if(!isset($_SESSION['usedrole'])||(isset($_SESSION['usedrole'])&&$_SESSION['usedrole']=="Admin")){
                                        echo "<td class=\"middle\">";
                                        echo "<form action=\"controller/Mahasiswa.php\" method=\"POST\" enctype=\"multipart/form-data\">";
                                        echo "<div class=\"btn-group-vertical\">";
                                        echo "<input type=\"hidden\" name=\"nim\" value=".$val['nim'][$i]." class=\"btn btn-blue\" />";
                                        echo "<input type=\"submit\" name=\"edit\" value=\"Ubah\" class=\"btn btn-green\" />";
                                        echo "<input type=\"submit\" name=\"delete\" value=\"Hapus\" class=\"btn btn-red\" />";
                                        echo "</div>";
                                        echo "</form>";
                                        echo "</td>";
                                    }
                                    echo "</tr>";
                                }
                            ?>
                        </table>
                    </div>
                    <div class="col-lg-2"></div>
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