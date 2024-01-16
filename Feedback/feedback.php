<?php


 $uid = $_REQUEST['User_id'];
 $fcomment = $_REQUEST['Feedback_comments'];
 $frating = $_REQUEST['Feedback_rating'];

  $con = new mysqli("localhost","id20010924_firstproject","androidVivek@09876","id20010924_androidfirstpro");
  
  $query= "INSERT INTO `Feedback`(`User_id`, `Feedback_comments`, `Feedback_rating`) values('$uid','$fcomment','$frating')";
      
    $result = mysqli_query($con, $query);
    
      if($result)
      {
         $r1= $con->query("select * from Feedback");
          while($r= $r1->fetch_object())
          {
            $row['feed'][]=$r;
          }
           echo json_encode($row);
      }
	  
?>