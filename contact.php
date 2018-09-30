<?php include ("navigation.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
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
	 	background-image: url(img/bg1.png);
	 	background-size: cover;
	 }

	 .story{
	 	background: #edffed;
	 	padding: 3%;
	 	min-height: 250px;
	 	max-height: 250px;

	 }

	 .story p {
	 	line-height: 2;
	 	text-align: justify;
	 }

	 .pagetitle{
	 	padding-top: 100px;
	 }

	  .contact{
	 	background: #23a393;
	 }

	blockquote{
	  border-left: 8px solid #23a393;
      text-transform: capitalize;
      padding-bottom: 2%;
	 }

	.conttitle{
		color: #23a393;
	}

	.topitem{
		padding:8px 16px;
		float:left;
		width:auto;
		border:none;
		display:block;
		outline:0
	}

	.facebookbtn{
		background: #3b5998;
		color: #fff;
		cursor: pointer;
	}
	.twitterbtn{
		background: #1DA1F2;
		color: #fff;
		cursor: pointer;
	}
	.instagrambtn{
		background: #fb3958;
		color: #fff;
		cursor: pointer;
	}
	input, textarea{
		resize: none;
		padding:8px;
		display:block;
		border:none;
		border-bottom:1px solid #ccc;
		width:100%
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
		<div class="pagetitle"><h6 class="subtitle">&nbsp;Contact Us</h6></div>
	</div>


	<div class="contact">
		<div style="float: right;">
		<div class="w3-bar">
		  <a href=""><button class="topitem facebookbtn"><img src="img/facebook.png" width="40%;"></button></a>
		  <a href=""><button class="topitem twitterbtn"><img src="img/twitter.png" width="40%;"></button></a>
		  <a href=""><button class="topitem instagrambtn"><img src="img/instagram.png" width="40%;"></button></a>
		</div>
	</div>
	<br><br>
		<div class="container">
			<div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
		        <div class="story">
		        	<h6><b class="conttitle">Contact Person:</b>&nbsp;<span>Lorem Name</span></h6>
		        	<h6><b class="conttitle">Address:</b>&nbsp;<span>Lorem Address Address Address Address Address Address Address</span></h6>
		        	<h6><b class="conttitle">Email Address:</b>&nbsp;<span>email@email.com</span></h6>
		        	<h6><b class="conttitle">Contact Number:</b>&nbsp;<span>0123456789</span></h6>
		        </div>

		        <div class="twocont">
		        	<h6 style="color: #fff;">Leave us a message!</h6>
		        	<form>
						<p><input name="fname" type="text" placeholder="Fullname"></p>
						<p><input name="email" type="text" placeholder="Email Address"></p>
						<p><input name="subj" type="text" placeholder="Subject"></p>
						<p><textarea name="msg" type="text" placeholder="Message"></textarea></p>
		        	</form>
		        	<button class="buttonstyle">SEND</button>
		        	<br>
		        </div>
		        <br><br>
		        <div class="twocont">
		        	<center><img src="img/tall.jpg" width="100%;"></center>
		        </div>

			</div>
		</div>
	</div>
<!-- scripts -->
</div>
</body>
</html>
<?php include("footer.php");?>
<?php


?>