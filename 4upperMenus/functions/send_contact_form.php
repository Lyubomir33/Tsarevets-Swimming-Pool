<?php 


					require "../../databaseConnection/database.php";


					if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
							$names = $_POST['names'];
							$email = $_POST['email'];
							$textOpinion = $_POST['opinion'];

							if (empty($names) || empty($email) || empty($textOpinion)) {
								echo json_encode(
                  array('result'=>'error')
                );
							} else {

								echo json_encode(
                  array('result'=>'success'));
									
								$sqlSend = "INSERT INTO contactform (names, email, opinion) VALUES ('$names', '$email', '$textOpinion')";
								$query = mysqli_query($conn, $sqlSend);
               
							}
						
					}




?>