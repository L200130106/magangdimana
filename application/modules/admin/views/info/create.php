<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Tambah Info Perusahaan
            </header>
            <div class="panel-body">
                <form role="form" method="POST" action="<?php echo base_url('admin/info/store'); ?>">
                  <div class="form-group">
                    <label for="id_perusahaan">Perusahaan</label>
                    <select name="id_perusahaan" id="id_perusahaan" class="form-control" required>
                        <option value="">-- Select Perusahaan --</option>
                        <?php foreach ($perusahaan as $hasil): ?>
                        <option value="<?php echo $hasil->id ?>"><?php echo $hasil->nama ?></option>
                        <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control" required>
                        <option value="">-- Select Kategori --</option>
                        <?php foreach ($kategori as $hasil): ?>
                        <option value="<?php echo $hasil->id ?>"><?php echo $hasil->kategori ?></option>
                        <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="posisi">Posisi</label>
                    <input type="text" class="form-control" id="posisi" name="posisi" required>
                  </div>
                  <div class="form-group">
                    <label for="persyaratan">Persyaratan</label>
                    <textarea name="persyaratan" id="persyaratan" cols="30" rows="5" class="form-control" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="tgl_upload">Tanggal Upload</label>
                    <input type="date" class="form-control" id="tgl_upload" name="tgl_upload" required>
                  </div>
                  <div class="form-group">
                    <label for="tgl_berkas">Tanggal Berkas</label>
                    <input type="date" class="form-control" id="tgl_berkas" name="tgl_berkas" required>
                  </div>
                  <div class="form-group">
                    <label for="tgl_mulai">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" required>
                  </div>
                  <div class="form-group">
                    <label for="tgl_selesai">Tanggal Selesai</label>
                    <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" required>
                  </div>
                  <a href="<?php echo base_url('admin/info'); ?>" class="btn btn-danger">Kembali</a>
                  <input type="submit" value="Simpan" class="btn btn-primary">
                </form>
            </div>
        </section>
    </div>
</div>