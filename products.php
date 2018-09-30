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
</style>
<body>
<div class="wrapper">

<!-- title -->

	<div class="container">
		<div class="pagetitle"><h6 class="subtitle">&nbsp;Our Products</h6></div>
	</div>
	<div class="container">

	<div class="w3-row-padding w3-padding-32">
        <a href="product_view.php"><div class="threecont" style="margin-top: 10px;">
          <img src="img/tall.jpg" style="width:100%">
          <div class="wcontainer product">
            <center><p><b>Product 1</b></p></center>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
          </div>
          <div class="bg"><center><p>Php 123.00</p></center></div>
        </div></a>

        <a href="product_view.php"><div class="threecont" style="margin-top: 10px;">
          <img src="img/tall.jpg" style="width:100%">
          <div class="wcontainer product">
            <center><p><b>Product 1</b></p></center>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
          </div>
          <div class="bg"><center><p>Php 123.00</p></center></div>
        </div></a>


        <a href="product_view.php"><div class="threecont"  style="margin-top: 10px;">
          <img src="img/tall.jpg" style="width:100%">
          <div class="wcontainer product">
            <center><p><b>Product 1</b></p></center>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
          </div>
          <div class="bg"><center><p>Php 123.00</p></center></div>
        </div></a>

        <a href="product_view.php"><div class="threecont"  style="margin-top: 10px;">
          <img src="img/tall.jpg" style="width:100%">
          <div class="wcontainer product">
            <center><p><b>Product 1</b></p></center>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
          </div>
          <div class="bg"><center><p>Php 123.00</p></center></div>
        </div></a>

        <a href="product_view.php"><div class="threecont"  style="margin-top: 10px;">
          <img src="img/tall.jpg" style="width:100%">
          <div class="wcontainer product">
            <center><p><b>Product 1</b></p></center>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
          </div>
          <div class="bg"><center><p>Php 123.00</p></center></div>
        </div></a>

    </div>

</div>
<br>





<!-- scripts -->
</div>
</body>
</html>
<?php include("footer.php");?>