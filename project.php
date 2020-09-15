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
  $image = $row['image'];
  $url = $row['url'];
  $title = $row['title'];
  $description = $row['description'];
  // on affiche les résultats
  //echo "<td><img class= 'img-responsive' src='../files/$file' alt=''></td>".$row['file'].'<br />';
  //echo 'title : '.$row['title'].'<br />';
  //echo 'description : '.$row['description'].'<br /><br />';
  
  
  echo"
          <div class='card'>
            <img src='files/$image' class='card-img-top' alt='...' >
              <div class='card-body'>
                  <h5 class='card-title'>$title</h5>
                  <p class='card-text' style='font-family: Arial, Helvetica, sans-serif;'>$description.</p>
                  <a href='$url' target='_blank' class='btn btn-primary'>Go to detail</a>
              </div>
  
          </div>";

}
//mysql_free_result ($req);
//mysql_close ();
?>


<!-- <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div> -->