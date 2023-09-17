<?php
include 'config.php';

if(isset($_POST['add-btn'])){
   $id = $_POST['id'];
   $name = $_POST['name'];
   $price = $_POST["price"];
   $description = $_POST["description"];
   $stock = $_POST["stock"];

         $insert = "INSERT INTO products(id ,name, price, description, stock) VALUES('$id','$name','$price','$description', '$stock')";
         mysqli_query($conn, $insert);
         echo '<div class="alert alert-success" role="alert">
         Successfully Added.
       </div>';
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<center>
        <div class="container-full">
            <div class="box col-md-6 col-12">
                            <form class="row g-3" method="POST">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">ID</label>
                    <input type="text" class="form-control" id="inputEmail4" name="id" placeholder="ID">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Name</label>
                    <input type="text" class="form-control" id="inputPassword4" name="name" placeholder="Name">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Price</label>
                    <input type="number" class="form-control" id="inputAddress" placeholder="Price" name="price">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Description</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Description" name="description">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="inputAddress2" placeholder="Stock" name="stock">
                </div>
                <div class="col-12">
                    <button type="submit" name="add-btn" class="btn btn-primary">Add</button>
                </div>
                </form>
            </div>
        </div>
    </center>
</body>
</html>