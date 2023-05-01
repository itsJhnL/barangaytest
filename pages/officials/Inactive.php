<!-- STATUS POP UP FORM (Bootstrap MODAL) -->
<div class="modal fade" id="setInactive<?php echo $row['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </button>
            </div>

            <form action="function.php" method="POST">

              <div class="modal-body text-center" style="margin-top: -20px">
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
                <i class="bi bi-exclamation-circle fa-8x" style="color: #facea8"></i>

                <h1 style="font-size: 25px; margin-top: -10px; margin-bottom: 30px"> Are you sure you want</h1>
                <p><b><u><?php echo $row['firstname'];?> <?php echo $row['lastname']; ?></u></b> to set as <b>Inactive</b>?</p>
              </div>
              <div class="modal-footer">
                  <button type="submit" name="Inactive" class="btn btn-primary">Confirm</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              </div>
            </form>

        </div>
    </div>
</div>

