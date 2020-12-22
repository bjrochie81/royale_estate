<?php 
    $title = 'View Record';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    // Get visitor by id
    if(!isset($_GET['id'])){
        echo "<h1 class='text-danger'>Please check details and try again</h1>";
    } else{
        $id = $_GET['id'];
        $result = $crud->getVisitorDetails($id);
            
?>

    <div class="card" style="width: 18rem;">    
         <div class="card-body">
            <h5 class="card-title">
                <?php echo $result['firstname'].''.$result['lastname']; ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                Make of Vehicle: <?php echo $result['vehicle_type']; ?>
            </h6>
            <p class="card-text">
                Date In: <?php echo $result['datein']; ?>
            </p>
            <p class="card-text">
                Date Out: <?php echo $result['dateout']; ?>
            </p>
            <p class="card-text">
                Vehicle Plate Number: <?php echo $result['plate_number']; ?>
            </p>
            <p class="card-text">
                Resident Email Address: <?php echo $result['email']; ?>
            </p>
            <p class="card-text">
                Purpose of Visit: <?php echo $result['name']; ?>
            </p>
        </div>      
    </div>
    <br/>
            <a href="viewrecords.php" class="btn btn-info">Back to Back</a>
            <a href="edit.php?id=<?PHP echo $result['visitor_id'] ?>" class="btn btn-warning">Edit</a>
            <a onclick="return confirm('Are you sure you want to delete this record?');"
            href="delete.php?id=<?PHP echo $result['visitor_id'] ?>" class="btn btn-danger">Delete</a>
    <?php } ?>

<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>