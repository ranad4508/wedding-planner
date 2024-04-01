<?php
$conn = mysqli_connect("localhost", "root", "", "wedding");
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; //encrypt the password
  
    //check if the user already exists
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
  
    if(mysqli_num_rows($result) > 0) {
      //username already exists
      echo "This username is already taken";
    } else {
      //create new user
      $sql = "INSERT INTO users (username,email, password) VALUES ('$username','$email', '$password')";
      if(mysqli_query($conn, $sql)) {
        //signup success
        $_SESSION['username'] = $username;
        header("Location: login.php");
      } else {
        //signup failed
        echo "Error: " . mysqli_error($conn);
      }
    }
  }
  
  // Close the connection
  mysqli_close($conn);
?>