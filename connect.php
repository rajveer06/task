<?php
    $firstName = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Your Message'];

    $conn = new mysqli('localhost','root','','contact');
    if($conn->connect_error){
      die('Connection Failed : ' _$conn->connect_error);
    }else{
      $stmt = $conn->prepare("insert into registration(Name , Email , Your Message)
          values(?,?,?)");
      $stmt ->bind_param("sss",$firstName, $email, $message);
      $stmt ->execute();
      echo "registeration successfully...";
      $stmt ->close();
      $conn ->close();
    }
 ?>
