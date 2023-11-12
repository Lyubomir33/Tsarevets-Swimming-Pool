<?php



require "../databaseConnection/database.php";


$displayMessage = "";




if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $formType = $_POST['formType'];

  if ($formType === "register") {

    $emailReg = $_POST['emailReg'];
    $passReg = $_POST['passReg'];
    $passRegRepeat = $_POST['passRegRepeat'];

    if ($passReg !== $passRegRepeat) {
      $displayMessage = "Паролите не съвпадат";
    } else {

      $pwdHash = hash('sha256', $passReg);
      $pwdHashRepeat = hash('sha256', $passRegRepeat);

      $sql = "INSERT INTO admins (email, pass) VALUES ('$emailReg', '$pwdHash')";
      $query = mysqli_query($conn, $sql);

      $displayMessage = "Успешна регистрация";
      return;
    }
  } elseif ($formType === "login") {
    $emailLogin = $_POST['emaiLog'];
    $passLogin = $_POST['passLog'];
    $passLoginHash = hash('sha256', $passLogin);

    $sqlLog = 'SELECT email, pass, account_type FROM admins';
    $queryLog = mysqli_query($conn, $sqlLog);

    if ($queryLog->num_rows > 0) {
      while ($row = mysqli_fetch_assoc($queryLog)) {
        if ($row['pass'] != $passLoginHash) {
         
          $displayMessage = "Името или паролата не съвпадат";
          
        } else if ($row['email'] == $emailLogin && $row['pass'] == $passLoginHash) {
          $foundMatch = true;
          
          if ($foundMatch) {
              session_start();
            $_SESSION['emailLog'] = $emailLogin;
            $_SESSION['account_type'] = $row['account_type'];
   
            header("Location: ../Dashboard/dashboard.php");
          }
          break;
        }
      }
    }

   

    
  }
}

?>
