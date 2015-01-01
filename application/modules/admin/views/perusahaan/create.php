<style>
  #map{
    width: 100%;
    height: 200px;
  }

</style>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="https://hpneo.github.io/gmaps/gmaps.js"></script>

<script>
  $(document).ready(function() {
    flag = false;
    function setKoordinat(lat, lng) {
      $('#koordinat').val(lat+','+lng);
    }


    map = new GMaps({
        div: '#map',
        lat: -7.588495451885692,
        lng: 110.83008412499998,
        zoom: 10,
        click: function(e){
          if (flag == false) {
            marker = map.addMarker({
              lat: e.latLng.lat(),
              lng: e.latLng.lng(),
              draggable: true,
              drag: function(e){
                setKoordinat(e.latLng.lat(), e.latLng.lng());
              },

            });
            flag = true;
            setKoordinat(e.latLng.lat(), e.latLng.lng());
          };
        },

      });
  });

</script>

<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Tambah Perusahaan
            </header>
            <div class="panel-body">
                <form role="form" method="POST" action="<?php echo base_url('admin/perusahaan/store'); ?>" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" required>
                  </div>
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="file" class="form-control" id="logo" name="logo" required>
                  </div>
                  <div class="form-group">
                    <label for="koordinat">Koordinat</label>
                    <input type="text" class="form-control" id="koordinat" name="koordinat" required readonly="">
                    <div id="map"></div>
                  </div>
                  <a href="<?php echo base_url('admin/perusahaan'); ?>" class="btn btn-danger">Kembali</a>
                  <input type="submit" value="Simpan" class="btn btn-primary">
                </form>
            </div>
        </section>
    </div>
</div>