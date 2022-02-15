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
$routes->setDefaultController('C_pencacah');
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
$routes->post('/login', 'C_login::auth');
$routes->get('/logout', 'C_login::logout');
$routes->get('/register', 'C_register::index');
$routes->post('/login/mitra', 'C_login::mitra_auth');
$routes->get('/login/mitra', 'C_login::coba', ['filter' => 'mitra']);
$routes->get('/login_mitra', 'C_login::login_mitra');
$routes->post('/savelogin', 'C_login::auth');
$routes->match(['get', 'post'], 'profile', 'C_login::profile', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'setting', 'C_Pengawas::setting', ['filter' => 'penilai'] );


// $routes->get('/dashboard', 'C_home::index', ['filter' => 'auth']);
$routes->get('/dashboard', 'C_pencacah::index', ['filter' => 'auth']);
$routes->get('/pencacah', 'C_pencacah::pencacah', ['filter' => 'mitra']);
$routes->post('/pencacah/homeData/(:segment)', 'C_pencacah::homeData/$1', ['filter' => 'user']);
$routes->get('/pencacah/detail/(:segment)', 'C_pencacah::detail/$1',['filter' => 'penilai'] );
$routes->post('/pencacah/update/(:segment)', 'C_pencacah::update/$1' );
$routes->get('/pencacah/editprofile', 'C_pencacah::editprofile',['filter' => 'mitra']);
$routes->get('/profilpegawai', 'C_pencacah::profilpegawai', ['filter' => 'user']);
$routes->post('/saveprofilepegawai/(:segment)', 'C_pencacah::saveprofilepegawai/$1' );

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/admin/print', 'C_Admin::index', ['filter' => 'admin']);
$routes->get('/admin/excel', 'C_Admin::excel', ['filter' => 'admin']);
$routes->get('/admin/kegiatan', 'C_Admin::kegiatan', ['filter' => 'admin']);
$routes->get('/admin/tambah-kegiatan', 'C_Admin::tambahkegiatan', ['filter' => 'admin']);
$routes->post('/admin/store-kegiatan', 'C_Admin::store_kegiatan', ['filter' => 'admin']);
$routes->get('/admin/edit/kegiatan/(:segment)', 'C_Admin::edit/$1', ['filter' => 'admin']);
$routes->post('/kegiatan/update/(:segment)', 'C_Admin::update/$1');
$routes->delete('/admin/delete/kegiatan/(:any)', 'C_Admin::delete/$1');
$routes->get('/admin/nilaipegawai/(:segment)', 'C_Admin::nilaipegawai/$1',['filter' => 'admin']);
$routes->post('/admin/store-nilaipegawai', 'C_Admin::storeNilaiPegawai',['filter' => 'admin']);
$routes->get('/admin/penilaianpegawai', 'C_Admin::penilaianPegawai',['filter' => 'admin']);
// $routes->get('/admin/pegawai', 'C_Admin::dataPegawai',['filter' => 'admin']);
$routes->get('/admin/list/penilaian/(:segment)', 'C_Admin::listNilaiPegawai/$1',['filter' => 'admin']);
// $routes->get('/admin/detailpegawai/(:segment)', 'C_Admin::detailpegawai/$1',['filter' => 'admin']);

//new
$routes->get('/admin/mitra-lengkap', 'C_Admin::lengkap', ['filter' => 'admin']);
$routes->get('/admin/data-detail/(:segment)', 'C_Admin::detailLengkap/$1', ['filter' => 'admin']);
$routes->delete('/admin/data-hapus/(:any)', 'C_Admin::deletePetugas/$1', ['filter' => 'admin']);
$routes->get('/admin/tambah-mitra', 'C_Admin::tambah', ['filter' => 'admin']);
$routes->post('/admin/store-mitra/(:segment)', 'C_Admin::storeMitra/$1',['filter' => 'admin']);

$routes->get('/pengawas', 'C_Pengawas::pengawas', ['filter' => 'penilai']);
$routes->get('/editprofile', 'C_Pengawas::editprofile', ['filter' => 'penilai']);
$routes->get('/pengawas/nilai/(:segment)', 'C_Pengawas::nilai/$1',['filter' => 'penilai']);
$routes->get('/pengawas/penilaian', 'C_Pengawas::penilaian',  ['filter' => 'penilai']);
$routes->post('/pengawas/selanjutnyaa', 'C_Pengawas::selanjutnya',  ['filter' => 'penilai']);
$routes->get('/pengawas/savePenilaian', 'C_Pengawas::savePenilaian',  ['filter' => 'penilai']);
$routes->post('/pengawas/store-nilai', 'C_Pengawas::store_nilai', ['filter' => 'penilai'] );
$routes->post('/pengawas/saveprofile/(:segment)', 'C_Pengawas::saveprofile/$1', );
$routes->get('/pengawas/detail/(:segment)', 'C_pengawas::detailkegiatan/$1',['filter' => 'penilai'] );

$routes->get('/manage/account', 'C_Admin::manageaccount', ['filter' => 'admin']);
$routes->get('/manage/accounts/data', 'C_manage::index', ['filter' => 'admin']);
$routes->get('/manage/accounts/user', 'C_manage::user', ['filter' => 'admin']);
$routes->post('/admin/manage/accounts/save', 'C_manage::save');
$routes->post('/admin/manage/accounts/user/save', 'C_manage::saveuser');
$routes->get('/manage/account/pencacah', 'C_Admin::manageaccountuser', ['filter' => 'admin']);
$routes->delete('/admin/manage/accounts/delete/(:any)', 'C_manage::deletePencacah/$1');
$routes->delete('/admin/manage/delete/(:any)', 'C_manage::delete/$1');
$routes->get('/admin/manage/accounts/edit/(:segment)', 'C_manage::editPassword/$1', ['filter' => 'admin']);
$routes->get('/admin/manage/edit/(:segment)', 'C_manage::editPasswordPenilai/$1', ['filter' => 'admin']);
$routes->get('/admin/manage/edit/petugas/(:segment)', 'C_manage::editNamaPenilai/$1', ['filter' => 'admin']);
$routes->get('/admin/manage/edit/user/(:segment)', 'C_manage::editNamaUser/$1', ['filter' => 'admin']);
$routes->post('/admin/manage/accounts/update/(:segment)', 'C_manage::updatePassword/$1');
$routes->post('/admin/manage/update/(:segment)', 'C_manage::updatePasswordPenilai/$1', ['filter' => 'admin']);
$routes->post('/admin/manage/update/username/(:segment)', 'C_manage::updateNamaPenilai/$1', ['filter' => 'admin']);
$routes->post('/admin/manage/update/username/user/(:segment)', 'C_manage::updateNamaUser/$1', ['filter' => 'admin']);


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
