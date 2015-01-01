<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Detail Perusahaan
            </header>
            <div class="panel-body">
                <table class="detail-view table table-striped table-condensed">
				    <tbody>
				        <tr>
				            <th>Nama Perusahaan</th>
				            <td><?php echo $perusahaan->nama ?></td>
				        </tr>
				        <tr>
				            <th>Alamat Perusahaan</th>
				            <td><?php echo $perusahaan->alamat ?></td>
				        </tr>
				        <tr>
				            <th>Email Perusahaan</th>
				            <td><?php echo $perusahaan->email ?></td>
				        </tr>
				        <tr>
				            <th>Telepon Perusahaan</th>
				            <td><?php echo $perusahaan->telepon ?></td>
				        </tr>
				        <tr>
				            <th>Deskripsi Perusahaan</th>
				            <td><?php echo $perusahaan->deskripsi ?></td>
				        </tr>
				        <tr>
				            <th>Logo</th>
				            <td>
				            	<img src="<?php echo base_url('assets/logo/'.$perusahaan->logo) ?>" style="width: 90%;">
				            </td>
				        </tr>
				    </tbody>
				</table>
				<a href="<?php echo base_url('admin/perusahaan') ?>" class="btn btn-danger">Kembali</a>
            </div>
        </section>
    </div>
</div>