<?php

    session_start();
    $date = date('Y-m-d H:i:sa');


    $lastname = $_POST['lname'];
    $firstname = $_POST['fname'];
    $middlename = $_POST['mname'];
    $brgyid = $_POST['brgy-id'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $department = $_POST['department'];
    $doctor= $_POST['doctor'];
    $date = $_POST['date'];

    // Connection
    $conn = new mysqli('localhost', 'root', '', 'bhcis');

    if($conn->connect_error){
        die("Connection Failed:" .$conn->connect_error());
        $_SESSION['status'] = "Date Time Not Inserted";
    } else{
        $statement = $conn->prepare("INSERT INTO tblappointment (lname,fname,mname,email,phone,brgyid,department,physician,app_) 
            VALUES (?,?,?,?,?,?,?,?,?)");
        $statement->bind_param("ssssiisss",$lastname,$firstname,$middlename,$email,$phone,$brgyid,$department,$doctor,$date);
        $statement->execute();
        $_SESSION['status'] = "Date Time Inserted Successfully";
        $statement->close();
        $conn->close();
    }
?>
