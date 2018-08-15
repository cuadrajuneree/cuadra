<!DOCTYPE html>
<html>
<head>
<title>Table Users</title>
</head>
<body>
    <table>
    <tr><th>ID</th><th>USERNAME</th><th>PASSWORD</th><th>FIRSTNAME</th><th>LASTNAME</th><th>ADDRESS</th></tr>
    <tr>
        <?php

        include("config.php");
        $query = $con->query("SELECT * FROM accounts");

        while ($row = $query->fetch_object()){
        ?>
        <td><?php echo $row->acc_id; ?></td>
        <td><?php echo $row->acc_username; ?></td>
        <td><?php echo $row->acc_password; ?></td>
        <td><?php echo $row->acc_firstname; ?></td>
        <td><?php echo $row->acc_lastname; ?></td>
        <td><?php echo $row->acc_address; ?></td>
        </tr>
        <?php
        } 
        ?>
    </table>
</body>
</html>
