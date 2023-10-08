<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Dashboard CSS/dashboard.css">
  <link rel="stylesheet" href="/css/newsMainPage.css"> <!-- HERE ARE LOCATED THE STYLES FOR THIS PAGE -->
  <title>Табло за управление</title>
</head>

<body>

  <body>

    <!-- for header part -->
    <header>

      <div class="logosec">
        <div class="logo">СКП ЦАРЕВЕЦ</div>
        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png" class="icn menuicn" id="menuicn" alt="menu-icon">
      </div>

      <div class="searchbar">
        <input type="text" placeholder="Search">
        <div class="searchbtn">
          <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png" class="icn srchicn" alt="search-icon">
        </div>
      </div>

      <div class="message">
        <div class="circle"></div>
        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png" class="icn" alt="">
        <div class="dp">
          <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png" class="dpicn" alt="dp">
        </div>
      </div>

    </header>

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

            <div class="nav-option option3">
              <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
              <h3> Новини</h3>
            </div>

            <a href="./reviews.php">
              <div class="nav-option option3">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
                <h3> Отзиви</h3>
              </div>
            </a>

            <!-- <div class="nav-option option4">
              <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png" class="nav-img" alt="institution">
              <h3> Institution</h3>
            </div>

            <div class="nav-option option5">
              <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png" class="nav-img" alt="blog">
              <h3> Profile</h3>
            </div>

            <div class="nav-option option6">
              <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png" class="nav-img" alt="settings">
              <h3> Settings</h3>
            </div> -->

            <a href="./logout.html">
              <div class="nav-option logout">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png" class="nav-img" alt="logout">
                <h3>Изход</h3>
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
            <h1 class="recent-Articles">Новини</h1>
          </div>

          <form id="templateForm" class='formStyles' enctype="multipart/form-data" method="POST">


            <div>
              <h1>Създаване на визия</h1>

              <label class="labelNews" for="title">Заглавие: </label>
              <input type="text" name="title" id="title"><br>

              <label class="labelNews" for="title">Заглавие вътре в статията: </label>
              <input type="text" name="titleBlog" id="titleBlog"><br>

              <label class="labelNews" for="image">Снимка: </label>
              <input type="file" name="image" id="image"><br>

              <label class="labelNews" for="link">Линк: </label>
              <input placeholder="Пр: име-на-статия.php" type="text" name="link" id="link"><u>
                <p class="textMandatory">ЗАДЪЛЖИТЕЛНО СЕ СЛАГА ФОРМАТ .php</p>
              </u>

              <button id="save" class="btnSubmitArticle" type="submit">Създай статия</button>
              <input type='hidden' name='formType' value='createNew'>

            </div>

            <div class="articleText">
              <h1>Съдържание</h1>
              <textarea name="content" cols="120" rows="10" id="content"></textarea>
            </div>

          </form>


          <?php

          require "../databaseConnection/database.php";

          if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $formType = $_POST['formType'];

            if ($formType === "createNew") {
              $title = $_POST['title'];
              $link = $_POST['link'];
              $content = $_POST['content'];
              $titleBlog = $_POST['titleBlog'];




              $target_dir = "dashboardImages/";
              $target_file = $target_dir . basename($_FILES["image"]["name"]);

              move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

              $sqlForm = "INSERT INTO blog_main_page (title, image, link, content, title_in_blog) VALUES ('$title', '$target_file', '$link', ' $content', '$titleBlog')";
              $queryForm = mysqli_query($conn, $sqlForm);

              $directory = "./articleFiles/";
              $fullPath = $directory . $link;



              $sql = "SELECT * FROM blog_main_page";
              $query = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($query)) {

                $content = '';

                $content .= "<!DOCTYPE html>";
                $content .= "<html lang=\"en\">";
                $content .= "<head></head>";

                $content .= "<body>";
                $content .= '<?php require "./headerInclude.php"; require "../../databaseConnection/database.php"; ';

                $content .= "\$sql = 'SELECT * FROM blog_main_page';
                \$query = mysqli_query(\$conn, \$sql);
                while (\$row = mysqli_fetch_assoc(\$query)) {
                  ?>";
                
                  $content .= "<div class='divBlog'>
                  <h3><?php echo \$row['title_in_blog']; ?></h3>
                  <img class='imageFforBlogs' src='../<?php echo \$row['image']; ?>'>
                  <p><?php echo \$row['content']; ?></p>
              </div>
              <?php
              }";

                $content .=  ' require "../../footer.php"?> ';
                $content .= "</body>";
                $content .= "</html>";
              }

              file_put_contents($fullPath, $content);


              echo 'Файлът беше създаден успешно.';
            } elseif ($formType === "makeChanges") {
              $titleSet = $_POST['titleSet'];
              $linkSet = $_POST['linkSet'];
              $contentSet = $_POST['contentSet'];
              $idToUpdate = $_POST['updateID'];
              $titleBlogSet = $_POST['titleBlog'];


              $target_dirNewIMG = "dashboardImages/";
              $target_fileNewIMG = $target_dirNewIMG . basename($_FILES["imageChange"]["name"]);

              move_uploaded_file($_FILES["imageChange"]["tmp_name"], $target_fileNewIMG);


              $sqlSet = "UPDATE blog_main_page SET title='$titleSet', link='$linkSet', content='$contentSet', image='$target_fileNewIMG', title_in_blog='$titleBlogSet' WHERE ID = $idToUpdate";
              $querySet = mysqli_query($conn, $sqlSet);
            }
          }


          //////////////////////////////////////////////////////////////////////////////

          $sqlGet = "SELECT * FROM blog_main_page";
          $queryGet = mysqli_query($conn, $sqlGet);

          while ($rowGet = mysqli_fetch_assoc($queryGet)) {
            echo "<form class='formStyles' method='POST' enctype='multipart/form-data'>";
            echo "<div>";
            echo "<h1>Информация</h1>";
            echo "<input type='hidden' name='updateID' value='" . $rowGet['ID'] . "'>";
            echo "<label class=\"labelNews\" for=\"title\">Заглавие: </label>";
            echo "<input value=\"" . $rowGet['title'] . "\" type=\"text\" name=\"titleSet\" id=\"title\"><br>";

            echo "<label class=\"labelNews\" for=\"title\">Заглавие вътре в статията: </label>";
            echo "<input value=\"" . $rowGet['title_in_blog'] . "\" type=\"text\" name=\"titleBlog\" id=\"titleBlog\"><br>";

            echo "<label class='labelNews' for='image'>Снимка: </label>";
            echo "<input type='file' name='imageChange' id='imageChange'><br>";


            echo "<label class=\"labelNews\" for=\"link\">Линк: </label>";
            echo "<input value=\"" . $rowGet['link'] . "\" placeholder=\"Пр: име-на-статия.php\" type=\"text\" name=\"linkSet\" id=\"link\"><u>";
            echo "<br>";

            echo "<button id=\"saveChanges\" class=\"btnSubmitArticle\" type=\"submit\">Запази промените</button>";
            echo "<input type='hidden' name='formType' value='makeChanges'>";

            echo "</div>";

            echo "<div class=\"articleText\">";
            echo "<h1 class='header'>Статия</h1>";
            echo "<textarea name=\"contentSet\" id=\"content\" cols=\"120\" rows=\"10\">" . $rowGet['content'] . "</textarea>";
            echo "</div>";

            echo "</form>";
          }

          ?>

        </div>

        <div></div>

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