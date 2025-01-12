<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
  $username=$_POST["username"];
  include('admin/dbconnect.php');
  $sql="select * from login where username='$username'";
  $res=mysqli_query($conn,$sql);
  if(!$row=mysqli_fetch_array($res))
  {
?>
<script type="text/javascript">
alert("Invalid Username");
document.location="login.php";
</script>
<?php  
  }
  $password=$row["password"];
  $hint_qtn=$row["hintq"];
  $hint_ans=$row["hinta"];
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Ayushman co-operative society</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Trendz Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->
	<!--/Style-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--//Style-CSS -->
</head>

<body>
	<!-- /login-section -->

	<section class="w3l-forms-23">
		<div class="forms23-block-hny">
			<div class="wrapper">
				<h1>Forget Password</h1>
				if logo is image enable this   
					<a class="logo" href="index.html">
					  <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
					</a> 
				-->
				<div class="d-grid forms23-grids">
					<div class="form23">
						<div class="main-bg">
							<h6 class="sec-one"></h6>
							<div class="speci-login first-look">
								<img src="images/user.png" alt="" class="img-responsive">
							</div>
						</div>
						<div class="bottom-content">
			<h2>Enter Your Hint Answer </h2>
			<form action="get_password.php" method="post">
				<input name="hint_ans" type="hidden" class="input-form" value="<?php echo $hint_ans; ?>">
				<input name="password" type="hidden" value="<?php echo $password; ?>">	
				<div class="pom-agile">
					
					 <?php echo $hint_qtn; ?>
				</div>
				<div class="pom-agile">
					<span class="fa fa-user-o" aria-hidden="true"></span>
					<input placeholder="Hint Answer" name="hint_ans1" class="user" type="text" required="">
				</div>
				
				<div class="sub-w3l">
					
					<div class="clear"></div>
				</div>
				<div class="right-w3l">
					<input type="submit" value="Get_Password">
				</div>
				
			</form>
	  
						</div>
					</div>
				</div>
				<div class="w3l-copy-right text-center">
					<p> Ayushman co_operative society | Design by
						<a href="#">Ranjith Patil & Prathvish Devadiga</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- //login-section -->
</body>

</html>