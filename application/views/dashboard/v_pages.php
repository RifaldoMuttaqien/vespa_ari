<div class="content-wrapper">
    <section class="content-header">
        <h1>
            About<small>Halaman About</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-9">
                <a href="<?php echo base_url() . 'dashboard/about_tambah'; ?>" class="btn btn-sm btn-primary">Buat
                    About baru</a>
                <br />
                <br />
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">About</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="1%">NO</th>
                                    <th>Kategori</th>
                                    <th>Slug</th>
                                    <th width="10%">OPSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($about as $h) { ?>
                                <tr>
                                    <td><?php echo
                                            $no++; ?></td>
                                    <td><?php echo $h->about_judul; ?></td>
                                    <td><?php echo base_url() . "about/" . $h->about_slug; ?></td <td>

                                    </td>
                                    <a target="_blank" href="<?php echo base_url() . "about/" . $h->about_slug; ?>"
                                        class="btn btn-success btn-sm"> <i class="fa fa-eye"></i> </a>
                                    <a href="<?php echo base_url() . 'dashboard/about_edit/' . $h->about_id; ?>"
                                        class="btn btn-warning btn-sm">
                                        <i class="fa fa-pencil"></i> </a>
                                    <a href="<?php echo base_url() . 'dashboard/about_hapus/' . $h->about_id; ?>"
                                        class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a>
                                </tr>

                                <?php } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>