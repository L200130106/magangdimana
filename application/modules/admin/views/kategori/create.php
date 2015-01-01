<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Tambah Kategori
            </header>
            <div class="panel-body">
                <form role="form" method="POST" action="<?php echo base_url('admin/kategori/store'); ?>">
                  <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" class="form-control" id="kategori" name="kategori" required>
                  </div>
                  <input type="submit" value="Submit" class="btn btn-primary">
                </form>
            </div>
        </section>
    </div>
</div>