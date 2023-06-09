<?php
$id = $_GET['id_incidencia'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto_moviles";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement to delete the data based on the ID
$sql = "DELETE FROM incidencia WHERE id_incidencia = $id";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    // Return a success response
    echo "Data deleted successfully";
} else {
    // Return an error response
    echo "Error deleting data: " . $conn->error;
}

// Close the database connection
$conn->close();
?>