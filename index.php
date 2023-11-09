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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mooli&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="/images/по-нова_снимка-removebg-preview.png">
  <link rel="stylesheet" href="/css/headerNavbar.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/reviews.css">
  
  <title>Начална страница</title>
</head>

<body>




  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light" id="neubar">
      <div class="container">
        <div style="display: flex;">

          <a class="logo" class="navbar-brand" href="/index.php"><img class="oldImage" src="./images/по-нова_снимка-removebg-preview.png">СКП ЦАРЕВЕЦ</a>

        </div>
        <button id="navBtn" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span id="togglerID" onclick="changeMenuIcon()" class="navbar-toggler-icon"></span>
          <i id="xToggler" onclick="changeXIcon()" class="fa-solid fa-x" style="color: white;"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul id="menusTop" class="navbar-nav ms-auto ">

            <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="./4upperMenus/forTheClub.php">ЗА КЛУБА</a>
            </li>

            <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="./4upperMenus/team.php">ЕКИП</a>
            </li>


            <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="./4upperMenus/newsMainPage.php">НОВИНИ</a>
            </li>

            <li class="nav-item">
              <a  class="nav-link mx-2 btnStyle" href="/4upperMenus/events.php">РЕЗУЛТАТИ</a>
            </li>

            <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="/4upperMenus/reviews.php">ОТЗИВИ</a>
            </li>

            <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="./4upperMenus/partners.php">ПАРТНЬОРИ</a>
            </li>


            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- <a id="events" class="futureEvents" href="www.google.com" target="_blank">
    <div>
      Content here -->
  <!-- </div>
  </a> -->

  <script>
    const eventsElement = document.getElementById('events');

    if (localStorage.getItem('hideEvents') === 'true') {
      eventsElement.style.display = 'none';
    } else {
      eventsElement.style.display = 'block';
    }
  </script>



  <main>


    <div id="first" class="boxOne">

      <a class="anchorStyle" href="./whySwimm.php">
        <div class="firstIMG">
          <p class="imgP">Ползи от плуването</p>
        </div>
      </a>

      <a class="anchorStyle" href="./scheduleMainPage.php">
        <div class="secondIMG">
          <p class="secondP">График</p>
        </div>
      </a>

    </div>

    <div id="second" class="boxTwo">

      <a class="anchorStyle" href="./Dashboard/calendarDashboard.php">
        <div class="thirdIMG">
          <p class="thirdP">Календар</p>
        </div>
      </a>

      <a class="anchorStyle" href="/history.php">
        <div class="fourthIMG">
          <p class="fourthP">История</p>
        </div>
      </a>

    </div>

    <div id="third" class="boxThree">

      <a class="anchorStyle" href="./gallery.php">
        <div class="fifthIMG">
          <p class="thirdP">Галерия</p>
        </div>
      </a>

      <a class="anchorStyle" href="/medalists.php">
        <div class="sixthIMG">
          <p class="fourthP">Медалисти</p>
        </div>
      </a>

    </div>


    <!-- THIS IS THE LOGIC TO MAKE 3 DIVS BE DISPLAYED NEXT TO EACH OTHER IF WE RESIZE OVER 920px -->

    <div id="threeDivs">

      <a class="anchorStyle" href="./whySwimm.php">
        <div class="firstIMG">
          <p class="imgP">Ползи от плуването</p>
        </div>
      </a>

      <a class="anchorStyle" href="./scheduleMainPage.php">
        <div class="secondIMG">
          <p class="secondP">График</p>
        </div>
      </a>

      <a class="anchorStyle" href="./Dashboard/calendarDashboard.php">
        <div class="thirdIMG">
          <p class="thirdP">Календар</p>
        </div>
      </a>

    </div>

    <div id="secondThreeDivs">

      <a class="anchorStyle" href="/history.php">
        <div class="fourthIMG">
          <p class="imgP">История</p>
        </div>
      </a>

      <a class="anchorStyle" href="./gallery.php">
        <div class="fifthIMG">
          <p class="secondP">Галерия</p>
        </div>
      </a>

      <a class="anchorStyle" href="/medalists.php">
        <div class="sixthIMG">
          <p class="thirdP">Медалисти</p>
        </div>
      </a>
    </div>


    <!--  THIS IS THE LOGIC TO MAKE 3 DIVS BE DISPLAYED IF WE RESIZE OVER 1050PX -->

    <div class="offer">
      <b>
        <h1 class="ourOffer">Ние предлагаме</h1>
      </b>

      <p class="courses">обучение по плуване за:</p>

      <div id="firstTwoOfffers">

        <div id="allThreeOffers">

          <div class="firstOffer offers">


            <img class="sixYearsOld offersImage" src="/images/test5years.png">
            <u>
              <p class="kidsAge offersImage">Деца на възраст 5+ г.</p>
            </u>
            <div class="beneffits">
              <ul class="ulReveal">
                <li><i class="fa-solid fa-star" style="color: #fcc900;"></i> Обучение по плуване с иновативни подходи</li>
                <li class="liMargin"><i class="fa-solid fa-star" style="color: #fcc900;"></i> Чист и топъл басейн</li>
                <li class="liMargin"><i class="fa-solid fa-star" style="color: #fcc900;"></i> Екип от опитни професионалисти</li>
                <li class="liMargin"><i class="fa-solid fa-star" style="color: #fcc900;"></i> Групови занимания</li>
              </ul>
            </div>
          </div>

          <div class="secondOffer offers">

            <img class="tenYearsOld offersImage" src="/images/test10teenagers.png">
            <u>
              <p class="kidsAge offersImage">Деца на възраст 10+ г.</p>
            </u>
            <div class="beneffits10yearsOld">
              <ul class="ulReveal">
                <li><i class="fa-solid fa-star" style="color: #fcc900;"></i> Усъвършенстване в плувния спорт</li>
                <li class="liMargin"><i class="fa-solid fa-star" style="color: #fcc900;"></i> Участие в спортни състезания</li>
                <li class="liMargin"><i class="fa-solid fa-star" style="color: #fcc900;"></i> Достигане на високо спортно майсторство</li>
              </ul>
            </div>
          </div>

        </div>

        <div class="thirdOffer">

          <img class="sixYearsOld offersImage" src="/images/testAdults.png">
          <u>
            <p class="kidsAge offersImage">Обучение за възрастни</p>
          </u>
          <div class="beneffits">
            <ul class="ulReveal">
              <li><i class="fa-solid fa-star" style="color: #fcc900;"></i> Изграждане на правилна техника от нулата</li>
              <li class="liMargin"><i class="fa-solid fa-star" style="color: #fcc900;"></i> Индивидуален подход спрямо нуждите (съобразен с работния график на клиента)</li>
              <li class="liMargin"><i class="fa-solid fa-star" style="color: #fcc900;"></i> Подходящо за абсолютно начинаещи</li>
            </ul>
          </div>
        </div>

      </div>
    </div>



    <?php include "./contacts.php"; ?>


    </div>




  </main>

  <?php include "./footer.php"; ?>



  <script>



    //CODE TO RESIZE 2 ICONS INTO 3 

    const boxOne = document.getElementById('first')
    const boxTwo = document.getElementById('second');
    const boxThree = document.getElementById('third');

    const firstThreeDivs = document.getElementById('threeDivs');
    const secondThreeDivs = document.getElementById('secondThreeDivs');

    function resizeWidth() {
      if (window.innerWidth > 920) {

        boxOne.style.display = "none";
        boxTwo.style.display = "none";
        boxThree.style.display = "none";

        firstThreeDivs.style.display = "flex";
        secondThreeDivs.style.display = "flex";

      }
      if (window.innerWidth < 920) {
        boxOne.style.display = "flex";
        boxTwo.style.display = "flex";
        boxThree.style.display = "flex";

        firstThreeDivs.style.display = "none";
        secondThreeDivs.style.display = "none";
      }

    }
    resizeWidth();

    window.addEventListener('resize', resizeWidth);

    const firstOffer = document.getElementById('firstTwoOfffers');
    const allThreeOffers = document.getElementById('allThreeOffers');

    function resizeOffers() {


      if (window.innerWidth > 1050) {
        firstOffer.classList.remove('firstTwoOfffers');
        allThreeOffers.class.add('allThreeOffers');
      }


    }

    window.addEventListener('resize', resizeOffers);

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



    // CODE FOR SCROLL DOWN EFFECT//

    let offers = document.getElementsByClassName('offersImage');

    function scrollOffers() {

      let windowHeight = window.innerHeight;

      for (let i = 0; i < offers.length; i++) {
        let reveal = offers[i].getBoundingClientRect().top;
          let revealPoint = 150;

        if (reveal < windowHeight - revealPoint) {
          
          offers[i].classList.add('active');
        } else {
          offers[i].classList.remove('active');
        }


      }

    }

    scrollOffers();

    window.addEventListener('scroll', scrollOffers);

    let ul = document.getElementsByClassName('ulReveal'); 

    function scrollUlText () {

      let heigh = window.innerHeight;

      for(let j = 0; j < ul.length; j++) {

        let revealUl = ul[j].getBoundingClientRect().top;
        let revPoint = 160;

        if(revealUl < heigh - revPoint) {
          ul[j].classList.add('active');
        } else {
          ul[j].classList.remove('active');

        }

      }

    } scrollUlText ();

    window.addEventListener('scroll', scrollUlText);


    //CODE FOR SCROLL DOWN EFFECT//
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/0e55d70a76.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>

</html>