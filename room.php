<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'University Information System'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}

$sql = 'SELECT * 
        FROM rooms';
        
$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}
?>


<html>
<head>
    <title>Displaying Rooms</title>
    <link rel="stylesheet" type="text/css" href="styleTable.css">
</head>
<body>
    <h1>Table 1</h1>
    <table class="data-table">
        <caption class="title">Rooms</caption>
        <thead>
            <tr>
                <th>Room Id</th>
                <th>Type</th>
                <th>Status</th>
                <th>Floor</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no     = 1;
        $total  = 0;
        while ($row = mysqli_fetch_array($query))
        {
            #$amount  = $row['did'] == 0 ? '' : number_format($row['amount']);
            echo '<tr>
                    <td>'.$row['roomno'].'</td>
                    <td>'.$row['type'].'</td>
                    <td>'.$row['status'].'</td>
                    <td>'.$row['floor'].'</td>
                </tr>';
            $no++;
        }?>
        </tbody>
    </table>
</body>
</html>