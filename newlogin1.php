<?php
// Connect to the database
$conn = mysqli_connect("localhost", "id20466229_rrwebsitee", "Hello23.", "id20466229_rrwebsite");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process admin login form
if (isset($_POST['username']) && isset($_POST['password'])) {
    $adminName = $_POST['username'];
    $adminPassword = $_POST['password'];

    // Query the database
    $result = mysqli_query($conn, "SELECT * FROM accounts WHERE username='$adminName' AND password='$adminPassword'");

    // Check if admin exists
    if (mysqli_num_rows($result) > 0) {
        // Redirect to another page on successful login
        header("Location: testing5.php");
        exit();
    } else {
        header("Location: newlogin1.html");
        exit();
    }
}

// Close connection
mysqli_close($conn);
?>