<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        nav {
            display: inline-block;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            display: inline-block;
            margin-right: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
        }

        nav a:hover {
            color: #ddd;
        }

        main {
            max-width: 960px;
            margin: 20px auto;
            padding: 20px;
        }

        section {
            margin-bottom: 40px;
        }

        h2 {
            margin-top: 0;
        }

        footer {
            /* background-color: #333; */
            color: #fff;
            padding: 20px;
            text-align: center;
            margin: 500px;


        }
    </style>
</head>

<body>


    <header>
        <h1>Maintenance</h1>
        <nav>
            <ul>
                <li><a href="#">Membership</a></li>
                <li><a href="#">Books/Movies</a></li>
                <li><a href="#">User Management</a></li>

            </ul>

        </nav>
        <a href="adminhomepage.php">
            <button id="logout-btn">Home</button></a>
        <button id="logout-btn">Logout</button>
    </header><br></br>
    <h1>Membership</h1>
    <h3>Add Membership</h3><br></br>

    <form>
        <label for="first-name">First Name:</label>
        <input type="text" id="first-name" name="first-name"><br><br>

        <label for="last-name">Last Name:</label>
        <input type="text" id="last-name" name="last-name"><br><br>

        <label for="contact-name">Contact Name:</label>
        <input type="text" id="contact-name" name="contact-name"><br><br>

        <label for="contact-address">Contact Address:</label>
        <input type="text" id="contact-address" name="contact-address"><br><br>

        <label for="aadhar-card-no">Aadhar Card Number:</label>
        <input type="text" id="aadhar-card-no" name="aadhar-card-no"><br><br>

        <label for="start-date">Start Date:</label>
        <input type="date" id="start-date" name="start-date"><br><br>

        <label for="end-date">End Date:</label>
        <input type="date" id="end-date" name="end-date"><br><br>

        <label>Membership Duration:</label><br>
        <input type="radio" id="six-months" name="membership-duration" value="six-months">
        <label for="six-months">Six Months</label><br>

        <input type="radio" id="one-year" name="membership-duration" value="one-year">
        <label for="one-year">One Year</label><br>

        <input type="radio" id="two-years" name="membership-duration" value="two-years">
        <label for="two-years">Two Years</label><br><br>

        <button type="button" onclick="cancel()">Cancel</button>
        <button type="button" onclick="confirm()">Confirm</button>
    </form>

</body>

</html>