
<?php
session_start();
if (isset($_SESSION['user'])) {
  header('Location: index.php');
  }

?>

<html lang="en">
    <head>
      <title>admin kinéslit</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {
          height: 700px ;
        }
        
        /* Set gray background color and 100% height */
        .sidenav {
          background-color: #f1f1f1;
          height: 100%;
        }
        
        /* Set black background color, white text and some padding */
        footer {
          background-color: #555;
          color: white;
          padding: 15px;
        }
        
        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
          .sidenav {
            height: auto;
            padding: 15px;
          }
          .row.content {height: auto;} 
        }
      </style>
    </head>
    <body>
    
    <?php
     // Create database connection
  
     $conn = mysqli_connect('Localhost','root','','myportfolio');
  
  
  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get first image name
    $image = $_FILES['images']['name'];
    $image_uploaded_temp = $_FILES['images']['tmp_name'];
  	// Get second image name
    ////$file_temp = $_FILES['file']['tmp_name'];

    // Get url
    $url = $_POST['url'];
  	// Get title
    $pro_title = $_POST['pro_title'];
    // Get description
  	$pro_description = $_POST['pro_description'];

  	// image file directory
  	$target_file = "../files/$image";

  	$sql = "INSERT INTO project (image, url, title, description) VALUES ('$image', '$url', '$pro_title', '$pro_description')";
  	// execute query
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($image_uploaded_temp, $target_file)) {
      $msg = "project uploaded successfully";
      
  	}else{
  		$msg = "Failed to upload project";
    }
    header('Location: show-project.php');
  }

  //$result = mysqli_query($db, "SELECT * FROM project");
  

?>

    <div class="container-fluid">
      <div class="row content">
        <div class="col-sm-2 sidenav">
        <h4><a  href="index.php">Admin, Elfakir</a></h4>
          <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="show.php">Nouveau contact</a></li>
            <li class="active"><a href="add-project.php">ajouter les projets</a></li>
            <li class="active"><a href="show-project.php">voir les projets</a></li>
            <li class="active"><a href="#">Déja lue</a></li> 
          </ul><br>  
         </div>
         
          <div class="col-sm-9">
          <a href="login/logout.php" class="btn btn-danger">Logout</a>
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Ajouter un Produit
                            
                           
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
             <form action="add-project.php" method="post" enctype="multipart/form-data">    
                    
                    <div class="form-group">
                        <label for="pro_file">Ajouter Une image</label>
                        <input type="file"  name="images">
                    </div>

                    <div class="form-group">
                        <label for="url">Ajouter Un url</label>
                        <input type="text"  name="url">
                    </div>
             
                    <div class="form-group">
                        <label for="title">Titre de Projet</label>
                        <input type="text" class="form-control" name="pro_title">
                    </div>

                    
                    <div class="form-group">
                        <label for="pro_description">Description de Projet</label>
                        <textarea class="form-control "name="pro_description" id="" cols="30" rows="5">
                        </textarea>
                    </div>
                                  
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="upload" value="Ajouter un projet">
                    </div>


             </form>


            </div>


          </div>

      </div>
    </div>
    
    <footer class="container-fluid">
      <p class="text-center" >You are welcome</p>
    </footer>
    
    </body>
    </html>