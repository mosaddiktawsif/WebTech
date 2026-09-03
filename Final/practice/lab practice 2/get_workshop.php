<?php
require 'db.php';
header('Content-Type: application/json');

$sql = "SELECT id, title, date FROM workshops";
$result = mysqli_query($conn, $sql); 

$workshops = [];
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $workshops[] = $row;
    }
}


echo json_encode($workshops);
mysqli_close($conn);
?>