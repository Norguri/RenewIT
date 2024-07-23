<?php
// Retrieve necessary data from the database or any other source
$warrantyTitle = "Warranty";
$warrantyDescription = "At ReNewIt, we are dedicated to providing the highest quality service and ensuring our customers' peace of mind. Our warranty covers both parts and labor for repairs, ensuring that your devices are protected long after they leave our workshop.";
$warrantySchedule = "Monday to Friday: 9 AM - 5 PM";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Warranty</title>
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
        <a href="#" class="logo"> <i class="fas fa-shield-alt"></i> <strong>ReNewIt</strong></a>
    </header>

    <div class="container">
        <h1><?php echo $warrantyTitle; ?></h1>
        <p><?php echo $warrantyDescription; ?></p>
        <p>At ReNewIt, we are committed to providing quality repair services with a focus on reliability and customer satisfaction. Our warranty covers the following:</p>
        <ul>
            <li>Coverage for parts and labor for all repairs performed</li>
            <li>Free diagnosis and repair of issues covered under warranty</li>
            <li>Replacement of defective parts with high-quality components</li>
            <li>Quick turnaround times for warranty repairs</li>
            <li>Comprehensive support and assistance</li>
        </ul>

        <h2>Why Choose Our Warranty?</h2>
        <ul>
            <li>Peace of mind with our reliable warranty coverage</li>
            <li>High-quality repairs using genuine parts</li>
            <li>Experienced technicians ensuring top-notch service</li>
            <li>Customer-centric approach with prompt support</li>
            <li>Transparent terms and conditions</li>
        </ul>

        <h2>FAQs</h2>
        <h3>Q: What is covered under your warranty?</h3>
        <p>A: Our warranty covers parts and labor for all repairs we perform. It includes replacement of defective parts and free diagnosis of issues covered under the warranty.</p>

        <h3>Q: How long is the warranty period?</h3>
        <p>A: The warranty period varies based on the type of repair and parts used. Generally, our warranty ranges from 90 days to one year.</p>

        <h3>Q: What should I do if I encounter an issue during the warranty period?</h3>
        <p>A: If you experience any issues during the warranty period, please contact us immediately. We will arrange for a diagnosis and repair of the issue as quickly as possible.</p>

        <a href="http://localhost:3000/index.php#services" class="btn"> Back to main page <span class="fas fa-chevron-right"></span> </a>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> ReNewIt. All rights reserved.</p>
    </footer>
</body>
</html>
