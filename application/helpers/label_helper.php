<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * label_helper.php — Enum mapping to Indonesian UI Labels
 * Fully compatible with PHP 7.3.33
 */

if (!function_exists('label_course_status')) {
    function label_course_status($status, $progress = 0) {
        switch ($status) {
            case 'completed':
                return array('text' => 'Selesai & Lulus', 'variant' => 'emerald', 'icon' => 'check-circle');
            case 'in_progress':
                return array('text' => 'Sedang Berjalan (' . (int)$progress . '%)', 'variant' => 'info', 'icon' => 'sparkle');
            case 'available':
            default:
                return array('text' => 'Tersedia', 'variant' => 'neutral', 'icon' => null);
        }
    }
}

if (!function_exists('label_category_pill')) {
    function label_category_pill($category) {
        $cat = strtolower(trim($category));
        if (strpos($cat, 'product') !== false) {
            return array('class' => 'pill-product', 'label' => 'PRODUCT MANAGEMENT');
        } elseif (strpos($cat, 'data') !== false) {
            return array('class' => 'pill-data', 'label' => 'DATA SCIENCE');
        } elseif (strpos($cat, 'design') !== false || strpos($cat, 'ui/ux') !== false) {
            return array('class' => 'pill-design', 'label' => 'DESIGN');
        } elseif (strpos($cat, 'develop') !== false || strpos($cat, 'web') !== false || strpos($cat, 'backend') !== false) {
            return array('class' => 'pill-dev', 'label' => 'DEVELOPMENT');
        } elseif (strpos($cat, 'market') !== false || strpos($cat, 'business') !== false) {
            return array('class' => 'pill-business', 'label' => 'BUSINESS & MANAGEMENT');
        }
        return array('class' => 'badge-primary', 'label' => strtoupper($category));
    }
}

if (!function_exists('label_item_type')) {
    function label_item_type($type) {
        switch ($type) {
            case 'video':
                return array('label' => 'Video Materi', 'icon' => 'video');
            case 'pdf':
                return array('label' => 'Dokumen PDF', 'icon' => 'file-pdf');
            case 'text':
                return array('label' => 'Artikel Teks', 'icon' => 'article');
            case 'quiz':
                return array('label' => 'Checkpoint Kuis', 'icon' => 'question');
            default:
                return array('label' => 'Materi', 'icon' => 'book-open');
        }
    }
}
