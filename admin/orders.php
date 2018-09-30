<?php include("../admin/navigation.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>
</head>
<style type="text/css">

	* {
		color: #2c2828;
	}
	.content{
		padding: 5%;
	}

	.status{
		margin: 2%;
		padding: 15%;
		background: pink;
	}

	.count{
		font-size: 65px;
	}

	.a{
		background: #ece8d9 !important;
	}

	.b{
		background: #99ddcc;
	}

	.title{
    	border-left: 8px solid #23a393;
    	letter-spacing: 5px;
    	text-transform: capitalize;
	}

	.titlesmall{
    	letter-spacing: 1px;
    	font-size: 16px;
    	color: #23a393;
    	font-weight: bold;
    	font-style: normal;
	}

	.titlesmall2{
    	letter-spacing: 1px;
    	font-size: 12px;
    	color: gray;
    	font-style: italic;
	}
	table{
		background: #fff;
	}
	th{
		background: #99ddcc;
		text-transform: uppercase;
	}
	.name{
		width: 40%;
	}

	.w3-modal-content{
		padding: 3%;
	}

	.details{
		padding: 3%;
		line-height: 2;
	}

	.buttonstyle{
		background: #c4f0c5;
	}

	.buttonstyle:hover{
		background: #c4f0c5 !important;
    	border-left: 5px solid #23a393;
    	border-right: 5px solid #23a393;
	}
	textarea{
		width: 100%;
		border-radius: 4px;
   		resize: vertical;
	}
	.messagebody{
		text-align: justify;
		font-size: 14px !important;
		padding: 10px;
	}
	.twocont, .threecont, .fourcont{
		float:left;
		width:100%;
		padding:0 8px;
	}

	
	.boxin{
		padding: 3%;
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

	<div class="w3-main" style="margin-left:300px;margin-top:43px;">
		<div class="content">

			<h2 class="title">&nbsp;Orders</h2><br>
			<br>
			
			<div class="w3-responsive">
				
				<table class="w3-table w3-bordered w3-hoverable">
				<tr>
				  <th class="name">Product Name</th>
				  <th><center>Product Status</center></th>
				  <th><center>Actions</center></th>
				</tr>
				<tr>
				  <td>Product name dummmmmyy</td>
				  <td><center>Pending</center></td>
				  <td><center>
						<button onclick="document.getElementById('view').style.display='block'" class="w3-button buttonstyle"><img src="img/view.png" width="20px;"></button>
						  <div id="view" class="w3-modal">
						    <div class="w3-modal-content">
						      <div class="w3-container">
						        <span onclick="document.getElementById('view').style.display='none'" class="w3-button w3-display-topright">&times;</span>
						        <h5 class="title w3-left">&nbsp;View Order</h5><br>
						        <hr>

						        <div class="box">
						        	<div class="twocont boxin">
						        	 <img src="img/bg1.png" width="100%;">
						       		</div>

							        <div class="twocont boxin">
							        	 <h6 class="titlesmall w3-left">Product Name</h6><br><br>
							        	 <h6 class="titlesmall2 w3-left"><b>Price:</b>&nbsp;<span class="titlesmall">Php 123.00</span></h6><br><br>
							        	 <h6 class="titlesmall2 w3-left"><b>Quantity:</b>&nbsp;<span class="titlesmall">1</span></h6><br><br>
							        	 <h6 class="titlesmall2 w3-left"><b>Subtotal:</b>&nbsp;<span class="titlesmall">Php 123.00</span></h6><br><br>
							        	 <hr>
							        	 <h6 class="titlesmall2 w3-left"><b>TOTAL:</b>&nbsp;<span class="titlesmall">Php 123.00</span></h6>
							        </div>
						        </div>

						        <div style="border-bottom: 1px solid #23a393;">&nbsp;</div>

						        <div class="box">
						        	<div class="twocont boxin">
						        	 <img src="img/bg1.png" width="100%;">
						       		</div>

							        <div class="twocont boxin">
							        	 <h6 class="titlesmall w3-left">Product Name</h6><br><br>
							        	 <h6 class="titlesmall2 w3-left"><b>Price:</b>&nbsp;<span class="titlesmall">Php 123.00</span></h6><br><br>
							        	 <h6 class="titlesmall2 w3-left"><b>Quantity:</b>&nbsp;<span class="titlesmall">1</span></h6><br><br>
							        	 <h6 class="titlesmall2 w3-left"><b>Subtotal:</b>&nbsp;<span class="titlesmall">Php 123.00</span></h6><br><br>
							        	 <hr>
							        	 <h6 class="titlesmall2 w3-left"><b>TOTAL:</b>&nbsp;<span class="titlesmall">Php 123.00</span></h6>
							        </div>
						        </div><div style="border-bottom: 1px solid #23a393;">&nbsp;</div>

						      </div>
						    </div>
						  </div>
				
						<button class="w3-button buttonstyle"><img src="img/delete.png" width="20px;"></button>
						 </center></td>
				</tr>

				<tr>
				  <td>Product name dummmmmyy</td>
				  <td><center>Pending</center></td>
				  <td><center>
						<button onclick="document.getElementById('view').style.display='block'" class="w3-button buttonstyle"><img src="img/view.png" width="20px;"></button>
						  <div id="view" class="w3-modal">
						    <div class="w3-modal-content">
						      <div class="w3-container">
						        <span onclick="document.getElementById('view').style.display='none'" class="w3-button w3-display-topright">&times;</span>
						        <h5 class="title w3-left">&nbsp;View Order</h5><br>
						        <hr>

						        <div class="box">
						        	<div class="twocont boxin">
						        	 <img src="img/bg1.png" width="100%;">
						       		</div>

							        <div class="twocont boxin">
							        	 <h6 class="titlesmall w3-left">Product Name</h6><br><br>
							        	 <h6 class="titlesmall2 w3-left"><b>Price:</b>&nbsp;<span class="titlesmall">Php 123.00</span></h6><br><br>
							        	 <h6 class="titlesmall2 w3-left"><b>Quantity:</b>&nbsp;<span class="titlesmall">1</span></h6><br><br>
							        	 <h6 class="titlesmall2 w3-left"><b>Subtotal:</b>&nbsp;<span class="titlesmall">Php 123.00</span></h6><br><br>
							        	 <hr>
							        	 <h6 class="titlesmall2 w3-left"><b>TOTAL:</b>&nbsp;<span class="titlesmall">Php 123.00</span></h6>
							        </div>
						        </div>

						        <div style="border-bottom: 1px solid #23a393;">&nbsp;</div>

						        <div class="box">
						        	<div class="twocont boxin">
						        	 <img src="img/bg1.png" width="100%;">
						       		</div>

							        <div class="twocont boxin">
							        	 <h6 class="titlesmall w3-left">Product Name</h6><br><br>
							        	 <h6 class="titlesmall2 w3-left"><b>Price:</b>&nbsp;<span class="titlesmall">Php 123.00</span></h6><br><br>
							        	 <h6 class="titlesmall2 w3-left"><b>Quantity:</b>&nbsp;<span class="titlesmall">1</span></h6><br><br>
							        	 <h6 class="titlesmall2 w3-left"><b>Subtotal:</b>&nbsp;<span class="titlesmall">Php 123.00</span></h6><br><br>
							        	 <hr>
							        	 <h6 class="titlesmall2 w3-left"><b>TOTAL:</b>&nbsp;<span class="titlesmall">Php 123.00</span></h6>
							        </div>
						        </div><div style="border-bottom: 1px solid #23a393;">&nbsp;</div>

						      </div>
						    </div>
						  </div>
				
						<button class="w3-button buttonstyle"><img src="img/delete.png" width="20px;"></button>
						 </center></td>
				</tr>
				</table>
				</div>
		</div>
</body>
</html>
