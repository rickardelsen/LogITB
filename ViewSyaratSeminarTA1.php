<?php
session_start();
    if(!isset($_SESSION['usedrole'])||(isset($_SESSION['usedrole'])&&$_SESSION['usedrole']!="TU_Akademik")){
        header("Location: index.php");
    }
//$_SESSION['status']="viewMhs";
//include 'controller/Mahasiswa.php';
//unset($_SESSION['mhs']);
//unset($_SESSION['sk']);
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
                            <li class="active">Form Registrasi</li>
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
                        <h3>Data Syarat Seminar Tugas Akhir 1</h3>
                        <table class="table table-bordered">                 
                            <tr>
                                <th>NIM Peserta</th>
                                <th>Nama Peserta</th>
                                <th>Jumlah Hadir Kuliah</th> 
                                <th>Jumlah Bimbingan</th>
                                <th>Jumlah Tugas Tambahan</th>
                                <th>Persetujuan Pembimbing 1</th>
                                <th>Persetujuan Pembimbing 2</th>
                                <th>Tgl Laporan Masuk</th>
                                <th>Aksi</th>
                            </tr>
                            <tr class="middle">
                                 <td>(NIM Peserta)</td>
                                 <td>(Nama Peserta)</td>
                                 <td>(Jumlah Hadir Kuliah)</td>
                                 <td>(Jumlah Bimbingan)</td>
                                 <td>(Jumlah Tugas Tambahan)</td>
                                 <td>(Persetujuan Pembimbing 1)</td>
                                 <td>(Persetujuan Pembimbing 2)</td>
                                 <td>(Tgl Laporan Masuk)</td>
                                 <td>
                                    <div class="btn-group-vertical">
                                        <button type="submit" class="btn btn-blue" data-toggle="modal" data-target="#modalDetailSyaratSeminar">Detail</button>
                                        <button type="submit" class="btn btn-green">Ubah</button>
                                        <button type="submit" class="btn btn-red">Hapus</button>
                                    </div>
                                 </td>
                                    <!--<td><input type="submit" name="detail" value="Detail" class="btn btn-blue"/></td>-->
                            </tr>
                            
                            <tr class="middle">
                                 <td>(Peserta)</td>
                                 <td>(Nama Peserta)</td>
                                 <td>(Jumlah Hadir Kuliah)</td>
                                 <td>(Jumlah Bimbingan)</td>
                                 <td>(Jumlah Tugas Tambahan)</td>
                                 <td>(Persetujuan Pembimbing 1)</td>
                                 <td>(Persetujuan Pembimbing 2)</td>
                                 <td>(Tgl Laporan Masuk)</td>
                                 <td>
                                    <div class="btn-group-vertical">
                                        <button type="submit" class="btn btn-blue">Detail</button>
                                        <button type="submit" class="btn btn-green">Ubah</button>
                                        <button type="submit" class="btn btn-red">Hapus</button>
                                    </div>
                                 </td>
                                    <!--<td><input type="submit" name="detail" value="Detail" class="btn btn-blue"/></td>-->
                            </tr>
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

    <div id="modalDetailSyaratSeminar" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Detail Syarat Seminar Tugas Akhir 1</h4>
                </div>
                <div class="modal-body">
                   <table class="table table-bordered">
                                    <tr>
                                        <td>NIM Peserta</td>
                                        <td>(NIM Peserta)</td> 
                                    </tr>
                                    <tr>
                                        <td>Nama Peserta</td>
                                        <td>(Nama Peserta)</td> 
                                    </tr>
                                    <tr>
                                        <td>Jumlah Hadir Kuliah</td>
                                        <td>(Jumlah Hadir Kuliah)</td> 
                                    </tr>
                                    <tr>
                                        <td>Jumlah Bimbingan</td>
                                        <td>(Jumlah Bimbingan)</td> 
                                    </tr>
                                    <tr>
                                        <td>Jumlah Tugas Tambahan</td>
                                        <td>(Jumlah Tugas Tambahan)</td> 
                                    </tr>
                                    <tr>
                                        <td>Persetujuan Pembimbing 1</td>
                                        <td>(Persetujuan Pembimbing 1)</td> 
                                    </tr>
                                    <tr>
                                        <td>Persetujuan Pembimbing 2</td>
                                        <td>(Persetujuan Pembimbing 2)</td> 
                                    </tr>
                                    <tr>
                                        <td>Tgl Laporan Masuk</td>
                                        <td>(Tgl Laporan Masuk)</td> 
                                    </tr>
                                </table>
                                <div class="form-group">
                                <label for="ket">Keterangan Syarat Seminar</label>
                                <textarea name="keterangan" id="keterangan" class="form-control" rows="6" readonly="readonly"></textarea>
                                </div>
                    <div class="clear"></div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
              </div>

            </div>
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