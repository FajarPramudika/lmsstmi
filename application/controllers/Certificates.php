<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Certificates Controller — Certificates Collection (Screen 14: Rmfvj)
 * Compatible with PHP 7.3.33
 */
class Certificates extends User_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array(
            'page_title'   => 'Koleksi Sertifikat Digital',
            'active_menu'  => 'certificates',
            'current_user' => $this->current_user
        );

        $this->layout->render('certificates/index', $data, 'app');
    }
}
