<?php
// Include the database connection
include 'connections.php';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $imageName = $_POST['image_name'];

    // Check if a new image is uploaded
    if (isset($_FILES['facility_image']['name']) && $_FILES['facility_image']['name'] != "") {
        $targetDir = "Graduations/";
        $newFileName = $targetDir . basename($_FILES["facility_image"]["name"]);
        move_uploaded_file($_FILES["facility_image"]["tmp_name"], $newFileName);

        // Fetch the old image and delete it
        $sql = "SELECT facility_image FROM facility_images WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        
        if ($row && file_exists($row['facility_image'])) {
            unlink($row['facility_image']); // Delete old image
        }

        // Update the record with the new image path
        $sql = "UPDATE facility_images SET image_name = ?, facility_image = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $imageName, $newFileName, $id);
    } else {
        // Update only the image title if no new image is uploaded
        $sql = "UPDATE facility_images SET image_name = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $imageName, $id);
    }

    // Execute the update query
    if ($stmt->execute()) {
        // Redirect back to the dashboard with a success message
        header("Location: dashboard.php?message=Record updated successfully");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
