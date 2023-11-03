<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ДОБАВЯМЕ В HEAD ЧАСТТА ЛИНК ЗА TINY -->

</head>

<body><?php require "./headerInclude.php";
        require "../../databaseConnection/database.php";
        $sql = 'SELECT * FROM blog_main_page LIMIT 1 OFFSET 0';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($query)) {
        ?><div class='divBlog'>
            <h3><?php echo $row['title_in_blog']; ?></h3>
            <img class='imageFforBlogs' src='../<?php echo $row['image']; ?>'>
            <p><?php echo $row['content']; ?></p>
        </div>
    <?php
        }
        require "../../footer.php" ?> </body>

</html>