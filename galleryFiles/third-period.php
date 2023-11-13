<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/images/по-нова_снимка-removebg-preview.png">
  <link rel="stylesheet" href="../css/periods.css">
  <title>Първи период</title>
</head>
<body>

<?php require "../Dashboard/articleFiles/headerInclude.php"; ?>


<h1 class="period-header">Период 2011 - 2015г.</h1>


<div class="periods-flex-images">

<?php 

require "../databaseConnection/database.php";

$sql = "SELECT * FROM galerry LIMIT 1 OFFSET 2";
$query = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($query)) {

$imageNames = explode(', ', $row['all_images']);

      foreach ($imageNames as $imageName) {
        echo "<img class='periods-images' src='../Dashboard/gallery/$imageName'>";
      }

    }


?>

</div>


<?php require "../footer.php"; ?>

  
</body>
</html>
