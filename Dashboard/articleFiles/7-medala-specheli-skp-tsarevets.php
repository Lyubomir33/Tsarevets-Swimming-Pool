<!DOCTYPE html>
<html lang="en">

<head>
  <script src='https://cdn.tiny.cloud/1/888o7m22n9qvu43oeop8rgfjphhlib69u7lmqrnzlnageh4e/tinymce/6/tinymce.min.js' referrerpolicy='origin'></script>
  <link rel='stylesheet' href='../Dashboard CSS/articlesResponsive.css'>
</head>

<body><?php require "./headerInclude.php";
      require "../../databaseConnection/database.php";
      $sql = 'SELECT * FROM blog_main_page LIMIT 1 OFFSET 10';
      $query = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($query)) {
      ?><div class='divBlog'>
      <h3><?php echo $row['title_in_blog']; ?></h3>

      <p><?php echo $row['content']; ?></p>
    </div>
  <?php
      }
      require "../../footer.php" ?> </body>

</html>