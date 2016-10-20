<?php
include "contect.php";//contect to mysql;

$html ="<ul>";
$sql = "SELECT * FROM bobao ORDER BY release_time DESC LIMIT 10";
$result = $link->query($sql);

if($result){
	while($row = $result->fetch_assoc()){
		$html = $html."<li><a href='".$row["url"]."'>".$row["title"]."</a><br><p>".$row["release_time"]."&nbsp;&nbsp;&nbsp;".$row["source"]."</p><hr></li>";
	}
}else{
	echo "0 result!";
}
echo $html;
?>