<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 // JUEGOS
 $routes->get('/usuario/login','UserController::index');
 $routes->post('/usuario/login','UserController::index');

//JUEGOS
$routes->get('/', 'Home::index');
$routes->get('/Juegos', 'Juego::index');  
$routes->get('/Juegos/agregar', 'Juego::agregar');  
$routes->get('/Juegos/mostrar', 'Juego::mostrar');
$routes->get('/Juegos/buscar', 'Juego::buscar');
$routes->get('/Juegos/delete/(:num)', 'Juego::delete/$1');  
$routes->get('/Juegos/editar/(:num)', 'Juego::editar/$1');
$routes->get('/Juegos/mostrar2/(:num)', 'Juego::mostrar2/$1');


$routes->get('/Info/acerca', 'Acerca::acerca');
$routes->get('/Info/acerca1', 'Acerca::acerca1');

//Actualizar Games
$routes->post('/Juegos/insert', 'Juego::insert'); 
$routes->post('/Juegos/update', 'Juego::update');


//RESEÑAS
$routes->get('/reseñas/agregar', 'Resenas::agregar');
$routes->get('/reseñas/mostrar', 'Resenas::mostrar');
$routes->get('/reseñas/buscar', 'Resenas::buscar');
$routes->get('/reseñas/deleted/(:num)', 'Resenas::deleted/$1');  
$routes->get('/reseñas/editar/(:num)', 'Resenas::editar/$1');

//Actualizar Reseñas
$routes->post('/reseñas/insert', 'Resenas::insert'); 
$routes->post('/reseñas/update', 'Resenas::update');

//Actualizar
$routes->post('/reseñas/insert', 'Resenas::insert'); 
$routes->post('/reseñas/update', 'Resenas::update');


//Compras
$routes->get('/ventas/agregar/(:num)', 'Venta::agregar/$1');  


//Cliente
$routes->get('/Juegos/mostrar1', 'Juego::mostrar1');
$routes->get('/Juegos/buscar1', 'Juego::buscar1');
$routes->get('/reseñas/mostrar1', 'Resenas::mostrar1');
$routes->get('/reseñas/agregar1', 'Resenas::agregar1');
$routes->get('/reseñas/deleted1/(:num)', 'Resenas::deleted1/$1');  
$routes->get('/reseñas/editar1/(:num)', 'Resenas::editar1/$1');

//Actualizar
$routes->post('/reseñas/insert1', 'Resenas::insert1'); 
$routes->post('/reseñas/update1', 'Resenas::update1');