
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

// fatch details connections
include("fetch_file.php");
include("connections.php");

// Fetch data from the facility_images table
$sql = "SELECT id, image_name, facility_image FROM facility_images";
$result = $conn->query($sql);


// Fetch data from the graduation_activities table
$sqls = "SELECT grad_id, grad_name, grad_image FROM graduation_activities";
$results = $conn->query($sqls);

// Fetch data from the Alumni table
$alumni_sql = "SELECT alumni_id, alumni_name, alumni_image, alumni_position FROM alumni_table";
$alumni_result = $conn->query($alumni_sql);

// Fetch data from the testimonial table
$testimonial_sql = "SELECT testimonial_id, testimonial_name, testimonial_image, testimonial_position, testimonial_remark FROM testimonial_table";
$testimonial_result = $conn->query($testimonial_sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Ncat @ 60 Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="src/bootstrap.css">

    <link rel="shortcut icon" href="image/favicon.ico.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
            <div class="sidebar-header">
                <img src="img/favicon.ico.png" class="logo" alt="Logo">
                <h2>Dashboard</h2>
            </div>
            
            <div class="review-image">
                <img src="img/garg2.jpg" alt="">
            </div>
            
            <div class="nav-menu">
                <div class="nav-link">
                    <h4 class="tab-button active" onclick="openTab(event, 'dashboard')">Dashborad</h4>
                    <h4 class="tab-button" onclick="openTab(event, 'facility')">Facility</h4>
                    <h4 class="tab-button" onclick="openTab(event, 'graduation')">Graduation & activities</h4>
                    <h4 class="tab-button" onclick="openTab(event, 'alumni')">Alumni</h4>
                    <h4 class="tab-button" onclick="openTab(event, 'testimonial')">Testimonials</h4>
                </div>
           </div>
        </div>

        <div class="main-content">
            <div class="header">
                <h1>Welcome!</h1>
                <div class="user">  
                    <img src="<?php echo htmlspecialchars($user['profile_picture']); ?>" alt="user">
                    <h5><?php echo htmlspecialchars($user['first_name']); ?></h5>
                    <button class="btn-logout"><a href="logout.php">Logout</a></button>
                </div>
            </div>

            <div class="tab-content" >
                <div class=" tab active" id="dashboard">
                    <div class="stats ">
                        <div class="cards">
                            <h3>Total Graduated</h3>
                            <p>5,340</p>
                        </div>
                        <div class="cards">
                            <h3>Current Stuednts</h3>
                            <p>1,245</p>
                        </div>
                        <div class="cards">
                            <h3>Courses / Programes</h3>
                            <p>345</p>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h4>Recently Added</h4>
    
                    </div>
                </div>

                <!-- ------------faciliites---------------------- -->

                <div id="facility" class="tab">
                    <div class="create">
                        <h4>Facilities</h4>

                        <div class="option" data-bs-toggle="modal" data-bs-target="#formModal">

                            <i class="bi bi-plus-circle-dotted"  id="create"></i>
                        </div>
                    </div>

                    <!-- Check if there are any records -->
                    <div class="table-cont">
                        <table class="table table-striped table-hover border">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Check if there are any records
                                if ($result->num_rows > 0):
                                    // Loop through the fetched data and display each row
                                    while($row = $result->fetch_assoc()): ?>
                                        <tr>
                                            <th scope="row"><?php echo $row['id']; ?></th>

                                            <td><img class="rounded rounded-3" src="<?php echo $row['facility_image']; ?>" alt="<?php echo $row['image_name']; ?>" style="width: 100px; height: auto;"></td>

                                            <td><?php echo $row['image_name']; ?></td>

                                            <td class=""> 
                                                <div class="action">
                                                    <div class="option">

                                                        <button class="btn btn-warning btn-sm edit-btn" data-id="<?php echo $row['id']; ?>" data-name="<?php echo $row['image_name']; ?>" data-image="<?php echo $row['facility_image']; ?>" data-bs-toggle="modal" data-bs-target="#editModal"><i class="bi bi-pen"></i> Edit</button>

                                                    </div>

                                                    <div class="option">
                                                        <a href="delete_facility.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this image?');"><i class="bi bi-trash3"></i>  Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endwhile;
                                else: ?>
                                    <tr>
                                        <td colspan="4">No facility images found.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
                
                <!-- facility form Upload modal -->
                <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModallLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="formModalLabel">Add a Facility Image</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="facilityscript.php" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="image_name" class="col-form-label">Image Title</label>
                                        <input type="text" class="form-control" id="image_name" name="image_name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="facitity_image" class="col-form-label">Upload Photo</label>
                                        <input type="file" id="facitity_image" name="facitity_image" class="form-control" required>
                                    </div>
                                    <div>
                                        <button type="sumit" class="btn btn-primary">Upload</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Modal -->
                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Facility Image</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="editForm" action="edit_facility.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" id="edit-id" name="id">
                                    <div class="mb-3">
                                        <label for="image_name" class="form-label">Image Title</label>
                                        <input type="text" class="form-control" id="edit-image_name" name="image_name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="facility_image" class="form-label">Upload New Image (Optional)</label>
                                        <input type="file" class="form-control" id="edit-facility_image" name="facility_image">
                                    </div>
                                    <div class="mb-3">
                                        <img id="current-image" src="" alt="Current Image" style="width: 100px; height: auto;">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- -------------------------------Graduation and activities------------------------------------- -->

                <div id="graduation" class="tab">
                    <div class="create">
                        <h4>Graduations and Activities</h4>

                        <div class="option" data-bs-toggle="modal" data-bs-target="#gradModal">

                            <i class="bi bi-plus-circle-dotted"  id="create"></i>
                        </div>
                    </div>

                    <!-- Check if there are any records -->
                    <div class="table-cont">
                        <table class="table table-striped table-hover border">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Check if there are any records
                                if ($results->num_rows > 0):
                                    // Loop through the fetched data and display each row
                                    while($row = $results->fetch_assoc()): ?>
                                        <tr>
                                            <th scope="row"><?php echo $row['grad_id']; ?></th>

                                            <td><img class="rounded rounded-3" src="<?php echo $row['grad_image']; ?>" alt="<?php echo $row['grad_name']; ?>" style="width: 100px; height: auto;"></td>

                                            <td><?php echo $row['grad_name']; ?></td>

                                            <td class=""> 
                                                <div class="action">
                                                    <div class="option">


                                                        <button class="btn btn-warning btn-sm edit-grad-btn" grad_data-id="<?php echo $row['grad_id']; ?>" grad_data-name="<?php echo $row['grad_name']; ?>" grad_data-image="<?php echo $row['grad_image']; ?>" data-bs-toggle="modal" data-bs-target="#gradModal"><i class="bi bi-pen"></i> Edit</button>

                                                    </div>

                                                    <div class="option">
                                                        <a href="delete_grad.php?grad_id=<?php echo $row['grad_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this image?');"><i class="bi bi-trash3"></i>  Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endwhile;
                                else: ?>
                                    <tr>
                                        <td colspan="4">No facility images found.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- graduation/avtivities form Upload modal -->
                <div class="modal fade" id="gradModal" tabindex="-1" aria-labelledby="gradModallLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="gradModalLabel">Add Graduation/Activities Image</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="graduation_script.php" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="grad_name" class="col-form-label">Image Title</label>
                                        <input type="text" class="form-control" id="grad_name" name="grad_name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="grad_image" class="col-form-label">Upload Photo</label>
                                        <input type="file" id="grad_image" name="grad_image" class="form-control" required>
                                    </div>
                                    <div>
                                        <button type="sumit" class="btn btn-primary">Upload</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- -------------------ALUMNI----------------------------------- -->
                <div id="alumni" class="tab">
                <div class="create">
                        <h4>Alumni</h4>

                        <div class="option" data-bs-toggle="modal" data-bs-target="#alumniModal">

                            <i class="bi bi-plus-circle-dotted"  id="create"></i>
                        </div>
                    </div>

                    <!-- Check if there are any records -->
                    <div class="table-cont">
                        <table class="table table-striped table-hover border">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Check if there are any records
                                if ($results->num_rows > 0):
                                    // Loop through the fetched data and display each row
                                    while($row = $alumni_result->fetch_assoc()): ?>
                                        <tr>
                                            <th scope="row"><?php echo $row['alumni_id']; ?></th>

                                            <td><img class="rounded rounded-3" src="<?php echo $row['alumni_image']; ?>" alt="<?php echo $row['alumni_name']; ?>" style="width: 100px; height: auto;"></td>

                                            <td><?php echo $row['alumni_name']; ?></td>

                                            <td><?php echo $row['alumni_position']; ?></td>

                                            <td class=""> 
                                                <div class="action">
                                                    <div class="option">


                                                        <button class="btn btn-warning btn-sm edit-grad-btn" data-id="<?php echo $row['alumni_id']; ?>" data-name="<?php echo $row['alumni_name']; ?>" data-image="<?php echo $row['alumni_image']; ?>" data-bs-toggle="modal" data-bs-target="#alumni_editModal"><i class="bi bi-pen"></i> Edit</button>

                                                    </div>

                                                    <div class="option">
                                                        <a href="delete_alumni.php?alumni_id=<?php echo $row['alumni_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this image?');"><i class="bi bi-trash3"></i>  Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endwhile;
                                else: ?>
                                    <tr>
                                        <td colspan="4">No facility images found.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Alumni form Upload modal -->

                <div class="modal fade" id="alumniModal" tabindex="-1" aria-labelledby="alumniModallLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="alumniModalLabel">Add Alumni</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="alumni_script.php" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="alumni_name" class="col-form-label">Full Name</label>
                                        <input type="text" class="form-control" id="alumni_name" name="alumni_name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="alumni_position" class="col-form-label">Position/Profession</label>
                                        <input type="text" id="alumni_position" name="alumni_position" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="alumni_image" class="col-form-label">Upload Photo</label>
                                        <input type="file" id="alumni_image" name="alumni_image" class="form-control" required>
                                    </div>

                                    <div>
                                        <button type="sumit" class="btn btn-primary">Upload</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- -------------------Testimonial----------------------------------- -->

                <div id="testimonial" class="tab">
                    <div class="create">
                        <h4>Testimonial</h4>

                        <div class="option" data-bs-toggle="modal" data-bs-target="#testimonialModal">

                            <i class="bi bi-plus-circle-dotted"  id="create"></i>
                        </div>
                    </div>

                    <!-- Check if there are any records -->
                    <div class="table-cont">
                        <table class="table table-striped table-hover border">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position/profesion</th>
                                    <th scope="col">Remark</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Check if there are any records
                                if ($results->num_rows > 0):
                                    // Loop through the fetched data and display each row
                                    while($row = $testimonial_result->fetch_assoc()): ?>
                                        <tr>
                                            <th scope="row"><?php echo $row['testimonial_id']; ?></th>

                                            <td><img class="rounded rounded-3" src="<?php echo $row['testimonial_image']; ?>" alt="<?php echo $row['testimonial_name']; ?>" style="width: 100px; height: auto;"></td>

                                            <td><?php echo $row['testimonial_name']; ?></td>

                                            <td><?php echo $row['testimonial_position']; ?></td>

                                            <td><?php echo $row['testimonial_remark']; ?></td>

                                            <td class=""> 
                                                <div class="action">
                                                    <div class="option">
                                                        <button class="btn btn-warning btn-sm edit-testimonial-btn" data-id="<?php echo $row['testimonial_id']; ?>" data-name="<?php echo $row['testimonial_name']; ?>" data-remark="<?php echo $row['testimonial_remark']; ?>" data-image="<?php echo $row['testimonial_image']; ?>" data-bs-toggle="modal" data-bs-target="#testimonial_editModal"><i class="bi bi-pen"></i> Edit</button>
                                                    </div>

                                                    <div class="option">
                                                        <a href="delete_testimonial.php?testimonial_id=<?php echo $row['testimonial_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this image?');"><i class="bi bi-trash3"></i>  Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endwhile;
                                else: ?>
                                    <tr>
                                        <td colspan="4">No facility images found.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Testimonial form Upload modal -->
                <div class="modal fade" id="testimonialModal" tabindex="-1" aria-labelledby="testimonialModallLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="testimonialModalLabel">Add Testimonial</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="testimonial_script.php" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="testimonial_name" class="col-form-label">Full Name</label>
                                        <input type="text" class="form-control" id="testimonial_name" name="testimonial_name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="testimonial_position" class="col-form-label">Position/Profession</label>
                                        <input type="text" id="testimonial_position" name="testimonial_position" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="testimonial_remark" class="col-form-label">Your Remarl</label>
                                        <textarea name="testimonial_remark" id="testimonial_remark" class="form-control" required></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="testimonial_image" class="col-form-label">Upload Photo</label>
                                        <input type="file" id="testimonial_image" name="testimonial_image" class="form-control" required>
                                    </div>

                                    <div>
                                        <button type="sumit" class="btn btn-primary">Upload</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Testimonial Modal -->
                <div class="modal fade" id="testimonial_editModal" tabindex="-1" aria-labelledby="testimonialModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="testimonialModalLabel">Edit Testimonial</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="editTestimonialForm" action="edit_testimonial.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" id="testimonial_id" name="testimonial_id">
                                    <div class="mb-3">
                                        <label for="testimonial_name" class="col-form-label">Full Name</label>
                                        <input type="text" class="form-control" id="testimonial_name" name="testimonial_name" >
                                    </div>

                                    <div class="mb-3">
                                        <label for="testimonial_position" class="col-form-label">Position/Profession</label>
                                        <input type="text" id="testimonial_position" name="testimonial_position" class="form-control" >
                                    </div>

                                    <div class="mb-3">
                                        <label for="testimonial_remark" class="col-form-label">Your Remark</label>
                                        <textarea name="testimonial_remark" id="testimonial_remark" class="form-control" ></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="testimonial_image" class="col-form-label">Upload New Photo (Optional)</label>
                                        <input type="file" id="testimonial_image" name="testimonial_image" class="form-control">
                                        <img id="current-testimonial-image" src="" alt="" style="width: 100px; height: auto;" class="mt-2">
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update Testimonial</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- ====================tap=========================== -->
    <script>
        function openTab(event, tabName) {
            // Hide all tabs
            const tabs = document.querySelectorAll('.tab');
            tabs.forEach(tab => {
                tab.classList.remove('active');
            });

            // Remove active class from all buttons
            const buttons = document.querySelectorAll('.tab-button');
            buttons.forEach(button => {
                button.classList.remove('active');
            });

            // Show the current tab
            document.getElementById(tabName).classList.add('active');

            // Add active class to the button that opened the tab
            event.currentTarget.classList.add('active');
            }

            // Initialize to show the first tab
            document.addEventListener('DOMContentLoaded', () => {
            openTab({ currentTarget: document.querySelector('.tab-button.active') }, 'dashboard');
        });

    </script>

    <!-- ====dropdown========== -->
    <script>
        document.getElementById('dropdown-icon').addEventListener('click', function() {
            var dropdown = document.getElementById('dropdown-menu');
            if (dropdown.style.display === 'none' || dropdown.style.display === '') {
            dropdown.style.display = 'block';
            } else {
            dropdown.style.display = 'none';
            }
        });

        // Optional: close dropdown when clicking outside
        window.addEventListener('click', function(e) {
            if (!e.target.matches('#dropdown-icon')) {
            var dropdown = document.getElementById('dropdown-menu');
            if (dropdown.style.display === 'block') {
                dropdown.style.display = 'none';
            }
            }
        });
    </script>

    <script>
        // JavaScript to handle the edit button click and populate the modal with facility data
        document.addEventListener('DOMContentLoaded', function () {
            const editButtons = document.querySelectorAll('.edit-btn');

            editButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const id = this.getAttribute('data-id');
                    const imageName = this.getAttribute('data-name');
                    const imageSrc = this.getAttribute('data-image');

                    // Populate the modal fields with the data
                    document.getElementById('edit-id').value = id;
                    document.getElementById('edit-image_name').value = imageName;
                    document.getElementById('current-image').src = imageSrc;
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const editButtons = document.querySelectorAll('.edit-testimonial-btn');

            editButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const id = this.getAttribute('data-id');
                    const name = this.getAttribute('data-name');
                    const position = this.getAttribute('data-position');
                    const remark = this.getAttribute('data-remark');
                    const imageSrc = this.getAttribute('data-image');

                    // Populate the modal fields
                    document.getElementById('testimonial_id').value = id;
                    document.getElementById('testimonial_name').value = name;
                    document.getElementById('testimonial_position').value = position;
                    document.getElementById('testimonial_remark').value = remark;
                    document.getElementById('current-testimonial-image').src = imageSrc;
                });
            });
        });

    </script>


    <script src="js/bootstrap.js"></script>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>