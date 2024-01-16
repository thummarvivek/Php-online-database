<?php

$id = $_REQUEST['User_id'];
 
 
    $con = new mysqli("localhost","id20010924_firstproject","androidVivek@09876","id20010924_androidfirstpro");
       

 

$result= $con->query("

SELECT Englishbooklist.name ,Englishbooklist.url ,Englishbooklist.Book_edition ,Englishbooklist.Book_price,
    Cart.id,Cart.cart_id

FROM Cart
INNER JOIN Registration ON Cart.User_id = Registration.User_id 
INNER JOIN Englishbooklist ON Cart.id = Englishbooklist.id
WHERE Cart.User_id='$id' AND Cart.status='1'

  ");
 

        while($r= $result->fetch_object())
        {
             $row['CartBook'][] = $r;
        }
            echo json_encode($row);

 


?>