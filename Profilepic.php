<?php

$con = new mysqli("localhost","id20010924_firstproject","androidVivek@09876","id20010924_androidfirstpro");

    $filename=$_FILES['file']['name'];
	 $name=$_POST["name"];

    $Id=$_POST['User_id'];
    
    $path="Profilesave/$filename";
    
    // $url=$_REQUEST['Profile_picture'];
    
// 	 $profile_picture=$_REQUEST['Profile_picture'];


     $url="https://VivekGroup.com/English_project/$path";
     

     $ins = "UPDATE `Registration` SET `Profile_picture`='$url' WHERE `User_id`='$Id'"; 
	 
    move_uploaded_file($_FILES['file']['tmp_name'], $path);
        $con->query($ins);
	  $result= $con->query("select * from Registration ");
	  
	  if($result){
   
          while($r= $result->fetch_object())
          {
            $row['images'][]=$r;
          }
           echo json_encode($row);
	  }
 ?>
