<?php require_once '../../config/connection.php'; ?>
<?php require_once '../../parts/header-page.php'; ?>
<?php require_once '../../parts/nav-page.php'; ?>
  <div class="container">
    <h3 class="mt-4 mb-4">Add New Students</h3>
    <form action="add-process.php" method="post" name="myForm" onsubmit="return(validate());">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="students_name">Name</label>
            <input type="text" class="form-control" id="students_name" name="students_name" placeholder="Students name">
            <small class="text-danger" id="error_name"></small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="students_address">Address</label>
            <input type="text" class="form-control" id="students_address" name="students_address" placeholder="Students address">
            <small class="text-danger" id="error_email"></small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="students_phone">Phone</label>
            <input type="text" class="form-control" id="students_phone" name="students_phone" placeholder="Students phone">
            <small class="text-danger" id="error_phone"></small>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Add</button>
      <a href="index.php" class="btn btn-outline-primary">Back</a>
    </form>  
  </div>
<?php require_once '../../parts/footer-page.php'; ?>