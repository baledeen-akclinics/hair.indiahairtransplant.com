<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('procedure-categories', 'ContactController::procedureCategories');
$routes->post('contact-submit', 'ContactController::submit');
$routes->post('hair-contact-submit', 'HairTransplantCostController::submit');