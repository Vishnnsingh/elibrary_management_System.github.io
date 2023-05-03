<!DOCTYPE html>
<html>

<head>


    <title>Maintenance</title>


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

    <h3>User Management</h3><br></br>



    <form>
        <label>
            <input type="radio" name="user-type" value="new-user">
            New User
        </label>
        <label>
            <input type="radio" name="user-type" value="existing-user">
            Existing User
        </label>
        <br>
        <label>
            Name:
            <input type="text" name="user-name">
        </label>
        <br>
        <label>
            Status:
            <input type="checkbox" name="user-status" value="active">
            Active

        </label>
        <br>
        <label>
            Admin:
            <input type="checkbox" name="user-admin" value="admin">
        </label>
        <br>

        <input type="submit" name="submit" value="Confirm">
        <input type="reset" name="reset" value="Cancel">
    </form>


</body>

</html>