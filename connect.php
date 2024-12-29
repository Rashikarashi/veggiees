<?php

   $con = mysqli_connect("localhost","root","","registration");
   if(!$con)
   {
    die('connection failed');
   }
   if(isset($_POST['submit']))
   {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_query = "insert into user details(name,email,password) values('$name','$email','$password);";
    if(mysqli_query($con,$sql_query))
    {
        echo "sucess";
    }
    else{
        echo "error";
    }
    mysqli_close($con);
   }