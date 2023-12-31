<!DOCTYPE html>
<html id="reviews" lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
  <link rel="icon" type="image/x-icon" href="/images/по-нова_снимка-removebg-preview.png">
  <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/unicons.css">
  
  <link rel="icon" type="image/x-icon" href="/images/по-нова_снимка-removebg-preview.png">

  <link rel="stylesheet" href=".././css/headerNavbar.css">
  <link rel="stylesheet" href=".././css/style.css">
  <link rel="stylesheet" href=".././css/reviews.css">

  <title>Мнения</title>
</head>

<body>


  <header class="header">

    <nav class="navbar navbar-expand-lg navbar-light" id="neubar">
      <div class="container" id="containerReviews">
        <div style="display: flex;">
          <a class="logo" class="navbar-brand" href="/index.php"><img class="oldImage" src="../images/по-нова_снимка-removebg-preview.png"><span class="tsarevets-name">СКП ЦАРЕВЕЦ</span></a>

        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" id="menuReviews" onclick="m()"></span>
          <i class="fa-solid fa-x" id="xReviews" onclick="x()" style="color: #000000; border: none;"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul id="menusTop" class="navbar-nav ms-auto ">

            <li class="nav-item">
              <a id="firstLink" class="nav-link mx-2 btnStyle" href="/4upperMenus/forTheClub.php">ЗА КЛУБА</a>
            </li>

            <li class="nav-item">
              <a id="secondLink" class="nav-link mx-2 btnStyle" href="/4upperMenus/team.php">ЕКИП</a>
            </li>

            <li class="nav-item">
              <a id="thirdLink" class="nav-link mx-2 btnStyle" href="/4upperMenus/newsMainPage.php">НОВИНИ</a>
            </li>

            <li class="nav-item">
              <a id="fourthLink" class="nav-link mx-2 btnStyle" href="/4upperMenus/events.php">РЕЗУЛТАТИ</a>
            </li>

            <li class="nav-item">
              <a id="fifthLink" class="nav-link mx-2 btnStyle" href="/4upperMenus/reviews.php">ОТЗИВИ</a>
            </li>

            <li class="nav-item">
              <a id="sixthLink" class="nav-link mx-2 btnStyle" href="/4upperMenus/partners.php">ПАРТНЬОРИ</a>
            </li>

            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>




  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          </button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button onclick="closeModal()" id="closeModal" type="button" class="btn btn-primary close-modal">Затвори</button>
        </div>
      </div>
    </div>
  </div>

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




  <script async>
    function closeModal() {
      let modal = document.getElementById('exampleModal');
      modal.style.display = 'none';
    }



    const menu = document.getElementById('menuReviews');
    const xMenu = document.getElementById('xReviews');


    function m() {
      xMenu.style.display = "block";
      menu.style.display = "none";


    }

    function x() {
      xMenu.style.display = "none";
      menu.style.display = "block";

    }
  </script>



  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>