<?php

include('db.php');

if(isset($_POST['submit'])){
	//$id = $_POST['id'];
	$nom = $_POST['nom'];
	$couleur = $_POST['couleur'];
	//$phone = $_POST['phone'];
	$description = $_POST['description'];
  $prix = $_POST['prix'];

	//image upload

	$msg = "";
	$image = $_FILES['image']['name'];
	//$target = "../images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], "./images/$image")){
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
    }

  $req="INSERT INTO vetement(nom_vetement,couleur,image,description,prix) VALUES(?,?,?,?,?)";
  $execute=$pdo->prepare($req);
 $stm= $execute->execute([$nom,$couleur,$image,$description,$prix]);
}
 header("location:index.php");
?>