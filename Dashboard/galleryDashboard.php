<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tiny.cloud/1/oy49mrh99x9qochiaeatx6s93oogkmooakygczsvo87c3905/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

  <link rel="stylesheet" href="./Dashboard CSS/dashboard.css">
  <title>Табло за управление</title>
</head>

<body>

  <body>

    <!-- for header part -->
    <?php include './dashboard_header.php'; ?>

    <div class="main-container">
      <div class="navcontainer">
        <nav class="nav">
          <div class="nav-upper-options">
            <a href="./dashboard.php">
              <div id="eventsOption" class="nav-option option1">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png" class="nav-img" alt="dashboard">
                <h3> Събития</h3>
              </div>

            </a>


            <a href="/Dashboard/schedule.php">
              <div class="nav-option option2">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png" class="nav-img" alt="articles">
                <h3> График</h3>
              </div>

            </a>

            <a href="./news.php">
              <div class="nav-option option3">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
                <h3> Новини</h3>
              </div>
            </a>

            <a href="./reviewsDashboard.php">
              <div class="nav-option option3">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
                <h3> Отзиви</h3>
              </div>
            </a>

            <a href="./adjustCalendar.php">
              <div class="nav-option option4">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png" class="nav-img" alt="institution">
                <h3> Календар</h3>
              </div>
            </a>

            <a href="./medalistsDashboard.php">
              <div class="nav-option option5">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png" class="nav-img" alt="blog">
                <h3> Медалисти</h3>
              </div>
            </a>



            <div class="nav-option option6">
              <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png" class="nav-img" alt="settings">
              <h3>Галерия</h3>
            </div>


          </div>
        </nav>
      </div>
      <div class="main">

        <div class="searchbar2">
          <input type="text" placeholder="Search">
          <div class="searchbtn">
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png" class="icn srchicn" alt="search-button">
          </div>
        </div>


        <div class="report-container">
          <div class="report-header">
            <h1 class="recent-Articles">Галерия</h1>
          </div>

          <form method="POST" enctype="multipart/form-data">
            <label>Изберете година: </label>
            <input name="year" class="stylesInput" type="text"><br>

            <label>Прикачете сними тук: </label>
            <input name="multiplepics[]" type="file" multiple><br><br>

            <button value="submitData" name="formType" class="btnSubmitArticle">Създай</button>
          </form>

          <div class='containerEcho'>
            <?php

            require "../databaseConnection/database.php";


            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              $formType = $_POST['formType'];


              if ($formType === 'submitData') {
                $year = $_POST['year'];
                $images = $_FILES['multiplepics'];
                $target_dir = "../Dashboard/gallery/";

                $imageNames = array();

                foreach ($images['name'] as $key => $name) {
                  $tmpName = $images['tmp_name'][$key];

                  if ($images['error'][$key] === UPLOAD_ERR_OK) {
                    $targetFilePath = $target_dir . $name;

                    if (move_uploaded_file($tmpName, $targetFilePath)) {
                      $imageNames[] = $name;
                    }
                  }
                }

                $imagesString = implode(', ', $imageNames);


                $sql = "INSERT INTO galerry (year_gallery, all_images) VALUES ('$year', '$imagesString')";
                $query = mysqli_query($conn, $sql);
              } else if ($formType === "resendImgs") {
                $imagesUpdate = $_FILES['echoMultPics'];
                $target_dirUpdate = "../Dashboard/gallery/";

                $imageNamesUpdate = array();

                foreach ($imagesUpdate['name'] as $keyUpdate => $nameUpdate) {
                  $tmpNameUpdate = $imagesUpdate['tmp_name'][$keyUpdate];

                  if ($imagesUpdate['error'][$keyUpdate] === UPLOAD_ERR_OK) {
                    $targetFilePathUpdate = $target_dirUpdate . $nameUpdate;

                    if (move_uploaded_file($tmpNameUpdate, $targetFilePathUpdate)) {
                      $imageNamesUpdate[] = $nameUpdate;
                    }
                  }
                }

                $imagesStringUpdate = implode(', ', $imageNamesUpdate);

                $ID = $_POST['idToGet'];

                $sqlImgUpdate = "UPDATE galerry SET all_images='$imagesStringUpdate' WHERE ID = $ID";

                $queryUpdate = mysqli_query($conn, $sqlImgUpdate);
              }
            }


            $sqlGet = "SELECT * FROM galerry";
            $queryGet = mysqli_query($conn, $sqlGet);


            while ($row = mysqli_fetch_assoc($queryGet)) {

              echo " <div class='galleryEcho'>

     

            <input class='inputEcho' disabled value='$row[year_gallery].' type='text'><br><br><br>

            <form method='POST' enctype='multipart/form-data'>
              <label>Избери снимки: </label><br>
              <input name='echoMultPics[]' multiple type='file'><br>
              <input type='hidden' name='idToGet' value='" . $row['ID'] . "'>
              <button name='formType' value='resendImgs' class='btnSubmitArticle' type='submit'>Запази промени</button>
            </form>

       
          </div>";
            }

            ?>

          </div>
        </div>
      </div>
    </div>

    </div>
    </div>

    <script>
      let menuicn = document.querySelector(".menuicn");
      let nav = document.querySelector(".navcontainer");

      menuicn.addEventListener("click", () => {
        nav.classList.toggle("navclose");
      })
    </script>

  </body>

</html>