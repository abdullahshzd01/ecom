<?php
    if ($_POST["adminProduct"])
    {
        // Create connection
        $mysql = new mysqli("localhost", "root", "", "riode_e-business");

        // Check connection
        if ($mysql->connect_error)
        {
            echo "Failed to connect to MySQL: " . $mysql -> connect_error;
            exit();
        }

        $action = $_POST['action'];
        $pID = $_POST['ProductId'];
        $Price = $_POST['price'];
        $status = $_POST['StckSts'];
        $Pic = $_POST['PicID'];
        $Name = $_POST['Pname'];
        $category = $_POST['category'];

        $query1 = "INSERT into product values('".$pID."','".$Price."','".$status."','".$Pic."','".$Name."','".$category."')";
        $query2 = "DELETE 
                FROM product
                WHERE productId = '".$PID."'";
        $query3 = "UPDATE product 
                SET price = '".$price."'
                WHERE productId = '".$PID."'";
        $query4 = "SELECT * 
                FROM product
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
        else if ($action = "retrv")
        {
            $q_id = mysqli_query($con,$query4);
        }

        $mysql->close();
    }
    if ($_POST["adminCust"])
    {
        // Create connection
        $mysql = new mysqli("localhost", "root", "", "riode_e-business");

        // Check connection
        if ($mysql->connect_error)
        {
            echo "Failed to connect to MySQL: " . $mysql -> connect_error;
            exit();
        }

        $action = $_POST['action'];
        $cID = $_POST['CustomerID'];
        $Address = $_POST['addr'];
        $Name = $_POST['name'];
        $Phone = $_POST['phone'];
        $SSN = $_POST['ssn'];

        $query1 = "INSERT into product values('".$CID."','".$Address."','".$Name."','".$Phone."','".$SSN."')";
        $query2 = "DELETE 
                FROM customer
                WHERE customerId = '".$cID."'";
        $query3 = "UPDATE customer 
                SET address = '".$Address."'
                WHERE customerId = '".$cID."'";
        $query4 = "SELECT * 
                FROM customer
                WHERE customerId = '".$cID."'";

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
        else if ($action = "retrv")
        {
            $q_id = mysqli_query($con,$query4);
        }

        $mysql->close();
    }
    else {
        echo "Permission denied please go back";
    }
?>