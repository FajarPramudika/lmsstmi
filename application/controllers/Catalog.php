<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Catalog Controller — Course Catalog (Screen 6: x1TeKK) & Course Detail (Screen 7: w8nyqP)
 * Compatible with PHP 7.3.33
 */
class Catalog extends User_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array(
            'page_title'   => 'Katalog Course',
            'active_menu'  => 'courses',
            'current_user' => $this->current_user
        );

        $this->layout->render('catalog/index', $data, 'app');
    }

    public function detail($slug = 'dp-101') {
        $data = array(
            'page_title'   => 'Digital Product Fundamentals (DP-101)',
            'active_menu'  => 'courses',
            'current_user' => $this->current_user,
            'slug'         => $slug
        );

        $this->layout->render('catalog/detail', $data, 'app');
    }
}
