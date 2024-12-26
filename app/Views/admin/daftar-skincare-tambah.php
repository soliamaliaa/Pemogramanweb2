<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Tambah Skincare</h2>

<div class="w-50">
    <form action="<?= base_url('admin/daftar-skincare/tambah')?>" method="POST" 
    enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" class="form-control" name="nama_produk" id="nama_produk">
        </div>
        <div class="mb-3">
            <label for="brand">brand</label>
            <input type="text" class="form-control" name="brand" id="brand">
        </div>
        <div class="mb-3">
            <label for="kategori">kategori</label>
            <input type="text" class="form-control" name="kategori" id="kategori">
        </div>
        <div class="mb-3">
            <label for="harga">harga</label>
            <input type="text" class="form-control" name="harga" id="harga">
        </div>
        <div class="mb-3">
            <label for="katalog">katalog</label>
            <input type="file" class="form-control" name="katalog" id="katalog">
        </div>
        <div class="mb-3">
            <label for="ukuran">ukuran</label>
            <input type="text" class="form-control" name="ukuran" id="ukuran">
        </div>
        <div class="mb-3">
            <a href="<?= base_url('admin/daftar-skincare')?>" class="btn btn-secondary">kembali</a>
            <button type="submit" class="btn btn-primary">simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection();?>