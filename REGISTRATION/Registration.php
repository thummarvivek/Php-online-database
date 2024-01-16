<?php

    $uname=$_REQUEST['User_name'];
    $email=$_REQUEST['Email'];
    // $phoneno=$_REQUEST['Phoneno'];
//      $bio=$_REQUEST['Bio'];
//   $address=$_REQUEST['Address'];
    // $ulat=$_REQUEST['lat'];
    // $ulog =$_REQUEST['log'];
    // $profile_picture=$_REQUEST['Profile_picture'];
    // $ugender=$_REQUEST['gender'];
    // $udob=$_REQUEST['dob'];
    $password=$_REQUEST['Password'];
    
    
    
    
      $con = new mysqli("localhost","id20010924_firstproject","androidVivek@09876","id20010924_androidfirstpro");
    //   $result= $con->query("INSERT INTO `Registration`(  `User_name`, `Email`, `Phoneno`, `Bio`, `Address`, `lat`, `log`, `Profile_picture`, `gender`, `dob`, `Password`) values( '$uname','$email','$phoneno','$bio','$address','$ulat','$ulog','$profile_picture','$ugender','$udob','$password')");
    
    $result= $con->query("INSERT INTO `Registration`(  `User_name`, `Email`, `Password`) values( '$uname','$email','$password')");
      
      if($result)
      {
         $r1= $con->query("select * from Registration ");
          while($r= $r1->fetch_object())
          {
            $row['registration'][]=$r;
          }
           echo json_encode($row);
      }
	  
?>