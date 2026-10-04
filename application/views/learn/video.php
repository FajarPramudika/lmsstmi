<?php
defined('BASEPATH') or exit('No direct script access allowed');
$course_slug = isset($course_slug) ? $course_slug : 'digital-product-fundamentals';
?>
<!-- Video Material Learning Page matching design-reference/video-material.html -->

<!-- Top Navigation & Breadcrumb (seiras dengan halaman detail courses) -->
<?php $this->load->view('partials/breadcrumb_learn', array(
    'course_slug'  => $course_slug,
    'course_code'  => isset($course_code) ? $course_code : 'DP-101',
    'course_title' => isset($course_title) ? $course_title : 'Digital Product Fundamentals',
    'active_title' => '1. Konsep Dasar User Journey Mapping'
)); ?>

<div class="learn-container">
    <!-- Left: Reusable Curriculum Playlist Drawer -->
    <?php $this->load->view('partials/playlist_drawer', ['active_item' => 1, 'course_slug' => $course_slug]); ?>

    <!-- Right: Player and Material Column -->
    <div data-pencil-name="Player and Material Column" class="learn-workspace"
        style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; gap: 12px; height: fit-content; justify-content: flex-start; flex: 1; min-width: 0;">
    
    <!-- Video Player Container (976px x 480px) -->
    <div data-pencil-name="Video Player Container"
        style="align-items: flex-start; background-color: #0b0f19; border-radius: 12px; box-shadow: 0px 4px 12px rgba(0,0,0,0.18); box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 0px; min-height: 480px; height: auto; justify-content: space-between; outline-offset: -0.5px; outline: 1px solid #1e293b; overflow: hidden; width: 100%;">
        
        <!-- Player Top Overlay -->
        <div data-pencil-name="Player Top Overlay"
            style="align-items: center; background-image: linear-gradient(180deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 100%); box-sizing: border-box; display: flex; flex-direction: row; flex-wrap: wrap; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: space-between; padding: 12px 18px; width: 100%;">
            <div data-pencil-name="Player Title Row"
                style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-wrap: wrap; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start;">
                <div data-pencil-name="Video Tag Badge"
                    style="align-items: center; background-color: #2872fa; border-radius: 4px; box-sizing: border-box; display: flex; flex-direction: row; padding: 2px 6px;">
                    <div data-pencil-name="Video Tag Text"
                        style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 700; white-space: nowrap;'>
                        VIDEO MATERI
                    </div>
                </div>
                <div data-pencil-name="Overlay Video Title"
                    style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-weight: 600;'>
                    1. Konsep Dasar User Journey Mapping • Modul 4
                </div>
            </div>
        </div>

        <!-- Video Slide Visual Frame (350px) -->
        <div data-pencil-name="Video Slide Visual Frame"
            style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; min-height: 350px; justify-content: center; padding: 12px; width: 100%;">
            <div data-pencil-name="Customer Journey Slide Mockup"
                style="align-items: flex-start; background-color: #131b2e; border-radius: 10px; box-sizing: border-box; display: flex; flex-direction: column; gap: 16px; min-height: 280px; height: auto; justify-content: space-between; outline-offset: -0.5px; outline: 1px solid #1e293b; padding: 16px 14px; width: 100%; max-width: 980px;">
                
                <!-- Slide Title Row -->
                <div data-pencil-name="Slide Title Row"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-wrap: wrap; gap: 8px; justify-content: space-between; width: 100%;">
                    <div data-pencil-name="Slide Heading"
                        style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 15px; font-weight: 800;'>
                        Customer Journey Mapping: 4 Tahapan Utama Interaksi Pengguna
                    </div>
                    <div data-pencil-name="Slide Subtag"
                        style='box-sizing: border-box; color: #94a3b8; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-weight: 400;'>
                        Framework Praktis Product Management
                    </div>
                </div>

                <!-- Journey Stages Row (4 Boxes) -->
                <div data-pencil-name="Journey Stages Row"
                    style="align-items: stretch; box-sizing: border-box; display: flex; flex-direction: row; flex-wrap: wrap; gap: 10px; width: 100%;">
                    <!-- Stage 1 -->
                    <div data-pencil-name="Stage Box"
                        style="align-items: flex-start; background-color: #1e293b; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: column; flex: 1 1 140px; min-width: 130px; gap: 4px; outline-offset: -0.5px; outline: 1px solid #334155; padding: 10px;">
                        <div data-pencil-name="Stage Number"
                            style='box-sizing: border-box; color: #38bdf8; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 800; white-space: nowrap;'>
                            FASE 01
                        </div>
                        <div data-pencil-name="Stage Name"
                            style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 700; white-space: nowrap;'>
                            Awareness
                        </div>
                        <div data-pencil-name="Stage Desc"
                            style='box-sizing: border-box; color: #94a3b8; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 400; line-height: 14px;'>
                            Pengguna menyadari adanya masalah dan mencari alternatif solusi.
                        </div>
                    </div>
                    <!-- Stage 2 -->
                    <div data-pencil-name="Stage Box"
                        style="align-items: flex-start; background-color: #1e293b; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: column; flex: 1 1 140px; min-width: 130px; gap: 4px; outline-offset: -0.5px; outline: 1px solid #334155; padding: 10px;">
                        <div data-pencil-name="Stage Number"
                            style='box-sizing: border-box; color: #818cf8; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 800; white-space: nowrap;'>
                            FASE 02
                        </div>
                        <div data-pencil-name="Stage Name"
                            style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 700; white-space: nowrap;'>
                            Consideration
                        </div>
                        <div data-pencil-name="Stage Desc"
                            style='box-sizing: border-box; color: #94a3b8; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 400; line-height: 14px;'>
                            Mengevaluasi fitur, harga, dan kemudahan MVP produk digital.
                        </div>
                    </div>
                    <!-- Stage 3 -->
                    <div data-pencil-name="Stage Box"
                        style="align-items: flex-start; background-color: #1e293b; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: column; flex: 1 1 140px; min-width: 130px; gap: 4px; outline-offset: -0.5px; outline: 1px solid #334155; padding: 10px;">
                        <div data-pencil-name="Stage Number"
                            style='box-sizing: border-box; color: #34d399; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 800; white-space: nowrap;'>
                            FASE 03
                        </div>
                        <div data-pencil-name="Stage Name"
                            style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 700; white-space: nowrap;'>
                            Decision / Trial
                        </div>
                        <div data-pencil-name="Stage Desc"
                            style='box-sizing: border-box; color: #94a3b8; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 400; line-height: 14px;'>
                            Mendaftar akun, mencoba modul awal, dan mengalami aha-moment.
                        </div>
                    </div>
                    <!-- Stage 4 -->
                    <div data-pencil-name="Stage Box"
                        style="align-items: flex-start; background-color: #1e293b; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: column; flex: 1 1 140px; min-width: 130px; gap: 4px; outline-offset: -0.5px; outline: 1px solid #334155; padding: 10px;">
                        <div data-pencil-name="Stage Number"
                            style='box-sizing: border-box; color: #fbbf24; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 800; white-space: nowrap;'>
                            FASE 04
                        </div>
                        <div data-pencil-name="Stage Name"
                            style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 700; white-space: nowrap;'>
                            Retention
                        </div>
                        <div data-pencil-name="Stage Desc"
                            style='box-sizing: border-box; color: #94a3b8; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 400; line-height: 14px;'>
                            Menggunakan produk secara konsisten dan merekomendasikan.
                        </div>
                    </div>
                </div>

                <!-- Slide Footer Row -->
                <div data-pencil-name="Slide Footer Row"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; justify-content: space-between; width: 100%;">
                    <div data-pencil-name="Slide Footer Note"
                        style='box-sizing: border-box; color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-weight: 400;'>
                        Perhatikan titik temu (touchpoints) dan kurva emosi pelanggan pada setiap fase.
                    </div>
                    <div data-pencil-name="Presenter Badge"
                        style="align-items: center; background-color: #0f172a; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; gap: 6px; outline-offset: -0.5px; outline: 1px solid #334155; padding: 3px 8px;">
                        <svg viewBox="0 0 14 14" style="height: 12px; width: 12px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.6875 11.59375q-0.60156-1.03906-1.55859-1.80469-0.95703-0.76563-2.10547-1.14844 1.14844-0.71094 1.64062-1.9414 0.49219-1.23047 0.13672-2.51563-0.35547-1.28516-1.42187-2.07812-1.06641-0.79297-2.37891-0.79297-1.3125 0-2.37891 0.79297-1.06641 0.79297-1.42187 2.07812-0.35547 1.28516 0.13672 2.51563 0.49219 1.23047 1.64062 1.9414-1.14844 0.38281-2.10547 1.14844-0.95703 0.76563-1.55859 1.80469-0.16406 0.21875-0.02734 0.46484 0.13672 0.24609 0.41015 0.21875 0.27344-0.02734 0.38281-0.24609 0.76563-1.3125 2.07813-2.07813 1.3125-0.76563 2.84375-0.76562 1.53125 0 2.84375 0.76562 1.3125 0.76563 2.07812 2.07813 0.10938 0.21875 0.38282 0.24609 0.27344 0.02734 0.41015-0.21875 0.13672-0.24609-0.02734-0.46484z" fill="#2872fa"></path>
                        </svg>
                        <div data-pencil-name="Presenter Text"
                            style='box-sizing: border-box; color: #e2e8f0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-weight: 600; white-space: nowrap;'>
                            Andi Setiawan • Senior Product Manager
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Video Controls Bar (52px) -->
        <div data-pencil-name="Video Controls Bar"
            style="align-items: flex-start; background-image: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.95) 100%); box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 6px; height: 52px; justify-content: flex-start; padding: 0px 16px 8px 16px; width: 100%;">
            <!-- Scrubber Track -->
            <div data-pencil-name="Scrubber Track Frame"
                style="align-items: flex-start; background-color: rgba(255,255,255,0.2); border-radius: 999px; box-sizing: border-box; display: flex; flex-direction: row; height: 6px; justify-content: flex-start; width: 100%;">
                <div data-pencil-name="Scrubber Watched Fill"
                    style="align-items: center; background-color: #2872fa; border-radius: 999px; box-sizing: border-box; display: flex; flex-direction: row; height: 6px; justify-content: flex-end; width: 98%;">
                    <div data-pencil-name="Scrubber Thumb"
                        style="background-color: #ffffff; border-radius: 3px; height: 6px; width: 6px;">
                    </div>
                </div>
            </div>
            
            <!-- Controls Action Row -->
            <div data-pencil-name="Controls Action Row"
                style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; justify-content: space-between; width: 100%;">
                <div data-pencil-name="Controls Left"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; gap: 12px; height: fit-content; justify-content: flex-start;">
                    <!-- Pause Icon -->
                    <svg viewBox="0 0 14 14" style="height: 18px; width: 18px; cursor:pointer;" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.9375 1.75l-1.96875 0q-0.38281 0-0.62891 0.24609-0.24609 0.24609-0.24609 0.62891l0 8.75q0 0.38281 0.24609 0.62891 0.24609 0.24609 0.62891 0.24609l1.96875 0q0.38281 0 0.62891-0.24609 0.24609-0.24609 0.24609-0.62891l0-8.75q0-0.38281-0.24609-0.62891-0.24609-0.24609-0.62891-0.24609z m0 9.625l-1.96875 0 0-8.75 1.96875 0 0 8.75z m-5.90625-9.625l-1.96875 0q-0.38281 0-0.62891 0.24609-0.24609 0.24609-0.24609 0.62891l0 8.75q0 0.38281 0.24609 0.62891 0.24609 0.24609 0.62891 0.24609l1.96875 0q0.38281 0 0.62891-0.24609 0.24609-0.24609 0.24609-0.62891l0-8.75q0-0.38281-0.24609-0.62891-0.24609-0.24609-0.62891-0.24609z" fill="#ffffff"></path>
                    </svg>
                    <!-- Speaker Icon -->
                    <svg viewBox="0 0 14 14" style="height: 16px; width: 16px; cursor:pointer;" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.5625 7q0 0.875-0.32813 1.66797-0.32813 0.79297-0.92968 1.44922-0.16406 0.10937-0.32813 0.10937-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.10938-0.32812 0.49219-0.49219 0.76562-1.1211 0.27344-0.62891 0.27344-1.33984 0-0.71094-0.27344-1.33984-0.27344-0.62891-0.76562-1.1211-0.10938-0.16406-0.10938-0.32812 0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672 0.16406 0 0.32813 0.10937 0.60156 0.65625 0.92968 1.44922 0.32813 0.79297 0.32813 1.66797z m-4.8125-5.25l0 10.5q0 0.27344-0.27344 0.38281-0.05469 0.05469-0.1914 0.05469-0.13672 0-0.2461-0.10937l-3.82812-2.95313-2.46094 0q-0.38281 0-0.62891-0.24609-0.24609-0.24609-0.24609-0.62891l0-3.5q0-0.38281 0.24609-0.62891 0.24609-0.24609 0.62891-0.24609l2.46094 0 3.82812-2.95313q0.21875-0.16406 0.46485-0.05468 0.24609 0.10938 0.24609 0.38281z" fill="#ffffff"></path>
                    </svg>
                    <div data-pencil-name="Time Text"
                        style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 600; white-space: nowrap;'>
                        18:15 / 18:45
                    </div>
                </div>
                
                <div data-pencil-name="Controls Right"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; gap: 14px; height: fit-content; justify-content: flex-start;">
                    <div data-pencil-name="Speed Text"
                        style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 600; white-space: nowrap;'>
                        1.0x
                    </div>
                    <div data-pencil-name="Quality Text"
                        style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 600; white-space: nowrap;'>
                        1080p HD
                    </div>
                    <!-- Fullscreen Icon -->
                    <svg viewBox="0 0 14 14" style="height: 16px; width: 16px; cursor:pointer;" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.8125 2.625l0 2.1875q0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078l0-1.75-1.75 0q-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672l2.1875 0q0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078z m-7 8.3125l-1.75 0 0-1.75q0-0.16406-0.13672-0.30078-0.13672-0.13672-0.30078-0.13672-0.16406 0-0.30078 0.13672-0.13672 0.13672-0.13672 0.30078l0 2.1875q0 0.16406 0.13672 0.30078 0.13672 0.13672 0.30078 0.13672l2.1875 0q0.16406 0 0.30078-0.13672 0.13672-0.13672 0.13672-0.30078 0-0.16406-0.13672-0.30078-0.13672-0.13672-0.30078-0.13672z" fill="#ffffff"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Title Action Row -->
    <div data-pencil-name="Video Title Action Row"
        style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; justify-content: space-between; width: 100%;">
        <div data-pencil-name="Video Title Text Group"
            style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; gap: 2px;">
            <div data-pencil-name="Main Video Title"
                style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 20px; font-weight: 800; white-space: nowrap;'>
                1. Konsep Dasar User Journey Mapping
            </div>
        </div>
        
        <div data-pencil-name="Action Btns Group"
            style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; gap: 10px;">
            <!-- Prev Material Btn (Disabled) -->
            <div data-pencil-name="Prev Material Btn Disabled"
                style="align-items: center; background-color: #f8fafc; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; gap: 6px; opacity: 0.6; outline-offset: -0.5px; outline: 1px solid #eaecf0; padding: 8px 14px; cursor: not-allowed;">
                <svg viewBox="0 0 14 14" style="height: 14px; width: 14px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.25 7q0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672l-8.58594 0 3.22657 3.17188q0.10938 0.16406 0.10937 0.32812 0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672-0.16406 0-0.32812-0.10937l-3.9375-3.9375q-0.10938-0.16406-0.10938-0.32813 0-0.16406 0.10938-0.32812l3.9375-3.9375q0.16406-0.10938 0.32812-0.08204 0.16406 0.02734 0.27344 0.13672 0.10938 0.10938 0.13672 0.27344 0.02734 0.16406-0.08203 0.32813l-3.22657 3.17187 8.58594 0q0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078z" fill="#94a3b8"></path>
                </svg>
                <div data-pencil-name="Prev Text"
                    style='box-sizing: border-box; color: #94a3b8; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 600; white-space: nowrap;'>
                    Materi Sebelumnya
                </div>
            </div>

            <!-- Next Material Btn (Active) -->
            <a href="<?php echo base_url('learn/' . $course_slug . '/quiz/1'); ?>" data-pencil-name="Next Material Btn Active"
                style="text-decoration:none; align-items: center; background-color: #2872fa; border-radius: 8px; box-shadow: 0px 2px 4px rgba(40,114,250,0.3); box-sizing: border-box; display: flex; flex-direction: row; gap: 6px; outline-offset: -0.5px; outline: 1px solid #2872fa; padding: 8px 16px;">
                <div data-pencil-name="Next Text"
                    style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 700; white-space: nowrap;'>
                    Lanjut: Pop-up Quiz 1
                </div>
                <svg viewBox="0 0 14 14" style="height: 14px; width: 14px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.14063 7.32813l-3.9375 3.9375q-0.16406 0.10938-0.32813 0.10937-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.10938-0.32812l3.22656-3.17188-8.58594 0q-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672l8.58594 0-3.22657-3.17188q-0.10938-0.16406-0.08203-0.32812 0.02734-0.16406 0.13672-0.27344 0.10938-0.10938 0.27344-0.13672 0.16406-0.02734 0.32812 0.08203l3.9375 3.9375q0.10938 0.16406 0.10938 0.32813 0 0.16406-0.10938 0.32812z" fill="#ffffff"></path>
                </svg>
            </a>
        </div>
    </div>

    <!-- Material Tabs Bar -->
    <div data-pencil-name="Material Tabs Bar"
        style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; gap: 24px; height: fit-content; justify-content: flex-start; width: 100%;">
        <div data-pencil-name="Tab Item"
            style="align-items: center; border-color: #2872fa; border-style: solid; border-width: 0px 0px 2px 0px; box-sizing: content-box; display: flex; flex-direction: row; height: 31px; justify-content: flex-start; margin: 0px 0px -1px 0px; padding: 8px 2px; width: 112px;">
            <div data-pencil-name="Tab Title"
                style='box-sizing: border-box; color: #2872fa; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-weight: 700; white-space: nowrap;'>
                Ringkasan Materi
            </div>
        </div>
    </div>

    <!-- Tab Content Panel -->
    <div data-pencil-name="Tab Content Panel"
        style="align-items: flex-start; background-color: #ffffff; border-radius: 10px; box-sizing: border-box; display: flex; flex-direction: column; gap: 8px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 12px 16px; width: 100%;">
        <div data-pencil-name="Overview Title"
            style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-weight: 700; white-space: nowrap;'>
            Tentang Materi Ini:
        </div>
        <div data-pencil-name="Overview Paragraph"
            style='box-sizing: border-box; color: #475467; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 400; line-height: 18px; width: 100%;'>
            Pada materi video ini, Anda mempelajari kerangka kerja Customer Journey Mapping yang
            menjadi landasan strategis sebelum membuat prototipe MVP. Pemetaan ini membantu tim
            produk mendokumentasikan interaksi pengguna, menemukan titik frustrasi (pain points),
            dan merumuskan solusi fitur yang tepat sasaran.
        </div>
    </div>

    </div>
</div>
