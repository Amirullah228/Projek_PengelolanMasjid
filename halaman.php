
<div class="akses">
<!-- corosuel -->
<div class="col-md-12">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slide/slide1.jpg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block position-absolute top-50 start-50 translate-middle">
        <h1>Selamat Datang</h1>
        <h4>Di Websaite Resmi Masjid Al-Furqon.</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slide/slide2.jpg" class="d-block w-100" >
      <div class="col-9 carousel-caption d-none d-md-block position-absolute top-50 start-50 translate-middle">
        <h1>Sekilas Interior Masjid</h1>
        <h4>Masjid merupakan tempat beribadah masayrakat muslim, untuk menambah kenyaman dalam beribadah tidak jarang pengelola masjid membuat desain yang menenangkan,minimalis,segar,sederhana namun sangat efektif untuk berbagai keperluan dan kegiatan.</h4>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<!-- corosuel -->

<!-- sejarah -->
<section class="container mt-5">
  <div class="row">
  <div class="col">
      <img src="img/hero.jpg" class="rounded" width="600" height="400">
    </div>
  <div class="col">
      <h3 class="mb-3">Sejarah</h2>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam quis eius cum fugit unde aperiam, ad perspiciatis nesciunt ipsa ut rem quasi iure amet aliquam ipsum natus necessitatibus quibusdam autem non adipisci voluptatum quaerat, fugiat sapiente soluta. Delectus quae nostrum ipsum dolore dolorem architecto, doloremque voluptas optio minima temporibus laudantium!</p>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam quis eius cum fugit unde aperiam, ad perspiciatis nesciunt ipsa ut rem quasi iure amet aliquam ipsum natus necessitatibus quibusdam autem non adipisci voluptatum quaerat, fugiat sapiente soluta. Delectus quae nostrum ipsum dolore dolorem architecto, doloremque voluptas optio minima temporibus laudantium!</p>
      <button class="btn btn-primary text-decoration-underline">Baca Selengkapnya</button>
    </div>
  </div>
</section>
<!-- sejarah -->

<!-- sarana -->
<section id="pengumuman" class="bg-primary">
<div class="container mt-5">
  <div class="row py-4">
    <div class="col-md-6">
    <h4 class="text-white fw-bold">Sarana | Prasarana</h4>
      <!-- casosul -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">

  <?php 
  $i = 0;

  include "config/koneksi.php";
  $query = $conn->query("SELECT * FROM sarana");

while($data = mysqli_fetch_assoc($query)) {?>

  <?php 
    $active = '';
    if($i == 0) {
      $active = 'active';
    }
  ?>

    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="<?php echo $active; ?>"></button>

<?php } $i++; ?>

  </div>
  <div class="carousel-inner">

    <?php 
    include "config/koneksi.php";
    $query1 = $conn->query("SELECT * FROM sarana ORDER BY id_sapra DESC");
    $i = 0;
    while ($data1 = mysqli_fetch_assoc($query1)) { ?>
    
      <?php 
      $active = '';
      if($i == 0){
        $active = 'active';
      }
      ?>

    <div class="carousel-item <?php echo $active; ?>">
      <img src="img/sarana/<?= $data1['foto']; ?>" class="d-block w-100" height="400">
    </div>
    
    <?php $i++;} ?>

    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      <!-- casosul -->
  </div>
  <div class="col-md-6">
  <h4 class="text-white fw-bold">Video Channel</h4>
      <a href=""><img src="img/hero.jpg" width="560" height="400" class="rounded"></a>
  </div>
</div>
</section>
<!-- sarana -->

<!-- kegiatan -->
<section id="sarana" class="container mt-5">
  <div class="row">
  <h4 class="fw-bold mb-3">Informasi Terkini</h4>
    
  <?php 
  include "config/koneksi.php";
  $query1 = $conn->query("SELECT * FROM pengumuman ORDER BY tgl DESC");
  foreach($query1 as $d):
  ?>
  <div class=" mx-auto mb-4" style="width: 18rem;">
    <img src="img/kegiatan/<?= $d['foto']; ?>" class="card-img-top" >
    <div class="card-body">
     <a href="frontend/konten.php?id=<?php echo $d['id_pengumuman'] ?>" class="text-black"><p class="card-text fs-5"><?= $d['judul'] ?></p></a>  
      <p class="card-text"><?= substr($d['isi_pengumuman'],0,100); ?></p>
      <p class="card-text"><small class="text-muted"><?= date("d/M/Y", strtotime($d['tgl'])); ?></small></p>
          
    </div>
  </div>
    <?php endforeach; ?>
  </div>
</section>
<!-- kegiatan -->

<!-- pengurus -->
<section class="container mt-5">
  <div class="row">
    <div class="col">
    <div class=" mb-3">
  <div class="row g-0">
    <div class="col-md-8">
      <img src="img/sosial/pengurus.jpg" class="img-fluid rounded-start" width="700">
    </div>
    <div class="col-md-4">
      <div class="card-body">
        <h4 class="card-title">Pengurus</h4>
        <p class="card-text">Gambar bersama dengan pengurus DKM masjid Al-Furqon.</p>
        <a href="?page=organisasi" class="btn btn-primary text-decoration-underline">Struktur Pengurus</a>
        <p class="card-text"><small class="text-muted">12/Aug/2022</small></p>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</section>