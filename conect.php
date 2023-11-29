<?php
  $username=$_POST['username'];
  $password=$_POST['password'];
  $con+ new mysqli('localhost','root','','test');
  if($con->connect_error){
    die('Connection Failed : '.$con->connect_error);
  } else {
    $stmt=$con->prepare("insert into loginpage(username,password) values(?,?)");
    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    echo "login successfully....";
    $stmt->close();
    $con->close();
  }

?>