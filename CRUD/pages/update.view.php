<form class="form-group" method="POST" action="index.php?power=modify&userid=<?= $editor['id'] ?>">
	<input type="hidden" name="id" value="<?= $editor['id'] ?>">
	<label>username</label>
	<input type="text" name="username" required="" value="<?= $editor['username'] ?>" class="form-control">

	<label>email</label>
	<input type="email" name="email" value="<?= $editor['email'] ?>" class="form-control" required="">

	<label>phone</label>
	<input type="text" name="phone" value="<?= $editor['phone'] ?>" class="form-control" required="">
	<button class="btn btn-primary">update <i class="fa fa-edit"></i></button>
</form>