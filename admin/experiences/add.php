<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/templates/admin/inc/dashboard.php';?>
    <div class="content-wrapper py-3">

      <div class="container-fluid">

        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Add Experience
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <?php 
                if (isset($_POST['add'])) {
                  $start_at = $_POST['start_at'];
                  $finish_at = $_POST['finish_at'];
                  $summary = $_POST['summary'];
                  $user_id = $_SESSION['userLogin']['id'];
                  $sql = "insert into experiences(user_id, start_at, finish_at, summary)
                    values({$user_id}, '{$start_at}', '{$finish_at}', '{$summary}')";
                  $result = mysqli_query($conn, $sql);
                  if ($result) {
                    header("location:index.php?msg=1");
                    exit;
                  } else {
                    header("location:add.php?err=1");
                    exit;
                  }
                }
              ?>
              <form action="" method="post">
                <div class="form-group">
                  <label>Start At(year)</label>
                  <input class="form-control" type="text" name="start_at" value="" required/>
                </div>
                <div class="form-group">
                  <label>Finish At(year)</label>
                  <input class="form-control" type="text" name="finish_at" value="" required/>
                </div>
                <div class="form-group">
                  <label>Summary</label>
                  <textarea class="form-control" name="summary"></textarea>
                </div>
                <div>
                  <input class="btn btn-primary" type="submit" name="add" value="Add" />
                </div>
              </form>
            </div>
          </div>
       
        </div>

      </div>
      
    </div>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/templates/admin/inc/footer.php';?>