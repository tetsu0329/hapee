<?php include ("navigation.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
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

	  .product{
	  	background: #edffed;
	  	padding: 5%;
	  }

	 .pagetitle{
	 	padding-top: 100px;
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
		<div class="pagetitle"><h6 class="subtitle">&nbsp;Our Products</h6></div>
	</div>
	<div class="container">
	<?php
	if(isset($_GET['Category'])){
		$cat = $_GET['Category'];
		$producttable = mysqli_query($conn,"SELECT * FROM  producttable WHERE prodcategory='$cat'");
	}
	else{
		$producttable = mysqli_query($conn,"SELECT * FROM  producttable");
	}
	?>

	<div class="w3-row-padding w3-padding-32">
	<?php
		while($rows10 = mysqli_fetch_assoc($producttable)){
	?>
        <a href="product_view.php?ID=<?php echo $rows10['id'] ?>"><div class="threecont" style="margin-top: 10px;">
          <img src="<?php echo substr($rows10['prodimg'],3) ?>" style="width:100%">
          <div class="wcontainer product">
            <center><p><b><?php echo $rows10['prodname'] ?></b></p></center>
            <center><p>Available Quantity: <?php echo $rows10['prodquantity'] ?></p></center>
          </div>
          <div class="bg"><center><p>Php <?php echo $rows10['prodprice'] ?></p></center></div>
        </div></a>
		<?php
			}
		?>
    </div>

</div>
<br>





<!-- scripts -->
</div>
</body>
</html>
<?php include("footer.php");?>