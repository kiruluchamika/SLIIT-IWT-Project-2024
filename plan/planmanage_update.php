<?php session_start();?>
<?php require_once('../inc/config.php'); ?>


<?php 
	//check if a admin is logged in
	if(!isset($_SESSION['adminID'])){
		header("Location: ../admin.php?message=not_login");
	} 
?>

<?php 
if (isset($_GET['UID'])) {
    $eid = $_GET['UID'];

    $sql = "SELECT * FROM plan WHERE planID = '$eid'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if (isset($_POST['submit'])) {
    $planName = $_POST['planName']; 
    $planFee = $_POST['planFee']; 
    $duration = $_POST['duration'];  
	

    $sql = "UPDATE plan SET planName='$planName', planFee='$planFee', duration='$duration' WHERE planID='$eid'";

    if ($conn->query($sql) === TRUE) {
        header("Location: ./planmanage.php?msg=Updated Successfully");
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

<?php include('../header/headerlog.php')?>

    <div class="addfile">

<h2>Update Plan</h2>
    <form action="" method="POST">
        Plan Name : <input type="text" name="planName" value="<?php echo $row['planName']; ?>" required><br><br>
        Plan Fee : <input type="text" name="planFee" value="<?php echo $row['planFee']; ?>" required><br><br>
        Duration : <input type="text" name="duration" value="<?php echo $row['duration']; ?>" required><br><br>
        

        <input type="submit" name="submit" value="Submit">
    </form>

    </div>


<?php include('../footer/footer.php')?>

