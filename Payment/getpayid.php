<?php 

    $bid=$_REQUEST["id"];
    $cid=$_REQUEST["cart_id"];
    $uid=$_REQUEST["User_id"];
    $type=$_REQUEST["payment_type"];
    $status=$_REQUEST["payment_status"];


   
    
    $con = new mysqli("localhost","id20010924_firstproject","androidVivek@09876","id20010924_androidfirstpro");

    $result = $con->query( "select payment_id from Payment where 
    id='$bid' AND cart_id='$cid' AND User_id='$uid' AND payment_type='$type' AND payment_status='$status' "); 
  
    
     if($result){
     
         while($r= $result->fetch_object())
          {
            $row['Pay'][]=$r;
 
          }
           echo json_encode($row);
     }
?>

 