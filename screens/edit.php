

<?php

include '../config/database.php';

$si = $_GET['si'];
$sqlu = "SELECT * FROM alldevice WHERE si = $si";
$resulti = mysqli_query($conn, $sqlu);
q
if (mysqli_num_rows($resulti) > 0) {
    $row = mysqli_fetch_assoc($resulti);
    echo '


        <form action=controller.php?si='.$row['si'] . ' method="post">
            <input type="text" name="si" value="' . $row['si'] . '">
            <label for="items">Device name:</label>
            <input type="text" name="devicen"  value="' . $row['devicen'] . '">
            <label for="items">Date:</label>
            <input type="date" name="adddate"  value="' . $row['adddate'] . '">
            <label for="items">Q:</label>
            <input type="text" name="q"  value="' . $row['q'] . '">
            <input type="submit" name="update1" value="Update">
        </form>
    ';
} else {
    echo 'Record not found.';
}


?>