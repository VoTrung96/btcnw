<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/templates/admin/inc/dashboard.php';?>
    <div class="content-wrapper py-3">

      <div class="container-fluid">

        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Update Experience
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <?php
                if (!isset($_GET['id'])){
                  header("location:index.php?err=1");
                  exit;
                } 
                $id = $_GET['id'];
                $sql = "select * from experiences where id = {$id}";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                if (isset($_POST['update'])) {
                  $start_at = $_POST['start_at'];
                  $finish_at = $_POST['finish_at'];
                  $summary = $_POST['summary'];
                  $user_id = $_SESSION['userLogin']['id'];
                  $sql = "update experiences set start_at = {$start_at}, finish_at = {$finish_at},
                    summary = '{$summary}' where id = {$id}";
                  $result = mysqli_query($conn, $sql);
                  if ($result) {
                    header("location:index.php?msg=2");
                    exit;
                  } else {
                    header("location:update.php?err=1");
                    exit;
                  }
                }
              ?>
              <form action="" method="post">
                <div class="form-group">
                  <label>Start At(year)</label>
                  <input class="form-control" type="text" name="start_at" value="<?= $row['start_at']?>" required/>
                </div>
                <div class="form-group">
                  <label>Finish At(year)</label>
                  <input class="form-control" type="text" name="finish_at" value="<?= $row['finish_at']?>" required/>
                </div>
                <div class="form-group">
                  <label>Summary</label>
                  <textarea class="form-control" name="summary"><?= $row['summary']?></textarea>
                </div>
                <div>
                  <input class="btn btn-primary" type="submit" name="update" value="update" />
                </div>
              </form>
            </div>
          </div>
       
        </div>

      </div>
      
    </div>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/templates/admin/inc/footer.php';?>