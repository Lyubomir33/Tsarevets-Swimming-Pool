<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

            <div class="nav-option option3">
              <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
              <h3> Отзиви</h3>
            </div>

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
                <h3>Галерия</h3>
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

            <div class="flexDiv">
              <?php

              require "../databaseConnection/database.php";

              $sqlRequest = "SELECT * FROM contactform";
              $queryGet = mysqli_query($conn, $sqlRequest);

              while ($rowRequest = mysqli_fetch_assoc($queryGet)) {

                echo "<div class='reviewStage'>
                        <label for='names'>Имена: </label>
                        <input class='inputStyles' value='$rowRequest[names]' disabled type='text'><br>
                        <label for='emails'>Имейл:</label>
                        <input class='inputStyles' value ='$rowRequest[email]' disabled type='text'>
                        <textarea disabled class='textAreaOpinion'>$rowRequest[opinion]</textarea>

                        </div>";
              }

              ?>

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