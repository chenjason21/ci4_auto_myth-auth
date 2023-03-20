<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Pages::index');
$routes->get('/list_user', 'Pages::list_user');
// route barang
$routes->get('/list_barang', 'Pages::list_barang');
$routes->get('/tambah_barang', 'Pages::tambah_barang');
$routes->get('/detail_barang/(:any)', 'Pages::detail_barang/$1');
$routes->post('/save_barang', 'Pages::save_barang');
$routes->get('/edit_barang/(:any)', 'Pages::edit_barang/$1');
$routes->post('/edit_barang/update_barang/(:any)', 'Pages::update_barang/$1');
$routes->delete('/delete_barang/(:any)', 'Pages::delete_barang/$1');

// route sales
$routes->get('/list_sales', 'Pages::list_sales');
$routes->get('/tambah_sales', 'Pages::tambah_sales');
$routes->post('/save_sales', 'Pages::save_sales');
$routes->get('/edit_sales/(:any)', 'Pages::edit_sales/$1');
$routes->post('/edit_sales/update_sales/(:any)', 'Pages::update_sales/$1');
$routes->delete('/delete_sales/(:any)', 'Pages::delete_sales/$1');

// route customer
$routes->get('/list_customer', 'Pages::list_customer');
$routes->get('/tambah_customer', 'Pages::tambah_customer');
$routes->post('/save_customer', 'Pages::save_customer');
$routes->get('/edit_customer/(:any)', 'Pages::edit_customer/$1');
$routes->post('/edit_customer/update_customer/(:any)', 'Pages::update_customer/$1');
$routes->delete('/delete_customer/(:any)', 'Pages::delete_customer/$1');

// route jurnal penjualan
$routes->get('/list_jurnal_penjualan', 'Pages::list_jurnal_penjualan');
$routes->get('/tambah_jurnal_penjualan', 'Pages::tambah_jurnal_penjualan');
$routes->post('/save_jurnal_penjualan', 'Pages::save_jurnal_penjualan');
$routes->get('/edit_jurnal_penjualan/(:any)', 'Pages::edit_jurnal_penjualan/$1');
$routes->post('/edit_jurnal_penjualan/update_jurnal_penjualan/(:any)', 'Pages::update_jurnal_penjualan/$1');
$routes->delete('/delete_jurnal_penjualan/(:any)', 'Pages::delete_jurnal_penjualan/$1');
$routes->post('/cetak_jurnal_penjualan', 'Pages::cetak_jurnal_penjualan');

// route jurnal pembelian
$routes->get('/list_jurnal_pembelian', 'Pages::list_jurnal_pembelian');
$routes->get('/tambah_jurnal_pembelian', 'Pages::tambah_jurnal_pembelian');
$routes->post('/save_jurnal_pembelian', 'Pages::save_jurnal_pembelian');
$routes->get('/edit_jurnal_pembelian/(:any)', 'Pages::edit_jurnal_pembelian/$1');
$routes->post('/edit_jurnal_pembelian/update_jurnal_penjualan/(:any)', 'Pages::update_jurnal_pembelian/$1');
$routes->delete('/delete_jurnal_pembelian/(:any)', 'Pages::delete_jurnal_pembelian/$1');
$routes->post('/cetak_jurnal_pembelian', 'Pages::cetak_jurnal_pembelian');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
