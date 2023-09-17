<?php 
    include 'config.php';
    $id = $_GET["id"];
    $sql = "SELECT * FROM products WHERE id='$id'";
    if($result = mysqli_query($conn, $sql)){
            while($row = mysqli_fetch_array($result)){
                $name = $row["name"];
                $price = $row["price"];
                $description = $row["description"];
                $stock = $row["stock"];
            }
    }

    if(isset($_POST["update-btn"])){
        $id = $_GET["id"];
        $id2 = $_POST["id2"];
        $name2 = $_POST["name2"];
        $price2 = $_POST["price2"];
        $description2 = $_POST["description2"];
        $stock2 = $_POST["stock2"];
    
        $update = "UPDATE products SET name='$name2', price='$price2', description='$description2', stock='$stock2' WHERE id='$id'";
        mysqli_query($conn, $update);
    
        if($conn->query($update) === TRUE){
        echo '<h3 class="text-light" style="display: block; background-color: blue; width: 100%; height: 35px; text-align: center;">Successfully Updated.</h3>';
        }else {
        echo 'Güncellenemedi.';
        }
    }
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
                    <input type="text" class="form-control" id="inputEmail4" value="<?php echo $id; ?>" name="id2">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Name</label>
                    <input type="text" class="form-control" id="inputPassword4" value="<?php echo $name; ?>" name="name2">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Price</label>
                    <input type="number" class="form-control" id="inputAddress" placeholder="Price" value="<?php echo $price; ?>" name="price2">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Description</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Description" value="<?php echo $description; ?>" name="description2">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="inputAddress2" placeholder="Stock" value="<?php echo $stock; ?>" name="stock2">
                </div>
                <div class="col-12">
                    <button type="submit" name="update-btn" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
        </div>
    </center>
</body>
</html>