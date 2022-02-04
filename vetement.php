<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="styles/index.css">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>
<body>
     <!--===========navigation =================-->
    <nav class="navigation">
        <div class="navigation-logo">
            <span>Reine shop</span>
        </div>
        <ul class="navigation-links">
            <li><a href="index.php">home</a></li>
            <li><a href="#" class="active">vetements</a></li>
            <li><a href="../#apropos">a propros</a></li>
            <li><a href="#">s'inscrire</a></li>
            <li><a href="#">se connecter</a></li>
        </ul>
        <ul class="navigation-options">
            <li><a href="#"><ion-icon name="cart"></ion-icon></a></li>
        </ul>
        <div class="burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <script>
            let container = document.querySelector('.burger');
            let n_links = document.querySelector('.navigation-links');
            container.addEventListener('click', () => {
                container.classList.toggle('active');
                n_links.classList.toggle('active');
            })
        </script> 
    </nav>
    <div class="header-vet">
        <div>
            <div>
            <p>Lorem ipsum</p>
        </div>
        <div>
            <p>Lorem, ipsum dolor.</p>
        </div>
        <div>
            <p>Lorem, ipsum.</p>
        </div>
        </div>
    </div>
 
         
    <div class="container-vet vet-cards">
                            <?php 
          include("dashbord/db.php");

          $sql="SELECT * FROM vetement";
          $run_data = mysqli_query($con,$sql);
 
          while($row = mysqli_fetch_array($run_data))
          {
            $id = $row['id'];
            $nom = $row['nom_vetement'];
            $couleur = $row['couleur'];
            $description = $row['description'];
            $prix = $row['prix'];
          
            $image = $row['image'];
           

      ?>
        <div class="container-cards vet-card">
                <!-- <h1>Articles</h1> -->
                <div class="container-cards-card">
                    <div class="container-cards-card-img">
                        <img src="dashbord/images/<?=$image?>" alt="">
                    </div>
                    <div class="container-cards-card-info">
                           <h2><?=$nom; ?></h2>
                        <p><?=$description;?></p>
                        <h2>couleur:&nbsp;<?=$couleur;?></h2>
                        <h3><?=$prix?></h3>
                  
                        <button>Acheter</button>
                    </div>
                </div>
        </div>
          <?php } ?>
  
    </div>

    <footer class="footer" id="footer">
        <div class="footer-container">
            <h2>Vous pouvez me suivre sur les réseaux sociaux</h2>
            <div class="footer-container-socials">
                <a href="https://twitter.com/ln_dev7?s=09" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="https://www.instagram.com/invites/contact/?i=md4mtcvgsrg4&utm_content=7zkbn8h" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
            </div>
            <p> &copy; Reine Shop • 2021 </p>
        </div>
    </footer>
</body>
</html>