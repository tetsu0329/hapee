<?php include ("navigation.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>View Product</title>
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

    .subtitlelight{
      border-left: 8px solid #c4f0c5;
      color: #fff;
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
	 	background-image: url(img/bg1.png);
	 	background-size: cover;
	 }

	 .story{
	 	background: #edffed;
	 	padding: 3%;
	 	min-height: 250px;
	 	max-height: 250px;

	 }

	 .story p {
	 	line-height: 2;
	 	text-align: justify;
	 }

	 .pagetitle{
	 	padding-top: 100px;
	 }

	  .contact{
	 	background: #23a393;
	 }

	blockquote{
	  border-left: 8px solid #23a393;
      text-transform: capitalize;
      padding-bottom: 2%;
	 }

	.conttitle{
		color: #23a393;
	}

	.topitem{
		padding:8px 16px;
		float:left;
		width:auto;
		border:none;
		display:block;
		outline:0
	}

	.facebookbtn{
		background: #3b5998;
		color: #fff;
		cursor: pointer;
	}
	.twitterbtn{
		background: #1DA1F2;
		color: #fff;
		cursor: pointer;
	}
	.instagrambtn{
		background: #fb3958;
		color: #fff;
		cursor: pointer;
	}
	input, textarea{
		resize: none;
		padding:8px;
		display:block;
		border:none;
		border-bottom:1px solid #ccc;
		width:100%
	}
	p{
		padding: 1%;
		line-height: 3;
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
<?php
	if(isset($_GET['ID'])){
		$id = $_GET['ID'];
		$producttable = mysqli_query($conn,"SELECT * FROM  producttable WHERE id='$id'");
	}
	else{
		echo "<script>window.location.replace('products.php')</script>";
	}
	while($rows11 = mysqli_fetch_assoc($producttable)){

?>
	<div class="container">
		<div class="pagetitle"><h6 class="subtitle">&nbsp;<?php echo $rows11['prodname'] ?></h6></div>
	</div>


	<div class="contact">
		<div class="container">
			<div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
				<div class="twocont view ">
		        	<center><img src="<?php echo substr($rows11['prodimg'],3) ?>" width="100%;"></center>
		        </div>

		        <div class="twocont view">
		        	<h6 style="color: #fff; font-size: 25px">Php <?php echo $rows11['prodprice'] ?></h6>
		        	<p class="subtitlelight">&nbsp;&nbsp;<b>Product weight:</b>&nbsp;<?php echo $rows11['prodweight'] ?></p>
					<p class="subtitlelight">&nbsp;&nbsp;<b>Available Quantity :</b>&nbsp;<?php echo $rows11['prodquantity'] ?></p>
		        	<p class="subtitlelight">&nbsp;&nbsp;<b>Quantity:</b>&nbsp;<input type="number" name="quantity" placeholder="0"></p>
		        	<br>
		        	<button class="buttonstyle">ADD TO CART</button>
		        </div>
			</div>
		</div>
	</div>
<?php
	}
?>

<!-- scripts -->
</div>
</body>
</html>
<?php include("footer.php");?>