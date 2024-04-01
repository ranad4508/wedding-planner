<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <style>
    /* Add CSS styles for the home page here */
    /* Add class for the welcome message*/
    .welcome-message {
        text-align: center;
        margin-top: 20px;
        font-size: 22px;
        font-weight: bold;
    }
    /* Add class for the logout button*/
    .logout-button {
        display: block;
        width: 150px;
        margin: 20px auto;
        padding: 10px;
        background-color: #f44336;
        color: #fff;
        text-align: center;
        text-decoration: none;
        border-radius: 4px;
    }
    /* Add hover effect on logout button */
    .logout-button:hover {
        background-color: #e53935;
        color: #fff;
        cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="welcome-message">
  Congratulations. Your booking was successfull.
Thank you for booking.</div> <br><br>

  <a href="index.php" class="logout-button">Logout</a>
</body>
</html>
