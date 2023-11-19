<?php


require "../../databaseConnection/database.php";
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
$search_term = $_POST['search_term'];




$stmt = $conn->prepare("SELECT * FROM events WHERE full_name LIKE CONCAT('%', ?, '%')");
$stmt->bind_param("s", $search_term);


$stmt->execute();

$result = $stmt->get_result();

$return_data = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $person = [];
      $person['full_name'] = $row["full_name"];
      $person['events_textarea'] = $row["events_textarea"];
      $return_data[] = $person;
    }

} else {
  $return_data['error'] = 'Няма намерени резултати';
}
echo json_encode($return_data);
$stmt->close();
}

$conn->close();
?>