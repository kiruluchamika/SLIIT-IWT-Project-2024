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
	<link rel="stylesheet" href="./styles/signupstyle.css">
    
	
</head>

<?php include('./header/header.php')?>	

<!-- form content -->

<div class="fbody">

<div class="signup-form">
        <h2>SIGN UP</h2>
        <form action="./inc/signup.inc.php" method="post">
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="fname" required>
            </div>

            <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="lname" required>
            </div>

            <div class="form-group">
                <label>Gender</label>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
            </div>

            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="tel" id="mobile" name="mobile" maxlength="11" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>

            <div class="form-group">
                <label for="plan">Choose Plan</label>
                <select id="plan" name="plan" required >
                    <option value="" disabled selected>-Select a plan-</option>
                    <option value="p1">Individual & Family Plans</option>
                    <option value="p2">Group Health Insurance Plans</option>
                    <option value="p3">Medicare & Medicaid Plans</option>
                    <option value="p4">Short-Term Health Insurance</option>
                    <option value="p5">Emergency Services</option>
                    <option value="p6">Elder Citizen Coverage</option>
                </select>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="pwd" required>
            </div>

            <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                <input type="password" id="password-confirm" name="pwdrepeat" required pattern="[A-Za-z0-9]{8,}" title="Password must be at least 8 characters long and contain only letters and numbers.">
            </div>

            <div class="form-group">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">
                I accept the <a href="./terms.php" target="_blank">terms & conditions</a>
                </label>
            </div>

            <div class="form-group">
                <button type="submit" class="submit-btn" name="submit">Submit</button>
            </div>

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




<!-- form content -->


<?php include('./footer/footer.php')?>