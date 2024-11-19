<?php session_start();?>
<?php require_once('../inc/config.php'); ?>


<?php 
	//check if a admin is logged in
	if(!isset($_SESSION['adminID'])){
		header("Location: ../admin.php?message=not_login");
	} 
?> 

<?php 

if (isset($_POST['submit'])) {
    $planID = $_POST['planID']; 
    $planName = $_POST['planName']; 
    $planFee = $_POST['planFee']; 
    $duration = $_POST['duration']; 

    $sql = "INSERT INTO plan (planID, planName, planFee, duration) VALUES ('$planID', '$planName', '$planFee', '$duration')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ./planmanage.php?msg=Added Successfully");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarePro Insurance</title>
	<link rel="icon" type="image/png" href="./Logo3t.png">
	
	<!-- ADD CSS FILES -->
    <link rel="stylesheet" href="../styles/generalstyle.css">
	<link rel="stylesheet" href="./planmanagestyles.css">
    
	
</head>

<?php include('../header/adminafterlog.php')?>

    <div class="addfile">

<h2>Add New Plan</h2>
    <form action="" method="POST">
        Plan ID  : <input type="text" name="planID" required><br><br>
        Plan Name  : <input type="text" name="planName" required><br><br>
        Plan Fee : <input type="text" name="planFee" required><br><br>
        Duration : <input type="text" name="duration" required><br><br>
        

        <input type="submit" name="submit" value="Submit">
    </form>

    </div>


<?php include('../footer/footer.php')?>
