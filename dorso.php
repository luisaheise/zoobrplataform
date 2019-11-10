<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<body>
<div class="conteudo">
<a href="index.html"><div class="logo"></div></a>
</div>
<?php
session_start();
		$host = "localhost";
		$dbusername = "id11533851_aves";
		$dbpassword = "zoobrvencedor";
		$dbname = "id11533851_aves";
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		if (mysqli_connect_error()){
			die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
		}else{
			$sql = "SELECT DISTINCT dorso FROM aves";
			$result = $conn->query($sql);
		}		
?>
<div class="form">
<form method="get" action="registra_dorso.php">
<div class="texto">Cor do Dorso</div>
<select name="dorso">
<?php
while($row = $result->fetch_assoc()) {
	$nat1 = $row['dorso'];
	echo "<option value='$nat1'> $nat1 </option>";
}
?>
</select>
<input type="submit" value="Próximo" style="float: right;">
</form>
</div>
</body>
</html>