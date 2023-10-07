<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Статии</title>
</head>

<body>

  <form method="post">
    <input type="submit" name="createFile">
    <label for="name">Наишете името на ликна: </label>
    <input name="URL" type="text">
  </form>

  <a href="./<?php echo $URL; ?>">
      Link to new page 
  </a>

</body>

</html>

<?php 



if (isset($_POST['createFile'])) {

  $URL = $_POST['URL'];

  $content = '<html><head><title>Article One</title></head><body><h1>This is Article One</h1></body></html>';
  $filename = 'ArticleTwo.php';

  // Write content to the file
  file_put_contents( $URL , $content);

  echo 'File created successfully.';
}

?>