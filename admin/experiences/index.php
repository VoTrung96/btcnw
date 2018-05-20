<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/templates/admin/inc/dashboard.php';?>
    <div class="content-wrapper py-3">

      <div class="container-fluid">

        <div class="card mb-3">
          <div class="card-header">
            <button id="btnDelExperiences" class="del btn btn-primary hidden" type="submit"><i class="fa fa-trash"></i>Trash</button>
            <i class="fa fa-table"></i>
            Management Experiences
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <?php
                if (isset($_GET['msg'])){
                  if ($_GET['msg'] == 1){
                    $msg = "Added success";
                  }
                  if ($_GET['msg'] == 2){
                    $msg = "Update success";
                  }
                  if ($_GET['msg'] == 3){
                    $msg = "Deleted success";
                  }
              ?>
                <div class="alert alert-success">
                  <strong>Success!</strong><?=$msg?>
                </div>
              <?php
                }
                if (isset($_GET['err'])){
              ?>
                <div class="alert alert-danger">
                  <strong>Danger!</strong> Something went wrong!
                </div>
              <?php } ?>

              <div>
                <label style="float:right">Search:
                  <input id="searchExperiences" type="text" class="form-control">
                </label>
                
              </div>
              <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th><input id="checkAll" name="checkAll" type="checkbox" /></th>
                    <th>Time</th>
                    <th>Summary</th>
                    <th width="10%">Action</th>
                  </tr>
                </thead>
                
                <tbody id="data">
                <?php
                  $sql = "select * from experiences where user_id = {$_SESSION['userLogin']['id']}";
                  $result = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_assoc($result)) {
                ?>
                  <tr>
                    <td><input class="checkbox" name="ids" id="<?= $row['id']?>" value="<?= $row['id']?>" type="checkbox" /></td>
                    <td><?= $row["start_at"] ?> - <?= $row["finish_at"] ?></td>
                    <td><?= $row["summary"] ?></td>
                    <td>
                      <a title="edit" href="update.php?id=<?= $row['id'] ?>"><i class="fa fa-fw fa-edit"></i></a> 
                      <a title="delete" href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">
                        <i class="fa fa-fw fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                <?php
                  }
                ?>
                </tbody>
              </table>
            </div>
          </div>
       
        </div>

      </div>
      
    </div>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/templates/admin/inc/footer.php';?>