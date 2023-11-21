<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

	<title>Register</title>

	<link href="<?= base_url('assets/')?>css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Selamat Datang!</h1>
							<p class="lead">
								Isi data diri anda sebelum masuk ya!
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form class="user" method="POST" action="<?= base_url('auth/register'); ?>">
										<div class="mb-3">
											<label class="form-label">Nama Lengkap</label>
											<input class="form-control form-control-lg" value="<?=set_value('nama');?>" type="text" name="nama" placeholder="Masukkan Nama Anda" />
											<?=form_error('nama','<small class="text-danger pl-3">','</small>');?>
										</div>
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" value="<?=set_value('email');?>" type="email" name="email" placeholder="Masukkan Email Anda" />
											<?=form_error('email','<small class="text-danger pl-3">','</small>');?>
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" value="<?=set_value('password1');?>" type="password" name="password1" placeholder="Masukkan Password" />
											<?=form_error('password1','<small class="text-danger pl-3">','</small>');?>
										</div>
										<div class="mb-3">
											<label class="form-label">Confirm Password</label>
											<input class="form-control form-control-lg" value="<?=set_value('password2');?>" type="password" name="password2" placeholder="Masukkan Password" />
											<?=form_error('password2','<small class="text-danger pl-3">','</small>');?>
										</div>
										<div class="d-grid gap-2 mt-3">
                                        <button type="" class="btn btn-lg btn-primary">Masuk</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="text-center mb-3">
							Sudah Punya Akun? <a href="<?= base_url('Auth'); ?>">Masuk</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="<?= base_url('assets/')?>js/app.js"></script>

</body>

</html>