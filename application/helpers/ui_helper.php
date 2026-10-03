<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * ui_helper.php — UI Component Helpers
 * Fully compatible with PHP 7.3.33
 */

if (!function_exists('e')) {
    function e($str) {
        return html_escape($str);
    }
}

if (!function_exists('ui_badge')) {
    function ui_badge($label, $variant = 'primary', $icon_name = null) {
        $icon_html = '';
        if ($icon_name) {
            $icon_html = icon($icon_name, 'icon-xs') . ' ';
        }
        return '<span class="badge badge-' . html_escape($variant) . '">' . $icon_html . html_escape($label) . '</span>';
    }
}

if (!function_exists('ui_progress')) {
    function ui_progress($percent, $height = 8, $show_label = false) {
        $pct = max(0, min(100, (int)$percent));
        $is_done = ($pct >= 100);
        $fill_class = $is_done ? 'progress-fill is-complete' : 'progress-fill';
        
        $html = '<div class="progress-wrap">';
        if ($show_label) {
            $html .= '<div style="display:flex; justify-content:space-between; font-size:12px; font-weight:600; color:var(--color-text-muted);">';
            $html .= '<span>Progres Belajar</span>';
            $html .= '<span style="color:' . ($is_done ? 'var(--emerald)' : 'var(--color-primary)') . ';">' . $pct . '%</span>';
            $html .= '</div>';
        }
        $html .= '<div class="progress-track" style="height:' . (int)$height . 'px;">';
        $html .= '<div class="' . $fill_class . '" style="width:' . $pct . '%;"></div>';
        $html .= '</div>';
        $html .= '</div>';
        return $html;
    }
}

if (!function_exists('ui_avatar')) {
    function ui_avatar($name, $size = 36, $image_url = null) {
        if (!empty($image_url)) {
            return '<img src="' . html_escape($image_url) . '" alt="' . html_escape($name) . '" class="user-avatar-circle" style="width:' . (int)$size . 'px; height:' . (int)$size . 'px; object-fit:cover;">';
        }

        // Generate initials
        $words = explode(' ', trim($name));
        $initials = '';
        if (isset($words[0])) {
            $initials .= strtoupper(substr($words[0], 0, 1));
        }
        if (isset($words[1])) {
            $initials .= strtoupper(substr($words[1], 0, 1));
        }
        if (empty($initials)) {
            $initials = 'DL';
        }

        return '<div class="user-avatar-circle" style="width:' . (int)$size . 'px; height:' . (int)$size . 'px; font-size:' . round($size * 0.38) . 'px;">' . html_escape($initials) . '</div>';
    }
}

if (!function_exists('ui_button')) {
    function ui_button($text, $variant = 'primary', $icon_name = null, $href = null, $attrs = '') {
        $icon_html = '';
        if ($icon_name) {
            $icon_html = icon($icon_name) . ' ';
        }

        $tag = !empty($href) ? 'a' : 'button';
        $href_attr = !empty($href) ? ' href="' . html_escape($href) . '"' : ' type="button"';

        return '<' . $tag . $href_attr . ' class="btn btn-' . html_escape($variant) . '" ' . $attrs . '>' . $icon_html . html_escape($text) . '</' . $tag . '>';
    }
}

if (!function_exists('ui_alert')) {
    function ui_alert($message, $type = 'info', $icon_name = null) {
        if (!$icon_name) {
            switch ($type) {
                case 'success':
                case 'emerald':
                    $icon_name = 'check-circle';
                    break;
                case 'danger':
                    $icon_name = 'warning';
                    break;
                case 'warning':
                    $icon_name = 'info';
                    break;
                default:
                    $icon_name = 'info';
            }
        }
        return '<div class="alert alert-' . html_escape($type) . '">' . icon($icon_name, 'alert-icon') . '<div>' . $message . '</div></div>';
    }
}
