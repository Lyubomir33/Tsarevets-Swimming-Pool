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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mooli&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="/images/по-нова_снимка-removebg-preview.png">
  <title>Начална страница</title>
</head>

<body>



  <header class="header">
    <nav class="navbar navbar-expand-sm navbar-light" id="neubar">
      <div class="container">
        <a class="logo" class="navbar-brand" href="/index.php">СКП ЦАРЕВЕЦ</a>
        <button id="navBtn" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span id="togglerID" onclick="changeMenuIcon()" class="navbar-toggler-icon"></span>
          <i id="xToggler" onclick="changeXIcon()" class="fa-solid fa-x" style="color: #000000;"></i>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">

            <li class="nav-item">
              <a class="nav-link mx-2" href="#">ЗА КЛУБА</a>
            </li>

            <li class="nav-item">
              <a class="nav-link mx-2" href="#">НОВИНИ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#anchorID">КОНТАКТИ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="/4upperMenus/reviews.php">ОТЗИВИ</a>
            </li>


            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>


    <div id="first" class="boxOne">

      <a class="anchorStyle" href="./images/deca.jpg">
        <div class="firstIMG">
          <p class="imgP">Защо плуване?</p>
        </div>
      </a>

      <a class="anchorStyle" href="./calendar/calendarDashboard.php">
        <div class="secondIMG">
          <p class="secondP">График</p>
        </div>
      </a>

    </div>

    <div id="second" class="boxTwo">

      <a class="anchorStyle" href="#">
        <div class="thirdIMG">
          <p class="thirdP">Календар</p>
        </div>
      </a>

      <a class="anchorStyle" href="#">
        <div class="fourthIMG">
          <p class="fourthP">История</p>
        </div>
      </a>

    </div>

    <div id="third" class="boxThree">

      <a class="anchorStyle" href="#">
        <div class="fifthIMG">
          <p class="thirdP">Галерия</p>
        </div>
      </a>

      <a class="anchorStyle" href="#">
        <div class="sixthIMG">
          <p class="fourthP">Запиши се тук</p>
        </div>
      </a>

    </div>


    <!-- THIS IS THE LOGIC TO MAKE 3 DIVS BE DISPLAYED NEXT TO EACH OTHER IF WE RESIZE OVER 920px -->

    <div id="threeDivs">

      <a class="anchorStyle" href="./images/deca.jpg">
        <div class="firstIMG">
          <p class="imgP">Защо плуване?</p>
        </div>
      </a>

      <a class="anchorStyle" href="./calendar/calendarDashboard.php">
        <div class="secondIMG">
          <p class="secondP">График</p>
        </div>
      </a>

      <a class="anchorStyle" href="#">
        <div class="thirdIMG">
          <p class="thirdP">Календар</p>
        </div>
      </a>

    </div>

    <div id="secondThreeDivs">

      <a class="anchorStyle" href="#">
        <div class="fourthIMG">
          <p class="imgP">История</p>
        </div>
      </a>

      <a class="anchorStyle" href="#">
        <div class="fifthIMG">
          <p class="secondP">Галерия</p>
        </div>
      </a>

      <a class="anchorStyle" href="#">
        <div class="sixthIMG  ">
          <p class="thirdP">Запиши се тук</p>
        </div>
      </a>
    </div>


    <!--  THIS IS THE LOGIC TO MAKE 3 DIVS BE DISPLAYED IF WE RESIZE OVER 1050PX -->

    <div class="offer">
      <b>
        <h1 class="ourOffer">Нашите оферти</h1>
      </b>

      <p class="courses">Обучение по плуване за:</p>

      <div id="firstTwoOfffers">
        <div id="allThreeOffers">

          <div class="firstOffer">


            <img class="sixYearsOld" src="/images/5-6 years old.png">
            <u>
              <p class="kidsAge">Деца на възраст 5 или 6г.</p>
            </u>
            <div class="beneffits">
              <ul>
                <li>- Обучение по плуване с иновативни подходи</li>
                <li class="liMargin">- Чист и топъл басейн</li>
                <li class="liMargin">- Екип от опитни професионалисти</li>
                <li class="liMargin">- Групови занимания</li>
              </ul>
            </div>
          </div>

          <div class="secondOffer">

            <img class="sixYearsOld" src="/images/boy 10 years old.png">
            <u>
              <p class="kidsAge">Деца на възраст 10+ г.</p>
            </u>
            <div class="beneffits">
              <ul>
                <li>- Усъвършенстване в плувния спорт</li>
                <li class="liMargin">- Участие в спортни състезания</li>
                <li class="liMargin">- Достигане на високо спортно майсторство</li>
              </ul>
            </div>
          </div>

        </div>

        <div class="thirdOffer">

          <img class="sixYearsOld" src="/images/man.png">
          <u>
            <p class="kidsAge">Обучение за възрастни</p>
          </u>
          <div class="beneffits">
            <ul>
              <li>- Изграждане на правилна техника от нулата</li>
              <li class="liMargin">- Индивидуален подход спрямо нуждите (съобразен с работния график на клиента)</li>
              <li class="liMargin">- Подходящо за абсолютно начинаещи</li>
            </ul>
          </div>
        </div>

      </div>
    </div>

    <button class="btnSignIn">Искам да се запиша</button>



    <!-- <div class="whoForDiv"> -->

    <!-- <p><img class="cloud" src="/images/laodz (2).svg" alt=""></p> -->
    <!-- </div> -->

    <h1 class="ourValues"><b>НАШИТЕ ЦЕННОСТИ</b></h1>

    <div class="textSwimming">
      <p>Ние от спортен клуб СКП вярваме, че плуването е един от най-хубавите спортове, който може да изберете за вас и вашето дете.</p> <br>
      <p>Съчетава двигателен активизъм и релаксация, предоставяйки ни уникален начин за намаляване на стреса и подобряване на менталната ни яснота.</p>
      <br>
      <p>Нашата мисия е не само да ви научим да плувате.</p> <br>
      <p>Ние целим да изградим полезни навици, които ще ви помагат не само в спорта, но и в живота:
        Трудолюбие, дисциплина, упоритост, постоянство, кураж и устойчивост. </p> <br><br>
      </p>


    </div>

    <div id="contactsDiv" class="contacts">

     
        <h1 class="headerWhoFor"> &nbsp &nbsp Къде се провеждат &nbsp &nbsp &nbsp &nbsp заниманията?</h1>
        <p class="address">Адрес: </p>
        <p class="addressText">ул. Бяла Бона 10, <br>гр. Велико Търново</p>
     

      <div class="writeToUs">
        <h1 id="anchorID" class="headerContacts">Контакти</h1>

        <h2 class="phoneNumbers">Даниел Стоянов: </h2>
        <p class="phoneNumbers"><span class="phoneBackground">0878 687 555</span></p>

        <h2 class="phoneNumbers">Панайот Паздерков: </h2>
        <p class="phoneNumbers"><span class="phoneBackground">0898 579 010</span></p>
        <p class="write">Не успяхте да се свържете с нас по телефона? <br><br> Нашият чат е на един клик разстояние от вас!<br></p>
        <p class="write">Натиснете върху Messenger иконката и ни пишете.</p>
        <p class="write">Ще се свържем с вас при първа възможност!</p>
        <a href=""><img class="messenger" src="./images/mess-removebg-preview.png" alt=""></a>
        <!-- https://www.facebook.com/profile.php?id=100057188630835 -->
      </div>

    </div>

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



  </main>

  <?php include "footer.php" ?>



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