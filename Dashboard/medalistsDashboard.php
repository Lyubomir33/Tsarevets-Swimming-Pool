<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Dashboard CSS/dashboard.css">
  <link rel="stylesheet" href="../css/MEDALISTS.css">
  <script src="https://cdn.tiny.cloud/1/888o7m22n9qvu43oeop8rgfjphhlib69u7lmqrnzlnageh4e/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

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
              <div class="nav-option option1">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png" class="nav-img" alt="dashboard">
                <h3> Събития</h3>
              </div>
            </a>

            <a href="./schedule.php">
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

            <div class="nav-option option5">
              <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png" class="nav-img" alt="blog">
              <h3>Медалисти</h3>
            </div>


           <a href="./galleryDashboard.php">
           <div class="nav-option option6">
              <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png" class="nav-img" alt="settings">
              <h3> Галерия</h3>
            </div>  
           </a>

          </div>
        </nav>
      </div>
      <div class="main">

        <div class="searchbar2">
          <input type="text" name="" id="" placeholder="Search">
          <div class="searchbtn">
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png" class="icn srchicn" alt="search-button">
          </div>
        </div>


        <div class="report-container">
          <div class="report-header">
            <h1 class="recent-Articles">Отзиви</h1>
            <h1 class="recent-Articles"></h1>

          </div>

          <div>

            <div class="divDashboard">

              <form method="POST" enctype="multipart/form-data" style="display: flex; align-items: center;">

                <div class="picAndBTN">
                  <label><b>Изберете снимка: </b></label>
                  <input required style="margin-left: 5px;" type="file" multiple name="choosefile">

                  <label><b>Име на медалиста:</b></label>
                  <input required name="nameMedalist" type="text">


                  <button class="btnSubmitArticle"  type="submit" name="formType" value="btnMedal">Създай</button>



                </div>

                <div class="textMedal">

                  <label><b>Моля прикачете текст: </b></label>
                  <textarea id="theMedalistTextarea" name="medalText" class="textareaMedal"></textarea>


                </div>

              </form>



            </div>

            <?php

            require "../databaseConnection/database.php";





            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              $target_dir = "../Dashboard/medalistsImages/";
              $fileName = basename($_FILES['choosefile']['name']);
              $targetFilePath = $target_dir . $fileName;
              $textArea = $_POST['medalText'];
              $formType = $_POST['formType'];
             

              if ($formType === 'btnMedal') {
            
                $nameMedalist = $_POST['nameMedalist'];
                move_uploaded_file($_FILES['choosefile']['tmp_name'], $targetFilePath);
                $sql = "INSERT INTO medalists (name, medal_img, medal_text) VALUES ('$nameMedalist','$fileName', '$textArea')";
                $query = mysqli_query($conn, $sql);

              } else if ($formType === "rewrite") {
             
                $recordId = $_POST['recordId']; 
                if (move_uploaded_file($_FILES['choosefile']['tmp_name'], $targetFilePath)) {
                  $sqlImage = "UPDATE medalists SET medal_img = '$fileName' WHERE id = $recordId";
                  $queryImage = mysqli_query($conn, $sqlImage);
                } else {
                  $nameMedalist = $_POST['nameMedalist'];
                  $sqlTextarea = "UPDATE medalists SET medal_text = '$textArea', name = '$nameMedalist' WHERE id = $recordId";
                  $queryTextarea = mysqli_query($conn, $sqlTextarea);
                }
              }
            }


            $sqlEcho = "SELECT * FROM medalists ORDER BY ID DESC ";
            $queryEcho = mysqli_query($conn, $sqlEcho);

            while ($rowEcho = mysqli_fetch_assoc($queryEcho)) {
              echo "<form method='POST' enctype='multipart/form-data' style='display: flex; align-items: center;'>
              <div class='divDashboard'>

                            <div class='picAndBTN'>
                            <label><b>Изберете снимка: </b></label>
                            <input style='margin-left: 5px;' type='file' name='choosefile'>

                            <label ><b>Име на медалиста: </b></label>
                            <input class='nameStyles' value='$rowEcho[name]' name='nameMedalist' type='text'>


                            <img class='viewDash' src='./medalistsImages/$rowEcho[medal_img]'>
                           <input type='hidden' name='recordId' value='$rowEcho[ID]'>
                            <button class='btnSubmitArticle' type='submit' name='formType' value='rewrite'>Запиши промени</button>

                            </div>

                            <div class='textMedal'>

                            <label><b>Моля прикачете текст: </b></label>
                            <textarea required id='secondTextArea' name='medalText' class='textareaMedal'>$rowEcho[medal_text]</textarea>

                            </div>
                            </div>
                            </form>";
            }

            ?>



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

      
tinymce.init({
    selector: '#theMedalistTextarea, #secondTextArea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });

 
    </script>
    </script>

  </body>

</html>