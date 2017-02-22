<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';

$route['Registrasi_Anggota'] = 'registrasi_anggota';

$route['Gallery'] = 'gallery';

$route['Map'] = 'map';

$route['Video'] = 'video';

$route['infokegiatan'] = 'infokegiatan';

$route['facebook'] = 'facebook';

$route['Login'] = 'login';
$route['admin_kegiatan'] = 'admin_kegiatan';

$route['User'] = 'user';
$route['User/Profil'] = 'User/profil';
$route['User/EditProfil'] = 'User/editprofil';
/** AJAX  **/
$route['ajax/cekuser'] = 'ajax/cekusername';
$route['ajax/cekemail'] = 'ajax/cekemail';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
