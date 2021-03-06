<?php
    session_start();
    include('connection/controller.php');
?>
<!DOCTYPE html>
<html>
<head>
</head>
<link rel="stylesheet" href="frontend.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
 	
 * {
 	font-family: 'Roboto Light';
 }
  body, html {
      height: 100%;
      line-height: 1.8;
  }
  .w3-bar .w3-button {
      padding: 16px;
  }
  
  .nav a{
    text-decoration: none;
    margin-top: 10px;
  } 

  .nav a:hover{
    background: #f1fff1 !important;
  }

  .mobilemenu{
    background: #23a393 !important;
    color: #fff;
  }
  .mobilemenu a:hover{
    background: #f1fff1 !important;
  }

  .isDisabled{
    pointer-events: none;
  }

  .dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    background-color: inherit;
    font-family: inherit;
    margin-top: 9px;
    padding: 16px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #fff;
}

.dropdown:hover .dropdown-content {
    display: block;
}


.user:hover{
  background: #edffed !important;
}

.logname:hover{
  background: #edffed !important;
}

.logname:active{
  background: pink !important;
}
.accordion {
    color: #fff;
    cursor: pointer;
    padding: 18px;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;

}

.active, .accordion:hover {
  
}

.panel {
  /*  padding: 0 20px;*/
    margin-left: 20px;
    display: none;
    background: transparent !important;
    
}
a.panel:hover {
  /*  padding: 0 18px;*/
    display: none;
    background-color: #343a40;
    text-decoration: none !important;
}

.links{
  padding:5% !important;
  text-decoration: none !important;
}
</style>
<body>
  <!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#index.php" class="w3-bar-item w3-button w3-wide"><i><img src="img/cropped.png" style="width: 80px;" class="logo"></i></a>
    <!-- Right-sided navbar links -->
    <div class="nav w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button">Home</a>
      <a href=""><div class="dropdown"><button class="dropbtn">Products</button></a>
	    <div class="dropdown-content">
	      <a href="products.php?Category=Chocolate">Chocolate</a>
	      <a href="products.php?Category=Chips">Chips</a>
	      <a href="products.php?Category=Pastry">Pastry</a>
	      <a href="products.php">All Products</a>
	    </div>
  	</div>
      <a href="about.php" class="w3-bar-item w3-button">About Us</a>
      <a href="contact.php" class="w3-bar-item w3-button">Contact Us</a>
      <a href="gallery.php" class="w3-bar-item w3-button">Gallery</a>
       <a href="#" class="w3-bar-item w3-button isDisabled">|</a>
       <?php
        if(empty($_SESSION['cname'])){
    ?>
      <a href="login.php" class="w3-bar-item w3-button">Login</a>
      <a href="register.php" class="w3-bar-item w3-button">Register</a>
        <?php
            }
            else{
        ?>
<!--         <a href="#" class="w3-bar-item w3-button"><strong>Welcome!</strong> <?php echo $_SESSION['cname'] ?></a> -->
       <div class="w3-dropdown-hover" style="margin-top: 9px;">
      <button class="w3-button logname"><strong>Welcome!</strong> <?php echo $_SESSION['cname'] ?></button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <?php
          if(isset($_SESSION['product'])){
          ?>
            <a href="checkout.php" class="w3-bar-item w3-button w3-padding links">My Cart</a>
          <?php
            }
          ?>
        <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
      </div>
      </div>
        <?php
            }
        ?>

    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large mobilemenu" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close Menu ×</a>
      <a href="index.php" class="w3-bar-item w3-button">Home</a>
      <a href="about.php" class="w3-bar-item w3-button">About Us</a>
       <a href="#" class="w3-bar-item w3-button w3-padding accordion links">&nbsp;Products</a>
        <div class="panel">
          <a href="?Category=Chocolate" class="w3-bar-item w3-button w3-padding links">Chocolate</a>
        <a href="?Category=Chips" class="w3-bar-item w3-button w3-padding links">Chips</a>
        <a href="?Category=Pastry" class="w3-bar-item w3-button w3-padding links">Pastry</a>
         <a href="#" class="w3-bar-item w3-button w3-padding links">See all</a>
        </div>
      <a href="gallery.php" class="w3-bar-item w3-button">Gallery</a>
      <a href="contact.php" class="w3-bar-item w3-button">Contact Us</a>
      <hr>
      <?php
        if(empty($_SESSION['cname'])){
    ?>
      <a href="login.php" class="w3-bar-item w3-button">Login</a>
      <a href="register.php" class="w3-bar-item w3-button">Register</a>
        <?php
            }
            else{
        ?>
      <a href="#" class="w3-bar-item w3-button w3-padding accordion links">&nbsp; <strong>Welcome!</strong> <?php echo $_SESSION['cname'] ?></a>
        <div class="panel">
          <?php
          if(isset($_SESSION['products'])){
          ?>
          <a href="checkout.php" class="w3-bar-item w3-button w3-padding links">My Cart</a>
          <?php
            }
          ?>
          <a href="logout.php" class="w3-bar-item w3-button w3-padding links">Logout</a>
        </div>
        <?php
            }
        ?>
</nav>

<script>
// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

<!-- for mobile menu -->

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script> <!-- end of menu accordion / dropdown cms -->
</body>
</html>