<?php 


   $password=$_REQUEST['Password'];
   $Id=$_REQUEST['User_id'];
   
      $con = new mysqli("localhost","id20010924_firstproject","androidVivek@09876","id20010924_androidfirstpro");
      
       $result= $con->query("update  Registration set Password='$password' where User_id='$Id'");
      
        if($result)
          {
	      $r1= $con->query("select * from Registration");
          while($r= $r1->fetch_object())
          {
            $row['registration'][]=$r;
          }
           echo json_encode($row);
        } 
?>
