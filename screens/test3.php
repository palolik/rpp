<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='test2.php' method="post">
        <input style="display:none;" type="email" name="emai" value="ansarulalam1963@gmail.com">
        <input style="display:none;" type="text" name="subject" value="Mainteinence request ">
        <input style="display:none" value="<?php require_once("../config/database.php");$resultw = mysqli_query($mysqli, "SELECT * FROM employees where employeeid=180011266"); while($res = mysqli_fetch_assoc($resultw)) { echo $res['email'] ;} ?>" name="email">

        <input style="display:none" value="180011266" name="employeeid">
        Messege <textarea style="margin:20px;padding:10px;resize:none;color:black;font-size:20px;width:-webkit-fill-available;height:300px;background-color:white;" type="text" name="request" value=""> 
        <?php require_once("../config/database.php");$resultw = mysqli_query($mysqli, "SELECT * FROM employees where employeeid=180011266"); while($res = mysqli_fetch_assoc($resultw)) { echo  $res['email']  ;} ?>
        <?php echo date("F jS, Y, h:i A"); ?>
            
    </textarea>
        <input style="display:none" name="date"  value="<?php echo date("F jS, Y, h:i A");  ?>" >

        <button  class='nm3' type="submit" name="send">send</button>
    </form>
</body>
</html>


