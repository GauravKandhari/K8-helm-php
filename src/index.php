<?php
echo "Inside Minikube with MySQL <br>";
echo "Hello";
$conn = new mysqli("mysql.default.svc.cluster.local:3306", "testuser", "tEstUsEr", "mydb");
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo $row['name']."<br>";
	}
} else {
	echo "0 results";
}
$conn->close();
