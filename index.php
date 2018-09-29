<?php include ("navigation.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style type="text/css">
	/*slider*/
	* {box-sizing: border-box;}
	img {vertical-align: middle;}

	/* Slideshow container */
	.slideshow-container {
	  max-width: 100%;
	  position: relative;
	  margin: auto;
	}

	/* Caption text */
	.text {
	  color: #f2f2f2;
	  font-size: 15px;
	  padding: 8px 12px;
	  position: absolute;
	  bottom: 8px;
	  width: 100%;
	  text-align: center;
	}

	/* Number text (1/3 etc) */
	.numbertext {
	  color: #f2f2f2;
	  font-size: 12px;
	  padding: 8px 12px;
	  position: absolute;
	  top: 0;
	}

	/* The dots/bullets/indicators */
	.dot {
	  height: 15px;
	  width: 15px;
	  margin: 0 2px;
	  background-color: #bbb;
	  border-radius: 50%;
	  display: inline-block;
	  transition: background-color 1s ease;
	  position: absolute;
	  top: 0;
	  left: 0;
	}

	.active {
	  background-color: #717171;
	}

	/* Fading animation */
	.fade {
	  -webkit-animation-name: fade;
	  -webkit-animation-duration: 1.5s;
	  animation-name: fade;
	  animation-duration: 1.5s;
	}

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
	 
	.craving{
      border-top: 8px solid #23a393;
   	  border-bottom: 8px solid #23a393;
   	  padding: 3%;
   	  letter-spacing: 5px;
      text-align: center;
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

	 .ourstory{
	 	background-image: url(img/bg1.png);
	 	background-size: cover;
	 }

	 .story{
	 	background: #edffed;
	 	padding: 3%;
	 }

	 .story p {
	 	line-height: 2;
	 	text-align: justify;
	 }

	 .contact{
	 	background: #23a393;
	 }
	 .contactlink{
	 	text-decoration: none;
	 	color: #23a393;
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
<!-- slider -->
	<div class="slideshow-container">
		<div class="mySlides fade">
			<img src="img/tall.jpg" style="width:100% ">
		</div>
		<!-- <div class="mySlides fade">
			<img src="img/sample.jpg" style="width:100%">
		</div> -->
	</div>

	<div style="text-align:center">
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span>
	</div>

<!-- best sellers -->
	<div class="container">
		<div class="bestsellers">
			<center><h3 class="title">Our Best Sellers</h3></center>
		</div>

	<div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <a href="#"><div class="threecont">
          <img src="img/tall.jpg" style="width:100%">
          <div class="wcontainer product">
            <center><p><b>Product 1</b></p></center>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
          </div>
          <div class="bg"><center><p>Php 123.00</p></center></div>
        </div></a>

        <a href="#"><div class="threecont">
          <img src="img/tall.jpg" style="width:100%">
          <div class="wcontainer product">
            <center><p><b>Product 1</b></p></center>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
          </div>
          <div class="bg"><center><p>Php 123.00</p></center></div>
        </div></a>


        <a href="#"><div class="threecont">
          <img src="img/tall.jpg" style="width:100%">
          <div class="wcontainer product">
            <center><p><b>Product 1</b></p></center>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
          </div>
          <div class="bg"><center><p>Php 123.00</p></center></div>
        </div></a>
	</div>

	<center><button class="buttonstyle">SEE ALL</button></center>
</div>
<br>
<!-- our story -->
	<div class="ourstory">
		<div class="container">
			<div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
	        <div class="twocont story">
		    	<h3 class="subtitle">&nbsp;Our Story</h3>
		    	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>

		    	<center><button class="buttonstyle">READ MORE</button></center>
	        </div>

			</div>
		</div>
	</div>
<!-- contact us -->

	<div class="contact">
		<div class="container">
			<div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
		        <div class="story">
		    		<h3 class="craving">&nbsp;Craving for our products?&nbsp;<a href="contact.php" class="contactlink"><b><i>Contact Us</i></b></a>&nbsp;now!</b></h3>
		        </div>
			</div>
		</div>
	</div>






<!-- scripts -->
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
</div>
</body>
</html>
<?php include("footer.php");?>