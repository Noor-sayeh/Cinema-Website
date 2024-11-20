<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie details</title>
    <link rel="stylesheet" href="elf.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json">
	<link rel="shortcut icon" href="%PUBLIC_URL%/favicon.ico">
	<meta name="theme-color" content="#000000">
    <link rel="stylesheet" href="s.css"  />

</head>
<body>
<?php 

$con =mysqli_connect(hostname:"localhost",username:"root",password:"",database:"cinema");
$link = $_GET['param']; // Assuming you're passing the movie name as a GET parameter called 'param'

// Sanitize the input to prevent SQL injection
$link = mysqli_real_escape_string($con, $link);

$query = "SELECT * FROM movies WHERE Name_of_movie = '$link'";
$res = mysqli_query($con, $query);

$movie = $res->fetch_object();
echo "
  
<div class='img-area'></div>

<h1><a href='http://localhost:3000/movies1.php?' class='arrow left' ></a> &nbsp; &nbsp; $movie->Name_of_movie</h1>
   <div> <img alt='stylesheet' src='images/$movie->image'>
    <iframe width='560' height='315' src=$movie->comercial title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe></div>
    <h1 style='display:inline-block;'>Rating:</h1>
    <p style='display:inline-block; left:60px;'><span class='fa fa-star checked'></span>
        <span class='fa fa-star checked'></span>
        <span class='fa fa-star checked'></span>
        <span class='fa fa-star-half-full' style='color:orange'></span>
        <span class='fa fa-star unckecked'></span></p>
        
        <p style='display:inline-block; left:60pxv ;'>&nbsp &nbsp &nbsp At $movie->dt,Book for 10$</p>
   
    <h1>Description:</h1>  
    <p class='st'> $movie->Description.</p> 
   
<button id='btn' style='width: 200px; bottom: 10px; right: 100px;' onclick='showDiv()' >
  click her to see Booking details 
</button>
<div id='Div'  style='display:none;'>
  

<div class='i'>
  <div class='movie-container dd'>
    <label> Select a movie:</label>
    <select id='movie'>
      <option value='220'>Godzilla vs Kong (RS.220)</option>
      <option value='320'>Radhe (RS.320)</option>
      <option value='250'>RRR (RS.250)</option>
      <option value='260'>F9 (RS.260)</option>
    </select>
  </div>

  <ul class='showcase'>
    <li>
      <div class='seat'></div>
      <small>Available</small>
    </li>
    <li>
      <div class='seat selected'></div>
      <small>Selected</small>
    </li>
    <li>
      <div class='seat sold'></div>
      <small>Sold</small>
    </li>
  </ul>
  <div class='container'>
    <div class='screen'></div>

    <div class='row'>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
    </div>

    <div class='row'>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat sold'></div>
      <div class='seat sold'></div>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
    </div>
    <div class='row'>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat sold'></div>
      <div class='seat sold'></div>
    </div>
    <div class='row'>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
    </div>
    <div class='row'>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat sold'></div>
      <div class='seat sold'></div>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
    </div>
    <div class='row'>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat'></div>
      <div class='seat sold'></div>
      <div class='seat sold'></div>
      <div class='seat sold'></div>
      <div class='seat'></div>
    </div>
  </div>

</div>
<form action='add-aud.php' method='POST'>
<input required='' type='text' placeholder=Your Name' name='name1' id='name1'>
<input required='' type='text' placeholder='Your Number' name='num'id='num'>
<input type='hidden' name='movieName' value=$movie->Name_of_movie>

    <p class='text'>
     IF you want to watch this movie add your name,number and reserve your seat then click book here!
    </p>
    
      <button id='btn' >
        Book 
      </button>
    
</form> ";


// Close the container element here
?>
    <script src="s.js"></script>
</body>
</html>