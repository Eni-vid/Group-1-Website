<?php

//connection and database//
$servername = "localhost";
$username = "root";
$password = "";
$database = "Reservations";


// Create connection
$conn = mysqli_connect($servername, $username, "", $database);

// // Check connection
if (!$conn) {
  die("Unsuccessful: " . mysqli_connect_error());
}
echo "Successful! ";

// define variables and set to empty values
$name = $email = $phonenumber = $room = $roomnum = $check_in = $check_out = $adults = $children = "";
$nameErr = $emailErr = $phonenumberErr = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

  //name validation
  if (empty($_POST["name"])) {
        $nameErr = "Full name is required";
      } else {
        $name = test_input($_POST["name"]);

        // checking if firstname only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
        }
      }
  
  //email validation
  if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);

        // check if e-mail address is correct
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email";
        }
      }

  //phonenumber validation
  if (empty($_POST["phonenumber"])){
       $phonenumberErr = "Phone number is required.";
       } else {
        $phonenumber = test_input($_POST["phonenumber"]);

      //checking if data is all numbers
      if (! preg_match ("/^[0-9]*$/", $phonenumber) ){
       $phonenumberErr = "Only numeric value is allowed.";
      } 
    }

    //button click validation
/*    if(isset($_POST["submit"])){
  } 
         else {
        echo "Details are not submited.";
      }*/


 // Prepare an insert statement
    $sql = "INSERT INTO myguests (fullname, email, phonenumber, roomtype, rooms_wanted, check_in, check_out, adults, children) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?)";
 
if($stmt = mysqli_prepare($conn, $sql)){
// Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "ssisissss", $name, $email, $phonenumber, $room, $roomnum, $check_in, $check_out, $adults, $children);
    
$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$room = $_POST['room'];
$roomnum = $_POST['roomnum'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$adults = $_POST['adults'];
$children = $_POST['children'];
    
// Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        echo "Your Application For Reservarion Is Successful!";
    } else{
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
    }
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
}


?>

<!-- ?php
echo "!<br>";

   echo "<h2>Your Details: </h2>";
   echo $name; echo "<br>";
   echo $nameErr; echo"<br>";
   echo $email; echo "<br>";
   echo $emailErr; echo "<br>";
   echo $phonenumber; echo "<br>";
   echo $phonenumberErr; echo "<br>";
  ?> -->