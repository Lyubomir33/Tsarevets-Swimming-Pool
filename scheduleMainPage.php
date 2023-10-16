<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/headerNavbar.css">
  <link rel="stylesheet" href="./css/scheduleMainPage.css">
  <script src="https://cdn.tiny.cloud/1/oy49mrh99x9qochiaeatx6s93oogkmooakygczsvo87c3905/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <title>График</title>
</head>

<body>

  <?php include "./Dashboard/articleFiles/headerInclude.php"; ?>

  <div class="twoDivs">

    <div class="scheduleText">

    <?php 

    require "./databaseConnection/database.php";


    $sql = "SELECT * FROM schedule_table"; 
    $query = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($query)) {
      echo  $row['schedule'];
    }


    ?>
 
    </div>

    <div>

      <div>
        <h1>Басейн "Радио"</h1>
      <img class="imgSchedule" src="./images/pool3.jpg">
      </div> 
     
      <div>
        <h1>Басейн "Емилиян Станев"</h1>
      <img class="imgSchedule" src="./images/pool2.jpg">
      </div>
    
      <div>
        <h1>Басейн "Клуб 17"</h1>
      <img class="imgSchedule" src="./images/pool1.jpg">
      </div>

    </div>


  </div>

  <?php include "./contacts.php"; ?>


  <?php include "./footer.php"; ?>

</body>

</html>