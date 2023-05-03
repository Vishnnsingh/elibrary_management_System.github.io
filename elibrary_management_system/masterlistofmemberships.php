<!DOCTYPE html>
<html>

<head>
    <title>Reports</title>
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
                <li><a href="masterlistofmemberships.php">Master List of Memberships</a></li>
                <li><a href="activeissues.php">Active Issues</a></li>
                <li><a href="overduesreturn.php">Overdue returns</a></li>
                <li><a href="issuerequest.php">Issue Requests</a></li>

            </ul>

        </nav>
        <button id="logout-btn">Home</button>

    </header><br></br><br></br>


    <h1>List of Active Memberships</h1><br></br>

    <br></br><br></br>



    <table>
        <tr>
            <th>Membership ID</th>
            <th>Name of Member</th>
            <th>Contact Number</th>
            <th>Contact Address</th>
            <th>Aadhaar Card Number</th>
            <th>Start Date of Membership</th>
            <th>End Date of Membership</th>
            <th>Status</th>
            <th>Amount Pending (Fine)</th>
        </tr>
        <tr>
            <td>101</td>
            <td>John Doe</td>
            <td>9876543210</td>
            <td>123 Main Street</td>
            <td>1234 5678 9012</td>
            <td>01/01/2021</td>
            <td>30/06/2021</td>
            <td>Active</td>
            <td>0</td>
        </tr>
        <tr>
            <td>102</td>
            <td>Jane Smith</td>
            <td>9876543211</td>
            <td>456 Elm Street</td>
            <td>3456 7890 1234</td>
            <td>01/01/2021</td>
            <td>31/12/2021</td>
            <td>Active</td>
            <td>50</td>
        </tr>
        <tr>
            <td>103</td>
            <td>Bob Johnson</td>
            <td>9876543212</td>
            <td>789 Oak Street</td>
            <td>5678 9012 3456</td>
            <td>01/01/2021</td>
            <td>30/06/2022</td>
            <td>Inactive</td>
            <td>0</td>
        </tr>
        <tr>
            <td>104</td>
            <td>Sara Lee</td>
            <td>9876543213</td>
            <td>321 Pine Street</td>
            <td>7890 1234 5678</td>
            <td>01/01/2021</td>
            <td>30/06/2021</td>
            <td>Active</td>
            <td>20</td>
        </tr>
        <tr>
            <td>105</td>
            <td>David Kim</td>
            <td>9876543214</td>
            <td>654 Cedar Street</td>
            <td>9012 3456 7890</td>
            <td>01/01/2021</td>
            <td>31/12/2021</td>
            <td>Active</td>
            <td>0</td>
        </tr>
        <tr>
            <td>106</td>
            <td>Emily Chen</td>
            <td>9876543215</td>
            <td>987 Maple Street</td>
            <td>2345 6789 0123</td>
            <td>01/01/2021</td>
            <td>30/06/2022</td>
            <td>Inactive</td>
            <td>100</td>
        </tr>
    </table>

    <input type="reset" value="Back">
    <b></b><b></b><b></b>

    <button id="logout-btn">Logout</button>

</body>

</html>