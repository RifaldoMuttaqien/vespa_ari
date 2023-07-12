<div class="content-wrapper">
    <section class="content-header">
        <h1>Ganti Password
            <small>Ubah Password Anda</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-6">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Ganti Password</h3>
                    </div>
                    <div class="box-body">

                        <?php if (isset($_GET['alert'])) {
                            if ($_GET['alert'] == 'sukses') {
                                echo "<div class='alert alert-success'>Password telah diubah! </div>";
                            } else if ($_GET['alert'] == 'gagal') {
                                echo "<div class='alert alert-danger'>Maff, password lama yanga anda masukan salah </div>";
                            }
                        }

                        ?>
                        <form method="post" action="<?php echo base_url('dashboard/ganti_password_aksi') ?>">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Password Lama</label>
                                    <input type="password" name="password_lama" class="form-control" placeholder="Masukkan Pasword lama Anda..">
                                    <?php echo form_error('password_lama'); ?>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label>Passowrd Baru</label>

                                    <input type="password" name="password_baru" class="form-control" placeholder="Masukkan passwrod Baru..">
                                    <?php echo form_error('password_baru'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Konfirmasi Password Baru</label>
                                    <input type="password" name="konfirmasi_password" class="form-control" placeholder="Ulangi Password Baru..">
                                    <?php echo form_error('konfirmasi_password'); ?>
                                </div>
                            </div>
                            <div class="box-footer">
                                <input type="submit" class="btn btn-primary" value="Ganti Password">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
    </section>
</div>