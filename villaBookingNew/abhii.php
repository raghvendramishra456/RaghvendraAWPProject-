<?php

require 'db.php';

if(isset($_POST['insert']))
{
    extract($_POST);
    
    $query="insert into student_info(firstname,lastname,emailid)"."values(:fname,:lname,:emailid)";
    
    $stmt=$con->prepare($query);
    
    $stmt->bindParam(':fname',$firstname);
    $stmt->bindParam(':lname',$lastname);
    $stmt->bindParam(':emailid',$emailid);
 
    if($stmt->execute())
    {
        
        
        echo 'Record Inserted';
    }
    else
    {
        echo 'Record not Inserted';
    }
    
}

?>


<html>
    <head>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <div class="container mt-5">
            
            <h4 class="text-secondary">PHP FORM</h4>
            
        <form method="POST">
            
            
            <div class="form-group">
            Enter FirstName
            <input type="text" name="firstname" class="form-control col-4">
            </div>
            
            <div class="form-group">
            Enter LastName
            <input type="text" name="lastname" class="form-control col-4">
            </div>
            
            <div class="form-group">
            Email
            <input type="email" name="emailid" class="form-control col-4">
            </div>
            
            
            <button type="submit" name="insert" class="btn btn-dark">Submit</button>
         
        </form>
        
        </div>
    </body>
</html>