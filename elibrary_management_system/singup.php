<?php  include("connection.php");?>


<!DOCTYPE html>
<html>

<head>
    <title>Signup Page</title>
    <style type="text/css">
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #9E9E9E;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px #ccc;
        }

        h1 {
            text-align: center;
            font-size: 32px;
            margin-bottom: 30px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
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
        
        <form action="index.php" method="POST">
            <h1>Signup</h1>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
            <input type="submit" value="Signup" name="Signup">
        </form>
    </div>
</body>

</html>

<?php 
// if($_POST['Signup'])
    if(isset($_POST["Signup"]))
{
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword =$_POST['confirm-password'];

    $query = "INSERT INTO form values('$name','$email','$username','$password','$cpassword')";

    $data = mysqli_query($conn,$query);

    if($data)
    {
      echo "Data Iserted onto database";
    }
    else
    {
        echo "Failed ";
    }

}

?>