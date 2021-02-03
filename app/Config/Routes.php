<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::index');
$routes->get('/profil', 'Pages::profil');
$routes->get('/pendidikan', 'Pages::pendidikan');
$routes->get('/galeri', 'Pages::galeri');
$routes->get('/berita', 'Pages::berita');
$routes->get('/berita/detail/(:num)', 'Pages::detailBerita/$1');
$routes->get('/hubungi', 'Pages::hubungi');
$routes->get('/panduan', 'Pages::panduan');

$routes->get('/login', 'Auth::index');
$routes->get('/logout', 'Auth::logout');

$routes->get('/admin', 'Admin::index');
$routes->get('/admin/galeri', 'Admin::galeri');
$routes->get('/admin/addgaleri', 'AdminGaleri::addgaleri');
$routes->get('/admin/galeri/(:num)', 'AdminGaleri::editGaleri/$1');
$routes->get('/admin/updategaleri/(:num)', 'AdminGaleri::updateGaleri/$1');
$routes->delete('/admin/deletegaleri/(:num)', 'AdminGaleri::deleteGaleri/$1');

$routes->get('/admin/berita', 'Admin::berita');
$routes->get('/admin/addberita', 'AdminBerita::addBerita');
$routes->get('/admin/berita/(:num)', 'AdminBerita::editBerita/$1');
$routes->get('/admin/updateberita/(:num)', 'AdminBerita::updateBerita/$1');
$routes->delete('/admin/deleteberita/(:num)', 'AdminBerita::deleteBerita/$1');

$routes->get('/admin/contactus', 'Admin::contactUs');
$routes->delete('/admin/deletecontact/(:num)', 'Admin::deleteContactUs/$1');

$routes->get('/admin/ppdb', 'Admin::PPDB');
$routes->get('/admin/ppdbdetail', 'Admin::PPDBdetail');


/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
