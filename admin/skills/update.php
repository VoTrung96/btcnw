<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/templates/admin/inc/dashboard.php';?>
    <div class="content-wrapper py-3">

      <div class="container-fluid">

        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Update Skill
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <?php 
                if (!isset($_GET['id'])){
                  header("location:index.php?err=1");
                  exit;
                }
                $id = $_GET['id'];
                $sql = "select * from skills where id = {$id}";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                
                if (isset($_POST['update'])) {
                  $name = $_POST['name'];
                  $percent = $_POST['percent'];
                  $sql = "update skills set name = '{$name}', percent = '{$percent}' where id = {$id}";
                  $result = mysqli_query($conn, $sql);
                  if ($result){
                    if ($result) {
                      header("location:index.php?msg=2");
                      exit;
                    } else {
                      header("location:update.php?err=1");
                      exit;
                    }
                  }
                }
              ?>
              <form action="" method="post">
                <div class="form-group">
                  <label>Skill Name</label>
                  <input class="form-control" type="text" name="name" value="<?=$row["name"]?>" required/>
                </div>
                <div class="form-group">
                  <label>Percent</label>
                  <input class="form-control" type="text" name="percent" value="<?=$row["percent"]?>" required/>
                </div>
                
                <div>
                  <input class="btn btn-primary" type="submit" name="update" value="Update" />
                </div>
              </form>
            </div>
          </div>
       
        </div>

      </div>
      
    </div>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/templates/admin/inc/footer.php';?>