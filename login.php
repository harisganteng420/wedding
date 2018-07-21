<!DOCTYPE html>
<html lang="en">
<head>
<title>Wedding | Contact Us</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/ie6_script_other.js"></script>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page5">
<!-- START PAGE SOURCE -->
<div class="extra">
  <div class="main">
    <header>
      <nav>
        <ul id="menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="photos.php">Photos</a></li>
          <li><a href="details.php">Details</a></li>
          <li><a href="links.php">Links</a></li>
          <li id="menu_active" class="bg_none"><a href="login.php">Login</a></li>
        </ul>
      </nav>
      <h1><a href="index.html" id="logo">Wedding personal page</a></h1>
    </header>
    <section id="content">
      <article class="col1">
        <h2><span>Contact</span> Form</h2>
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
				header('location:index.html');
			}else{
				echo 'email dan password salah';
			}
		}
	?>
	<br><br>
	belum punya akun? silahkan <a href="indexx.php">daftar</a>
	
      </article>
      <article class="col2 pad_left1">
        <h2><span>Contact</span> Us</h2>
        <div class="wrapper pad_top1">
          <p class="cols"> Country:<br>
            City:<br>
            Telephone:<br>
            Email: </p>
          <p> USA<br>
            San Diego<br>
            +354 5635600<br>
            <a href="#">wedding@mail.com</a> </p>
          <h2><span>Miscellaneous</span> Info</h2>
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</p>
        </div>
      </article>
    </section>
  </div>
  <div class="block"></div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2010 <a href="#">SiteName</a> - All Rights Reserved</p>
    <p class="rf">Design by <a href="http://www.templatemonster.com/">TemplateMonster</a></p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>