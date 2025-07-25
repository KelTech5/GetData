
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!-- Your CSS -->
    <style>
        /* Your existing CSS here */
        @import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap");

        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }

        a {
          text-decoration: none;
        }

        li {
          list-style: none;
        }

        :root {
          --poppins: "Poppins", sans-serif;
          --lato: "Lato", sans-serif;

          --light: #f9f9f9;
          --blue: #3c91e6;
          --light-blue: #cfe8ff;
          --grey: #eee;
          --dark-grey: #aaaaaa;
          --dark: #342e37;
          --red: #db504a;
          --yellow: #ffce26;
          --light-yellow: #fff2c6;
          --orange: #fd7238;
          --light-orange: #ffe0d3;
        }

        html {
          overflow-x: hidden;
        }

        body.dark {
          --light: #0c0c1e;
          --grey: #060714;
          --dark: #fbfbfb;
        }

        body {
          background: var(--grey);
          overflow-x: hidden;
        }

        /* SIDEBAR */
        #sidebar {
          position: fixed;
          top: 0;
          left: 0;
          width: 280px;
          height: 100%;
          background: var(--light);
          z-index: 2000;
          font-family: var(--lato);
          transition: 0.3s ease;
          overflow-x: hidden;
          scrollbar-width: none;
        }
        #sidebar::--webkit-scrollbar {
          display: none;
        }
        #sidebar.hide {
          width: 60px;
        }
        #sidebar .brand {
          font-size: 24px;
          font-weight: 700;
          height: 56px;
          display: flex;
          align-items: center;
          color: var(--blue);
          position: sticky;
          top: 0;
          left: 0;
          background: var(--light);
          z-index: 500;
          padding-bottom: 20px;
          box-sizing: content-box;
        }
        #sidebar .brand .bx {
          min-width: 60px;
          display: flex;
          justify-content: center;
        }
        #sidebar .side-menu {
          width: 100%;
          margin-top: 48px;
        }
        #sidebar .side-menu li {
          height: 48px;
          background: transparent;
          margin-left: 6px;
          border-radius: 48px 0 0 48px;
          padding: 4px;
        }
        #sidebar .side-menu li.active {
          background: var(--grey);
          position: relative;
        }
        #sidebar .side-menu li.active::before {
          content: "";
          position: absolute;
          width: 40px;
          height: 40px;
          border-radius: 50%;
          top: -40px;
          right: 0;
          box-shadow: 20px 20px 0 var(--grey);
          z-index: -1;
        }
        #sidebar .side-menu li.active::after {
          content: "";
          position: absolute;
          width: 40px;
          height: 40px;
          border-radius: 50%;
          bottom: -40px;
          right: 0;
          box-shadow: 20px -20px 0 var(--grey);
          z-index: -1;
        }
        #sidebar .side-menu li a {
          width: 100%;
          height: 100%;
          background: var(--light);
          display: flex;
          align-items: center;
          border-radius: 48px;
          font-size: 16px;
          color: var(--dark);
          white-space: nowrap;
          overflow-x: hidden;
        }
        #sidebar .side-menu.top li.active a {
          color: var(--blue);
        }
        #sidebar.hide .side-menu li a {
          width: calc(48px - (4px * 2));
          transition: width 0.3s ease;
        }
        #sidebar .side-menu li a.logout {
          color: var(--red);
        }
        #sidebar .side-menu.top li a:hover {
          color: var(--blue);
        }
        #sidebar .side-menu li a .bx {
          min-width: calc(60px - ((4px + 6px) * 2));
          display: flex;
          justify-content: center;
        }
        /* SIDEBAR */

        /* CONTENT */
        #content {
          position: relative;
          width: calc(100% - 280px);
          left: 280px;
          transition: 0.3s ease;
        }
        #sidebar.hide ~ #content {
          width: calc(100% - 60px);
          left: 60px;
        }

        /* NAVBAR */
        #content nav {
          height: 56px;
          background: var(--light);
          padding: 0 24px;
          display: flex;
          align-items: center;
          grid-gap: 24px;
          font-family: var(--lato);
          position: sticky;
          top: 0;
          left: 0;
          z-index: 1000;
        }
        #content nav::before {
          content: "";
          position: absolute;
          width: 40px;
          height: 40px;
          bottom: -40px;
          left: 0;
          border-radius: 50%;
          box-shadow: -20px -20px 0 var(--light);
        }
        #content nav a {
          color: var(--dark);
        }
        #content nav .bx.bx-menu {
          cursor: pointer;
          color: var(--dark);
        }
        #content nav .nav-link {
          font-size: 16px;
          transition: 0.3s ease;
        }
        #content nav .nav-link:hover {
          color: var(--blue);
        }
        #content nav form {
          max-width: 400px;
          width: 100%;
          margin-right: auto;
        }
        #content nav form .form-input {
          display: flex;
          align-items: center;
          height: 36px;
        }
        #content nav form .form-input input {
          flex-grow: 1;
          padding: 0 16px;
          height: 100%;
          border: none;
          background: var(--grey);
          border-radius: 36px 0 0 36px;
          outline: none;
          width: 100%;
          color: var(--dark);
        }
        #content nav form .form-input button {
          width: 36px;
          height: 100%;
          display: flex;
          justify-content: center;
          align-items: center;
          background: var(--blue);
          color: var(--light);
          font-size: 18px;
          border: none;
          outline: none;
          border-radius: 0 36px 36px 0;
          cursor: pointer;
        }
        #content nav .notification {
          font-size: 20px;
          position: relative;
        }
        #content nav .notification .num {
          position: absolute;
          top: -6px;
          right: -6px;
          width: 20px;
          height: 20px;
          border-radius: 50%;
          border: 2px solid var(--light);
          background: var(--red);
          color: var(--light);
          font-weight: 700;
          font-size: 12px;
          display: flex;
          justify-content: center;
          align-items: center;
        }
        #content nav .profile img {
          width: 36px;
          height: 36px;
          object-fit: cover;
          border-radius: 50%;
        }
        #content nav .switch-mode {
          display: block;
          min-width: 50px;
          height: 25px;
          border-radius: 25px;
          background: var(--grey);
          cursor: pointer;
          position: relative;
        }
        #content nav .switch-mode::before {
          content: "";
          position: absolute;
          top: 2px;
          left: 2px;
          bottom: 2px;
          width: calc(25px - 4px);
          background: var(--blue);
          border-radius: 50%;
          transition: all 0.3s ease;
        }
        #content nav #switch-mode:checked + .switch-mode::before {
          left: calc(100% - (25px - 4px) - 2px);
        }
        /* NAVBAR */

        /* MAIN */
        #content main {
          width: 100%;
          padding: 36px 24px;
          font-family: var(--poppins);
          max-height: calc(100vh - 56px);
          overflow-y: auto;
        }
        #content main .head-title {
          display: flex;
          align-items: center;
          justify-content: space-between;
          grid-gap: 16px;
          flex-wrap: wrap;
        }
        #content main .head-title .left h1 {
          font-size: 36px;
          font-weight: 600;
          margin-bottom: 10px;
          color: var(--dark);
        }
        #content main .head-title .left .breadcrumb {
          display: flex;
          align-items: center;
          grid-gap: 16px;
        }
        #content main .head-title .left .breadcrumb li {
          color: var(--dark);
        }
        #content main .head-title .left .breadcrumb li a {
          color: var(--dark-grey);
          pointer-events: none;
        }
        #content main .head-title .left .breadcrumb li a.active {
          color: var(--blue);
          pointer-events: unset;
        }
        #content main .head-title .btn-download {
          height: 36px;
          padding: 0 16px;
          border-radius: 36px;
          background: var(--blue);
          color: var(--light);
          display: flex;
          justify-content: center;
          align-items: center;
          grid-gap: 10px;
          font-weight: 500;
        }

        #content main .box-info {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
          grid-gap: 24px;
          margin-top: 36px;
        }
        #content main .box-info li {
          padding: 24px;
          background: var(--light);
          border-radius: 20px;
          display: flex;
          align-items: center;
          grid-gap: 24px;
        }
        #content main .box-info li .bx {
          width: 80px;
          height: 80px;
          border-radius: 10px;
          font-size: 36px;
          display: flex;
          justify-content: center;
          align-items: center;
        }
        #content main .box-info li:nth-child(1) .bx {
          background: var(--light-blue);
          color: var(--blue);
        }
        #content main .box-info li:nth-child(2) .bx {
          background: var(--light-yellow);
          color: var(--yellow);
        }
        #content main .box-info li:nth-child(3) .bx {
          background: var(--light-orange);
          color: var(--orange);
        }
        #content main .box-info li .text h3 {
          font-size: 24px;
          font-weight: 600;
          color: var(--dark);
        }
        #content main .box-info li .text p {
          color: var(--dark);
        }

        #content main .table-data {
          display: flex;
          flex-wrap: wrap;
          grid-gap: 24px;
          margin-top: 24px;
          width: 100%;
          color: var(--dark);
        }
        #content main .table-data > div {
          border-radius: 20px;
          background: var(--light);
          padding: 24px;
          overflow-x: auto;
        }
        #content main .table-data .head {
          display: flex;
          align-items: center;
          grid-gap: 16px;
          margin-bottom: 24px;
        }
        #content main .table-data .head h3 {
          margin-right: auto;
          font-size: 24px;
          font-weight: 600;
        }
        #content main .table-data .head .bx {
          cursor: pointer;
        }

        #content main .table-data .order {
          flex-grow: 1;
          flex-basis: 500px;
        }
        #content main .table-data .order table {
          width: 100%;
          border-collapse: collapse;
        }
        #content main .table-data .order table th {
          padding-bottom: 12px;
          font-size: 13px;
          text-align: left;
          border-bottom: 1px solid var(--grey);
        }
        #content main .table-data .order table td {
          padding: 16px 0;
        }
        #content main .table-data .order table tr td:first-child {
          display: flex;
          align-items: center;
          grid-gap: 12px;
          padding-left: 6px;
        }
        #content main .table-data .order table td img {
          width: 36px;
          height: 36px;
          border-radius: 50%;
          object-fit: cover;
        }
        #content main .table-data .order table tbody tr:hover {
          background: var(--grey);
        }
        #content main .table-data .order table tr td .status {
          font-size: 10px;
          padding: 6px 16px;
          color: var(--light);
          border-radius: 20px;
          font-weight: 700;
        }
        #content main .table-data .order table tr td .status.completed {
          background: var(--blue);
        }
        #content main .table-data .order table tr td .status.process {
          background: var(--yellow);
        }
        #content main .table-data .order table tr td .status.pending {
          background: var(--orange);
        }

        #content main .table-data .todo {
          flex-grow: 1;
          flex-basis: 300px;
        }
        #content main .table-data .todo .todo-list {
          width: 100%;
        }
        #content main .table-data .todo .todo-list li {
          width: 100%;
          margin-bottom: 16px;
          background: var(--grey);
          border-radius: 10px;
          padding: 14px 20px;
          display: flex;
          justify-content: space-between;
          align-items: center;
        }
        #content main .table-data .todo .todo-list li .bx {
          cursor: pointer;
        }
        #content main .table-data .todo .todo-list li.completed {
          border-left: 10px solid var(--blue);
        }
        #content main .table-data .todo .todo-list li.not-completed {
          border-left: 10px solid var(--orange);
        }
        #content main .table-data .todo .todo-list li:last-child {
          margin-bottom: 0;
        }
        /* MAIN */
        /* CONTENT */

        @media screen and (max-width: 768px) {
          #sidebar {
            width: 200px;
          }

          #content {
            width: calc(100% - 60px);
            left: 200px;
          }

          #content nav .nav-link {
            display: none;
          }
        }

        @media screen and (max-width: 576px) {
          #content nav form .form-input input {
            display: none;
          }

          #content nav form .form-input button {
            width: auto;
            height: auto;
            background: transparent;
            border-radius: none;
            color: var(--dark);
          }

          #content nav form.show .form-input input {
            display: block;
            width: 100%;
          }
          #content nav form.show .form-input button {
            width: 36px;
            height: 100%;
            border-radius: 0 36px 36px 0;
            color: var(--light);
            background: var(--red);
          }

          #content nav form.show ~ .notification,
          #content nav form.show ~ .profile {
            display: none;
          }

          #content main .box-info {
            grid-template-columns: 1fr;
          }

          #content main .table-data .head {
            min-width: 420px;
          }
          #content main .table-data .order table {
            min-width: 420px;
          }
          #content main .table-data .todo .todo-list {
            min-width: 420px;
          }
        }

        .walletLink {
          color: var(--orange);
        }

        .services {
          color: var(--blue);
        }

        /* New styles for dashboard sections */
        .dashboard-section {
          display: none;
        }

        .dashboard-section.active {
          display: block;
        }
    </style>
