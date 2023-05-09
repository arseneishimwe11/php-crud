<?php
include "connect.php";
if(isset($_POST['export'])){
    header('Content-type: text/csv;charset=utf-8');
    header('Content-Disposition: attachment;filename=data.csv');
    $output = fopen("php://output","w");
    $query = "SELECT * FROM users ORDER BY id DESC";
    $result = mysqli_query($connect,$query);
    while($row = mysqli_fetch_assoc($result)){
        fputcsv($output,$row);
    }
    fclose($output);
}else{
    echo "Not downloaded";
}
?>