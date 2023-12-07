<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shorcut icon" type="x-icon" href="logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Records</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #3498db;
            color: white;
            padding: 20px;
            font-size: 24px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: white;
            max-height: 400px; /* Adjust the maximum height as needed */
            overflow-y: auto;
            

        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        button {
            font-size: 18px;
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }
        
        .button-container {
        text-align: center;
        margin-top: 20px; /* Adjust the margin as needed */
    }
    
            .button-container button {
            font-size: 25px; /* Increase the font size */
            padding: 15px 30px; /* Increase the padding for more size */
            margin: 75px; /* Add more margin between buttons */
            cursor: pointer;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button-container button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
<header>
    Book Records
</header>

<?php
// Replace the database connection details with your own
$servername = "localhost";
$username = "id20466229_rrwebsitee";
$password = "Hello23.";
$dbname = "id20466229_rrwebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch records from the database
$sql = "SELECT id, author, book_name, genre, status FROM addBook";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Author Name</th>
                <th>Book Name</th>
                <th>Genre</th>
                <th>Status</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['author']}</td>
                <td>{$row['book_name']}</td>
                <td>{$row['genre']}</td>
                <td>{$row['status']}</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}



// Close connection
$conn->close();
?>

</body>
<!-- Buttons to redirect to different pages/files -->
<div class="button-container">
    <button onclick="location.href='bdel.html'">Delete</button>
    <button onclick="location.href='bupd.html'">Update</button>
    <button onclick="location.href='brgs.html'">Insert</button>
</div>

</html>
