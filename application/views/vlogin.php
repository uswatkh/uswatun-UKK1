<?php

?>
<form action="<?php echo base_url('Login/aksi_login'); ?>" method="post">
<table class="table table-bordered">
    <tr><td>username</td><td><input class="form-control" type="text" name="username" placeholder="username"></td></tr>
    <tr><td>Password</td><td><input class="form-control" type="password" name="password" placeholder="password"></td></tr>
    <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Login</button></td></tr>
</table>
</form>