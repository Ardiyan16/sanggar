<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="login100-form-title-1">
					Register
				</span>
			</div>

			<form class="login100-form validate-form">
				<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
					<span class="label-input100">Username</span>
					<input class="input100" type="text" name="username" placeholder="Enter username">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="username" placeholder="Enter username">
					<span class="focus-input100"></span>
				</div>

				<div class="row">
					<div class="col">
						<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
							<span class="label-input100">Password</span>
							<input class="input100" type="password" name="pass" placeholder="Enter password">
							<span class="focus-input100"></span>
						</div>
					</div>
					<div class="col">
						<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
							<input class="input100" type="password" name="pass" placeholder="Re Enter password">
							<span class="focus-input100"></span>
						</div>
					</div>
				</div>

				<div class="container-login100-form-btn row justify-content-around">
					<button class="login100-form-btn col-4 " type="submit">
						Daftar
					</button>
					<a class="btn login100-form-btn col-4 text-white" href="<?= base_url() ?>Auth">
						Login
					</a>
				</div>
			</form>
		</div>
	</div>
</div>