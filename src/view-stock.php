<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
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
<?php
include('connect.php');
$page = 1;
$productsPerPage = 15;
$offset = ($page - 1) * $productsPerPage;
  
        $fetch = mysqli_query($conn, "SELECT * FROM products LIMIT $offset, $productsPerPage");
        $count = mysqli_num_rows($fetch);
        while ($rows = mysqli_fetch_array($fetch)) {
?>
          <tr>
            <td>
              <?= $rows[1]; ?>
            </td>
            <td>
              <?= $rows[2]; ?>
            </td>
            <td>
              <?= $rows[3]; ?>
            </td>
            <td>
              <?= $rows[4]; ?>
            </td>
          </tr>
          <?php
}
?>
      </table>

      <div class="page-link-container">
        <p>Page 1</p>
        <a href="view-stock-2.php" class="page-link">Next Page</a>
      </div>
    </div>
  </div>

  <script defer src="index.js"></script>
</body>

</html>