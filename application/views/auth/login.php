<main class="d-flex w-100">
	<div class="container d-flex flex-column">
		<div class="row vh-100">
			<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
				<div class="d-table-cell align-middle">

					<div class="text-center mt-4">
						<h1 class="h2">Hai, Selamat Datang</h1>
						<p class="lead">
							Masukkan Akun Anda untuk melanjutkan!
						</p>
					</div>
					<?= $this->session->flashdata('message'); ?>
					<div class="card">
						<div class="card-body">
							<div class="m-sm-3">
								<form class="user" method="post" action="<?= base_url('auth'); ?>">
									<div class="mb-3">
										<label class="form-label">Email</label>
										<input class="form-control form-control-lg" value="<?=set_value('email');?>" type="email" name="email"
											placeholder="Masukkan Email Anda" />
											<?=form_error('email','<small class="text-danger pl-3">','</small>');?>
									</div>
									<div class="mb-3">
										<label class="form-label">Password</label>
										<input class="form-control form-control-lg" value="<?=set_value('nama');?>" type="password" name="password"
											placeholder="Masukkan Password" />
											<?=form_error('password','<small class="text-danger pl-3">','</small>');?>
									</div>
									<div>
										<div class="form-check align-items-center">
											<input id="customControlInline" type="checkbox" class="form-check-input"
												value="remember-me" name="remember-me" checked>
											<label class="form-check-label text-small" for="customControlInline">Ingat
												Saya</label>
										</div>
									</div>
									<div class="d-grid gap-2 mt-3">
										<button type="submit" class="btn btn-lg btn-primary">Masuk</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="text-center mb-3"> Tidak mempunyai akun?
						<a href="<?= base_url(); ?>auth/register">Daftar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<script src="<?= base_url('assets/') ?>js/app.js"></script>

</body>

</html>