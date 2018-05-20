<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/templates/admin/inc/dashboard.php';?>
    <div class="content-wrapper py-3">

      <div class="container-fluid">

        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Profile
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <?php 
                $sql = "select * from users where id = {$_SESSION['userLogin']['id']}";
                $user = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($user);
                if (isset($_POST['update'])) {
                  $name = $_POST['name'];
                  $email = $_POST['email'];
                  $phone = $_POST['phone'];
                  $address = $_POST['address'];
                  $job = $_POST['job'];
                  $summary = $_POST['summary'];
                  $avatar = $_FILES['avatar']['name'];
                  if ($avatar == ''){
                    $sql = "update users set name = '{$name}', email = '{$email}', phone = '{$phone}',
                    address = '{$address}', job = '{$job}', summary = '{$summary}' where id = {$_SESSION['userLogin']['id']}";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                      header("location:profile.php?msg=1");
                      exit;
                    } else {
                      header("location:profile.php?err=1");
                      exit;
                    }
                  } else {
                    $tmp_name = $_FILES['avatar']['tmp_name'];
                    //doi ten hinh
                    $tmp = explode('.', $avatar);
                    $extension = end($tmp);
                    $filename = 'profile-'.time().'.'.$extension;
                    $path_upload = $_SERVER['DOCUMENT_ROOT'].'/profile/files/'.$filename;
                    move_uploaded_file($tmp_name, $path_upload);

                    $sql = "update users set name = '{$name}', email = '{$email}', phone = '{$phone}',
                    address = '{$address}', job = '{$job}', summary = '{$summary}', avatar = '{$filename}' 
                    where id = {$_SESSION['userLogin']['id']}";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                      header("location:profile.php?msg=1");
                      exit;
                    } else {
                      header("location:profile.php?err=1");
                      exit;
                    }
                  }
                }
              ?>
              <?php
                if (isset($_GET['msg'])){
              ?>
                <div class="alert alert-success">
                  <strong>Success!</strong> Update success.
                </div>
              <?php
                }
                if (isset($_GET['err'])){
              ?>
                <div class="alert alert-danger">
                  <strong>Danger!</strong> Something went wrong!
                </div>
              <?php } ?>
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Name</label>
                  <input class="form-control" type="text" name="name" value="<?=$row["name"]?>" required/>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control" type="text" name="email" value="<?=$row["email"]?>" required/>
                </div>
                <div class="form-group">
                  <label>Phone Number</label>
                  <input class="form-control" type="text" name="phone" value="<?=$row["phone"]?>" required/>
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input class="form-control" type="text" name="address" value="<?=$row["address"]?>" required/>
                </div>
                <div class="form-group">
                  <label>Job</label>
                  <input class="form-control" type="text" name="job" value="<?=$row["job"]?>" required/>
                </div>
                <div class="form-group">
                  <label>Avatar</label>
                  <input class="form-control" type="file" name="avatar" value=""/>
                  <div>
                    <img width="200" height="200" src="/profile/files/<?=$row["avatar"]?>">
                  </div>
                </div>
                <div class="form-group">
                  <label>Summary</label>
                  <textarea class="form-control" name="summary"><?=$row['summary']?></textarea>
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