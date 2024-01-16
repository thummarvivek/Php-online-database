<?php
 
$uid = $_REQUEST['User_id'];
$bid = $_REQUEST['id'];
$sta = $_REQUEST['status'];

 $con = new mysqli("localhost","id20010924_firstproject","androidVivek@09876","id20010924_androidfirstpro");
       
$result=$con->query(" INSERT INTO Cart(User_id, id, status) VALUES ($uid, $bid, $sta) ");

// $status=$con->query("UPDATE Add_Book SET book_status=false WHERE id='$bid' ");

// if($result)
//     {
        
    $r1= $con->query("select * from Cart WHERE User_id =$uid");
        while($r= $r1->fetch_object())
        {
             $row['BookCart'][]=$r;
        }
     
    echo json_encode($row);
// } 
?>