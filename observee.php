<!DOCTYPE html>
<html>


<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Observee Form</title>
    <div>
        <h1> Observee Form</h1>
    </div>
</head>
<body>
    <h3>Fill out your information below</h3>

    <div>
    <form action="observee_script.php" method="post" class="form-signin" enctype="multipart/form-data">

        <label for="Name">Name</label>
        <input type="text" id="Name" name="Name" placeholder="Observers name"required>
    
        <label for="Description">Description</label>
        <input type="text" id="Description" placeholder="Please describe here.." name="Description" required>

    
        <label for="fromEmail">From</label>
        <input type="email" id="fromEmail" value="bcpsychforms@gmail.com" name="fromEmail" readonly required>

        <label for="toEmail">Observers Email</label>
        <input type="email" id="toEmail" placeholder="Observees email.." name="toEmail" required>
        
        
        <label for="Phone">Phone Number </label>
        <input type="tel" id="Phone" placeholder="(123)555-5555" tabindex="3" name="Phone" required>

    
        <label for="Comments">Comments/Questions</label>
        <input type="text" id="Comments" placeholder="Any concern?" name="Comments" required>

        <label for="myFile">Upload your supplemental class material!</label>
  <input type="file" id="myFile" name="myFile" required><br><br>
 

      
        <input type="submit" value="Submit"  >
        
      </form>
      
      
    </div>
    


</body>