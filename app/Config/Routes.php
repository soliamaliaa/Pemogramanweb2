<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/chart', 'Home::chart');
$routes->get('/checkout', 'Home::checkout');

service('auth')->routes($routes);
$routes->post('/submit', 'Home::submit');

//admin
$routes->get('/admin', 'AdminController::index');
$routes->get('/admin/dashboard', 'AdminController::index');

$routes->get('/admin/daftar-skincare', 'AdminController::daftarskincare');
$routes->get('/admin/daftar-skincare/tambah', 'AdminController::daftarskincareTambah');
$routes->post('/admin/daftar-skincare/tambah', 'AdminController::createskincare');
$routes->get('/admin/daftar-skincare/edit', 'AdminController::daftarskincareEdit');
$routes->get('admin/daftar-skincare/edit/(:num)', 'Admin\DaftarSkincare::edit/1');
$routes->get('/admin/daftarskincare/edit/(:segment)', 'AdminController::daftarskincareEdit/$1');
$routes->post('admin/daftar-skincare/update/(:num)', 'Admin\DaftarSkincare::update/1');
$routes->post('/admin/daftarskincare/update/(:segment)', 'AdminController::updateProduk/$1');
$routes->get('/admin/daftar-skincare/hapus', 'AdminController::daftarskincareHapus');
$routes->get('/admin/daftar-skincare/hapus/1', 'AdminController::daftarskincareHapus/1');
$routes->get('/admin/daftar-skincare/hapus/2', 'AdminController::daftarskincareHapus/2');
$routes->get('/admin/daftar-skincare/hapus/3', 'AdminController::daftarskincareHapus/3');

$routes->get('/admin/transaksi', 'AdminController::transaksi');
$routes->get('/admin/transaksi/ubah-status', 'AdminController::transaksiUbahStatus');
$routes->get('/admin/transaksi/hapus', 'AdminController::transaksiHapus');

$routes->get('/admin/pelanggan', 'AdminController::pelanggan');
$routes->get('/admin/pelanggan/hapus', 'AdminController::pelangganHapus');

$routes->get('file-images/(:segment)/(:segment)', 'AdminController::image/$1/$2');