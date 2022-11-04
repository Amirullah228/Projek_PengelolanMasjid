<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Halaman Tambah Data Sarana | Prasarana</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" required="" class="form-control" name="nama">
                  </div>
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="foto" accept="image/*">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success" name="saveS">Tambah</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
</section>
<?php 
if(isset($_POST['saveS'])) {
  
    $nama = $_POST['nama'];
    $foto = $_FILES['foto']['name'];

    $dir = "img/sarana/";
    $tmp_file = $_FILES['foto']['tmp_name'];
    move_uploaded_file($tmp_file, $dir.$foto);
    
    $result = $conn->query("INSERT INTO sarana(nama_sapra,foto) VALUES ('$nama','$foto')")or die(mysqli_connect_error($conn));

    if($result > 0) {
        echo "<script>
                document.location.href= '?page=sarana';  
              </script>";
    } else {
        echo "Gagal Menambahkan data";
    }


}



?>