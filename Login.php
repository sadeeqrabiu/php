<?php
session_start();

    function checkCredentials(string $username, string $password)
    {
        $isUserValid = false;

        //Initialize the usernames and passwords
        $database = [
         "faruk"    => "prifaruk",
         "khlifa"   => "prikhlifa",
         "musa"   => "primusa",
         "rabiu"   => "prirabiu",
         "sa'eed"   => "prisa'eed",
         "Usman"   => "priusman"
        ];

        //cross-checks the database for the correct usernames/password
        foreach ($database as $user => $pass) {
            if($username == $user && $password == $pass)
            {
                $isUserValid = true;
                $_SESSION["fullname"] = $user;
            }
        }

        //returns a boolean result which determines if a user is valid or not
        return $isUserValid;
    }

    if(isset($_POST['submit'])){
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
        $error = "";
        $success = "";

        if(checkCredentials($uname, $pass)){
            $error="";
            $success="Welcome!!!";
            //another page
            header("Location:primary/". $uname .".php");
        }
        else
        {
            $error = "Invalid username or password!!!";
            $success="";
        }
    }
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Al-Farouq Islamic Academy</title>
<!--
Newline Template
http://www.templatemo.com/tm-503-newline
-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>

        <div class="overlay"></div>
        <section class="top-part">
          <video controls autoplay loop>
            <source src="videos/video.mp4" type="video/mp4">    
            <source src="videos/video.ogg" type="video/ogg">
          Your browser does not support the video tag.
          </video>
        </section>
        
        <section class="cd-hero">

          <div class="cd-slider-nav">
            <nav>
              <!-- <span class="cd-marker item-1"></span> -->
              <ul>
                  <li class="selected"><a href="#0"><div class="image-icon"><img src="img/featured-icon.png"></div><h6>Login</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/about-icon.png"></div><h6>Student</h6></a></li>
                <!-- <li><a href="index.html"><div class="image-icon"><img src="img/home-icon.png"></div><h6>Home</h6></a></li> -->
                <!-- <li><a href="#0"><div class="image-icon"><img src="img/GALLERY-icon.png"></div><h6>GALLERY</h6></a></li> -->
              </ul>
            </nav> 
          </div> <!-- .cd-slider-nav -->

          <ul class="cd-hero-slider">
           
<!--------------------------------Student------------------------------------------->
<li class="selected">
    <div class="heading">
      <h1>S T U D E N T</h1>
     
    </div>
    <div class="cd-half-width fivth-slide">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="content fivth-content">
              <div class="row">
                <div class="col-md-8">
                  <div class="row">
                    <form id="contact" action="Login.php" method="post">
                    <?php if(isset($_POST['submit'])){ ?> 
   <div >
   <p class="error" style="color: red; text-align: center;">
		 <?php 
		if(isset($error))
		{
			echo $error;
		}
		?>
	</p>
   </div>
	<?php } ?>
	<p class="success" style="color:green; text-align:center;">
	<?php 
		if(isset($success))
		{
			echo $success;
		}
		?>
                      <div class="col-md-6">
                        <fieldset>
                          <input name="uname" type="text" class="form-control" id="name" placeholder="Your Name" required>
                        </fieldset>
                      </div>  
                      <div class="col-md-6">
                        <fieldset>
                          <input name="pass" type="password" class="form-control" id="email" placeholder="Enter your password" required> 
                        </fieldset>
                      </div>
                      
                      <div class="col-md-12">
                        <fieldset>
                          <button type="submit" id="form-submit" name="submit" class="btn">Submit</button> &nbsp; &nbsp;
                          <?php if(isset($_POST['submit']))
	                       
	                         ?>
                          <a href="index.html">Home</a>  
                        </fieldset>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>                  
      </div>
    </div>
  </li>
  <!----------------------->
<li>

    <div class="heading">
      <h1>N U R S E Y</h1>
    </div>
   <div class="cd-full-width first-slide"> 
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="content first-content">
              <h4>INFORMATION</h4>
              <p>please note that this a nursery section student portal this page is only access by the student or parent!!!!</p>
              <div class="primary-button">
                <a href="#">Nursery1</a> &nbsp;
                <a href="#">Nursery2</a> &nbsp;  &nbsp;
                <a href="index.html">Home</a>
              </div>
            </div>
          </div>
        </div>                  
      </div>
    </div>
  </li>
<!------------------------------------end--------------------------------------->

          </ul> <!-- .cd-hero-slider -->
        </section> <!-- .cd-hero -->


        <footer>
          <p>Copyright &copy; 2020
                                
        	| Designed by <em>Sadiq</em></p>
        </footer>
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>