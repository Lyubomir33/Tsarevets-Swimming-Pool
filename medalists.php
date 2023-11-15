<!DOCTYPE html>
<html class="medalistsHTML" lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/MEDALISTS.css">
  <link rel="icon" type="image/x-icon" href="/images/по-нова_снимка-removebg-preview.png">
  <script src="https://cdn.tiny.cloud/1/888o7m22n9qvu43oeop8rgfjphhlib69u7lmqrnzlnageh4e/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

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
            <div class='toggleButtonMedal'>
                <img class='imgMain' src='./Dashboard/medalistsImages/$row[medal_img]'>
                <p class='textInMedalists'>$row[name]</p>
                <p id='theMedaltext'>$row[medal_text]</p>
            </div>
        </div>
       
    </div>
</div>";


   
  }




  ?>
  </div>

  <p></p>

  <div style="margin-top: 20px; margin-bottom: 100px;"></div>

  <?php require "./footer.php"; ?>

</body>

<script>


  
    </script>
</script>

</html>