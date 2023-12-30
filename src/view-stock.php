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
        <h1>Current Stock:</h1>
        <table>
          <tr>
            <th>Product Name</th>
            <th>Product Code</th>
            <th>Quantity</th>
            <th>Price</th>
          </tr>
          <tr>
            <td>Goku Figure</td>
            <td>GF1</td>
            <td>20</td>
            <td>3500</td>
          </tr>
        </table>
        <div class="page-link-container">
          <p>Page 1</p>
          <a href="/src/view-stock-2.php" class="page-link">Next Page</a>
        </div>
      </div>
    </div>

    <script defer src="index.js"></script>
  </body>
</html>
