<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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

          <a class="logo" class="navbar-brand" href="/index.php">
            <img alt="old-image" class="oldImage" src="./images/по-нова_снимка-removebg-preview.png"><span class="tsarevets-name">СКП ЦАРЕВЕЦ</span>
          </a>

        </div>
        <button id="navBtn" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span id="togglerID" onclick="changeMenuIcon()" class="navbar-toggler-icon"></span>
          <i id="xToggler" onclick="changeXIcon()" class="fa-solid fa-x"></i>
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
              <a class="nav-link mx-2 btnStyle" href="/4upperMenus/events.php">РЕЗУЛТАТИ</a>
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
          <p class="sixthP">Медалисти</p>
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

          <div id="offerOne" class="firstOffer offers">


            <img alt="six-year-old" class="sixYearsOld offersImage biggerScreen" src="/images/test5years.png">
            <u>
              <p class="kidsAge offersImage biggerScreen">Деца на възраст 5+ г.</p>
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

          <div id="offerTwo" class="secondOffer offers">

            <img alt="ten-years-old" class="tenYearsOld offersImage biggerScreen" src="/images/test10teenagers.png">
            <u>
              <p class="kidsAge offersImage biggerScreen">Деца на възраст 10+ г.</p>
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

        <div id="offerThree" class="thirdOffer">

          <img alt="six-year-old-biggerscreen" class="sixYearsOld offersImage biggerScreen" src="/images/testAdults.png">
          <u>
            <p class="kidsAge offersImage biggerScreen">Обучение за възрастни</p>
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



 <script async>
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
        } 

      }

    } scrollUlText ();

    window.addEventListener('scroll', scrollUlText);


    //CODE FOR SCROLL DOWN EFFECT//


    // Code for animation on scroll effect//
  </script>

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</body>

=======
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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

          <a class="logo" class="navbar-brand" href="/index.php">
            <img alt="old-image" class="oldImage" src="./images/по-нова_снимка-removebg-preview.png"><span class="tsarevets-name">СКП ЦАРЕВЕЦ</span>
          </a>

        </div>
        <button id="navBtn" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span id="togglerID" onclick="changeMenuIcon()" class="navbar-toggler-icon"></span>
          <i id="xToggler" onclick="changeXIcon()" class="fa-solid fa-x"></i>
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
              <a class="nav-link mx-2 btnStyle" href="/4upperMenus/events.php">РЕЗУЛТАТИ</a>
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

          <div id="offerOne" class="firstOffer offers">


            <img alt="six-year-old" class="sixYearsOld offersImage biggerScreen" src="/images/test5years.png">
            <u>
              <p class="kidsAge offersImage biggerScreen">Деца на възраст 5+ г.</p>
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

          <div id="offerTwo" class="secondOffer offers">

            <img alt="ten-years-old" class="tenYearsOld offersImage biggerScreen" src="/images/test10teenagers.png">
            <u>
              <p class="kidsAge offersImage biggerScreen">Деца на възраст 10+ г.</p>
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

        <div id="offerThree" class="thirdOffer">

          <img alt="six-year-old-biggerscreen" class="sixYearsOld offersImage biggerScreen" src="/images/testAdults.png">
          <u>
            <p class="kidsAge offersImage biggerScreen">Обучение за възрастни</p>
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



  <script async>
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

    window.addEventListener('resize', resizeWidth, {passive: true});


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

        } 


      }

    }

    scrollOffers();

    window.addEventListener('scroll', scrollOffers, {passive: true});

    let ul = document.getElementsByClassName('ulReveal'); 

    function scrollUlText () {

      let heigh = window.innerHeight;

      for(let j = 0; j < ul.length; j++) {

        let revealUl = ul[j].getBoundingClientRect().top;
        let revPoint = 160;

        if(revealUl < heigh - revPoint) {
          ul[j].classList.add('active');
        } 

      }

    } scrollUlText ();

    window.addEventListener('scroll', scrollUlText, {passive: true});


    //CODE FOR SCROLL DOWN EFFECT//


    // Code for animation on scroll effect//
  </script>

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</body>

>>>>>>> 5c201ac3fd85f13aaab70baede40e1c96ec59aa2
</html>