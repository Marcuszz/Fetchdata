<?php
include "vendor/autoload.php";
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->local->students;
$result = $collection->find();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>All Students</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body>
<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-5">
                        <h2><b>List</b> of <b>Students</b></h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Object ID</th>
                        <th>Student ID</th>
                        <th>Name</th>						
                        <th>Birthdate</th>
                        <th>Address</th>
                        <th>Program</th>
                        <th>Contact Number</th>
                        <th>Emergency Contact</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($result as $student){
                        ?>
                        <tr>
                        <th scope = "row"><?=$student['_id']?></th>
                        <td><?=$student['studentId']?></td>
                        <td><?=$student['firstName']?><?=" "?><?=$student['lastName']?></td>
                        <td><?=$student['birthdate']?></td>
                        <td><?=$student['address']?></td>
                        <td><?=$student['program']?></td>
                        <td><?=$student['contactNumber']?></td>
                        <td><?=$student['emergencyContact']?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>        
</div>     
</body>
</html>