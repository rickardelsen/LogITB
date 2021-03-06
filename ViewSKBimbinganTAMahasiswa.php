<?php
session_start();
    if(!isset($_SESSION['usedrole'])||(isset($_SESSION['usedrole'])&&$_SESSION['usedrole']!="Mahasiswa")){
        header("Location: index.php");
    }
    $_SESSION['status']='viewMhs';
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
                            <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
<!--                            <li class="active">Form Registrasi</li>-->
                        </ul>
                    </div>
                </div>
            </div>
	</section>
	<section id="content">
            <div class="container">
		<div class="row whitebgc">
                    <div class="col-lg-2">
                        <?php include './SideMenu.php';
                                $mhs = $_SESSION['mhs'];
                                unset($_SESSION['mhs']);
                                $sk = $_SESSION['sk'];
                                unset($_SESSION['sk']);?></div>
                    <div class="col-lg-10">
                        <h3>Data SK Bimbingan Tugas Akhir Mahasiswa</h3>
                        <div class="panel panel-primary">
                            <div class="panel-heading"><strong>Data SK Bimbingan Tugas Akhir</strong></div>
                            <div class="panel-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>NIM Mahasiswa</td>
                                        <td><?php echo $mhs['nim']; ?></td> 
                                    </tr>
                                    <tr>
                                        <td>Nama Mahasiswa</td>
                                        <td><?php echo $mhs['nama']; ?></td> 
                                    </tr>
                                    <tr>
                                        <td>No.SK Bimbingan TA</td>
                                        <td><?php echo $sk['nosk']; ?></td> 
                                    </tr>
                                    <tr>
                                        <td>Judul TA</td>
                                        <td><?php echo $sk['judul']; ?></td> 
                                    </tr>
                                    <tr>
                                        <td>Pembimbing 1</td>
                                        <td><?php echo $sk['p1']; ?></td> 
                                    </tr>
                                    <tr>
                                        <td>Pembimbing 2</td>
                                        <td><?php echo $sk['p2']; ?></td> 
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td><?php echo $sk['status']; ?></td> 
                                    </tr>
                                    <tr>
                                        <td>File</td>
                                        <td><?php echo "<a href=\"SK/".$sk['file']."\" target=\"_blank\">".$sk['file']."</a>" ?></td> 
                                    </tr>
                                </table>
                            </div>
                        </div>
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
<?php 
    if(isset($_SESSION['lapor'])){
        $x=$_SESSION['lapor']['count'];
        for($i=0;$i<$x;$i++){
            ?>
                <div id="myModal<?php echo $i; ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Detail Bimbingan</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                <table class="table table-bordered">
                                    <thead></thead>
                                    <tbody>
                                    <tr>
                                        <td>No</td>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['lapor']['nourut'][$i]; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['lapor']['tgl'][$i]; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Catatan</td>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['lapor']['lapor'][$i]; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Selanjutnya</td>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['lapor']['tglnext'][$i]; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Rencana Bimbingan</td>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['lapor']['lapornext'][$i]; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Pembimbing 1</td>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['lapor']['p1'][$i]; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Pembimbing 2</td>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['lapor']['p2'][$i]; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </p>
                            <div class="clear"></div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        </div>
                      </div>

                    </div>
                </div>
            <?php
        }
    }
?>
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