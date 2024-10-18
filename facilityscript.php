<?php
// Include the database connection file
include 'connections.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $image_name = mysqli_real_escape_string($conn, $_POST['image_name']);
    
    // File upload path
    $target_dir = "facilities/";
    $target_file = $target_dir . basename($_FILES["facitity_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["facitity_image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size (5MB max)
    if ($_FILES["facitity_image"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // if everything is ok, try to upload file
        if (move_uploaded_file($_FILES["facitity_image"]["tmp_name"], $target_file)) {
            // Insert data into the database
            $sql = "INSERT INTO facility_images (image_name, facility_image) VALUES ('$image_name', '$target_file')";

            if ($conn->query($sql) === TRUE) {
                echo "The file ". htmlspecialchars(basename($_FILES["facitity_image"]["name"])). " has been uploaded." . header("Location: dashboard.php");
                exit();
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Close the connection
    $conn->close();
}
?>
