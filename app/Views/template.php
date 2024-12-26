<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Skincare Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url()?> css/style.css">
    <style>
      body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
      }
      .content {
        flex: 1;
      }
      footer {
        background-color: #f5f5dc; /* Warna cream */
      }
    </style>
  </head>
  <body>
    <div class="content">
      <div class="container">
          <div class="row mb-5">
              <div class="col-12 text-end">
                  <a href="<?= base_url()?>chart" class="btn btn-secondary">
                  Keranjang Belanja <span class="badge text-bg-warning">1</span>
                  </a>
              </div>
          </div>
      </div>

      <!-- Content section -->
      <?= $this->renderSection('main') ?>
    </div>

    <!-- Footer -->
    <footer class="py-3 text-center">
        <div class="container">
            Copyright 2024. Skincare Shop Online Kelas 3B SOLI AMALIA RAHMADHANI. All Rights Reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
