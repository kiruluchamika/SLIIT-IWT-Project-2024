<?php session_start();?>
<?php require_once('./inc/config.php'); ?>

<?php


// Fetch all records
$sql = "SELECT * FROM plan;";
$result = $conn->query($sql);
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
	<link rel="stylesheet" href="./styles/employeedetailsstyles.css">
    
	
</head>

<?php include('./header/header.php')?>	



    <div class="main">
<h2>PLAN PRICES & DETAILS</h2>
</div>


    <a href="./plandetails.php"><button class = "add-btn" >Back To Plan Details</button></a>
   <center> <table border="4">
        <tr>
            <th>plan Name</th>
            <th>Plan Fee</th>
            <th>Plan Duration</th>
            

        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            
            
            <td><?php echo $row['planName']; ?></td>
            <td><?php echo $row['planFee']; ?></td>
            <td><?php echo $row['duration']; ?></td>
            
        </tr>
        <?php } ?>
    </table></center>


<?php include('./footer/footer.php')?>