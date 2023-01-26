<?php
session_start();
if (!isset($_SESSION['login'])) {header ('Location: index.php');exit();}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EditionHubertKalukanda</title>

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="css/membre.css">
  <link rel="stylesheet" href="css/media_queries.css">
  <link rel="stylesheet" href="css/animation.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700;800;900&family=Roboto:wght@400;500&display=swap"
    rel="stylesheet">

</head>

<body>
 <!--
        - #COURSE CATEGORY SECTION
      -->

      <section class="category">

        <p class="section-subtitle">ESPACE MEMBRE</p>

        <h2 class="section-title">Bienvenue <?php echo htmlentities(trim($_SESSION['login'])); ?> !</h2>

        <ul class="course-item-group">

          <li class="course-category-item">

            <div class="wrapper">
              <img src="css/images/course-category-icon-1.png" alt="" class="category-icon default">

              <img src="css/images/course-category-icon-1-w.png" alt=""
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="blog.html">Voir Votre boutique</a>
              </h3>

              <p class="category-subtitle"> Et les livres</p>
            </div>

          </li>


          <li class="course-category-item">

            <div class="wrapper">
              <img src="css/images/course-category-icon-2.png" alt="" class="category-icon default">

              <img src="css/images/course-category-icon-2-w.png" alt=""
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="">Ajouter Livre</a>
              </h3>

              <p class="category-subtitle">Dans Voutre E-Boutique</p>
            </div>

          </li>


          <li class="course-category-item">

            <div class="wrapper">
              <img src="css/images/course-category-icon-3.png" alt="" class="category-icon default">

              <img src="css/images/course-category-icon-3-w.png" alt=""
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="envoie.php">Ajouter un Article</a>
              </h3>

              <p class="category-subtitle">Dans votre blog</p>
            </div>

          </li>


          <li class="course-category-item">

            <div class="wrapper">
              <img src="css/images/course-category-icon-4.png" alt="" class="category-icon default">

              <img src="css/images/course-category-icon-4-w.png" alt=""
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="#">Voir les mail</a>
              </h3>

          
            </div>

          </li>


          <li class="course-category-item">

            <div class="wrapper">
              <img src="css/images/course-category-icon-5.png" alt="" class="category-icon default">

              <img src="css/images/course-category-icon-5-w.png" alt=""
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="index.php">Retournez au page d'accuiel</a>
              </h3>

          
            </div>

          </li>


          <li class="course-category-item">

            <div class="wrapper">
              <img src="css/images/course-category-icon-6.png" alt="" class="category-icon default">

              <img src="css/images/course-category-icon-6-w.png" alt=""
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="deconnexion.php">Déconnexion</a>
              </h3>

              <p class="category-subtitle"></p>
            </div>

          </li>

        </ul>

      </section>
	</body>
</html>	