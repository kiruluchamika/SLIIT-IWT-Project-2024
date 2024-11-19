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
    $file = $_POST['fileReferance']; 
    $note = $_POST['note']; 

    $sql = "INSERT INTO claim (UID, filereferance, note) VALUES ('$UID', '$file', '$note')";

    if ($conn->query($sql) === TRUE) {
        header("Location: claim.php?msg=Added Successfully");
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
	<link rel="stylesheet" href="claimstyle.css">
    
	
</head>

<?php include('../header/headerlog.php')?>

    <div class="addfile">

<h2>Add New Claim</h2>
    <form action="" method="POST">
        REFERANCE CODE : <input type="text" name="fileReferance" required><br><br>
        NOTE : <input type="text" name="note" required><br><br>


        <input type="submit" name="submit" value="Submit">
    </form>

    </div>


<?php include('../footer/footer.php')?>
