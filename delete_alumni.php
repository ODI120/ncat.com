<?php
// Include the database connection
include 'connections.php';

// Check if the ID is set in the URL
if (isset($_GET['alumni_id'])) {
    $id = $_GET['alumni_id'];

    // Fetch the image file path before deleting the record
    $sql = "SELECT alumni_image FROM alumni_table WHERE alumni_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
        // Delete the image file from the server
        $imagePath = $row['alumni_image'];
        if (file_exists($imagePath)) {
            unlink($imagePath); // Deletes the file
        }

        // Now delete the record from the database
        $sql = "DELETE FROM alumni_table WHERE alumni_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            // Redirect back to the dashboard or list page
            header("Location: dashboard.php?message=Image deleted successfully");
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "Record not found.";
    }
} else {
    echo "No ID provided.";
}

// Close the connection
$conn->close();
?>
