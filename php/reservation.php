<?php

include("info.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <style>                
        body {
          background: linear-gradient(100deg, darkgrey 40%, floralwhite 70%);
        }

        #reserve{
          font-size: 25px;
          font-weight: 30px;
          font-family: Georgia, 'Times New Roman', Times, serif;
          margin-top: 0px;
          text-align: center;
        }

        #text{
          font-family: Georgia, 'Times New Roman', Times, serif;
          color: grey;
        }

        .error{
            color : red;
            font-size : 15px;
        }
        .container{
            width: 300px;
            border: 2px solid gray;
            padding: 20px;
            margin-top: 30px;
            margin-left: 500px;
            border-radius: 10px;
            background-color: floralwhite;
        }

        .drop{
          width: 50px;
          margin-left: 20px;
          margin-top: 10px;
        }

        .size{
          width: 150px;
          margin-left: 20px;
          margin-top: 10px;
        }

        #size{
          border: 2px solid gray;
          width: 250px;
          height: 22px;
          border-radius: 5px;
        }

        #adultandchildren{
          border: 2px solid gray;
          margin-bottom: 10px;
          width: 250px;
          height: 22px;
          border-radius: 5px;
        }

        .room{
          margin-top: 5px;
          margin-left: 40px;
          margin-bottom: 15px;
        }

        #room{
          width: 100px;
        }

        .date{
          margin-left: 40px;
        }

        #dat{
          width: 110px;
          margin-top: 15px;
          margin-left: 7px;
        }

        #date{
          width: 110px;
          margin-top: 10px;
          margin-bottom: 5px;
        }
         
        #id{
          color: black;
        }

        button{
          /* color: darkgrey; */
          margin-left: 15%;
          margin-top: 15px;
          width: 200px;
          height: 30px;
          border: 2px solid #333;
          border-radius: 15px;
        }

        #button{
          font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .footer{
          float: left;
        }
        .footer-container {
          width: 300px;
          height: 200px;
          border: 2px solid darkgray;
          padding: 30px;
          margin: 20px;
          margin-top: 20px;
          padding-top: 0px;
        }
    </style>
</head>
<body>
<a href="Home.html">BACK TO HOME</a>
<br>
<form class="container"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <p id="reserve">RESERVATIONS</p>
    <p id="text">Please fill correctly! </p>
  <div class="size">
    <input id="size" type="text" name="name" placeholder="Fullname" required><br>
    <span class="error">* <?php if(isset($nameErr)) echo $nameErr; ?></span>
  </div>
  <div class="size">
    <input id="size" type="email" name="email" placeholder="Email" required><br>
    <span class="error">* <?php if(isset($emailErr)) echo $emailErr; ?></span>
  </div>
 <div class="size">
    <input id="size" type="tel" name="phonenumber" placeholder="Phone number" required><br>
    <span class="error">* <?php if(isset($phonenumberErr)) echo $phonenumberErr; ?></span>
  </div>
  <div class="room">
    <label id="text">Select a room:</label>
    <select id="room" name="room">
    <option value="Apartment or suites">Room type...</option>
    <option value="Classic suite">Classic suite</option>
    <option value="Classic suite">Executive suite</option>
    <option value="Classic suite">Apartment</option>
    </select>
  </div>
  <div class="size">
    <input id="size" type="number" name="roomnum" placeholder="Number of Rooms">
  </div>
  <div class="date">
    <label id="text">Check-in:</label>
    <input id="dat" name="check_in" type="date">
    <br>
    <label id="text">Check-out:</label>
    <input id="date" name="check_out" type="date">
  </div>
  <div id="text" class="drop">
    <select id="adultandchildren" name="adults">
    <option value="Number of adults..">Number of adults..</option>
    <option value="2 adult">1 adult</option>
    <option value="2 adults">2 adults</option>
    <option value="3 and above">3 and above</option>
    </select>
    <!-- <input id="adultandchildren" type="number" name="adults" placeholder="Number of Adults"> -->
  </div>
  <div id="text" class="drop">
    <select id="adultandchildren" name="children">
    <option value="Number of children">Number of children..</option>
    <option value="1 child">1 child</option>
    <option value="No child">No child</option>
    <option value="2 and above">2 and above</option>
    </select>
    <!-- <input id="adultandchildren" type="number" name="children" placeholder="Number of Children"> -->
  </div>
  <div>
      <input type="checkbox">
      <label id="text">
        Terms and Conditions
      </label>
  </div>
 <button id="button" type="submit" name="submit"><b id="pro">PROCEED</b></button>
</form> 


<!-- <div class="footer-container ">
  <h2>Luxury Suites</h2>
  <p>Old airport road, jos Nigeria</p>
  <label for="newsletter" class="Ns"  > NEWSLETTER</label>
  <input type="text" class="Ns" type="text" placeholder="E-mail">

    <footer class="footer">
    <ul class="nav justify-content-start">
       <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="">follow us</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="">Facebook.com</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="">Twitter.com</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="" >About us</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="">Home page</a>
        </li>
    </ul>
   
  </footer>
      </div> -->

</body>

</html>
