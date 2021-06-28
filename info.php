<?php
$connection = new mysqli("localhost","root","","arm_control");
	 $stmt= $connection->prepare("select * from robots");
	$stmt->execute();
	$result= $stmt->get_result();
	
	while($row = $result ->fetch_assoc()){
	
	        
	echo "motor1= " .$row["motor1"]. ", motor2= " .$row["motor2"]. ", motor3= " .$row["motor3"] . ", motor4= " .$row["motor4"] . ", motor5= " .$row["motor5"] . ", motor6= " .$row["motor6"] . ", play= " .$row["play"];
}
?>
