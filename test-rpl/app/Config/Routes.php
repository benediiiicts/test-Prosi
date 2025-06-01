<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::loginView');
$routes->post('/auth/processLogin', 'AuthController::processLogin');
$routes->get('/register', 'AuthController::registerView');
$routes->get('/dashboard/pendaftaran', 'DashboardController::pendaftaran');
$routes->get('/dashboard/profil', 'DashboardController::profil');
$routes->get('/dashboard/ubah-foto', 'DashboardController::ubahFoto');
$routes->get('/dashboard/jadwal-kegiatan', 'DashboardController::jadwalKegiatan');
$routes->get('/dashboard/pengaturan', 'DashboardController::pengaturan');