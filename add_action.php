<?php
require("function.php");
$conn=getconn();

$full_name = $_REQUEST["full_name"];
$last_name = $_REQUEST["last_name"];
$address = $_REQUEST["address"];
$contact_no = $_REQUEST["contact_no"];

$sql = "INSERT INTO `users` (`id`, `full_name`, `contact_no`,`address`, `last_name`) VALUES   (NULL, '$full_name','$contact_no', '$address', '$last_name')";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$records = $stmt->fetchAll();

if($result) {

        header("Location: listing.php?msg=Record added successfully");

} else {

        header("Location:  listing.php?msg=Something went wrong. Please try again later");

}
