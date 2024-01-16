
<?php 
      
$Id=$_REQUEST['id']; 


$con = new mysqli("localhost","id20010924_firstproject","androidVivek@09876","id20010924_androidfirstpro");

      $result= $con->query("SELECT * from Englishbooklist WHERE id=$Id");

          while($r= $result->fetch_object())
          {
            $row['Books_data'][]=$r;
          }
           echo json_encode($row);
?>