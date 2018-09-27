<?php include("../admin/navigation.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inquiry</title>
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
</style>
<body>

	<div class="w3-main" style="margin-left:300px;margin-top:43px;">
		<div class="content">

			<h2 class="title">&nbsp;Inquiry</h2><br>
			<br>
			
			<div class="w3-responsive">
				
				<table class="w3-table w3-bordered w3-hoverable">
				<tr>
				  <th><center>Inquiry ID</center></th>
				  <th class="name">Sender</th>
				  <th><center>Message Status</center></th>
				  <th><center>Actions</center></th>
				</tr>
				<tr>
				<?php
            while($rows=mysqli_fetch_assoc($sqlinquiry))
            {
				?>
				  <td><center>00-<?php echo $rows['id'] ?></center></td>
				  <td><?php echo $rows['customerName'] ?></td>
				  <td><center><?php echo $rows['messageStatus'] ?></center></td>
				  <td><center>
						<a href="?View=<?php echo $rows['id']?>"><button class="w3-button">VIEW</button></a>
					  <div id="view" class="w3-modal">
					    <div class="w3-modal-content">
					      <div class="w3-container">
					        <span onclick="document.getElementById('view').style.display='none'" class="w3-button w3-display-topright">&times;</span>
					        <div class="w3-container">
					        	<h5 class="title w3-left">&nbsp;View Inquiry</h5><br>
					        	<hr>
										<?php
										if(isset($_GET['View'])){
											$messageID = $_GET['View'];
											$sqlview = mysqli_query($conn,"SELECT * FROM inquirytable WHERE id = $messageID");
												while($rows2=mysqli_fetch_assoc($sqlview)){
										?>
					        	<div class="details">
					        		<h6 class="titlesmall w3-left">&nbsp;<b style="color: #23a393;">Sender Name:</b>&nbsp;<span><?php echo $rows['customerName'] ?></span></h6><br><br>
					        		<h6 class="titlesmall w3-left">&nbsp;<b style="color: #23a393;">Sender Email:</b>&nbsp;<span><?php echo $rows['customerEmail'] ?></span></h6><br><br>
					        		<h6 class="titlesmall w3-left">&nbsp;<b style="color: #23a393;">Message Subject:</b>&nbsp;<span><?php echo $rows['messageSubject'] ?></span></h6><br><br>
					        		<h6 class="titlesmall w3-left">&nbsp;<b style="color: #23a393;">Message Date:</b>&nbsp;<span><?php echo $rows['messageDate'] ?></span></h6><br><br>
					        		<h6 class="titlesmall w3-left">&nbsp;<b style="color: #23a393;">Message Body:</b>&nbsp;</h6>
					        		<h6 class="w3-left messagebody"><?php echo $rows['messageBody'] ?></h6>
					        	</div>
										<?php
												}
											}
										?>
					        </div>
					      </div>
					    </div>
					  </div>
						<?php
						}
						?>

					  <button onclick="document.getElementById('edit').style.display='block'" class="w3-button">REPLY</button>
					  <div id="edit" class="w3-modal">
					    <div class="w3-modal-content">
					      <div class="w3-container">
					        <span onclick="document.getElementById('edit').style.display='none'" class="w3-button w3-display-topright">&times;</span>
					        <div class="w3-container">
					        	<h5 class="title w3-left">&nbsp;Reply Inquiry</h5><br>
					        	<hr>
					        	<div class="details">
					        		<div class="details">
					        		<h6 class="titlesmall w3-left">&nbsp;<b style="color: #23a393;">Recipient:</b>&nbsp;<span>emailaddress@gmail.com</span></h6><br><br>
					        		 <textarea style="height: 200px; resize: none;" placeholder="Type your message here...."></textarea>
					        	</div>
					        		<!-- <h6 class="titlesmall w3-center">&nbsp;<b style="color: #23a393;">Personal Information</b><br><br>
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
									
									</form> -->
									<button class="w3-button w3-large buttonstyle">REPLY</button>
					        	</div>
					        </div>
					      </div>
					    </div>
					  </div>

					  <button onclick="document.getElementById('delete').style.display='block'" class="w3-button">DELETE</button>
					  <div id="delete" class="w3-modal">
					    <div class="w3-modal-content">
					      <div class="w3-container">
					        <span onclick="document.getElementById('delete').style.display='none'" class="w3-button w3-display-topright">&times;</span>
					        <div class="w3-container">
					        	<h5 class="title">&nbsp;Edit User Information</h5>
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

				  </td>
				</center>
				</tr>
				</table>
				</div>
		</div>
</body>
</html>
<?php
	if(isset($_GET['View'])){
		$messageID = $_GET['View'];
		echo "<script> var view_modal = document.getElementById('view'); </script>";
		echo "<script> view_modal.style.display = 'block' </script>";
		$result = mysqli_query($conn,"UPDATE inquirytable SET messageStatus = 'Read' WHERE id = $messageID")
            or die ("failed to query database". mysqli_error());
	}
?>