
<?php
require 'db.php';

$query="select * from villa v , city c where c.id = v.cid and v.cid =3";
$stmt=$con->prepare($query);
$stmt->execute();
//$row=$stmt->fetchAll(PDO::FETCH_OBJ);
$row=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<img src="" alt=""/>

<!DOCTYPE html>
<a href="udaipur_interior1.html"></a>
<html>
    <head>

        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
        <title>GOA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
        body{ 
              height:45vh;
              width:97%;
              background-size: cover;
              background-position: center;
              
              <?php foreach($row as $r){
                 ?>
           background-image:url("<?php echo $r['vbackimg'];?>");
              <?php break;}?>
         
/*            background-attachment: fixed;*/
              background-repeat: no-repeat;
            }
        
         
        
            .top{
                
                 margin-top: 100px;
                margin-left: 80px;
             background-color:transparent;
                
            }
        
            .card{
               
                width:200px;
                height:800px;
                
            }
            img{
                width:300px;
                height:200px;
            }
              #c1:hover{
                box-shadow: 10px 10px graytext;
            }
        
            
        
      
       </style>
        
        
    </head>
    <body>
        
        <div class="top">
            
            <?php 
            foreach($row as $r){
             ?>
                
            
            <h1><b><font color="orange"><?php echo $r['vcityhead'];?></font></b></h1>
            <?php break;}?>
            </br>
        </div>
        
        <br><br><br><br><br><br>
           
      
        
        <div class="container">
         <div class="card-deck">
 
      <?php
        foreach ($row as $r) {
            
            ?>   
           
   
       
                <div class="card " id="c1"> 
                    
                <div class="card-body text-center">
    
                 <img src="<?php echo $r['villaimg'];?>"/>
<!--                    <img src="goa_villas_images/goavilla1.jpg"  class="card-img-top image-fluid" alt=""/>
                    -->
                    <h3><?php echo '<br>'.$r['vname'];?></h3><?php echo $r['villaloc'].'<br>' ?><br><br>

        <b><?php
       echo '<br>'.$r['vdesc'].'<br>';
        echo '<br><br>Price = '.$r['vprice'].'<br>';
        ?>  </b>
                   <br><br><br><br>
     
               <div class="card-footer">
                   &emsp;<a href="<?php echo $r['villaint'];?>"><input type="button"  class="btn btn-primary" value="View Interior"></a>&emsp;
                   <a href="home.html"><input type="button"  class="btn btn-danger" value="Book Villa"></a>

               </div>
               </div>
               </div>
   
            
  <?php
        }
    ?>            
       
                          </div>
            
       </div>       
    
            <br> 
                <br>
                    <br>
                        <br>
                            <br>
                                <br>
                                    <br>    <br>    <br>
                                        <br>
                                            <br>
                                                <br>
                                                    <br>
                                                        <br>
                                                            <br>
                                                                <br>    <br>    <br>
                                                                    <br>    <br>
                                                                        <br>
                                                                            <br>
                                                                                <br>    <br>
                                                                                    <br>
                                                                                
                                                                
                                                                
                                                                
                                    
                        
    </body>
</html>

        
        
            

