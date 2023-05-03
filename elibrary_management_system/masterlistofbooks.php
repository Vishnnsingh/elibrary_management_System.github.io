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
                <li><a href="masterlistsofmemberships.php">Master List of Memberships</a></li>
                <li><a href="activeissues.php">Active Issues</a></li>
                <li><a href="overduesreturn.php">Overdue returns</a></li>
                <li><a href="issuerequest.php">Issue Requests</a></li>

            </ul>

        </nav>
        <button id="logout-btn">Home</button>

    </header><br></br><br></br>


    <h1>Master List of Books</h1><br></br>
    <table>
        <tr>
            <th>Serial Number</th>
            <th>Name of Book</th>
            <th>Author Name</th>
            <th>Category</th>
            <th>Status</th>
            <th>Cost</th>
            <th>Procurement Date</th>
        </tr>
        <tr>
            <td><input type="text" name="serial_number_1"></td>
            <td><input type="text" name="book_name_1"></td>
            <td><input type="text" name="author_name_1"></td>
            <td><input type="text" name="category_1"></td>
            <td><input type="text" name="status_1"></td>
            <td><input type="text" name="cost_1"></td>
            <td><input type="date" name="procurement_date_1"></td>
        </tr>
        <tr>
            <td><input type="text" name="serial_number_2"></td>
            <td><input type="text" name="book_name_2"></td>
            <td><input type="text" name="author_name_2"></td>
            <td><input type="text" name="category_2"></td>
            <td><input type="text" name="status_2"></td>
            <td><input type="text" name="cost_2"></td>
            <td><input type="date" name="procurement_date_2"></td>
        </tr>
        <tr>
            <td><input type="text" name="serial_number_3"></td>
            <td><input type="text" name="book_name_3"></td>
            <td><input type="text" name="author_name_3"></td>
            <td><input type="text" name="category_3"></td>
            <td><input type="text" name="status_3"></td>
            <td><input type="text" name="cost_3"></td>
            <td><input type="date" name="procurement_date_3"></td>
        </tr>
        <tr>
            <td><input type="text" name="serial_number_4"></td>
            <td><input type="text" name="book_name_4"></td>
            <td><input type="text" name="author_name_4"></td>
            <td><input type="text" name="category_4"></td>
            <td><input type="text" name="status_4"></td>
            <td><input type="text" name="cost_4"></td>
            <td><input type="date" name="procurement_date_4"></td>
        </tr>
        <tr>
            <td><input type="text" name="serial_number_5"></td>
            <td><input type="text" name="book_name_5"></td>
            <td><input type="text" name="author_name_5"></td>
            <td><input type="text" name="category_5"></td>
            <td><input type="text" name="status_5"></td>
            <td><input type="text" name="cost_5"></td>
            <td><input type="date" name="procurement_date_5"></td>
        </tr>
        <tr>
            <td>
                <br></br><br></br>

                <input type="reset" value="Back">
                <b></b><b></b><b></b>

                <button id="logout-btn">Logout</button>

</body>

</html>