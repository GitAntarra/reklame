<!DOCTYPE html>
<html>
<head>
	<title> RAN REKLAME & DIGITAL PRINTING </title>
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
</head>
<body>
	<?php 
	$user = $this->session->userdata('user_login');
	// print_r($user['username']);
	?>
	<!---- NAV BAR ---->
	<nav class="navbar navbar-default">
		<div class="container">
			<ul class="nav navbar-nav">
				<li><a href="<?= base_url(); ?>"><img width="150" src="<?= base_url() ?>/assets/img/ran reklame.png" alt=""></a></li>
				<li><a href="<?= base_url(); ?>">Home</a></li>
				<li><a href="chart.php?username=<?= $user['username'] ?>">Cart</a></li>
				<li <?php if(isset($user['nama'])) { echo 'style="display: none;"';}?>
				><a href="login.php">Login</a></li>
				<li><a href="cekstruck.php">Checkout</a></li>
				<li><a href="<?= base_url() ?>auth/logout"> Logout </a></li>
			</ul>
		</div>
	</nav>

<!----KONTEN--->
<?= isset($content) ? $content : null ?>


 <!---FOOTER--->
 <footer>
 	 <div class="footer-bottom">
 	 	<p> Copyright : Nursih Oke </p>
 	 </div>
 </footer>
	</body>
</html>