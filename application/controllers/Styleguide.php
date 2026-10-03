<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Styleguide Controller — Design System Component Gallery
 * Compatible with PHP 7.3.33
 */
class Styleguide extends Public_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array(
            'page_title'        => 'Component Styleguide & Design System',
            'active_public_tab' => 'styleguide'
        );

        $this->layout->render('styleguide/index', $data, 'public');
    }
}
