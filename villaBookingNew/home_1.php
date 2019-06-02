<?php 

require 'db.php';

if(isset($_POST['insert'])){
   
    extract($_POST);
    
    $query = "insert into registration(firstname,lastname,emailid,password)"
            . " values(:fname,:lname,:emd,:pwd)";

    $stmt = $con->prepare($query);
    
    $stmt->bindParam(':fname',$firstname);
    $stmt->bindParam(':lname',$lastname);
    $stmt->bindParam(':emd',$emailid);
    $stmt->bindParam(':pwd',$password);

    if($stmt->execute())
    {
        echo 'Form Submitted';
    }
    else
    {
        echo 'Form Not Submitted';
    }
}
?>

<?PHP

require 'db.php';

session_start();

if(isset($_POST['insert1'])){
    
    extract($_POST);
    
    $eid = $_REQUEST['email'];
    $pwd = $_REQUEST['pwd'];
    
   $quary1 = "select * from registration where emailid = '$eid' and password = '$pwd'";

    
    $stm = $con->prepare($quary1);
      
    $stm->execute();
    
    $row=$stm->fetchAll(PDO::FETCH_OBJ);
   
    if($row){
    
        echo "hello";
    }
    else{
        echo "wrong mailid and pwd";
    }
    
   }



?>


<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <!--<script src="boorstrap/jquery-3.3.1.min.js" type="text/javascript"></script>-->
        <script src="boorstrap/jquery-3.3.1.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="home.css">
        
        <script src="home.js" type="text/javascript"></script>
        <script src="login.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="conntainer mt-5">
             <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#model1"><a href="#"></a>Sign Up</button>
            <div class="modal fade" id="model1" data-backdrop="static">
                <div class="modal-dialog model-sm model-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            
                            <h2>Sign Up</h2>
                            <span class="close" data-dismiss="modal">&times;</span>
                        </div>
                        
                        
                        <form method="post">
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    First Name <font style="color: red; font-size: 20px">*</font>
                                    <input type="text" id="fname" class="form-control" name="firstname" onblur="fn()" required>
                                    <span  id='m1' style="color: red"></span>
                                </div>
                                <div class="form-group">
                                    Last Name<font style="color: red; font-size: 20px">*</font>
                                    <input type="text" id="lname"  class="form-control" name="lastname" onblur="ln()" required>
                                    <span id='m2' style="color: red"></span>
                                </div>
                                <div class="form-group">
                                    Password<font style="color: red; font-size: 20px">*</font>
                                    <input type="password" id="pass" class="form-control" name="password" onblur="pwd()" required>
                                    <span id='m3' style="color: red"></span>
                                </div>
                                <div class="form-group">
                                  Confirm Password<font style="color: red; font-size: 20px">*</font>
                                  <input type="password" id="conf" class="form-control" onblur="confpwd()" required>
                                  <span id="m5" style="color: red"></span>
                                </div>
                                <div class="form-group">
                                    Email<font style="color: red; font-size: 20px">*</font>
                                    <input type="email" id="email" class="form-control" name="emailid" onblur="mail()" required>
                                    <span id="m4" style="color: red"></span>
                                </div>
                            
                        </div>
                                
                        <div class="modal-footer">
                            <input type="submit" value="submit" class="btn float-right" name="insert">
                            <button type="Button" class="btn float-right offset-2" data-dismiss="modal">Cancel</button>
                            
                        </div>         
                           </form>     
                    </div>
                </div> 
            </div>
                    
        </div>




<div class="conntainer mt-5">
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#model2"><a href="#"></a>Login</button>
            <div class="modal fade" id="model2" data-backdrop="static">
                <div class="modal-dialog model-sm model-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            
                            <h2>Login</h2>
                            <span class="close" data-dismiss="modal">&times;</span>
                        </div>
                        
                        
                        <form method="post">
                        <div class="modal-body">
                        
                                 <div class="form-group">
                                     Email<input type="email" id="em" class="form-control" name="email" onblur="maillog()">
                                     <span id="e1" style="color: red"></span>
                                </div>
                                <div class="form-group">
                                    Password<input type="password" id="pas" class="form-control" name="pwd" onblur="pd()" required>
                                     <span id="p" style="color: red"></span>
                                </div>
                               
                        </div>
                       
                        
                        <div class="modal-footer">
                            <button type="submit" class="btn float-right" name="insert1">Login</button>
                            <button type="Button" class="btn float-right offset-2" data-dismiss="modal">Cancel</button>
                        </div>         
                       </form>       
                    </div>
                </div> 
            </div>
                    
</div>

    </body>
</html>
