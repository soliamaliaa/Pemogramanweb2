<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Daftar Skincare</h2>
<?php if(session('sukses')):?>
<div class="mb3">
    <div class="alert alert-success">
        <strong>berhasil</strong> <?php session('sukses');?>
    </div>
</div>
<?php endif;?>

<?php if(session('error')):?>
<div class="mb3">
    <div class="alert alert-success">
        <strong>gagal!</strong> <?php session('error');?>
    </div>
</div>
<?php endif;?>


<div class="">
    <a href="<?= base_url('admin/daftar-skincare/tambah')?>" class="btn 
    btn-primary">Tambah Produk</a>
</div>
<div class="mb-5">
    <table class="table table-stripped">
        <head>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nama produk</th>
                <th scope="col">brand</th>
                <th scope="col">Kategori</th>
                <th scope="col">harga</th>
                <th scope="col">katalog</th>
                <th scope="col">ukuran</th>
                <th scope="col">aksi</th>
            </tr>
            <thead>
                <tbody>
                    
                    <?php foreach($products as $produk): ?>
                    <tr>
                        <th scope="row"><?= $produk['id_product']?></th>
                        <td><?= $produk['nama_produk']?></td>
                        <td><?= $produk['brand']?></td>
                        <td><?= $produk['harga']?></td>
                        <td><?= $produk['ukuran']?></td>
                        <td>
                        <img src="<?= base_url('file-image/') . $produk['katalog']?>" alt="" style="width: 150px; height:auto;">
                        </td>
                        <td>
                             <?= $produk['harga']?>
                        </td>
                        <td>
                        <a href="<?= base_url('admin/daftarskincare/edit/' . $produk['id_product']) ?>" class="btn btn-success">Edit</a>

                            <a href="<?= base_url('admin/daftar-skincare/hapus/' . $produk['id_product']) ?>" 
                            class="btn btn-danger" 
                            onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                            Hapus
                            </a>
                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </thead>
        </head>
    </table>
</div>

<?= $this->endSection();?>