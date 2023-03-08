<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('partials/header'); ?>
</head>

<body>
	
<div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    
			<div class="card-header">
				<h4 class="text-center">Sign In</h1>
			</div>
		<?php if($this->session->flashdata('message_login_error')): ?>
			<div class="invalid-feedback">
					<?= $this->session->flashdata('message_login_error') ?>
			</div>
		<?php endif ?>

		<div class="container my-3 justify-content-end">
                <form method="POST" action="">
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" required maxlength="100" placeholder="Email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control " id="password" name="password" required maxlength="100" placeholder="Password">
                    </div>
                    <div class="form-group text-danger">
                        <?= $this->session->flashdata('error') ?>
                    </div>
                    <button type="submit" class="btn bg-info" style="width: 100%;" value="Login"><small>Login</small> <i class="fa-solid fa-right-to-bracket"></i></button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
