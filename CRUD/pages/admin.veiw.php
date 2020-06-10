<?php
$db = new User;
?>
<div class="my-table">
	<h1>the caption of the users how wants to contacts us</h1>
	<div class="container">
		<div class="table-responsive">
			<table class="table table-bordered text-center">
				<tr>
					<td>ID</td>
					<td>name</td>
					<td>email</td>
					<td>phone</td>
					<td>Action</td>
				</tr>
				<?php
				$myUsers = $db->fetchAllData();
				$countData = $db->userCount();
				foreach($myUsers as $user){ ?>
				<tr>
					<td><?= $user['id'] ?></td>
					<td><?= $user['username'] ?></td>
					<td><?= $user['email'] ?></td>
					<td><?= $user['phone'] ?></td>
					<td colspan="2" style="text-align:center">
						<a href="index.php?power=edit&userid=<?= $user['id'] ?>" class="btn btn-primary">Edit <i class="fa fa-edit"></i></a>
						<a href="index.php?power=delete&userid=<?= $user['id'] ?>" class="btn btn-danger">Delete <i class="fa fa-close"></i></a>
					</td>
				</tr>
				<?php 
			}
				?>
			</table>
			<div>
				<?= "count of our users is " . $countData ?>
			</div>
			<a href="index.php?power=home" class="btn btn-success">add member <i class="fa fa-plus"></i></a>
		</div>
	</div>
</div>