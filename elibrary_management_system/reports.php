<!DOCTYPE html>
<html>

<head>
    <title>Reports</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <h1>Availabel Reports</h1>
        <nav>
            <ul>
                <li><a href="masterlistofbooks.php">Master List of Books</a></li>
                <li><a href="masterlistmovies.php">Master List of Movies</a></li>
                <li><a href="masterlistofmemberships.php">Master List of Memberships</a></li>
                <li><a href="activeissues.php">Active Issues</a></li>
                <li><a href="overduesreturn.php">Overdue returns</a></li>
                <li><a href="issuerequest.php">Issue Requests</a></li>

            </ul>

        </nav>
        <a href="adminhomepage.php">
        <button id="logout-btn">Home</button></a>
        <button id="logout-btn">Logout</button>
    </header>

</body>

</html>

<!-- <a href="addmembership.php">
            <button type="button" onclick="">Add </button></a> -->