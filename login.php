<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
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


  <style>
    *{
      margin: 0px;
      padding: 0px;
      font-family: poppins;
      box-sizing: border-box;

    }
    body{
      margin: 0px;
      padding: 0px;
      font-family: poppins;
      background-color:black ;
    }
    ul{
      list-style: none;
    }
    a{
      text-decoration: none;
    }
    .navigation{
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 30px 50px;
      max-width: 1400px;
      margin: auto;
      width: 100%;
    }

    .navigation .menu-icon{
      cursor: pointer;
      float: right;
      padding: 20px 10px;
      z-index: 103;
    }
    
    .navigation .menu-icon .nav-icon{
      background-color: white;
      display: block;
      height: 3px;
      width: 25px;
      position: relative;
      transition: background 0.2s ease-out;

    }
    .navigation .menu-icon .nav-icon::before,
    .navigation .menu-icon .nav-icon::after{
      background-color:white ;
      content: '';
      position: absolute;
      display: block;
      width: 100%;
      height: 100%;
      transition: all ease-out 0.2s;
    }
    .navigation .menu-icon .nav-icon::before{
      top: 8px;
    }
    .navigation .menu-icon .nav-icon::after{
      top: -8px;
    }
    
    .navigation .menu-btn:checked ~ .menu-icon .nav-icon{
      background-color: black;
    }
    .navigation .menu-btn:checked ~ .menu-icon .nav-icon::before{
      transform: rotate(-45deg);
      top: 0px;

    }
    .navigation .menu-btn:checked ~ .menu-icon .nav-icon::after{
      transform: rotate(45deg);
      top: 0px;

    }
    .menu-btn{
      display: none;
    }

   
    .menu{
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      background-color: black;
      z-index: 102;
      display: none;
      justify-content: center;
      align-items: center;
      animation: fade 0.3s;
    }

    .menu li a {
      color: white;
      margin: 0px 40px;
      font-size: 2rem;
      font-family: Monoton;
      transition: all ease 0.3s;
    }
    .menu li a:hover {
      font-size: 2.3rem;
      color: #e70634;
      transition: all ease 0.3s;
    }
    .navigation .menu-btn:checked ~ .menu{
      display: flex;
    }
    @keyframes fade {
      0%{
        opacity: 0;
      }
      100%{
        opacity: 1;
      }
    }
    .logo{
      color: #e70634;
      text-transform: uppercase;
      font-size: 3rem;
      font-weight: 400;
      margin: 0px auto 0px 40px;
      display: flex;
      align-items: center;
      font-family: Monoton;
      letter-spacing: 1px;
    }
    
    .search-box{
      background-color: #d1d1d111;
      padding: 3px 20px;
      border-radius: 20px;
      height: 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-right: 20px;
      font-family: 'Montserrat', sans-serif;
    }
    .search-box input{
      background-color: transparent;
      border: none;
      outline: none;
      color: #ffffff5e;
      font-family: 'Montserrat', sans-serif;
    }
    .search-box input::placeholder{
      color: #ffffff5e;
      font-family: 'Montserrat', sans-serif;
    }
    .search-box button{
      background-color: transparent;
      color: #ffffffc9;
      border: none;
      outline: none;
      cursor: pointer;
      font-family: 'Montserrat', sans-serif;
    }

    .login-box {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 400px;
      padding: 40px;
      transform: translate(-50%, -50%);
      background: rgba(24, 20, 20, 0.987);
      box-sizing: border-box;
      box-shadow: 0 15px 25px rgba(70,0,0,.6);
      border-radius: 10px;
      font-family: 'Montserrat', sans-serif;
    }

    .login-box .user-box {
      position: relative;
      font-family: 'Montserrat', sans-serif;
    }

    .login-box .user-box input {
      width: 100%;
      padding: 10px 0;
      font-size: 16px;
      color: #fff;
      margin-bottom: 30px;
      border: none;
      border-bottom: 1px solid #fff;
      outline: none;
      background: transparent;
      font-family: 'Montserrat', sans-serif;
    }

    .login-box .user-box label {
      position: absolute;
      top: 0;
      left: 0;
      padding: 10px 0;
      font-size: 16px;
      color: #fff;
      pointer-events: none;
      transition: .5s;
      font-family: 'Montserrat', sans-serif;
    }

    .login-box .user-box input:focus ~ label,
    .login-box .user-box input:valid ~ label {
      top: -20px;
      left: 0;
      color: red;
      font-size: 12px;
      font-family: 'Montserrat', sans-serif;
    }

    .login-box form a {
      position: relative;
      display: inline-block;
      padding: 10px 20px;
      color: #fff;
      font-size: 16px;
      text-decoration: none;
      text-transform: uppercase;
      overflow: hidden;
      transition: .5s;
      margin-top: 40px;
      letter-spacing: 4px;
      font-family: 'Montserrat', sans-serif;
    }

    .login-box a:hover {
      background: red;
      color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 5px red,
      0 0 25px red,
      0 0 25px red,
      0 0 10px red;
      font-family: 'Montserrat', sans-serif;
    }

    .login-box a span {
      position: absolute;
      display: block;
      font-family: 'Montserrat', sans-serif;
    }

    @keyframes btn-anim1 {
      0% {
        left: -100%;
      }

      50%,100% {
        left: 100%;
      }
    }

    .login-box a span:nth-child(1) {
      bottom: 2px;
      left: -100%;
      width: 100%;
      height: 2px;
      background: linear-gradient(90deg, transparent, red);
      animation: btn-anim1 2s linear infinite;
    }
.loginw{
  color: white;
  font-family: 'Josefin Sans', sans-serif;
  font-size: 1.8rem;
  position: center;

}



.submit-btn {
      background-color: transparent;;
      color: #fff;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      position: center;
      left:90px;
    }
  </style>



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

<div class="login-box" style="font-family: 'Montserrat', sans-serif; ">

  <form>
    <div class="user-box" style="font-family: 'Montserrat', sans-serif">
      <input type="text" name="username" id="username" required="">
      <label>Username</label>
    </div>
    <div class="user-box" style="font-family: 'Montserrat', sans-serif">
      <input type="password" name="password" id="password" required="">
      <label>Password</label>
    </div>
    
    <a href="#" class="submit-btn" onclick="checkLogin()">Submit</a>
      <span ></span>
    </a>
  </form>
</div>
<script>
  function checkLogin() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;

      if (username === "Noor Sayeh" && password === "123456") {
        
        window.location.href = "ownerpage.php"; // Redirect to ownerpage.php
      } else {
        alert("Invalid username or password.");
      }
    }
</script>

<?php

include('db.php');?>
</body>
</html>