<?php 
    $title = 'Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php'; 
    require_once "sendemail.php";

    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $datein = $_POST['datein'];
        $dateout = $_POST['dateout'];
        $vehicle_type = $_POST['vehicle_type'];
        $plate_number = $_POST['plate_number'];
        $email = $_POST['email'];
        $visit_purpose = $_POST['visit_purpose'];
        //Call function to insert and track if success or not
        $isSuccess = $crud->insertVisitors($fname,$lname,$datein,$dateout,
        $vehicle_type,$plate_number,$email,$visit_purpose);

        if($isSuccess){
            SendEmail::SendMail($email, 'Your visitor have been granted access', 'Sir/Madam ' . $fname . ' '.$lname.',
            For any further queries, feel free to write to us or give us a call.');
            include 'includes/successmessage.php'; 
        }
        else{
            include 'includes/errrormessage.php';
        }
    }

?>

    <h1 class="text-center text-success">Visitor Have Been Logged!</h1>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['firstname'].''.$_POST['lastname']; ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                Make of Vehicle: <?php echo $_POST['vehicle_type']; ?>
            </h6>
            <p class="card-text">
                Date In: <?php echo $_POST['datein']; ?>
            </p>
            <p class="card-text">
                Date Out: <?php echo $_POST['dateout']; ?>
            </p>
            <p class="card-text">
                Vehicle Plate Number: <?php echo $_POST['plate_number']; ?>
            </p>
            <p class="card-text">
                Resident Email Address: <?php echo $_POST['email']; ?>
            </p>
            <p class="card-text">
                Purpose of Visit: <?php echo $_POST['visit_purpose']; ?>
            </p>
        </div>
    </div>

<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
