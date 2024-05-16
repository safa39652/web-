<?php
// Connexion à la base de données
$con = mysqli_connect("localhost", "root", "", "hotel");

// Vérifier la connexion
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

// Requête SQL pour récupérer les dates de réservation existantes
$query = "SELECT  *  FROM roombook";
$result = mysqli_query($con, $query);

// Vérifier si des chambres sont réservées
$bookedDates = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result));
}

if (isset($_POST['submit'])) {
    // Récupérer la date entrée par l'utilisateur
    $checkin = $_POST['check_in'];
    $checkout = $_POST['check_out'];

    $roomAvailable = true;
    if (!empty($bookedDates)) {
        foreach ($bookedDates as $dates) {
            if ($checkin >= $dates[0] && $checkin <= $dates[1] || $checkout >= $dates[0] && $checkout <= $dates[1]) {
                $roomAvailable = false;
                break;
            }
        }
    }

    if ($roomAvailable) {
        echo "<script> alert('Room Available')</script>";
    } else {
        echo "<script> alert('Room Not Available')</script>";
    }
}

// Fermer la connexion à la base de données
mysqli_close($con);
?>


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="styledelu.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://www.booxi.com/api/booknow.js" async=""></script>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div id="hero"> 
        <div class="menu" id="menu">
            <div class="menu_box">
                <div class="menu_card">
                   <center>
                    <div class="menu_info">
                        <h3>FILTRES</h3>
                        <h4> 
                           Check Availability
                        </h4>
                            <div class="availibal">
                                <form action="#" method="post">
                                <label for="check_in">Check In Date:</label><br>
                                <input type="date" id="check_in" name="check_in" required><br><br>
                                <label for="check_out">Check Out Date:</label><br>
                                <input type="date" id="check_out" name="check_out" required><br><br> 
                                   <label for="room-type">Room Type:</label><br> <br>
                                   <select id="room-type" name="room-type">
                                       <option value="premium">Premium</option>
                                       <option value="royal">Royal</option>
                                       <option value="deluxe">Deluxe</option>
                                   </select>
                                </div> <br> <br>
                                <button type="submit" name="submit">Check Availability</button> <br> <br>
                            </form>
                            <a href="admin/reservation.php" >   <button class="book-now-btn">Book Now</button></a>
                           
                    </div>
                    
                    </div>
                
                </center>


          
            </div></div>

<div class="slider">
  <img src="images/left-arrow.png" id="prev">
  <div class="preview">
    <img src="./images/image0.jpg" class=" active thumbnail">
    <img src="./images/image1.jpg"class="thumbnail">
    <img src="./images/image2.jpg"class="thumbnail">
    <img src="./images/image3.jpg"class="thumbnail">
    <img src="./images/image4.png"class="thumbnail">
  </div>
  <img src="images/right-arrow.png" id="next">

</div>
</div>
<script>
  var prev=document.getElementById("prev");
  var next=document.getElementById("next");
  var thumbnail=document.getElementsByClassName("thumbnail");
  var hero =document.getElementById("hero");
  var backgroundImg = new Array(
       "images/image0.jpg",
       "images/image1.jpg",
       "images/image2.jpg",
       "images/image3.jpg",
       "images/image4.png",



  );
  let i =0;
next.onclick=function(){
  if (i<4){
  hero.style.backgroundImage='url("'+backgroundImg[i+1]+'")';
  thumbnail[i+1].classList.add("active");
  thumbnail[i].classList.remove("active");
 

  i++;
}}
prev.onclick=function(){
  if (i>0){
  hero.style.backgroundImage='url("'+backgroundImg[i-1]+'")';
  thumbnail[i-1].classList.add("active");
  thumbnail[i].classList.remove("active");
  i--;
}}
</script>
</body>
              </html>