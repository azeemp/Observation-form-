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
$Phone = $_POST['Phone'];
$Comments = $_POST['Comments'];

//Get the uploaded file information
$name_of_myFile =
    basename($_FILES['myFile']['name']);

//get the file extension of the file
$type_of_uploaded_file =
    substr($name_of_myFile,
    strrpos($name_of_myFile, '.') + 1);

$size_of_uploaded_file =
    $_FILES["myFile"]["size"]/1024;//size in KBs
//Settings
$max_allowed_file_size = 100; // size in KB
$allowed_extensions = array("jpg", "jpeg", "gif", "bmp");

//Validations
if($size_of_uploaded_file > $max_allowed_file_size )
{
  $errors .= "\n Size of file should be less than $max_allowed_file_size";
}

//------ Validate the file extension -----
$allowed_ext = false;
for($i=0; $i<sizeof($allowed_extensions); $i++)
{
  if(strcasecmp($allowed_extensions[$i],$type_of_uploaded_file) == 0)
  {
    $allowed_ext = true;
  }
}

if(!$allowed_ext)
{
  $errors .= "\n The uploaded file is not supported file type. ".
  " Only the following file types are supported: ".implode(',',$allowed_extensions);
}
//copy the temp. uploaded file to uploads folder
$path_of_uploaded_file = $upload_folder . $name_of_myFile;
$tmp_path = $_FILES["myFile"]["tmp_name"];

if(is_uploaded_file($tmp_path))
{
  if(!copy($tmp_path,$path_of_uploaded_file))
  {
    $errors .= '\n error while copying the uploaded file';
  }
}


$mail->IsHTML(true);
$mail->AddAddress($toEmail, "recipient-name");
$mail->SetFrom("from-email@gmail.com", "BC PSYCH FORMS");
$mail->Subject = "Your obsevee form";
$mail->addAttachment($path_of_uploaded_file);
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
 