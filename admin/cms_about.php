<?php include("../admin/navigation.php") ?>
<!DOCTYPE html>
<html>
<head>
  <title>CMS | About </title>
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
  #textarea{
    width: 100%;
    height: 600px;
  }
</style>
<body>

  <div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <div class="content">

      <h2 class="title">&nbsp;CMS | About</h2><br>
      <div class="w3-row-padding w3-margin-bottom">
          <div class="">
            <div class="w3-container status a">
            <form action="" method="POST">
              <div class="w3-center">
              <?php
                  $aboutsql = mysqli_query($conn, "SELECT * FROM abouttable WHERE id=1");
                  while($about = mysqli_fetch_assoc($aboutsql)){
                ?>
                <h6 class="title w3-left">&nbsp;About Us</h6><br><br>
                <textarea class="about" id="textarea" name="content">
                <?php echo $about['content'] ?>
                </textarea><br>
                <input type="submit" class="w3-button w3-large buttonstyle" value="UPDATE" name="updatebtn">
              </div>
            </div>
            <?php    
              }
            ?>
          </div>
          </form>
      <br>
</body>
</html>
<?php
  if(isset($_POST['updatebtn'])){
    $content = $_POST['content'];

    $result = mysqli_query($conn,"UPDATE abouttable SET content = '$content'")
        or die ("failed to query database". mysqli_error());
        echo"<script type='text/javascript'>alert('About Updated'); 
        window.location='cms_about.php';
        </script>";
}
?>