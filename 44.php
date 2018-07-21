<html>
<head>
</head>
<body background="z.png">
<?php
include "66.php"; ?>
<br><br><br><br><br>
<center>
<table width="600" border="1" cellspacing="0" cellpadding="0">

<tr>
<th align="center" >No</th>
<th>id</th>
<th>nama</th>
<th>jumlah</th>
<th>provinsi</th>
<th>kota</th>
<th>alamat</th>
<th>hp</th>
<th>ubah</th>
<th>upload bukti</th>
<a href="11.php">Kembali ke home</a>
</tr></center>

<?php
$i = 0;
$query = mysqli_query($con,"SELECT * FROM haris order by id");
while ($m = mysqli_fetch_array($query))
{ $i++;
?>
<tr>
<td align="center"><?php print $i; ?></td>
<td><?php print $m['id']; ?></td>
<td><?php print $m['nm']; ?></td>
<td><?php print $m['jm']; ?></td>
<td><?php print $m['pr']; ?></td>
<td><?php print $m['kt']; ?></td>
<td><?php print $m['al']; ?></td>
<td><?php print $m['hp']; ?></td>
<td><a href="1UpdatePinjam.php?id=<?php print $m['id'] ?>">Edit</a> | <a href="2Delete.php?id=<?php print $m['id'] ?>">Hapus</a></td>
<td><form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="foto" id="foto">
	<input type="submit" value="Upload Image" name="submit">
</form></td></tr>

<?tr>
<?php
}
?>
</table>
</body>
</html>