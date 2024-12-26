<?= $this->extend('template') ?>

<?= $this->section('main') ?>

<div class="container">
    <div class="py-5 text-center">
        <!-- Pesan Sukses -->
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading"><strong>Berhasil!</strong></h4>
            <p>Order Anda akan segera diproses. Terima kasih telah berbelanja di toko kami!</p>
        </div>

        <!-- Tombol Kembali -->
        <div class="mt-4">
            <a href="<?= base_url() ?>" class="btn btn-secondary btn-lg">
                Kembali Berbelanja
            </a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
