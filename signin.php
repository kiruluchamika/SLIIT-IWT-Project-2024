<?php include('./inc/config.php'); 

session_start();
//check user is logged in
if(isset($_SESSION['user_id'])) {
    header('Location: ./home.php');
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
	<link rel="stylesheet" href="./styles/signinstyle.css">
    
	
</head>

<?php include('./header/header.php')?>	

<!-- form content -->

<div class="login-container">
        <div class="login-box">
            <h2>Log In</h2>
            <form action="./inc/signin.inc.php" method="post">
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

                <div class="forgot-password">
                    <a href="#">Forgot Password?</a>
                </div>

                
                
            </form>
        </div>
    </div>



<!-- form content -->


<?php include('./footer/footer.php')?>