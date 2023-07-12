<div class="content-wrapper">
    <section class="content-header">
        <h1>
            About
            <small>Tulis About Baru</small>
        </h1>
    </section>
    <section class="content">
        <a href="<?php echo base_url() . 'dashboard/artikel'; ?>" class="btn btn-sm btn-primary">Kembali</a>
        <br />
        <br />
        <form method="post" action="<?php echo base_url('dashboard/about_aksi') ?>" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-9">
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Judul About</label>
                                    <input type="text" name="judul" class="form-control" placeholder="Masukkan About .."
                                        value="<?php echo set_value('judul'); ?>">
                                    <br />
                                    <?php echo
                                    form_error('about'); ?>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Konten About</label>
                                    <?php echo
                                    form_error('konten'); ?><br />
                                    <textarea class="form-control" id="editor"
                                        name="konten"> <?php echo set_value('konten'); ?> </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Publish" class="btn btn-success btn-block">
            </div>
        </form>
    </section>
</div>