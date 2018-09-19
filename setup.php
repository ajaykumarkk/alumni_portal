<?php
$conn = mysqli_connect("localhost", "root", "");
$DBname='iidt';
function createTable($query){
    $DBname='iidt';
    $conn = mysqli_connect("localhost", "root", "",$DBname);
    $result=mysqli_query($conn,$query);
    if ($result){
        echo "executed query ".$query;
        return TRUE;
    }else{
        echo "error executing query ".$query;
        return FALSE;
    }
}

if(mysqli_select_db( $conn,$DBname)){
    echo "already setup is done\n";
}else{
    //echo "Databse does not exists";
    $query="CREATE DATABASE IF NOT EXISTS ".$DBname;
    //$con=mysqli_connect("localhost", "root", "",$DBname);
    $result=mysqli_query($conn,$query);
    if($result){
        echo "db setup is done\n";
        if(createTable("CREATE TABLE department(d_id INT(10) PRIMARY KEY AUTO_INCREMENT,department varchar(100) not null,deptacronym varchar(5) not null)")){
            echo "department table created \n";
            $query="INSERT INTO department(department,deptacronym) VALUES ('CYBER SECURITY','CS')";
            if(createTable($query)){
                $query="CREATE TABLE  users(u_id INT(200) PRIMARY KEY AUTO_INCREMENT,username varchar(100) not null,password varchar(100) not null,fullname varchar(100)not null,batch varchar(100)not null,department INT(10) ,dob varchar(100) not null,lastlogin varchar(100),profilepicpath varchar(100),FOREIGN KEY fk_dept(department) references department(d_id))";
                if(createTable($query)){
                    echo "success";
                    $query="INSERT INTO users(username,password,fullname,batch,department,dob,profilepicpath) VALUES ('test@iidt.edu.in','".md5('password')."','testuser','2017-2018',1,'01/10/1995','images/alumni/Viswa Teja Vengala.jpg')";
                    if(createTable($query)){
                        echo "success";


                    }else{
                        echo "dummy data insertion failed in user table";

                    }
                    $query="CREATE TABLE articles(a_id INT(254) PRIMARY KEY AUTO_INCREMENT, title varchar(100), body varchar(1000),upvotes INT(250),downvotes INT(250),u_id INT(100), foreign key fk_article (u_id) references users(u_id))";
                    createTable($query);
                    $query="CREATE TABLE reactions(r_id INT(254) PRIMARY KEY AUTO_INCREMENT,u_id INT(254),votetype varchar(10),comment varchar(120),cmttimestamp varchar(100), FOREIGN KEY fk_reactions (u_id) references users(u_id))";
                    createTable($query);


                 }else{
                        echo" user table creation failed";
            }


            }else{
                echo" dummy data inserton failed in department table\n";

            }
            
        }else{
            echo "error creating department table \n";
        }

     

    }
}

    ?>
    