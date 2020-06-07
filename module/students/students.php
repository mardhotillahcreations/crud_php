<?php require_once '../../config/connection.php'; ?>
<?php require_once '../../parts/header-page.php'; ?>
<?php require_once '../../parts/nav-page.php'; ?>
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
<?php require_once '../../parts/footer-page.php'; ?>