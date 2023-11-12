<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tiny.cloud/1/888o7m22n9qvu43oeop8rgfjphhlib69u7lmqrnzlnageh4e/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

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

           
              <div class="nav-option option4">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png" class="nav-img" alt="institution">
                <h3> Календар</h3>
              </div>
            
              <a href="./medalistsDashboard.php">
           <div class="nav-option option5">
              <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png" class="nav-img" alt="blog">
              <h3> Медалисти</h3>
            </div>
           </a>

           
            <a href="./galleryDashboard.php">
            <div class="nav-option option6">
              <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png" class="nav-img" alt="settings">
              <h3>Галерия</h3>
            </div> 
            </a>

          

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
            <h1 class="recent-Articles">Създаване на календар</h1>
          </div>

          <form method="POST">
            <input type="hidden" name="formType" value="calendarText"> <!-- Add a hidden input for formType -->
            <textarea name="textareaClander" id="textareaClander" cols="30" rows="10">

            <?php

            require "../databaseConnection/database.php";

            $sqlGET = "SELECT * FROM calendar";
            $queryGET = mysqli_query($conn, $sqlGET);

            while ($rowG = mysqli_fetch_assoc($queryGET)) {
              echo $rowG['calendar_info'];
            }



            ?>


            </textarea>
            <button class="btnSubmitArticle" type="submit">Запиши промените</button>
          </form>


        </div>
      </div>
    </div>
    </div>
    </div>

    <?php

    require "../databaseConnection/database.php";



    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $formType = $_POST['formType'];

      if ($formType === "calendarText") {

        $calendarText = $_POST['textareaClander'];

        $sqlSet = "UPDATE calendar SET calendar_info = '$calendarText'";
        $query = mysqli_query($conn, $sqlSet);
      }
    }



    ?>

    <script>
      let menuicn = document.querySelector(".menuicn");
      let nav = document.querySelector(".navcontainer");

      menuicn.addEventListener("click", () => {
        nav.classList.toggle("navclose");
      })


      tinymce.init({
    selector: '#textareaClander',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
    </script>

  </body>

</html>