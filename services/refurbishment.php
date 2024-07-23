<?php
// Retrieve necessary data from the database or any other source
$refurbTitle = "Refurbishment";
$refurbDescription = "Our refurbishment process at ReNewIt brings new life to pre-owned devices. We thoroughly inspect, clean, and replace any faulty components to ensure that each device meets our high standards for performance and reliability. Buy refurbished and save money without compromising on quality.";
$refurbSchedule = "Monday to Friday: 9 AM - 5 PM";
?>
<!DOCTYPE html>
<html>
<head>
    <title>ReNewIt</title>
    <!-- Add any necessary CSS or JavaScript files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Global Styles */
        :root {
            --light-red: #FFA07A;
            --light-orange: #FF4500;
            --black: #444;
            --light-color: #111;
            --box-shadow: .5rem .5rem 0 rgba(255, 69, 0, .2);
            --text-shadow: .4rem .4rem 0 rgba(0, 0, 0, .2);
            --border: .2rem solid var(--light-red);
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-transform: capitalize;
            transition: all .2s ease-out;
            text-decoration: none;
            background: #f2f2f2;
            color: #333;
        }

        /* Header Styles */
        .header {
            padding: 1rem 5%;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: var(--light-orange);
            color: #fff;
        }

        .header .logo {
            font-size: 2.5rem;
            color: #fff;
            text-decoration: none;
        }

        .header .logo i {
            color: var(--light-red);
        }

        .header .navbar a {
            font-size: 1.7rem;
            color: #fff;
            margin-left: 2rem;
            text-decoration: none;
        }

        .header .navbar a:hover {
            color: #ddd;
        }

        /* Main Content Styles */
        .container {
            max-width: 960px;
            margin: 8rem auto 2rem;
            padding: 2rem;
            background: #fff;
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        p {
            font-size: 1.2rem;
            line-height: 1.5;
            margin-bottom: 1rem;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        ul, ol {
            margin-bottom: 1rem;
        }

        li {
            margin-bottom: 0.5rem;
        }

        /* Footer Styles */
        footer {
            background: #f2f2f2;
            padding: 2rem;
            text-align: center;
        }

        .btn {
            display: inline-block;
            margin-top: 1rem;
            padding: .5rem;
            padding-left: 1rem;
            border: var(--border);
            border-radius: .5rem;
            box-shadow: var(--box-shadow);
            color: var(--light-red);
            cursor: pointer;
            font-size: 1.7rem;
            background: #fff;
        }

        .btn span {
            padding: .7rem 1rem;
            border-radius: .5rem;
            background: var(--light-red);
            color: #fff;
            margin-left: .5rem;
        }

        .btn:hover {
            background: var(--light-red);
            color: #fff;
        }

        .btn:hover span {
            color: var(--light-red);
            background: #fff;
            margin-left: 1rem;
        }
    </style>
</head>
<body>
    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-sync-alt"></i> <strong>ReNewIt</strong></a>
    </header>

    <div class="container">
        <h1><?php echo $refurbTitle; ?></h1>
        <p><?php echo $refurbDescription; ?></p>
        <p>Our refurbishment services include:</p>
        <ol>
            <li>Initial assessment of the device</li>
            <li>Cleaning and repair of hardware components</li>
            <li>Updating or reinstalling software</li>
            <li>Testing to ensure the device is fully functional</li>
            <li>Final quality check and packaging</li>
        </ol>

        <h2>Why Choose Our Refurbishment Services?</h2>
        <ul>
            <li>Professional and experienced technicians</li>
            <li>High-quality replacement parts</li>
            <li>Comprehensive testing to ensure device functionality</li>
            <li>Affordable pricing</li>
            <li>Warranty on all refurbished devices</li>
        </ul>

        <h2>FAQs</h2>
        <h3>Q: How long does the refurbishment process take?</h3>
        <p>A: The duration depends on the extent of the refurbishment needed. Typically, it takes between 3 to 7 business days.</p>

        <h3>Q: Can all devices be refurbished?</h3>
        <p>A: We can refurbish most devices, but some may be beyond repair. Our technicians will provide a detailed assessment before proceeding.</p>

        <h3>Q: Do you offer a warranty on refurbished devices?</h3>
        <p>A: Yes, all our refurbished devices come with a warranty. The duration of the warranty depends on the device and the extent of refurbishment.</p>

        <a href="http://localhost:3000/index.php#services" class="btn"> Back to main page <span class="fas fa-chevron-right"></span> </a>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> ReNewIt. All rights reserved.</p>
    </footer>
</body>
</html>
