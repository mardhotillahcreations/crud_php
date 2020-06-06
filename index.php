<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Show Stundets</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
              <a class="navbar-brand" href="index.php">Navbar</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                  <a class="nav-item nav-link" href="#">Features</a>
                  <a class="nav-item nav-link" href="#">Pricing</a>
                  <a class="nav-item nav-link disabled" href="#">Disabled</a>
                </div>
              </div>
            </div>
        </nav>
        <div class="container">
            <a href="add.php" class="btn btn-outline-primary mt-4">Add New Stundets</a>
            <table class="table table-striped table-hover mt-4">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Address</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php  
                    $sql = "SELECT * FROM students";
                    $result = $conn->query($sql);
                    $num = 0;

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) { $num++;
                ?>
                <tr>
                  <th scope="row"><?= $num; ?></th>
                  <td><?= $row['students_name'] ?></td>
                  <td><?= $row['students_address'] ?></td>
                  <td><?= $row['students_phone'] ?></td>
                  <td>
                      <a href="edit.php?id=<?= $row['students_id']; ?>" class="btn btn-outline-warning">Edit</a>
                      <a href="javascript:delete_alert(<?= $row['students_id']; ?>)" class="btn btn-outline-danger" id="delete">Delete</a>
                      <!-- <a href="#" id="delete" onclick="delete_alert()">Hey</a> --> 
                  </td>
                </tr>
                <?php } } else { ?> 
                <tr>
                  <td colspan="5">0 results</td>
                </tr>
                <?php } $conn->close(); ?>
              </tbody>
            </table>
        </div>
        <?php $acak = rand(10,1000); ?>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="myLearn.js?acak=<?= $acak; ?>"></script>
    </body>
</html>