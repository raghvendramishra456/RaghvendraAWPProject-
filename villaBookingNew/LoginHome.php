<?php

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
    
        header('location:home.php');
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
    
     <style>
            
            body{
                
                background-image: url("images/home4.jpg");
                background-repeat: no-repeat;
/*              background-attachment: fixed;*/
                background-size: cover;
                height:110vh;
                width:80px;
                
                
                
/*                background-image: absolute;*/
                
            }
    
            .form-box{
                margin-top: 200px;
                margin-left: 100px;
                background-color: transparent;
                box-shadow:40px; 
                height: 20px;
            }
            
            .form-box input[type=date]{
                
                background-color:lightgray;
                
        }
        .abc{
            
            margin-top:  -140px;
            
        }

    #id2{
            
            height: 35px;
            
        }
        
        #abcd{
            width: 200px;
        }
     
        
         </style>
            
           
   </head>
    <body>
        <br><br><br>
         <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
              
                    <a class="navbar-brand" href="#">
                          
                          <img src="images/logonew.jpg"style="width:50px;height:40px" alt=""/>
                        
                        WonderVillaz</a>
                         
               <ul class="navbar-nav mr-auto">
                   &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; 
                <li class="nav-item">
                    <a href="#" class="nav-link active"><i class="fas fa-home"></i>Home</a>   
                </li>
                     &ensp;&ensp;&ensp;&ensp;
                 <li class="nav-item dropdown">
                    <a  class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target">
                        <i class="fas fa-city"></i>Cities
        
                    </a>   
                     
                     <div class="dropdown-menu" aria-labelledby="dropdown_target">
                        
                 
                         <a id="2" class="dropdown-item">Manali</a>
                          
                         <a id="3" class="dropdown-item">Mysore</a>
                          
                         <a id="4" class="dropdown-item">Udaipur</a>
                    </div>
                </li>
                   &ensp;&ensp;&ensp;&ensp;               

                 <li class="nav-item">
                    <a href="contactUs.html" class="nav-link">Contact</a> 
                   </li></ul>
               
                    <form>
                        <div class="input-group">
                        <input type="text" id="abcd">
                        <div class="input-group-append">
                        <input type="button" value="search" class="btn btn-success "  style="background-color: green">
                        </div>
                        </div>
                    </form>  
                    
             <button type="button" class="btn btn-dark float-right offset-1" data-toggle="modal" data-target="#model1" style="background-color:blue" ><a href="#"></a>Sign Up</button>
             <button type="button" class="btn btn-dark float-right" data-toggle="modal" data-target="#model2" style="background-color:blue" ><a href="#"></a>Login</button>

                    
            </nav>

            <br>
            <br>
            <br>
           
            <font size="5px"><marquee style="color:brown" >Book Now and Get Exclusive 40% Off on Each Villa Booking....</marquee></font>

            
            
            
 
    <body>
        <div class="abc">
              
        <div class="conntainer mt-5">
             
            <div class="modal fade" id="model1" data-backdrop="static">
                <div class="modal-dialog model-sm modal-dialog-centered">
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
            
            <div class="modal fade" id="model2" data-backdrop="static">
                <div class="modal-dialog model-sm modal-dialog-centered">
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
        </div>

    </body>
</html>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>><br><br><br><br><br><br><br>