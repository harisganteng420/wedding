<?php
// panggil koneksi
include "66.php";
$id = $_GET['id'];

if (!empty($id)){
mysqli_query($con, "DELETE FROM haris WHERE id ='$id' ");
header('location:2Daftar.php');
} else
{
	header('location:2Daftar.php');
}
?>