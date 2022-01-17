<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
$routes->get('/', 'C_navigation::index', ['filter' => 'auth']);
$routes->get('/guest', 'C_navigation::gHome');
$routes->get('/login', 'C_login::index');
$routes->get('/logout', 'C_login::logout');
$routes->get('/register', 'C_register::index');
$routes->post('/saveRegister', 'C_register::save');
$routes->post('/savelogin', 'C_login::auth');
$routes->match(['get', 'post'], 'profile', 'C_login::profile');
// $routes->get('/profile', 'C_login::profile');
// $routes->post('/editprofile', 'C_login::editprofile');


$routes->get('/dashboard', 'C_home::index', ['filter' => 'auth']);
$routes->get('/pencacah', 'C_pencacah::index', ['filter' => 'auth']);
$routes->post('/pencacah/homeData/(:segment)', 'C_pencacah::homeData/$1');
$routes->get('/pencacah/detail/(:segment)', 'C_pencacah::detail/$1');
$routes->get('/pencacah/edit/(:segment)', 'C_dashboard::edit/$1');
$routes->post('/pencacah/update/(:segment)', 'C_dashboard::update/$1');

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/admin/print', 'C_Admin::index', ['filter' => 'admin']);
$routes->get('/admin/excel', 'C_Admin::excel');
$routes->get('/admin/tambah-kegiatan', 'C_Admin::kegiatan');
$routes->post('/admin/store-kegiatan', 'C_Admin::store_kegiatan');
$routes->get('/admin/tambah-mitra', 'C_Mitra::tambah');
$routes->post('/admin/store', 'C_Mitra::store');

$routes->get('/pengawas', 'C_Pengawas::pengawas');
$routes->get('/pengawas/nilai/(:segment)', 'C_Pengawas::nilai/$1');
$routes->get('/pengawas/penilaian', 'C_Pengawas::penilaian');
$routes->post('/pengawas/selanjutnyaa', 'C_Pengawas::selanjutnya');
$routes->get('/pengawas/savePenilaian', 'C_Pengawas::savePenilaian');


$routes->get('/manage/account', 'C_Admin::manageaccount');
$routes->get('/manage/accounts/data', 'C_manage::index');

// $routes->get('/dashboard', 'C_dashboard::index');

// $routes->get('/pencacah/home', 'C_home::index', ['filter' => 'user']);
// // $routes->get('/pencacah', 'C_dashboard::pencacah');
// $routes->get('/pencacah/detail/(:segment)', 'C_Admin::detail/$1', ['filter' => 'admin']);
// $routes->get('/pencacah/tambah', 'C_Admin::tambah', ['filter' => 'admin']);
// $routes->get('/pencacah/edit/(:segment)', 'C_dashboard::edit/$1');
// $routes->post('/pencacah/update/(:segment)', 'C_dashboard::update/$1');

// $routes->get('/admin/print', 'C_Admin::index');

// $routes->post('/pencacah/store', 'C_dashboard::store');
// $routes->get('/pengawas', 'C_Pengawas::pengawas');
// $routes->get('/pengawas/nilai/(:segment)', 'C_Pengawas::nilai/$1');
// $routes->get('/pengawas/tambah-kegiatan', 'C_Pengawas::kegiatan');
// $routes->post('/pengawas/store-kegiatan', 'C_Pengawas::store_kegiatan');
// $routes->post('/pengawas/store-nilai', 'C_Pengawas::store_nilai');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
