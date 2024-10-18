<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_panel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['register'])) {
    // Fetch form data
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($conn->real_escape_string($_POST['password']), PASSWORD_DEFAULT); // Hash the password

    // File upload handling
    if ($_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
        $profile_picture = $_FILES['profile_picture']['name'];
        $target_dir = "uploads/";
        
        // Ensure upload directory exists
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true); // Create directory if it doesn't exist
        }
        
        // Set target file path
        $target_file = $target_dir . basename($profile_picture);
        
        // Move uploaded file
        if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $target_file)) {
            // Insert data into the database
            $sql = "INSERT INTO admins (first_name, last_name, email, password, profile_picture) 
                    VALUES ('$first_name', '$last_name', '$email', '$password', '$target_file')";
            
            if ($conn->query($sql) === TRUE) {
                echo "Registration successful! <a href='login.php'>Login Here</a>";
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your profile picture.";
        }
    } else {
        echo "File upload error: " . $_FILES['profile_picture']['error'];
    }
}

$conn->close();
?>
