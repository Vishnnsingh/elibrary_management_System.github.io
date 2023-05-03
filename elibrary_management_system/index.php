<?php  include("connection.php");?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <script src="valid.js"></script>
    <style type="text/css">
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 430px;
            margin: 42px auto;
            background-color: #9E9E9E;
            padding: 21px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px #ccc;
        }

        h1 {
            text-align: center;
            font-size: 32px;
            margin-bottom: 30px;
        }

        input[type="text"],
        input[type="password"] {
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
            margin-bottom: 20px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }

        .signup {
            text-align: center;
            margin-top: 20px;
        }

        .signup a {
            color: #4CAF50;
            text-decoration: none;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            margin: 0px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Elibrary Managment System </h1>
    </header>
    <div class="container">
        
        <form action="adminhomepage.php" method="POST">
            <h1>Admin Login</h1>
            <label for="username">Admin ID:</label>
            <input type="text" id="adminname" name="adminid" placeholder="email" required />
            <label for="password">Password:</label>
            <input type="password" id="adminpassword" name="adminpassword" placeholder="password" required />
            <input type="submit" value="Login" /> 

            <!-- onclick="validate()"   -->
        </form>
        <hr>
        <h1>UserLogin</h1>
        <form action="userhomepage.php" method="POst">
            <label for="username">User ID:</label>
            <input type="text" id="username" name="username" placeholder="user" required />
            <label for="password">Password:</label>
            <input type="password" id="userpassword" name="password" placeholder="user" required />
            <input type="submit" value="Login" />
        </form>
        <div class="signup">
            <p>Don't have an account? <a href="singup.php">Sign up</a></p>
        </div>

    </div>


</body>

</html>



<?php 

if(isset($_POST['UserLogin'])){

    $email   = $_POST['username'];
    $password = $_POST['password'];

    // $sql="select * from admin where admin ='".$admin."'AND password='".$password."' limit 1";

     $sql = "INSERT INTO userdetail values('$email','$password')";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo "You have Successful logged in";
        // exit();
    }
    else{
        echo "You have entered incorrect password";
        // exit();
    }

    
}





?>