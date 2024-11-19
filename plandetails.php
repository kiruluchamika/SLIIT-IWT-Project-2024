<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarePro Insurance</title>
	<link rel="icon" type="image/png" href="./images/Logo3t.png">
	
	<!-- ADD CSS FILES -->
    <link rel="stylesheet" href="./styles/generalstyle.css">
	<link rel="stylesheet" href="./styles/plandetailstyle.css">
    
    <!-- ADD JS -->
    <script src="./js/plan.js"></script>
    
	
</head>

    <?php 
    
    session_start();
    include('./header/header.php')?>	
    

    <div class="functionbutton">

            <button type="button" onclick=loadData("btn1")>Individual & Family Plans</button>
			<button type="button" onclick=loadData("btn2")>Group Health Insurance Plans</button>
			<button type="button" onclick=loadData("btn3")>Medicare & Medicaid Plans</button>
			<button type="button" onclick=loadData("btn4")>Short-Term Health Insurance</button>
			<button type="button" onclick=loadData("btn5")>Emergency Services</button>
			<button type="button" onclick=loadData("btn6")>Elder Citizen Coverage</button>
			<button type="button" onclick="window.location.href='./planprices.php';" class="price">Plan Prices</button>
    </div>
           
			
			<br>
			
			<center>
			<div class="content">

            <img id="pic" src="./images/contact-us-general.jpeg" width="50%" height="50%">
			<p id="picdata">Welcome to our Health Insurance Plans introductory page! Here, you will find a 
                comprehensive overview of the various health insurance options we offer, designed to cater to 
                the diverse needs of individuals, families, and organizations. Whether you're seeking coverage
                 for routine medical care, emergency services, or specialized treatments, we have a plan 
                 that suits your lifestyle and budget. Take your time to explore our offerings, and don’t 
                 hesitate to reach out for assistance. Selecting the right health insurance plan is crucial 
                 for ensuring peace of mind and protecting your health. Choose wisely, and secure the coverage 
                 that best fits your needs!</p>

            </div>
			</center>



    <?php include('./footer/footer_home.php')?>
