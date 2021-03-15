<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Music</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <style>
        table,th,td{
            border: 3px solid rgba(12, 184, 182, 0.91);
            border-collapse: collapse;
            color:rgba(12, 184, 182, 0.91);
            text-align: center;
        }
        th{
            background: rgba(12, 184, 182, 0.91);
            color: white;
            border: none;
        }
        th,td{
            font-size: 17px;
            width:100px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="menu-container">
        <input type="checkbox" class="toggler">
        <div class="hamburger">
                <div> </div>
        </div>
        <div class="menu">
            <div>
                <div>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="finddoctors.php" style="color: rgba(12, 184, 182, 0.91);">Find Doctors</a></li>
                        <li><a href="retrive.php">Retrieve Medical Report</a></li>
                        <li><a href="#">Find Hospital</a></li>
                        <li><a href="#">Claiming Medical Insurance</a></li>
                        <li><a href="#">Appointment</a></li>
                        <li><a href="#">Medicine Order</a></li>
                        <li><a href="#">Online Blood test</a></li>
                        <li><a href="#">Check Blood Bank</a></li>
                        <li><a href="#">Emergency Request</a></li>
                        <li><a href="#">Pharmacy Availability</a></li>
                        <li><a href="#">First Aid</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="back">
        <div class="content">
            <table border="1">
            <tr align="justify">
            <th> Name </th>
            <th> Domain </th>
            <th> Address </th>
            <th> Phone </th>
            <th> Hospital</th>
        </tr>
            <?php
$servername = "localhost";
$username = "root";
$password = "23032000";
$db = "web";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
$v = $_POST['val'];
$sql = "SELECT * FROM doctorfind WHERE Domain = '$v' ";
$result = $conn->query($sql);
        if ($result->num_rows > 0)
        {
        // output data of each row
        while($row = $result->fetch_assoc())
            {
                echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Domain"]. "</td><td>" . $row["Address"].
                 "</td><td>" . $row["phone"]. "</td><td>" . $row["Hospital"]."</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

        </div>
    </div>
</body>
</html>
