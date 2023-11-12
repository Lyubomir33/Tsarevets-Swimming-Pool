<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Dashboard CSS/dashboard.css">
  <link rel="stylesheet" href="/css/newsMainPage.css"> <!-- HERE ARE LOCATED THE STYLES FOR THIS PAGE -->
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

            <div class="nav-option option3">
              <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
              <h3> Новини</h3>
            </div>

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
            <h1 class="recent-Articles">Новини</h1>
          </div>

          <form id="templateForm" class='formStyles' enctype="multipart/form-data" method="POST">


            <div class="divVision">
              <h1>Създаване на визия</h1><br>

              <label class="labelNews" for="title">Заглавие: </label><br>
              <input required type="text" name="title" id="title"><br>

              <label class="labelNews" for="subTitle">Подзаглавие</label>
              <input required type="text" name="subTitle" id="subTitle">

              <label class="labelNews" for="title">Заглавие в статията: </label>
              <input required type="text" name="titleBlog" id="titleBlog"><br>

              <label class="labelNews">Брой на хората посетили статията:</label>
              <input required id="numberOfViews" name="numberOfViews" type="text">

             

              <label for="article_date">Дата в статията:</label>
              <input required id="article_date" name="article_date" type="text">

              <label class="labelNews" for="image">Снимка: </label>
              <input required type="file" name="image" id="image"><br>

              <label class="labelNews" for="link">Линк: </label>
              <input required placeholder="Линк към статията" type="text" name="link" id="link"><br><u>
              </u>

              <script>

              </script>

              <button id="save" class="btnSubmitArticle" type="submit">Създай статия</button>
              <input required type='hidden' name='formType' value='createNew'>

            </div>

            <div class="articleText">
              <h1>Съдържание</h1>
              <textarea class="textareaMain" name="content" cols="50" rows="10" id="content"></textarea>
            </div>

          </form>


          <?php

          require "../databaseConnection/database.php";

          if ($_SERVER["REQUEST_METHOD"] == "POST") {  

            $formType = $_POST['formType'];

            if ($formType === "createNew") {
              $title = $_POST['title'];
              $link = $_POST['link'];
              if (!preg_match('/\.php$/', $link)) {
                $link .= '.php'; 
            }
              $content = $_POST['content'];
              $titleBlog = $_POST['titleBlog'];
              $numbOfViews = $_POST['numberOfViews'];
              $article_date = $_POST['article_date'];
              $subtitle = $_POST['subTitle'];


              $target_dir = "dashboardImages/";
              $target_file = $target_dir . basename($_FILES["image"]["name"]);

              move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

              $sqlForm = "INSERT INTO blog_main_page (title, image, link, content, partial_content,title_in_blog, number_views,article_date) VALUES ('$title', '$target_file', '$link', ' $content', ' $subtitle', '$titleBlog', '$numbOfViews', ' $article_date')";
              $queryForm = mysqli_query($conn, $sqlForm);

              $directory = "./articleFiles/";
              $fullPath = $directory . $link;


              $sql = "SELECT * FROM blog_main_page";
              $query = mysqli_query($conn, $sql);
              
              $i = 0;
              
              while ($row = mysqli_fetch_assoc($query)) {
                  $content = '';
              
                  $content .= "<!DOCTYPE html>";
                  $content .= "<html lang=\"en\">";
                  $content .= "<head>";
                  $content .= "<script src='https://cdn.tiny.cloud/1/888o7m22n9qvu43oeop8rgfjphhlib69u7lmqrnzlnageh4e/tinymce/6/tinymce.min.js' referrerpolicy='origin'></script>";
                  $content .= "<link rel='stylesheet' href='../Dashboard CSS/articlesResponsive.css'>";
                  $content .= "</head>";
                  $content .= "<body>";
                  $content .= '<?php require "./headerInclude.php"; require "../../databaseConnection/database.php"; ';
              
                  $content .= "\$sql = 'SELECT * FROM blog_main_page LIMIT 1 OFFSET {$i}';
                  \$query = mysqli_query(\$conn, \$sql);
                  while (\$row = mysqli_fetch_assoc(\$query)) {
                      ?>";
              
                  $content .= "<div class='divBlog'>
                                <h3><?php echo \$row['title_in_blog']; ?></h3>
                               
                                <p><?php echo \$row['content']; ?></p>
                            </div>
                            <?php
                            }";
              
                  $content .=  ' require "../../footer.php"?> ';
                  $content .= "</body>";
                  $content .= "</html>";
              
                

                  file_put_contents($fullPath, $content);              
                  
                  $i++;
              }
              
              echo 'Файловете бяха създадени успешно.';
              
            } else if ($formType === "makeChanges") {
              $titleSet = $_POST['titleSet'];
              $linkSet = $_POST['linkSet'];
              $contentSet = $_POST['contentSet'];
              $idToUpdate = $_POST['updateID'];
              $titleBlogSet = $_POST['titleBlog'];
              $numbOfViews = $_POST['numberOfViews'];
              $article_date = $_POST['article_date'];
              $subtitleSet = $_POST['subTitleSet'];

              $target_dirNewIMG = "dashboardImages/";
              $target_fileNewIMG = $target_dirNewIMG . basename($_FILES["imageChange"]["name"]);

             if( move_uploaded_file($_FILES["imageChange"]["tmp_name"], $target_fileNewIMG)) {

              $sqlImgUpdate = "UPDATE blog_main_page SET image='$target_fileNewIMG' WHERE ID = $idToUpdate";
              $queryImg = mysqli_query($conn,$sqlImgUpdate);
             }


              $sqlSet = "UPDATE blog_main_page SET title='$titleSet', link='$linkSet', content='$contentSet', partial_content='$subtitleSet', title_in_blog='$titleBlogSet', number_views='$numbOfViews', article_date = '$article_date' WHERE ID = $idToUpdate";
              $querySet = mysqli_query($conn, $sqlSet);

             
            }
          }


          //////////////////////////////////////////////////////////////////////////////

          $sqlGet = "SELECT * FROM blog_main_page ORDER BY ID DESC";
          $queryGet = mysqli_query($conn, $sqlGet);

          while ($rowGet = mysqli_fetch_assoc($queryGet)) {
            echo "<form class='formStyles' method='POST' enctype='multipart/form-data'>";
            echo "<div>";
            echo "<h1>Информация</h1>";

            echo "<input type='hidden' name='updateID' value='" . $rowGet['ID'] . "'>";
            echo "<label class=\"labelNews\" for=\"title\">Заглавие: </label>";
            echo "<input value=\"" . $rowGet['title'] . "\" type=\"text\" name=\"titleSet\" id=\"title\"><br>";

            echo "<label class=\"labelNews\" for=\"subTitleSet\">Подзаглавие: </label>";
            echo "<input value=\"" . $rowGet['partial_content'] . "\" type=\"text\" name=\"subTitleSet\" id=\"subTitleSet\"><br>";

            echo "<label class=\"labelNews\" for=\"title\">Заглавие в статията: </label>";
            echo "<input value=\"" . $rowGet['title_in_blog'] . "\" type=\"text\" name=\"titleBlog\" id=\"titleBlog\"><br>";

            echo "<label class='labelNews'>Брой на хората посетили статията:</label>
                  <input value=\"".$rowGet['number_views'] . "\"id='numberOfViews' name='numberOfViews' type='text'><br>";

            echo "<label for='article_date'>Дата в статията:</label>
                 <input value=\"".$rowGet['article_date'] . "\" id='article_date' name='article_date' type='text'><br>";      

           

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
            echo "<textarea class='textareaMain' name=\"contentSet\" id=\"content\" cols=\"50\" rows=\"10\">" . $rowGet['content'] . "</textarea>";
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

tinymce.init({
    selector: '#content',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });

      let menuicn = document.querySelector(".menuicn");
      let nav = document.querySelector(".navcontainer");

      menuicn.addEventListener("click", () => {
        nav.classList.toggle("navclose");
      })
    </script>

  </body>



</html>