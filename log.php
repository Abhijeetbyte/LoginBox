<?php


//varible setting
 $name= $_REQUEST['name'];
 $pass = $_REQUEST['pass'];
 
 $username = "admin" ;
 $password = "admin123";


// check input fields
if ( empty($name)|| empty($pass))
{
echo"<script type='text/javascript'>alert('Please fill all correct');
    window.history.go(-1);
    </script>";
}

// check credentials
if ( $name == $username && $pass == $password)
{
echo"<script type='text/javascript'>alert('Welcome !');
    window.history.go(-1);
    </script>";


 //############################################################################
 //
 //
 //                WRITE YOUR CODE HERE
 //
 //
 //##########################################################################



}

else 
{ 

    echo"<script type='text/javascript'>alert('Login failed. Invalid username or password');
    window.history.go(-1);
    </script>";
}




?>
