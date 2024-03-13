<?php
    require_once("database.php");
    $id=$_POST['stock'];
    $id2=$_POST['id_p'];
    $id3=$_POST['no_id'];

    $sql2=updatedata("barang",$id);
    if ($sql2) {
        header("location:barang.php");
    }
    
    $sq32=updatedata("peminjam",$id2);
    if ($sql32) {
        header("location:peminjam.php");
    }

    $sql42=updatedata("admin",$id3);
    if ($sql42) {
        header("location:admin.php");
    }
?>