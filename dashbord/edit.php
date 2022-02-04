<?php
include('db.php');
$id = $_GET['id'];

if(isset($_POST['submit']))
{
	$nom = $_POST['nom'];
	$couleur = $_POST['couleur'];
	//$phone = $_POST['phone'];
	$description = $_POST['description'];
	$prix = $_POST['prix'];
        	

	
	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

	$update = "UPDATE vetement SET nom_vetement='$nom', couleur= '$couleur',image ='$image', description= '$description', prix= '$prix' WHERE id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
		header('location:index.php');
	}else{
		echo "Data not update";
	}
}

?>