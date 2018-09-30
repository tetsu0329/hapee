<?php
session_start();
  include('connection/controller.php');
	include('connection/backendconnection.php');
	if(empty($_SESSION['hapeeadmin'])){
        echo "<script>window.location.replace('login.php')</script>";
    }
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../admin/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  * {
    font-family: "Roboto Light";
  }

  .topbar{
    background: #23a393;
  }

  .sidebar{
    background: #fff;
  }

  .w3-bar-item{
    font-size: 16px;
  }

  .links{
    text-decoration: none;
    padding: 5% !important;
    font-size: 12px;
  }

  .links:hover{
    background: #f1fff1 !important;
    border-left: 8px solid #23a393;
  }

.accordion {
    color: #2c2828;
    cursor: pointer;
    padding: 18px;
    border: none;
    text-align: left;
    outline: none;
    transition: 0.4s;

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

</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-large topbar" style="z-index:3">
  <button class="w3-bar-item w3-button   w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">LOGOUT</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse sidebar" style="z-index:3;width:300px; margin-top: -2px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s12 m12 l12">
      <!-- <img src="/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px"> -->
    </div>
    <div class="w3-col s12 m12 l12 w3-bar">
      <p class="w3-center"><img src="img/cropped.png" width="100%;"></p>
    </div>
  </div>

  <hr>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="index.php" class="w3-bar-item w3-button links">Dashboard</a>
    <a href="inquiry.php" class="w3-bar-item w3-button links">Inquiry</a>
    <a href="useracc.php" class="w3-bar-item w3-button links">User Accounts</a>
    <a href="#" class="w3-bar-item accordion links">&nbsp;Content Management Sysytem</a>
      <div class="panel">
        <!-- <a href="cms_slider.php" class="w3-bar-item links">Slider Images</a> -->
        <a href="cms_about.php" class="w3-bar-item links">About Us</a>
        <a href="cms_contact.php" class="w3-bar-item links">Contact Us</a>
        <a href="cms_gallery.php" class="w3-bar-item links">Gallery</a>
        <a href="cms_products.php" class="w3-bar-item links">Products</a>
    </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>


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
</script>
</body>
</html>
