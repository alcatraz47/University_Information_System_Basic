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
        FROM timeslots';
        
$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}
?>


<html>
<head>
    <title>Displaying Time Slots</title>
    <link rel="stylesheet" type="text/css" href="styleTable.css">
</head>
<body>
    <h1>Table 1</h1>
    <table class="data-table">
        <caption class="title">Times</caption>
        <thead>
            <tr>
                <th>Time Id</th>
                <th>Time From</th>
                <th>Time To</th>
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
                    <td>'.$row['timeid'].'</td>
                    <td>'.$row['fromtime'].'</td>
                    <td>'.$row['totime'].'</td>
                </tr>';
            $no++;
        }?>
        </tbody>
    </table>
</body>
</html>