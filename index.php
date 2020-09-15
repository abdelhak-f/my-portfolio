<?php 
include "insert.php";
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- -------------- fontawsome ------------------- -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <title>Portfolio</title>
  </head>
  <body style="background-image:url('img/pexels.jpg')  ; background-size: contain;">
    
  <?php
    if (isset($_GET['logout'])){
        if($_GET['logout']=="true"){?>

    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>You Are Logout</strong>
    </div>

    <?php
        }

    }
    ?>

    <!--    start nav  -->
    <nav class="  navbar navbar-expand-lg navbar-light ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" ></span>
      </button>
      <div class=" collapse navbar-collapse ml-5" id="navbarTogglerDemo01">
        
        <ul class="nav navbar-nav  mt-3  " >
          <li class="nav-item ">
            <a class=" nav-link text-white pl-5" href="#About">About<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class=" nav-link text-white pl-5" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class=" nav-link text-white pl-5" href="#Projects">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white pl-5" href="#contact">Contact</a>
          </li>
          <a href="admin/login/login.php" class="btn btn-success ml-5">Login</a>
        </ul>
      </div>
    </nav>

   

    <!--    end nav  -->

    <!--start header-->
    <div class=" row px-md-5 pb-5   " style=" margin-top: 5%;  "  >
      
     <!-- <img src="img/pexels.jpg" class="img-fluid" alt="Responsive image" style="height: em;">-->
         <div class=" card container bg-warning   col-md-5" alt="" >
            <h1 class="text-center" style=" padding-top: 1%; margin-top: 1%;  ">Hello, Abdelhak Elfakir</h1>
               <img class="" src="img/hand.jpg"  style="height: 100%; width:50%; border-radius: 50%; margin-left:24% ; " alt="my image">
              
          </div>

           <!-- start first section information-->
          <div class="card container bg-warning col-md-6 " >
              <p class="lorimm text-center" style=" padding-top: 1% ; margin-top: 1%;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores quasi vitae suscipit corrupti, quos dolorem deserunt ducimus esse cupiditate soluta minus officiis dolore officia quisquam enim praesentium reiciendis in quaerat?
              </p>
          </div>
          <!-- end first section information-->
          
      </div>
    <!--end header-->
    
   
    <!--==========================
      Skills Section
    ============================-->

    <div id="skills" class="container mt-5">
       
         <div class=" color  text-center ">
          <h3 class=" font-weight-bold">Our Skills</h3>
          <p class="lorim">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
        </div>

        <div class="progress mt-5">
          <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0"           aria-valuemax="100">
            <span class="skill">HTML <i class="val">90%</i></span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
            <span class="skill">CSS <i class="val">70%</i></span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
            <span class="skill">PHP <i class="val">50%</i></span>
          </div>
        </div>
      

    </div>
    
    <!--start projects-->
    
    <h3 class= 'color text-center text-uppercase font-weight-bold mb-3' style=' font-size: 30px;'> this is my project</h3>
    
      <div>
        <div class='card-columns'>
              <?php include "project.php" ;  ?>
        </div>
      </div>
    

    
  <!--end projects-->
   

    <!-- ----------------- start a contact us ------------------- -->
    <!--Section: Contact v.2-->
<section id="contact" class="mt-4 container">

  <!--Section heading-->
  <h2 class=" color h1-responsive font-weight-bold text-center my-4">Contact us</h2>
  <!--Section description-->
  <p class="lorim color text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. we will come back to you within
      a matter of hours to help you.</p>

  <div class="row">

      <!--Grid column-->
      <div class="col-md-9 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form" action="index.php" method="POST">

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="name" name="name" class="form-control" placeholder="Your name">
                          <label for="name" class=""></label>
                      </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="email" name="email" class="form-control" placeholder="Your email">
                          <label for="email" class=""></label>
                      </div>
                  </div>
                  <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                  <div class="col-md-12">
                      <div class="md-form mb-0">
                          <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                          <label for="subject" class=""></label>
                      </div>
                  </div>
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-12">

                      <div class="md-form">
                          <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Your message"></textarea>
                          <label for="message"></label>
                      </div>

                  </div>
              </div>
              <!--Grid row-->

              <div class="text-center text-md-left">
              <button class="btn btn-primary" type="submit" name="submit" >Send</button>
              </div>
          

          </form>

          
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-3 text-center">
          <ul class=" color list-unstyled mb-0">
              <li><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                  <p>Youssoufia, morocco</p>
              </li>

              <li><i class="fa fa-phone-square fa-2x" aria-hidden="true"></i>
                  <p>+212 6 25 87 46 40</p>
              </li>

              <li><i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                  <p>abdelhakf95@gmail.com</p>
              </li>
          </ul>
      </div>
      <!--Grid column-->

  </div>

</section>
    <!-- ----------------- end a contact us ------------------- -->

    <!--   ---------- start footer   ------------   -->
    <div class="container-fluid bg-dark mt-3" style="height: 5rem; width: 100%;" >
      <div class="footer-copyright py-3 text-center text-white">
        © 2020 Copyright:
        <a href=""> <i class="fa fa-linkedin-square  fa-2x pl-3" style="color: white;" aria-hidden="true"></i> </a>
      </div>
    </div>
    <!--   ---------- end footer   ------------   -->
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

     <!-- Javascript File -->
  <script src="js/script.js"></script>

  </body>
</html>