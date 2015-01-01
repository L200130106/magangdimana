<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Daftar Kategori
            </header>
            <div class="panel-body">
                <table class="table  table-hover general-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($kategori as $kat): ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $kat->kategori; ?></td>
                            <td>
                                <a href="<?php echo base_url('admin/kategori/edit/'.$kat->id); ?>" class="btn btn-warning">Edit</a>
                                <a href="<?php echo base_url('admin/kategori/delete/'.$kat->id); ?>" class="btn btn-danger">Delete</a>
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