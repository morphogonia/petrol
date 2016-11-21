<?php
include('conection.inc');

$id = $_GET['id'];
$sql = mysql_query("SELECT * FROM tb_images WHERE cat='$id' ORDER BY ord DESC");

while($row = mysql_fetch_array($sql)) {
	$results[] = array(
      'image' => $row['image'],
	);
}
echo json_encode($results);
?>