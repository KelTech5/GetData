<?php
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : "User";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles1.css" />
  </head>
  <body>
    <div class="sidebar">
      <h3>SELF SERVICE</h3>
      <a href="#">Dashboard</a>
      <a href="card1.html">Fund Wallet</a>

      <h3>PRODUCTS</h3>
      <a href="#">Buy Data</a>
      <a href="#">Buy Airtime</a>
      <a href="login.html">Log Out</a>
    </div>

    <div class="main-content">
      <h1>Welcome, <?php echo $name; ?>!</h1>
      <p class="breadcrumb">Dashboard</p>

      <div class="cards">
        <div class="card">
          <h2>Wallet Balance</h2>
          <p class="amount">₦0.00</p>
        </div>
        <div class="card">
          <h2>Fund Wallet</h2>
          <a href="#">Click here</a>
        </div>
        <div class="card">
          <h2>Bonus</h2>
          <p class="amount">₦0</p>
          <a href="#">Click here</a>
        </div>
      </div>

      <div class="card full-width">
        <h2>Customer Care</h2>
        <a href="#">Click here</a>
      </div>

      <div class="faq">
        <h3>FAQ?</h3>
        <p>
          You can deposit or transfer funds into your unique eBill account to
          get credited instantly.
        </p>
        <p>Click on the "Fund Wallet" button above to get started.</p>
      </div>
    </div>
  </body>
</html>

