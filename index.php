<?php
require 'Login/controllers/emailver.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RenewIt</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-phone-square-alt"></i> <strong>Refurbished</strong>Gadget</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#doctors">products</a>
            <a href="#appointment">contact us</a>
            <?php if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] === false): ?>
            <!-- Show "Sign in/Sign up" button when not logged in -->
            <a href="Login/login.php">Sign in/Sign up</a>
            <?php else: ?>
            <!-- Show "Logout" button when logged in -->
            <a href="Login/login.php?logout=1">Logout</a>
            <?php endif; ?>
        </nav>

</header>

<!-- flash message for verification/login -->
<?php if(isset($_SESSION['message'])): ?>
<section class="flash_message" id="flash_message">
    <div>
        <div class="alert <?php echo $_SESSION['alert-class']; ?>">
        <h3>Welcome, <?php echo $_SESSION['username']; ?>!</h3>
            <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                unset($_SESSION['alert-class']);
            ?>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- home section starts  -->

<section class="home" id="home">
    <div class="image">
        <img src="images/7.gif" alt="">
    </div>

    <div class="content">
            <h3>Bring Your Devices Back to Life</h3>
            <p>Expert refurbishment services to extend the life of your gadgets.</p>
            <a href="#appointment" class="btn"> Get Started <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span>About</span> Us </h1>

<div class="row">

    <div class="image">
        <img src="images/it.gif" alt="">
    </div>

    <div class="content">
        <h3>Quality Refurbishment Services</h3>
        <p>Welcome to ReNewIt, your trusted partner for high-quality gadget refurbishment. We specialize in reviving old and worn-out devices, ensuring they function like new. Our mission is to provide top-notch refurbishment services that save you money and reduce electronic waste.</p>
        <a href="about.php" class="btn"> Learn More <span class="fas fa-chevron-right"></span> </a>
    </div>

</div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

<h1 class="heading"> Our <span>Services</span> </h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-tools"></i>
        <h3>Repair Services</h3>
        <p>We offer comprehensive repair services for all types of gadgets.</p>
        <a href="services/repair.php" class="btn"> Learn More <span class="fas fa-chevron-right"></span> </a>
    </div>

    <div class="box">
        <i class="fas fa-sync-alt"></i>
        <h3>Refurbishment</h3>
        <p>Get your old devices refurbished to like-new condition.</p>
        <a href="services/refurbishment.php" class="btn"> Learn More <span class="fas fa-chevron-right"></span> </a>
    </div>

    <div class="box">
        <i class="fas fa-shield-alt"></i>
        <h3>Warranty</h3>
        <p>Enjoy peace of mind with our extended warranty options.</p>
        <a href="services/warranty.php" class="btn"> Learn More <span class="fas fa-chevron-right"></span> </a>
    </div>

</div>

</section>

<!-- services section ends -->

<!-- doctors section starts  -->
<?php
$q = "SELECT * FROM doctor"; // doctor is the table's name
$doctors = $conn->query($q);
?>
<section class="doctors" id="doctors">

    <h1 class="heading"> our <span> products </span> </h1>

    <div class="box-container">
       <?php
        while($row = mysqli_fetch_assoc($doctors)){
       ?>
        <div class="box">
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['dr_img']).'"alt="">' ?> <!-- the strings under the double quotes depends on the column names of the table -->
            <h3><?php echo $row["name"] ?></h3>
            <span><?php echo $row["specialization"] ?></span>
            <div class="share">
            <a href=<?php echo $row["fb_link"] ?> target="_blank" class="fab fa-brands fa-shopify""></a>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</section>

<!-- appointmenting section starts   --> 
<section class="appointment" id="appointment">

    <h1 class="heading"> <span>Appoint</span> Now </h1>    

    <div class="row">

        <div class="image">
            <img src="images/2.gif" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php 
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }

        ?>
            <p class="message"></p>
                
            
            <h3>Book an appointment for our service!</h3>
            <input type="text" name="name" placeholder="Full Name" class="box">
            <input type="number" name="number" placeholder="Your 11-digit number" class="box">
            <input type="email" name="email" placeholder="Your email" class="box">
            <input type="date" name="date" class="box">
            <input type="submit" name="submit" value="Appoint Now" class="btn">
        </form>

    </div>
</section>
    </div>

</section>

<!-- appointmenting section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Quick Links</h3>
                <a href="#home"> <i class="fas fa-chevron-right"></i> Home </a>
                <a href="#about"> <i class="fas fa-chevron-right"></i> About </a>
                <a href="#services"> <i class="fas fa-chevron-right"></i> Services </a>
                <a href="#doctors"> <i class="fas fa-chevron-right"></i> Products </a>
                <a href="#appointment"> <i class="fas fa-chevron-right"></i> Contact </a>
            </div>

            <div class="box">
                <h3>Our Services</h3>
                <a href="services/repair.php"> <i class="fas fa-chevron-right"></i> Repair Services </a>
                <a href="services/refurbishment.php"> <i class="fas fa-chevron-right"></i> Refurbishment </a>
                <a href="services/warranty.php"> <i class="fas fa-chevron-right"></i> Warranty </a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"> <i class="fas fa-envelope"></i> info@renewit.com</a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Manila, Philippines</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
            </div>
        </div>
    </section>

    <!-- footer section ends -->

<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>