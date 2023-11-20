<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
<?php 
  include '../config/database.php';
                        
                                    

                                            $result = mysqli_query($mysqli, "SELECT * FROM employees");
                                            while ($res = mysqli_fetch_assoc($result))
                                            {   

                                                echo "<tr>";
                                                echo "<td>".$res['id']."</td>";
                                                echo "<td>".$res['employeecode']."</td>";
                                                echo "<td><form action='query.php' method='post'><input type='submit' value=' ".$res['employeename']." ' >
                                               <input type='hidden' name='ds' value=".$res['employeeid'].">                
                                           </form></td>";
                                                echo "<td>".$res['designation']."</td>";
                                                echo "<td>".$res['contactno']."</td>";
                                                echo "<td>".$res['email']."</td>";
                                                echo "<td>".$res['status']."</td>";
                                                echo "</tr>";
                                               } 
     
                                ?>

                    </tbody>

                </table>

</body>
</html>