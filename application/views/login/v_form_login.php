<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
	<title>Form Login SI Penjadwalan Kuliah</title>
	<!-- utk menampilkan icon logo gambar di title -->
	<link rel="icon" href="<?php echo base_url() ?>assets/css_login/logo_poltek.png"> 

	<!-- css login -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css_login/bootstrap.min.css') ?>" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url('assets/css_login/stylee.css') ?>">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	
</head>
<?php if($this->session->flashdata('notif1'))  {?>
  <div class="alert alert-danger" role="alert">
    <h4><?php echo $this->session->flashdata('notif1') ?></h4>
  </div>
<?php } ?>

<?php if($this->session->flashdata('notif2'))  {?>
  <div class="alert alert-danger" role="alert">
    <h4><?php echo $this->session->flashdata('notif2') ?></h4>
  </div>
<?php } ?>
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<!-- menampilkan logo -->
						<img src="<?php echo base_url() ?>assets/css_login/logo_poltek.png" class="brand_logo" alt="Logo Poltekkes Kemenkes Bengkulu"> 
					</div>
				</div>

				<div class="d-flex justify-content-center form_container">
					<form method="post" action="c_login/ceklogin">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="user" id="user" class="form-control input_user" value="" placeholder="Username">
						</div>

						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="pass" id="pass" class="form-control input_pass" value="" placeholder="Password">
						</div>
						<br>
						<div class="d-flex justify-content-center mt-3 login_container">
							<button type="submit" name="login" value="LOGIN" class="btn login_btn">LOGIN</button>
						</div>
					</form>
				</div><br>

			</div>
		</div>
	</div>
</body>
</html>