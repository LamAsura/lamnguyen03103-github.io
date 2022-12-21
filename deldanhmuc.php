<?php 
include_once "danhmucDAO.php";
$del = new danhmucDAO();
$del ->Del($_GET['madanhmuc']);
header("location:trangchu.php");
?>