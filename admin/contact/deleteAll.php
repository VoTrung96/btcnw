<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/function/dbconnect.php' ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/function/checklogin.php' ?>
<?php
	$ids = $_POST['ids'];
	foreach($ids as $id){
		$sql = "delete from contact where id = {$id}";
		$rs = mysqli_query($conn, $sql);
	}
	$sql = "select * from contact";
	$result = mysqli_query($conn, $sql);
	$data = "";
	while($row = mysqli_fetch_assoc($result)) {
		$data .= "<tr>
                    <td><input class='checkbox' name='ids' id='{$row['id']}' type='checkbox' /></td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['message']}</td>
                    <td>
                      <a title='delete' href='delete.php?id={$row['id']}' onclick=\"return confirm('Are you sure?')\">
                        <i class='fa fa-fw fa-trash'></i>
                      </a>
                    </td>
                  </tr>";
	}
	echo $data;
?>