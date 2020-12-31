<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_room_reservation_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstName, lastName, email, roomtype, Guests, ArrivalDateTime FROM tbl_booking";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " | First Name: ". $row["firstName"]. " | Last Name:" . $row["lastName"] ." | Email:" . $row["email"]."| Room Type:" . $row["roomtype"]." | Guests:" . $row["Guests"]." | Arrival DateTime:" . $row["ArrivalDateTime"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>