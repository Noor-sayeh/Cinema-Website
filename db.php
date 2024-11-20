<?php

$db=mysqli_connect(hostname:"localhost",username:"root",password:"",database:"cinema");

if(mysqli_connect_errno()){
    echo "Failed to connect to mysql:" .mysqli_connect_errno();
}



?>