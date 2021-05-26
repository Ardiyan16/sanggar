<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="login100-form-title-1">
					Sign In
				</span>
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

				<div class="flex-sb-m w-full p-b-30">
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
					<div>
						<a href="" class="txt1">
							Forgot Password?
						</a>
					</div>
				</div>

				<div class="container-login100-form-btn row justify-content-around">
					<button class="login100-form-btn col-4" type="submit">
						Login
					</button>
					<a class="btn login100-form-btn col-4 text-white" href="<?= base_url() ?>auth/register">
						Daftar
					</a>
				</div>
			</form>
		</div>
	</div>
</div>