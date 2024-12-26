<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Toko Skincare Online</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">

    <style>
        /* Ensures the body takes up at least the full height of the viewport */
        html, body {
            height: 100%;
            margin: 0; /* Remove default margins */
        }

        body {
            display: flex;
            flex-direction: column; /* Stack the elements vertically */
            min-height: 100vh; /* Ensure body takes the full height of the page */
        }

        .container {
            flex: 1; /* Let the main content fill the available space */
        }

        footer {
            background-color: #f5f5dc; /* Cream color */
            color: #333; /* Dark text for better readability */
            text-align: center;
            padding: 1rem;
            margin-top: auto; /* Push footer to the bottom */
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Header Row -->
        <div class="row my-3">
            <div class="col">
                <h2>Admin</h2>
            </div>
            <div class="col text-end">
                <a href="<?= base_url('logout')?>" class="btn btn-secondary">Logout</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="<?= base_url('admin/dashboard')?>" class="">Dashboard</a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?= base_url('admin/daftar-skincare')?>" class="">Koleksi Skincare</a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?= base_url('admin/transaksi')?>" class="">Transaksi</a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?= base_url('admin/pelanggan')?>" class="">Pelanggan</a>
                    </li>
                </ul>
            </div>

            <div class="col-9">
                <?= $this->renderSection('main'); ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-3 mt-4">
        <div class="container text-center">
            <p>Copyright 2024. Skincare Shop Online Kelas 3B SOLI AMALIA RAHMADHANI. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
