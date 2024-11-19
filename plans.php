<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarePro Insurance</title>
	<link rel="icon" type="image/png" href="./images/Logo3t.png">
	
	<!-- ADD CSS FILES -->
    <link rel="stylesheet" href="./styles/generalstyle.css">
	<link rel="stylesheet" href="./styles/plansstyle.css">
	
    

</head>

<?php 
    
    session_start();
    include('./header/header.php')?>

<main>
        <section class="hero">
            <h2>Our Health Insurance Plans</h2>
            <p>We offer a variety of health insurance plans designed to meet your unique needs. Whether you're looking for comprehensive coverage, affordable options, or specialized plans, we have solutions for individuals, families, and businesses. From preventive care to emergency services, our plans provide access to quality healthcare while ensuring peace of mind. Explore our flexible options, including HMOs, PPOs, and more, and find the right plan for your lifestyle.</p>
            
        </section>
        
        <section class="plans">
            <div class="plan"><a href="./plandetails.php">
                <img src="./images/Individual & Family Plans.png" alt="Individual & Family Plans">
                <h3>Individual & Family Plans</h3>
                <p>"Individual & Family Plans" provide flexible health coverage for individuals
				and families, covering essentials like doctor visits, hospital stays, and 
				prescriptions to ensure quality care.</p></a>
            </div>
            <div class="plan"><a href="./plandetails.php">
                <img src="./images/Group Health Insurance Plans.png" alt="Group Health Insurance Plans">
                <h3>Group Health Insurance Plans</h3>
                <p>"Group Health Insurance Plans" offer comprehensive health coverage to employees,
				providing access to medical services like doctor visits, hospital stays, and prescriptions, 
				promoting a healthier, more productive workforce.</p></a>
            </div>
            <div class="plan"><a href="./plandetails.php">
                <img src="./images/Medicare & Medicaid Plans.png" alt="Medicare & Medicaid Plans">
                <h3>Medicare & Medicaid Plans</h3>
                <p>"Medicare & Medicaid Plans" provide government-supported health coverage for
				eligible individuals, including seniors, low-income families, and those with
				disabilities, covering a range of essential medical services</p></a>
            </div>
            <div class="plan"><a href="./plandetails.php">
                <img src="./images/Short-Term Health Insurance.png" alt="Short-Term Health Insurance">
                <h3>Short-Term Health Insurance</h3>
                <p>"Short-Term Health Insurance" offers temporary coverage for unexpected medical
				expenses, providing a safety net during transitions like job changes. It includes
				basic services like doctor visits and emergency care.</p></a>
            </div>
            <div class="plan"><a href="./plandetails.php">
                <img src="./images/Emergency Services.png" alt="Emergency Services">
                <h3>Emergency Services</h3>
                <p>"Emergency Services" provide immediate medical care for urgent health 
				issues like severe injuries or sudden illnesses, ensuring quick access to 
				treatment in emergency rooms or urgent care centers.</p></a>
            </div>
            <div class="plan"><a href="./plandetails.php">
                <img src="./images/Elder Citizen Coverage.png" alt="Elder Citizen Coverage">
                <h3>Elder Citizen Coverage</h3>
                <p>"Elder Citizen Coverage" offers tailored health insurance for seniors, 
				covering essential services like doctor visits, prescription medications, 
				and long-term care, ensuring comprehensive support for their unique healthcare 
				needs.</p></a>
            </div>
        </section>
    </main>

<?php include('./footer/footer_home.php'); ?>