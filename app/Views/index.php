<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SKINCARE SHOP ONLINE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>css/style.css">
  </head>

  <body>
    <div class="container">
      <!-- Header -->
      <div class="row mb-5">
        <div class="col-12 text-end">
          <a href="<?= base_url() ?>chart" class="btn btn-secondary">
            Keranjang Belanja <span class="badge btn btn-primary">1</span>
          </a>
        </div>
      </div>

      <!-- Welcome Section -->
      <div class="row bg-primary-subtle m-1" style="border-radius: 15px;">
        <div class="col-6 p-5">
          <h1>Selamat Datang di Skincare Shop</h1>
          <p>Kami menyediakan segala produk kebutuhan skincare Anda.</p>
          <a href="#" class="btn btn-success">Lihat Produk</a>
        </div>
        <div class="col-6 p-5">
          <h1>Temukan Skincare Kebutuhan Anda</h1>
          <form action="">
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Nama Skincare">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Jenis Kulit">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Brand Skincare">
            </div>
            <div class="mb-3">
              <button class="btn btn-primary">Cari</button>
            </div>
          </form>
        </div>
      </div>

      <!-- Best Seller Section -->
      <h2>Skincare Best Seller</h2>
            <div class="row mb-5 g-3">
            <div class="col-3">
                <div class="card">
                <img src="<?= base_url('images/CREAM.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Advanced Snail 92 All in One Cream</h5>
                      <p class="card-text">Rp. 329.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                <img src="<?= base_url('images/COSRX.png') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Cosrx low pH good morning gel cleanser</h5>
                      <p class="card-text">Rp. 155.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                <img src="<?= base_url('images/ACNE.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">cosrx acne pimple master patch</h5>
                      <p class="card-text">Rp. 59.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                <img src="<?= base_url('images/FW.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">cosrx salicylic acid daily gentle cleanser</h5>
                      <p class="card-text">Rp. 105.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                <img src="<?= base_url('images/TONER.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">cosrx aha bha clarifying treatment toner</h5>
                      <p class="card-text">Rp. 200.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                <img src="<?= base_url('images/WATER.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">cosrx centella water alcohol-free toner</h5>
                      <p class="card-text">Rp. 215.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                <img src="<?= base_url('images/MOIST.png') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">cosrx oil free ultra moisturizing lotion</h5>
                      <p class="card-text">Rp. 299.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
              <div class="card">
              <img src="<?= base_url('images/SUN.png') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">COSRX Vitamin E Vitalizing Sunscreen SPF 50+</h5>
                      <p class="card-text">Rp. 350.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            </div>

    <!-- Footer -->
    <footer class="py-3 text-center" style="background-color: #f5f5dc; color: #000;">
      <div class="container">
        Copyright 2024. Skincare Shop Online Kelas 3B SOLI AMALIA RAHMADHANI. All Rights Reserved.
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
