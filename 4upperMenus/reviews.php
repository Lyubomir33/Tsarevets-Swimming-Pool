<!DOCTYPE html>
<html id="reviews" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="../css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="icon" type="image/x-icon" href="/images/по-нова_снимка-removebg-preview.png">
  <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/unicons.css">
  <link rel="stylesheet" href="/css/reviews.css">
  <link rel="stylesheet" href="../css/headerNavbar.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/contactUs.css">
  <title>Мнения</title>
</head>
<body id="bodyReviews">


<header class="header">
    <nav class="navbar navbar-expand-sm navbar-light" id="neubar">
    <div class="container">
    <div style="display: flex;">
        
        <a class="logo" class="navbar-brand" href="/index.php"><img class="oldImage" src="../images/по-нова_снимка-removebg-preview.png">СКП ЦАРЕВЕЦ</a>

        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span  id="menuReviews"  onclick="changeMenuIcon()" class="navbar-toggler-icon" ></span>
          <i id="xReviews" onclick="changeXIcon()" class="fa-solid fa-x" style="color: #000000; border: none; "></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">

          <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="./4upperMenus/forTheClub.php">ЗА КЛУБА</a>
            </li>

            
            <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="./4upperMenus/newsMainPage.php">НОВИНИ</a>
            </li>

          <li class="nav-item">
              <a id="" class="nav-link mx-2 btnStyle" href="/4upperMenus/events.php">РЕЗУЛТАТИ</a>
            </li>

          
            
            <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="/4upperMenus/reviews.php">ОТЗИВИ</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>


  </header>

 




<?php include "./contactUs.php"; ?>

  <div class="cleintsReviews">
      МНЕНИЯ НА КЛИЕНТИ
  </div>

  <div class="wrapper">
      <div class="box">
        <i class="fas fa-quote-left quote"></i>
        <p>Реших да запиша 8 годишната си дъщеря и с ръка на сърцето мога да кажа, че това беше страхотно решение.
          Теди обожава да плува! Водата е топла, а треньорите са страхотни. Препоръчвам!
        </p>
        <div class="content">
          <div class="info">
            <div class="name">Мария Йорданова</div>
            <div class="job">Брокер</div>
            <div class="stars">
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
            </div>
          </div>

        </div>
      </div>
      <div class="box">
        <i class="fas fa-quote-left quote"></i>
        <p>Запознах се с Дидо покрай футбола. Реших да пробвам плуване при него и горещо препоръчвам на всеки да го направи.
          Чувствам се много добре и сънят ми доста се подобри.
        </p>
        <div class="content">
          <div class="info">
            <div class="name">Любомир Стоянов</div>
            <div class="job">Програмист</div>
            <div class="stars">
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="box">
        <i class="fas fa-quote-left  quote"></i>
        <p>Всеки ден говоря с много хора и обичам да ходя да плувам понякога.
          След плуването се чувствам релаксирана и спокойна.
          Условията в залата са добри и цените са достъпни.
        </p>
        <div class="content">
          <div class="info">
            <div class="name">Ивелина Таева</div>
            <div class="job">Учителка</div>
            <div class="stars">
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
            </div>
          </div>
        </div>
      </div>
    </div>



   
 


<?php include "../footer.php" ?>



  
<script >
    
    
    const menu = document.getElementById('menuReviews');
    const xMenu = document.getElementById('xReviews');

    function changeMenuIcon() {
      xMenu.style.display = "block";
      menu.style.display = "none";
    }

    function changeXIcon() {
      xMenu.style.display = "none";
      menu.style.display = "block";
    }


   
	

    </script>



  <script src="./js/bootstrap.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/0e55d70a76.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>