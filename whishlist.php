<?php
    // Create connection
    $mysql = new mysqli("localhost", "root", "", "riode_e-business");

    // Check connection
    if ($mysql->connect_error)
    {
        echo "Failed to connect to MySQL: " . $mysql -> connect_error;
        exit();
    }

    $PID = $_POST['ProductId'];
    $action = $_POST['action']

    $query1 = "INSERT into whishlist values('".$PID."')";
    $query2 = "DELETE 
            FROM whishlist
            WHERE productId = '".$PID."'";
    
    if ($action = "add")
    {
        $q_id = mysqli_query($con,$query1);
    }
    else if ($action = "rmv")
    {
        $q_id = mysqli_query($con,$query2);
    }
    
    $mysql->close();
?>