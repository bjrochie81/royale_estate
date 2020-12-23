<?php 
    require_once 'db/conn.php';
    //Get value from post operation
    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $datein = $_POST['datein'];
        $dateout = $_POST['dateout'];
        $vehicle_type = $_POST['vehicle_type'];
        $plate_number = $_POST['plate_number'];
        $email = $_POST['email'];
        $visit_purpose = $_POST['visit_purpose'];
        
        //Call crud function
        $result = $crud->editVisitor($id,$fname,$lname,$datein,$dateout,$vehicle_type,$plate_number,
        $email,$visit_purpose);
        //Redirect to viewrecords.php
        if($result){
            header("Location: viewrecords.php");
        }
        else{
            include 'includes/errormessage.php';
        }
    }
    else{
        include 'includes/errormessage.php';
    }

?>