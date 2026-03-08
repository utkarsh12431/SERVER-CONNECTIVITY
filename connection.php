<?php

    $servername = "";
    $username = "";
    $password = "";
    $dbname = "";
//insert your servername, username ,password and database name in which you want to enter your data.
// for localhost, use servername as localhost, username as root, password will be nill and add your created database name. 
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
    	echo "connection done";
    }
    else
    {
    	echo "connection fail". mysqli_connect_error();
    }

?>
