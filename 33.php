<?php
//panggil koneksi
include "66.php";
$id = $_POST['id'];
$nm = $_POST['nm'];
$jm= $_POST['jm'];
$pr = $_POST['pr'];
$kt = $_POST['kt'];
$al= $_POST['al'];
$hp = $_POST['hp'];
if (!empty($id) && !empty($nm) && !empty($jm) && !empty($pr) && !empty($kt) && !empty($al) && !empty($hp)) //cek jika data kosong
{
mysqli_query($con, "INSERT INTO haris(id,nm,jm,pr,kt,al,hp)
values('$id','$nm','$jm','$pr','$kt','$al','$hp')");
header('location:44.php');
} else 
{
	header('location:55.php');
}
?>