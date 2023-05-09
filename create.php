<?php 
include 'connect.php';
if(isset($_POST['submit'])){
    $first_name = $_POST['fname'];
    $last_name =$_POST['lname'];
    $email =$_POST['email'];
    $password =$_POST['pwd'];
    $gender = $_POST['gender'];
    
    $sql = "INSERT INTO USERS(fname,lname,email,pwd,gender) VALUES ('$first_name','$last_name','$email','$password','$gender')";
    $result = $connect->query($sql);
    if($result == true){
        // echo "Data inserted successfully!!!"; 
        header('location:display.php');
    }else{
        echo 'Error:',$sql.'<br>'.$conn ->error;
    }
    $conn->close();
}
?>