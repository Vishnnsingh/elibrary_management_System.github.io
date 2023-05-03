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
    <h3>Update Membership</h3><br></br>



    <form action="" method="post">
        <label for="membership-number">Membership Number:</label>
        <input type="text" id="membership-number" name="membership-number" required><br><br>

        <label for="start-date">Start Date:</label>
        <input type="date" id="start-date" name="start-date" required><br><br>

        <label for="end-date">End Date:</label>
        <input type="date" id="end-date" name="end-date" required><br><br>

        <label>Membership Extension:</label><br>
        <input type="radio" id="six-months" name="membership-extension" value="six-months">
        <label for="six-months">Six Months</label><br>

        <input type="radio" id="one-year" name="membership-extension" value="one-year">
        <label for="one-year">One Year</label><br>

        <input type="radio" id="two-years" name="membership-extension" value="two-years">
        <label for="two-years">Two Years</label><br><br>

        <label>Membership Remove:</label><br>
        <input type="radio" id="remove-membership" name="membership-action" value="remove-membership">
        <label for="remove-membership">Remove Membership</label><br><br>

        <input type="submit" name="submit" value="Confirm">
        <input type="reset" name="reset" value="Cancel">
    </form>


</body>

</html>