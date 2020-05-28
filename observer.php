<!DOCTYPE html>
<html>


<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Observation Form</title>
    <div>
        <h1> Observer Form</h1>
    </div> 
</head>
<body>
    <h3>Fill out your information below</h3>

    <div>
    <form action="observer_script.php" method="post" class="form-signin">
        <label for="Name">Name</label>
        <input type="text" id="Name" name="Name" placeholder="Observers name..">  
      
        
        <label for="desc">Description</label>
        <input type="text" id="desc" name="Description" placeholder="Please describe here.."  required>
        

        <label for="Class">Class name & Section</label>
        <input type="text" id="Class" name="Class" placeholder="EX: MATH 1011 MW3"  required>

        <label for="fromEmail">From</label>
        <input type="email" id="fromEmail" name="fromEmail" value="bcpsychforms@gmail.com" readonly required>

        <label for="toEmail">Observee's Email</label>
        <input type="email" id="toEmail" name="toEmail" placeholder="Observers email.."  required>
        
        <label for="Phone">Phone Number </label>
        <input type="tel" id="Phone" name="Phone" placeholder="(123)555-5555" tabindex="3" required>

      

        <label for="Comments">Comments/Questions</label>
        <input type="text" id="Comments" placeholder="Any concern?" name="Comments" required>

        
 

      
        <input type="submit" value="submit"  >
        
      </form>
    

    
    </div>
    











</body>