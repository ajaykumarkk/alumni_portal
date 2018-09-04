<?php
$conn = mysqli_connect("localhost", "root", "");
$DBname='iidt';

if(mysqli_select_db( $conn,$DBname)){
    echo "already setup is done\n";
}else{
    //echo "Databse does not exists";
    $query="CREATE DATABASE IF NOT EXISTS ".$DBname;
    //$con=mysqli_connect("localhost", "root", "",$DBname);
    $result=mysqli_query($conn,$query);
    if($result){
        echo "db setup is done\n";
        $conn = mysqli_connect("localhost", "root", "",$DBname);
        $query="CREATE TABLE  users(id INT(200) PRIMARY KEY AUTO_INCREMENT,username varchar(100) not null,password varchar(100) not null,fullname varchar(100)not null,dob varchar(100) not null,lastlogin varchar(100),profilepicpath varchar(100))";
        $result=mysqli_query($conn,$query);
        if($result){
            $query="INSERT INTO users(username,password,fullname,dob) VALUES ('test@iidt.edu.in','".md5('password')."','testuser','01/10/1995')";
            $result=mysqli_query($conn,$query);
            if($result){
                echo "user tables created\n";
                echo "db setup completed";
            }
            else{
                echo $result;
            }


        }else{
            echo"failed";
        }

    }
}
    ?>
    