<?php
// Retrieve necessary data from the database or any other source
$repairTitle = "Repair";
$repairDescription = "ReNewIt offers comprehensive repair services for a wide range of devices. Our experienced technicians use state-of-the-art tools and genuine parts to diagnose and fix issues efficiently. Whether it's a cracked screen, battery problem, or any other issue, we ensure your device is restored to optimal performance.";
$repairSchedule = "Monday to Friday: 9 AM - 5 PM";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Repair</title>
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
        <a href="#" class="logo"> <i class="fas fa-tools"></i> <strong>ReNewIt</strong></a>
    </header>

    <div class="container">
        <h1><?php echo $repairTitle; ?></h1>
        <p><?php echo $repairDescription; ?></p>
        <p>Our repair services include:</p>
        <ol>
            <li>Initial assessment of the device</li>
            <li>Repairing or replacing faulty hardware components</li>
            <li>Software troubleshooting and updates</li>
            <li>Thorough testing to ensure the device is working properly</li>
            <li>Final quality check and customer handover</li>
        </ol>

        <h2>Why Choose Our Repair Services?</h2>
        <ul>
            <li>Experienced and skilled technicians</li>
            <li>Use of high-quality replacement parts</li>
            <li>Comprehensive diagnostic and repair services</li>
            <li>Competitive pricing and transparent service</li>
            <li>Customer satisfaction guaranteed</li>
        </ul>

        <h2>FAQs</h2>
        <h3>Q: How long does a typical repair take?</h3>
        <p>A: The repair time varies depending on the issue. Most repairs are completed within 3 to 7 business days.</p>

        <h3>Q: What types of devices do you repair?</h3>
        <p>A: We repair a wide range of devices including smartphones, laptops, tablets, and other electronic gadgets.</p>

        <h3>Q: Do you provide a warranty on repairs?</h3>
        <p>A: Yes, we offer a warranty on all our repairs. The warranty period depends on the type of repair.</p>

        <a href="http://localhost:3000/index.php#services" class="btn"> Back to main page <span class="fas fa-chevron-right"></span> </a>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> ReNewIt. All rights reserved.</p>
    </footer>
</body>
</html>
