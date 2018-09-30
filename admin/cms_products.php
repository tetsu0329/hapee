<?php include("../admin/navigation.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>CMS | Products</title>
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
      border-left: 8px solid #23a393;
      letter-spacing: 1px;
      font-size: 14px;
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
	}

	.buttonstyle{
		background: #c4f0c5;
	}

	.buttonstyle:hover{
		background: #c4f0c5 !important;
    	border-left: 5px solid #23a393;
    	border-right: 5px solid #23a393;
	}
	 .sliderimg{
    max-width: 50%;
   /* border: 1px solid black;*/
  }

  textarea{
  	resize: none !important;
  }
</style>
<body>

	<div class="w3-main" style="margin-left:300px;margin-top:43px;">
		<div class="content">

			<h2 class="title">&nbsp;CMS | Products</h2><br>
			<br>
			
			<div class="w3-responsive">
				<div class="topbtn">
					<div class="w3-show-inline-block w3-right">
						<div class="w3-bar">
						  <button onclick="document.getElementById('add').style.display='block'" class="w3-button w3-large buttonstyle"><img src="img/add.png" width="20px;"></button>
						  <div id="add" class="w3-modal">
						    <div class="w3-modal-content">
						      <div class="w3-container">
						        <span onclick="document.getElementById('add').style.display='none'" class="w3-button w3-display-topright">&times;</span>
						        <div class="w3-container">
						        	<h5 class="title w3-left">&nbsp;Add Product</h5><br>
					        	<hr>
					        	<div class="details">
					        	<form action="" method="POST" enctype="multipart/form-data">
									  <p><input class="w3-input w3-border w3-round-large" name="prodname" type="text" placeholder="Product Name"></p>
									  <p><select class="w3-select w3-border w3-round-large" name="option1">
									  		<option value="" disabled selected>Choose Product Category</option>
											<option value="Chocolate">Chocolate</option>
											<option value="Chips">Chips</option>
											<option value="Pastry">Pastry</option>
									  </select></p>
								       <p><input class="w3-input w3-border w3-round-large" name="quantity" type="number" placeholder="Quantity"></p>
											 <p><input class="w3-input w3-border w3-round-large" name="weight" type="number" placeholder="Weight"></p>
											 <p><input class="w3-input w3-border w3-round-large" name="price" type="number" placeholder="Price"></p>

								       <div class="">
							            <div class="w3-container">
							              <div class="w3-center">
							                <h6 class="titlesmall w3-left">&nbsp;Product Image</h6><br><br>
							                <img src="img/sample.jpg" class="sliderimg" id="prodimg"><br><br>
							                <center><input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="product" value="Choose Photo" accept="image/*" onchange="loadproducts(event)"></center><br>
							              </div>
														<script>
															var loadproducts = function(event) {
																var output = document.getElementById('prodimg');
																output.src = URL.createObjectURL(event.target.files[0]);
																};
													</script>
							            </div>
							          </div>
									
									<center><input type="submit" name="uploadbtn" class="w3-button w3-large buttonstyle" value="SAVE">
									</form>
					        	</div>
						        </div>
						      </div>
						    </div>
						  </div><br><br>
						</div>
					</div>
				</div>
				
				<table class="w3-table w3-bordered w3-hoverable">
				<tr>
				  <th><center>Product Name</center></th>
				  <th class="name">Product Category</th>
				  <th><center>Product Quantity</center></th>
				  <th><center>Actions</center></th>
				</tr>

				<?php 
					while($rows6=mysqli_fetch_assoc($producttable)){
				
				?>


				<tr>
				  <td><center><?php echo $rows6['prodname'] ?></center></td>
				  <td><?php echo $rows6['prodcategory'] ?></td>
				  <td><center><?php echo $rows6['prodquantity'] ?> PCS</center></td>
				  <td>
				  	<center>
				  	  <a href="?viewID=<?php echo $rows6['id'] ?>"><button class="w3-button buttonstyle"><img src="img/view.png" width="20px;"></button></a>
						<?php
						if(isset($_GET['viewID'])){
							$id = $_GET['viewID'];
							$viewprod = mysqli_query($conn, "SELECT * FROM producttable WHERE id=$id");
							$rows7 = mysqli_fetch_assoc($viewprod);
						?>
					  <div id="view" class="w3-modal">
					    <div class="w3-modal-content">
					      <div class="w3-container">
					        <span onclick="document.getElementById('view').style.display='none'" class="w3-button w3-display-topright">&times;</span>
					        <div class="w3-container">
					        	<h5 class="title w3-left">&nbsp;View Product</h5><br>
					        	<hr>
					        	<div class="details">
						        	<center>
						        		<img src="<?php echo $rows7['prodimg'] ?>" class="sliderimg"><br><br>
						        		<b style="color: #23a393;"><?php echo $rows7['prodname'] ?></b><hr>
						        	</center>
						        	<h6 class="titlesmall w3-left">&nbsp;<b style="color: #23a393;">Weight:</b>&nbsp;<span><?php echo $rows7['prodweight'] ?></span></h6><br><br>
					        		<h6 class="titlesmall w3-left">&nbsp;<b style="color: #23a393;">Category:</b>&nbsp;<span><?php echo $rows7['prodcategory'] ?></span></h6><br><br><br>
					        		<h6 class="titlesmall w3-left">&nbsp;<b style="color: #23a393;">Quantity:</b>&nbsp;<span><?php echo $rows7['prodquantity'] ?></span></h6><br><br>
					        		<h6 class="titlesmall w3-left">&nbsp;<b style="color: #23a393;">Price:</b>&nbsp;<span><?php echo $rows7['prodprice'] ?></span></h6><br><br>
					        	</div>
					        </div>
					      </div>
					    </div>
					  </div>
						<?php
						}
						?>

					  <!-- <button onclick="document.getElementById('edit').style.display='block'" class="w3-button buttonstyle"><img src="img/edit.png" width="20px;"></button> -->
					  <div id="edit" class="w3-modal">
					    <div class="w3-modal-content">
					      <div class="w3-container">
					        <span onclick="document.getElementById('edit').style.display='none'" class="w3-button w3-display-topright">&times;</span>
					        <div class="w3-container">
					        	<h5 class="title w3-left">&nbsp;Edit Product</h5><br>
					        	<hr>
					        	<div class="details">
					        		<form>
									  <p><input class="w3-input w3-border w3-round-large w3-quarter" name="prodcode" type="text" placeholder="Product Code"></p><br><br>
									  <p><input class="w3-input w3-border w3-round-large" name="prodname" type="text" placeholder="Product Name"></p>
									  <p><select class="w3-select w3-border w3-round-large" name="option">
									  		<option value="" disabled selected>Choose Product Category</option>
											<option value="1">Option 1</option>
											<option value="2">Option 2</option>
											<option value="3">Option 3</option>
									  </select></p>
									  <p><select class="w3-select w3-border w3-round-large" name="option">
									  		<option value="" disabled selected>Choose Product Classification</option>
											<option value="1">Option 1</option>
											<option value="2">Option 2</option>
											<option value="3">Option 3</option>
									  </select></p>
									   <p><textarea class="w3-input w3-border w3-round-large" name="proddesc" type="text" placeholder="Product Description"></textarea></p>
								       <p><input class="w3-input w3-border w3-round-large" name="quantity" type="number" placeholder="Quantity"></p>

								       <div class="">
							            <div class="w3-container">
							              <div class="w3-center">
							                <h6 class="titlesmall w3-left">&nbsp;Product Image</h6><br><br>
							                <img src="img/sample.jpg" class="sliderimg"><br><br>
							                <center><input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="logo" value="Choose Photo" accept="image/*" onchange="loadlogo(event)"></center><br>
							              </div>
							            </div>
							          </div>
									</form>
									<button class="w3-button w3-large buttonstyle">SAVE</button>
					        	</div>
					        </div>
					      </div>
					    </div>
					  </div>
						<a onclick='javascript:confirmationDelete(this);return false;' href="?DeleteID=<?php echo $rows6['id'] ?>"><button class="w3-button buttonstyle"><img src="img/delete.png" width="20px;"></button></a>
					</center>
				  </td>
				</tr>

				<?php 
					}
				?>

				</table>
				</div>
		</div>
		<script>
				function confirmationDelete(anchor)
				{
					var conf = confirm('Are you sure want to delete this record?');
					if(conf)
							window.location=anchor.attr("href");
				}
				</script>
		<?php 
			if(isset($_GET['viewID'])){
				echo "<script> var view_modal = document.getElementById('view'); </script>";
				echo "<script> view_modal.style.display = 'block'; </script>";
			}
		?>

