<!--SSTA1 Controller-->
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/LogITB/model/SyaratSeminarTA1.php';
    if(isset($_POST['add'])){
        $r = insert($_POST['nim'],$_POST['hadir'],$_POST['bimbi'],$_POST['tugas'],$_POST['tgl'],$_POST['ket']);
        if($r){
            session_start();
            $_SESSION['success']="Berhasil tambah SK.. :)";
            header('Location: ../AddSKBimbingan.php');
        }else{
//            session_start();
//            $_SESSION['fail']=$error;
//            header('Location: ../AddSKBimbingan.php');
        }
    }else{
        
    }
    if(isset($_SESSION['status'])){
        if($_SESSION['status']=="view"){
            $_SESSION['value'] = view();
        }
        if($_SESSION['status']=="collect"){
            $_SESSION['mhs']=viewMhs();
        }
    }
    
    if(isset($_POST['edit'])){
        $r = viewByID($_POST['id']);
      
        session_start();
        $_SESSION['data']=$r;
        header('Location: ../EditTA.php');
    }
    
    if(isset($_POST['aktif'])){
        $r = update($_POST['sk'], $_POST['aktif']);
        if($r){
            header('Location: ../ViewSKBimbingan.php');
        }
    }
    
    if(isset($_POST['delete'])){
        $r = delete($_POST['sk']);
        if($r){
            header('Location: ../ViewSKBimbingan.php');
        }
    }
?>

