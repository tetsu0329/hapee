<?php include("../admin/navigation.php") ?>
<!DOCTYPE html>
<html>
<head>
  <title>CMS | Contact </title>
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
    padding: 10%;
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
    max-width: 100%;
    max-height: 100px;
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

      <h2 class="title">&nbsp;CMS | Contact</h2><br>
      <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
            <div class="w3-container status a">
              <div class="w3-center">
                <h6 class="titlesmall w3-left">&nbsp;Contact Person</h6><br><br>
                <p class="about w3-center"><input class="w3-input inputcolora" type="text" value="Name Name Name Name"><br>
              </div>
            </div>
          </div>

          <div class="w3-quarter">
            <div class="w3-container status b">
              <div class="w3-center">
                <h6 class="titlesmall w3-left">&nbsp;Address</h6><br><br>
                <p class="about w3-center"><input class="w3-input inputcolorb" type="text" value="Address Address Address Address Address Address"><br>
              </div>
            </div>
          </div>

          <div class="w3-quarter">
            <div class="w3-container status a">
              <div class="w3-center">
                <h6 class="titlesmall w3-left">&nbsp;Email Address</h6><br><br>
                <p class="about w3-center"><input class="w3-input inputcolora" type="text" value="email@email.com"><br>
              </div>
            </div>
          </div>

          <div class="w3-quarter">
            <div class="w3-container status b">
              <div class="w3-center">
                <h6 class="titlesmall w3-left">&nbsp;Contact Number</h6><br><br>
                <p class="about w3-center"><input class="w3-input inputcolorb" type="text" value="123456789"><br>
              </div>
            </div>
          </div>

          <div class="w3-quarter">
            <div class="w3-container status b">
              <div class="w3-center">
                <h6 class="titlesmall w3-left">&nbsp;Facebook</h6><br><br>
                <p class="about w3-center"><input class="w3-input inputcolorb" type="text" value="facebook.com"><br>
              </div>
            </div>
          </div>

          <div class="w3-quarter">
            <div class="w3-container status a">
              <div class="w3-center">
                <h6 class="titlesmall w3-left">&nbsp;Instagram</h6><br><br>
                <p class="about w3-center"><input class="w3-input inputcolora" type="text" value="instagram.com"><br>
              </div>
            </div>
          </div>

          <div class="w3-quarter">
            <div class="w3-container status b">
              <div class="w3-center">
                <h6 class="titlesmall w3-left">&nbsp;Twitter</h6><br><br>
                <p class="about w3-center"><input class="w3-input inputcolorb" type="text" value="twitter.com"><br>
              </div>
            </div>
          </div>
      </div>

        <br><center><button class="w3-button w3-large buttonstyle w3-center">SAVE</button><br>
</body>
</html>