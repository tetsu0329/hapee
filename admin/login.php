<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../admin/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	.title{
    	border-left: 8px solid #23a393;
    	letter-spacing: 10px;
    	text-transform: capitalize;

    }

    .content{
    	padding: 5%;
    	background: #f1fff1;
    	margin-top: 8%;
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
	<div class="w3-container w3-content content" style="max-width:800px">
    <h2 class="w3-wide title">&nbsp;Admin | LOGIN</h2>
    <br>
      <div class="w3-col s12 m12 l12">
       <form>
       		<p><input class="w3-input w3-border w3-round-large" name="uname" type="username" placeholder="Username"></p>
			<p><input class="w3-input w3-border w3-round-large" name="pword" type="password" placeholder="Password"></p>
       </form>
       <br><br><center><button class="w3-button w3-large buttonstyle w3-center">LOGIN</button></center>
      </div>
    </div>
  </div>
  
</body>
</html>