<?php include("../admin/navigation.php") ?>
<!DOCTYPE html>
<html>
<head>
  <title>CMS | Slider Images</title>
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
</style>
<body>

  <div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <div class="content">

      <h2 class="title">&nbsp;CMS | Slider Images</h2><br>
      <div class="w3-row-padding w3-margin-bottom">
          <div class="w3-third">
            <div class="w3-container status a">
              <div class="w3-center">
                <h6 class="">Slider Image 1</h6><br>
                <img src="img/sample.jpg" class="sliderimg"><br><br>
                <center><input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="logo" value="Choose Photo" accept="image/*" onchange="loadlogo(event)"></center><br>
                <button class="w3-button w3-large buttonstyle">SAVE</button>
              </div>
            </div>
          </div>

          <div class="w3-third">
            <div class="w3-container status b">
              <div class="w3-center">
                <h6 class="">Slider Image 2</h6><br>
                <img src="img/sample.jpg" class="sliderimg"><br><br>
                <center><input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="logo" value="Choose Photo" accept="image/*" onchange="loadlogo(event)"></center><br>
                <button class="w3-button w3-large buttonstyle">SAVE</button>
              </div>
            </div>
          </div>

          <div class="w3-third">
            <div class="w3-container status a">
              <div class="w3-center">
                <h6 class="">Slider Image 3</h6><br>
                <img src="img/sample.jpg" class="sliderimg"><br><br>
                <center><input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="logo" value="Choose Photo" accept="image/*" onchange="loadlogo(event)"></center><br>
                <button class="w3-button w3-large buttonstyle">SAVE</button>
              </div>
            </div>
          </div>
      <br>
</body>
</html>