<?php
// echo "<table border=1><th>Name</th><th>Department</th><th>AVG</th>
// <tr><td>ABC</td><td>IT</td><td>88.8</td></tr>
// </table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$name = "Web2";
$dept = "IT";
$avg = 88.8;
?>
    <table border="1">
        <th>Name</th>
        <th>Department</th>
        <th>AVG</th>
        <tr>
            <td><?php echo $name;  ?></td>
            <td><?php echo $dept;  ?></td>
            <td><?php echo $avg; ?></td>
        </tr>
    </table>
</body>
</html>