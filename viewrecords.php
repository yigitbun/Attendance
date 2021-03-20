<?php
    $title = 'View Records';
        require_once 'includes/header.php';
        require_once 'db/conn.php';

        $results = $crud->getAttandees();

    ?>

    <table class="table">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Email Address</th>
            <th>Contact Number</th>
            <th>Specialty</th>
        </tr>
        
        <?php while($r = $results->fetch(POD::FETCH_ASSOC) {?>

            <?php }?>
        
    </table>


    <br>
    <br>
    <br>
    <br>
    <br>


    <?php require_once 'includes/footer.php'; ?>