<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if ($conn) {
    echo "Connection Established";
} else {
    die("Error: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
</head>
<body>
<form method="GET" action="">
        <label for="rgd">Register Number:</label>
        <input type="text" id="rgd" name="rgd" required>
        <input type="submit" value="Submit">
    </form>
<?php

if (isset($_GET['rgd']) && !empty($_GET['rgd'])) {
    $rgd = mysqli_real_escape_string($conn, $_GET['rgd']); 

$sql = "SELECT * FROM class2 where registerno = '$rgd' ";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
        <tr>
            <th>Register Number</th>
            <th>Name</th>
            <th>Cell Number</th>
            <th>Email</th>
            <th>Branch</th>
        </tr>";
    
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>
            <td>" . $row["registerno"] . "</td>
            <td>" . $row["name"] . "</td>
            <td>" . $row["cellno"] . "</td>
            <td>" . $row["email"] . "</td>
            <td>" . $row["branch"] . "</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "<br><br><br>No Records";
}
}

mysqli_close($conn);
?>
</body>
</html>
