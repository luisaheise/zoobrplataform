<?php
session_start();
$_SESSION['ventre'] = filter_input(INPUT_GET, 'ventre');
echo "<script type='text/javascript'>window.top.location='https://zoobr.000webhostapp.com/bico.php';</script>";
?>