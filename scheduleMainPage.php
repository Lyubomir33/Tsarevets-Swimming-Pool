<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/headerNavbar.css">
  <link rel="stylesheet" href="./css/scheduleMainPage.css">
  <script src="https://cdn.tiny.cloud/1/888o7m22n9qvu43oeop8rgfjphhlib69u7lmqrnzlnageh4e/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

  <title>График</title>
</head>

<body>

  <?php include "./headerInclude.php"; ?>

  <div class="twoDivs">

    <div class="scheduleText">

      <?php

      require "./databaseConnection/database.php";


      $sql = "SELECT * FROM schedule_table";
      $query = mysqli_query($conn, $sql);

      while ($row = mysqli_fetch_assoc($query)) {
        echo  $row['schedule'];
      }


      ?>

    </div>

    <div>

      <div>
        <h1 class="headersScheduleMain">Басейн "Радио"</h1>
        <img alt="schedule" class="imgSchedule" src="./images/pool3.jpg">
        <p class="p-for-pools">
          <b>Адрес:</b> бул. Никола Габровкси 60, 5005 ж.к. Колю Фичето, Велико Търново<br>
          <b> Вид: </b>спортен правоъгълен<br>
          <b>Подходящ:</b> за обучение на деца (6 – 18годишни) и възрастни (18+годишни)<br>
          <b>Rазмери:</b> 25м. на 12.5м.<br>
          <b>Дълбочина:</b> 1,40м. - 1,90м.<br>
          <b>Коридори:</b> 5<br>
          <b>Температура:</b> 27-28<br>
        </p>
      </div>

      <div>
        <h1 class="headersScheduleMain">Басейн "Емилиян Станев"</h1>
        <img alt="pool-one" class="imgSchedule" src="./images/pool2.jpg">
        <img alt="pool-two" class="imgSchedule" src="./images/Биляна.jpg">
        <p class="p-for-pools">
          <b>Адрес:</b> ул. Мария Габровска , 5005 ж.к. Колю Фичето<br>
          <b>Вид:</b> Спортен правоъгълен<br>
          <b>Подходящ:</b> За обучение на деца (6 – 18годишни) и възрастни (18+години)<br>
          <b>Размери: </b> 20м. на 10м.<br>
          <b>Дълбочина: </b> 1,40м. - 2,0м.<br>
          <b>Коридори:</b> 4<br>
          <b>Температура:</b> 27-28<br>
        </p>
      </div>

      <div>
        <h1 class="headersScheduleMain">Басейн "Клуб 17"</h1>

      </div>

      <div>

        <img alt="club-17" class="imgSchedule" src="./images/club17.jpg">
        <p class="p-for-pools"> 
          <b>Адрес:</b> ул.Козлодуй 29, 5000 Индустриална зона, Велико Търново<br>
          <b>Вид:</b> специализиран с неправилна форма за спа<br>
          <b>Подходящ:</b> за обучение на деца (4-8годишни)<br>
          <b>Размери:</b> 10м. на 4м.<br>
          <b>Дълбочина:</b> 1,10м. на 2,0м.<br>
          <b>Коридори:</b> Без<br>
          <b>Температура:</b> 30-34<br>

        </p>
      </div>

    </div>


  </div>

  <?php include "./contacts.php"; ?>


  <?php include "./footer.php"; ?>

</body>

</html>