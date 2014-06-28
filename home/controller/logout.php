<?php session_start();
require '../../common/kint/Kint.class.php';
$result = session_destroy();
//KINT::dump($result);
header("Location:../view/index.php");
?>