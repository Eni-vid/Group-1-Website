<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="css/Home.css">
    <link rel="stylesheet" href="css/reserve.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
  <nav id="header" class="navbar navbar-expand-lg bg-dark fixed-top" style="top: 0px;">
    <div class="container-fluid">
      <a class="navbar-brand nav-link disabled" style="font-family: 'Playfair Display', serif;">Kings & Castles Hotel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav justify-content-end flex-grow-1">
            <a class="nav-link active" aria-current="page" href="Home.html">HOME</a>
            <a class="nav-link" href="About.html">ABOUT US</a>
            <a class="nav-link" href="Contact.html">CONTACT US</a>
            <a class="nav-link" href="reservation.php">RESERVATIONS</a>
          </div>
        </div>
    </div>
  </nav> 
  <br>
<?php

include("info.php");

?>
<form class="con"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <p id="reserve">RESERVATIONS</p>
    <p id="fill">Please fill correctly! </p>
<div class="whole">
  <div>
    <input id="fill" type="text" name="name" placeholder="Fullname" required><br>
    <span class="error">* <?php if(isset($nameErr)) echo $nameErr; ?></span>
  </div>
  <div>
    <input id="fill" type="email" name="email" placeholder="Email" required><br>
    <span class="error">* <?php if(isset($emailErr)) echo $emailErr; ?></span>
  </div>
 <div>
    <input id="fill" type="tel" name="phonenumber" placeholder="Phone number" required><br>
    <span class="error">* <?php if(isset($phonenumberErr)) echo $phonenumberErr; ?></span>
  </div>
  <div class="room">
    <label id="full">Select a room:</label>
    <select id="room" name="room">
    <option value="Apartment or suites">Room type...</option>
    <option value="Classic suite">Classic suite</option>
    <option value="Classic suite">Executive suite</option>
    <option value="Classic suite">Apartment</option>
    </select>
  </div>
  <div>
    <input id="fill" type="number" name="roomnum" placeholder="Number of Rooms">
  </div>
  <div class="date">
    <label id="full">Check-in:</label>
    <input id="dat" name="check_in" type="date">
    <br>
    <label id="full">Check-out:</label>
    <input id="date" name="check_out" type="date">
  </div>
  <div id="full">
    <select id="adultandchildren" name="adults">
    <option value="Number of adults..">Number of adults..</option>
    <option value="2 adult">1 adult</option>
    <option value="2 adults">2 adults</option>
    <option value="3 and above">3 and above</option>
    </select>
    <!-- <input id="adultandchildren" type="number" name="adults" placeholder="Number of Adults"> -->
  </div>
  <div id="full">
    <select id="adultandchildren" name="children">
    <option value="Number of children">Number of children..</option>
    <option value="1 child">1 child</option>
    <option value="No child">No child</option>
    <option value="2 and above">2 and above</option>
    </select>
    <!-- <input id="adultandchildren" type="number" name="children" placeholder="Number of Children"> -->
  </div>
</div>
 <button class="butt" id="butt" type="submit" name="submit"><b id="pro">PROCEED</b></button>
</form> 
<br>
<br>
</body>

</html>
