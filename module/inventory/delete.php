<?php  
require_once '../../config/connection.php';

$students_id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM students WHERE students_id = $students_id ";

if ($conn->query($sql) === TRUE) {
  header('location: students.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>