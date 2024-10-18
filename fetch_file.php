<?php
// Check if the session is already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();  // Start session only if not already started
}

// Ensure the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_panel";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user data based on the session's user_id
$user_id = $_SESSION['user_id'];  // Assuming user ID is stored in session
$sql = "SELECT first_name, last_name, email, profile_picture FROM admins WHERE id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
} else {
    echo "Error fetching user details.";
    exit();
}

$conn->close();
?>
