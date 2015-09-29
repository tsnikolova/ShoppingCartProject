<?php
$cnf['displayException'] = false;
$cnf['errorView'] = 'errors.error';
$cnf['default_controller'] =  'Index';
$cnf['default_method'] =  'index';
$cnf['namespaces']['Controllers'] = 'D:\Program Files\xampp\htdocx\ShoppingCartProject\ShoppingCart\Controllers';
$cnf['namespaces']['Models'] = 'D:\Program Files\xampp\htdocx\ShoppingCartProject\ShoppingCart\Models';
$cnf['namespaces']['Constants'] = 'D:\Program Files\xampp\htdocx\ShoppingCartProject\ShoppingCart\Constants';
$cnf['namespaces']['Views'] = 'D:\Program Files\xampp\htdocx\ShoppingCartProject\ShoppingCart\Views';
$cnf['viewsDirectory'] = 'D:\Program Files\xampp\htdocx\ShoppingCartProject\ShoppingCart\Views';
$cnf['session']['autostart'] = true;
$cnf['session']['type'] = 'native'; //native, database
$cnf['session']['name'] = '_sess';
$cnf['session']['lifetime'] = 3600;
$cnf['session']['path'] = '/';
$cnf['session']['domain'] = '';
$cnf['session']['secure'] = false;
$cnf['session']['dbConnection'] = 'session';
$cnf['session']['dbTable'] = 'sessions';
$cnf['pageSize'] = 5;
return $cnf;