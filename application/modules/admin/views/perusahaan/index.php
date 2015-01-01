<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Daftar Perusahaan
            </header>
            <div class="panel-body">
                <a href="<?php echo base_url('admin/perusahaan/create'); ?>" class="btn btn-primary">Tambah Perusahaan</a>
                <table class="table  table-hover general-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th width="20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($perusahaan as $per): ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $per->nama; ?></td>
                            <td><?php echo $per->alamat; ?></td>
                            <td><?php echo $per->email; ?></td>
                            <td><?php echo $per->telepon; ?></td>
                            <td>
                                <a href="<?php echo base_url('admin/perusahaan/detail/'.$per->id); ?>" class="btn btn-info">Detail</a>
                                <a href="<?php echo base_url('admin/perusahaan/edit/'.$per->id); ?>" class="btn btn-warning">Edit</a>
                                <a href="<?php echo base_url('admin/perusahaan/delete/'.$per->id); ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>