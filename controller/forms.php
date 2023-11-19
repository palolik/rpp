<!-- <?php

// Connect to the MySQL database
$conn = new PDO('mysql:host=localhost;dbname=rpp', 'root', '');

// Create a new record
// function create($conn, $name, $email) {
//     $sql = 'INSERT INTO users (name, email) VALUES (?, ?)';
//     $stmt = $conn->prepare($sql);
//     $stmt->bindParam(1, $name);
//     $stmt->bindParam(2, $email);
//     $stmt->execute();
// }

// Read all records
function read($conn) {
    $sql = 'SELECT * FROM employees where employeeid=180011001';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}


// Update a record
// function update($conn, $id, $name, $email) {
//     $sql = 'UPDATE users SET name = ?, email = ? WHERE id = ?';
//     $stmt = $conn->prepare($sql);
//     $stmt->bindParam(1, $name);
//     $stmt->bindParam(2, $email);
//     $stmt->bindParam(3, $id);
//     $stmt->execute();
// }

// // Delete a record
// function delete($conn, $id) {
//     $sql = 'DELETE FROM users WHERE id = ?';
//     $stmt = $conn->prepare($sql);
//     $stmt->bindParam(1, $id);
//     $stmt->execute();
// }

// // Example usage:

// // Create a new user
// $name = 'John Doe';
// $email = 'john.doe@example.com';
// create($conn, $name, $email);

// // Read all users
// $users = read($conn);

// // Update a user
// $id = 1;
// $name = 'Jane Doe';
// $email = 'jane.doe@example.com';
// update($conn, $id, $name, $email);

// // Delete a user
// $id = 2;
// delete($conn, $id);

?>
<button onClick="read()">dsf</button> -->

<div class="box5">
    <form action="forms.php" method="post">
        <label for="fname">Employee Id:</label>
        <input class="form-control " name="ds" type="text" placeholder="Enter 6-digit employee id here"
            aria-label="default input example">
        <input class="buts" type="submit" value="Search">

    </form>


</div>


<?php
            include '../config/database.php';

            $conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);



            $id = $_POST['ds'];

            $sql = "SELECT * FROM employees where employeeid=$id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo
                    "
                 
       <div class='details'>
                    <div class='dd'>
                        <div class=title>" . $row['employeename'] . "</div> 
                        <div class=price>৳" . $row['status'] . "</div>
                    </div>
           </div></div>";
                }
            }

            ?>