<?php
session_start();
include 'connect.php';
if(isset($_POST['email']) && isset($_POST['pwd'])){
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email = validate($_POST['email']);
    $password = validate($_POST['pwd']);
    if(empty($email) || empty($password)){
        header("Location: display.php?error=Email and password are required");
        exit();
    }else{
         $sql = "SELECT * FROM users WHERE email='$email' AND pwd='$password'";
         $result = mysqli_query($connect,$sql);
         if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if($row['email'] === $email && $row['pwd'] === $password){
                $_SESSION['email'] = $row['email'];
                $_SESSION['pwd'] = $row['pwd'];
                $_SESSION['id'] = $row['id'];
                header("Location: display.php");
                exit();
            }else{
                header("Location: display.php?error=Incorrect username or password");
                exit();
            }
         }else{
            header("Location: display.php?error=Incorrect username or password");
            exit();
         }
    }

}else{
    header("Location: display.php");
    session_destroy();
    exit();
   
}
