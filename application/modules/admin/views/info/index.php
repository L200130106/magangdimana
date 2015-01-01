
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Daftar Info Magang
            </header>
            <div class="panel-body">
                <a href="<?php echo base_url('admin/info/create'); ?>" class="btn btn-primary" style="margin-bottom: 10px;">Tambah Info Magang</a>
                <table class="table  table-hover general-table">
                    <tbody>
                        <?php foreach ($info as $perusahaan): ?>
                        <tr>
                            <td colspan="8">
                                <h4><?php echo $perusahaan->nama; ?></h4>
                            </td>
                        </tr>
                        <tr>
                            <th>No</th>
                            <th>Posisi</th>
                            <th width="35%;">Syarat</th>
                            <th>Tanggal Upload</th>
                            <th>Tanggal Berkas</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th width="15%">Action</th>
                        </tr>
                            <?php $i = 1; ?>
                            <?php foreach ($perusahaan->info as $info): ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $info->posisi; ?></td>
                                <td><?php echo $info->persyaratan; ?></td>
                                <td><?php echo $info->tgl_upload; ?></td>
                                <td><?php echo $info->tgl_berkas; ?></td>
                                <td><?php echo $info->tgl_mulai; ?></td>
                                <td><?php echo $info->tgl_selesai; ?></td>
                                <td>
                                    <a href="<?php echo base_url('admin/info/edit/'.$info->id); ?>" class="btn btn-warning">Edit</a>
                                    <a href="<?php echo base_url('admin/info/delete/'.$info->id); ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                            <?php endforeach ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>