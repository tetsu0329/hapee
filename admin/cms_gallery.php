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
                <span class="close" onclick="document.getElementById('add').style.display='block'">&times;</span>
                <h4>Add Image</h4>
                <hr>
                <form action="" method="POST" enctype="multipart/form-data">
                <center><img src="img/view.png" id='galleryimg' style='width:300px;height:300px;'></center>
                <center><input type="file" class="form-control-file" name='gallery'id="exampleInputFile" aria-describedby="fileHelp" value="Choose Photo" accept="image/*" onchange="loadslider1(event)"></center>
                <br>
                <br>
                <center>
                <input type='submit' name='gallerybtn' value='SAVE' class="btn_style2">
                </center>
                </form>
              </div>
              <script>
              var loadslider1 = function(event) {
                var output = document.getElementById('galleryimg');
                output.src = URL.createObjectURL(event.target.files[0]);
                };
              </script>
              </div>
              <!-- <button class="w3-button w3-large buttonstyle"><img src="img/delete.png" width="20px;"></button><br><br> -->
            </div>
          </div>
        </div>
      <div class="w3-row-padding w3-margin-bottom">
      <?php 
          $query = mysqli_query($conn, "SELECT * FROM gallerytable");
					while($rows=mysqli_fetch_assoc($query)){
				
				?>
        <div class="w3-quarter">
            <div class="w3-container status">
              <div class="w3-center">
                <img src="<?php echo $rows['photo']?>" class="sliderimg" >
              </div>
              <a onclick='javascript:confirmationDelete(this);return false;' href="?DeleteID=<?php echo $rows['id'] ?>"><button class="w3-button buttonstyle"><img src="img/delete.png" width="20px;"></button></a>
            </div>
        </div>
        <?php
          }
        ?>
      </div>
        <script>
				function confirmationDelete(anchor)
				{
					var conf = confirm('Are you sure want to delete this record?');
					if(conf)
							window.location=anchor.attr("href");
				}
        var view_modal = document.getElementById('add');
        window.onclick = function(event) {
			
          if (event.target == view_modal) {
          view_modal.style.display = "none";
          }
        }
				</script>
</body>
</html>
<?php
    if(isset($_POST['gallerybtn'])){
      $target_dir = "../gallery/";
      $target_file = $target_dir . substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),0,5) . basename($_FILES["gallery"]["name"]);

      $uploadOk = 1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
      $check = getimagesize($_FILES["gallery"]["tmp_name"]);

              if (move_uploaded_file($_FILES["gallery"]["tmp_name"], $target_file))
              {
              $result = mysqli_query($conn,"INSERT INTO gallerytable (photo) VALUES ('$target_file')")
                  or die ("failed to query database". mysql_error());
              echo"<script type='text/javascript'>alert('Picture added successfully in gallery'); 
              window.location.replace('cms_gallery.php');
              </script>";
              } 
              else 
              {
                  echo "<script type = 'text/javascript'>alert('Sorry, there was an error uploading your file.');
                  </script>";
              }

        }
        if(isset($_GET['DeleteID'])){
          $messageID = $_GET['DeleteID'];
          $query = mysqli_query($conn,"DELETE FROM gallerytable WHERE id = $messageID")
             or die ("failed to query database". mysqli_error());
             echo"<script>
             alert('Deleted Succesfully');
             window.location.replace('cms_gallery.php');</script>";
        }
?>