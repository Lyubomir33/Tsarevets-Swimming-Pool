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
  <link rel="stylesheet" href="../css/headerNavbar.css">
  <link rel="stylesheet" href="../css/calendar.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mooli&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="/images/по-нова_снимка-removebg-preview.png">
  <title>График</title>
</head>

<body>


  <header class="header">
    <nav class="navbar navbar-expand-sm navbar-light" id="neubar">
      <div class="container">
        <a class="logo" class="navbar-brand" href="/index.php">СКП ЦАРЕВЕЦ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span id="togglerID" onclick="changeMenuIcon()" class="navbar-toggler-icon"></span>
          <i id="xToggler" onclick="changeXIcon()" class="fa-solid fa-x" style="color: #000000; border: none;"></i>
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

  <div>
    <h1 class="schedule">График</h1>
  </div>

  <div class="move-around">
    <table>
      <thead>
        <tr>
          <th data-label="Account">Account</th>
          <th data-label="Due Date">Due Date</th>
          <th data-label="Amount">Amount</th>
          <th data-label="Period">Period</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-label="Account">Visa - 3412</td>
          <td data-label="Due Date">04/01/2016</td>
          <td data-label="Amount">$1,190</td>
          <td data-label="Period">03/01/2016 - 03/31/2016</td>
        </tr>

        <tr>
          <td data-label="Account">Visa - 6076</td>
          <td data-label="Due Date">03/01/2016</td>
          <td data-label="Amount">$2,443</td>
          <td data-label="Period">02/01/2016 - 02/29/2016</td>
        </tr>

        <tr>
          <td data-label="Account">Corporate AMEX</td>
          <td data-label="Due Date">03/01/2016</td>
          <td data-label="Amount">$1,181</td>
          <td data-label="Period">02/01/2016 - 02/29/2016</td>
        </tr>


      </tbody>

    </table>


  </div>

  <div class="questions">
    <p>Имате въпроси свързани с графика? <br><br>
    <p> Бихте искали да получите повече информация относно записвания за плуване?</p>
  </div>

  <div class="backgroundCalendarContacts">

    <div class="contactsCalendar">

      <h1 id="anchorID" class="headerContacts">Контакти</h1>

      <h2 class="phoneNumbers">Даниел Стоянов: </h2>
      <p class="phoneNumbers"><span class="phoneBackground">0878 687 555</span></p>

      <h2 class="phoneNumbers">Панайот Паздерков: </h2>
      <p class="phoneNumbers"><span class="phoneBackground">0898 579 010</span></p>

      <div class="writeToUs">
        <p class="write">Не успяхте да се свържете с нас по телефона? <br><br> Нашият чат е на един клик разстояние от вас!<br></p>
        <p class="write">Натиснете върху Messenger иконката и ни пишете.</p>
        <p class="write">Ще се свържем с вас при първа възможност!</p>
        <a href=""><img class="messenger" src="../images/mess-removebg-preview.png" alt=""></a>
        <!-- https://www.facebook.com/profile.php?id=100057188630835 -->
      </div>

    </div>

  </div>

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


  <?php require "../footer.php"; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/0e55d70a76.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</body>

</html>