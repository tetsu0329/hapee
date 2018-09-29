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
									<center><button class="w3-button w3-large buttonstyle">SAVE</button></center>
									
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
				  <th><center>Product Code</center></th>
				  <th class="name">Product Name</th>
				  <th><center>Quanity</center></th>
				  <th><center>Actions</center></th>
				</tr>
				<tr">
				  <td><center>001</center></td>
				  <td>Lorem ipsum product name</td>
				  <td><center>1</center></td>
				  <td>
				  	<center>
				  	  <button onclick="document.getElementById('view').style.display='block'" class="w3-button buttonstyle"><img src="img/view.png" width="20px;"></button>
					  <div id="view" class="w3-modal">
					    <div class="w3-modal-content">
					      <div class="w3-container">
					        <span onclick="document.getElementById('view').style.display='none'" class="w3-button w3-display-topright">&times;</span>
					        <div class="w3-container">
					        	<h5 class="title w3-left">&nbsp;View Product</h5><br>
					        	<hr>
					        	<div class="details">
						        	<center>
						        		<img src="img/sample.jpg" class="sliderimg"><br><br>
						        		<b style="color: #23a393;">Product Name</b><hr>
						        	</center>
						        	<h6 class="titlesmall w3-left">&nbsp;<b style="color: #23a393;">Description:</b>&nbsp;<span>Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem description</span></h6><br><br>
					        		<h6 class="titlesmall w3-left">&nbsp;<b style="color: #23a393;">Type:</b>&nbsp;<span>Lorem type</span></h6><br><br><br>
					        		<h6 class="titlesmall w3-left">&nbsp;<b style="color: #23a393;">Code:</b>&nbsp;<span>001</span></h6><br><br>
					        		<h6 class="titlesmall w3-left">&nbsp;<b style="color: #23a393;">Price:</b>&nbsp;<span>Php 123.00</span></h6><br><br>
					        	</div>
					        </div>
					      </div>
					    </div>
					  </div>

					  <button onclick="document.getElementById('edit').style.display='block'" class="w3-button buttonstyle"><img src="img/edit.png" width="20px;"></button>
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
					   <button class="w3-button buttonstyle"><img src="img/delete.png" width="20px;"></button>
					</center>
				  </td>
				</tr>
				</table>
				</div>
		</div>
</body>
</html>