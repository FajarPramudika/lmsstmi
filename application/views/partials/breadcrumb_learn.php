<?php
defined('BASEPATH') or exit('No direct script access allowed');

$course_slug  = isset($course_slug) ? $course_slug : 'digital-product-fundamentals';
$course_code  = isset($course_code) ? $course_code : 'DP-101';
$course_title = isset($course_title) ? $course_title : 'Digital Product Fundamentals';
$back_url     = isset($back_url) ? $back_url : base_url('courses/' . $course_slug);
$back_text    = isset($back_text) ? $back_text : 'Kembali ke Detail Course';
$active_title = isset($active_title) ? $active_title : (isset($module_title) ? $module_title : 'Materi Belajar');
?>
<!-- Breadcrumb and Status Row (seiras dengan halaman detail courses) -->
<div data-pencil-name="Breadcrumb and Status Row" class="learn-header-nav"
    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; width: 100%;">
    <div data-pencil-name="Breadcrumb Nav Group" class="breadcrumb-nav-group"
        style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-wrap: wrap; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; width: fit-content;">
        <a href="<?= $back_url; ?>" class="breadcrumb-back-link" style="display: inline-flex; align-items: center; gap: 8px; text-decoration: none; color: #2872fa;">
            <svg data-pencil-name="Back Arrow Icon" data-icon-name="arrow-left" data-icon-set="phosphor"
                viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"
                style="box-sizing: border-box; flex-shrink: 0; height: 15px; width: 15px;">
                <path
                    d="M12.25 7q0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672l-8.58594 0 3.22657 3.17188q0.10938 0.16406 0.10937 0.32812 0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672-0.16406 0-0.32812-0.10937l-3.9375-3.9375q-0.10938-0.16406-0.10938-0.32813 0-0.16406 0.10938-0.32812l3.9375-3.9375q0.16406-0.10938 0.32812-0.08204 0.16406 0.02734 0.27344 0.13672 0.10938 0.10938 0.13672 0.27344 0.02734 0.16406-0.08203 0.32813l-3.22657 3.17187 8.58594 0q0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078z"
                    fill="#2872fa"></path>
            </svg>
            <div data-pencil-name="Back Link Text"
                style='box-sizing: border-box; color: #2872fa; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                <?= e($back_text); ?>
            </div>
        </a>
        <div data-pencil-name="BC Separator 1" class="breadcrumb-sep"
            style='box-sizing: border-box; color: #94a3b8; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
            •
        </div>
        <a href="<?= base_url('courses'); ?>" data-pencil-name="BC Catalog Text" class="breadcrumb-link"
            style='box-sizing: border-box; color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 500; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap; text-decoration: none;'>
            Katalog
        </a>
        <div data-pencil-name="BC Separator 2" class="breadcrumb-sep"
            style='box-sizing: border-box; color: #94a3b8; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
            •
        </div>
        <a href="<?= base_url('courses/' . $course_slug); ?>" data-pencil-name="BC Course Text" class="breadcrumb-link"
            style='box-sizing: border-box; color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 500; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap; text-decoration: none;'>
            <?= e($course_code); ?>: <?= e($course_title); ?>
        </a>
        <div data-pencil-name="BC Separator 3" class="breadcrumb-sep"
            style='box-sizing: border-box; color: #94a3b8; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
            •
        </div>
        <div data-pencil-name="BC Active Code" class="breadcrumb-active"
            style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
            <?= e($active_title); ?>
        </div>
    </div>
</div>
