<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME OF MOVIES CENIMA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="img/cenima.png">
  <link rel="stylesheet" href="css/style.css"/>
  <!----=============import poppins font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&display=swap" rel="stylesheet">
  <!----=============import Monoton font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Montserrat&family=Poppins:ital,wght@1,900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:ital,wght@1,900&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script><script src="https://kit.fontawesome.com/78a7875c75.js" crossorigin="anonymous"></script>
  <!-------------Using font Awesome-------------->
  <script src="http://kit.fontawesome.com/c8e4d183.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <link rel="stylesheet" href="movies11.css">
</head>
<body>
   
<nav class="navigation">
  <input type="checkbox" class="menu-btn" id="menu-btn">
  <label for="menu-btn" class="menu-icon">
    <span class="nav-icon"></span>
  </label>
  <li class="logo">
    Palestine Tower Cinemas
  </li>

  <!------------menu---------------->
  <ul class="menu">
  <li><a href="http://localhost:3000/Home.php">Home</a></li>
        <li><a href="About.html">About</a></li>
        <li><a href="http://localhost:3000/movies1.php">Movies</a></li>
        <li><a href="http://localhost:3000/login.php">Log In</a></li>
  </ul>
  <!-------search box------>
  <form action="" class="search-box">
    <input type="text" name="search" placeholder="Search Movie" class="search-input" required>
    <button type="submit">
      <i class="fas fa-search"></i>
    </button>
  </form>
</nav>


   


<br>
<br>
<br>
<br>

<div class='row'>
<?php 
session_start();

                $con =mysqli_connect(hostname:"localhost",username:"root",password:"",database:"cinema");
                $query = "SELECT * FROM movies";

                $res = mysqli_query($con, $query);
                

                for ($i = 0; $i < $res->num_rows; $i++) {
                    $movie = $res->fetch_object();
echo"<div class='container'>"; // Add the container element here

for ($i = 0; $i < $res->num_rows; $i++) {
  $movie = $res->fetch_object();
  $value = $movie->Name_of_movie; // The value you want to pass
if($movie->Name_of_movie==null){ break;}
$link = "m.php?param=" . urlencode($value);
  echo "
  
  <div class='column'>
  <div class='content'>
  <div class='card'> 
    <a href='$link' class='card'>
      <div class='first-content'>
        <img src='images/$movie->image' class='myimg' alt='classic poster'/>
      </div>
      <div class='second-content'>
        <span style='color: white'>
          <h4>$movie->Name_of_movie</h4>
          <p>
            <span class='fa fa-star checked'></span>
            <span class='fa fa-star checked'></span>
            <span class='fa fa-star checked'></span>
            <span class='fa fa-star-half-full' style='color:orange'></span>
            <span class='fa fa-star unckecked'></span>
          </p>
        </span>
      </div>

    </a>
  </div>
</div>
</div>
  ";
}}

// Close the container element here
?>
<script>
  // JavaScript
  var cards = document.querySelectorAll('.card');

  cards.forEach(function(card) {
    card.addEventListener('click', function() {
      var cardId = card.id;
      window.location.href = 'your_php_script.php?card=' + cardId;
    });
  });
</script>










</div>




  </div>

</div>

  



</body>
</html>