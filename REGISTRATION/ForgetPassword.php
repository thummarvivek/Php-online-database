<?php 

   $phone=$_REQUEST["Phoneno"];

   
    
    $con = new mysqli("localhost","id20010924_firstproject","androidVivek@09876","id20010924_androidfirstpro");

    $result = $con->query( "select User_id from Registration where Phoneno ='$phone'"); 
    
     if($result){
     
         while($r= $result->fetch_object())
          {
            $row['registration'][]=$r;
 
          }
           echo json_encode($row);
     }
?>

 