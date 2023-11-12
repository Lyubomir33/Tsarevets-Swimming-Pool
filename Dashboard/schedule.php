<?php 


session_start();

// Check if the user is not logged in
if (!isset($_SESSION['emailLog'])) {
    header('Location: ../logRegister/register-login-form.php');
    exit();
}

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 2400)) {
    session_unset();
    session_destroy();
    header('Location: ../logRegister/register-login-form.php');
    exit();
}

$_SESSION['last_activity'] = time();



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Dashboard CSS/dashboard.css">
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
                <h3> Резултати</h3>
              </div>
            </a>

            <div class="nav-option option2">
              <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png" class="nav-img" alt="articles">
              <h3> График</h3>
            </div>

            <a href="/Dashboard/news.php">
              <div class="nav-option option3">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
                <h3> Новини </h3>
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
            <h1 class="recent-Articles">График</h1>
          </div>

          <h1>Въведете графика тук</h1>

          <form method="POST">
            <textarea name="schedule" id="schedule" cols="100" rows="10">

              <?php require "../databaseConnection/database.php";

              $sqlGetData = "SELECT * FROM schedule_table";
              $queryGEtData = mysqli_query($conn, $sqlGetData);

              while ($rowData = mysqli_fetch_assoc($queryGEtData)) {
                echo $rowData['schedule'];
              } ?>
         </textarea>
         <!-- <button class="btnSubmitArticle" type="submit" name="formType" value="saveSchedule">Запиши</button> -->
            <button class="btnSubmitArticle" type="submit" name="formType" value="rewriteSchedule">Запази промените</button>


          </form>

        </div>

      </div>

    </div>

    </div>

    <?php

    require "../databaseConnection/database.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

      $formSubmit = $_POST['formType'];
      $scheduleText = $_POST['schedule'];

      if ($formSubmit == "saveSchedule") {
        $SQL = "INSERT INTO schedule_table (schedule) VALUES ('$scheduleText')";
        $querySchedule = mysqli_query($conn, $SQL);
      } else if ($formSubmit === "rewriteSchedule") {
        $sqlSet = "UPDATE schedule_table SET schedule ='$scheduleText'";
        $querySet = mysqli_query($conn, $sqlSet);
      }
    }


    ?>



    <script>
      let menuicn = document.querySelector(".menuicn");
      let nav = document.querySelector(".navcontainer");

      menuicn.addEventListener("click", () => {
        nav.classList.toggle("navclose");
      });

      

      //TINYMCE TEXT AREA EDITOR//

      
      tinymce.init({
      selector: '#schedule',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
    });
    </script>

  </body>



</html>