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

    $sql = "SELECT * FROM employee WHERE employeeID = '$eid'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if (isset($_POST['submit'])) {
    $employeeName = $_POST['employeeName']; 
    $dob = $_POST['dob']; 
    $contact = $_POST['contact']; 
    $role = $_POST['role']; 
	

    $sql = "UPDATE employee SET employeeName='$employeeName', dob='$dob', contact='$contact', role='$role' WHERE employeeID='$eid'";

    if ($conn->query($sql) === TRUE) {
        header("Location: ./employee.php?msg=Updated Successfully");
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
	<link rel="stylesheet" href="employeestyles.css">
    
	
</head>

<?php include('../header/adminafterlog.php')?>

    <div class="addfile">

<h2>Update Employee</h2>
    <form action="" method="POST">
        Employee Name With Initials : <input type="text" name="employeeName" value="<?php echo $row['employeeName']; ?>" required><br><br>
        Date of Birth : <input type="date" name="dob" value="<?php echo $row['dob']; ?>" required><br><br>
        Contact : <input type="tel" name="contact" value="<?php echo $row['contact']; ?>" required maxlength="10"><br><br>
        Role : <input type="text" name="role" value="<?php echo $row['role']; ?>" required><br><br>
        

        <input type="submit" name="submit" value="Submit">
    </form>

    </div>


<?php include('../footer/footer.php')?>

