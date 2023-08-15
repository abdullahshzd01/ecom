<?php
    
    // Create connection
    $mysql = new mysqli("localhost", "root", "", "riode_e-business");

    // Check connection
    if ($mysql->connect_error)
    {
        echo "Failed to connect to MySQL: " . $mysql -> connect_error;
        exit();
    }

    $action = $_POST['action'];
    $Cart = $_POST['cart'];
    $custID = $_POST['cutomer'];
    $pID = $_POST['ProductId'];
    $Price = $_POST['price'];
    $qntty = $_POST['quantity'];
    // $subtotal = $_POST['ProductId'];     calculated at run time
    // $DATE = $_POST['ProductId'];         current time to inserted

    $query1 = "INSERT into cart values('".$Cart."','".$PID."','".$Price."','".$qntty."','".$Price*$qntty."','".$custID."',GETDATE())";
    $query2 = "DELETE 
            FROM cart
            WHERE productId = '".$PID."'";
    $query3 = "UPDATE cart 
            SET quantity = '".$qntty."'
            SET price = '".$Price*$qntty."'
            WHERE productId = '".$PID."'";
    
    if ($action = "add")
    {
        $q_id = mysqli_query($con,$query1);
    }
    else if ($action = "rmv")
    {
        $q_id = mysqli_query($con,$query2);
    }
    else if ($action = "updt")
    {
        $q_id = mysqli_query($con,$query3);
    }
    
    $mysql->close();
?>