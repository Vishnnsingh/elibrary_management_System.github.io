<!DOCTYPE html>
<html>

<head>
    <title>Transactions</title>
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
        <h1>Transactions</h1>
        <nav>
            <ul>
                <li><a href="bookavailable.php">Is book availabel</a></li>
                <li><a href="issuebook.php">Issue book</a></li>
                <li><a href="returnbook.php">Return book</a></li>
                <li><a href="payfine.php">Pay fine</a></li>
            </ul>

        </nav>

        <button id="logout-btn">Home</button>
        <button id="logout-btn">Logout</button>
    </header>
</body>

</html>