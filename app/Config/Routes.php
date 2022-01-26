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
$routes->get('/logout/pencacah', 'C_login::logoutpencacah');
$routes->get('/register', 'C_register::index');
$routes->post('/login/mitra', 'C_login::mitra_auth');
$routes->get('/login/mitra', 'C_login::coba');
$routes->get('/login_mitra', 'C_login::login_mitra');
$routes->post('/saveRegister', 'C_register::save');
$routes->post('/savelogin', 'C_login::auth');
$routes->match(['get', 'post'], 'profile', 'C_login::profile');
// $routes->get('/profile', 'C_login::profile');
// $routes->post('/editprofile', 'C_login::editprofile');


// $routes->get('/dashboard', 'C_home::index', ['filter' => 'auth']);
$routes->get('/dashboard', 'C_pencacah::index', ['filter' => 'auth']);
$routes->post('/pencacah/homeData/(:segment)', 'C_pencacah::homeData/$1', ['filter' => 'user']);
$routes->get('/pencacah/detail/(:segment)', 'C_pencacah::detail/$1', );
$routes->get('/pencacah/edit/(:segment)', 'C_dashboard::edit/$1', );
$routes->post('/pencacah/update/(:segment)', 'C_dashboard::update/$1', );


// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/admin/print', 'C_Admin::index', ['filter' => 'admin']);
$routes->get('/admin/excel', 'C_Admin::excel', ['filter' => 'admin']);
$routes->get('/admin/kegiatan', 'C_Admin::kegiatan', ['filter' => 'admin']);
$routes->get('/admin/tambah-kegiatan', 'C_Admin::tambahkegiatan', ['filter' => 'admin']);
$routes->post('/admin/store-kegiatan', 'C_Admin::store_kegiatan', ['filter' => 'admin']);
$routes->get('/admin/edit/kegiatan/(:segment)', 'C_Admin::edit/$1');
$routes->post('/kegiatan/update/(:segment)', 'C_Admin::update/$1');
$routes->delete('/admin/delete/kegiatan/(:any)', 'C_Admin::delete/$1');
$routes->delete('/admin/data-hapus/(:any)', 'C_mitra::delete/$1');
$routes->get('/admin/tambah-mitra', 'C_mitra::tambah', ['filter' => 'admin']);
$routes->get('/admin/mitra-lengkap', 'C_mitra::lengkap', ['filter' => 'admin']);
$routes->get('/admin/data-detail/(:segment)', 'C_mitra::detailLengkap/$1');
$routes->post('/admin/store', 'C_Mitra::store',['filter' => 'admin']);


$routes->get('/pengawas', 'C_Pengawas::pengawas', ['filter' => 'penilai']);
$routes->get('/pengawas/nilai/(:segment)', 'C_Pengawas::nilai/$1', );
$routes->get('/pengawas/penilaian', 'C_Pengawas::penilaian',  ['filter' => 'penilai']);
$routes->post('/pengawas/selanjutnyaa', 'C_Pengawas::selanjutnya',  ['filter' => 'penilai']);
$routes->get('/pengawas/savePenilaian', 'C_Pengawas::savePenilaian',  ['filter' => 'penilai']);
$routes->post('/pengawas/store-nilai', 'C_Pengawas::store_nilai', );

$routes->get('/manage/account', 'C_Admin::manageaccount', ['filter' => 'admin']);
$routes->get('/manage/accounts/data', 'C_manage::index', ['filter' => 'admin']);
$routes->post('/admin/manage/accounts/save', 'C_manage::save');
$routes->get('/manage/account/pencacah', 'C_Admin::manageaccountuser', ['filter' => 'admin']);
$routes->delete('/admin/manage/accounts/delete/(:any)', 'C_manage::deletePencacah/$1');
$routes->delete('/admin/manage/delete/(:any)', 'C_manage::delete/$1');
$routes->get('/admin/manage/accounts/edit/(:segment)', 'C_manage::editPassword/$1');
$routes->get('/admin/manage/edit/(:segment)', 'C_manage::editPasswordPenilai/$1');
$routes->post('/admin/manage/accounts/update/(:segment)', 'C_manage::updatePassword/$1');
$routes->post('/admin/manage/update/(:segment)', 'C_manage::updatePasswordPenilai/$1');

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
