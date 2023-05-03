<!DOCTYPE html>
<html>

<head>
    <title>Reports</title>
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
        <button id="logout-btn">Home</button>

    </header><br></br><br></br>


    <h1>Overdue Returns</h1><br></br>

    <br></br>



    <table>
        <thead>
            <tr>
                <th>Serial No. Book</th>
                <th>Name of Book</th>
                <th>Membership ID</th>
                <th>Date of Issue</th>
                <th>Date of Return</th>
                <th>Fine Calculation</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>The Great Gatsby</td>
                <td>123456</td>
                <td>2022-03-15</td>
                <td>2022-03-30</td>
                <th>55rs</th>
            </tr>
            <tr>
                <td>2</td>
                <td>Harry Potter and the Philosopher's Stone</td>
                <td>789012</td>
                <td>2022-04-01</td>
                <td>2022-04-15</td>
                <th>55rs</th>
            </tr>
            <!-- more rows here -->
        </tbody>
    </table>

    <input type="reset" value="Back">
    <b></b><b></b><b></b>

    <button id="logout-btn">Logout</button>


</body>


</html>