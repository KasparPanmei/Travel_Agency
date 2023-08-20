<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourist - Travel Agency :) </title>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./responsive.css">
</head>
<body id="body">
    <header id="top">
        <!-- heading of the website -->
        <div class="header">
            <div class="title">
                <h1>" A Jewel Land and Switzerland of India ".</h1>
                <h2 style="color: var(--primary-color);">Call Manipur</h2>
            </div>
        </div>
        <!-- end -->

        <!-- background-images and it's contents -->
        <div class="bg-nav" id="df_bg">
            <!-- navbar -->
            <div class="navbar">
                <div class="logo">
                    <a href="./index.html"><img src="./new-logo.png" alt="" style="cursor: pointer;"></a>
                </div>
                <a href="#" class="toggle-btn">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
                <div class="navbar-links">
                    <ul>
                        <li>
                            <a href="./index.html" class="active">Home</a>
                        </li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li>
                            <a href="#destination">Destination </a>
                        </li>
                        <li>
                            <a href="#book">Contact</a>
                        </li>
                        <!-- <li>
                            <div class="pop-up-container">
                                <div class="submit-btn">
                                    <button type="submit" onclick="openPopup()">Register
                                    </button>
                                </div>  
                                <div class="popup" id="popup">
                                    <div class="image">
                                        <img src="./quality.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h2>Register Here</h2>
                                        <form action="" method="post">
                                            <div class="first-input">
                                                <input type="text" name="reg_name" id="" placeholder="Full Name" required>
                                                <input  type="number" name="reg_no" id="" placeholder="Phone No." required>
                                            </div>
                                            <div class="second-input">
                                                <input type="password" name="reg_password" id="" placeholder=" Create Password" required>
                                                <button type="submit">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="pop-up-btn">
                                        <button type="button" onclick="closePopup()">OK</button>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
            <!-- end of navbar -->
            <!-- content-within bg -->
            <div class="content-title">
                <div class="content-hd-title">
                    <h1>Enjoy Your Travel With Us</h1>
                    <p><span class="span_1">Leave</span> your FOOTPRINT in "Manipur "</p>
                </div>
            </div>
            <!-- end -->
        </div>
        <!-- end -->
    </header>
    <!-- about-content -->
    <section class="about" id="about">
        <!-- flex the content of image and description -->
        <div class="about-content">
            <div class="about-cnt-img">
                <img src="./pic-5.jpg" alt="">
            </div>
            <div class="about-cnt-description">
                <div class="about-us-flex">
                    <div class="first-title">
                        About Us
                    </div>
                    <div class="second-title">
                        <span class="upper-line">
                            <p>Lorem</p>
                        </span>
                        <span class="lower-line">
                            <p>Lorem</p>
                        </span>
                    </div>
                </div>
                <div class="welcome-note">
                    <div class="welcome-title">
                        <h1>Welcome to <span class="welcome-span">Tourist</span></h1>
                    </div>
                </div>
                <!-- contents-description -->
                <div class="description-welcome-notes">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure sapiente recusandae eligendi libero dolor repellat quis perspiciatis vitae maxime expedita!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia nihil distinctio, culpa aliquid quisquam voluptatibus deserunt non quibusdam aperiam itaque?</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end about-content -->
    <section class="services" id="services">
        <!-- contents of services -->
        <div class="services-head-title-flex">
            <div class="services-first-span">
                <span class="upper-line"><p>lorem</p></span>
                <span class="lower-line"><p>lorem</p></span>
            </div>
            <div class="services-second-span">
                <h2>Services</h2>
            </div>
            <div class="services-third-span">
                <span class="upper-line"><p>lorem</p></span>
                <span class="lower-line"><p>lorem</p></span>
            </div>
        </div>
        <div class="services-content">
            <div class="services-head-cnt">
                <h1>Our Services</h1>
            </div>
            <div class="box-container">
                <div class="box">
                    <div class="box-cnt-title">
                        <h2>Hotel Reservation</h2>
                    </div>
                    <div class="box-cnt-para">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, ratione.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="box-cnt-title">
                        <h2>Travel Guides</h2>
                    </div>
                    <div class="box-cnt-para">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, ratione.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="box-cnt-title">
                        <h2>Event Manager</h2>
                    </div>
                    <div class="box-cnt-para">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, ratione.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="box-cnt-title">
                        <h2>Call Taxi</h2>
                    </div>
                    <div class="box-cnt-para">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, ratione.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of our services -->

    <!-- Destination -->
    <section class="destination" id="destination">
        <!-- contents of destination -->
        <div class="destination-head-title-flex">
            <div class="destination-first-span">
                <span class="upper-line"><p>lorem</p></span>
                <span class="lower-line"><p>lorem</p></span>
            </div>
            <div class="destination-second-span">
                <h2>Destination</h2>
            </div>
            <div class="destination-third-span">
                <span class="upper-line"><p>lorem</p></span>
                <span class="lower-line"><p>lorem</p></span>
            </div>
        </div>
        <!-- popular destination -->
        <div class="destination-content">
            <div class="destination-head-cnt">
                <h1>Popular in Manipur</h1>
            </div>
            <div class="destination-in-manipur">
                <div class="images">
                    <div class="image1">
                        <img src="./Keibul-Lamjao-National-Park-Manipur-Loktak-Lake-Sangai-28-of-29-689x517.jpg" alt="">
                        <!-- <div class="cut-off">
                            <button type="button">Button</button>
                        </div> -->
                    </div>
                    <div class="image2">
                        <div class="image_alone">
                            <img src="./boat ..salam_rajesh_loktak_3_world_wetlands_day_2_feb_2019_langolsabi.jpg" alt="">
                        </div>
                        <div class="second-flex-image">
                            <div class="image3">
                                <img src="./holy-cross-inside-imphal.jpg" alt="">
                            </div>
                            <div class="image3">
                                <img src="./loktak up view.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of popular destination -->
    
    <!-- packages -->
    <section id="packages" class="packages">
        <!-- contents of destination -->
        <div class="packages-head-title-flex">
            <div class="packages-first-span">
                <span class="upper-line"><p>lorem</p></span>
                <span class="lower-line"><p>lorem</p></span>
            </div>
            <div class="packages-second-span">
                <h2>Packages</h2>
            </div>
            <div class="packages-third-span">
                <span class="upper-line"><p>lorem</p></span>
                <span class="lower-line"><p>lorem</p></span>
            </div>
        </div>
        <div class="packages-content">
            <div class="packages-head-cnt">
                <h1>Explore</h1>
            </div>
        </div>
        <div class="more-packages">
            <div class="container">
                <div class="box-container">
                    <div class="box">
                        <div class="image">
                            <img src="./1520524185_Shirui-Kashung-Peak4.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>
                            Shirui Lily
                            </h3>
                            <p>It is one of the most popular flower which </p>
                            <p>only in the soil of Ukhrul District. </p>
                            <a href="#" class="btn"> Read More</a>
                            <div class="icons">
                                <span> <i class="fas fa-calendar"></i>20th July, 2023</span>
                                <span> <i class="fas fa-calendar"></i>By admin</span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="./1542472870_Barak-Waterfalls4.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>
                            Barak Waterfall
                            </h3>
                            <p>A cool breeze waterfall.</p>
                            <p>It is located at TML District</p>
                            <a href="#" class="btn"> Read More</a>
                            <div class="icons">
                                <span> <i class="fas fa-calendar"></i>19th Oct. 2022</span>
                                <span> <i class="fas fa-calendar"></i>By admin</span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="./ef6187ca-ba14-450a-9e61-c8880df39011.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>
                           Bunning Meadow
                            </h3>
                            <p>Located at the District of Tamenglong,</p>
                            <p> at a Village called Puilon  </p>
                            <a href="#" class="btn"> Read More</a>
                            <div class="icons">
                                <span> <i class="fas fa-calendar"></i>20th July. 2023</span>
                                <span> <i class="fas fa-calendar"></i>By admin</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="box">
                        <div class="image">
                            <img src="./Tharon_Cave_Explore_the_less_exploredTharon_Cave_Explore_the_less_explored_LpTZ9of.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>
                            Tharon Cave
                            </h3>
                            <p>Ancient Cave which runs  deep  </p>
                            <p>It is located at Tharon Village </p>
                            <a href="#" class="btn"> Read More</a>
                            <div class="icons">
                                <span> <i class="fas fa-calendar"></i>20th July, 2023</span>
                                <span> <i class="fas fa-calendar"></i>By admin</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="box">
                        <div class="image">
                            <img src="./imphal-war-cemetery.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>
                            War Cemetry
                            </h3>
                            <p>Located at Imphal East District, </p>
                            <p>Which rest the patreon of Soldiers,</p>
                            <a href="#" class="btn"> Read More</a>
                            <div class="icons">
                                <span> <i class="fas fa-calendar"></i>20th July, 2023</span>
                                <span> <i class="fas fa-calendar"></i>By admin</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="box">
                        <div class="image">
                            <img src="./kangla-fort.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>
                            Kangla Fort
                            </h3>
                            <p>Located at the Heart of Imphal East </p>
                            <p>District</p>
                            <a href="#" class="btn"> Read More</a>
                            <div class="icons">
                                <span> <i class="fas fa-calendar"></i>20th July, 2023</span>
                                <span> <i class="fas fa-calendar"></i>By admin</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="box">
                        <div class="image">
                            <img src="./traditional-manipuri.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>
                            Traditional Boat Manipuri
                            </h3>
                            <p>Ages ago, the traditional boat being used.</p>
                            <p>It is being placed as a Monument in Kangla </p>
                            <a href="#" class="btn"> Read More</a>
                            <div class="icons">
                                <span> <i class="fas fa-calendar"></i>20th July, 2023</span>
                                <span> <i class="fas fa-calendar"></i>By admin</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="box">
                        <div class="image">
                            <img src="./loktak up view.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>
                            Loktak Lake
                            </h3>
                            <p>Located at the District of Bishnupur, </p>
                            <p>One of the Project for Hydro Energy </p>
                            <a href="#" class="btn"> Read More</a>
                            <div class="icons">
                                <span> <i class="fas fa-calendar"></i>20th July, 2023</span>
                                <span> <i class="fas fa-calendar"></i>By admin</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="box">
                        <div class="image">
                            <img src="./sangai-Manipur.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>
                            Sangai 
                            </h3>
                            <p>An animal which is close to being extinct. </p>
                            <p>Conserved and is being found at Sangai </p>
                            <a href="#" class="btn"> Read More</a>
                            <div class="icons">
                                <span> <i class="fas fa-calendar"></i>19th Oct. 2022</span>
                                <span> <i class="fas fa-calendar"></i>By admin</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="load-more" onclick="loadMoreBtn">
                    Load More
                </div>
            </div>
        </div>
    </section>
    <!-- end of packages -->
    <!-- booking -->
    <section class="book" id="book">
        <!-- contents of book -->
        <div class="book-head-title-flex">
            <div class="book-first-span">
                <span class="upper-line"><p>lorem</p></span>
                <span class="lower-line"><p>lorem</p></span>
            </div>
            <div class="book-second-span">
                <h2>Book</h2>
            </div>
            <div class="book-third-span">
                <span class="upper-line"><p>lorem</p></span>
                <span class="lower-line"><p>lorem</p></span>
            </div>
        </div>
        <!-- booking section -->
        <!-- flex the content of image and description -->
        <div class="book-content">
            <div class="book-cnt-description">
                <div class="book-us-flex">
                    <div class="first-title">
                       Book
                    </div>
                <div class="second-title">
                    <span class="upper-line">
                        <p>Lorem</p>
                        </span>
                        <span class="lower-line">
                        <p>Lorem</p>
                        </span>
                </div>
            </div>
                    <div class="welcome-note">
                        <div class="welcome-title">
                            <h1>Book A <span class="welcome-span">Tour</span></h1>
                        </div>
                    </div>
                    <!-- contents-description -->
                    <div class="description-welcome-notes">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure sapiente recusandae eligendi libero dolor repellat quis perspiciatis vitae maxime expedita!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia nihil distinctio, culpa aliquid quisquam voluptatibus deserunt non quibusdam aperiam itaque?</p>
                    </div>
                </div>
                <div class="book-cnt-img">
                    <div class="heading-title-book">
                        <h1>Online <span class="booking-span">Booking</span></h1>
                    </div>
                    <?php 
                        include_once "connection.php";
                        extract($_POST);
                        if(isset($submit))
                        {
                            $mysql = " INSERT INTO `booking_form`(`full_name`,`email`,`date_time`,`destination`) VALUES ('$full_name','$email','$date_time','$destination')";

                            if($con->query($mysql)==TRUE)
                            {
                                echo '<script> alert("Successfully Booked! We will get in touch with you soon!")</script>';
                            }
                            else
                            {
                                echo '<script>alert("Try to Book Again")</script>';
                            }
                        }
                    ?>
                    <form action="" method="post">
                        <div class="first-form-flex">
                            <input type="text" placeholder="Your Name" name="full_name" required>
                            <input type="mail" placeholder="Your Email" name="email" required>
                        </div>
                        <div class="second-form-flex">
                            <input type="datetime-local" placeholder="Date & Time" name="date_time" id="date-time" required>
                            <input type="text" placeholder="Destination" name="destination" required>
                        </div>
                        <div class="third-form-flex">
                            <div class="submit-btn">
                                <button type="submit" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <!-- end of booking -->
    <!-- start back-to-top -->
    <section class="back-to-top">
        <a href="#top"><p>Back to Top</p></a>
    </section>
    <!-- end back-to-top -->

    <!-- start footer -->

    <footer id="footer">
        <div class="footer-cnt-flex">
            <div class="footer-cnt">
                <div class="footer-title">
                    <h3>Company</h3>
                </div>
                <div class="footer-links">
                    <ul>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Cookies</a></li>
                        <li>
                            <a href="#">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="#">
                                FAQ & Help
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-cnt">
                <div class="footer-title">
                    <h3>Contact</h3>
                </div>
                <div class="footer-links">
                    <ul>
                        <li>
                            <a href="#">75 Imphal, Manipur</a>
                        </li>
                        <li><a href="#">+91- 1234567890 </a></li>
                        <li><a href="#">hightech@gmail.com</a></li>
                        <li>
                            <div class="social-icons">
                                <div class="icons">
                                    <a href=""><img src="./twitter.png" alt=""></a>
                                </div>
                                <div class="icons">
                                    <a href=""><img src="./instagram.png" alt=""></a>
                                </div>
                                <div class="icons">
                                    <a href=""><img src="./whatsapp (1).png" alt=""></a>
                                </div>
                                <div class="icons">
                                    <a href=""><img src="./facebook.png" alt=""></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-cnt">
                <div class="footer-title">
                    <h3>Pay Online</h3>
                </div>
                <div class="footer-links">
                    <ul>
                        <li>
                            <div class="cards">
                                <div class="card"><a href="#">
                                    <img src="./googlepay.svg" id="google">
                                </a></div>
                                <div class="card">
                                    <a href="#"><img src="./mastercard.svg" id="mastercard"></a>
                                </div>
                                <div class="card">
                                    <a href="#"><img src="./paypal_border.svg" id="paypal"></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="cards">
                                <div class="card"><a href="#"><img src="./visa.svg" id="visa"></a></div>
                                <div class="card">
                                    <a href="#"><img src="./maestro.svg" id="maestro"></a>
                                </div>
                                <div class="card">
                                    <a href="#"><img src="./applepay.svg" alt=""></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-cnt">
                <div class="news-cnt">
                    <form action="" method="post" class="newsletter">
                        <input type="mail" required name="newsmail" placeholder="example@gmail.com">
                        <?php

                            include_once "connection.php";
                            extract($_POST);
                            if(isset($news_submit))
                            {
                                $new_sql = " INSERT INTO `newsletter`(`newsmail`) VALUES ('$newsmail')";

                                if($con->query($new_sql))
                                {
                                    echo "<script> alert('Thanks for the subscription!')</script>";
                                }
                                else
                                {
                                    echo "<script>alert('Resubmit!')</script>";
                                }
                            }
                        
                        ?>
                        <button type="submit" name="news_submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <section class="end-footer">
        <p> &copy; ManipurTourism, All Right Reserved | Designed Team High Tech</p>
    </section>
</body>
<script src="./main.js"></script>
</html>