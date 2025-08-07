<!DOCTYPE html>
<html>
<head>
<title>Hello DevOps Class</title>
</head>
<body>
<?php
$host = 'your-rds-endpoint'; // עדכני לכאן את כתובת ה־RDS
$user = admin    // למשל: admin
$password = Bar8873856; // סיסמה של המשתמש
$dbname = schema; // למשל: People

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, email, pass, date_add FROM breached";
$result = mysqli_query($conn, $sql);

echo "<h1>Breached</h1>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Email</th><th>Password</th><th>Date Added</th></tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr><td>" . $row['id'] . "</td><td>" . $row['email'] . "</td><td>" .
    $row['pass'] . "</td><td>" . $row['date_add'] . "</td></tr>";
}

echo "</table>";

mysqli_close($conn);
?>
</body>
</html>
