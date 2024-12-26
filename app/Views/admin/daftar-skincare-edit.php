<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Edit Produk Skincare</h2>

<?php if(session('sukses')):?>
<div class="mb3">
    <div class="alert alert-success">
        <strong>Berhasil!</strong> <?= session('sukses');?>
    </div>
</div>
<?php endif;?>

<?php if(session('error')):?>
<div class="mb3">
    <div class="alert alert-danger">
        <strong>Gagal!</strong> <?= session('error');?>
    </div>
</div>
<?php endif;?>

<form action="<?= base_url('admin/daftarskincare/update/' . $produk['id_product']) ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <div class="form-group">
        <label for="nama_produk">Nama Produk</label>
        <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= old('nama_produk', $produk['nama_produk']) ?>" required>
    </div>
    <div class="form-group">
        <label for="brand">Brand</label>
        <input type="text" class="form-control" id="brand" name="brand" value="<?= old('brand', $produk['brand']) ?>" required>
    </div>
    <div class="form-group">
        <label for="kategori">Kategori</label>
        <input type="text" class="form-control" id="kategori" name="kategori" value="<?= old('kategori', $produk['kategori']) ?>" required>
    </div>
    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" value="<?= old('harga', $produk['harga']) ?>" required>
    </div>
    <div class="form-group">
        <label for="ukuran">Ukuran</label>
        <input type="text" class="form-control" id="ukuran" name="ukuran" value="<?= old('ukuran', $produk['ukuran']) ?>" required>
    </div>
    <div class="form-group">
        <label for="katalog">Gambar Katalog</label>
        <input type="file" class="form-control" id="katalog" name="katalog">
        <?php if($produk['katalog']): ?>
            <img src="<?= base_url('file-image/' . $produk['katalog']) ?>" alt="Katalog Produk" style="width: 150px; height:auto;">
        <?php endif; ?>
    </div>
    <button type="submit" class="btn btn-primary">Perbarui Produk</button>
</form>

<?= $this->endSection();?>
