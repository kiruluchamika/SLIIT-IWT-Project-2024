<?php session_start();?>
<?php require_once('../inc/config.php'); ?>


<?php 
	//check if a user is logged in
	if(!isset($_SESSION['user_id'])){
		header("Location: ../signin.php?message=not_login");
	} 
?> 

<?php 

if (isset($_POST['submit'])) {
    $UID = $_SESSION['user_id']; 
    $type = $_POST['type']; 
    $description = $_POST['description']; 
   


    $sql = "INSERT INTO complaint (UID, type, description) VALUES ('$UID', '$type', '$description')";

    if ($conn->query($sql) === TRUE) {
        header("Location: complaint.php?msg=Added Successfully");
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
	<link rel="stylesheet" href="complaintstyle.css">
    
	
</head>

<?php include('../header/headerlog.php')?>

    <div class="addfile">

<h2>Add New Complaint</h2>
    <form action="" method="POST">
    Complaint Type:
        <select name="type" required>
            <option value="" disabled>Select a type</option>
            <option value="Information">Information</option>
            <option value="Complaint">Complaint</option>
            <option value="Other">Other</option>
        </select><br><br>

        Description : <input type="text" name="description" required><br><br>
        

        <input type="submit" name="submit" value="Submit">
    </form>

    </div>


<?php include('../footer/footer.php')?>
