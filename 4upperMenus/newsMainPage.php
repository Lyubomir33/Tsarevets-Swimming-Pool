<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="/css/headerNavbar.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/reviews.css">
  <link rel="stylesheet" href="/css/newsMainPage.css"> <!-- HERE ARE LOCATED THE STYLES FOR THIS PAGE -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mooli&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="/images/по-нова_снимка-removebg-preview.png">
  <title>Начална страница</title>
</head>

<body class="newsMainPageBody">


  <header class="header">
    <nav class="navbar navbar-expand-sm navbar-light" id="neubar">
    <div class="container">
    <div style="display: flex;">
        
        <a class="logo" class="navbar-brand" href="/index.php"><img class="oldImage" src="../images/по-нова_снимка-removebg-preview.png">СКП ЦАРЕВЕЦ</a>

        </div>
        <button id="navBtn" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span id="togglerID" onclick="changeMenuIcon()" class="navbar-toggler-icon"></span>
          <i id="xToggler" onclick="changeXIcon()" class="fa-solid fa-x" style="color: #000000;"></i>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">

          <li class="nav-item">
              <a id="one" class="nav-link mx-2 heartbeat btnStyle" href="/4upperMenus/events.php">СЪБИТИЯ</a>
            </li>

            <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="/4upperMenus/events.php">ЗА КЛУБА</a>
            </li>

            <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="/4upperMenus/newsMainPage.php">НОВИНИ</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="/4upperMenus/reviews.php">ОТЗИВИ</a>
            </li>


            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="mainNewsPage">

    <div class="news">

      <!-- <a href="/Dashboard/петър-петров.php">
      <div style="background: url(/Dashboard/dashboardImages/ПетърСтойчев.jpg);" class="addNews">
        <h1 class="headerNews">Header</h1>
      </div>
      </a> -->

      <?php



      require "../databaseConnection/database.php";

    

      $sql = "SELECT * FROM blog_main_page";
      $query = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($query)) {
        echo " <a style='text-decoration: none;' href='/Dashboard/articleFiles/{$row['link']}'>
        <div>
            <h1 class='headerNews'>{$row['title']}</h1>
            <div style='background: url(/Dashboard/{$row['image']}); 
            background-size: cover; background-repeat: no-repeat; background-position: center;' class='addNews'>
                
           </div> </div></a>";

    }

    


      ?>

    </div>



  </main>

  <span class="backgroundColor"><?php include "../footer.php"; ?></span>
 



  <script>
    const menu = document.getElementById('togglerID');
    const xMenu = document.getElementById('xToggler');

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
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/0e55d70a76.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>

</html>