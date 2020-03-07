<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    include_once 'database.php';

    $qry = "SELECT * FROM registration ORDER BY id DESC";

            $sql = mysqli_query($conn, $qry);

                echo '<table class="client">';
                echo '<tr>';
                echo '<th>First Name</th> <th>Last Name</th> <th>Address</th> <th>Number</th> <th>email</th></th>';
                
            while ($row = mysqli_fetch_array($sql)) {
                echo '</tr>';
                echo '<tr>';
                echo "<td>".$row['fName']."</td>";
                echo "<td>".$row['lName']."</td>";
                echo "<td>".$row['address']."</td>";
                echo '<td>'.$row['phoneNum']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td><a href='edit.php?id=$row[id]'>Edit</a> | <a href='delete.php?id=$row[id]'>Delete</a></td>";
                echo '</tr>';
            }
                echo '</table>';
                //echo '<td>'.$row['Contact']."</td>";
                //echo '<td>'.$row['Street']." ".$row['City']." ".$row['Code']."</td>";
                //echo '<td>'.$row['Checkup']."</td>";
                //echo '<td>'.$row['date'].'</td>';
                
?>

    
</body>
</html>