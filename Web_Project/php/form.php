<?php
 include("configuration.php");
  //If form is submitted
  if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $destination =$_POST['destination'];
    $date = $_POST['date'];
    $package = $_POST['package'];
    $budget =$_POST['budget'];

    //validating inputs if need
    if(empty($name)){
      echo"Name cannot be left empty <br>";
  }
  if(empty($address)){
    echo"address cannot be left empty <br>";
}
  if(empty($phone) || strlen($phone)<10){
    echo "Number must be of 10 digits";
  }
  if(empty($email)|| !filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo"Please enter a valid email address <br>";
  }
  if(empty($destination)){
    echo"Destination cannot be left empty <br>";
}
  else{
    
      $sql = "INSERT INTO booking(name,address,email,phone,destination,date,package,budget)
      VALUES('$name','$address','$email','$phone','$destination','$date','$package','$budget')";
      if(mysqli_query($conn, $sql)){
      header("location: booking.php");
      }
    }
  mysqli_close($conn);
}
?>


