<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

/**
 * Routes for resource detail-pinjam
 */
$router->get('detail-pinjam', 'DetailPinjamsController@all');
$router->get('detail-pinjam/{id}', 'DetailPinjamsController@get');
$router->post('detail-pinjam', 'DetailPinjamsController@add');
$router->put('detail-pinjam/{id}', 'DetailPinjamsController@put');
$router->delete('detail-pinjam/{id}', 'DetailPinjamsController@remove');

/**
 * Routes for resource inventaris
 */
$router->get('inventaris', 'InventarisController@all');
$router->get('inventaris/{id}', 'InventarisController@get');
$router->post('inventaris', 'InventarisController@add');
$router->put('inventaris/{id}', 'InventarisController@put');
$router->delete('inventaris/{id}', 'InventarisController@remove');

/**
 * Routes for resource jenis
 */
$router->get('jenis', 'JenisController@all');
$router->get('jenis/{id}', 'JenisController@get');
$router->post('jenis', 'JenisController@add');
$router->put('jenis/{id}', 'JenisController@put');
$router->delete('jenis/{id}', 'JenisController@remove');

/**
 * Routes for resource level
 */
$router->get('level', 'LevelsController@all');
$router->get('level/{id}', 'LevelsController@get');
$router->post('level', 'LevelsController@add');
$router->put('level/{id}', 'LevelsController@put');
$router->delete('level/{id}', 'LevelsController@remove');

/**
 * Routes for resource pegawai
 */
$router->get('pegawai', 'PegawaisController@all');
$router->get('pegawai/{id}', 'PegawaisController@get');
$router->post('pegawai', 'PegawaisController@add');
$router->put('pegawai/{id}', 'PegawaisController@put');
$router->delete('pegawai/{id}', 'PegawaisController@remove');

/**
 * Routes for resource peminjaman
 */
$router->get('peminjaman', 'PeminjamenController@all');
$router->get('peminjaman/{id}', 'PeminjamenController@get');
$router->post('peminjaman', 'PeminjamenController@add');
$router->put('peminjaman/{id}', 'PeminjamenController@put');
$router->delete('peminjaman/{id}', 'PeminjamenController@remove');

/**
 * Routes for resource petugas
 */
$router->get('petugas', 'PetugasController@all');
$router->get('petugas/{id}', 'PetugasController@get');
$router->post('petugas', 'PetugasController@add');
$router->put('petugas/{id}', 'PetugasController@put');
$router->delete('petugas/{id}', 'PetugasController@remove');

/**
 * Routes for resource ruang
 */
$router->get('ruang', 'RuangsController@all');
$router->get('ruang/{id}', 'RuangsController@get');
$router->post('ruang', 'RuangsController@add');
$router->put('ruang/{id}', 'RuangsController@put');
$router->delete('ruang/{id}', 'RuangsController@remove');
