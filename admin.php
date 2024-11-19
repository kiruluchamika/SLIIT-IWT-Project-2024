<!-- This is the admin Sign In page And We Did not put a Button for a Admin Loggin Because  URL (Best for Security)-->
<!-- So Admin Wants to logging the admin dashboard, He has to Use this php file (carepro/admin.php) -->

<!-- By Kirulu -->

<?php include('./inc/config.php')?>


<?php 

session_start();
//check user is logged in
if(isset($_SESSION['adminID'])) {
    header('Location: ./admin/admindash.php');
    exit();
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
	<link rel="stylesheet" href="./styles/adminstyle.css">
    
	
</head>

    <?php include('./header/header.php')?>	

    <!-- form content -->

<div class="login-container">
        <div class="login-box">
            <h2>ADMIN LOG IN</h2>
            <form action="./inc/adminsignin.inc.php" method="post">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" placeholder="Email address" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>

                <button type="submit" class="login-btn" name="submit">Log In</button>
                  
                <center><?php

                // Check if the 'message' parameter is set in the URL
                if (isset($_GET['message'])) {
                    // Get the message from the URL and sanitize it
                    $message = htmlspecialchars($_GET['message'], ENT_QUOTES, 'UTF-8');
                    
                    // Display the message
                    echo "<div class='alert alert-danger'>$message</div>";
                }
                ?></center>
                
            </form>
        </div>
    </div>

<!-- form content -->




    <?php include('./footer/footer.php')?>