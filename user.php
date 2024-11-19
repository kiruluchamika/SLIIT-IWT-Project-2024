<!-- BY KIRULU -->

<?php session_start();?>
<?php require_once('./inc/config.php'); ?>


<?php 
	//check if a user is logged in
	if(!isset($_SESSION['user_id'])){
		header("Location: ./signin.php?message=not_login");
	}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarePro Insurance</title>
	<link rel="icon" type="image/png" href="./images/Logo3t.png">
	
	<!-- ADD CSS FILES -->
    <link rel="stylesheet" href="./styles/generalstyle.css">
	<link rel="stylesheet" href="./styles/userstyle.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	
    <!-- ADD JS -->
    <script src="./js/notification.js" defer></script>


</head>

<?php include('./header/headerlogdash.php')?>

<div class="containerpanel">
        <div class="header">
            <h2>Hello <?php echo $_SESSION['ufirst_name']; ?> !<br><< Welcome to CarePro Helath Insurance >></h2>
            
            <strong><p class='p1'>Username:</strong> <?php echo $_SESSION['ufirst_name']. " " .$_SESSION['ulast_name']; ?></p>
            <strong><p class='p1'>Gender :</strong> <?php echo $_SESSION['ugender']; ?></p>
            <strong><p class='p1'>Plan:</strong> <?php
            if("p1"==$_SESSION['uplan']) {
                echo "Individual & Family Plans";
            }
            else if("p2"==$_SESSION['uplan']) {
                echo "Group Health Insurance Plans";
            }
            else if("p3"==$_SESSION['uplan']) {
                echo "Medicare & Medicaid Plans";
            }
            else if("p4"==$_SESSION['uplan']) {
                echo "Short-Term Health Insurance";
            }
            else if("p5"==$_SESSION['uplan']) {
                echo "Emergency Services";
            }
            else if("p6"==$_SESSION['uplan']) {
                echo "Elder Citizen Coverage";
            }
            else {
                echo "No plan selected";
            }
           
            
            
            ?></p>
             <strong><p class='p1'>Email :</strong> <?php echo $_SESSION['uemail']; ?></p>
             <strong><p class='p1'>Address :</strong> <?php echo $_SESSION['uaddress']; ?></p>
        </div>

<div class="section">
            <h3>Annual Payment Details</h3>
            <button class='b2' onclick="window.location.href='./annualfee/annualfee.php';">Annual payment Options</button>
            
        </div>

        <div class="section">
            <h3>Claim Requests</h3>
            <button class='b2' onclick="window.location.href='./claim/claim.php';">claim request Options</button>
            
        </div>

        <div class="section">
            <h3>Add a complaint</h3>
            <button class='b2' onclick="window.location.href='./complain/complaint.php';">complaint options</button>
            
        </div>

        <div class="section">
            <h3>Update User details</h3>
            <button class='b2' onclick="window.location.href='./user/user_details.php';">Options</button>
            
        </div>

    </div>

<?php include('./footer/footer.php')?>