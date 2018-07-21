<!doctype html>



<center><img src="11.jpg" height="200" width="175" alt="Img"></center> <CENTER>Harga : Rp 120.000</center><center>ID barang : 420</center></a>
<html>
<head>
</head>
<body>
<script>
function masukkanid()
{
if(document.f.id.value=="")
{
alert("anda belum memasukkan id");
}
}
function masukkannama()
{
if (document.f.nama.value=="")
{
alert("anda belum memasukkan nama");
}
}
function masukkanjumlah()
{
if(document.f.jumlah.value=="")
{
alert("anda belum memasukkan jumlah");
}
}
function masukkanalamat()
{
if(document.f.alamat.value=="")
{
alert("anda belum memasukkan alamat");
}
}
function terimakasih()
{
if((document.f.id.value!="")&&(document.f.nama.value!="")&&(document.f.jumlah.value!="")&&(document.f.alamat.value!=""))
{
alert("Terima Kasih Telah mengisi data");
}
else
alert("Mohon Data Di Lenkapi");
}



</SCRIPT>
<h3 align="center"><marquee>R E G I S T R A S I</h1></marquee>
<hr width="600" color="black" noshade size="2">
<CENTER>


<TABLE>
<form name="f"  id="f"method="post" action="33.php">
<tr>
<td width="31%">id</td>
<td width="7%">:</td>
<td width="62%"><input type ="text" name="id"
OnFocus="window.status='Silahkan Mengisi id Anda';"
OnBlur="masukkanid()"></td>
</tr>

<tr>
<td width="31%">nama</td>
<td width="7%">:</td>
<td width="62%"><input type ="text" name="nm"
OnFocus="window.status='Silahkan Mengisi nama Anda';"
OnBlur="masukkannama()"></td>
</tr>

<tr>
<td width="31%">jumlah</td>
<td width="7%">:</td>
<td width="62%"><input type ="text" name="jm"
OnFocus="window.status='Silahkan Mengisi jumlah Anda';"
OnBlur="masukkanjumlah()"></td>

<tr>
<td width="31%">provinsi</td>
<td width="7%">:</td>
<td width="62%"><select name="pr">
<option>DKI Jakarta</option>
<option>Bali</option>
<option>Bangka Belitung</option>
<option>Banten</option>
<option>Bengkulu</option>
<option>Di Yogyakarta</option>
<option>Gorontalo</option>
<option>"26">Jambi</option>
<option>Jawa Barat</option>
<option>Jawa Tengah</option>
<option>Jawa Timur</option>
<option>Kalimantan Barat</option>
<option>Kalimantan Selatan</option>
<option>Kalimantan Tengah</option>
<option>Kalimantan Timur</option>
<option>Kepulauan Riau</option>
<option>Lampung</option>
<option>Maluku</option>
<option>Maluku Utara</option>
<option>Nanggroe Aceh Darussalam (Nad)</option>
<option>Nusa Tenggara Barat (Ntb)</option>
<option>Nusa Tenggara Timur (Ntt)</option>
<option>Papua</option>
<option>Papua Barat</option>
<option>Riau</option>
<option>Sulawesi Barat</option>
<option>Sulawesi Selatan</option>
<option>Sulawesi Tengah</option>
<option>Sulawesi Tenggara</option>
<option>Sulawesi Utara</option>
<option>Sumatera Barat</option>
<option>Sumatera Selatan</option>
<option>Sumatera Utara</option>
</select></td>
</tr>

        
        </div>
    </div>
    <div>
<tr>
<td width="31%">kota</td>
<td width="7%">:</td>
<td width="18%"><select name="kt">
<option value="">Pilih</option>
<option>Kab. Belitung Timur</option>
<option>Kab. Belitung</option>
<option>Kab. Bangka Tengah</option>
<option>Kab. Bangka Selatan</option>
<option>Kab. Bangka Barat</option>
<option>Kab. Bangka</option>
<option>Kota Pangkal Pinang</option></select>
</td><size="23">
</tr>

<tr>
<td width="31%">alamat</td>
<td width="7%">:</td>
<td width="62%"><textarea type ="text" name="al"
OnFocus="window.status='Silahkan Mengisi alamat Anda';"
OnBlur="masukkanalamat()"></textarea></td>
</tr>
        

<tr>
<td width="31%">no hp</td>
<td width="7%">:</td>
<td width="62%"><input type ="text" name="hp"></td>
</tr>


        </div>
		

</TABLE>
<hr width="600" color="black" noshade size="2">
<p><input type="submit" value="Beli"><input type="reset" value="reset"></P>

