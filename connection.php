<?php

    $servername = "";
    $username = "";
    $password = "";
    $dbname = "";
//insert your servername, username ,password and database name in which you want to enter your data.
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
