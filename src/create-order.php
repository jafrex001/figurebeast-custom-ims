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
        <button class="create-order-button" id="create-order-button" role="button">Create New Order (Show/Hide)</button>
        <form action="" id="order-form">
          <input type="text" placeholder="Product Code" id="product-name">
          <input type="number" placeholder="Quantity" id="product-quantity">
          <button type="submit" class="form-submit-button" id="form-submit-button">Click to Submit</button>
        </form>
        <div id="success-message">Order submitted sucessfully</div>
        <div id="failure-message">Please check details and submit again.</div>
      </div>
    </div>
    <script defer src="index.js"></script>
  </body>
</html>
