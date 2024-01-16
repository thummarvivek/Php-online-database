<?php
        
      $con = new mysqli("localhost","id20010924_firstproject","androidVivek@09876","id20010924_androidfirstpro");
        
	
	      $result= $con->query("select * from Tanactive");
          while($r= $result->fetch_object())
          {
            $row['Aence'][]=$r;
          }
           echo json_encode($row);
	  
?>