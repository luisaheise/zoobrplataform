<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css">
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
        $bico = $_SESSION['bico'];
        $dorso = $_SESSION['dorso'];
        $ventre = $_SESSION['ventre'];
		if (mysqli_connect_error()){
			die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
		}else{
			$sql = "SELECT * FROM aves WHERE bico = '$bico' AND ventre = '$ventre' AND dorso = '$dorso'";
			$result = $conn->query($sql);
		}			
?>
<div class='ave'>
<h1>
Possíveis espécies:
</h1>
<?php
while($row = $result->fetch_assoc()) {
    $nome = $row['vulgar'];
    echo "<h2> $nome </h2></br>";
    $image = $row['image_path'];
    echo "<div class='image'><img src='pics/$image'/></div>";
    $cientifico = $row['cientifico'];
    echo "<div class='atributo'><h6>Nome(s) Cientificos: </h6></br> $cientifico </br></br></div>";
    $bico = $row['bico'];
    echo "<div class='atributo'><h6>Bico:</h6> </br> $bico </br></br></div>";
    $ventre = $row['ventre'];
    echo "<div class='atributo'><h6>Ventre:</h6> </br> $ventre </br></br></div>";
    $dorso = $row['dorso'];
    echo "<div class='atributo'><h6>Dorso:</h6></br> $dorso </br></br></div>";
    $detalhe = $row['detalhe'];
    echo "<div class='detalhes'><h6 style='margin-top:10px'>Detalhes:</h6> </br> $detalhe </br></br></div>";
}
?>
</div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<?php
die($conn);
?>
</body>
</html>