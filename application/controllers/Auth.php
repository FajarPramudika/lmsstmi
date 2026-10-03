<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Auth Controller — Login (Screen 2: tsv7W) and Register (Screen 3: ouCKj)
 * Compatible with PHP 7.3.33
 */
class Auth extends Guest_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function login() {
        $data = array(
            'page_title' => 'Masuk ke Akun Anda'
        );

        $this->layout->render('auth/login', $data, 'auth');
    }

    public function register() {
        $data = array(
            'page_title' => 'Daftar Akun Baru'
        );

        $this->layout->render('auth/register', $data, 'auth');
    }

    public function logout() {
        redirect('login');
    }
}
