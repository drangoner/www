<?php 
$link = mysqli_connect('localhost','root','','spider'); 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysql_error()); 
} 
$link->query("SET NAMES 'utf8'");
$sql = "SELECT * FROM bobao";
$result  = $link->query($sql);
echo "<head><meta charset='utf-8'/></head>";
if($result){
	while($row = $result->fetch_assoc()){
		echo "<br/> title:".$row["title"]."<br/> source:".$row["source"];
	}
}else{
	echo "0 result!";
}
echo 'Connection OK'; $link->close(); 
?> 