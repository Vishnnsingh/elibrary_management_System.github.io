<!DOCTYPE html>
<html>

<head>
    <title>Product Details</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <h1>Subject Details</h1>
    </header>

    <main>
        <h2>Enter Subject Details</h2>
        <form id="subject-form">
            <label for="subject-code-from">Subject Code From:</label>
            <input type="text" id="subject-code-from" name="subject-code-from" required>

            <label for="subject-code-to">Subject Code To:</label>
            <input type="text" id="subject-code-to" name="subject-code-to" required>

            <label for="category">Category:</label>
            <select id="category" name="category">
                <option value="">Select Category</option>
                <option value="Arts">Arts</option>
                <option value="Science">Science</option>
                <option value="Commerce">Commerce</option>
            </select>

            <button type="submit">Add Subject</button>
        </form>

        <h2>Subject List</h2>
        <table id="subject-table">
            <thead>
                <tr>
                    <th>Subject Code From</th>
                    <th>Subject Code To</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </main>



    <script>
        const subjectForm = document.getElementById("subject-form");
        const subjectTable = document.getElementById("subject-table");
        const tbody = subjectTable.querySelector("tbody");

        subjectForm.addEventListener("submit", (event) => {
            event.preventDefault();

            const subjectCodeFrom = document.getElementById("subject-code-from").value;
            const subjectCodeTo = document.getElementById("subject-code-to").value;
            const category = document.getElementById("category").value;

            const tr = document.createElement("tr");
            const tdSubjectCodeFrom = document.createElement("td");
            tdSubjectCodeFrom.textContent = subjectCodeFrom;
            tr.appendChild(tdSubjectCodeFrom);

            const tdSubjectCodeTo = document.createElement("td");
            tdSubjectCodeTo.textContent = subjectCodeTo;
            tr.appendChild(tdSubjectCodeTo);

            const tdCategory = document.createElement("td");
            tdCategory.textContent = category;
            tr.appendChild(tdCategory);

            tbody.appendChild(tr);

            subjectForm.reset();
        });
    </script>

    <br></br><br></br>

    <input type="reset" value="Back">



    <button id="logout-btn">Logout</button>
</body>

</html>