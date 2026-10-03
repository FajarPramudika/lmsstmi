<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING — Digital Learn Platform
| -------------------------------------------------------------------------
| Maps 14 canonical screens from design.pen into clean RESTful URLs
| Compatible with PHP 7.3.33 & CodeIgniter 3.1.13
*/

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Public & Authentication Routes (Screens 1, 2, 3)
$route['login']              = 'auth/login';
$route['register']           = 'auth/register';
$route['logout']             = 'auth/logout';

// Learner Dashboard & Enrollment (Screens 4, 5)
$route['dashboard']          = 'dashboard/index';
$route['my-courses']         = 'my_courses/index';

// Catalog & Course Details (Screens 6, 7)
$route['courses']            = 'catalog/index';
$route['courses/(:any)']     = 'catalog/detail/$1';

// Dedicated Learning Theater Routes (Screens 8, 9, 10, 11)
$route['learn/(:any)/video']          = 'learn/video/$1';
$route['learn/(:any)/video/(:num)']   = 'learn/video/$1/$2';
$route['learn/(:any)/m/(:num)']       = 'learn/video/$1/$2';
$route['learn/(:any)/quiz']           = 'learn/quiz/$1';
$route['learn/(:any)/quiz/(:num)']    = 'learn/quiz/$1/$2';
$route['learn/(:any)/pdf']            = 'learn/pdf/$1';
$route['learn/(:any)/pdf/(:num)']     = 'learn/pdf/$1/$2';
$route['learn/(:any)/article']        = 'learn/article/$1';
$route['learn/(:any)/article/(:num)'] = 'learn/article/$1/$2';
$route['learn/(:any)']                 = 'learn/index/$1';

// Final Exam Assessment (Screen 12)
$route['exam/attempt/(:num)']         = 'exams/attempt/$1';
$route['exam/(:any)']                 = 'exams/attempt';

// Digital Certificates & Public Verification (Screens 13, 14)
$route['certificates']       = 'certificates/index';
$route['verify']             = 'verify/index';
$route['verify/(:any)']      = 'verify/show/$1';

// Component Styleguide & Design System Specification
$route['_styleguide']        = 'styleguide/index';
