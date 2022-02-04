<?php

include('db.php');
$id = $_GET['id'];
$delete = "DELETE FROM vetement WHERE id = $id";
$run_data = mysqli_query($con,$delete);

if($run_data){
	header('location:index.php');
}else{
	echo "supprimer avec success";
}


?>