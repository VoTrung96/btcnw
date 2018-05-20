<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/templates/admin/inc/dashboard.php';?>
    <div class="content-wrapper py-3">

      <div class="container-fluid">

        <div class="card mb-3">
          <div class="card-header">
            <button id="btnDelContact" class="del btn btn-primary hidden" type="submit"><i class="fa fa-trash"></i>Trash</button>
            <i class="fa fa-table"></i>
            Management Contact
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <?php
                if (isset($_GET['msg'])){
                  
              ?>
                <div class="alert alert-success">
                  <strong>Success!</strong> Deleted success
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
                  <input id="searchContact" type="text" class="form-control">
                </label>
                
              </div>
              <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th><input id="checkAll" name="checkAll" type="checkbox" /></th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th width="10%">Action</th>
                  </tr>
                </thead>
                
                <tbody id="data">
                <?php
                  $sql = "select * from contact";
                  $result = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_assoc($result)) {
                ?>
                  <tr>
                    <td><input class="checkbox" name="ids" id="<?= $row['id']?>" value="<?= $row['id']?>" type="checkbox" /></td>
                    <td><?= $row["name"] ?></td>
                    <td><?= $row["email"] ?></td>
                    <td><?= $row["message"] ?></td>
                    <td>
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