<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Exams Controller — Final Exam / Assessment Page (Screen 12: o4asa)
 * Compatible with PHP 7.3.33
 */
class Exams extends User_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function attempt($exam_id = 1) {
        $data = array(
            'page_title'   => 'Final Assessment: Digital Product Management (DP-101)',
            'course_title' => 'Digital Product Fundamentals',
            'course_code'  => 'DP-101',
            'course_slug'  => 'digital-product-fundamentals',
            'exam_id'      => (int)$exam_id,
            'active_menu'  => 'courses',
            'current_user' => $this->current_user
        );

        $this->layout->render('exam/attempt', $data, 'app');
    }
}
