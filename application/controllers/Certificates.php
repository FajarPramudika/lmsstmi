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
            'page_title'         => 'Koleksi Sertifikat Digital',
            'active_menu'        => 'certificates',
            'search_placeholder' => 'Cari sertifikat digital, nama course, atau ID...',
            'current_user'       => $this->current_user,
            'certificates'       => array(
                array(
                    'id'            => 'DL-2026-000001',
                    'code'          => 'DP-101',
                    'title'         => 'Digital Product Fundamentals',
                    'category'      => 'Product Management',
                    'category_slug' => 'product-management',
                    'issue_date'    => '14 Oktober 2026',
                    'timestamp'     => 1791936000
                ),
                array(
                    'id'            => 'DL-2026-000042',
                    'code'          => 'UI-301',
                    'title'         => 'UI/UX Design Principles',
                    'category'      => 'Design & Creative',
                    'category_slug' => 'design-creative',
                    'issue_date'    => '28 September 2026',
                    'timestamp'     => 1790553600
                ),
                array(
                    'id'            => 'DL-2026-000088',
                    'code'          => 'DA-201',
                    'title'         => 'Data Analytics Essentials',
                    'category'      => 'Data Science',
                    'category_slug' => 'data-science',
                    'issue_date'    => '15 Agustus 2026',
                    'timestamp'     => 1786752000
                )
            )
        );

        $this->layout->render('certificates/index', $data, 'app');
    }
}
