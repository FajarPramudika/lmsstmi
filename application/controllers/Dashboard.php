<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Dashboard Controller — User Dashboard (Screen 4: GNm6d)
 * Compatible with PHP 7.3.33
 */
class Dashboard extends User_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array(
            'page_title'   => 'Dashboard Pembelajaran',
            'active_menu'  => 'dashboard',
            'current_user' => $this->current_user
        );

        $this->layout->render('dashboard/index', $data, 'app');
    }
}
