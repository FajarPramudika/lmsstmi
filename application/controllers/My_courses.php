<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * My_courses Controller — Course Saya Page (Screen 5: j8saW4)
 * Compatible with PHP 7.3.33
 */
class My_courses extends User_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array(
            'page_title'   => 'Course Saya',
            'active_menu'  => 'my_courses',
            'current_user' => $this->current_user
        );

        $this->layout->render('my_courses/index', $data, 'app');
    }
}
