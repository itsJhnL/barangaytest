<?php
    include '../../includes/header.php';
    include '../../includes/scripts.php';
?>
<?php
    include '../connection.php';
?>


<div class="input-group">
    <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
    <div class="col-sm-2 ps-5 pt-2">
      <img src="../dashboard/talavera_logo.png" alt="" class="w-auto" height="150">
    </div>
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
            ?>
        </div>
    </div>
</div>



<div class="modal fade" id="editAbout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-body">
        <div class="container">
          <form action="function.php" method="POST">
            <div class="row g-2 mb-2">
              <div class="col">
                <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
                <?php 
                  $squery = mysqli_query($con, "SELECT * FROM dashboard");
                  while($row = mysqli_fetch_array($squery))
                  {
                  echo '
                      <label class="form-label" ><b>About:</b></label>
                      <textarea type="text" class="form-control" autocomplete="off" required rows=20>'.$row['about'].'</textarea>
                    ';
                  }
                ?>
              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" name="update_bio" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>