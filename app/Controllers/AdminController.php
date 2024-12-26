<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProdukModel;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function daftarskincare()
    {
        $modelProduk = model('ProdukModel');
        $data['products'] = $modelProduk->findAll();

        return view('admin/daftar-skincare', $data);
    }

    public function daftarskincareTambah()
    {
        return view('admin/daftar-skincare-tambah');
    }

    public function createskincare()
    {
        $data = $this->request->getPost();
        $file = $this->request->getFile('katalog');

        if ($file && !$file->hasMoved()) {
            $path = $file->store();
            $data['katalog'] = $path;
        }

        $produkModel = model('ProdukModel');

        if ($produkModel->insert($data, false)) {
            return redirect()->to('/admin/daftar-skincare')->with('sukses', 'Data berhasil disimpan');
        } else {
            return redirect()->to('/admin/daftar-skincare')->with('error', 'Data gagal disimpan!');
        }
    }

    // Fungsi untuk menampilkan halaman edit produk
    public function daftarskincareEdit($id_product)
    {
        $produkModel = new ProdukModel();
        $data['produk'] = $produkModel->find($id_product);

        // Jika produk tidak ditemukan, redirect ke daftar skincare
        if (!$data['produk']) {
            return redirect()->to(base_url('admin/daftar-skincare'))->with('error', 'Produk tidak ditemukan.');
        }

        return view('admin/daftar-skincare-edit', $data);
    }

        // Fungsi untuk mengupdate data produk
    public function updateProduk($id_product)
    {
        $produkModel = new ProdukModel();
        $data = $this->request->getPost();

        // Validasi input
        if (!$this->validate([
            'nama_produk' => 'required',
            'brand' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'ukuran' => 'required',
        ])) {
            return redirect()->back()->withInput()->with('error', 'Validasi gagal. Periksa kembali input Anda.');
        }

        // Jika ada file baru, upload
        $fileKatalog = $this->request->getFile('katalog');
        if ($fileKatalog && $fileKatalog->isValid()) {
            $fileName = $fileKatalog->getRandomName();
            $fileKatalog->move('uploads/', $fileName);
            $data['katalog'] = $fileName; // Update data katalog jika file diupload
        }

        // Update data produk berdasarkan id_product
        if ($produkModel->update($id_product, $data)) {
            return redirect()->to(base_url('admin/daftar-skincare'))->with('sukses', 'Produk berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui produk.');
        }
    }


    // Fungsi untuk menghapus produk
    public function daftarskincareHapus($id_product)
    {
        $produkModel = model('ProdukModel');
        if ($produkModel->delete($id_product)) {
            return redirect()->to('/admin/daftar-skincare')->with('sukses', 'Data berhasil dihapus');
        } else {
            return redirect()->to('/admin/daftar-skincare')->with('error', 'Data gagal dihapus');
        }
    }

    public function transaksi()
    {
        return view('admin/transaksi');
    }

    public function transaksiUbahStatus()
    {
        return view('admin/transaksi-ubah-status');
    }

    public function transaksiHapus()
    {
        return view('admin/transaksi-hapus');
    }

    public function pelanggan()
    {
        return view('admin/pelanggan');
    }

    public function pelangganHapus()
    {
        return view('admin/pelanggan-hapus');
    }

    public function image($folder, $file)
    {
        return $this->response->download(WRITEPATH . 'uploads/' . $folder . '/' . $file, null);
    }
}