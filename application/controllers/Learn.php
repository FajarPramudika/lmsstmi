<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Learn Controller — Dedicated Learning Theater (Screens 8, 9, 10, 11)
 * Screen 8: Video Material (am1Jw)
 * Screen 9: Quiz Checkpoint 1 (qZ1cP)
 * Screen 10: PDF Material (Z8TwQg)
 * Screen 11: Article Material (k5KcIm)
 * Compatible with PHP 7.3.33
 */
class Learn extends User_Controller {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Default Classroom Landing (redirects/delegates to active video material)
     */
    public function index($course_slug = 'digital-product-fundamentals') {
        $this->video($course_slug, 1);
    }

    /**
     * Screen 8: Video Material Page
     */
    public function video($course_slug = 'digital-product-fundamentals', $material_id = 1) {
        $data = array(
            'page_title'          => '1. Konsep Dasar User Journey Mapping — Digital Product Fundamentals',
            'course_title'        => 'Digital Product Fundamentals',
            'course_code'         => 'DP-101',
            'course_slug'         => $course_slug,
            'module_title'        => 'Modul 4: User Journey Mapping',
            'active_material_id'  => (int)$material_id,
            'current_user'        => $this->current_user
        );

        $this->layout->render('learn/video', $data, 'learn');
    }

    /**
     * Screen 9: Quiz Checkpoint 1 Page
     */
    public function quiz($course_slug = 'dp-101', $quiz_id = 1) {
        $data = array(
            'page_title'          => '2. Quiz Checkpoint 1: Pemahaman User Journey',
            'course_title'        => 'Digital Product Fundamentals',
            'course_code'         => 'DP-101',
            'course_slug'         => $course_slug,
            'module_title'        => 'Modul 4: User Journey Mapping',
            'active_material_id'  => 2,
            'current_user'        => $this->current_user
        );

        $this->layout->render('learn/quiz', $data, 'learn');
    }

    /**
     * Screen 10: PDF Material Page
     */
    public function pdf($course_slug = 'dp-101', $material_id = 3) {
        $data = array(
            'page_title'          => '3. Template & Framework Customer Journey Map (PDF)',
            'course_title'        => 'Digital Product Fundamentals',
            'course_code'         => 'DP-101',
            'course_slug'         => $course_slug,
            'module_title'        => 'Modul 4: User Journey Mapping',
            'active_material_id'  => 3,
            'current_user'        => $this->current_user
        );

        $this->layout->render('learn/pdf', $data, 'learn');
    }

    /**
     * Screen 11: Article Material Page
     */
    public function article($course_slug = 'dp-101', $material_id = 6) {
        $data = array(
            'page_title'          => '6. Handover Desain ke Engineering — Digital Product Fundamentals',
            'course_title'        => 'Digital Product Fundamentals',
            'course_code'         => 'DP-101',
            'course_slug'         => $course_slug,
            'module_title'        => 'Modul 4: User Journey Mapping',
            'active_material_id'  => 6,
            'current_user'        => $this->current_user
        );

        $this->layout->render('learn/article', $data, 'learn');
    }
}
