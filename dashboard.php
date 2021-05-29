<?php

require 'backend/conn.php';
require 'backend/asrsHandler.php';
if(@$_SESSION['uid'] != null)
{
	
}else{
	header('index.html');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
      
      .header_section {
  padding: 15px 0;
}

.header_section .container-fluid {
  padding-right: 25px;
  padding-left: 25px;
}

.navbar-brand span {
  font-weight: bold;
  font-size: 24px;
  color: #ffffff;
}

.custom_nav-container {
  padding: 0;
}

.custom_nav-container .navbar-nav {
  margin-left: auto;
}

.custom_nav-container .navbar-nav .nav-item .nav-link {
  padding: 5px 20px;
  color: #ffffff;
  text-align: center;
  text-transform: uppercase;
  border-radius: 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.custom_nav-container .navbar-nav .nav-item .nav-link:hover {
  color: #17b978;
}

.custom_nav-container .nav_search-btn {
  width: 35px;
  height: 35px;
  padding: 0;
  border: none;
  color: #ffffff;
  background: #17b978;
}

.custom_nav-container .navbar-toggler {
  outline: none;
}

.custom_nav-container .navbar-toggler {
  padding: 0;
  width: 37px;
  height: 42px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.custom_nav-container .navbar-toggler span {
  display: block;
  width: 35px;
  height: 4px;
  background-color: #ffffff;
  margin: 7px 0;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  position: relative;
  border-radius: 5px;
  transition: all 0.3s;
}

.custom_nav-container .navbar-toggler span::before,
.custom_nav-container .navbar-toggler span::after {
  content: "";
  position: absolute;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: #ffffff;
  top: -10px;
  border-radius: 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.custom_nav-container .navbar-toggler span::after {
  top: 10px;
}

.custom_nav-container .navbar-toggler[aria-expanded="true"] {
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}

.custom_nav-container .navbar-toggler[aria-expanded="true"] span {
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

.custom_nav-container .navbar-toggler[aria-expanded="true"] span::before,
.custom_nav-container .navbar-toggler[aria-expanded="true"] span::after {
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
  top: 0;
}

        .kotak {
            width: 75px;
            height: 75px;
            //background-color: #BADA55;
            text-align: center;
            line-height: 75px; 
            margin-left: 100px;
            margin-top: 20px;
            float: left;
            transition: 1s;
        }
		.red {
			background-color: #FFA6A6;
		}
		.green {
			background-color: #BADA55;
		}
        .kotak:hover {
            transform: rotate(360deg);  
            border-radius: 50%;
        }

        .clear{
            clear:both;
        }

        .controlpage{
          margin: 50px;
          text-align: center;
        }

        .buttondanh2{
          margin-top: 100px;
          text-align: center;
        }

        .footer{
          background-color: #BADA55;
          margin-bottom: -30px;
        }

    </style>

    <title>Kelompok15</title>
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!--Navbar-->
    <header class="header_section" style="background-color:#011351;" >
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
             Kelompok 15
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mr-3 mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>

            </ul>
          </div>
        </nav>
      </div>
      </header>
    <!--Akhir Navbar-->
    <!--Control Panel-->
    <h1 class="controlpage">CONTROL PAGE</h1>
		<!--div angka-->
		<?php require 'backend/tablefetch.php'?>
		<!--akhir div-->
	
    <!--Akhir Control Panel-->

    <!-- form input rak-->

    <h2 class="buttondanh2">Input Rak Number</h2>
    <form action="" method="posts" style="margin-right: 20px;">
      
    <div class="row justify-content-center align-items-center h-100";>
    <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
    
        <div class="form-group">
          <input type="number" name="inputAdress" class="form-control" />
        </div>
        <div class="form-group text-center">
          
        </div>
        <div class="form-group">
          <div class="container">
            <div class="row" style="margin-top: 2rem">
              <div class="col"><input type="submit" value="Simpan" name="simpan" class="col-8 btn btn-outline-primary btn-sm float-left"></div>
              <div class="col"><input type="submit" value="Ambil" name="ambil" class="col-8 btn btn-outline-success btn-sm float-right"/></div>
            </div>
          </div>
        </div>
      </form>

    <div class="text-center" style="margin-top: 4rem;" >
      <button type="button" class="btn btn-danger btn-lg">Emergency Button</button>
    </div>
    </div>
  </div>

    <!--akhir form input rak-->


    <!--Footer-->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#BADA55
        "
          fill-opacity="1"
          d="M0,160L60,154.7C120,149,240,139,360,149.3C480,160,600,192,720,181.3C840,171,960,117,1080,112C1200,107,1320,149,1380,170.7L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>

    <p class="footer text-white text-center pb-4">
      &copy; <span id="displayYear"></span> PBL 2019 Kelompok 15
    </p>
      
    <!---Akhir Footer-->

  </body>
</html>