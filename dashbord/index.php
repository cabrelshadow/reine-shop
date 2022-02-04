<?php
session_start();

include('db.php');
/*if (empty($_SESSION['username'])) {
     
 header("location:../src/admin_login.php");

}*/


?>

<!DOCTYPE html>
<html>
<head>
	<title>reine shop</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.25/datatables.min.css"/>

</head>
<body>
	 <br>
	 <br>
	 <br>
	<div class="container jumbotron py-5">
		<h4 class="text-center">
		 ajouter des  vêtements ici
		   <span style="margin-left: 30px;">
		   	     <a href="#">
             <button class="btn btn-info btn-large" data-toggle="modal" data-target="#myModal">ajouter</button>
               <a href="logout.php">
             <button class="btn btn-info btn-large disconnect">se deconnecter</button>

		   	     	<i class="fa fa-plus" ></i></a>
		   </span>
		   <style>
		   	.disconnect{
		   		float: right;
		   	}
		   </style>
		</h4>
    <div class="container">
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">nom vetement</th>
			
        <th class="text-center">couleur</th>
          <th class="text-center">description</th>
				<th class="text-center">image</th>
        <th class="text-center">prix</th>
				<th class="text-center">Editer</th>
				<th class="text-center">supprimer</th>
			</tr>

			<?php
  $eleveparpage=3;
    $elevetotalid=$pdo->query("SELECT id FROM vetement");
     //selection des id
    $elevetotal=$elevetotalid->rowCount();

  
    $elevetotal=ceil($elevetotal/$eleveparpage);

    if (isset($_GET['page']) AND !empty($_GET['page'])) {
        //recuperation des id des la page par $_GET[]
        $_GET['page']=intval($_GET['page']);

        $pagecourante=$_GET['page'];
    }else{
       $pagecourante=1;
    }
 $depart=($pagecourante-1)*$eleveparpage;

        	$get_data = "SELECT * FROM vetement LIMIT $depart,$eleveparpage";
        	$run_data = mysqli_query($con,$get_data);
 
        	while($row = mysqli_fetch_array($run_data))
        	{
        		$id = $row['id'];
        		$nom = $row['nom_vetement'];
        		$couleur = $row['couleur'];
              $image = $row['image'];
        		$description = $row['description'];
            $prix = $row['prix'];

        	

        		echo "

        		<tr>
				<td class='text-center'>$id</td>
				<td class='text-center'>$nom</td>
				<td class='text-center'>$couleur</td>
        <td class='text-center'>$description</td>
				
				<td class='text-center'><img src='images/$image' style='width:50px; height:50px;'></td>
              <td class='text-center'>$prix</td>
				<td class='text-center'>
					<span>
					     <a href='#'>
					         <i class='fa fa-pencil fa-2x' data-toggle='modal' data-target='#edit$id' style='' aria-hidden='true'></i>
					    </a>
					</span>
					
				</td>
				<td class='text-center'>
					<span>
						<a href='#'>
						     <i class='fa fa-trash fa-2x' data-toggle='modal' data-target='#$id' style='' aria-hidden='true'></i>
						</a>
					</span>
					
				</td>
			</tr>


        		";
        	}

        	?>

			
			
		</table>
	</div>

 <center>
  
   <?php 
//parcour du total de la page

 for ($i=1; $i<=$elevetotal; $i++) { 
   if ($i== $pagecourante) {
        echo $i.'';               
    
         }
      else{
 ?>


  <strong><a href="index.php?page=<?=$i ?>" class="pages" style="font-size: 20px; background: #404242;color:#fff; border-radius:500rem;text-decoration: none;">&nbsp;&nbsp;&nbsp;<?=$i ?>&nbsp;&nbsp;&nbsp;</a></strong>
             
  <?php } } ?>
  </center>  


	
	<!---Add in modal---->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">ajouter</h4>
      </div>
      <div class="modal-body">
        <form action="add.php" method="POST" enctype="multipart/form-data" required>



        	<div class="form-group">
        		<label>Nom vetement</label>
        		<input type="text" name="nom" class="form-control" placeholder="nom equipement" required>
        	</div>

        	<div class="form-group">
        		<label>description</label>
        		<textarea class="form-group form-control " cols="45" name="description" required></textarea>
      
        	</div>
            <div class="form-group">
            <label>couleur</label>
            <textarea class="form-group form-control " cols="45" name="couleur" required></textarea>
      
          </div>

        	
           <div class="form-group">
            <label>prix vetement</label>
            <input type="text" name="prix" class="form-control" placeholder="prix du vtement" required>
          </div>
        	

        	<div class="form-group">
        		<label>Image</label>
        		<input type="file" name="image" class="form-control"  required>
        	</div>

        	
        	 <input type="submit" name="submit" class="btn btn-info btn-large" value="enregistrer">
        	
        	
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">fermer</button>
      </div>
    </div>

  </div>
</div>


<!------DELETE modal---->




<!-- Modal -->
<?php

$get_data = "SELECT * FROM vetement";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	echo "

<div id='$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title text-center'>êtes vous sur de vouloir supprimé??</h4>
      </div>
      <div class='modal-body'>
        <a href='delete.php?id=$id' class='btn btn-danger' style='margin-left:250px'>Delete</a>
      </div>
      
    </div>

  </div>
</div>


	";
}


?>

<!----edit Data--->

<?php

$get_data = "SELECT * FROM vetement";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
              $id = $row['id'];
            $nom = $row['nom_vetement'];
            $couleur = $row['couleur'];
              $image = $row['image'];
            $description = $row['description'];
            $prix = $row['prix'];
          

            echo "


<div id='edit$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
             <button type='button' class='close' data-dismiss='modal'>&times;</button>
             <h4 class='modal-title text-center'>editer</h4> 
      </div>

      <div class='modal-body'>
        <form action='edit.php?id=$id' method='post' enctype='multipart/form-data'>

             
        	<div class='form-group'>
        		<label>Nom equipement</label>
        		<input type='text' name='nom' class='form-control' value='$nom' required>
        	</div>

        	<div class='form-group'>
        		<label>description</label>
        		<input type='text' name='couleur' class='form-control' value='$couleur' required>

        	</div>
          <div class='form-group'>
            <label>description</label>
            <input type='text' name='description' class='form-control' value='$description' required>

          </div>
            <div class='form-group'>
            <label>description</label>
            <input type='text' name='prix' class='form-control' value='$prix' required>

          </div>

        

        	<div class='form-group'>
        		<label>Image</label>
        		<input type='file' name='image' class='form-control' required>
        		<img src = 'images/$image' style='width:50px; height:50px'>
        	</div>

        	
        	 <input type='submit' name='submit' class='btn btn-info btn-large' value='enregistrer'>
        	



        </form>
      </div>

    </div>

  </div>
</div>


	";
}


?>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    	$(document).ready(function(){
    		$('table').DataTable();

    	});
	 
</script>
</body>
</html>