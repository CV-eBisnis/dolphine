<?php include('akses.php'); ?>
<html>
<head>
	<title>Dholpine</title>
</head>
<body>
 
	<div style="text-align:center">
		<h2>Dholpine</h2>
		<p><a href="index.php">Home</a> / <a href="../logout.php">Logout</a></p>
 
		<p>Selamat datang di Toko Dholpine, Anda Login dengan username <?php echo $_SESSION['guest']; ?></p>
	</div>
 
</body>
</html>