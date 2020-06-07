<?php
require_once 'config/connection.php';

$students_name = $_POST['students_name'];
$students_address = $_POST['students_address'];
$students_phone = $_POST['students_phone'];

$sql = "INSERT INTO students (students_name, students_phone, students_address)
        VALUES ('$students_name', '$students_phone', '$students_address')";

if ($conn->query($sql) === TRUE) {
  header('location: students.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>