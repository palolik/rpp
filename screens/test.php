<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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

$conn->close();
 }
?>
<?php
// ... (database connection code remains the same)

$table_name = "employees";

if (isset($_POST['export'])) {  // Check if the button is clicked
    // Fetch data and generate Excel file (same code as before)
    $sql = "SELECT * FROM $table_name";
    // ... (rest of the Excel generation code)
} else {
    // Display the button if not clicked
?>

<form method="post">
    <button type="submit" name="export">Download Excel</button>
</form>

<?php
}
?>

</body>
</html>