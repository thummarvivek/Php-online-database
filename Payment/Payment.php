<?php 

    
    
    $bid=$_REQUEST["id"];
    $cid=$_REQUEST["cart_id"];
    $uid=$_REQUEST["User_id"];
    $type=$_REQUEST["payment_type"];
    $status=$_REQUEST["payment_status"];
    

     $con = new mysqli("localhost","id20010924_firstproject","androidVivek@09876","id20010924_androidfirstpro");
 
  
   $result =$con-> query("
   
    INSERT INTO `Payment` ( `id`, `cart_id`, `User_id`, `payment_type`, `payment_status`)
    VALUES ( '$bid', '$cid', '$uid', '$type', '$status')");
 

    if($result){
              
	      $r1= $con->query("select * from Payment");
          while($r= $r1->fetch_object())
          {
            $row['Pay'][]=$r;
          }
           echo json_encode($row);
         
          }
    
    ?>