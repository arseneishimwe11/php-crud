<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM  users where id=$id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
$first_name = $row['fname'];
$last_name = $row['lname'];
$email = $row['email'];
$gender = $row['gender'];
if (isset($_POST['submit'])) {
  $first_name = $_POST['fname'];
  $last_name = $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['pwd'];
  $gender = $_POST['gender'];

  $sql = "UPDATE users set id=$id , fname='$first_name',lname = '$last_name',email='$email',gender = '$gender'  where id=$id";
  $result = mysqli_query($connect, $sql);
  if ($result == true) {
    // echo "Updated successfully!!!"; 
    header('location:display.php'); //
  } else {
    echo 'Error:', $sql . '<br>' . $conn->error;
  }
  $conn->close();

}




?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type='text/css' href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>
<div class="container">
  <div class="link-header">
    <h1 class="link-text"></h1>
  </div>
  <div class="text">
    <h1 id="p-0">Update user</h1>
    <p id="p-2">Personal Information</p>
  </div>
  <div class="login">
  <form action="update.php?updateid=<?php echo $id; ?>" method="POST">
    <div class="your-input">
      <label class="label">First name: </label><br/>
      <input type="text" name="fname" id="fname" class="input-form" placeholder="Enter your First name" value=<?php echo $first_name; ?>   /><br />
      <label class="label"> Last name:</label><br/>
      <input type="text" name="lname" id="lname" class="input-form" placeholder="Enter your Last name" value=<?php echo $last_name ?>   /><br />
      <label class="label"> Email:</label><br />
      <input type="text" name="email" id="email" class="input-form" placeholder="Enter your email" value=<?php echo $email ?>/><br />
      <label class="label"> Gender:</label><br />
      <div class="gender">
        <input type="radio" name="gender" id="Male" value="Male" <?php if ($gender == 'Male') {
          echo "checked";
        } ?>/>Male<br />
        <input type="radio" name="gender"id="Female" value="Female" <?php if ($gender == 'Female') {
          echo "checked";
        } ?>/>Female<br /><br />
      </div>

    </div>
    <div class="submit-input">
      <input type="submit" name="submit" id="submit" value="Update" action=''/>
    </div>

  </form>
  </div>
 
</div>

</body>

</html>