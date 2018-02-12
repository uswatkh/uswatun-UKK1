<!DOCTYPE html>
<html>
<head>
	<title>User Boking Pesawat</title>
</head>
<body>
	<center>
		<h1>User Boking Pesawat</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>User id</td>
				<td>
					<input type="text" name="userid" value="<?php echo $u->userid ?>">
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="username" value="<?php echo $u->username ?>">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="password" value="<?php echo $u->password ?>">
				</td>
			</tr>
			<tr>
				<td>Fullname</td>
				<td><input type="text" name="fullname" value="<?php echo $u->fullname ?>"></td>
			</tr>
			<tr>
				<td>Level</td>
				<td><input type="text" name="level" value="<?php echo $u->level ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>