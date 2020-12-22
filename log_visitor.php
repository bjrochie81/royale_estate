<?php 
    $title = 'Log Visitor';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 

    $results = $crud->getVisitorsPurpose();
?>
<h1 class="text-center">Visitor Log Book</h1>

<form method="post" action="success.php">
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input required type="text" class="form-control" id="firstname" name="firstname">            
    </div>
    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input required type="text" class="form-control" id="lastname" name="lastname">            
    </div>
    <div class="form-group">
        <label for="datein">Date In</label>
        <input type="text" class="form-control" id="datein" name="datein" >            
    </div>
    <div class="form-group">
        <label for="dateout">Date Out</label>
        <input type="text" class="form-control" id="dateout" name="dateout">            
    </div>
    <div class="form-group">
        <label for="vehicle_type">Make of Vehicle</label>
        <input type="text" class="form-control" id="vehicle_type" name="vehicle_type">            
    </div>
    <div class="form-group">
        <label for="plate_number">Licence Plate Number</label>
        <input type="text" class="form-control" id="plate_number" name="plate_number"> 
    </div>
    <div class="form-group">
        <label for="email">Resident Email Address</label>
        <input required type="email" class="form-control" id="email" name="email" aria-describeby="emailHelp"> 
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
    <button type="submit" name="submit"  class="btn btn-primary btn-block">Submit</button>
</form>

<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
