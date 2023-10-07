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

          

          <?php

          require "../databaseConnection/database.php";



          if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $title = $_POST['title'];
            $link = $_POST['link'];
        

          

            $target_dir = "./";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);

            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

            $sqlForm = "INSERT INTO blog_main_page (title, image, link) VALUES ('$title', '$target_file', '$link')";
            $queryForm = mysqli_query($conn, $sqlForm);
          }

          ?>

          <form enctype="multipart/form-data" method="POST">
            <label for="title">Заглавие</label>
            <input type="text" name="title" id="title"><br>
            <label for="image">Снимка</label>
            <input type="file" name="image" id="image"><br>
            <label for="link">Линк</label>
            <input type="text" name="link" id="link"><br>
           

            <button type="submit">Запиши</button>

          </form>
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


      const inputFields = document.querySelectorAll('input[type="text"]');


      inputFields.forEach((input) => {
       
        const storageKey = `userInput_${input.id}`;

        const storedValue = localStorage.getItem(storageKey);

       
        if (storedValue) {
          input.value = storedValue;
        }

        input.addEventListener('input', () => {
          localStorage.setItem(storageKey, input.value);
        });
      });

    </script>

  </body>

</html>