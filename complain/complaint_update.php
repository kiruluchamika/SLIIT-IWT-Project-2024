<?php session_start();?>
<?php require_once('../inc/config.php'); ?>



<?php 
	//check if a user is logged in
	if(!isset($_SESSION['user_id'])){
		header("Location: ../signin.php?message=not_login");
	} 
?> 

<?php 
if (isset($_GET['UID'])) {
    $id = $_GET['UID'];

    $sql = "SELECT * FROM complaint WHERE complaintID = '$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if (isset($_POST['submit'])) {
    $complaintID = $_GET['UID'];
    $UID = $_SESSION['user_id']; 
    $type = $_POST['type']; 
    $description = $_POST['description']; 
	

    $sql = "UPDATE complaint SET UID='$UID', type='$type', description='$description' WHERE complaintID='$complaintID'";

    if ($conn->query($sql) === TRUE) {
        header("Location: ./complaint.php?msg=Updated Successfully");
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
	<link rel="icon" type="image/png" href="../images/Logo3t.png">
	
	<!-- ADD CSS FILES -->
    <link rel="stylesheet" href="../styles/generalstyle.css">
	<link rel="stylesheet" href="./complaintstyle.css">
    
	
</head>

<?php include('../header/headerlog.php')?>


<div class="updatefile">

<h2>UPDATE COMPLAINT</h2>
    <form action="" method="POST">
    Complaint Type:
        <select name="type" required>
            <option value="">Select a type</option>
            <option value="Information">Information</option>
            <option value="Complaint">Complaint</option>
            <option value="Other">Other</option>
        </select><br><br>

        Description : <input type="text" name="description" required><br><br>
        

        <input type="submit" name="submit" value="Submit">
    </form>

</div>


<?php include('../footer/footer.php')?>
