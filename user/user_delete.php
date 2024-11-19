<?php session_start();?>
<?php require_once('../inc/config.php'); ?>

<?php

if (isset($_GET['UID'])) {
    $id = $_GET['UID'];

    $sql = "DELETE FROM user WHERE UID=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../admin/adminusermanage.php?action=deleted successfully");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>