

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
            <li><a href="#" class="active">home</a></li>
            <li><a href="vetement.php">vetements</a></li>
            <li><a href="#apropos">a propros</a></li>
            <li><a href="inscription.php">s'inscrire</a></li>
            <li><a href="login.php">se connecter</a></li>
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
    <?php 
    session_start();
    if (empty($_SESSION['nom'])) {
        $nom=$_SESSION['nom'];
        echo"<h1>".$nom."</h1>"; 
 header("location:login.php");

}

    /*if (isset($_SESSION['nom'])) {
          $_SESSION['nom']=$userinfo['nom'];
        $nom=$_SESSION['nom'];
        echo"<h1>".$nom."</h1>"; 

    }
    else{
        echo "le nom n'existe pas";
    }*/
      
     ?>
    <!--=======header sart=======-->
    <header class="header">
        <div class="header-block">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, quibusdam.</h2>
            <button class="header-btn">Conctacter nous</button>
        </div>
    </header>
    <div class="contain">
        <div class="container">
            <div class="container-cards">
                <!-- <h1>Articles</h1> -->
                <div class="container-cards-card">
                    <div class="container-cards-card-img">
                        <img src="images/gallery-1.jpg" alt="">
                    </div>
                    <div class="container-cards-card-info">
                        <h2>Lorem, ipsum dolor.</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi expedita delectus maxime!</p>
                        <h3>100$</h3>
                    </div>
                </div>
                <div class="container-cards-card">
                    <div class="container-cards-card-img">
                        <img src="images/gallery-2.jpg" alt="">
                    </div>
                    <div class="container-cards-card-info">
                        <h2>Lorem, ipsum dolor.</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi expedita delectus maxime!</p>
                        <h3>100$</h3>
                    </div>
                </div>
            </div>
            <h1 id="apropos">La boutique</h1>
            <div class="container-description">
                <div class="container-description-img">
                    <img src="images/desc-2.jpg" alt="">
                </div>
                <div class="container-description-info">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt culpa similique id quam, temporibus aut deleniti dicta, consequuntur minus suscipit eius, iure repudiandae. Aliquam quidem facilis corrupti nobis ea distinctio sint delectus rerum vel. Sit numquam dolore ab in minima adipisci amet accusantium doloremque, voluptates porro non debitis itaque ut.</p>
                    <button>Acheter</button>
                </div>
            </div>
        </div>
    </div>

    <!--=============temoignage========================-->
            <div class="container-third">
            <h2>Patients feedbacks</h2>
            <div class="container-third-cards">
                <div class="third-card">
                    <img src="images/user-1.png" alt="">
                    <div>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, dignissimos iusto harum facilis hic quasi.</p>
                    <h2>M. Patient</h2>
                </div>
                <div class="third-card">
                    <img src="images/user-2.png" alt="">
                    <div>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, dignissimos iusto harum facilis hic quasi.</p>
                    <h2>M. Patient</h2>
                </div>
                <div class="third-card">
                    <img src="images/user-3.png" alt="">
                    <div>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half"></ion-icon>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, dignissimos iusto harum facilis hic quasi.</p>
                    <h2>M. Patient</h2>
                </div>
            </div>
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
<html>