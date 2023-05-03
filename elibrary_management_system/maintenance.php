<!DOCTYPE html>
<html>

<head>
    <title>Admin Homepage</title>
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
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;


        }
    </style>
</head>

<body>
    <header>
        <h1>Admin Homepage</h1>
        <nav>
            <ul>
                <li><a href="maintenance.php">Maintenance</a></li>
                <li><a href="reports.php">Reports</a></li>
                <li><a href="transactions.php">Transactions</a></li>
                <li><a href="product_details.php">Product Details</a></li>
            </ul>
        </nav>
    </header><br></br><br></br><br></br>


    <h2>Maintenance</h2>

    <body>

        <h1>Housekeeping</h1>

        <h1>Membership</h1>
        <a href="addmembership.php">
            <button type="button" onclick="">Add </button></a>

        <a href="updatemembership.php">
            <button>Update</button></a>

        <h1>Books/Movies</h1>
        <a href="add_book_movie.php">
            <button>Add</button></a>

        <a href="updatebook_movies.php">
            <button>Update</button></a>

        <h1>User Management</h1>

        <a href="usermangment.php">
            <button>user Management</button></a>

    </body>

</html>