
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "finance";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Retrieve values from request (e.g., GET or POST)
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
$date_of_birth = $_GET['date_of_birth'];

// Prepare the SQL statement
$sql = "UPDATE account_request SET status = 'rejected' 
        WHERE first_name = ? AND last_name = ? AND date_of_birth = ?";

// Initialize prepared statement
$stmt = $mysqli->prepare($sql);

// Check if the statement was prepared successfully
if (!$stmt) {
    die("Prepare failed: " . $mysqli->error);
}

// Bind parameters
$stmt->bind_param("sss", $first_name, $last_name, $date_of_birth);

// Execute the query
if ($stmt->execute()) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$mysqli->close();
?>

<script>
alert("Account Request Rejected.....");
document.location="account_request_view.php";
</script>