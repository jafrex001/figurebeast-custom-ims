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
      <div class="navigation">
        <img src="../img/Figure-Beast.svg" alt="figurebeast-logo" />
        <ul>
          <a href="/src/index.html"><li>Dashboard</li></a>
          <a href="/src/past-orders.html"><li>Past Orders</li></a>
          <a href="/src/create-order.html"><li>Create Order</li></a>
        </ul>
      </div>
      <div class="main-area">
        <h1 class="past-orders-heading">All Orders:</h1>
        <ul class="past-orders-list" id="past-orders-list">
          <li>
            {Order Summary} {Placed By} {Price} {Click to view more details}
            {Edit Button} {Delete Button}
          </li>
        </ul>
      </div>
    </div>
    <script defer src="index.js"></script>
  </body>
</html>