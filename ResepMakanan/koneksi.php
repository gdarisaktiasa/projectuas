<?php
$server="localhost";
$username="	id13853977_root";
$password="(_]B+]5$0<vQ(J~K";
$dbname="id13853977_gdari";

$conn = new mysqli($server,$username,$password,$dbname);

if ($conn->connect_error) {
	die("koneksi gagal/failed ".$conn->connect_error);
}
$sql="SELECT * FROM t_menu";
$result=$conn->query($sql);
$data=array();

if ($result->num_rows>0) {
	while ($row=$result->fetch_assoc()) {
		$data[]=$row;
	}
	}else{
		echo "data kosong";
	}
	echo json_encode($data);
	$conn->close();
?>