<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="../../css/headerNavbar.css">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/reviews.css">
 
  <link rel="icon" type="image/x-icon" href="/images/по-нова_снимка-removebg-preview.png">

  <title>Блог</title>
</head>

<body>

  <header class="header">
  <nav class="navbar navbar-expand-lg navbar-light" id="neubar">
    <div class="container">
        <div style="display: flex;">
        
    <a class="logo" class="navbar-brand" href="/index.php"><img alt="logo-article" id="logoInArticles" class="oldImage" src="../../images/по-нова_снимка-removebg-preview.png"><span class="tsarevets-name">СКП ЦАРЕВЕЦ</span></a>

        </div>
        <button id="navBtn" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span id="menu" onclick="changeMenuIcon()" class="navbar-toggler-icon"></span>
          <i id="xxx" onclick="changeXIcon()" class="fa-solid fa-x"></i>
        </button>



        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul id="menusTop" class="navbar-nav ms-auto ">

          <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="../../4upperMenus/forTheClub.php">ЗА КЛУБА</a>
            </li>

            <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="../../4upperMenus/team.php">ЕКИП</a>
            </li>


            <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="../../4upperMenus/newsMainPage.php">НОВИНИ</a>
            </li>

            <li class="nav-item">
              <a id="one"  class="nav-link mx-2 btnStyle" href="../../4upperMenus/events.php">РЕЗУЛТАТИ</a>
            </li>

            <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="/4upperMenus/reviews.php">ОТЗИВИ</a>
            </li>

            <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="../../4upperMenus/partners.php">ПАРТНЬОРИ</a>
            </li>


            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <script>
     const menu = document.getElementById('menu');
  const xMenu = document.getElementById('xxx');

  function changeMenuIcon() {
    xMenu.style.display = "block";
    menu.style.display = "none";
  }

  function changeXIcon() {
    xMenu.style.display = "none";
    menu.style.display = "block";
  }

  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


</body>

</html>