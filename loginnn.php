<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form action="" method="post">		
		<table>
			<tr>
				<td>email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>pasword</td>
				<td><input type="pasword" name="pass"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="login"></td>
			</tr>
		</table>
	</form>
	<?php
		if(isset($_POST['login'])){
			include 'koneksi.php';
			$cek = mysqli_query($conn, "SELECT * FROM tb_user WHERE email =
			'".$_POST['email']."' AND password = '".$_POST['pass']."'");
			$row = mysqli_fetch_array($cek);
			$count = mysqli_num_rows($cek);
			if($count > 0){
				header('location:indexx.php');
			}else{
				echo 'email dan password salah';
			}
		}
	?>
	<br><br>
	belum punya akun? silahkan <a href="indexx.php">daftar</a>
	
	

</body>
</html>