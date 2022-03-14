<?php
require("function.php");
$conn= getConn();

if(isset($_REQUEST["search"])){
        $search  =  $_REQUEST["search"];
        $sql = "SELECT * FROM users WHERE full_name LIKE '%$search%' OR last_name LIKE '%$search%' OR address LIKE '%$search%' OR contact_no LIKE '%$search%' ORDER BY id DESC";


}else{
        $sql = "SELECT * FROM users ORDER BY id DESC";

}
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$records = $stmt->fetchAll();
//print_r($recordn);
//echo $sql;
?>
