<?php
include 'connections.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['testimonial_id'];
    $name = $_POST['testimonial_name'];
    $position = $_POST['testimonial_position'];
    $remark = $_POST['testimonial_remark'];

    // Check if a new image is uploaded
    if (isset($_FILES['testimonial_image']['name']) && $_FILES['testimonial_image']['name'] != "") {
        $targetDir = "testimonial/";
        $newImage = $targetDir . basename($_FILES["testimonial_image"]["name"]);
        move_uploaded_file($_FILES["testimonial_image"]["tmp_name"], $newImage);

        // Get old image and delete it
        $sql = "SELECT testimonial_image FROM testimonial_table WHERE testimonial_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row && file_exists($row['testimonial_image'])) {
            unlink($row['testimonial_image']);
        }

        // Update with new image
        $sql = "UPDATE testimonial_table SET testimonial_name = ?, testimonial_position = ?, testimonial_remark = ?, testimonial_image = ? WHERE testimonial_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $name, $position, $remark, $newImage, $id);
    } else {
        // Update without changing the image
        $sql = "UPDATE testimonial_table SET testimonial_name = ?, testimonial_position = ?, testimonial_remark = ? WHERE testimonial_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $name, $position, $remark, $id);
    }

    if ($stmt->execute()) {
        header("Location: dashboard.php?message=Testimonial updated successfully");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
