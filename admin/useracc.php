<?php include("../admin/navigation.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Accounts</title>
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
    	font-size: 14px;
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
	}

	.buttonstyle{
		background: #c4f0c5;
	}

	.buttonstyle:hover{
		background: #c4f0c5 !important;
    	border-left: 5px solid #23a393;
    	border-right: 5px solid #23a393;
	}
</style>
<body>

	<div class="w3-main" style="margin-left:300px;margin-top:43px;">
		<div class="content">

			<h2 class="title">&nbsp;User Accounts</h2><br>
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
						        	<h5 class="title">&nbsp;Add User</h5><br>
						        	<hr>
						        	<div class="details">
					        		<h6 class="titlesmall w3-center">&nbsp;<b style="color: #23a393;">Personal Information</b><br><br>
					        		<form>
									  <p><input class="w3-input w3-border w3-round-large" name="lname" type="text" placeholder="Lastname"></p>
									  <p><input class="w3-input w3-border w3-round-large" name="fname" type="text" placeholder="Firstname"></p>
									  <p><input class="w3-input w3-border w3-round-large" name="mobnum" type="text" placeholder="Mobile Number"></p>
									  <p><input class="w3-input w3-border w3-round-large" name="email" type="text" placeholder="Email Address"></p>
									<br>
									<h6 class="titlesmall w3-center">&nbsp;<b style="color: #23a393;">Billing Information</b><br><br>
									  <p><input class="w3-input w3-border w3-round-large" name="address" type="text" placeholder="House number, building, street, subdivision..."></p>
									  <p><input class="w3-input w3-border w3-round-large" name="brgy" type="text" placeholder="Barangay"></p>
									  <p><input class="w3-input w3-border w3-round-large" name="cuty" type="text" placeholder="City"></p>
									<br>
									<h6 class="titlesmall w3-center">&nbsp;<b style="color: #23a393;">Login Information</b><br><br>
									  <p><input class="w3-input w3-border w3-round-large" name="pword" type="password" placeholder="House number, Street, Subdivision..."></p>
									  <p><input class="w3-input w3-border w3-round-large" name="cpword" type="confirmpassword" placeholder="Barangay"></p>

									 <br><br>
									
									</form>
									<button class="w3-button w3-large buttonstyle">SUBMIT</button>
					        	</div>
						        </div>
						      </div>
						    </div>
						  </div>
					<br>	
						</div>
					</div>
				</div>
				<br><br><br>
				<table class="w3-table w3-bordered w3-hoverable">
				<tr>
				  <th class="name">Name</th>
				  <th><center>EMail Address</center></th>
				  <th><center>Mobile Number</center></th>
				  <th><center>Actions</center></th>
				</tr>
				<?php
					$userselect=mysqli_query($conn,"SELECT * FROM usertable");
					while($rows4=mysqli_fetch_assoc($userselect)){

				?>
				<tr>
				  <td><?php echo $rows4['fname']." ".$rows4['lname'] ?></td>
				  <td><center><?php echo $rows4['emailadd'] ?></center></td>
				  <td><center><?php echo $rows4['mobilenum'] ?></center></td>
				  <td>
				  	<center>
				  	  <a href="?viewID=<?php echo $rows4['id']?>"><button class="w3-button buttonstyle"><img src="img/view.png" width="20px;"></button></a>
						<?php
							if(isset($_GET['viewID'])){
								$userId=$_GET['viewID'];

								$userquery=mysqli_query($conn,"SELECT * FROM usertable WHERE id=$userId");
								while($rows5=mysqli_fetch_assoc($userquery)){

						?>
						<div id="view" class="w3-modal">
					    <div class="w3-modal-content">
					      <div class="w3-container">
					        <span onclick="document.getElementById('view').style.display='none'" class="w3-button w3-display-topright">&times;</span>
					        <div class="w3-container">
					        	<h5 class="title w3-left">&nbsp;<?php echo $rows5['fname']." ".$rows5['lname'] ?></h5><br>
					        	<hr>
					        	<div class="details">
					        		<h6 class="titlesmall">&nbsp;<b style="color: #23a393;">Mobile Number:</b>&nbsp;<span><?php echo $rows5['mobilenum'] ?></span></h6>
					        		<h6 class="titlesmall">&nbsp;<b style="color: #23a393;">Email Address:</b>&nbsp;<span><?php echo $rows5['emailadd'] ?></span></h6>
					        		<h6 class="titlesmall">&nbsp;<b style="color: #23a393;">Address</b>:&nbsp;<span><?php echo $rows5['street'] ?></span></h6>
					        	</div>
					        </div>
					      </div>
					    </div>
					  </div>
						<?php
							}
						}
						?>
					  <!-- <button onclick="document.getElementById('edit').style.display='block'" class="w3-button buttonstyle"><img src="img/edit.png" width="20px;"></button> -->
					  <!-- <div id="edit" class="w3-modal">
					    <div class="w3-modal-content">
					      <div class="w3-container">
					        <span onclick="document.getElementById('edit').style.display='none'" class="w3-button w3-display-topright">&times;</span>
					        <div class="w3-container">
					        	<h5 class="title w3-left">&nbsp;Edit User Information</h5><br>
					        	<hr>
					        	<div class="details">
					        		<h6 class="titlesmall w3-center">&nbsp;<b style="color: #23a393;">Personal Information</b><br><br>
					        		<form>
									  <p><input class="w3-input w3-border w3-round-large" name="lname" type="text" placeholder="Lastname"></p>
									  <p><input class="w3-input w3-border w3-round-large" name="fname" type="text" placeholder="Firstname"></p>
									  <p><input class="w3-input w3-border w3-round-large" name="mobnum" type="text" placeholder="Mobile Number"></p>
									  <p><input class="w3-input w3-border w3-round-large" name="email" type="text" placeholder="Email Address"></p>
									<br>
									<h6 class="titlesmall w3-center">&nbsp;<b style="color: #23a393;">Billing Information</b><br><br>
									  <p><input class="w3-input w3-border w3-round-large" name="address" type="text" placeholder="House number, building, street, subdivision..."></p>
									  <p><input class="w3-input w3-border w3-round-large" name="brgy" type="text" placeholder="Barangay"></p>
									  <p><input class="w3-input w3-border w3-round-large" name="cuty" type="text" placeholder="City"></p>
									<br>
									<h6 class="titlesmall w3-center">&nbsp;<b style="color: #23a393;">Login Information</b><br><br>
									  <p><input class="w3-input w3-border w3-round-large" name="pword" type="password" placeholder="House number, Street, Subdivision..."></p>
									  <p><input class="w3-input w3-border w3-round-large" name="cpword" type="confirmpassword" placeholder="Barangay"></p>

									 <br><br>
									
									</form>
									<button class="w3-button w3-large buttonstyle">SUBMIT</button>
					        	</div>
					        </div>
					      </div>
					    </div>
					  </div> -->
						<button class="w3-button w3-large buttonstyle"><img src="img/delete.png" width="20px;"></button><br><br>
					
					</center>
				  </td>
				</tr>
				<?php
							}

				?>
				</table>
				</div>
		</div>
		<?php
			if(isset($_GET['viewID'])){
				$userview=$_GET['viewID'];
				echo "<script>var view_modal=document.getElementById('view');</script>";
				echo "<script>view_modal.style.display='block';</script>";

			}
	
		?>
</body>
</html>