

<?php
 
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
 

if (isset($_POST["send"])) {
 
  $mail = new PHPMailer(true);
 

    $mail->isSMTP();                             
    $mail->Host       = 'smtp.gmail.com';    
    $mail->SMTPAuth   = true;           
    $mail->Username = 'azizulalamprottoy@gmail.com';
    $mail->Password = 'lekitkhaehicnazf';   
    $mail->SMTPSecure = 'ssl';          
    $mail->Port       = 465;                                    
 
   
    $mail->setFrom( $_POST["emai"], $_POST["name"]); 
    $mail->addAddress($_POST["emai"]);    
    $mail->addReplyTo($_POST["emai"], $_POST["name"]); 
 
   
    $mail->isHTML(true);             
    $mail->Subject = $_POST["subject"];   
    $mail->Body    = $_POST["request"];
   
    $mail->send();
    echo
    " 
    <script> 
     alert('Message was sent successfully!');
     document.location.href = 'test3.php';
    </script>
    ";
    require_once("../config/database.php");
    
        
        $request = mysqli_real_escape_string($mysqli, $_POST['request']);
        $employeeid = mysqli_real_escape_string($mysqli, $_POST['employeeid']);
        $date = mysqli_real_escape_string($mysqli, $_POST['date']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);
        $status = "pending";
        $result = mysqli_query($mysqli, "INSERT INTO mreq (`request`, `employeeid`,`email`, `date`, `status`) VALUES ('$request', '$employeeid','$email', '$date', '$status') ");

        header("location:ehome.php?eid=$employeeid");

    }
    

  
