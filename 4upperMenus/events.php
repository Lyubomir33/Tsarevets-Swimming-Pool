<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/EVENTS.css">
  <script src="https://cdn.tiny.cloud/1/888o7m22n9qvu43oeop8rgfjphhlib69u7lmqrnzlnageh4e/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <title>Предстоящи събития</title>
</head>
<body>

<?php include "../headerInclude.php"; ?>

<h1 class='headEvents'>Резултати</h1>

<div class="input-box">
      <i class="uil uil-search"></i>
      <input type="text" id='search_input' placeholder="Потърсете спортист" />
      <button class="button search-person">Търси</button>
    </div>




<div class='returned_data'>
<?php 

  require "../databaseConnection/database.php";

  $sql = "SELECT * FROM events";
  $query = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($query)){

    echo "<p class='first_last_names'>$row[full_name]</p>
    <div class='pInEvents animate__animated animate__fadeInBottom'>$row[events_textarea]</div>";

    
  }

 


?>

</div>


<?php include "../footer.php"; ?>



<script async>
  $(document).ready(function(){
    $('.search-person').on('click',function(){
        let search_term = $('#search_input').val();
        let formData = {
					search_term: search_term,
				};

				$.ajax({
					url: "./functions/get_person_results.php", 
					type: "POST",
					dataType: "json",
					data: formData,
					success: function(data) {
            $('.returned_data').empty();
            for(let z=0; z<data.length; z++){
              $('.returned_data').append("<p class='first_last_names'>"+data[z]['full_name']+"</p><div class='pInEvents animate__animated animate__fadeInBottom'>"+data[z]['events_textarea']+"</div>");
            }
           
						console.log(data);
					},
					error(DATA) {
						console.log(DATA.responseText);
					}

				});
    });
  });
</script>


<script src="./js/jquery-3.7.1.min.js"></script>

  
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/EVENTS.css">
  <script src="https://cdn.tiny.cloud/1/888o7m22n9qvu43oeop8rgfjphhlib69u7lmqrnzlnageh4e/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <title>Предстоящи събития</title>
</head>
<body>

<?php include "../headerInclude.php"; ?>

<h1 class='headEvents'>Резултати</h1>

<div class="input-box">
      <i class="uil uil-search"></i>
      <input type="text" id='search_input' placeholder="Потърсете спортист" />
      <button class="button search-person">Търси</button>
    </div>




<div class='returned_data'>
<?php 

  require "../databaseConnection/database.php";

  $sql = "SELECT * FROM events";
  $query = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($query)){

    echo "<p class='first_last_names'>$row[full_name]</p>
    <div class='pInEvents animate__animated animate__fadeInBottom'>$row[events_textarea]</div>";

    
  }

 


?>

</div>


<?php include "../footer.php"; ?>



<script>
  $(document).ready(function(){
    $('.search-person').on('click',function(){
        let search_term = $('#search_input').val();
        let formData = {
					search_term: search_term,
				};

				$.ajax({
					url: "./functions/get_person_results.php", 
					type: "POST",
					dataType: "json",
					data: formData,
					success: function(data) {
            $('.returned_data').empty();
            for(let z=0; z<data.length; z++){
              $('.returned_data').append("<p class='first_last_names'>"+data[z]['full_name']+"</p><div class='pInEvents animate__animated animate__fadeInBottom'>"+data[z]['events_textarea']+"</div>");
            }
           
						console.log(data);
					},
					error(DATA) {
						console.log(DATA.responseText);
					}

				});
    });
  });
</script>


<script src="./js/jquery-3.7.1.min.js"></script>

  
</body>
>>>>>>> 5c201ac3fd85f13aaab70baede40e1c96ec59aa2
</html>