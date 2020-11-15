<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['(:any)'] = 'welcome/$1';
$route['default_controller'] = 'Auth';
$route['translate_uri_dashes'] = FALSE;
$route['404_override'] = 'sacppv/error404';




