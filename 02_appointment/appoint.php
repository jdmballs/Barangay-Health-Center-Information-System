<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BHCIS | Schedules</title>

    <!-- LOGO ICON -->
    <link href="images/BHCIS-03.png" rel="icon" type="image/x-icon type" >

    <!-- CSS -->
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/appointment.css">
    <link rel="stylesheet" href="../css/footer.css">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Flatpickr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


    
</head>
<body>
    <!-- THIS IS TOPMOST NAVIGATION BAR -->

    <div class="nav nav-top">
        <p>Where Health Care is a Right, Not a Privelege. Since 2015.</p>

        <div class="topleft">
            <ul>
                <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href=""><i class="fa-brands fa-google-plus-g"></i></a></li>
                <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href=""><i class="fa-brands fa-tumblr"></i></a></li>
            </ul>
            <a class="callAmbulance" id="callambulance_emergency"> CALL AN AMBULANCE</a>
        </div>
    </div>


    <!-- POP UP FORM -->
    <div class="bchis-modal">
        <form action="" id="emergency-form"> <!--onsubmit="process(event)" -->
            <div class="top-form">
                <div class="left">
                    <img src="images/emergency.png" alt="">
                    <h1>EMERGENCY FORM</h1>                    
                </div>
                <i class="fa-solid fa-xmark" id="close"></i>
            </div>


            <div class="user-details">
                <input type="text" placeholder="Your Name" name="fullname" required> <br>
                <input type="text" placeholder="Address" name="address" required> <br>
                <input type="tel" placeholder="Phone Number" name="contact" pattern="+639"required> <br>
                <textarea id="comments" class="input-textarea" name="comment" placeholder="Your Message..."></textarea> <br>
            </div>

            <div class="form-buttons">
                <label> <input type="checkbox"> Email Notification </label>
                <button> <i class="fa-solid fa-heart"></i>SUBMIT</button>
            </div>
        </form>  
    </div>
    <!-- END OF POP UP FORM -->


    <!-- THIS IS THE MIDDLE NAVIGATION BAR -->

    <div class="nav info-nav">
        <div class="logo">
            <img src="images/BHCIS.png" alt="BHCIS Logo">
            <p id="logo-name">BHCIS</p>
        </div>

        <div id="contact-info">
            <div class="location">
                <img src="images/hospital address.png" id="navicon" alt="hospital icon"> <span>OUR LOCATION</span>
                <p>E44 - Web Corner, Melbourne - 18</p>
            </div>

            <div class="call-us">
                <img src="images/247.png" id="navicon" alt="hospital icon"> <span id="custSupport">(+1)800 433 633</span>
                <p>Call Us Now - 24/7 Customer Support</p>
            </div>
        </div>
    </div>
    

    <!-- THIS IS THE BOTTOM/MAIN NAVIGATION BAR  -->
    <div class="nav main-nav" id="main-nav">
        <div class="emergency-button" ><a class="callAmbulance2" id="emergency-button"> CALL AN AMBULANCE</a></div>
        <nav class="navbar" id="navbar">
            <ul class="nav-menu" id="nav-menu">
                <li class="nav-item"><a href="../07_home/home.html" class="nav-link" id="nav-item">Home</a></li>
                <li class="nav-item"><a href="../06_about-us/aboutus.html" class="nav-link" id="nav-item">About Us</a></li>
                <li class="nav-item"><a href="../05_services/services-prac.html" class="nav-link" id="nav-item">Services</a></li>
                <li class="nav-item"><a href="../04_schedule/schedule.html" class="nav-link" id="nav-item">Schedules</a></li>
                <li class="nav-item"><a href="../03_contacts/Contacts.html" class="nav-link" id="nav-item">Contact</a></li>
                <li class="nav-item"><a href="../02_appointment/appointment.html" class="nav-link" id="nav-item">Appointment</a></li>
            </ul>
        </nav>

        <div class="hamburger">
            <span class="bar" ></span>
            <span class="bar" ></span>
            <span class="bar" ></span>
        </div>
    </div>

    <div class="sched">    
        <!-- Banner -->
        <header class="header">
            <div class="overlay"></div>
            <div class="content mt-lg-5 mt-3 text-center">
                <h1>APPOINTMENT</h1>
                <hr color="#0f89d1" class="mx-auto">
                <p class="p-md-3 p-1 text-center m-auto">On the other hand, we denounce with righteous indignation and dislike men who are
                    so beguiled and demoralized by the charms of pleasure of the moment</p>
                <p class="path  m-auto">HOME &nbsp; <i class="fa-solid fa-angle-right"></i> &nbsp; APPOINTMENT</p>

            </div>
        </header>

        <!-- Message Board -->
        <div class="msgboard">
            <div class="row justify-content-center">
                <div class="emergency col-lg-2 col-5 mx-3 my-lg-0 my-3">
                    <h6>EMERGENCY CASE</h6>
                    <hr color="#fff">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Error aliquid, nisi illum cumque fugit nostrum distinctio.
                    </p>
                </div>  
                <div class="new-reg col-lg-2 col-5 mx-3 my-lg-0 my-3">
                    <h6>NEW REGISTRATION</h6>
                    <hr color="#fff">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Error aliquid, nisi illum cumque fugit nostrum distinctio.
                    </p>
                </div>
                <div class="hours col-lg-2 col-5 mx-3 my-lg-0 my-3">
                    <h6>OPENING HOURS</h6>
                    <hr color="#0f89d1">
                    <table class="p-0">
                        <tr>
                            <td>Monday-Friday</td>
                            <td>8:00 - 18:00</td>
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td>8:00 - 16:00</td>
                        </tr>
                        <tr>
                            <td>Sunday</td>
                            <td>8:00 - 13:00</td>
                        </tr>
                    </table>
                </div>
                <div class="timetable col-lg-2 col-5 x mx-3 my-lg-0 my-3">
                    <h6>TIMETABLE</h6>
                    <hr color="#0f89d1">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Error aliquid, nisi illum cumque fugit nostrum distinctio.
                    </p>
                </div>
            </div>
            
        </div>

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title text-center">
            <h3>MAKE AN APPOINTMENT</h3>
            <hr class="mx-auto">
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
          
          <form action="appointment.php" method="post" role="form" class="php-email-form my-3" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
              <div class="col-md-4 form-group">
                <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required>
              </div>
              <div class="col-md-4 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required>
              </div>
              <div class="col-md-4 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="mname" id="mname" placeholder="Middle Name">
              </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <input type="text" class="form-control" name="brgy-id" id="brgy-id" placeholder="Barangay ID">
                </div>
              <div class="col-md-4 form-group mt-3">
                <select name="department" id="department" class="form-select" method="post">
                    <option value="">Select Department</option>
                    
                    <!-- Select Departments from db -->
                    <?php
                        $conn = new mysqli('localhost', 'root', '', 'bhcis');

                        if($conn->connect_error){
                            die("Connection Failed:" .$conn->connect_error());
                            echo "FAILED TO CONNECT";
                        }
                        $sql = "SELECT * FROM tbldepartment";
                        $query = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($query)){
                            echo '<option id='.$row['department_name'].'>'.$row['department_name'].'</option>';
                        }

                        $conn->close();
                    ?>



                </select>
              </div>
              <div class="col-md-4 form-group mt-3">
                <select name="doctor" id="doctor" class="form-select">
                    <option value="">Select Doctor</option>
                    
                </select>
              </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="col-md-4 form-group mt-3">
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
                </div>
                <div class="col-md-4 form-group mt-3">
                    <input type="datetime-local" name="date" class="form-control">
                    <!-- <input type="datetime-local" name="date" class="form-control" placeholder="Select DateTime"> -->
                </div>
                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>

                
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Make an Appointment</button></div>
          </form>
  
        </div>
      </section><!-- End Appointment Section -->
  

    <!-- THIS IS THE FOOTER  -->
    <div class="footer-container">
        <div class="banner">
            <div class="container container-1">
            <div class="icons" id="icon1"><img src="images/location.png" alt=""></div>
            <div class="details">
                    <div id="heading1">HOSPITAL ADDRESS</div>
                    <div id="info">E44, Design Street, Web Corner Melbourne -005</div>
            </div>
            </div>
            <div class="container container-2">
                <div class="icons" id="icon2"><img src="images/call.png" alt=""></div>
                <div class="details">
                    <div id="heading1">EMERGENCY (27x7)</div>
                    <div id="info">Mobile: (+1) 800 433 633 <br> Toll Free: (+1) 800 123 456</div>
            </div>
            </div>
            <div class="container container-3">
                <div class="icons" id="icon3"><img src="images/mail.png" alt=""></div>
                <div class="details">
                    <div id="heading1">EMAIL</div>
                    <div id="info">info@bhcis.com <br> support@bhcis.com</div>
            </div>
            </div>
    </div>
    </div>


    <footer> 

        <div class="left-footer">
            <div class="bhc-logo">
                <img src="images/BHCIS-03.png" alt="">
                <p id="logo-name">BHCIS</p>
            </div>

            <p id="title1">Refer to the following schedule for Barangay Health Center's Open Hours on the following days.</p>
            <div id="schedules">
                <p class="date">Monday -Friday</p>
                <p class="time">8:00 am - 3:00 pm</p>
            </div>
            <div id="schedules">
                <p class="date">Saturday</p>
                <p class="time">8:00 am - 2:00 pm</p>
            </div>
            <div id="schedules">
                <p class="date">Sunday</p>
                <p class="time">8:00 am - 2:00 pm</p>
            </div>

        </div>

        <div class="right-footer">
            <div id="title"><p>NEWSLETTER </p></div>
            <p>Subscribe to our newsletter to keep up with health center's programs</p>

            <form>
                <input type="email" placeholder="Enter Email...">
                <button type="submit" class="button_1"><i class="fa-solid fa-paper-plane"></i></button>
            </form>

            <p id="title2">STAY CONNECTED </p>
            <div class="socmed-links">
                <a href=""><i class="fa-brands fa-facebook-square"></i></a>
                <a href=""><i class="fa-brands fa-twitter-square"></i></a>
                <a href=""><i class="fa-brands fa-google-plus-square"></i></a>
                <a href=""><i class="fa-brands fa-instagram-square"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </footer>


    <div id="footer2">
        &copy; 2015 Barangay Health Center Information System. All Rights Reserved.
    </div>
    <!-- JAVASCRIPTS -->
    <script src="../js/nav-footer.js"></script>
    <script src="https://kit.fontawesome.com/52a9453a06.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- <script src="jquery.main.js" type="text/javascript"></script>
    <script type="text/javascript">
        function getDepartment(val){
            $.ajax({
                type: "POST",
                url: "getDepartment.php",
                data: 'doctor_id='+val,
                success: funciton(data){
                    $("#doctor").html.data;
                }
            });
        }
    </script> -->
</body>
</html>