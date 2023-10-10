
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="payment.css">
    
    <title>Monitorring</title>
</head>
<body>
     <!-- header section starts  -->

<header class="header">

<a href="#" class="logo"> <i class="fa-solid fa-paw-claws"></i> Smart Parking </a>

<nav class="navbar">
    <a href="index.php">home</a>
    <a href="monitor.php">Monitoring</a>
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
   
</body>
</html>