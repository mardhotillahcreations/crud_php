<?php 
require_once '../../config/connection.php'; 

$students_id = $_GET['id'];

$sql = "SELECT * FROM students WHERE students_id = $students_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
} else {
  echo "0 results";
}

?>
<?php require_once '../../parts/nav-page.php'; ?>
<?php require_once '../../parts/header-page.php'; ?>
  <div class="container">
    <h3 class="mt-4 mb-4">Edit Students</h3>
    <form action="edit-process.php" method="post" name="myForm" onsubmit="return(validate());">
      <input type="hidden" name="students_id" value="<?= $row['students_id'] ?>">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="students_name">Name</label>
            <input type="text" class="form-control" id="students_name" name="students_name" value="<?= $row['students_name'] ?>" placeholder="Students name">
            <small class="text-danger" id="error_name"></small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="students_address">Address</label>
            <input type="text" class="form-control" id="students_address" name="students_address" value="<?= $row['students_address'] ?>" placeholder="Students address">
            <small class="text-danger" id="error_email"></small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="students_phone">Phone</label>
            <input type="text" class="form-control" id="students_phone" name="students_phone" value="<?= $row['students_phone'] ?>" placeholder="Students phone">
            <small class="text-danger" id="error_phone"></small>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Edit</button>
      <a href="index.php" class="btn btn-outline-primary">Back</a>
    </form>  
  </div>
<?php require_once '../../parts/footer-page.php'; ?>