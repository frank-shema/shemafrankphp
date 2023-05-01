<?php
require_once("connectdb.php");
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "DELETE FROM clients WHERE id=$id";
    if($connection->query($sql) === TRUE) {
        $message = "student deleted successfully.";
    } else {
        $message = "Error deleting record: " . $connection->error;
    }
}
header("location:./index.php?message=".urlencode($message));
exit;
?>
