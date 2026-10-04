<?php
defined('BASEPATH') or exit('No direct script access allowed');
$course_title = isset($course_title) ? $course_title : 'Digital Product Fundamentals';
$course_code  = isset($course_code) ? $course_code : 'DP-101';
$course_slug  = isset($course_slug) ? $course_slug : 'digital-product-fundamentals';
$back_url     = isset($back_url) ? $back_url : base_url('courses/' . $course_slug);
?>
<!-- Player Top Bar matching design-reference/video-material.html line 37 -->
<header class="learn-topbar" style="align-items: center; background-color: #ffffff; border-color: #dfe3ea; border-style: solid; border-width: 0px 0px 1px 0px; box-sizing: border-box; display: flex; flex-direction: row; height: 60px; justify-content: space-between; padding: 0px 24px; width: 100%;">
    <div style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; gap: 14px; height: fit-content; justify-content: flex-start;">
        <a href="<?php echo e($back_url); ?>" style="text-decoration:none; align-items: center; background-color: #f8fafc; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; gap: 8px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 6px 12px; width: fit-content; transition: background 0.15s ease;">
            <svg viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" style="box-sizing: border-box; flex-shrink: 0; height: 14px; width: 14px">
                <path d="M12.25 7q0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672l-8.58594 0 3.22657 3.17188q0.10938 0.16406 0.10937 0.32812 0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672-0.16406 0-0.32812-0.10937l-3.9375-3.9375q-0.10938-0.16406-0.10938-0.32813 0-0.16406 0.10938-0.32812l3.9375-3.9375q0.16406-0.10938 0.32812-0.08204 0.16406 0.02734 0.27344 0.13672 0.10938 0.10938 0.13672 0.27344 0.02734 0.16406-0.08203 0.32813l-3.22657 3.17187 8.58594 0q0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078z" fill="#2872fa"></path>
            </svg>
            <span style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 600; text-align: left; white-space: nowrap;'>
                Kembali ke Detail Course
            </span>
        </a>
        <div style="background-color: #e2e8f0; height: 24px; width: 1px;"></div>
        <div style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; gap: 10px; height: fit-content; justify-content: flex-start;">
            <div style="align-items: center; background-color: #2872fa; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; height: 28px; justify-content: center; width: 28px">
                <span style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 800;'>
                    DL
                </span>
            </div>
            <div style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-weight: 700; white-space: nowrap;'>
                <?php echo e($course_title); ?> (<?php echo e($course_code); ?>)
            </div>
        </div>
    </div>
    <div style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; gap: 12px; height: 15px; justify-content: flex-end;">
    </div>
</header>
