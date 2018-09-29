<?php include("../admin/navigation.php") ?>
<!DOCTYPE html>
<html>
<head>
  <title>CMS | Gallery </title>
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
    padding: 5%;
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

    .titlesmall{
      border-left: 8px solid #23a393;
      letter-spacing: 1px;
      font-size: 14px;
  }
  .sliderimg{
   width: 100%;
  }
  .buttonstyle{
    background: #c4f0c5;
  }

  .buttonstyle:hover{
    background: #c4f0c5 !important;
      border-left: 5px solid #23a393;
      border-right: 5px solid #23a393;
  }

  .about{
    text-align: justify;
    line-height: 2;
  }
  .inputcolora{
     background: #ece8d9;
  }
  .inputcolorb{
    background: #99ddcc;
  }
</style>
<body>

  <div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <div class="content">

      <h2 class="title">&nbsp;CMS | Gallery</h2><br>
      <div class="topbtn">
          <div class="w3-show-inline-block w3-right">
            <div class="w3-bar">
              <button onclick="document.getElementById('add').style.display='block'" class="w3-button w3-large buttonstyle"><img src="img/add.png" width="20px;"></button>
              <div id="add" class="w3-modal">
                <div class="w3-modal-content">
                  <div class="w3-container">
                    <span onclick="document.getElementById('add').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <div class="w3-container">
                      <h5 class="title">&nbsp;Add User</h5>
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
              <button class="w3-button w3-large buttonstyle"><img src="img/delete.png" width="20px;"></button><br><br>
            </div>
          </div>
        </div>
      <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
            <div class="w3-container status">
              <div class="w3-center">
                <img src="img/sample.jpg" class="sliderimg" >
              </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-container status">
              <div class="w3-center">
                <img src="img/sample.jpg" class="sliderimg" >
              </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-container status">
              <div class="w3-center">
                <img src="img/sample.jpg" class="sliderimg" >
              </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-container status">
              <div class="w3-center">
                <img src="img/sample.jpg" class="sliderimg" >
              </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-container status">
              <div class="w3-center">
                <img src="img/sample.jpg" class="sliderimg" >
              </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-container status">
              <div class="w3-center">
                <img src="img/sample.jpg" class="sliderimg" >
              </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-container status">
              <div class="w3-center">
                <img src="img/sample.jpg" class="sliderimg" >
              </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-container status">
              <div class="w3-center">
                <img src="img/sample.jpg" class="sliderimg" >
              </div>
            </div>
        </div>
      </div>


        <br><center><button class="w3-button w3-large buttonstyle w3-center">SAVE</button><br>
</body>
</html>