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

<body>

    <head>
        <title>Return book</title>
        <script>
            function validateForm() {
                // Get form fields
                var bookName = document.forms["bookIssueForm"]["bookName"].value;
                var authorName = document.forms["bookIssueForm"]["authorName"].value;
                var serialNo = document.forms["bookIssueForm"]["serialNo"].value;
                var issueDate = document.forms["bookIssueForm"]["issueDate"].value;
                var returnDate = document.forms["bookIssueForm"]["returnDate"].value;

                // Check if fields are empty
                if (bookName == "" || authorName == "" || serialNo == "" || issueDate == "" || returnDate == "") {
                    alert("Please fill in all required fields");
                    return false;
                }

                // Check if issue date is not less than today
                var today = new Date().toISOString().substr(0, 10);
                if (issueDate < today) {
                    alert("Issue date cannot be less than today");
                    return false;
                }

                // Check if return date is not more than 15 days from today
                var returnLimit = new Date();
                returnLimit.setDate(returnLimit.getDate() + 15);
                if (returnDate > returnLimit.toISOString().substr(0, 10)) {
                    alert("Return date cannot be more than 15 days from today");
                    return false;
                }

                return true;
            }
        </script>
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


    <h1>Return book</h1>
    <form name="bookIssueForm" onsubmit="return validateForm()">
        <label for="bookName">Book Name:</label>
        <input type="text" id="bookName" name="bookName" required><br><br>

        <label for="authorName">Author Name:</label>
        <input type="text" id="authorName" name="authorName" required><br><br>

        <label for="serialNo">Serial No:</label>
        <input type="text" id="serialNo" name="serialNo" required><br><br>

        <label for="issueDate">Issue Date:</label>
        <input type="date" id="issueDate" name="issueDate" required><br><br>

        <label for="returnDate">Return Date:</label>
        <input type="date" id="returnDate" name="returnDate" required><br><br>

        <label for="remarks">Remarks:</label>
        <textarea id="remarks" name="remarks"></textarea><br><br>

        <input type="submit" value="Confirm">
        <input type="reset" value="Cancle">
    </form>
</body>

</html>