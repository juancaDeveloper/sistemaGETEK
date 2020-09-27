<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['(:any)'] = 'sacppv/$1';
$route['default_controller'] = 'sacppv/ingresar';
$route['translate_uri_dashes'] = FALSE;
$route['404_override'] = 'sacppv/error404';