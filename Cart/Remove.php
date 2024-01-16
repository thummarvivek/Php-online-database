<?php


$uid = $_REQUEST['User_id'];
$cid = $_REQUEST['cart_id'];

 
 
        $con = new mysqli("localhost","id20010924_firstproject","androidVivek@09876","id20010924_androidfirstpro");

$result =$con ->query( "DELETE FROM Cart WHERE User_id = '$uid' AND cart_id = '$cid'");
 

if($result) 
    {
        echo "Remove Successes";
    }
 
?>