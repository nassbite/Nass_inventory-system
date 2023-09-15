<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <title>Inventory System</title>
    <link  rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- {{-- icon link --}} -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>

<div class="top">
    
  <h1 class="nass">MARUSHWA GENERAL SUPPLY</h1>
  <p >Deals With Spare Part, Transportation of Goods and Motocycle and car mechanics  </p>

</div>


<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><ion-icon name="logo-markdown"></ion-icon></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="contact.php">Contact</a>
        <a class="nav-link" href="about.php">About Us</a>
        <a class="nav-link disabled">Disabled</a>
      </div>
    </div>
  </div>
</nav>




<!-- <div class="link">
    <ul >
    <a class="l" href="index.php">Home</a>
    <a class="l" href="contact.php">Contact</a>
    <a class="l" href="about.php">About Us</a>
    </ul>
    </div> -->

    <div class="form">
    
    <form method="POST" action="nass.php">
        <h2><b>INVENTORY</b></h2><br><br>
        <label for="Product_name">Product_Name:</label>
        <input type="text" name="product_name" ><br><br>

        <label for="description">Description:</label>
        <input type="text" name="description" ><br><br>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" ><br><br>

        <label for="price">Price:</label>
        <input type="number" name="price" step="100" ><br><br>

        <button class="button" type="submit" name="add"value="Add">ADD</button>
    </form>
    </div>
</body>
</html>
