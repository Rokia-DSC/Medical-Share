<?php

include('config.php');

session_start();

if(isset($_POST['save'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  $gender =$_POST['gender'];
  $insert = "INSERT INTO users (username , email , password , phone , gender) VALUES ('$username','$email','$password','$phone','$gender')";
  mysqli_query($con, $insert);
  $_SESSION['username']=$username;

  header('location: home.php');

}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Registration Screen</title>
    <link rel="stylesheet" href="css\registration.css">
  </head>
  <body>
    <div class="container">
      <h1>Registration</h1>
      <form method="POST">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" name="confirm-password" required>

        <label for="phone">Phone Number</label>
        <input type="text" id="phone" name="phone" required>
<br><br>

        <div class="form-check" style="display: inline-block;">
        <input class="form-check-input" type="radio" name="gender" value="m" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1" style="display: inline-block;">
          Male
        </label>
      </div>
      <div class="form-check" style="display: inline-block;">
        <input class="form-check-input" type="radio" name="gender" value="f" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1" style="display: inline-block;">
          Female
        </label>
      </div>

<br><br>
        <input type="submit" name="save" value="Register">

        <div class="register-link">
          <a href="#">Already have an account? Login here.</a>
        </div>
      </form>
    </div>
  </body>
</html>
