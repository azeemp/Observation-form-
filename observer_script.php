<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "youremail@gmail.com";
$mail->Password   = "your password";
$toEmail=$_POST['toEmail'];
$Name = $_POST['Name'];
$Description = $_POST['Description'];
$Class = $_POST['Class'];
$Phone = $_POST['Phone'];
$Comments = $_POST['Comments'];

$mail->IsHTML(true);
$mail->AddAddress($toEmail, "recipient-name");
$mail->SetFrom("from-email@gmail.com", "BC PSYCH FORMS");
$mail->Subject = "Your observation form";
$mail->Body="<html>
<body>
    <table style='width:600px;'>
        <tbody>
            <tr>
                <td style='width:150px'><strong>Name: </strong></td>
                <td style='width:400px'>$Name</td>
            </tr>
            <tr>
                <td style='width:150px'><strong>Description: </strong></td>
                <td style='width:400px'>$Description</td>
            </tr>
            <tr>
                <td style='width:150px'><strong>Class name & Section: </strong></td>
                <td style='width:400px'>$Class</td>
            </tr>
            <tr>
                <td style='width:150px'><strong>Phone no: </strong></td>
                <td style='width:400px'>$Phone</td>
            </tr>
            <tr>
            <td style='width:150px'><strong>Comments/Concerns: </strong></td>
            <td style='width:400px'>$Comments</td>
        </tr>
        </tbody>
    </table>
</body>
</html>";
if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
}
 