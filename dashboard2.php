<?php
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : "User";
?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!---Boxicons-->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!--My css-->
    <link rel="stylesheet" href="Dashboardstyle.css" />
    <title>Dashboard</title>
  </head>
  <body>
    <section id="sidebar">
      <a href="#" class="brand">
        <i class="bx bx-home"></i>
        <span class="text">Try</span>
        <span class="text1">Data</span>
      </a>
      <ul class="side-menu top">
        <li class="active">
          <a href="dashboard.php">
            <i class="bx bxs-dashboard"></i>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="fund_wallet.html">
            <i class="bx bx-wallet-alt"></i>
            <span class="text">Fund Wallet</span>
          </a>
        </li>
        <li>
          <a href="#BuyAirtime">
            <i class="bx bx-phone"></i>
            <span class="text">Buy Airtime</span>
          </a>
        </li>
        <li>
          <a href="#BuyData">
            <i class="bx bx-data"></i>
            <span class="text">Buy Data</span>
          </a>
        </li>
      </ul>
      <ul class="side-menu">
        <li>
          <a href="index.html" class="logout">
            <i class="bx bxs-log-out-circle"></i>
            <span class="text">log Out</span>
          </a>
        </li>
      </ul>
    </section>

    <!-- content -->
    <section id="content">
      <!-- NAVBAR -->
      <nav>
        <i class="bx bx-menu"></i>
        <a href="#" class="nav-link">Menu</a>
        <form action="#">
          <div class="form-input">
            <h1>Welcome, <?php echo $name; ?>!</h1>
          </div>
        </form>
       
      </nav>
      <!-- NAVBAR -->

      <!-- MAIN -->
      <main>
        <div class="head-title">
          <div class="left">
            <h1>Dashboard</h1>
            <ul class="breadcrumb"></ul>
          </div>
        </div>

        <ul class="box-info">
          <li>
            <i class="bx bx-wallet"></i>
            <span class="text">
              <h3>N100</h3>
              <p>Balance</p>
            </span>
          </li>
          <li>
            <i class="bx bx-credit-card"></i>
            <span class="text">
              <h3><a href="#" class="walletLink">+ Wallet</a></h3>
              <p>Wallet</p>
            </span>
          </li>
          <li>
            <i class="bx bxs-dollar-circle"></i>
            <span class="text">
              <h3>N00</h3>
              <p>Bonus</p>
            </span>
          </li>
        </ul>

        <div class="table-data">
          <div class="order">
            <div class="head">
              <h3>Transaction History</h3>
              <i class="bx bx-search"></i>
              <i class="bx bx-filter"></i>
            </div>
            <table>
              <thead>
                <tr>
                  <th>User</th>
                  <th>Date Order</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <img src="img/people.png" />
                    <p>John Doe</p>
                  </td>
                  <td>01-10-2021</td>
                  <td><span class="status completed">Completed</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="todo">
            <div class="head">
              <h3>Services</h3>
            </div>
            <ul class="todo-list">
              <li class="completed">
                <p><a href="#" class="services">Buy Airtime</a></p>
              </li>
              <li class="completed">
                <p><a href="#" class="services">Buy Data</a></p>
              </li>
            </ul>
          </div>
        </div>
      </main>
      <!-- MAIN -->
    </section>
    

    <script src="dashboardscript.js"></script>
  </body>
</html>
