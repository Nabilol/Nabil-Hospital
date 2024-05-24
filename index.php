<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    // Insert query
    $insert = mysqli_query($conn, "INSERT INTO `contant_form` (name, email, number, date) VALUES ('$name', '$email', '$number', '$date')") or die('query failed');

    // Check if insert was successful
    if ($insert) {
        $message[] = 'appointment made successfully';
    } else {
        $message[] = 'appointment failed';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nabil Hospital</title>
    
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link -->

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- header section start -->

    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>WC</strong>medical </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#aboyt">about</a>
            <a href="#services">services</a>
            <a href="#doctors">doctors</a>
            <a href="#appointment">appointment</a>
            <a href="#review">review</a>
            <a href="#blogs">blogs</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </header>
    <!-- header section end -->
    <!-- home section start -->
    <section class="home" id="home">

        <div class="image">
            <img src="image/home-img.svg" alt="">
        </div>

        <div class="content">
            <h3>we take care of your healthy life</h3>
            <p> A person who has good physical health is likely to have bodily functions and processes working at thier peak. </p>
            <a href="#appointment" class="btn"> appointment us <span class="fas fa-chevron-right"></span></a>
        </div>
    </section>

    <!-- home section ends-->
    <!-- icons section start -->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-users-md"></i>
            <h3>150+</h3>
            <p>doctors at work</p>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <h3>1030+</h3>
            <p>satisfied patients</p>
        </div>

        <div class="icons">
            <i class="fas fa-procedures"></i>
            <h3>490+</h3>
            <p>Bad facility</p>
        </div>

        <div class="icons">
         <i class="fas fa-hospital"></i>
         <h3>70+</h3>
         <p>available Hospital</p>
        </div>
    </section>

    <!--local sections ends -->    
    
    <!--about section starts-->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>
        <div class="row">

            <div class="image">
                <img src="image/about-img.svg" alt="">
            </div>

            <div class="content">
<h3>take the worlds best quality treatment</h3>
            </div>
        </div>
    </section>
    <!--about section ends -->
    <!-- services section starts -->

    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">
            <div class="box">
            <i class="fas da-notes-medical"></i>
            <h3>free chekups</h3>
            <p>Treat your pain before it harms you</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Treat your pain before it harms you</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>

        </div>

    </div>

    </section>

    <!-- services section ends -->


    <!-- doctors section starts -->

    <section class="doctors" id="doctors">

        <h1 class="heading"> our <span> doctors </span></h1>

        <div class="box">
            <img src="image/th.jpg" alt="">
            <h3> N DOCTOR </h3>
            <span>expret doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>

        <div class="box">
            <img src="image/th (3).jpg">
            <h3>NA DOCTOR</h3>
            <span>expert doctors</span>
            <div class="share">
                <a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a> 
            </div>
        </div>

<div class="box">
            <img src="image/OIP (2).jpg">
            <h3>NAB DOCTOR</h3>
            <span>expert doctors</span>
            <div class="share">
                <a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a> 
            </div>
        </div>

        <div class="box">
            <img src="image/th (7).jpg">
            <h3>NABIL DOCTOR</h3>
            <span>expert doctors</span>
            <div class="share">
                <a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a> 
            </div>
        </div>

        <div class="box">
            <img src="image/th (1).jpg">
            <h3>NABIL DOCTOR</h3>
            <span>expert doctors</span>
            <div class="share">
                <a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a> 
            </div>
        </div>

        <div class="box">
            <img src="image/th (2).jpg">
            <h3>NABIL DOCTOR</h3>
            <span>expert doctors</span>
            <div class="share">
                <a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a> 
            </div>
        </div>

        <div class="box">
            <img src="image/th (6).jpg">
            <h3>NABIL DOCTOR</h3>
            <span>expert doctors</span>
            <div class="share">
                <a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a> 
            </div>
        </div>

        <div class="box">
            <img src="image/th (5).jpg">
            <h3>Kassim Kattan DOCTOR</h3>
            <span>expert doctors</span>
            <div class="share">
                <a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a> 
            </div>
        </div>

        <div class="box">
            <img src="image/th (4).jpg">
            <h3>NABIL DOCTOR</h3>
            <span>expert doctors</span>
            <div class="share">
                <a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a> 
            </div>
        </div>


    </section>

    <!-- doctors section ends-->

    <!-- appointment section starts -->
    <section class="appointment" id="appointment">
        <h1 class="heading"> <span> appointment </span> now </h1>

        <div class="row">

            <div class="image">
                <img src="OIP.jpg" alt="">
            </div>

            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
             <?php
            if(isset($message)){
                foreach($message as $message){
                echo '<p class ="message">'.$message.'</p>';
                }
            }
?>
                <h3> make appointment </h3>
                <input type="text" name="name" placeholder="your name" class="box">
                <input type="number" name="number" placeholder=" your number" class="box">
                <input type="email" name="email" placeholder="your email" class="box">
                <input type="date" name="date" class="box">
                <input type="submit" name="submit" placeholder="appointment now" class="btn">
            </form>

        </div>
    </section>

    <!-- appointment section ends -->

    <!--review section start -->

    <section class="review" id="review">

        <h1 class="heading"> client's <span>review</span> </h1>

        <div class="box-container">
            <div class="box">
                <img src="image/download (1).jpg" alt="">
                <h3>Nabil script</h3>
                <div class="start">
                    <i class="fas fa-start"></i>
                    <i class="fas fa-start"></i>
                    <i class="fas fa-start"></i>
                    <i class="fas fa-start"></i>
                    <i class="fas fa-start-half-alt"></i>
                </div>
                <p class="text">Your health is our priority</p>
            </div>

            <div class="box">
                <img src="image/OIP (1).jpg" alt="">
                <h3> Nabil script</h3>
                <div class="start">
                    <i class="fas fa-start"></i>
                    <i class="fas fa-start"></i>
                    <i class="fas fa-start"></i>
                    <i class="fas fa-start"></i>
                    <i class="fas fa-start-half-alt"></i>
                </div>
                <p class="text">Your health is our priority</p>
                
            </div>
        </div>
    </section>

    <!-- review section ends -->
    <!-- blogs section starts -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>blogs</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="image/OIP.jpg" alt="">

                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2024 </a>
                        <a href="#"> <i class="fas fa-user"></i> by Nabil </a>
                    </div>
                    <h3>blog title NABIL OLAYAN goes here </h3>
                    <p>We take care about your health </p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/OIP (3).jpg" alt="">

                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 21 november 2024 </a>
                        <a href="#"> <i class="fas fa-user"></i> Nabil </a> 
                    </div>
                    <h3>blog title NABIL OLAYAN goes here</h3>
                    <p>e take care about your health</p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>

                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="image/OIP (4).jpg" alt="">

                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 21 november 2024 </a>
                        <a href="#"> <i class="fas fa-user"></i> by Nabil </a> 
                    </div>
                    <h3>blog title NABIL OLAYAN goes here</h3>
                    <p>we take care about your health</p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
 </div>
            </div>
        </div>
    </section>

    <!-- blogs section ends-->
    <!-- footer section starts -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
                <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
                <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
                <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
                <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
                <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
            </div>
            <div class="box">
                <h3> our services </h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> cardio </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> ambulance services </a>
            </div>
            <div class="box">
                <h3>appointment info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +96176362464 </a>
                <a href="#"> <i class="fas fa-phone"></i> +96176362464 </a>
                <a href="#"> <i class="fas fa-envelope"></i> nabilolayan2001@gmail.com </a>
                <a href="#"> <i class="fas fa-envelope"></i> nabilolayan2001@gmail.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> bekaa, zahle </a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fas fa-faceappointment-f"></i> fa-faceappointment </a>
                <a href="#"> <i class="fas fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fas fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fas fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fas fa-linkedin"></i> linkedin </a>
                <a href="#"> <i class="fas fa-pinterest"></i> pinterest </a>
            </div>
        </div> 
        <div class="credit"> created by <span>Nabil Olayan</span> | all right reserved </div>
        
    </section>

    
    <!-- js file link -->
    <script src="js/script.js"></script>
    
</body>
</html>