<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home Controller — Public Landing Page (Screen 1: mWKjb)
 * Fully compatible with PHP 7.3.33
 */
class Home extends Public_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array(
            'page_title'        => 'Kuasai Keahlian Industri Vokasi Digital',
            'active_public_tab' => 'beranda'
        );

        $this->layout->render('home/landing', $data, 'public');
    }
}
