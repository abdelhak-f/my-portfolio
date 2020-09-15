<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>



<div id="Projects" class="container">
    <h3 class=" color text-center text-uppercase font-weight-bold mb-3" style=" font-size: 30px;"> this is my project</h3>
    <div class="card-group">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <a href="#" class="btn btn-primary">Go to detail</a>
        </div>
      </div>
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go to detail</a>
        </div>
      </div>
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <a href="#" class="btn btn-primary">Go to detail</a>
        </div>
      </div>
    </div>
  </div>


   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>












<?php
$conn = mysqli_connect('Localhost','root','','myportfolio');
// lancement de la requête (on impose aucune condition puisque l'on désire obtenir la liste complète des propriétaires
$sql = 'SELECT * FROM project';

// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$req = mysqli_query($conn, $sql) ;
//or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
if (!$req) {
  die("QUERY FAILED". mysqli_error($conn));
 }

// on va scanner tous les tuples un par un
while ($row = mysqli_fetch_array($req)) {
  $file = $row['file'];
  $title = $row['title'];
  $description = $row['description'];
  // on affiche les résultats
  //echo "<td><img class= 'img-responsive' src='../files/$file' alt=''></td>".$row['file'].'<br />';
  //echo 'title : '.$row['title'].'<br />';
  //echo 'description : '.$row['description'].'<br /><br />';


"<div id='Projects' class='container'>";
"<h3 class= 'color text-center text-uppercase font-weight-bold mb-3' style=' font-size: 30px;'> this is my project</h3>";
"<div class='card-group'>";
"<div class='card'>";
    "echo <img src='../files/$file' class='card-img-top' alt='...'>";
    "<div class='card-body'>";
      "<h5 class='card-title'>Card title</h5>";
      "<p class='card-text'>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>";
      "<a href='#' class='btn btn-primary'>Go to detail</a>";
    "</div>";
  "</div>";
  "<div class='card'>";
    "<img src='img/hand.jpg' class='card-img-top' alt='...'>";
    "<div class='card-body'>";
      "<h5 class='card-title'>Card title</h5>";
      "<p class='card-text'>This card has supporting text below as a natural lead-in to additional content.</p>";
      "<a href='#' class='btn btn-primary'>Go to detail</a>";
   "</div>";
  "</div>";
  
"</div>";
"</div>";

//<!--end projects-->

}
//mysql_free_result ($req);
//mysql_close ();
?>




<?php

$conn = mysqli_connect('Localhost','root','','myportfolio');

$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["upload"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  
// Get url
$url = mysqli_real_escape_string($db, $_POST['url']);
// Get title
$pro_title = mysqli_real_escape_string($db, $_POST['pro_title']);
// Get description
$pro_description = mysqli_real_escape_string($db, $_POST['pro_description']);

}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["image"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
    
$sql = "INSERT INTO project (image, url, title, description) VALUES ('$image', '$url', '$pro_title', '$pro_description')";
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
// Get url
//$url = mysqli_real_escape_string($db, $_POST['url']);
// Get title
//$pro_title = mysqli_real_escape_string($db, $_POST['pro_title']);
// Get description
//$pro_description = mysqli_real_escape_string($db, $_POST['pro_description']);

$sql = "INSERT INTO project (image, url, title, description) VALUES ('$image', '$url', '$pro_title', '$pro_description')";

}
?>

<?php
// Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get first image name
    $image = $_FILES['image']['name'];
    $image_uploaded_temp = $_FILES['image']['tmp_name'];
  	// Get second image name
    ////$file_temp = $_FILES['file']['tmp_name'];

    // Get url
    $url = mysqli_real_escape_string($db, $_POST['url']);
  	// Get title
    $pro_title = mysqli_real_escape_string($db, $_POST['pro_title']);
    // Get description
  	$pro_description = mysqli_real_escape_string($db, $_POST['pro_description']);

  	// image file directory
  	$target_file = "../files".basename($image);

  	$sql = "INSERT INTO project (image, url, title, description) VALUES ('$image', '$url', '$pro_title', '$pro_description')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($image_uploaded_temp, $target_file)) {
      $msg = "project uploaded successfully";
      
  	}else{
  		$msg = "Failed to upload project";
    }
    header('Location: show-project.php');
  }

  //$result = mysqli_query($db, "SELECT * FROM project");