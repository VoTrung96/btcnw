<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/templates/admin/inc/dashboard.php';?>
    <div class="content-wrapper py-3">

      <div class="container-fluid">

        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Add Skill
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <?php 
                if (isset($_POST['add'])) {
                  $name = $_POST['name'];
                  $percent = $_POST['percent'];
                  $user_id = $_SESSION['userLogin']['id'];
                  $sql = "insert into skills(user_id, name, percent) values({$user_id}, '{$name}', '{$percent}')";
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
                  <label>Skill Name</label>
                  <input class="form-control" type="text" name="name" value="" required/>
                </div>
                <div class="form-group">
                  <label>Percent</label>
                  <input class="form-control" type="text" name="percent" value="" required/>
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