<?php include "header.php";
if(isset($_POST['submit'])) {
    include "config.php";

    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']); // Get user ID from the form
    $fname = mysqli_real_escape_string($conn, $_POST['f_name']); //came from name attribute in form
    $lname = mysqli_real_escape_string($conn, $_POST['l_name']);
    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);

    $sql = "UPDATE user SET first_name = '{$fname}', last_name = '{$lname}', username = '{$user}', role = '{$role}' WHERE user_id = {$user_id}"; // Update user details in the database
    $result = mysqli_query ($conn, $sql) or die("Query Failed: " . mysqli_error($conn)); // TO run the query

        if(mysqli_query($conn, $sql)){
            header("Location: http://localhost/news-project/admin/users.php"); // Redirect to users page after successful insertion

        }
    }

 ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Modify User Details</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
                  <!-- Form Start -->
                   <?php
                   $u_id = $_GET['id'];
                   include "config.php";
                   $sql = "SELECT * FROM user WHERE user_id = {$u_id} ";
                   $result = mysqli_query($conn, $sql) or die("Query failed:");

                   if(mysqli_num_rows($result)> 0){
                    while($rows = mysqli_fetch_assoc($result)){
                   
                   
                   ?>
                  <form  action="<?php $_SERVER['PHP_SELF']?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="user_id"  class="form-control" value="<?php echo $rows['user_id'];?>" placeholder="" >
                      </div>
                          <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="f_name" class="form-control" value="<?php echo $rows['first_name'];?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="l_name" class="form-control" value="<?php echo $rows['last_name'];?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="username" class="form-control" value="<?php echo $rows['username'];?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" value="<?php echo $row['role']; ?>">
                            <?php
                            if($rows['role'] == 1){
                                echo "<option value='0'>normal User</option>
                                      <option value='1' selected>Admin</option>";
                            }else{
                                echo "<option value='0' selected>normal User</option>
                                      <option value='1'>Admin</option>";
                            }
                            ?>
                          </select>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
                  <?php
                    }}
                  ?>
                  <!-- /Form -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
