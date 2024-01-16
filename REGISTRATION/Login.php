<?php 

   $uname=$_REQUEST['User_name'];
   $password=$_REQUEST['Password'];
    
    $con = new mysqli("localhost","id20010924_firstproject","androidVivek@09876","id20010924_androidfirstpro");

    $result = $con->query( "select * from Registration where User_name='$uname' and Password ='$password'"); 
     if($result){
     
         while($r= $result->fetch_object())
          {
            $row['registration'][]=$r;
 
          }
           echo json_encode($row);
     }
?>
 