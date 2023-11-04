<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&ampdisplay=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="icon" type="image/x-icon" href="/images/по-нова_снимка-removebg-preview.png">
  <link rel="stylesheet" href="/css/galerry.css">
  <title>Галерия</title>
</head>

<body class="bodyGalerry">


  <?php require "./Dashboard/articleFiles/headerInclude.php"; ?>
  <div class="flexGal">

 



    <?php require "./databaseConnection/database.php";


    $sql = "SELECT * FROM galerry";
    $query = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($query)) {
      echo "<div id='containG' class='containerGallery'>
   
              <button id='tog' class='toggleButton'>$row[year_gallery]</button>
              <div>

              <div id='myDiv' class='divImg animate__animated animate__fadeIn'>";

      $imageNames = explode(', ', $row['all_images']);

      foreach ($imageNames as $imageName) {
        echo "<img class='imgGall' src='./Dashboard/gallery/$imageName'>";
      }

      echo "<input type='hidden' name='valueHidden' value='$row[ID]'>
            </div>
            </div>
          </div>";
    }

    ?>

  </div>

  <?php require "./footer.php"; ?>




  <script>

const buttons = document.querySelectorAll('.toggleButton');
let isPaused = false;

buttons.forEach(button => {
  button.addEventListener('click', function() {
    if (isPaused) {
      button.classList.remove('paused');
    } else {
      button.classList.add('paused');
    }
    isPaused = !isPaused;
  });
});





    function toggleElement() {
      const divImg = document.querySelector('.divImg');
      divImg.classList.toggle('show');
    }

    const toggle = document.getElementById("galContainer");
    const containG = document.getElementById('containG');


    document.querySelectorAll('.toggleButton').forEach((button, index) => {
  button.addEventListener('click', () => {
  
    document.querySelectorAll('.divImg').forEach((div, i) => {
      if (i !== index) {
        div.style.display = 'none';
      }
    });

    
    button.classList.toggle('active');
    const divImg = document.querySelectorAll('.divImg')[index];

    if (window.innerWidth < 450) {
      if (divImg.style.display === 'grid') {
        divImg.style.display = 'none';
      } else {
        divImg.style.display = 'grid';
      }
    } else if (window.innerWidth > 650) {
      if (divImg.style.display === 'grid') {
        divImg.style.display = 'none';
      } else {
        divImg.style.display = 'grid';
      }
    }
  });
});

    const imageGallery = document.getElementById("imageGallery");

    function setGalleryHeight() {
      const images = imageGallery.querySelectorAll(".imgGall");

      let totalHeight = 0;
      images.forEach((image) => {
        totalHeight += image.clientHeight;
      });

      imageGallery.style.height = totalHeight + "px";
    }


    setGalleryHeight();


    


  </script>

</body>

</html>