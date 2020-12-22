<?php 
    $title = 'View Records';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 

    $results = $crud->getVisitors();
?>
<h1 class="text-center">Royale Estate Application</h1>

    <table class="table">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date In</th>
            <th>Date Out</th>
            <th>Vehicle Type</th>
            <th>Purpose of Visit</th>
            <th>Actions</th>
        </tr>
        <?PHP while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?PHP echo $r['visitor_id'] ?></td>
                <td><?PHP echo $r['firstname'] ?></td>
                <td><?PHP echo $r['lastname'] ?></td>
                <td><?PHP echo $r['datein'] ?></td>
                <td><?PHP echo $r['dateout'] ?></td>
                <td><?PHP echo $r['vehicle_type'] ?></td>
                <td><?PHP echo $r['name'] ?></td>
                <td>
                    <a href="view.php?id=<?PHP echo $r['visitor_id'] ?>" class="btn btn-primary">View</a>
                    <a href="edit.php?id=<?PHP echo $r['visitor_id'] ?>" class="btn btn-warning">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this record?');"
                    href="delete.php?id=<?PHP echo $r['visitor_id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?PHP }?>
    </table>

<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>