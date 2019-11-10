<?php
session_start();
$_SESSION['bico'] = filter_input(INPUT_GET, 'bico');
echo "<script type='text/javascript'>window.top.location='https://zoobr.000webhostapp.com/final.php';</script>";
?>