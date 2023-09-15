<?php

require_once 'dbh.php';

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST["product_name"];
    $description = $_POST["description"];
    $quantity = (int)$_POST["quantity"];
    $price = (float)$_POST["price"];
     
    // Check if the item exists in the database
    $sql_select_query = "SELECT quantity FROM items WHERE product_name= ?";
    $stmt = $conn->prepare($sql_select_query);
    $stmt->bind_param("s", $product_name);
    $stmt->execute();
    $result = $stmt->get_result();

    if (empty($product_name) || empty($description) || empty($quantity) || empty($price))  {
        echo "Please fill all the fields";
    }elseif($result->num_rows > 0) {
        // If the item exists, update its quantity and price
        $row = $result->fetch_assoc();
        $current_quantity = $row["quantity"];
        $new_quantity = $current_quantity + $quantity;

        $sql_update_query = "UPDATE items SET quantity = ?, price = ? WHERE product_name = ?";
        $stmt = $conn->prepare($sql_update_query);
        $stmt->bind_param("iis", $new_quantity, $price, $product_name);
        $stmt->execute();

        echo "Quantity and Price updated successfully!";
    } else {
        // If the item doesn't exist, insert it as a new item
        $sql_insert_query = "INSERT INTO items (product_name, description, quantity, price) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql_insert_query);
        $stmt->bind_param("ssii", $product_name, $description, $quantity, $price);
        $stmt->execute();
    
        echo "New item inserted successfully!";
    }


} 
