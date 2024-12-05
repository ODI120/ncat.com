
<?php 

    include("connections.php");

    // Fetch all testimonials
    $sql = "SELECT testimonial_name, testimonial_position, testimonial_remark, testimonial_image FROM testimonial_table";
    $result = $conn->query($sql);

    $facility_sql = "SELECT facility_image, image_name FROM facility_images";
    $facility_result = $conn->query($facility_sql);

    // Fetch data from the graduation_activities table
    $grad_sql = "SELECT grad_id, grad_name, grad_image FROM graduation_activities";
    $grad_result = $conn->query($grad_sql);

    $alumni_sql = "SELECT alumni_id, alumni_name, alumni_position, alumni_image FROM alumni_table";
    $alumni_result = $conn->query($alumni_sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="src/style.css">
    <link rel="stylesheet" href="src/responsive.css">
    <link rel="stylesheet" href="src/bootstrap.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <title>Nigerian College of Aviation Technology @ 60</title>
    <link rel="shortcut icon" href="image/favicon.ico.png" type="image/x-icon">
</head>
<body>
    
    <!-- Navigation Bar -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top _hidden">
        <div class="container nav">
                       
            <div class="logo" id="">
                <img src="image/favicon.ico.png" alt="">
                <a class="navbar-brand" href="#" id="logo">Nigerian College of <br>Aviation Technology</a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="" ><i class="bi bi-list"></i></span>
                
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#history">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#schools">Schools</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Alumni">Alumni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#facilities">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Partinerships">Partinerships</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero_section text-center">

        <div class="container-xl common expanded _hero animate__animated animate__zoomIn">
            <img src="NCAT/logo.png" class=""  alt="">

        </div>
        <br>
        <div class="title common animate__animated animate__zoomIn"><h1>Celebrating 60 years of Excellence in Aviation Education</h1></div>
        <svg class="svg-long" xmlns="http://www.w3.org/2000/svg"  height="2" viewBox="0 0 953 2" fill="none">
            <path d="M1 1H952" stroke="#5F6368" stroke-opacity="0.55" stroke-width="2" stroke-linecap="round"/>
        </svg>
        <div class="common ncat_inter ">
            <p>NCAT is an Internationally recognized Aviation Institution in Nigeria.</p>

            <svg class="svg-line" xmlns="http://www.w3.org/2000/svg" width="2" height="46" viewBox="0 0 2 46" fill="none">
                <path d="M1 1L0.999998 45" stroke="#5F6368" stroke-opacity="0.55" stroke-width="2" stroke-linecap="round"/>
            </svg>
            
           <div class="d-flex ncat_inter_img">
                <img src="image/ICAO.png" class="icao " alt="">
                <img src="image/NCAA.jpeg" class="ncaa " alt="">
           </div>
        </div>

        <div class="container-xl component-img common ">
            <div class="row common">
                <div class="col-sm-3 col-md-3 col-lg-3 side_img animate__animated animate__slideInLeft">
                    <div>
                        <img src="NCAT/ncat_12.jpg"  alt="">
                    </div>
                </div>
                
                <div class="col-sm-3 col-md-3 col-lg-3 side_img animate__animated animate__slideInUp">
                    <div>
                        <img src="NCAT/111 1.png"  alt="">
                    </div>
                </div>
                
                <div class="col-sm-3 col-md-3 col-lg-3 side_img side_img animate__animated animate__slideInRight">
                    <div>
                        <img src="NCAT/diamod.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="video-section" class="video-section">
        <div class="container">
            <div class="header hidden">
                <h1>Welcome to NCAT</h1>
                <p>Where Dreams Take Flight</p>
            </div>
            <!-- <h2 class="section-title">Watch Our Video</h2> -->
            <div class="video-wrapper">
                <video controls poster="dpt-img/citing.jpg">
                    <source src="video/ncat-air.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>
    
    <section class="history common">
        <div class="container-xl expanded">
            
            <div class="row common gy-4">
                <div class="col-sm-12 col-md-12 col-lg-6 common hidden">
                    <div class="legacy-img ">
                        <img src="image/rector.png"  alt="">
                        <div class="minister">
                          <h6>MR JOSEPH S. IMALIGWEH / RECTOR CHIEF EXECUTIVE</h6>  
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="history-content hidden">
                       <h6>Celebrating <strong>NCAT @ 60</strong></h6>
                       <h1>About the Nigeria College of Aviation Technology (NCAT)</h1>

                        <p>The Nigeria College of Aviation Technology (NCAT) is a premier aviation training institution in Africa, renowned for its unwavering commitment to excellence in aviation education. Established in 1964, NCAT has grown into a beacon of aviation training, offering comprehensive programs that cater to a wide range of aviation disciplines, including pilot training, aircraft maintenance, air traffic control, aeronautical telecommunications, and aviation management.
                        </p>
                        <!-- <a href="History.html" class=" btn btn-general">Learn More <img src="image/plane-png.png" alt=""></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="welcome common">
        <div class="container   expanded ">
            <!-- <div class="header">
                <h1>Welcome to NCAT</h1>
                <p>Where Dreams Take Flight</p>
            </div> -->
            
            <div class="row common gy-3 all-row p-1 hidden">
                <div class="col-xsm col-sm-6 col-md-4 col-lg-3">
                    <div class="welcome-card-sm">
                       <div>
                            <img src="NCAT/B737NG FULL FLIGHT SIMULATOR.jpg" alt="">
                       </div> 
                        <div class="card-content">
                            <h5>State-of-the-Art Training Facilities</h5>
                            <p>Discover the cutting-edge facilities that support aviation training.</p>
                            <!-- <a href="#" class="btn">Learn More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-xsm col-sm-6 col-md-4 col-lg-3 ">
                    <div class="welcome-card-sm">
                        <div>
                            <img src="NCAT/DVOR EQUIPMENT.jpg" alt="">
                        </div> 
                        <div class="card-content">
                            <h5>cutting-edge Facilities (DVOR)</h5>
                            <p>Where the legacy of flight meets the future of aviation, celebrating 60 years of soaring heigher.</p>
                            <!-- <a href="#" class="btn">Learn More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-xsm col-sm-6 col-md-4 col-lg-3 dnt-display">
                    <div class="welcome-card-sm">
                       <div>
                            <img src="NCAT/ncat-ams2.jpg" alt="">
                       </div> 
                        <div class="card-content">
                            <h5>State-of-the-Art Training Facilities</h5>
                            <p>Discover the cutting-edge facilities that support aviation training.</p>
                            <!-- <a href="#" class="btn">Learn More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-xsm col-sm-6 col-md-4 col-lg-6 top-space">
                    <div class="welcome-card">
                        <div class="row common ">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <img src="image/pic5.jpg" alt="">
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6 ">
                                <div class="card-content">
                                    <h4>Maintening value in Aviation</h4>
                                    <p>Celebrating six decades of aviation excellence, NCAT remains the beacon of <span> innovation, training, and success in the skies</span> </p>
                                    <!-- <a href="#" class="btn">Learn More</a> -->
                                    <br>  
                                    <!-- <br>   -->
                                    <div class="author">
                                        <!-- <img src="image/pic4.jpg" alt=""> -->
                                        <div>
                                            <p> <q><em>We remain the best in aviation Education</em></q>  </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="history common hidden" id="history">
        <div class="container-xl expanded">
            <div class="row common gy-4">
                <div class="col-sm-12 col-md-12 col-lg-6 common">
                    <div class="history-img">
                        <img src="dpt-img/garg2.jpg" alt="">
                    </div> 
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="history-content">
                       <h6>Celebrating <strong>NCAT @ 60</strong></h6>
                       <h1>Rich history of NCAT</h1>
                        <p>The Nigeria College of Aviation Technology (NCAT), located in Zaria, Kaduna State, is a premier aviation training institution in Nigeria. Established in 1964, it aims to provide training for both Nigerian and international aviation personnel, including pilots, air traffic controllers, aircraft maintenance engineers, and other aviation professionals.
                        </p>
                        <a href="History.html" class=" btn btn-general">Learn More <img src="image/plane-png.png" alt=""></a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="legacy common hidden">
        <div class="container-xl expanded">
            <div class="row common gy-4">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="legacy-content">
                        <h6>Celebrating <strong>NCAT @ 60</strong></h6>
                       <h1>Discover the Legacy of NCAT</h1>
                       <img src="image/icaoplus.png" alt="">
                        <p>For 60 years, the Nigeria College of Aviation Technology (NCAT) has been at the forefront of aviation education and training. With a rich history, numerous achievements, and state-of-the-art facilities, NCAT continues to shape the future of the aviation industry. Join us in celebrating our 60th anniversary and explore the remarkable journey of NCAT.
                        </p>
                        <a href="#" class=" btn btn-general">Learn More <img src="image/plane-png.png" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 common ">
                    <div class="legacy-img not_invisible">
                        <img src="image/festuskeyamo.jpg"  alt="">
                        <div class="minister">
                          <h6>Minister of Aviation Festus Keyamo</h6>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="heritage common hidden">
        <div class="container-xl expanded">
            <div class="row gy-4">
                <div class="col-sm-12 col-md-12 col-lg-6 common">
                    <div class="heritage-img">
                        <img src="dpt-img/ncat-img.jpg" alt="">
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6 common">
                    <div class="heritage-content">
                        <h6>Celebrating <strong>NCAT @ 60</strong></h6>
                       <h1>Explore the heritage of NCAT.</h1>
                        <p>The heritage of NCAT is a story of vision, dedication, and achievement. It is a testament to what can be accomplished with a commitment to excellence and a passion for aviation. As we celebrate 60 years of NCAT, we look forward to many more years of soaring high and reaching new horizons.
                        </p>
                        <a href="#" class=" btn btn-general">Learn More <img src="image/plane-png.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="heritage common hidden">
        <div class="container-xl expanded">
            <div class="row gy-4">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="heritage-content">
                        <div class="col-sm-12 col-md-12 col-lg-6 common">
                            <div class="heritage-img not_visible">
                                <img src="image/recog.png" alt="">
                            </div>
                        </div>
                        <h6>Celebrating <strong>NCAT @ 60</strong></h6>
                       <h1>NCAT Recognition</h1>
                        <p>The Nigeria College of Aviation Technology (NCAT) is widely recognized as a leading institution for aviation training in Africa and beyond. Established in 1964, NCAT has consistently maintained high standards of training and has earned several prestigious recognitions and accreditations over the years. Here are some key aspects of NCAT's recognition
                        </p>
                        <a href="#" class=" btn btn-general">Learn More <img src="image/plane-png.png" alt=""></a>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6 common">
                    <div class="heritage-img not_invisible">
                        <img src="image/recog.png" alt="">
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <div>
        <img src="image/aircraft-bg.png" alt="">
    </div>

    <section class="schools common" id="schools">
        <div class="container-xl expanded cont-holder gy-4 p-1">
            <div class="header hidden">
                <h1>Schools in Ncat</h1>
                <p>Below are the Six schools/faculties in NCAT</p>
            </div>
            <div class="row justify-content-center all-row">
                <div class="col-xsm col-sm-6 col-md-4 col-lg-3 gy-4 hidden">
                    <div class="welcome-card-sm sch">
                        <img src="NCAT/ncat-ate.jpg" alt=""> 
                        <div class="card-content">
                            <h5>A.T.E School.</h5>
                            <p>Want to build the future of aviation tech? Join the cutting-edge of innovation!</p>
                            <a href="Ates.php" class="btn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xsm col-sm-6 col-md-4 col-lg-3 gy-4 hidden">
                    <div class="welcome-card-sm sch">
                        <img src="image/pilot.jpeg" alt=""> 
                        <div class="card-content">
                            <h5>Flying school</h5>
                            <p>Ready to pilot your dreams? Take off with expert training today!</p>
                            <a href="flying.php" class="btn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xsm col-sm-6 col-md-4 col-lg-3 gy-4 hidden">
                    <div class="welcome-card-sm sch">
                        <img src="NCAT/Ame.png" alt=""> 
                        <div class="card-content">
                            <h5>A.M.E School.</h5>
                            <p>Gear up for a high-flying career in aircraft maintenance excellence.</p>
                            <a href="Ames.php" class="btn">Learn More</a>
                        </div> 
                    </div>
                </div>
                <div class="col-xsm col-sm-6 col-md-4 col-lg-3 gy-4 hidden">
                    <div class="welcome-card-sm sch">
                        <img src="NCAT/ncat-ams.jpg" alt=""> 
                        <div class="card-content">
                            <h5>Aviation Mgmt schl.</h5>
                            <p>Are you ready to take flight in the exciting world of aviation management?</p>
                            <a href="Ames.php" class="btn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xsm col-sm-6 col-md-4 col-lg-3 gy-4 hidden">
                    <div class="welcome-card-sm sch">
                        <img src="NCAT/AUTOMATED FIRE_SMOKE AIRCRAFT TRAINING SIMULATOR.jpg" alt=""> 
                        <div class="card-content">
                            <h5>A.E.T School.</h5>
                            <p>Prepared to handle the unexpected? Master the art of aviation safety with us.</p>
                            <a href="Aet.php" class="btn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xsm col-sm-6 col-md-4 col-lg-3 gy-4 hidden">
                    <div class="welcome-card-sm sch">
                        <img src="NCAT/ATSCOM_language laboratory.jpg" alt=""> 
                        <div class="card-content">
                            <h5>A.T.S / COM</h5>
                            <p>Navigate the skies—become the voice that guides aviation safely.</p>
                            <a href="#" class="btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Tractions Section -->
    <section id="tractions" class="container text-center my-5">
        <div class="header pt-4 text-light">
            <h2>Score card 1964 - 2024</h2>
            <!-- <p>(Completed Courses)</p> -->
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="traction-item">
                    <h3><span id="counter1">0</span></h3>
                    <p>Profesional Graduated Students</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="traction-item">
                    <h3><span id="counter2">0</span></h3>
                    <p>Pilots Graduated</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="traction-item">
                    <h3><span id="counter3">0</span></h3>
                    <p>Aviation Engineers Graduated</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="traction-item">
                    <h3><span id="counter4">0</span></h3>
                    <p>Total Graduated Students</p>
                </div>
            </div>
        </div>
    </section>
    
   
    <section>
        <div class="container-xl expanded">
            <div class="header hidden">
                <h1>Awards and achievements</h1>
                <p>NCAT has been honored with numerous awards for its contribution to aviation training and education, <br> cementing our reputation as a leading institution.</p>
            </div>
            <div class="row common _invisible hidden">
                
                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div>
                        <img src="image/recog-center.png" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div>
                        <img src="image/recog-side.png" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div>
                        <img src="image/recog-2.png" alt="">
                    </div>
                </div>
            </div>
            
            <div class="_visible">
                <div id="carouselAwardFade" class="carousel carousel-sm slide carousel-fade">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="image/recog-center.png " class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="NCAT/diamod.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselAwardFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselAwardFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="facilities common" id="facilities">
        <div class="container-xl expanded">
            <div class="header hidden ">
                <h1>Explore NCAT facilities</h1>
                <p>NCAT's facilities are designed to provide a comprehensive and immersive <br> training experience for students.</p>
            </div>
            <div class="row ">
                <div class="col-sm-12 col-md-6 col-lg-6 facilities-contents _invisible hidden">
                    <div class="row gy-4">
                        <div class="col-sm-12 col-md-12 col-lg-12 facilities-img">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div><img src="NCAT/inside-sim2.png" alt=""></div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div><img src="NCAT/ULTRA MODERN AUDITORIUM COMPLEX.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 facilities-img mt-3 gy-4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div><img src="NCAT/B737NG INTEGRATED PROCEDURAL TRAINER.jpg" alt=""></div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div><img src="NCAT/AVSEC LABORATORY BUILDING.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 hidden">

                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <?php
                        if ($facility_result->num_rows > 0):
                            $isActive = true; // To make the first item active
                            while ($row = $facility_result->fetch_assoc()):
                        ?>
                            <div class="carousel-item <?php echo $isActive ? 'active' : ''; ?>">
                                <img src="<?php echo $row['facility_image']; ?>" class="d-block w-100" alt="<?php echo $row['image_name']; ?>">
                            </div>
                        <?php
                            $isActive = false; // Only the first item should be active
                            endwhile;
                        else:
                        ?>
                            <div class="carousel-item active">
                                <img src="default_image.jpg" class="d-block w-100" alt="No facility available">
                            </div>
                        <?php endif; ?>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                </div>
            </div> 
        </div>
    </section>

    <section>
        <div class="container">
            <div>
                <div class="header hidden">
                    <h1>Graduations & Activities </h1>
                    <p>Proud Moments and Vibrant Experiences</p>
                </div>
            </div>
       
            <div id="carouselGalleryInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- <div class="carousel-item active" data-bs-interval="10000">
                        <img src="Graduations/grad-4.jpg" class="d-block w-100" alt="...">
                    </div> -->

                    <div class="carousel-inner">
                        <?php
                        if ($grad_result->num_rows > 0):
                            $isActive = true; // To make the first item active
                            while ($row = $grad_result->fetch_assoc()):
                        ?>
                            <div class="carousel-item <?php echo $isActive ? 'active' : ''; ?>">
                                <img src="<?php echo $row['grad_image']; ?>" class="d-block w-100" alt="<?php echo $row['grad_name']; ?> " >
                            </div>
                        <?php
                            $isActive = false; // Only the first item should be active
                            endwhile;
                        else:
                        ?>
                            <div class="carousel-item active">
                                <img src="default_image.jpg" class="d-block w-100" alt="No facility available">
                            </div>
                        <?php endif; ?>
                    </div>
                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselGalleryInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselGalleryInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


    <section id="Alumni">
        <div class="container-xl expanded">
            <div class="header hidden">
                <h1>Notable Alumni</h1>
                <p>Our graduates have gone on to hold significant positions in the aviation industry worldwide, <br> contributing to the growth and safety of global aviation.</p>
            </div>
        
            <div class="common alumni image-container">
                <?php
                    if ($alumni_result->num_rows > 0):
                    $isActive = true; // To make the first item active
                    while ($row = $alumni_result->fetch_assoc()):
                ?>
                <div class="alumni-details">
                <img src="<?php echo $row['alumni_image']; ?>" class="card-img-top" alt="alumni image"> 
                    <div class="text-center">
                        <h5><?php echo $row['alumni_name']; ?></h3>
                        
                        <h6><?php echo $row['alumni_position']; ?></h5>
                    </div>
                </div>
                <?php
                    $isActive = false; // Only the first item should be active
                    endwhile;
                else:
                ?>
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                            <div class="card testimonial-card common">
                                <div class="card-body">
                                    <p class="card-text">No Alumni available at the moment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <br>
            <div class="pagination-controls">
                <button id="prev" class="btn btn-general" onclick="prevPage()">Previous</button>
                <div class="pagination-info">
                    Page <span id="currentPage">1</span> of <span id="totalPages">1</span>
                </div>
                <button id="next" class="btn btn-general" onclick="nextPage()">Next</button>
            </div> 
        </div>
    </section>

    <section>
        <div>
            <div class="header hiddin">
                <h1>Testimonials</h1>
                <p>What people are saying about us over the years</p>
            </div>
        </div>

        <div class="common carousel-div hidden">
            <div id="carouselExampleAutoplaying" class="carousel carousel-sm slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    if ($result->num_rows > 0):
                        $isActive = true; // To make the first item active
                        while ($row = $result->fetch_assoc()):
                    ?>
                        <div class="carousel-item <?php echo $isActive ? 'active' : ''; ?>">
                            <div class="d-flex justify-content-center">
                                <div class="card testimonial-card common">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <?php echo $row['testimonial_remark']; ?>
                                        </p>
                                    </div>
                                    <img src="<?php echo $row['testimonial_image']; ?>" class="card-img-top" alt="testimonial image">
                                    <h3 class="card-title"><strong><?php echo $row['testimonial_name']; ?></strong></h3>
                                    <h5 class="card-subtitle mb-2 text-warning"><?php echo $row['testimonial_position']; ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php
                        $isActive = false; // Only the first item should be active
                        endwhile;
                    else:
                    ?>
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-center">
                                <div class="card testimonial-card common">
                                    <div class="card-body">
                                        <p class="card-text">No testimonials available at the moment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
   
        <!-- <div class="common carousel-div hidden">
            <div id="carouselExampleAutoplaying" class="carousel carousel-sm slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active ">
                        <div class="d-flex justify-content-center ">
                            <div class="card testimonial-card common">
                                <div class="card-body">
                                    <p class="card-text">The Nigeria College of Aviation Technology (NCAT) is widely recognized as a leading institution for aviation training in Africa and beyond.
                                    The Nigeria College of Aviation Technology (NCAT) is widely recognized as a leading institution for aviation training in Africa and beyond.
                                    The Nigeria College of Aviation Technology (NCAT) is widely recognized as a leading institution for aviation training in Africa and beyond.</p>
                                </div>
                                <img src="image/mgnt.png" class="card-img-top" alt="...">
                                <h3 class="card-title"><strong>Vivian Victor</strong></h3>
                                <h5 class="card-subtitle mb-2 text-warning">Pilot</h5>
                            </div>
                        </div>
                    </div>
                                        
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div> -->
    </section>

    <section class="commn" id="Partinerships">
        <div class="container-xl expanded partnership">
            <div class="header hidden">
                <h1>In partnership With</h1>
                <p>What people are saying about us over the years</p>
            </div>

            <div class="scroll-container common">
                <div class="scroll-content">
                    <div class="item">
                        <img src="image/nig.jpeg" alt="Image 1">
                        <!-- <div class="titles">Title 1</div> -->
                    </div>
                    <div class="item">
                        <img src="image/NAMA.jpeg" alt="Image 1">
                        <!-- <div class="titles">Title 1</div> -->
                    </div>
                    <div class="item">
                        <img src="image/NCAA.jpeg" alt="Image 2">
                        <!-- <div class="titles">Title 2</div> -->
                    </div>
                    <div class="item">
                        <img src="image/FAAN.jpeg" alt="Image 3">
                        <!-- <div class="titles">Title 3</div> -->
                    </div>
                    <div class="item">
                        <img src="image/icao2.png" alt="Image 4">
                        <!-- <div class="titles">Title 4</div> -->
                    </div>
                    <div class="item">
                        <img src="image/NDA.png" alt="Image 5">
                        <!-- <div class="titles">Title 5</div> -->
                    </div>
                    <div class="item">
                        <img src="image/Airforce.png" alt="Image 6">
                        <!-- <div class="titles">Title 6</div> -->
                    </div>
                    <div class="item">
                        <img src="image/NIMET.png" alt="Image 7">
                        <!-- <div class="titles">Title 7</div> -->
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <!-- About Section -->
                <div class="col-md-3 col-sm-6">
                    <h5>About Us</h5>
                    <p>The Nigeria College of Aviation Technology (NCAT) is widely recognized as a leading institution for aviation training in Africa and beyond.</p>
                </div>
                <!-- Quick Links Section -->
                <div class="col-md-3 col-sm-6">
                    <h5>Our Location</h5>
                    <ul class="list-unstyled">
                        <li><p>Nigeria Collage of Aviation Technology</p></li>
                        <li><p>Zaria, Kaduna state,
                            Nigeria</p></li>
                        <!-- <li><a href="#">Admissions</a></li>
                        <li><a href="#">Contact Us</a></li> -->
                    </ul>
                </div>
                <!-- Contact Section -->
                <div class="col-md-3 col-sm-6">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-map-marker"></i> Zaria, Nigeria</li>
                        <li><i class="fa fa-phone"></i> +234 701 509 9833</li>
                        <li><i class="fa fa-envelope"></i> info@ncat.edu.ng</li>
                    </ul>
                </div>
                <!-- Newsletter Section -->
                <div class="col-md-3 col-sm-6">
                    <h5>Newsletter</h5>
                    <form>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                    <div class="social-icons mt-3">
                        <a title="socials" class="social-icon"><i class="fa fa-facebook"></i></a>
                        <a title="socials" class="social-icon"><i class="fa fa-twitter"></i></a>
                        <a title="socials" class="social-icon"><i class="fa fa-instagram"></i></a>
                        <a title="socials" class="social-icon"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col text-center">
                    <p>&copy; 2024 NCAT. All Rights Reserved.</p>
                </div>
                <div class="col text-center">
                    <p>Designed by: <a href="">TIM_UI</a></p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- ====script for Alumini-show six at a time ========== -->

    <!-- <script>
        const itemsPerPage = 6;
        let currentPage = 1;
        const imageContainer = document.querySelector('.image-container');
        const images = Array.from(imageContainer.children);
        const totalPages = Math.ceil(images.length / itemsPerPage);

        document.getElementById('totalPages').textContent = totalPages;

        function showPage(page) {
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            images.forEach((img, index) => {
                if (index >= start && index < end) {
                    img.classList.remove('_hidden');
                } else {
                    img.classList.add('_hidden');
                }
            });
            document.getElementById('currentPage').textContent = page;
        }

        function nextPage() {
            if ((currentPage * itemsPerPage) < images.length) {
                currentPage++;
                showPage(currentPage);
            }
        }

        function prevPage() {
            if (currentPage > 1) {
                currentPage--;
                showPage(currentPage);
            }
        }

        // Initialize the first page
        showPage(currentPage);
    </script> -->

    <!-- Traction/score card Counter Script  -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function animateCounter(id, start, end, duration) {
                let element = document.getElementById(id);
                let range = end - start;
                let current = start;
                let increment = end > start ? 1 : -1;
                let stepTime = Math.abs(Math.floor(duration / range));
                
                let timer = setInterval(function() {
                    current += increment;
                    element.textContent = current;
                    if (current == end) {
                        clearInterval(timer);
                    }
                }, stepTime);
            }

            animateCounter("counter1", 0, 1500, 2000);
            animateCounter("counter2", 0, 50, 2000);
            animateCounter("counter3", 0, 100, 2000);
            animateCounter("counter4", 0, 5000, 2000);
        });
    </script>


    <!-- Custom Script for testimonial Carousel -->
    <!-- <script>
        $(document).ready(function() {
            // Auto-play the carousel with a 3-second interval
            $('#testimonialCarousel').carousel({
                interval: 3000,
                pause: "hover" // Pause when hovering over the carousel
            });

            // Adjust the number of testimonials displayed based on screen width
            function adjustTestimonials() {
                let windowWidth = $(window).width();
                if (windowWidth < 769) {
                    // Show one testimonial per slide on smaller screens
                    $('.testimonial-item').addClass('col-md-12').removeClass('col-md-5');
                    $('.testimonial-row').removeClass('d-flex justify-content-around').addClass('text-center');
                } else {
                    // Show two testimonials per slide on larger screens
                    $('.testimonial-item').addClass('col-md-5').removeClass('col-md-12');
                    $('.testimonial-row').addClass('d-flex justify-content-around').removeClass('text-center');
                }
            }

            // Call function on document ready and window resize
            adjustTestimonials();
            $(window).resize(function() {
                adjustTestimonials();
            });
        });
    </script>  -->


    <script src="js/mainscript.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>