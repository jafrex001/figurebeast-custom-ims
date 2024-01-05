<?php
include('connect.php');
$success = false;
if (isset($_POST["btn_submit"])) {
    $productCode = $_POST["txt_prodcode"];
    $quantity = $_POST["txt_quantity"]; 

    $sql = "UPDATE products SET QuantityRecieved = QuantityRecieved - ? WHERE ProductCode = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $quantity, $productCode);
    
    if ($stmt->execute()) {
        $success = true;
        header('location:create-order.php');
        exit(); // Exit to prevent further execution after redirection
    } else {
        echo "Error updating stock: " . $stmt->error;
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <title>Figure Beast - Inventory Management System</title>
  </head>
  <body>
    <div class="app-container">
     <?php
     include('header.php');
     ?>
      <div class="main-area">
        <button class="create-order-button" id="create-order-button">Create New Order (Show/Hide)</button>
        <form action="" id="order-form" method="POST">
          <input type="text" placeholder="Product Code" name="txt_prodcode">
          <input type="number" placeholder="Quantity" name="txt_quantity">
          <button type="submit" class="form-submit-button" name="btn_submit">Click to Submit</button>
        </form>
        <?php 
        if($success){
        echo '<div class="alert alert-success" role="alert"> Stock values are updated! </div>'; 
        }
        else{
        echo  '<div id="failure-message">Error updating stock. Please check details and try again.</div>';
        }
        ?>
      </div>
    </div>
    <script defer src="index.js"></script>
  </body>
</html>