</head>
<body>
    <?php
    $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : "User";
    ?>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bx-home'></i>
            <span class="text">Try</span>
            <span class="text1">Data</span>
        </a>
        <ul class="side-menu top">
            <li class="active" data-section="dashboard">
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li data-section="fund-wallet">
                <a href="#">
                    <i class='bx bx-wallet-alt'></i>
                    <span class="text">Fund Wallet</span>
                </a>
            </li>
            <li data-section="buy-airtime">
                <a href="#">
                    <i class='bx bx-phone'></i>
                    <span class="text">Buy Airtime</span>
                </a>
            </li>
            <li data-section="buy-data">
                <a href="#">
                    <i class='bx bx-data'></i>
                    <span class="text">Buy Data</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li data-section="logout">
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Log Out</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
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
            <!-- Dashboard Section -->
            <div id="dashboard-section" class="dashboard-section active">
                <div class="head-title">
                    <div class="left">
                        <h1>Dashboard</h1>
                        <ul class="breadcrumb"></ul>
                    </div>
                </div>

                <ul class="box-info">
                    <li>
                        <i class='bx bx-wallet'></i>
                        <span class="text">
                            <h3>N100</h3>
                            <p>Balance</p>
                        </span>
                    </li>
                    <li>
                        <i class='bx bx-credit-card'></i>
                        <span class="text">
                            <h3><a href="#" class="walletLink">+ Wallet</a></h3>
                            <p>Wallet</p>
                        </span>
                    </li>
                    <li>
                        <i class='bx bxs-dollar-circle'></i>
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
                            <i class='bx bx-search'></i>
                            <i class='bx bx-filter'></i>
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
                                        <img src="img/people.png">
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
            </div>

            <!-- Fund Wallet Section -->
            <div id="fund-wallet-section" class="dashboard-section">
                <div class="head-title">
                    <div class="left">
                        <h1>Fund Wallet</h1>
                    </div>
                </div>

                <div class="table-data">
                    <div class="order" style="width: 100%;">
                        <div class="head">
                            <h3>Add Funds to Your Wallet</h3>
                        </div>
                        <div style="padding: 20px;">
                            <form>
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500;">Amount</label>
                                    <input type="number" placeholder="Enter amount" style="width: 100%; padding: 12px; border: 1px solid var(--grey); border-radius: 5px;">
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500;">Payment Method</label>
                                    <select style="width: 100%; padding: 12px; border: 1px solid var(--grey); border-radius: 5px;">
                                        <option>Bank Transfer</option>
                                        <option>Credit/Debit Card</option>
                                        <option>USSD</option>
                                    </select>
                                </div>
                                <button type="submit" style="background: var(--blue); color: white; border: none; padding: 12px 24px; border-radius: 5px; cursor: pointer; font-weight: 500; transition: background 0.3s;">
                                    Proceed to Payment
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Buy Airtime Section -->
            <div id="buy-airtime-section" class="dashboard-section">
                <div class="head-title">
                    <div class="left">
                        <h1>Buy Airtime</h1>
                    </div>
                </div>

                <div class="table-data">
                    <div class="order" style="width: 100%;">
                        <div class="head">
                            <h3>Purchase Airtime</h3>
                        </div>
                        <div style="padding: 20px;">
                            <form>
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500;">Network</label>
                                    <select style="width: 100%; padding: 12px; border: 1px solid var(--grey); border-radius: 5px;">
                                        <option>MTN</option>
                                        <option>Airtel</option>
                                        <option>Glo</option>
                                        <option>9mobile</option>
                                    </select>
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500;">Phone Number</label>
                                    <input type="tel" placeholder="Enter phone number" style="width: 100%; padding: 12px; border: 1px solid var(--grey); border-radius: 5px;">
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500;">Amount</label>
                                    <input type="number" placeholder="Enter amount" style="width: 100%; padding: 12px; border: 1px solid var(--grey); border-radius: 5px;">
                                </div>
                                <button type="submit" style="background: var(--blue); color: white; border: none; padding: 12px 24px; border-radius: 5px; cursor: pointer; font-weight: 500; transition: background 0.3s;">
                                    Buy Airtime
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Buy Data Section -->
            <div id="buy-data-section" class="dashboard-section">
                <div class="head-title">
                    <div class="left">
                        <h1>Buy Data</h1>
                    </div>
                </div>

                <div class="table-data">
                    <div class="order" style="width: 100%;">
                        <div class="head">
                            <h3>Purchase Data Bundle</h3>
                        </div>
                        <div style="padding: 20px;">
                            <form>
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500;">Network</label>
                                    <select style="width: 100%; padding: 12px; border: 1px solid var(--grey); border-radius: 5px;">
                                        <option>MTN</option>
                                        <option>Airtel</option>
                                        <option>Glo</option>
                                        <option>9mobile</option>
                                    </select>
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500;">Phone Number</label>
                                    <input type="tel" placeholder="Enter phone number" style="width: 100%; padding: 12px; border: 1px solid var(--grey); border-radius: 5px;">
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500;">Data Plan</label>
                                    <select style="width: 100%; padding: 12px; border: 1px solid var(--grey); border-radius: 5px;">
                                        <option>1GB - N1000</option>
                                        <option>2GB - N2000</option>
                                        <option>5GB - N5000</option>
                                        <option>10GB - N10000</option>
                                    </select>
                                </div>
                                <button type="submit" style="background: var(--blue); color: white; border: none; padding: 12px 24px; border-radius: 5px; cursor: pointer; font-weight: 500; transition: background 0.3s;">
                                    Buy Data
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logout Section -->
            <div id="logout-section" class="dashboard-section">
                <div class="head-title">
                    <div class="left">
                        <h1>Logout</h1>
                    </div>
                </div>

                <div class="table-data">
                    <div class="order" style="width: 100%; text-align: center; padding: 40px 20px;">
                        <h3 style="margin-bottom: 20px;">Are you sure you want to log out?</h3>
                        <div>
                            <button style="background: var(--blue); color: white; border: none; padding: 12px 24px; border-radius: 5px; cursor: pointer; font-weight: 500; margin-right: 15px;">
                                <i class='bx bxs-log-out-circle'></i> Yes, Logout
                            </button>
                            <button style="background: white; color: var(--dark); border: 1px solid var(--grey); padding: 12px 24px; border-radius: 5px; cursor: pointer; font-weight: 500;">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script>
        // Your existing JavaScript with modifications for navigation
        const allSideMenu = document.querySelectorAll("#sidebar .side-menu li a");

        allSideMenu.forEach((item) => {
            const li = item.parentElement;

            item.addEventListener("click", function (e) {
                e.preventDefault();
                
                // Remove active class from all items
                allSideMenu.forEach((i) => {
                    i.parentElement.classList.remove("active");
                });
                
                // Add active class to clicked item
                li.classList.add("active");
                
                // Get the section to show
                const sectionId = li.getAttribute('data-section');
                
                // Hide all sections
                document.querySelectorAll('.dashboard-section').forEach(section => {
                    section.classList.remove('active');
                });
                
                // Show the selected section
                document.getElementById(`${sectionId}-section`).classList.add('active');
                
                // Handle logout separately (in a real app, this would redirect)
                if (sectionId === 'logout') {
                    console.log('Logout functionality would go here');
                    // In a real app, you might redirect to logout page:
                    // window.location.href = 'logout.php';
                }
            });
        });

        // TOGGLE SIDEBAR
        const menuBar = document.querySelector("#content nav .bx.bx-menu");
        const sidebar = document.getElementById("sidebar");

        menuBar.addEventListener("click", function () {
            sidebar.classList.toggle("hide");
        });

        const searchButton = document.querySelector(
            "#content nav form .form-input button"
        );
        const searchButtonIcon = document.querySelector(
            "#content nav form .form-input button .bx"
        );
        const searchForm = document.querySelector("#content nav form");

        searchButton.addEventListener("click", function (e) {
            if (window.innerWidth < 576) {
                e.preventDefault();
                searchForm.classList.toggle("show");
                if (searchForm.classList.contains("show")) {
                    searchButtonIcon.classList.replace("bx-search", "bx-x");
                } else {
                    searchButtonIcon.classList.replace("bx-x", "bx-search");
                }
            }
        });

        if (window.innerWidth < 768) {
            sidebar.classList.add("hide");
        } else if (window.innerWidth > 576) {
            searchButtonIcon.classList.replace("bx-x", "bx-search");
            searchForm.classList.remove("show");
        }

        window.addEventListener("resize", function () {
            if (this.innerWidth > 576) {
                searchButtonIcon.classList.replace("bx-x", "bx-search");
                searchForm.classList.remove("show");
            }
        });

        const switchMode = document.getElementById("switch-mode");

        switchMode.addEventListener("change", function () {
            if (this.checked) {
                document.body.classList.add("dark");
            } else {
                document.body.classList.remove("dark");
            }
        });
    </script>
</body>
</html>