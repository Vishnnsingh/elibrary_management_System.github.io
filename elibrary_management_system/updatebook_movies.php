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
    <h1>Book/Movies</h1>
    <h3>Update Book/Movie</h3><br></br>



    <form>
        <label><input type="radio" name="book_or_movie" value="book"> Book</label>
        <label><input type="radio" name="book_or_movie" value="movie"> Movie</label><br><br>

        <label>Book/Name:</label>
        <input type="text" name="name"><br><br>

        <label for="serial_no">Serial No:</label>
        <input type="text" id="serial_no" name="serial_no"><br><br>

        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="available">Available</option>
            <option value="issued">Issued</option>
            <option value="lost">Lost</option>
            <option value="damaged">Damaged</option>
        </select><br><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date"><br><br>

        <input type="submit" name="submit" value="Confirm">
        <input type="reset" name="reset" value="Cancel">
    </form>


</body>

</html>