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
			$sql = "SELECT DISTINCT ventre FROM aves";
			$result = $conn->query($sql);
		}	


?>
<div class="form">
<form method="get" action="registra_ventre.php">
<div class="texto">Cor do ventre</div>
<select name="ventre">
<?php
while($row = $result->fetch_assoc()) {
	$nat1 = $row['ventre'];
	echo "<option value='$nat1'> $nat1 </option>";
}
?>
</select>
</br>
<a href="dorso.php" class="voltar">Anterior</a>
<input type="submit" value="Próximo">
</form>
</div>
</body>
</html>