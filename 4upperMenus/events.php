<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/EVENTS.css">
  <script src="https://cdn.tiny.cloud/1/oy49mrh99x9qochiaeatx6s93oogkmooakygczsvo87c3905/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <title>Предстоящи събития</title>
</head>
<body>

<?php include "../Dashboard/articleFiles/headerInclude.php"; ?>


<?php 

  require "../databaseConnection/database.php";

  $sql = "SELECT * FROM events";
  $query = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($query)){

    echo "<h1 class='headEvents'>Предстоящи събития</h1>

    <div class='imgForEvents'>
    <img  src='./imgFiles/$row[img_events]'>
    </div>
    
    <div class='pInEvents'>$row[events_textarea]</div>";

    
  }


?>








<?php include "../footer.php"; ?>
  
</body>
</html>