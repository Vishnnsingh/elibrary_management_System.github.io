<!DOCTYPE html>
<html>

<head>
    <title>Book Availability</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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





        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin: 10px;
        }

        input[type=text],
        select {
            width: 250px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin: 10px;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
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






    <h1>Book Availability</h1>
    <form>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="Enter book title...">

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" placeholder="Enter author name...">

        <label for="category">Category:</label>
        <select id="category" name="category">
            <option value="">--Select category--</option>
            <option value="fiction">Fiction</option>
            <option value="non-fiction">Non-fiction</option>
            <option value="biography">Biography</option>
            <option value="history">History</option>
        </select>

        <input type="submit" value="Search">
    </form>

    <br>
    <!-- <button type="button" onclick="logout()">Logout</button> -->
</body>

</html>