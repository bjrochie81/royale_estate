<?php 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    if(!$_GET['id']){
        include 'includes/errrormessage.php';
        header("Location: viewrecords.php");
    }else{
        // Get id values
        $id = $_GET['id'];

        //Call delete function
        $result = $crud->deleteVisitor($id);
        //Redirect to list
        if($result)
        {
            header("Location: viewrecords.php");
        }
        else{
            include 'includes/errrormessage.php';
        }
    }
?>