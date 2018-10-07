<?php

session_start();
ob_start();
include_once("config.php");

// NOTE: Please set to $_SESSION["paymentAck"] = "BANK_DEPOSIT" before executing/calling payment/bank.php

if(!isset($_SESSION["product"]) || isset($_SESSION["payment"]) || !isset($_SESSION["paymentAck"]) || !isset($_SESSION["cid"]) )
{
    header('Location:../');
    exit;
}

if($_SESSION["paymentAck"] == "BANK_DEPOSIT")
{
    $noteCashPoint = '';

    if(isset($_SESSION["paypal_products"])){
        unset($_SESSION["paypal_products"]);;
    }

    $userId = $_SESSION["cid"];
    $GrandTotal = 0.00;
    $ItemTotalPrice = 0.00;
    $ShippingFeeAmount = 0.00;
    $procc = "COD";
    // Create New Transaction Record
    $insert_row = $mysqli->query("INSERT INTO transactiontable
                (`userID`, `transactionStatus`, `paymentMethod`, `totalAmount`, `itemAmount`, `note`)
                VALUES
                ('$userId','_INIT','Money Transfer', $GrandTotal, $ItemTotalPrice, '$procc')
              ");

    if($insert_row){
        $transactionID = $mysqli->insert_id;
        $getuseremail = $mysqli->query("SELECT * FROM usertable WHERE id = $userId");
        $getuser = mysqli_fetch_assoc($getuseremail);
        $emailll = $getuser['emailadd'];
        $userrr = $getuser['fname'];
        $userrr2 = $getuser['fname']." ".$getuser['lname'];
        $userAdd = $getuser['street'];
        
        
        

    }else{
        die('Error : ('. $mysqli->errno .') '. $mysqli->error);
    }

    // Add Product ordered
    $ItemTotalPrice = 0;
    $ItemTotalQty = 0;
    $maills = " ";
    foreach ($_SESSION["product"] as $cart_item)
    {
        $orderedProductId = $cart_item[1];  //$cart_item[1] = productId (PK)
        $getuseremail2 = $mysqli->query("SELECT * FROM producttable WHERE id= $orderedProductId");
        $getuser2 = mysqli_fetch_assoc($getuseremail2);
        $proddd = $getuser2['prodname'];
        $piccc =  $getuser2['prodimg'];
        $orderedProductPrice = $cart_item[3] * 1.00;    //$cart_item[3] = price
        $orderedProductQty = $cart_item[2];             //$cart_item[4] = qty
          
        $insert_row = $mysqli->query("INSERT INTO itemtransactiontable
                  (`transactionID`, `productID`, `qty`, `price`, `note`) VALUES
                  ('$transactionID','$orderedProductId','$orderedProductQty','$orderedProductPrice','')");

        if(!$insert_row){
            die('Error : ('. $mysqli->errno .') '. $mysqli->error);
        }

        // item price X quantity
        $subtotal = $orderedProductPrice*$orderedProductQty;
        $ItemTotalQty = $ItemTotalQty + $orderedProductQty;

        //total price
        $ItemTotalPrice = $ItemTotalPrice + $subtotal;
    }
    // Update total price
    if($mysqli->query("UPDATE transactiontable SET `transactionStatus`='PENDING', `totalAmount` = '$ItemTotalPrice', 
                `itemAmount` = '$ItemTotalPrice'
                WHERE `userID` = '$userId' AND `transactionID` = '$transactionID'")) {
    } 
    else {
        die('Error : ('. $mysqli->errno .') '. $mysqli->error);
    }
    // Acknowledge Transaction Compelete
    unset($_SESSION["paymentAck"]);
    unset($_SESSION["product"]);
    
    echo "<script>alert('Transaction Successful');window.location.replace('../thankyou.php?TransactionCode=$transactionID')</script>";

    //TODO: DEBUG
    //var_dump($_SESSION);

}
?>