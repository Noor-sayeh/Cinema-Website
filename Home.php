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
       
        #main-slider{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px auto;
            max-width: 1170px;
            width: 100%;
        }

        #main-slider1{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px auto;
            max-width: 1170px;
            width: 100%;
        }
        #main-slider2{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px auto;
            max-width: 1170px;
            width: 100%;
        }

        #main-slider3{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px auto;
            max-width: 1170px;
            width: 100%;
        }




        .main-slider-box{
            width: 100%;
            height: 450px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
            border: 1px solid #0e0e0ec2;
            background-color: black;
            position: relative;
            overflow: hidden;

        }




        .main-slider-img{
            width: 100%;
            height: 100%;
        }



        .main-slider-img img{
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;

        }





        .myimg{
            width: 357px;
            height: 450px;
        }
        .main-slider-text{
            position: absolute;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            background: linear-gradient(360deg,#161616b9 35%,rgba(73,73,73,0.23) 64%);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-end;
            padding: 25px;

        }



        .main-slider-text .q{
            color: black;
            font-weight: 600;
            padding: 0px 5px;
            height: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }




        .main-slider-text .movie-type{
            display: flex;
            flex-direction: column;
            align-items: flex-start;


        }



        .main-slider-text .movie-type strong{
            font-size: 2rem;
            font-family: 'Montserrat', sans-serif;
            font-weight: 0;
            line-height: 20px;
            margin-top: 10px;
            color: white;
            letter-spacing: 0.5px;

        }





        .main-slider-overlay{
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0px;
            top: 100%;
            background-color: rgba(27,27,27,0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            transition: all ease 0.3s;
            z-index: 2;
        }






        .main-slider-overlay i{
            font-size: 2rem;
        }



        .main-slider-box:hover .main-slider-overlay{
            top: 0px;
            transition: all ease 0.3s ;

        }

        .h4fonts{
            font-family: 'Josefin Sans', sans-serif;
            font-size: 2.5rem;
            color: azure;
            float: left;

        }

        .swiper-button-next,
        .swiper-button-prev{
            position: static !important;
            transform: translate(0,0);
            margin: 10px 0px 0px 20px !important;
        }






        .slider-btns{
            display: flex;
            justify-content: flex-end;
            max-width: 1170px;
            width: 100%;
            margin: 10px auto 0px auto;

        }


        .swiper-button-next::after,
        .swiper-button-prev::after{
            font-size: 25px !important;
            font-weight: 800;
            color: white;
        }




        /*buttons of another slide */


        /*buttons of another slide */

        .textoverti{
            position: absolute;
            bottom: 180px;
            right: 50px;
            color: white;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.7rem;
            text-shadow: 1px 1px 2px #ababab;
        }

        .text2overti{
            position: absolute;
            bottom: 150px;
            right: 230px;
            color: #e70634;
            font-family: Monoton;
            font-size: 2rem;
            text-shadow: 1px 1px 2px #ababab;
        }
        .text3overti{
            position: absolute;
            bottom: 150px;
            right: 55px;
            color: white;
            font-family: Monoton;
            font-size: 2rem;
            text-shadow: 1px 1px 2px #ababab;
        }
        .myicon{
            float: left;
        }

        /*زر ال read mora */

        button {
            padding: 10px 20px;
            text-transform: uppercase;
            border-radius: 5px;
            font-size: 12px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            color: white;
            text-shadow: none;
            background: transparent;
            box-shadow: transparent;
            border: 1px solid white;
            transition: 0.5s ease;
            user-select: none;
        }

        #btn:hover,:focus {
            color: #ffffff;
            background: red;
            border: 1px solid red;
            text-shadow: 0 0 5px red,
            0 0 10px red,
            0 0 20px red;
            box-shadow: 0 0 5px red,
            0 0 20px red,
            0 0 50px red,
            0 0 100px red;
        }

        .text4overti{
            position: absolute;
            bottom: 115px;
            right: 550px;
        }

        /* =-------------------------------card is here --------------------------------------*/

        .card {
            width: 357px;
            height: 450px;
            background: black;
            transition: all 0.4s;
            border-radius: 10px;
            box-shadow: 0px 5px 10px 10px  rgba(45, 0, 0, 0.705);
            font-size: 30px;
            font-weight: 900;
        }

        .card:hover {
            border-radius: 15px;
            cursor: pointer;
            transform: scale(1.2);
            box-shadow: 0px 5px 10px 10px  rgba(45, 0, 0, 0.705);
            background: black;
        }

        .first-content {
            height: 100%;
            width: 100%;
            transition: all 0.4s;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
            border-radius: 15px;
        }

        .card:hover .first-content {
            height: 0px;
            opacity: 0;
        }

        .second-content {
            height: 0%;
            width: 100%;
            opacity: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 15px;
            transition: all 0.4s;
            font-size: 0px;
            transform: rotate(90deg) scale(-1);
            color: white;
        }

        .card:hover .second-content {
            opacity: 1;
            height: 100%;
            font-size: 1.8rem;
            transform: rotate(0deg);
        }







        /* =-------------------------------card is here --------------------------------------*/

    </style>

</head>
<body>
<!------------menu btn---------------->
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
    <form action="searchbutton.php" class="search-box">
        <input type="text" name="search" placeholder="Search Movie" class="search-input" required>
        <button type="submit" name="submit">
            <i class="fas fa-search"></i>
        </button>
    </form>
</nav>

<figure class="image">
    <img src="img\ti6.jpg" id="ti1" width="1519.5px" height="555px" >
    <div class="textoverti">“Art is the reshaping of the surrounding reality, not the creation of a new one.”</div>
    <div class="text2overti">H</div><div class="text3overti">ome Of Movies</div>
    <a href="About.html">
        <button id="btn" class="text4overti">
            Read more
        </button>
    </a>

    <p> <br> </p>
</figure>
<!---------=================Slider------------------=====================================------------->
<!--<box-icon name='film' animation='flashing'  color="red" size="4rem" class="myicon" ></box-icon>-->

<h4 class="h4fonts" style="font-family: 'Montserrat', sans-serif" >  Type of Movie</h4>

<p> <br> </p>
<p> <br> </p>
<!---------=================Slider---------------------->
<section id="main-slider">

    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!---------=================Slide111111---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="img/classicposter.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span style="color: red">Classic Movies</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>

            <!---------=================Slide22222--------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="img/horrorposter.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span style="color: red">Horror Movies</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>

            <!---------=================Slide3333333---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="img/comedyposter2.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span style="color: red">Comedy Movies</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>


            <!---------=================Slide44444---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="img/kids7.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span style="color: red">Carton Movies</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>


            <!---------=================Slide555555---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="img/romanticposter.webp" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span style="color: red">Romantic Movies</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>



            <!---------=================Slide66666---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="img/actionposter.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span style="color: red">Action Movies</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>

            <!---------=================Slide66666---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">
                            <img src="img/warposters.jpg" class="myimg">
                        </div>
                        <!-- <img src="img/warposters.jpg" class="myimg" alt="classic poster"/>-->
                        <div class="second-content">
                            <span style="color: red">War Movies</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>


        </div>
        <div class="swiper-pagination"></div>
    </div>

    </div>

</section>

<div class="slider-btns">
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</div>









<h4 class="h4fonts" style="font-family: 'Montserrat', sans-serif" >  For This Day</h4>

<p> <br> </p>
<p> <br> </p>
<!---------=================Slider---------------------->
<section id="main-slider1">

    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!---------=================Slide111111---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="images/romanholiday,cl.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
              <pre style="align-items: center">
              <span style="font-size: 1.5rem "> <br>Pairates</br>
                  Running Time : 90min
                 Country : United States
                 Language : English
                 Price (for person) : $35
                 Type : Carton </span>
              </pre>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>

            <!---------=================Slide22222--------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="images/hook,fam.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
              <pre>
              <span style="font-size: 1.5rem "> <br>HOOK</br>
                  Running Time : 90min
                 Country : United States
                 Language : English
                 Price (for person) : $40
                 Type : Children Movies</span>
              </pre>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>

            <!---------=================Slide3333333---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="images/theparenttrap,fam.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span>  Running Time : 90min
                 Country : United States
                 Language : English
                 Price (for person) : $35
                 Type : Carton</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>


            <!---------=================Slide44444---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="images/champions.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span>  Running Time : 90min
                 Country : United States
                 Language : English
                 Price (for person) : $35
                 Type : Carton</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>


            <!---------=================Slide555555---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="images/bullettrain,com.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span>  Running Time : 90min
                 Country : United States
                 Language : English
                 Price (for person) : $35
                 Type : Carton</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>



            <!---------=================Slide66666---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="images/harry,fam.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span>  Running Time : 90min
                 Country : United States
                 Language : English
                 Price (for person) : $35
                 Type : Carton</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>

            <!---------=================Slide66666---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">
                            <img src="img/warposters.jpg" class="myimg">
                        </div>
                        <!-- <img src="img/warposters.jpg" class="myimg" alt="classic poster"/>-->
                        <div class="second-content">
                            <span>  Running Time : 90min
                 Country : United States
                 Language : English
                 Price (for person) : $35
                 Type : Carton</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>


        </div>
        <div class="swiper-pagination"></div>
    </div>

    </div>

</section>

<div class="slider-btns">
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</div>











<!---------=================Section for Most recommended---------------------->



<h4 class="h4fonts" style="font-family: 'Montserrat', sans-serif" >  Most Recommended</h4>

<p> <br> </p>
<p> <br> </p>
<!---------=================Slider---------------------->
<section id="main-slider3">

    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!---------=================Slide111111---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="img/elf.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span style="color: red">  Running Time : 90min
                 Country : United States
                 Language : English
                 Price (for person) : $35
                 Type : Carton</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>

            <!---------=================Slide22222--------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php"class="card">
                        <div class="first-content">


                            <img src="images/pairates.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span style="color: red">  Running Time : 90min
                 Country : United States
                 Language : English
                 Price (for person) : $35
                 Type : Carton</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>

            <!---------=================Slide3333333---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="images/hook,fam.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span style="color: red">  Running Time : 90min
                 Country : United States
                 Language : English
                 Price (for person) : $35
                 Type : Carton</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>


            <!---------=================Slide44444---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="img/deadlogo.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span style="color: red">  Running Time : 90min
                 Country : United States
                 Language : English
                 Price (for person) : $35
                 Type : Carton</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>


            <!---------=================Slide555555---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="images/comedyposter.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span style="color: red">  Running Time : 90min
                 Country : United States
                 Language : English
                 Price (for person) : $35
                 Type : Carton</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>



            <!---------=================Slide66666---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="img/horror5.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span style="color: red">Action Movies</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>

            <!---------=================Slide66666---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php"class="card">
                        <div class="first-content">
                            <img src="img/action1.jpg" class="myimg">
                        </div>
                        <!-- <img src="img/warposters.jpg" class="myimg" alt="classic poster"/>-->
                        <div class="second-content">
                            <span style="color: red">War Movies</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>


        </div>
        <div class="swiper-pagination"></div>
    </div>

    </div>

</section>

<div class="slider-btns">
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</div>







<h4 class="h4fonts" style="font-family: 'Montserrat', sans-serif" >  Offers</h4>

<p> <br> </p>
<p> <br> </p>
<!---------=================Slider---------------------->
<section id="main-slider2">

    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!---------=================Slide111111---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="images/offers.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span style="color: red">offers</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>

            <!---------=================Slide22222--------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="images/offers.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span style="color: red">offers</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>

            <!---------=================Slide3333333---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="images/offers.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span style="color: red">offers</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>


            <!---------=================Slide44444---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="images/offers.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span style="color: red">offers</span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>


            <!---------=================Slide555555---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="images/offers.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span style="color: red">offers </span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>



            <!---------=================Slide66666---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">


                            <img src="images/offers.jpg" class="myimg" alt="classic poster"/>
                        </div>
                        <div class="second-content">
                            <span style="color: red">offers </span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>

            <!---------=================Slide66666---------------------->
            <div class="swiper-slide">
                <div class="main-slider-box">
                    <!-------------overlay----------------------------------------->
                    <!--<a href="#" class="main-slider-overlay">
                      <i>  <strong> War Movies </strong> </i>
                    </a>
                    -->
                    <a href="http://localhost:3000/movies1.php" class="card">
                        <div class="first-content">
                            <img src="images/offers.jpg" class="myimg">
                        </div>
                        <!-- <img src="img/warposters.jpg" class="myimg" alt="classic poster"/>-->
                        <div class="second-content">
                            <span style="color: red">offers </span>
                        </div>

                        <div class="main-slider-text">
                            <div class="bottom-text">
                                <div class="movie-type">
                                    <!-- <strong> Classic Films </strong>-->
                                </div>
                            </div>
                        </div>
    </a>
                </div>
            </div>


        </div>
        <div class="swiper-pagination"></div>
    </div>

    </div>

</section>

<div class="slider-btns">
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</div>




























<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
        },
    });





</script>

<?php
$con = mysqli_connect(hostname:"localhost",username:"root",password:"",database:"cinema");
if (isset($POST["submit"]))
{
    $str=$_POST["search"];
    $query= "SELECT * FROM movies WHERE Name='$str'";
    $res=mysqli_query($con,$query);
    $movies= $res->fetch_object();
    for($i=0;$res->num_rows;$i++)
    {
        echo"
        <br><br><br>
        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>

            </tr>
            <tr>
                
            </tr>

        </table>
        
";

        


}
}

?>



</body>
</html>


