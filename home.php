<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarePro Insurance</title>
	<link rel="icon" type="image/png" href="./images/Logo3t.png">
	
	<!-- ADD CSS FILES -->
    <link rel="stylesheet" href="./styles/generalstyle.css">
	<link rel="stylesheet" href="./styles/homestyle.css">
    
    
	
</head>

    <?php 
    
    session_start();
    include('./header/header.php')?>	

    <section class="hero">
        <div class="hero-content">
            <h1>Comprehensive Health Insurance Plans<br>for Your Peace of Mind</h1>
            <p>Protect your health and secure your future with our wide range of health insurance plans. Whether you're looking for 
			individual coverage, family protection, or specialized plans, we offer tailored solutions to meet 
			your unique needs. Enjoy benefits like cashless hospitalization, extensive network coverage, and 
			hassle-free claims. Prioritize your well-being today and take the first step towards a worry-free 
			tomorrow.</p>
            <div class="hero-buttons">
                <button onclick="window.location.href='./signup.php';">Get Started</button>
                <button onclick="window.location.href='./plans.php';">Learn More</button>
            </div>
        </div>
        
    </section>

    <section class="features">
        <h2>International Health Plans for:</h2>
        <p>From new overseas assignees, to seasoned expats, to digital nomads, we’ve got your healthcare covered.</p>
        <div class="feature-cards">
            <div class="card">
                <img src="./images/feature1.jpg" alt="Feature 1">
                <h3>Families</h3>
                <p>Our family-friendly plans have been specifically designed to meet the health and well-being needs of you and your loved ones.</p>
                <a href="./plans.php">Learn more</a>
            </div>
            <div class="card">
                <img src="./images/feature2.jpg" alt="Feature 2">
                <h3>Retirees</h3>
                <p>Comprehensive health plans designed for your retirement abroad, leaving you free to live life to the full, wherever that may be.</p>
                <a href="./plans.php">Learn more</a>
            </div>
            <div class="card">
                <img src="./images/feature3.jpg" alt="Feature 3">
                <h3>Students</h3>
                <p>Ensure your healthcare needs are met during one of life’s most exciting adventures - studying abroad.</p>
                <a href="./plans.php">Learn more</a>
            </div>
        </div>
    </section>

    <?php include('./footer/footer_home.php')?>
