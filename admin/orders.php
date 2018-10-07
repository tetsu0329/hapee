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
				  <th class="name">Transaction No</th>
				  <th><center>Customer Name</center></th>
				  <th><center>Order Date</center></th>
				  <th><center>Total Amount</center></th>
				  <th><center>Actions</center></th>
				</tr>
				<?php
					$query = mysqli_query($conn, "SELECT * FROM transactiontable");
					while($rows = mysqli_fetch_assoc($query)){
						$id = $rows['userID'];
						$query2 = mysqli_query($conn, "SELECT * FROM usertable where id = $id");
						$rows2 = mysqli_fetch_assoc($query2);

				?>
				<tr>
				  <td>#<?php echo $rows['transactionID'] ?></td>
				  <td><center><?php echo $rows2['fname']." ".$rows2['lname'] ?></center></td>
				  <td><center><?php echo $rows['timestamp'] ?></center></td>
				  <td><center><?php echo "Php ".$rows['totalAmount'] ?></center></td>
				  <td><center>
						<a href="?ViewID=<?php echo $rows['transactionID'] ?>"><button class="w3-button buttonstyle"><img src="img/view.png" width="20px;"></button></a>
						  <div id="view" class="w3-modal">
						    <div class="w3-modal-content">
						      <div class="w3-container">
						        <span onclick="document.getElementById('view').style.display='none'" class="w3-button w3-display-topright">&times;</span>
						        <h5 class="title w3-left">&nbsp;View Order</h5><br>
						        <hr>
								<?php
									$idd = $_GET['ViewID'];
									$query3 = mysqli_query($conn, "SELECT * FROM itemtransactiontable WHERE transactionID = $idd");
									while($rows3 = mysqli_fetch_assoc($query3)){
										$id3 = $rows3['productID'];
										$query4 = mysqli_query($conn, "SELECT * FROM producttable where id = $id3");
										$rows4 = mysqli_fetch_assoc($query4);
								?>
						        <div class="box">
						        	<div class="twocont boxin">
						        	 <img src="img/bg1.png" width="100%;">
						       		</div>

							        <div class="twocont boxin">
							        	 <h6 class="titlesmall w3-left"><?php echo $rows4['prodname'] ?></h6><br><br>
							        	 <h6 class="titlesmall2 w3-left"><b>Price:</b>&nbsp;<span class="titlesmall"><?php echo "Php ".$rows4['prodprice'] ?></span></h6><br><br>
							        	 <h6 class="titlesmall2 w3-left"><b>Quantity:</b>&nbsp;<span class="titlesmall"><?php echo $rows3['qty'] ?></span></h6><br><br>
										 <h6 class="titlesmall2 w3-left"><b>Subtotal:</b>&nbsp;<span class="titlesmall">
										 <?php
										 $sub =  $rows4['prodprice'] * $rows3['qty'];
										 echo "Php ".$sub;
										 ?></span></h6><br><br>
							        	 <hr>
							        </div>
						        </div>
								
						        <div style="border-bottom: 1px solid #23a393;">&nbsp;</div>
								<?php
									}
								?>
								<h6 class="titlesmall2 w3-left"><b>TOTAL:</b>&nbsp;<span class="titlesmall"><?php echo "Php ".$rows['totalAmount'] ?></span></h6>
						      </div>
						    </div>
						  </div>
				
						<!-- <button class="w3-button buttonstyle"><img src="img/delete.png" width="20px;"></button> -->
						 </center></td>
				</tr>
				<?php
					}
				?>
				</table>
				</div>
		</div>
</body>
</html>
<?php
echo "<script> var view_modal = document.getElementById('view'); </script>";
	if(isset($_GET['ViewID'])){
		$idd = $_GET['ViewID'];
		echo "<script> view_modal.style.display = 'block' </script>";
	}
	
?>
<script>
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
			
			if (event.target == view_modal) {
			view_modal.style.display = "none";
			}
		}
</script>
