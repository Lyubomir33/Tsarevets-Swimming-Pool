<!DOCTYPE html>
<html class="medalistsHTML" lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/MEDALISTS.css">
  <link rel="icon" type="image/x-icon" href="/images/по-нова_снимка-removebg-preview.png">

  <title>Медалисти</title>
</head>

<body class="medalBody">

  <?php require "./Dashboard/articleFiles/headerInclude.php"; ?>


  <h1 class="headerMedals">Медалисти</h1>



      <div class='makeFlex'>
  <?php


  require "./databaseConnection/database.php";


  $sql = "SELECT * FROM medalists";
  $query = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($query)) {
    echo "<div id='containG' class='containerGallery'>
    <div>
        <div>
            <button class='toggleButtonMedal'>
                <img class='imgMain' src='./Dashboard/medalistsImages/$row[medal_img]'>
                <p class='textInMedalists'>$row[name]</p>
                <p class= > $row[medal_text] </p>
            </button>
        </div>
       
    </div>
</div>";


   
  }




  ?>
  </div>

  <div style="margin-top: 20px; margin-bottom: 100px;"></div>

  <?php require "./footer.php"; ?>

</body>

<script>

let divDisplay = document.getElementById('containG');

function resizeDiv () {

}

</script>

</html>