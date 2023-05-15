<?php
    include '../../includes/header.php';
    include '../../includes/scripts.php';
?>
<?php
  include '../connection.php';

  $_SESSION["id"] = 1; // Fill session id with user's id to get user's data like name and image name
  $sessionId = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM dashboard WHERE id = $sessionId"));
?>

<style media="screen">
  .upload{
    width: 140px;
    position: relative;
    margin: auto;
    text-align: center;
  }
  .upload img{
    border-radius: 50%;
    border: 8px solid #DCDCDC;
    width: 125px;
    height: 125px;
  }
  .upload .rightRound{
    position: absolute;
    bottom: 0;
    right: 0;
    background: #00B4FF;
    width: 32px;
    height: 32px;
    line-height: 33px;
    text-align: center;
    border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
  }
  .upload .leftRound{
    position: absolute;
    bottom: 0;
    left: 0;
    background: red;
    width: 32px;
    height: 32px;
    line-height: 33px;
    text-align: center;
    border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
  }
  .upload .fa{
    color: white;
  }
  .upload input{
    position: absolute;
    transform: scale(2);
    opacity: 0;
  }
  .upload input::-webkit-file-upload-button, .upload input[type=submit]{
    cursor: pointer;
  }
</style>

  <div class="input-group">
    <input type="hidden" name="id" value="<?php echo $row['id']?>"/>

  <form class="form" id = "form" action="" enctype="multipart/form-data" method="post">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    <div class="upload">
      <img src="img/<?php echo basename($user['image'])  ?>" id = "image">

      <div class="rightRound" id = "upload">
        <input type="file" name="fileImg" id = "fileImg" accept=".jpg, .jpeg, .png">
        <i class = "fa fa-camera"></i>
      </div>

      <div class="leftRound" id = "cancel" style = "display: none;">
        <i class = "fa fa-times"></i>
      </div>
      <div class="rightRound" id = "confirm" style = "display: none;">
        <input type="submit" onClick="window.location.reload();">
        <i class = "fa fa-check" ></i>
      </div>
    </div>
  </form>

  <script type="text/javascript">
    document.getElementById("fileImg").onchange = function(){
      document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]); // Preview new image

      document.getElementById("cancel").style.display = "block";
      document.getElementById("confirm").style.display = "block";

      document.getElementById("upload").style.display = "none";
    }

    var userImage = document.getElementById('image').src;
    document.getElementById("cancel").onclick = function(){
      document.getElementById("image").src = userImage; // Back to previous image

      document.getElementById("cancel").style.display = "none";
      document.getElementById("confirm").style.display = "none";

      document.getElementById("upload").style.display = "block";
    }
  </script>

  <?php
  if(isset($_FILES["fileImg"]["name"])){
    $id = $_POST["id"];

    $src = $_FILES["fileImg"]["tmp_name"];
    $imageName = $_FILES["fileImg"]["name"];

    $target = "img/" . $imageName;

    move_uploaded_file($src, $target);

    $query = "UPDATE dashboard SET image = '$imageName' WHERE id = $id";
    mysqli_query($con, $query);

  }
?>

<div class="col-sm-10 card bg-light my-3">
  <div class="card-body">
    <?php 
        $squery = mysqli_query($con, "SELECT * FROM dashboard");
        while($row = mysqli_fetch_array($squery))
        {
        echo '
        <textrea rows="4" cols="50">
            '.$row['about'].'
        </textarea>
        ';
      ?>
      
        <div class="float-end">
          <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
          <button type="button" class="btn btn-primary btn-sm" style="font-size: 10px;" title="Edit" data-bs-toggle="modal" data-bs-target="#editAbout"><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i></button>
        </div>
      <?php
      }

      include 'about.php';
    ?>
    </div>
  </div>
</div>