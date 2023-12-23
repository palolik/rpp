<?php
 if(isset($_POST['export'])){
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rpp";
$table_name = "employees";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the SQL table
$sql = "SELECT * FROM $table_name";
$result = $conn->query($sql);

// Set headers for Excel file download
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=export_data.xls");
header("Pragma: no-cache");
header("Expires: 0");

// Print column headers
$header = '';
foreach ($result->fetch_fields() as $field) {
    $header .= $field->name . "\t";
}
echo $header . "\n";

// Print data rows
while ($row = $result->fetch_row()) {
    $line = '';
    foreach ($row as $value) {
        $line .= str_replace(",", "", $value) . "\t";  // Handle potential commas in data
    }
    echo $line . "\n";
}
header('location:employeelist.php');
$conn->close();
 }

?>