<!-- ?php

include ('info.php');

//connection and database//
$servername = "localhost";
$username = "root";
$password = "";
$database = "Reservations";


// Create connection
$conn = mysqli_connect($servername, $username, "", $database); -->

// Check connection
// if (!$conn) {
//   die("Unsuccessful: " . mysqli_connect_error());
// }
// echo "Successful ";


// Create database
// $sql = "CREATE DATABASE Reservations";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Fullname VARCHAR(40) NOT NULL,
Email VARCHAR(30) NOT NULL,
Phonenumber VARCHAR(11) NOT NULL,
Roomtype VARCHAR(20) NOT NULL,
Rooms_wanted VARCHAR(2) NOT NULL,
Check_in VARCHAR(30) NOT NULL,
Check_out VARCHAR(30) NOT NULL,
Adults VARCHAR(2) NOT NULL,
Children VARCHAR(2) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

//sending data to database
if ($_SERVER["REQUEST_METHOD"] === "POST") { 

$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$room = $_POST['room'];
$roomnum = $_POST['roomnum'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$adults = $_POST['adults'];
$children = $_POST['children'];

if(!empty($name) && !empty($email) && !empty($phonenumber) && !empty($room) && !empty($roomnum) && !empty($check_in) && !empty($check_out) && !empty($adults) && !empty($children)){

    $sql = "INSERT INTO MyGuests(Fullname, Email, Phonenumber, Roomtype, Rooms_wanted, Check_in, Check_out, Adults, Children)
    VALUES ('$name', '$email', '$phonenumber', '$room', '$roomnum', '$check_in', '$check_out', '$adults', '$children')"
    ;
} else {
    echo "Unsuccessful";
}

}

// Prepare an insert statement
//     $sql = "INSERT INTO myguests (fullname, email, phonenumber, roomtype, rooms_wanted, check_in, check_out, adults, children) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?)";
 
// if($stmt = mysqli_prepare($conn, $sql)){
// // Bind variables to the prepared statement as parameters
//     mysqli_stmt_bind_param($stmt, "ssisissss", $name, $email, $phonenumber, $room, $roomnum, $check_in, $check_out, $adults, $children);
    
    
// // Attempt to execute the prepared statement
//     if(mysqli_stmt_execute($stmt)){
//         echo "Records inserted successfully.";
//     } else{
//         echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
//     }
// } else{
//     echo "ERROR: Could not prepare query: $sql. " . mysqli_error($conn);
// }


// mysqli_close($conn);
    
?>