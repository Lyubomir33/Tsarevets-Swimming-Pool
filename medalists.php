<!DOCTYPE html>
<html class="medalistsHTML" lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/MEDALISTS.css">

  <title>Медалисти</title>
</head>

<body class="medalBody">

  <?php require "./Dashboard/articleFiles/headerInclude.php"; ?>


  <h1 class="headerMedals">Медалисти</h1>


  

      <?php 

    
   require "./databaseConnection/database.php";


  $sql = "SELECT * FROM medalists";
  $query = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($query)) {
    echo "<div id='containG' class='containerGallery'>

              <div ><button class='toggleButtonMedal'>$row[name]

              <img class='imgMain' src='./Dashboard/medalistsImages/$row[medal_img]'>
             
              </button>
              
              <div>

              <div id='myDiv' class='divImgMedal animate__animated animate__fadeIn'>
              
              <p class='pMedal'>$row[medal_text]</p>
              </div>

              </div>";

    
  }

  ?>
      
      <div style="margin-top: 20px;"></div>

  <?php require "./footer.php"; ?>

</body>

<script>


  //  const hiddenDiv = document.getElementById('hiddenDiv');


    document.querySelectorAll('.toggleButtonMedal').forEach((button, index) => {
      button.addEventListener('click', () => {
        const divImgModal = document.querySelectorAll('.divImgMedal')[index];

        if(window.innerWidth < 450) {
        if (divImgModal.style.display === 'block') {
          divImgModal.style.display = 'none';
          // hiddenDiv.style.display = "block";

        } else {
          // hiddenDiv.style.display = "none";
          divImgModal.style.display = 'block';
        }   
      } else if (window.innerWidth > 650) {
        if (divImgModal.style.display === 'flex') {
          divImgModal.style.display = 'none';
          // hiddenDiv.style.display = "block";

        } else {
          divImgModal.style.display = 'flex';
          // hiddenDiv.style.display = "block";

        }   
      }
      
      });
    });


  
</script>

</html>