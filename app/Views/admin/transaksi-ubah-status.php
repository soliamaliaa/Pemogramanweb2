<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Transaksi extends BaseController
{
    public function ubahStatus($id)
    {
        // Load model transaksi
        $transaksiModel = new \App\Models\TransaksiModel();

        // Ambil data transaksi berdasarkan ID
        $transaksi = $transaksiModel->find($id);

        if (!$transaksi) {
            return redirect()->back()->with('error', 'Transaksi tidak ditemukan');
        }

        // Update status transaksi
        $newStatus = $this->request->getPost('status');
        $transaksi['status'] = $newStatus;

        if ($transaksiModel->save($transaksi)) {
            return redirect()->to('/admin/transaksi')->with('success', 'Status berhasil diubah');
        } else {
            return redirect()->back()->with('error', 'Gagal mengubah status');
        }
    }
}
