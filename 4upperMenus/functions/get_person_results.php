<?php


require "../../databaseConnection/database.php";
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
$search_term = $_POST['search_term'];




$stmt = $conn->prepare("SELECT * FROM events WHERE full_name LIKE CONCAT('%', ?, '%')");
$stmt->bind_param("s", $search_term);


// Execute the statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Check and output result
$return_data = [];
if ($result->num_rows > 0) {
    // Output data of each row
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
// Close the statement and connection
$stmt->close();
}

$conn->close();
?>