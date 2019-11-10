<?php
session_start();
$dorso = filter_input(INPUT_GET, 'dorso');
$_SESSION['dorso'] = $dorso;
echo "<script type='text/javascript'>window.top.location='https://zoobr.000webhostapp.com/ventre.php';</script>";
?>