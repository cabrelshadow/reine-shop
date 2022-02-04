<?php
$con=mysqli_connect('127.0.0.7','root','','reine_shop');
if(!$con){
	die('error to connect on de datebase');
}else{
	}


 $pdo= new PDO('mysql:dbname=reine_shop;host=localhost','root','');

   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>