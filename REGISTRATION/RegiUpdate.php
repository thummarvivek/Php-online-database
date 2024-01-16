<?php 
  
   $uname=$_REQUEST['User_name'];
   $email=$_REQUEST['Email'];
   $phoneno=$_REQUEST['Phoneno'];
   $bio=$_REQUEST['Bio'];
   $address=$_REQUEST['Address'];
   $Id=$_REQUEST['User_id'];
   
   
      $con = new mysqli("localhost","id20010924_firstproject","androidVivek@09876","id20010924_androidfirstpro");
       $result= $con->query("update  Registration set User_name='$uname',Email='$email',Phoneno='$phoneno'
       ,Bio='$bio',Address='$address' where User_id='$Id'");
      
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