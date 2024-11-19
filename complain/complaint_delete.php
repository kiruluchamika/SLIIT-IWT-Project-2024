<?php session_start();?>
<?php require_once('../inc/config.php'); ?>

<?php

if (isset($_GET['UID'])) {
    $id = $_GET['UID'];

    $sql = "DELETE FROM Complaint WHERE ComplaintID=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ./Complaint.php?msg=Deleted Successfully");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
