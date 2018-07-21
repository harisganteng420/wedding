<?php

//buat koneksi MySQL untuk user:root tnp password, alamat:localhost
$con=mysqli_connect("localhost","root","","db_bolang");

if (mysqli_connect_errno($con))
{
//klo gagal
echo "Koneksi dengan MySQL GAGAL: ".mysqli_connect_error();
} 
else {
echo "Terimakasih sudah membeli barang kami:)<br>";
}
?>