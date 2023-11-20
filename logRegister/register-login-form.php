<?php 

session_start();

if(isset($_SESSION['emailLog'])) {
    
        $loggedInEmail = $_SESSION['emailLog'];

    header('Location: ./dashboard.php');

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/login-register-form.css">
	<link rel="icon" type="image/x-icon" href="/images/по-нова_снимка-removebg-preview.png">

<title>Вход</title>
</head>
<body>
<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="post" >
					<label for="chk" aria-hidden="true">Форма за регистрация</label>
					<u><span id="message" class="displayMessage"><?php  require "../logRegister/registerLogic.php";  echo $displayMessage; ?></span></u>
					<input type="hidden" name="formType" value="register">
					<input type="emailReg" name="emailReg" placeholder="Имейл" required="">
					<input type="password" name="passReg" placeholder="Парола" required="">
          <input type="password" name="passRegRepeat" placeholder="Повтори парола" required="">
					<!--<button>Регистрация</button>-->
				</form>
			</div>

			<div class="login">
				<form method="post">
					<label for="chk" aria-hidden="true">Вход</label>
					<input type="hidden" name="formType" value="login">
					<input type="emaiLog" name="emaiLog" placeholder="Имейл" required="">
					<input type="password" name="passLog" placeholder="Парола" required="">
					<button>Вход</button>
				</form>
       
			</div>
	</div>


</body>
</html>

