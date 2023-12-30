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
        <h1>
          Total Orders:
          <h2>{Insert Order Number Here}</h2>
        </h1>
        <h1>
          Total Gross Sales:
          <h2>{Sum of all sales PKR}</h2>
        </h1>
      </div>
    </div>
    <script defer src="index.js"></script>
  </body>
</html>
