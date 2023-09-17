<?php 
include 'config.php';

$id = $_GET["id"];

$delete = "DELETE FROM products WHERE id = '$id'";
mysqli_query($conn, $delete);

if($conn->query($delete) === TRUE){
    echo '<div class="alert alert-success" role="alert">
    Deleted.
  </div>';
    header("Refresh:2 ; URL=index.php");
}else {
    echo '<div class="alert alert-warning" role="alert">
    Not Deleted.
  </div>';
  header("Refresh:2 ; URL=index.php");
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">