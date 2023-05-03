<?php  include("connection.php");?>
<!DOCTYPE html>
<html>
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

<head>
    <title>Books Issue Form</title>
    
</head>

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

<body>
    
    <form action="" method="POST">
        <h1>Book Issue Form</h1>
        <label for="bookName">Book Name:</label>
        <input type="text" id="bookName" name="bookName" required><br><br>

        <label for="authorName">Author Name:</label>
        <input type="text" id="authorName" name="authorName" required><br><br>

        <label for="issueDate">Issue Date:</label>
        <input type="date" id="issueDate" name="issueDate" required><br><br>

        <label for="returnDate">Return Date:</label>
        <input type="date" id="returnDate" name="returnDate" required><br><br>

        <label for="remarks">Remarks:</label>
        <textarea id="remarks" name="remarks"></textarea><br><br>

        <input type="submit" value="Confirm" name="Book Issue Form">
        <input type="reset" value="Cancle" >
    </form>
</body>

</html>


<?php 
// if($_POST['Signup'])
    if(isset($_POST['Book Issue Form']))
{
    $bookname     = $_POST['bookName'];
    $authorname    = $_POST['authorName'];
    $issuedate = $_POST['issueDate'];
    $returndate = $_POST['returnDate'];
    $remarks =$_POST['remarks'];

    $query = "INSERT INTO bookissue values('$booknmae','$authername','$issuedate','$returndate','$remarks')";

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