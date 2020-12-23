<?php 
    $title = 'Edit Record';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 

    $results = $crud->getVisitorsPurpose();
    if(!isset($_GET['id']))
    {
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }
    else{
        $id = $_GET['id'];
        $visitor = $crud->getVisitorDetails($id);
    
    
?>
<h1 class="text-center">Edit Visitor Record</h1>

<form method="post" action="editpost.php">
    <input type="hidden" name="id" value="<?php echo $visitor['visitor_id'] ?>" />
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" value="<?php echo $visitor['firstname'] ?>" 
        id="firstname" name="firstname">            
    </div>
    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" value="<?php echo $visitor['lastname'] ?>" 
        id="lastname" name="lastname">            
    </div>
    <div class="form-group">
        <label for="datein">Date In</label>
        <input type="text" class="form-control" value="<?php echo $visitor['datein'] ?>" 
        id="datein" name="datein" >            
    </div>
    <div class="form-group">
        <label for="dateout">Date Out</label>
        <input type="text" class="form-control" value="<?php echo $visitor['dateout'] ?>" 
        id="dateout" name="dateout">            
    </div>
    <div class="form-group">
        <label for="vehicle_type">Make of Vehicle</label>
        <input type="text" class="form-control" value="<?php echo $visitor['vehicle_type'] ?>" 
        id="vehicle_type" name="vehicle_type">            
    </div>
    <div class="form-group">
        <label for="plate_number">Licence Plate Number</label>
        <input type="text" class="form-control" value="<?php echo $visitor['plate_number'] ?>" 
        id="plate_number" name="plate_number"> 
    </div>
    <div class="form-group">
        <label for="email">Resident Email Address</label>
        <input type="email" class="form-control" value="<?php echo $visitor['email'] ?>" 
        id="email" name="email" aria-describeby="emailHelp"> 
        <small id="emailHelp" class="form-text text-mute">We'll never share your licence plate 
        number with anyone else.</small>         
    </div>
    <div class="form-group">
        <label for="visit_purpose">Purpose of Visit</label>
        <select class="form-control" id="visit_purpose" name="visit_purpose">
            <?PHP while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                <option value="<?PHP echo $r['visit_purpose_id'] ?>"><?PHP echo $r['name']; ?></option>
                <?PHP }?>
        </select>
    </div>
    <button type="submit" name="submit"  class="btn btn-info btn-block">Save Changes</button>
</form>

<?php } ?>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>