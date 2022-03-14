<?php
require("dbconn.php");

$stmt = $conn->prepare("DELETE FROM users WHERE id = $_REQUEST[id];");
$stmt->execute();
$result         = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$records = $stmt->fetchAll();

header("Location: listing.php");
