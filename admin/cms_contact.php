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
  <?php
    while($rows6=mysqli_fetch_assoc($contacttable)){
  ?>
  <form action="" method="POST">
  <div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <div class="content">

      <h2 class="title">&nbsp;CMS | Contact</h2><br>
      <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
            <div class="w3-container status a">
              <div class="w3-center">
                <h6 class="titlesmall w3-left">&nbsp;Contact Person</h6><br><br>
                <p class="about w3-center"><input class="w3-input inputcolora" name="name" type="text" value="<?php echo $rows6['name'] ?>"><br>
              </div>
            </div>
          </div>

          <div class="w3-quarter">
            <div class="w3-container status b">
              <div class="w3-center">
                <h6 class="titlesmall w3-left">&nbsp;Address</h6><br><br>
                <p class="about w3-center"><input class="w3-input inputcolorb" name="address" type="text" value="<?php echo $rows6['address'] ?>"><br>
              </div>
            </div>
          </div>

          <div class="w3-quarter">
            <div class="w3-container status a">
              <div class="w3-center">
                <h6 class="titlesmall w3-left">&nbsp;Email Address</h6><br><br>
                <p class="about w3-center"><input class="w3-input inputcolora" name="eadd" type="text" value="<?php echo $rows6['email'] ?>""><br>
              </div>
            </div>
          </div>

          <div class="w3-quarter">
            <div class="w3-container status b">
              <div class="w3-center">
                <h6 class="titlesmall w3-left">&nbsp;Contact Number</h6><br><br>
                <p class="about w3-center"><input class="w3-input inputcolorb" name="cnum" type="text" value="<?php echo $rows6['contactnumber'] ?>"><br>
              </div>
            </div>
          </div>

          <div class="w3-quarter">
            <div class="w3-container status b">
              <div class="w3-center">
                <h6 class="titlesmall w3-left">&nbsp;Facebook</h6><br><br>
                <p class="about w3-center"><input class="w3-input inputcolorb" name="fb" type="text" value="<?php echo $rows6['facebook'] ?>""><br>
              </div>
            </div>
          </div>

          <div class="w3-quarter">
            <div class="w3-container status a">
              <div class="w3-center">
                <h6 class="titlesmall w3-left">&nbsp;Instagram</h6><br><br>
                <p class="about w3-center"><input class="w3-input inputcolora" name="ig" type="text" value="<?php echo $rows6['instagram'] ?>"><br>
              </div>
            </div>
          </div>

          <div class="w3-quarter">
            <div class="w3-container status b">
              <div class="w3-center">
                <h6 class="titlesmall w3-left">&nbsp;Twitter</h6><br><br>
                <p class="about w3-center"><input class="w3-input inputcolorb" name="tw" type="text" value="<?php echo $rows6['twitter'] ?>"><br>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
        <br><center><input type="submit" name="updatebtn" class="w3-button w3-large buttonstyle w3-center" value="SAVE"><br>
  </form>
  <?php
    }
  ?>
</body>
</html>
<?php
if(isset($_POST['updatebtn'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['eadd'];
    $phone = $_POST['cnum'];
    $facebook = $_POST['fb'];
    $instagram = $_POST['ig'];
    $twitter = $_POST['tw'];

    $result = mysqli_query($conn,"UPDATE contacttable SET name = '$name', address = '$address', email = '$email', 
    contactnumber = '$phone', facebook = '$facebook', instagram = '$instagram', twitter = '$twitter'")
        or die ("failed to query database". mysqli_error());
        echo"<script type='text/javascript'>alert('Contact Information updated successfully'); 
        window.location='cms_contact.php';
        </script>";
}
?>