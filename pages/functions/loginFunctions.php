<?php
require_once "../../database/database.php";
if(isset($_POST['submit'])){
    $nameError = $passwordError = $passwordrepeatError = $emailError = '';
    $name = $_POST['name'];
    $password = $_POST['password'];
    $passwordrepeat = $_POST['passwordrepeat'];
    

    $email = $_POST['email'];
    if(empty($name)){
        $nameError = 'The name field is required';
        header('location: ../login.php?error='.$nameError);
        exit();
    }else{
        $name = test_input($name);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            $nameError = 'Only letters and white space allowed';
            header('location: ../login.php?error='.$nameError);
            exit();
        }
    }
    if(empty($password)){
        $passwordError = 'The password field is required';
        header('location: ../login.php?error='.$passwordError);
        exit();
    }elseif(empty($passwordrepeat)){
        $passwordrepeatError = 'The password repeat field is required';
        header('location: ../login.php?error='.$passwordrepeatError);
        exit();
    }else if($password !== $passwordrepeat){
        $passwordError = 'The first and second password do not match';
        header('location: ../login.php?error='.$passwordError);
        exit();
    }else{
        $password = test_input($password);
        $passwordrepeat = test_input($passwordrepeat);

    }
    if(empty($email)){
        $emailError = 'The email field is required';
        header('location: ../login.php?error='.$emailError);
        exit();
    }else {
        $email = test_input($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format";
            header('location: ../login.php?error='.$emailError);
             exit();
          }
    }

    $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $connection->prepare("INSERT INTO employers (name, email, password) VALUES (?,?,?)");
    $stmt->bind_param('sss',$name,$email,$hashPassword);
    $stmt->execute();
    $stmt->close();
    $connection->close();
    
}else{
    header('location: ../login.php');
    exit();
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>