<?php session_start();?>
<?php require_once('../inc/config.php'); ?>

<?php

if (isset($_GET['UID'])) {
    $id = $_GET['UID'];

    $sql = "DELETE FROM plan WHERE planID='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: ./planmanage.php?msg=Deleted Successfully");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>