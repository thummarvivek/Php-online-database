<?php 
     $con = new mysqli("localhost","id20010924_firstproject","androidVivek@09876","id20010924_androidfirstpro");

    $search=$_REQUEST['search'];  
   
     $r1= $con->query("select * from Englishbooklist where name LIKE '%$search%' ");
      
      while($r= $r1->fetch_object())
      {
        $row['Books_data'][]=$r;
      }
       echo json_encode($row);
      
?>

