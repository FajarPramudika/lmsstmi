<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Verify Controller — Public Certificate Verification Portal (Screen 13: D3PHbK)
 * Publicly accessible without login as required by BRD
 * Compatible with PHP 7.3.33
 */
class Verify extends Public_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($cert_id = 'DL-2026-000001') {
        $this->show($cert_id);
    }

    public function show($cert_id = 'DL-2026-000001') {
        $data = array(
            'page_title'        => 'Verifikasi Kredensial Resmi — ' . $cert_id,
            'active_public_tab' => 'verify',
            'cert' => array(
                'certificate_no'   => $cert_id,
                'recipient_name'   => 'Budi Santoso, S.T.',
                'course_title'     => 'Digital Product Fundamentals',
                'course_code'      => 'DP-101',
                'issue_date'       => '14 Oktober 2026, 14:35 WIB',
                'exam_score'       => 85,
                'attempt'          => 'Attempt 1 dari 3 (Tertinggi)',
                'status'           => 'Aktif & Sah ✓'
            )
        );

        $this->layout->render('certificates/verify', $data, 'public');
    }
}
