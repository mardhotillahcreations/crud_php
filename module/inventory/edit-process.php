<?php  
require_once '../../config/connection.php';

$students_id = $_POST['students_id'];
$students_name = $_POST['students_name'];
$students_address = $_POST['students_address'];
$students_phone = $_POST['students_phone'];

$sql = "UPDATE students SET students_name = '$students_name',
                            students_address = '$students_address',
                            students_phone = '$students_phone'  
                        WHERE students_id = '$students_id'";

if ($conn->query($sql) === TRUE) {
  header('location: students.php');
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>