

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
            <div id="eventsOption" class="nav-option option1">
              <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png" class="nav-img" alt="dashboard">
              <h3> Резултати</h3>
            </div>

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
          <div class="searchbtn">
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png" class="icn srchicn" alt="search-button">
          </div>
        </div>


        <div class="report-container">
          <div class="report-header">
            <h1 class="recent-Articles">Резултати</h1>
            <div>
              <!-- <button id="btn-trigger-remove" class="view" onclick="hideEvents()">Премахни събитието</button>
              <button id="btn-trigger-add" class="view" onclick="addEvent()">Добави събитието</button> -->
            </div>
          </div>

          <div>

            <form class="create-user" method="POST">
              <label  for="create_fullName">Първо ме</label>
              <input required name="create_fullName" id="create_fullName" type="text"><br>

              <button type='submit' name='formType' value='createEvents' class='button-save-changes'>Създай</button>

            </form>

            <?php

            require "../databaseConnection/database.php";


            $sqlGet = "SELECT * FROM events ORDER BY ID DESC";
            $qeuryGet = mysqli_query($conn, $sqlGet);

            while ($row = mysqli_fetch_assoc($qeuryGet)) {

              echo "<form class='formResults' method='POST' enctype='multipart/form-data'>
              <div class='names'>
              <label class='labelNames' for='full_name'>Първо име: </label>
                <input require name='full_name' id='full_name' type='text' value='$row[full_name]'>
                </div>
                <textarea name='eventsTextArea' id='eventsTextArea'>$row[events_textarea]</textarea>
                <button type='submit' name='formType' value='saveEvents' class='button-save-changes'>Запази промените</button>
                <input type='hidden' name='updateID' value='" . $row['ID'] . "'>
                </form>
              <hr class='hrLine'>";
            }

            ?>

          </div>

        </div>
      </div>
    </div>
    </div>
    </div>



    <?php

    require "../databaseConnection/database.php";




    if ($_SERVER['REQUEST_METHOD'] === 'POST') {


      $formType = $_POST['formType'];



      if ($formType === "createEvents") {

        $create_fullName = $_POST['create_fullName'];
       

        $sqlInsert = "INSERT INTO events (full_name, events_textarea) VALUES ('$create_fullName', '')";
        $queryInsert = mysqli_query($conn, $sqlInsert);
      } else if ($formType === "saveEvents") {

        $textArea = $_POST['eventsTextArea'];
        $ID = $_POST['updateID'];
        $full_name = $_POST['full_name'];


        $sqlTextarea = "UPDATE events SET events_textarea = '$textArea', full_name = '$full_name' WHERE ID='$ID' ";
        $queryTextare = mysqli_query($conn, $sqlTextarea);
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
        selector: '#eventsTextArea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [{
            value: 'First.Name',
            title: 'First Name'
          },
          {
            value: 'Email',
            title: 'Email'
          },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
      });
    </script>

  </body>

</html>