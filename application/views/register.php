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
                                    <div class="card p-5 ">
			<div class="card-header" style="color:#477a7d">
				<h4 class="text-center">Form Register</h1>
			</div>
		<?php if($this->session->flashdata('message_login_error')): ?>
			<div class="invalid-feedback">
					<?= $this->session->flashdata('message_login_error') ?>
			</div>
		<?php endif ?>

        <div class="card-body">
        <form action="" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label for="nik"><strong>NIK</strong></label>
                        <input type="text" class="form-control" name="nik" required maxlength="20" />
                    </div>
                    <div class="form-group">
                        <label for="nama"><strong>Nama</strong></label>
                        <input type="text" class="form-control" name="nama" required maxlength="100" />
                    </div>
                    <div class="form-group">
                        <label for="jk"><strong>Jenis Kelamin</strong></label>
                        <select name="jk" id="jk" class="form-control" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_hp"><strong>No Kontak</strong></label>
                        <input type="text" class="form-control" name="no_hp" required maxlength="50" />
                    </div>
                    <div class="form-group">
                        <label for="alamat"><strong>Alamat</strong></label>
                        <textarea class="form-control" name="alamat" required maxlength="250"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email"><strong>Email</strong></label>
                        <input type="email" class="form-control" name="email" required maxlength="100" />
                    </div>
                    <div class="form-group">
                        <label for="password"><strong>Password</strong></label>
                        <input type="password" class="form-control" id=" password" name="password" required maxlength="100">
                    </div>
                    <div class="float-right">
                        <button type="submit" id="save" value="save" class="btn bg-info"><i class="fa-regular fa-floppy-disk"></i> Lanjutkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
	
</body>

</html>
