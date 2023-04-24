<!-- DELETE POP UP FORM (Bootstrap MODAL) -->
<div class="modal fade" id="Delete_Staff<?php echo $row['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Warning! </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </button>
            </div>

            <form action="code.php" method="POST">

              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>

              <div class="modal-body text-center">
                <i class="fab fa-circle-exclamation fa-8x" style="color: #facea8;"></i>

                <h4> Please confirm</h4>
                <small>Are you sure you want to delete this data? This action is final and cannot be undone. </small>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">NO</button>
                  <button type="submit" name="delete_staff" class="btn btn-danger">YES, Delete.</button>
              </div>
            </form>

        </div>
    </div>
</div>

