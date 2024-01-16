<?php
        
      $con = new mysqli("localhost","id20010924_firstproject","androidVivek@09876","id20010924_androidfirstpro");
        
	
	      $result= $con->query("select * from SpeakingSkill");
          while($r= $result->fetch_object())
          {
            $row['ShortNotes'][]=$r;
          }
           echo json_encode($row);
	  
?>