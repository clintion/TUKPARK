<?php 
$bkarea = $_GET['bkarea'];
$bkslot = $_GET['bkslot'];
$slotid = $_GET['slotid'];


$conn = new mysqli("localhost","root","","eh");
$query = "SELECT * FROM `userbook` WHERE userbook.bkarea = '$bkarea' AND userbook.bkslot = '$bkslot'";

$rs = $conn->query($query);
if($rs->num_rows > 0){
	echo "booked";
}else{
	echo "vacant";
}
?>