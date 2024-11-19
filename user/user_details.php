<?php session_start();?>
<?php $_SESSION['user_id']?>
<?php require_once('../inc/config.php'); ?>


<?php 
	//check if a user is logged in
	if(!isset($_SESSION['user_id'])){
		header("Location: ../signin.php?message=not_login");
	} 
?> 


<?php

$uid=$_SESSION['user_id'];
// Fetch all records
$sql = "SELECT * FROM user WHERE UID = '$uid'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarePro Insurance</title>
	<link rel="icon" type="image/png" href="../images/Logo3t.png">
	
	<!-- ADD CSS FILES -->
    <link rel="stylesheet" href="../styles/generalstyle.css">
	<link rel="stylesheet" href="./complaintstyle.css">
    <link rel="stylesheet" href="./userdetailsstyle.css">
	
</head>


<?php include('../header/headerlog.php')?>
    
<div class="size">

    <?php 
	 $row = $result->fetch_assoc();
    ?>
    
    <div class="profile-card">
        <div class="profile-header">
            <h2>Welcome, <?php echo $row['first_name'] . ' ' . $row['last_name']; ?></h2>
			<h4>Your Account Details</h4>
        </div>
        <div class="profile-content">
            <p><strong>First Name:</strong> <?php echo $row['first_name']; ?></p>
            <p><strong>Last Name:</strong> <?php echo $row['last_name']; ?></p>
            <p><strong>Gender:</strong> <?php echo $row['gender']; ?></p>
			<p><strong>Phone Number:</strong> <?php echo $row['phone_No']; ?></p>
			<p><strong>Email:</strong> <?php echo $row['email']; ?></p>
			<p><strong>Address:</strong> <?php echo $row['address']; ?></p>
			<p><strong>DOB:</strong> <?php echo $row['dob']; ?></p>
			<p><strong>Plan ID:</strong> <?php 
            
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
            } ?></p>
            
			<p><strong>Password:</strong> <?php echo $row['password']; ?></p>
           <div class="btn">
		   <a href="user_update.php?UID=<?php echo $row['UID']; ?>"><button class="callupdate">Update info<title></title></button></a>
		   </div>
        </div>
    </div>

    <center><?php

    // Check if the 'message' parameter is set in the URL
if (isset($_GET['msg'])) {
    // Get the message from the URL and sanitize it
    $message = htmlspecialchars($_GET['msg'], ENT_QUOTES, 'UTF-8');
    
    // Display the message
    echo "<div class='alert alert-success'>$message</div>";
}
?></center>

    </div>

    <?php include('../footer/footer.php')?>