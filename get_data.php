<?php
// Use your database connection credentials appropriate for your setup
$servername = "web-snake02.native-webspace.com";
$username = "bbuser";
$password = '4ne$Gk274';
$dbname = "hypaxna1_bbdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT DISTINCT brand, model FROM vehicles";
$result = $conn->query($query);

$data = array(
    'brands' => array(),
    'models' => array()
);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $brand = $row['brand'];
        $model = $row['model'];

        $data['brands'][] = $brand;
        $data['models'][$brand][] = $model;
    }
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($data);
