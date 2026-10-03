<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * format_helper.php — Date, duration, and bytes formatting
 * Fully compatible with PHP 7.3.33
 */

if (!function_exists('format_indo_date')) {
    function format_indo_date($datetime, $include_time = false) {
        if (empty($datetime)) return '-';
        $timestamp = is_numeric($datetime) ? (int)$datetime : strtotime($datetime);
        if (!$timestamp) return '-';

        $months = array(
            1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        );

        $day = date('j', $timestamp);
        $month = (int)date('n', $timestamp);
        $year = date('Y', $timestamp);

        $formatted = $day . ' ' . $months[$month] . ' ' . $year;

        if ($include_time) {
            $formatted .= ', ' . date('H:i', $timestamp) . ' WIB';
        }

        return $formatted;
    }
}

if (!function_exists('format_duration')) {
    function format_duration($minutes) {
        $mins = (int)$minutes;
        if ($mins < 60) {
            return $mins . ' Menit';
        }
        $hours = floor($mins / 60);
        $remaining_mins = $mins % 60;
        if ($remaining_mins == 0) {
            return $hours . ' Jam';
        }
        return $hours . ' Jam ' . $remaining_mins . ' Menit';
    }
}

if (!function_exists('format_bytes')) {
    function format_bytes($bytes, $precision = 1) {
        $units = array('B', 'KB', 'MB', 'GB', 'TB');
        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);
        $bytes /= pow(1024, $pow);
        return round($bytes, $precision) . ' ' . $units[$pow];
    }
}
