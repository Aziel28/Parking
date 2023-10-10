<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Home Page</title>
</head>
<body>
    <!-- header section starts  -->

<header class="header">

<a href="#" class="logo"> <i class="fa-solid fa-paw-claws"></i> Smart Parking </a>

<nav class="navbar">
    <a href="#home">home</a>
    <a href="monitor.php">Monitoring</a>
    <a href="#about">Description</a>
    <a href="payment.php">Payment</a>
    <a href="logout.php">Logout</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>
<script>
  let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
menu.classList.toggle('fa-times');
navbar.classList.toggle('active');
}

window.onscroll = () =>{
menu.classList.remove('fa-times');
navbar.classList.remove('active');
}


</script>
</header>
<!-- header section ends here  -->
<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="img/home.jpg" alt="">
    </div>


    <div class="content">
        <h3>Welcome to Smart Parking! </h3>
    </div>


</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>Description</span></h1>

    <div class="row">

        <div class="image">
            <img src="img/des.jpg" alt="">
        </div>

        <div class="content">
            <h3>Smart Parking</h3>
            <p>An innovative solution that uses augmented reality to help drivers locate available parking spaces quickly. Through a mobile app, real-time data and camera input are used to overlay digital information onto the real world. This system improves parking efficiency, reduces search times, and enhances the overall parking experience.</p>

        </div>

    </div>

</section>

<!-- about section ends -->
</body>
</html>


