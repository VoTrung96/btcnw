<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/function/dbconnect.php' ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/function/checklogin.php' ?>
<?php
	$key = $_POST['key'];
	$query = "select * from experiences where user_id = {$_SESSION['userLogin']['id']}
	  and (summary like '%{$key}%')";
	$result = mysqli_query($conn, $query);
	$data = "";
	while($row = mysqli_fetch_assoc($result)) {
		$data .= "<tr>
					<td><input class='checkbox' name='ids' id='{$row['id']}' type='checkbox' /></td>
                    <td>{$row['start_at']} - {$row['finish_at']}</td>
                    <td>{$row['summary']}</td>
                    <td>
                      <a title='edit' href='update.php?id={$row['id']}'><i class='fa fa-fw fa-edit'></i></a> 
                      <a title='delete' href='delete.php?id={$row['id']}' onclick=\"return confirm('Are you sure?')\">
                        <i class='fa fa-fw fa-trash'></i>
                      </a>
                    </td>
                  </tr>";
	}
	echo $data;
?>