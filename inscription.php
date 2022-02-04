
<?php 
 include("dashbord/db.php");
 if (isset($_POST['inscrire'])) {

   $nom=$_POST['nom'];
   $prenom=$_POST['prenom'];
   $password=$_POST['password'];
   $taille=$_POST['taille'];
   $email=$_POST['email'];
   $mot_pass=sha1($password);
  
  $req="INSERT INTO inscription(nom ,prenom,taille,password,email) VALUES(?,?,?,?,?)";
  $execute=$pdo->prepare($req);
 $stm= $execute->execute([$nom,$prenom,$taille,$mot_pass,$email]);
 echo "<center>inscription effectué avec success !</center>";
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title>inscription</title>
</head>
<style>
	body{
		font-family:'Roboto',sans-serif;
	}
	.sigup-box{
    width: 360px;
    height: 620px;
    margin: auto;
    background-color: rgb(228,222,222);
    border-radius: 3px;
}
h1{
	padding-top:15px;
	text-align: center; 
}
h4{
	text-align: center;
}
form{
	width: 300px;
	margin-left: 20px;
}
form label{
	display: flex;
	margin-top: 20px;
	font-size: 18px;
}
form input{
	width: 100%;
	padding: 7px;
	border: none;
	border:1px solid gray;
	border-radius: 6px;
	outline: none;

}
input[type="submit"]{
	width: 320px;
	height: 35px;
	margin-top: 20px;
	border:none;
	background: #7834c7;
	font-size: 15px;
}
p{
	text-align: center;
	padding-top: 20px;
	font-size: 15px;
}
</style>
<body>
	 <div class="sigup-box" >
	 	<h1>Inscription</h1>
	 	<h4>c'est gratuit et sa prend qu'une minute</h4>
	 	<form action="" method="post">
	 		<label for="">nom</label>
	 		<input type="text" placeholder="votre nom" name="nom">
	 		<label for="">Prenom</label>
	 		<input type="text" placeholder="votre prenom" name="prenom">
	 		<label for="">taille</label>
	 		<input type="text" placeholder=" votre taille" name="taille">
	 		<label for="">email</label>
	 		<input type="email" placeholder="votre nom" name="email">
	 		
	 		<label for="">mot de passe</label>
	 		<input type="password" placeholder="votre mot de passe" name="password">
	 		<input type="submit" value="s'inscrire" name="inscrire">
	 	</form>
	      <p>avez-vous deja un compte? <a href="login.php">se connecter ici</a></p>

	 </div>
	
</body>
</html>