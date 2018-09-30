<?php include ("navigation.php"); ?>
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
	        <div class="story">
		    	<div class="twocont box1"><center><img src="img/tall.jpg" width="100%;"></center></div>

		    	<div class="twocont box1">
		        		<h6><b class="conttitle"><b class="size">Product Name</b></h6>
		        		<hr>
		        		<h6><b class="conttitle"><i>Price</i></b>&nbsp;&nbsp;<span class="size">Php 123.00</span></h6>
		        		<h6><b class="conttitle"><i>Quanity</i></b>&nbsp;&nbsp;<span class="size">1</span></h6>
		        		<h6><b class="conttitle"><i>Subtotal</i></b>&nbsp;&nbsp;<span class="size">Php 123.00</span></h6>
		        		<hr>
		        		<h6><b class="conttitle"><i>TOTAL</i></b>&nbsp;&nbsp;<span class="size">Php 123.00</span></h6>
		        </div>
		    	<center><a href="about.php"><button class="buttonstyle">PLACE ORDER</button></a></center>
	        </div>

	        <div class="story">
		    	<div class="twocont box1"><center><img src="img/tall.jpg" width="100%;"></center></div>

		    	<div class="twocont box1">
		        		<h6><b class="conttitle"><b class="size">Product Name</b></h6>
		        		<hr>
		        		<h6><b class="conttitle"><i>Price</i></b>&nbsp;&nbsp;<span class="size">Php 123.00</span></h6>
		        		<h6><b class="conttitle"><i>Quanity</i></b>&nbsp;&nbsp;<span class="size">1</span></h6>
		        		<h6><b class="conttitle"><i>Subtotal</i></b>&nbsp;&nbsp;<span class="size">Php 123.00</span></h6>
		        		<hr>
		        		<h6><b class="conttitle"><i>TOTAL</i></b>&nbsp;&nbsp;<span class="size">Php 123.00</span></h6>
		        </div>
		    	<center><a href="about.php"><button class="buttonstyle">PLACE ORDER</button></a></center>
	        </div>

	        <div class="story">
		    	<div class="twocont box1"><center><img src="img/tall.jpg" width="100%;"></center></div>

		    	<div class="twocont box1">
		        		<h6><b class="conttitle"><b class="size">Product Name</b></h6>
		        		<hr>
		        		<h6><b class="conttitle"><i>Price</i></b>&nbsp;&nbsp;<span class="size">Php 123.00</span></h6>
		        		<h6><b class="conttitle"><i>Quanity</i></b>&nbsp;&nbsp;<span class="size">1</span></h6>
		        		<h6><b class="conttitle"><i>Subtotal</i></b>&nbsp;&nbsp;<span class="size">Php 123.00</span></h6>
		        		<hr>
		        		<h6><b class="conttitle"><i>TOTAL</i></b>&nbsp;&nbsp;<span class="size">Php 123.00</span></h6>
		        </div>
		    	<center><a href="about.php"><button class="buttonstyle">PLACE ORDER</button></a></center>
	        </div>
	    	</div>
		</div>
	</div>





<!-- scripts -->
</div>
</body>
</html>
<?php include("footer.php");?>