</body>
</html>
<?php
if (isset($_POST['uploadbtn'])) {
	$name = $_POST["prodname"];
	$category = $_POST["option1"];
	$quantity = $_POST["quantity"];
	$weight = $_POST["weight"];
	$price = $_POST["price"];
	$target_dir = "../products/";
	$target_file = $target_dir . substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),0,5) . basename($_FILES["product"]["name"]);

	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$check = getimagesize($_FILES["product"]["tmp_name"]);
					if (move_uploaded_file($_FILES["product"]["tmp_name"], $target_file))
					{
					$result = mysqli_query($conn,"INSERT INTO producttable (prodname, prodprice, prodquantity, prodweight, prodimg, prodcategory) 
																												VALUES ('$name','$price','$quantity','$weight','$target_file', '$category')")
							or die ("failed to query database". mysql_error());
					echo"<script type='text/javascript'>alert('Product Added'); 
					window.location.replace('cms_products.php');
					</script>";
					} 
					else 
					{
							echo "<script type = 'text/javascript'>alert('Sorry, there was an error uploading your file.');
							</script>";
					}
}
if(isset($_GET['DeleteID'])){
	$messageID = $_GET['DeleteID'];
	$query = mysqli_query($conn,"DELETE FROM producttable WHERE id = $messageID")
		 or die ("failed to query database". mysqli_error());
		 echo"<script>
		 alert('Deleted Succesfully');
		 window.location.replace('cms_products.php');</script>";
}
?>