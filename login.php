<?php 
include('dashbord/db.php');

session_start();
 


     if (isset($_POST['login'])) {
          $err=[];
        if (empty($_POST['email'])) {

      $err['username']="veillez entrez votre email";
    }
         if (empty($_POST['password'])) {
      $err['password']="veillez entrez votre motde passe";
    }else{
      $email=$_POST['email'];    
       
      $password=$_POST['password'];
      $mpd=sha1($password);


      $requser=$pdo->prepare("SELECT * FROM inscription WHERE email=? AND password=?");
      $requser->execute([$email,$mpd]);
      $userexist= $requser->rowCount();
      if ($userexist ==1) {
          $userinfo= $requser->fetch();
          $_SESSION['id']=$userinfo['id'];
          $_SESSION['nom']=$userinfo['nom'];
          $_SESSION['password']=$userinfo['password'];
         
          header("location:index.php");


      }
      else{
        $err[]="login ou mot de passe incorrect";
      }
    }

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
    height: 400px;
    margin: auto;
    background-color: rgb(228,222,222);
    border-radius: 3px;
    margin-top:50px;
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

          <?php if(!empty($err)): ?>
          <center>
          <div class="alert alert-danger">
         
           <ul>
            <?php foreach($err as $errs): ?> 
              <div class="alert alert-danger"><?=$errs;?></div>
            <?php endforeach;?>
           </ul>
           </div>
           </center>
         <?php endif; ?>

	 	<h1>se connecter</h1>
	 	
	 	<form action="" method="post">
	 	
	 	
	 		<label for="">email</label>
	 		<input type="email" placeholder="votre nom" name="email">
	 		
	 		<label for="">mot de passe</label>
	 		<input type="password" placeholder="votre nom" name="password">
	 		<input type="submit" value="se connecter" name="login">
	 	</form>
	      <p>vous n'avez pas de compte? <a href="inscription.php">cree un compte ici</a></p>

	 </div>
	
</body>
</html>