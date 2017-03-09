<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="<?php echo base_url() ?>assets/css/login.css" rel="stylesheet">
</head>
<body>
<div class="login-page">
  <div class="form"><img src="<?php echo base_url() ?>assets/img/logo.gif" /></br>
  ATAP TEDUH LESTARI</br></br>
    <form class="login-form" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
		<input type="text" name="username" placeholder="username"/>
		<input type="password" name="password" placeholder="password"/>
      <button type="submit" value="Login">Login</button>
    </form>
  </div>
</div>
</body>
</html>

