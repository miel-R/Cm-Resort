<!DOCTYPE html>
<html>

<head>
    <title>Login Popup with Fixed Credentials</title>
    <link rel="stylesheet" type="text/css" href="Login_popupstyle.css">
    <script src="popup_login.js"></script>
</head>

<body>
    <button id="login-button" onclick="openPopup()">Login</button>
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <h2>Login</h2>
            <form>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <input type="button" value="Login" onclick="login()">
            </form>
        </div>
    </div>
    <div id="control-panel" class="control-panel" style="display: none;">
        <h2>Welcome to the Control Panel!</h2>
        <p>You are now logged in.</p>
        <button onclick="logout()">Logout</button>
        <button onclick="Continue()">Continue</button>
    </div>
    <div id="list-data" class="list-data" style="display: none;">
        <h2 id="data-list">List of Reservation</h2>
        <style>
            .list-data {
                margin: 10px;
                text-align: center, ;
            }

            table {
                border-collapse: collapse;
                width: 100%;
            }

            th,
            td {
                text-align: left;
                padding: 8px;
                border-bottom: 1px solid rgb(221, 221, 221);
            }

            th {
                background-color: rgb(76, 175, 80);
                color: white;
            }
        </style>

        <body>
            <?php
            require_once('php/data_list.php')
                ?>
        </body>

</body>

</html>