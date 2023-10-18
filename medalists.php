<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/MEDALISTS.css">
  <title>Медалисти</title>
</head>

<body class="medalBody">

  <?php require "./Dashboard/articleFiles/headerInclude.php"; ?>


  <h1 class="headerMedals">Медалисти</h1>

  <div >

    <div class="medalistsFlexDiv">

      <?php 

      require "./databaseConnection/database.php";

      $sql = "SELECT * FROM medalists";
      $query = mysqli_query($conn, $sql);

      while($row = mysqli_fetch_assoc($query)) {
      echo "
      <div class = 'medalistsFlexDiv'>
      <div class='medalsts'>

      <img class='imgMain' src='./Dashboard/medalistsImages/$row[medal_img]'>
      <p class='pMedal'>$row[medal_text]</p>

      </div>
      </div>";

      }
      
      ?>
    </div>
  </div>





  <?php require "./footer.php"; ?>

</body>

</html>