

<?php

include '../config/database.php';

$serial = $_GET['serial'];
$sqlu = "SELECT * FROM itemlist WHERE serial = $serial";
$resulti = mysqli_query($conn, $sqlu);

if (mysqli_num_rows($resulti) > 0) {
    $row = mysqli_fetch_assoc($resulti);
    echo '
        <form action="edititem.php" method="post">
            <input type="text" name="serial" value="' . $row['serial'] . '">
            <label for="items">items:</label>
            <input type="text" name="items" id="items" value="' . $row['items'] . '">
            <input type="submit" name="update" value="Update">
        </form>
    ';
} else {
    echo 'Record not found.';
}


?>