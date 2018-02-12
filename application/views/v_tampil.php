<!DOCTYPE html>
<html>
<head>
	<title>User Boking Pesawat</title>
</head>
<body>
	<center><h1>User Boking Pesawat</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>userid</th>
			<th>username</th>
			<th>password</th>
			<th>fullname</th>
			<th>level</th>
			<th>Action</th>

		</tr>
		<?php 
		$userid = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $userid++ ?></td>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->password ?></td>
			<td><?php echo $u->fullname ?></td>
			<td><?php echo $u->level ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$u->userid,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->userid,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>