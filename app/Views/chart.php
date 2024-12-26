<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chart - Skincare Shop Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        margin: 0;
        padding: 0;
      }
      .header {
        background-color: #e9ecef; /* Warna abu-abu lembut */
        color: #000; /* Warna teks hitam */
        padding: 1rem;
        text-align: center;
        width: 100%; /* Memastikan lebar penuh */
      }
      .header h1 {
        margin: 0;
        font-size: 2rem;
        font-weight: bold;
      }
      footer {
        background-color: #f5f5dc; /* Warna cream */
        color: #000; /* Warna teks hitam */
        padding: 1rem;
        text-align: center;
        width: 100%; /* Memastikan lebar penuh */
        position: fixed; /* Agar footer tetap di bawah */
        bottom: 0;
        left: 0;
      }
      .container {
        padding-bottom: 80px; /* Ruang untuk menghindari tumpang tindih dengan footer */
      }
    </style>
  </head>
  <body>
    <!-- Header -->
    <div class="header">
      <h1>Keranjang Belanja</h1>
    </div>
    
    <!-- Konten Utama -->
    <div class="container mt-4">
      <!-- Keranjang Belanja Button -->
      <div class="row mb-4">
        <div class="col-12 d-flex justify-content-end">
          <a href="chart.php" class="btn btn-secondary">
            Keranjang Belanja <span class="badge text-bg-warning">1</span>
          </a>
        </div>
      </div>

      <!-- Produk di Keranjang -->
      <div class="row mb-5 g-3">
        <!-- Produk 1 -->
        <div class="col-12">
          <div class="row p-3 bg-light g-3 rounded">
            <div class="col-sm-6 col-md-4">
              <img src="<?= base_url('images/CREAM.jpg') ?>" alt="Produk" class="img-fluid">
            </div>
            <div class="col-sm-6 col-md-4 d-flex flex-column justify-content-center">
              <h5>Advanced Snail 92 All in One Cream</h5>
              <p>Rp. 329,000,-</p>
            </div>
            <div class="col-2 d-flex flex-column justify-content-center">
              <span>1</span>
            </div>
            <div class="col-2 d-flex flex-column justify-content-center">
              <a href="#" class="btn btn-danger">Hapus</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Total dan Tombol -->
      <div class="row d-flex justify-content-end mb-5">
        <div class="col-12">
          <h2>TOTAL: Rp. 329,000,-</h2>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-end">
            <a href="<?= base_url() ?>" class="btn btn-secondary me-2">Kembali Berbelanja</a>
            <a href="<?= base_url('checkout') ?>" class="btn btn-primary">Checkout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      Copyright 2024. Skincare Shop Online Kelas 3B SOLI AMALIA RAHMADHANI. All Rights Reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
