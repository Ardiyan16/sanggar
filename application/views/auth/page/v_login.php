<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="login100-form-title-1">
					Sign In
				</span>
				<h5><?= $this->session->flashdata('message') ?></h5>
			</div>

			<form class="login100-form " method="post" action="<?= base_url() ?>auth/ceklogin">
				<div class="wrap-input100  m-b-26">
					<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
					<span class="label-input100">Username</span>
					<input class="input100" type="text" name="username" placeholder="Enter username">
					<span class="focus-input100"></span>

				</div>

				<div class="wrap-input100  m-b-18">
					<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
					<span class="label-input100">Password</span>
					<input class="input100" type="password" name="password" placeholder="Enter password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn row justify-content-around">
					<button class="login100-form-btn col-4" type="submit">
						Login
					</button>
				</div>
			</form>
		</div>
	</div>
</div>