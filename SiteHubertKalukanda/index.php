<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditionHubertKalukanda</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- custom javascript link  -->
    <script src="js/script.js" defer></script>

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <img src="images/monlogo.jpg" width="90" height="70" alt="monlogo"> </a>

    <nav class="navbar">
        <a href="#home"> Accueil </a>
        <a href="Legislation.html"> Legislation </a>
		 <a href="Jurisprudence.html"> Jurisprudence </a>
        <a href="boutique.html" class= > E-Boutique </a>
        <a href="Doctrine LGA.html"> Doctrine RJA </a>
        <a href="#blogs" > Actualités </a>
		
         
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="Recherche..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="slide active" style="background:url(images/ban.png) no-repeat; background-size: cover; background-position: center;">
        <div class="content">
            <span>Bienvenu(e)s</span>
            
        </div>
    </div>

    <div class="slide" style="background:url(images/ban2.png) no-repeat; background-size: cover; background-position: center;">
        <div class="content">
            
        </div>
    </div>

    <div id="next-slide" onclick="next()" class="fas fa-angle-right"></div>
    <div id="prev-slide" onclick="prev()" class="fas fa-angle-left"></div>

</section>

<!-- home section ends -->

<!-- category section starts  -->

<section class="category">

    <div class="box-container">

        <a href="#" class="box">
            <img src="images/category-1.png" alt="">
            <h3>christmas decorations</h3>
        </a>

        <a href="#" class="box">
            <img src="images/category-2.png" alt="">
            <h3>christmas decorations</h3>
        </a>

        <a href="#" class="box">
            <img src="images/category-3.png" alt="">
            <h3>christmas decorations</h3>
        </a>

        <a href="#" class="box">
            <img src="images/category-4.png" alt="">
            <h3>christmas decorations</h3>
        </a>

        <a href="#" class="box">
            <img src="images/category-5.png" alt="">
            <h3>christmas decorations</h3>
        </a>

        <a href="#" class="box">
            <img src="images/category-6.png" alt="">
            <h3>christmas decorations</h3>
        </a>

    </div>

</section>

<!-- category section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="images/rja.png" alt="">
    </div>

    <div class="content">
        <div class="box">
            <h3>Revue rja</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim non quas blanditiis minima consectetur hic, molestias recusandae, debitis voluptate saepe voluptas ipsa deleniti ullam illum optio magnam adipisci quo illo?</p>
            <a href="Doctrine LGA.html" class="btn">Cliquez ici</a>
        </div>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-tree"></i>
                <p>christmas trees</p>
            </div>
            <div class="icons">
                <i class="fas fa-cookie"></i>
                <p>christmas cookies</p>
            </div>
            <div class="icons">
                <i class="fas fa-gifts"></i>
                <p>christmas gifts</p>
            </div>
        </div>
    </div>

</section>

<!-- about section ends -->



<!-- banner section starts  -->

<section class="banner">

    <div class="content">
        <span>special offre</span>
        <h3>jusq'à 50% de reduction</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, numquam.</p>
        <a href="boutique.html" class="btn">E-Boutique</a>
    </div>

</section>

<!-- banner section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading"> Doctrine	</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/CONTACT.png" alt="">
            <div class="content">
                <h3>merry christmas</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis, quasi!</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="images/CONTAC.png" alt="">
            <div class="content">
                <h3>merry christmas</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis, quasi!</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="images/Édition.png" alt="">
            <div class="content">
                <h3>merry christmas</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis, quasi!</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="images/.jpg" alt="">
            <div class="content">
                <h3>merry christmas</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis, quasi!</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="images/.jpg" alt="">
            <div class="content">
                <h3>merry christmas</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis, quasi!</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="images/.jpg" alt="">
            <div class="content">
                <h3>merry christmas</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis, quasi!</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- message sections starts  -->

<section class="message" id="message">

    <form action="">
        <h3>Entrer en Contact</h3>
        <input type="text" placeholder="nom et prenom" class="box">
        <input type="email" placeholder="email" class="box">
        <input type="number" placeholder="telephone" class="box">
        <textarea name="" placeholder="message" class="box" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="envoyer message" class="btn">
    </form>

</section>

<!-- message section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

       <h1 class="heading">Actualités</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/book1.png" alt="">
            </div>
            <div class="content">
                <div class="date">
                    <h3>21</h3>
                    <span>jan</span>
                </div>
                <a href="#" class="user"> <i class="fas fa-user"></i> by admin </a>
                <a href="#" class="title"> Titre du blog... </a>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, laborum!</p>
                <a href="#" class="btn">lire la suite </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/book2.jpg" alt="">
            </div>
            <div class="content">
                <div class="date">
                    <h3>19</h3>
                    <span>feb</span>
                </div>
                <a href="#" class="user"> <i class="fas fa-user"></i> by admin </a>
                <a href="#" class="title"> Titre du blog... </a>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, laborum!</p>
                <a href="#" class="btn">lire la suite</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="date">
                    <h3>02</h3>
                    <span>aug</span>
                </div>
                <a href="#" class="user"> <i class="fas fa-user"></i> by admin </a>
                <a href="#" class="title"> Titre du blog... </a>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, laborum!</p>
                <a href="#" class="btn">lire la suite</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- services section starts  -->

<section class="service">

    <div class="box">
        <img src="images/icon-1.png" alt="">
        <h3>free delivery</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, deserunt?</p>
    </div>

    <div class="box">
        <img src="images/icon-2.png" alt="">
        <h3>secure payments</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, deserunt?</p>
    </div>

    <div class="box">
        <img src="images/icon-3.png" alt="">
        <h3>24/7 support</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, deserunt?</p>
    </div>

</section>

<!-- services section ends -->
<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Liens</h3>
            <a class="link" href="#home"> <i class="fas fa-angle-right"></i> Accueil</a>
            <a class="link" href="Apropos.html"> <i class="fas fa-angle-right"></i> A propos</a>
            <a class="link" href="boutique.html"> <i class="fas fa-angle-right"></i> E-boutique</a>
            <a class="link" href="#message"> <i class="fas fa-angle-right"></i> message</a>
            <a class="link" href="#blogs"> <i class="fas fa-angle-right"></i> blogs</a>
			<a class="link" href="accueil.php"> <i class="fas fa-angle-right"></i> Se connecter Admin</a>
        </div>

        <div class="box">
            <h3>Nos Service</h3>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> my favorite </a>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> my order </a>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> my wishlist </a>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> private policy </a>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> terms of use </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a class="link" href="#"> <i class="fas fa-phone"></i> +243 99 55 93 572 </a>
            <a class="link" href="#"> <i class="fas fa-phone"></i> +243 99 55 93 572 </a>
            <a class="link" href="#"> <i class="fas fa-envelope"></i> Hubert.kalukanda@gmail.com </a>
            <a class="link" href="#"> <i class="fas fa-map"></i> 53, av Maniema, lubumbashi-rdc</a>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
				<a href="#" class="fab fa-whatsapp"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>Abonnez-vous pour nos derniers mise a jour</p>
            <form action="">
                <input type="email" name="" placeholder="enter your email" id="" class="email">
                <input type="submit" value="S'abonnez" class="btn">
            </form>
        </div>

    </div>

    <div class="credit"> created by <span>Martin Ndomba</span> | all rights reserved! </div>

</section>


<!-- footer section ends -->

</body>
</html>
