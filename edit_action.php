<?php

require("dbconn.php");

//$conn = getConn();
$id = $_REQUEST['id'];
$full_name = $_REQUEST['full_name'];
$phone_number= $_REQUEST['last_name'];
$address = $_REQUEST['address'];
$contact_no = $_REQUEST['contact_no'];


error_log($sql);
$sql = "UPDATE `users` SET `full_name` = '$full_name', `last_name` = '$phone_number', `address` = '$address', `contact_no` = '$contact_no' WHERE `users`.`id` = $id";

$stmt = $conn->prepare($sql);
$stmt->execute();
//$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//$record = $stmt->fetchAll();


header("Location: listing.php?msg=Record added successfully");

?>
