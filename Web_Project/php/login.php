<!DOCTYPE html>
<html>

<head>
  <title>Login and Sign Up Form</title>
  <style>
    /* Add CSS styles for the login and sign up forms here */
    body{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }
    #login-form,
    #signup-form {
      width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f7f7f7;
      border: 1px solid #ccc;
    }

    #login-form h2,
    #signup-form h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    #login-form label,
    #signup-form label {
      display: block;
      margin-bottom: 10px;
      font-size: 14px;
      font-weight: 600;
    }

    #login-form input[type="text"],
    #signup-form input[type="text"] {
      width: 100%;
      padding: 12px 20px;
      margin-bottom: 20px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    #login-form input[type="password"],
    #signup-form input[type="password"] {
      width: 100%;
      padding: 12px 20px;
      margin-bottom: 20px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    #login-form input[type="submit"],
    #signup-form input[type="submit"] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin-bottom: 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    #create-new-account {
      display: flex;
      column-gap: 20px;
      justify-content: center;
    }

    #create-new-account a {
      text-align: center;
      font-size: 14px;
      color: #4CAF50;
      text-decoration: none;
    }

    #create-new-account a:hover {
      color: #3e8e41;
    }
  </style>
</head>

<body>
  <div id="login-form">
    <h2>Login</h2>
    <form action="" method="POST">
      <label for="username">Username or Email:</label>
      <input type="text" id="username" name="username">
      <br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password">
      <br>
      <input type="submit" value="Login" name="submit">
    </form>
    <div id="create-new-account">
      Don't have an account?
      <a href="#" onclick="showSignupForm()">Create one.
      </a>
    </div>
  </div>

  <div id="signup-form" style="display:none">
    <h2>Sign Up</h2>
    <form action="./signup.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username">
      <br>
      <label for="username">Email:</label>
      <input type="text" id="email" name="email">
      <br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password">
      <br>
      <input type="submit" value="Sign Up" name="submit">
    </form>
    <div id="create-new-account">
      Already have an account?
      <a href="#" onclick="showLoginForm()">Login</a>
    </div>
  </div>
  <script>
    function showSignupForm() {
      document.getElementById('signup-form').style.display = 'block';
      document.getElementById('login-form').style.display = 'none';
    }
    function showLoginForm() {
      document.getElementById('login-form').style.display = 'block';
      document.getElementById('signup-form').style.display = 'none';
    }
  </script>
  <?php
//connect to database
$conn = mysqli_connect("localhost", "root", "", "wedding");

if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password =$_POST['password'];

  //check if the user exists in the database
  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $res = mysqli_query($conn,$sql);
    $NumRows = mysqli_num_rows($res);

    if($NumRows == 1){
        $_SESSION['username'] = $username;
        echo"Logged In successfully";
        header("location:contact.php");
    }else{
        echo"Log In failed";
    }
}



// Close the connection
mysqli_close($conn);
?>

</body>

</html>