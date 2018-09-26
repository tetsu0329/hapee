<?php include("../admin/navigation.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
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
    	letter-spacing: 10px;
    	text-transform: capitalize;
    }
</style>
<body>

	<div class="w3-main" style="margin-left:300px;margin-top:43px;">
		<div class="content">

			<h2 class="title">&nbsp;Dashboard</h2><br>
			<div class="w3-row-padding w3-margin-bottom">
			    <div class="w3-quarter">
			      <div class="w3-container status a">
			        <div class="w3-center">
			          <h1 class="count">502</h1>
			          <h4>INQUIRY</h4>
			        </div>
			      </div>
			    </div>

			    <div class="w3-quarter">
			      <div class="w3-container status b">
			        <div class="w3-center">
			          <h1 class="count">485</h1>
			          <h4>ORDERS</h4>
			        </div>
			      </div>
			    </div>

			    <div class="w3-quarter">
			      <div class="w3-container status a">
			        <div class="w3-center">
			          <h1 class="count">5</h1>
			          <h4>USERS</h4>
			        </div>
			      </div>
			    </div>

			    <div class="w3-quarter">
			      <div class="w3-container status b">
			        <div class="w3-center">
			          <h1 class="count">35</h1>
			          <h4>PRODUCTS</h4>
			        </div>
			      </div>
			    </div>
			</div>
			<br>
			<h2 class="title">&nbsp;Messages</h2><br>
			<div class="w3-row-padding w3-margin-bottom">
			    <div class="w3-third">
			      <div class="w3-container status a">
			        <div class="w3-center">
			          <h1 class="count">5</h1>
			          <h4>READ</h4>
			        </div>
			      </div>
			    </div>

			    <div class="w3-third">
			      <div class="w3-container status b">
			        <div class="w3-center">
			          <h1 class="count">10</h1>
			          <h4>UNREAD</h4>
			        </div>
			      </div>
			    </div>

			    <div class="w3-third">
			      <div class="w3-container status a">
			        <div class="w3-center">
			          <h1 class="count">15</h1>
			          <h4>TOTAL</h4>
			        </div>
			      </div>
			    </div>
			</div>
</body>
</html>