<?php 

    
    $user_id=$_REQUEST["User_id"];
    $book_id=$_REQUEST["id"];
    $pay_id=$_REQUEST["payment_id"];
    $status=$_REQUEST["status"];
    $ordate=$_REQUEST["odate"];
    $ortime=$_REQUEST["otime"];

    $con = new mysqli("localhost","id20010924_firstproject","androidVivek@09876","id20010924_androidfirstpro");
 
   $result =$con-> query("
   
   INSERT INTO `Book_Order` (`User_id`, `id`, `payment_id`, `status`, `odate`, `otime`) VALUES('$user_id','$book_id','$pay_id','$status','$ordate','$ortime')");
 

            
	      $r1= $con->query("select * from Book_Order");
          while($r= $r1->fetch_object())
          {
            $row['OrderPayment'][]=$r;
          }
           echo json_encode($row);
        
          
    ?>