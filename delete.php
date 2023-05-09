<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM users where id=$id";
    $result = mysqli_query($connect,$sql);
    if($result == true){
        header('location:display.php');
    }else{
        echo "connection failed!!!";
    }
}

?>