<?php
include ("navigation.php");
if(isset($_GET['Checkout']))
  {
	echo "<script>alert('Product Added to Cart')</script>";
    $prodID= $_GET['Checkout'];
    if(!empty($_SESSION['product']))
    {
      $rowcounttt = count($_SESSION['product']);
      $query = mysqli_query($conn,"SELECT * FROM producttable where id='$prodID'");
      while ($queryhold= mysqli_fetch_array($query)){
		$product[1] = $queryhold['id'];
		$product[2] = $_POST['quantity'];
		$product[3] = $queryhold['prodprice'];
		$product[4] = $queryhold['prodname'];
		$product[5] = $queryhold['prodimg'];
      }
      array_push($_SESSION['product'], $product);
      echo "<script>window.location = 'checkout.php'</script>";
    }
    if(empty($_SESSION['product']))
    {
      $query = mysqli_query($conn,"SELECT * FROM producttable where id='$prodID'");
      while ($queryhold= mysqli_fetch_array($query)){
		$product[1] = $queryhold['id'];
		$product[2] = $_POST['quantity'];
		$product[3] = $queryhold['prodprice'];
		$product[4] = $queryhold['prodname'];
		$product[5] = $queryhold['prodimg'];
      }
      $_SESSION['product']=array($product);
      echo "<script>window.location = 'checkout.php'</script>";
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hapee Cassy | Checkout</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style type="text/css">

	/*-------------------*/
	.title{
      border-bottom: 8px solid #23a393;
      letter-spacing: 10px;
      text-transform: capitalize;
      padding-bottom: 2%;
    }

    .subtitle{
      border-left: 8px solid #23a393;
      letter-spacing: 10px;
      text-transform: capitalize;
      padding-bottom: 2%;
    }

	.titlesmall{
	      letter-spacing: 1px;
	      font-size: 14px;
	}
	.container{
		max-width:980px;
		margin:auto
	}
	.wcontainer:after, .wcontainer:before{
		float:left;width:100%;
	}
	.bestsellers{
		padding: 1%;
	}

	.twocont, .threecont, .fourcont{
		float:left;
		width:100%;
		padding:0 8px;
	}


	.bg{
	    background: #c4f0c5;
	    width:100%;
	    text-align:left;
	    padding:8px 16px;
	    box-shadow: none;
	    outline: none;
	    border: none;
	  }
	.buttonstyle{
	    background: #c4f0c5;
	    text-align:center;
	    padding:8px 16px;
	    box-shadow: none;
	    outline: none;
	    border: none;
	    cursor: pointer;
	  }

	.buttonstyle:hover{
	    background: #c4f0c5 !important;
	      border-left: 5px solid #23a393;
	      border-right: 5px solid #23a393;
	  }

	 .ourstory{
	 	background: #23a393;
	 	padding-bottom: 5%;
	 }

	 .story{
	 	background: #edffed;
	 	padding:5%;
	 	margin: 1%;
	 }

	 .story p {
	 	line-height: 2;
	 	text-align: justify;
	 }

	 .pagetitle{
	 	padding-top: 100px;
	 }
	 .box1{
	 	padding: 3%;
	 }
	 .conttitle{
	 	color: gray;
	 	font-size: 12px;
	 }
	 .size{
	 	color: #23a393;
	 	font-size: 18px;
	 	font-weight: bold;
	 }
	@media (min-width:601px){
		.twocont{
			width:49.99999%;
		}
		.threecont{
			width:33.33333%;
		}
		.fourcont{
			width:24.99999%;
		}
	}
</style>
<body>
<div class="wrapper">

<!-- title -->

	<div class="container">
		<div class="pagetitle"><h6 class="subtitle">&nbsp;Checkout</h6></div>
	</div>
	<div class="ourstory">
		<div class="container">
			<div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
			<?php
			if(!empty($_SESSION['product'])){
				$total = 0;
			$rowcount= count($_SESSION['product']);
			$sub = 0;
			for($row=0; $row<$rowcount; $row++)
			{
			?>

	        <div class="story">
		    	<div class="twocont box1"><center><img src="<?php echo substr($_SESSION['product'][$row][5], 3) ?>" width="100%;"></center></div>

		    	<div class="twocont box1">
		        		<h6><b class="conttitle"><b class="size"><?php echo($_SESSION['product'][$row][4]) ?></b></h6>
		        		<hr>
		        		<h6><b class="conttitle"><i>Price</i></b>&nbsp;&nbsp;<span class="size"><?php echo($_SESSION['product'][$row][3]) ?></span></h6>
		        		<h6><b class="conttitle"><i>Quantity</i></b>&nbsp;&nbsp;<span class="size"><?php echo($_SESSION['product'][$row][2]) ?></span></h6>
						<h6><b class="conttitle"><i>Subtotal</i></b>&nbsp;&nbsp;<span class="size">
						<?php 
							$total = $_SESSION['product'][$row][2] * $_SESSION['product'][$row][3]; 
							echo "Php ".$total;
						?>
						</span></h6>
		        		<hr>
		        		
		        </div>
		    	<center><a href="?ID=<?php echo $_SESSION['product'][$row][1] ?>"><button class="buttonstyle">Remove Products</button></a></center>
	        </div>
			<?php
				$sub += $total;
				}
			}
			?>
	    	</div>
			<h6 ><b  style="color:white;"><i>TOTAL</i></b>&nbsp;&nbsp;<span class="size"  style="color:white;">Php <?php echo $sub ?></span></h6>
		</div>
		<form action="" method="POST">
		<center><p><input type="submit" value="PLACE ORDER" name="submitorder" class="w3-button w3-brown mybtn"></p></center>
		</form>
		
	</div>





<!-- scripts -->
</div>
</body>
</html>
<?php include("footer.php");?>
<?php
if(isset($_POST['submitorder'])){
	if(empty($_SESSION['product'])){
		echo "<script>alert('Your Cart is empty');</script>";
	}
	else{
		$_SESSION['paymentAck'] = 'BANK_DEPOSIT';
		echo "<script>window.location.replace('payment/bank.php')</script>";
	}
}
?>

<?php
	if(isset($_GET['ID'])){
		$ProductID = $_GET['ID'];
		$rowcount= count($_SESSION['product']);
			for($row=0; $row<$rowcount; $row++)
			{   
				if(in_array($ProductID, $_SESSION['product'][$row])){
				unset($_SESSION['product'][$row]);
				}
			}
		$_SESSION['product']=array_values($_SESSION['product']);
		echo "<script>window.location.replace('checkout.php')</script>";
	}
?>