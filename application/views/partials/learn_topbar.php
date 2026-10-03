<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$course_title = isset($course_title) ? $course_title : 'Digital Product Fundamentals';
$course_code = isset($course_code) ? $course_code : 'DP-101';
$module_label = isset($module_label) ? $module_label : 'Modul 4: User Journey Mapping';
$user_name = isset($current_user['name']) ? $current_user['name'] : 'Muhammad Raihan';
$back_url = isset($back_url) ? $back_url : base_url('courses/digital-product-fundamentals');
?>
<!-- Learn Topbar (60px) matching design.pen DSG:f5Mpy -->
<header class="learn-topbar">
    <div class="learn-topbar-left">
        <a href="<?= e($back_url); ?>" class="btn btn-secondary btn-sm" style="display:inline-flex; align-items:center; gap:6px;">
            <?= icon('arrow-left', 'icon-xs'); ?>
            <span>Kembali ke Detail Course</span>
        </a>

        <div style="width:1px; height:24px; background-color:var(--color-border);"></div>

        <div class="learn-topbar-brand">
            <div class="brand-emblem" style="width:32px; height:32px; font-size:12px; border-radius:8px;">DL</div>
            <span style="font-size:13px; font-weight:700; color:var(--color-text-main);">
                <?= e($course_title); ?> <span style="color:var(--color-text-muted); font-weight:500;">(<?= e($course_code); ?>)</span>
            </span>
        </div>

        <span class="badge badge-info" style="font-size:11px;">
            <?= e($module_label); ?>
        </span>
    </div>

    <div>
        <?= ui_avatar($user_name, 32); ?>
    </div>
</header>
