<?php

include_once 'dbh.ph';
?>

<?php

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $product_name = $_POST["product_name"];
    $description = $_POST["description"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];

    // Validate the form data (you can add more validation if required)
    if (empty($product_name) || empty($description) || empty($quantity) || empty($price)) {
        echo "Please fill all the fields";
    } else {
        // Insert the form data into the database
        $sql = "INSERT INTO item (name, description quantity, price) 
        VALUES ($product_name, $description, $quantity, $price)";

        if (mysqli_query($conn, $sql)) {
            echo "Product added to inventory successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}


// Close the database connection


?>