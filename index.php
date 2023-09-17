<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Stock Tracking System By Mustafa Said Bektaş</title>
</head>
<body>
    <center><button onclick="window.location.href = 'addproduct.php';" class="btn btn-outline-primary">Add Product</button><h1 class="mb-3 mt-2">PHP Stock Tracking System - Mustafa Said Bektaş</h1></center>
<?php 
    include 'config.php';
    $sql = "SELECT * FROM products";
    if($result = mysqli_query($conn, $sql)){
            while($row = mysqli_fetch_array($result)){
                echo '<table class="table table-transparent table-striped">';
                echo '<thead>';
                echo '<tr>';
                echo '<th scope="col">ID</th>';
                echo '<th scope="col">Product Name</th>';
                echo '<th scope="col">Price</th>';
                echo '<th scope="col">Description</th>';
                echo '<th scope="col">Stock</th>';
                echo '<th scope="col">Güncelle</th>';
                echo '<th scope="col">Sil</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                echo '<tr>';
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['name'].'</td>';
                echo '<td>'.$row['price'].'</td>';
                echo '<td>'.$row['description'].'</td>';
                echo '<td>'.$row['stock'].'</td>';
                echo '<td><a href="update.php?id='. $row['id'] .'"><button class="btn btn-outline-danger">Update</button></a></td>';
                echo " ";
                echo '<td><a href="delete.php?id='. $row['id'] .'"><button class="btn btn-outline-danger">Delete</button></a></td>';
                echo " ";
                echo '</tr>';
                echo '</tbody>';
                echo '</table>';  
            }
    }
?>
</body>
</html>