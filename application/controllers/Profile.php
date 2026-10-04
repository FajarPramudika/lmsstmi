<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Profile Controller — User Profile & Account Security (Screen 15)
 * Reference: design-reference/profile-user.html & design.pen (Frame o8T5Yc)
 * Compatible with PHP 7.3.33
 */
class Profile extends User_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array(
            'page_title'         => 'Profil Pengguna & Keamanan Akun — DigiLearn STMI',
            'active_menu'        => 'profile',
            'search_placeholder' => 'Cari sertifikat digital, nama course, atau ID...',
            'current_user'       => $this->current_user,
            'academic_data'      => array(
                'nim'             => '202301048',
                'program_studi'   => 'Sistem Informasi Industri (SIIO)',
                'academic_status' => 'Aktif (Semester Ganjil)',
                'registered_date' => '15 September 2026',
                'phone'           => '+62 812-3456-7890',
                'specialization'  => 'Digital Product Management & UI/UX'
            ),
            'learning_stats'     => array(
                'active_courses' => 1,
                'course_name'    => 'Digital Product Fundamentals',
                'progress'       => 60,
                'certificates'   => 1,
                'exam_score'     => 85
            )
        );

        $this->layout->render('profile/index', $data, 'app');
    }

    /**
     * AJAX/POST submission endpoint for profile changes
     */
    public function update() {
        $name = $this->input->post('name');
        $email = $this->input->post('email');

        // Return JSON response
        $this->json(array(
            'status'  => 'success',
            'message' => 'Perubahan profil dan kredensial akun berhasil disimpan!'
        ));
    }
}
