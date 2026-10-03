<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- My Courses Page matching design.pen DSG:j8saW4 -->

<!-- 1. Header Row -->
<div style="display:flex; justify-content:space-between; align-items:flex-end; flex-wrap:wrap; gap:16px;">
    <div>
        <h1 class="heading-h1" style="color:var(--color-text-main); margin-bottom:4px;">Course Saya</h1>
        <p style="font-size:14px; color:var(--color-text-muted);">
            Pantau progres modul, lanjutkan materi berjalan, dan tinjau kembali sertifikasi yang telah diraih.
        </p>
    </div>

    <div style="display:flex; align-items:center; gap:10px;">
        <span class="badge badge-primary" style="font-size:12px; padding:6px 14px;">3 Course Terdaftar</span>
        <a href="<?= base_url('courses'); ?>" class="btn btn-secondary btn-sm">
            <?= icon('compass', 'icon-xs'); ?>
            <span>Jelajahi Katalog</span>
        </a>
    </div>
</div>

<!-- 2. Filter & Search Toolbar -->
<div class="card" style="padding:12px 18px;">
    <div class="filter-toolbar">
        <div class="filter-tabs">
            <button type="button" class="filter-tab active">Semua Course (3)</button>
            <button type="button" class="filter-tab">Sedang Berjalan (2)</button>
            <button type="button" class="filter-tab">Selesai &amp; Lulus (1)</button>
        </div>

        <div style="display:flex; align-items:center; gap:12px;">
            <div class="input-wrap" style="width:260px;">
                <span class="input-icon-left"><?= icon('magnifying-glass', 'icon-xs'); ?></span>
                <input type="text" class="form-control has-icon-left" placeholder="Cari di course saya..." style="height:38px; font-size:13px;">
            </div>

            <select class="form-control form-select" style="width:160px; height:38px; font-size:13px;">
                <option value="recent">Urutan: Terbaru</option>
                <option value="progress">Progres Tertinggi</option>
                <option value="alphabetical">Abjad A-Z</option>
            </select>
        </div>
    </div>
</div>

<!-- 3. Enrolled Courses 3-Column Grid -->
<div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(320px, 1fr)); gap:24px;">
    <?php 
    $courses = array(
        array(
            'code' => 'DP-101',
            'title' => 'Digital Product Fundamentals',
            'slug' => 'digital-product-fundamentals',
            'category' => 'PRODUCT MANAGEMENT',
            'instructor' => 'Andi Setiawan, S.Kom.',
            'modules_count' => 5,
            'duration_hours' => 15,
            'status' => 'in_progress',
            'progress_percent' => 60,
            'next_step' => 'Modul 4: User Journey Mapping & Wireframing'
        ),
        array(
            'code' => 'DA-201',
            'title' => 'Data Analytics Essentials',
            'slug' => 'data-analytics-essentials',
            'category' => 'DATA SCIENCE',
            'instructor' => 'Dian Pratama, M.Sc.',
            'modules_count' => 6,
            'duration_hours' => 18,
            'status' => 'in_progress',
            'progress_percent' => 83,
            'next_step' => 'Modul 6: Interactive Dashboard Visualization'
        ),
        array(
            'code' => 'UI-301',
            'title' => 'UI/UX Design Principles',
            'slug' => 'ui-ux-design-principles',
            'category' => 'DESIGN',
            'instructor' => 'Siti Rahmawati, M.Ds.',
            'modules_count' => 5,
            'duration_hours' => 14,
            'status' => 'completed',
            'progress_percent' => 100,
            'score' => 85
        )
    );

    foreach ($courses as $c) {
        $this->load->view('partials/course_card', array('course' => $c));
    }
    ?>
</div>

<!-- 4. Discovery Catalog Banner matching design.pen DSG:Anij8 -->
<div style="background-color:var(--soft-blue-banner); border:1px solid var(--soft-blue-border); border-radius:var(--radius-xl); padding:18px 24px; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:16px;">
    <div style="display:flex; align-items:center; gap:14px;">
        <div style="width:42px; height:42px; border-radius:10px; background-color:#ffffff; border:1px solid var(--soft-blue-border); display:flex; align-items:center; justify-content:center; color:var(--color-primary); flex-shrink:0;">
            <?= icon('compass', 'icon-md'); ?>
        </div>
        <div>
            <div style="font-size:14px; font-weight:700; color:var(--color-text-main);">
                Ingin menguasai keahlian digital lainnya?
            </div>
            <div style="font-size:13px; color:var(--color-text-muted); margin-top:2px;">
                Jelajahi puluhan course pilihan di bidang Development, Product, Data Science, dan Business Management.
            </div>
        </div>
    </div>

    <a href="<?= base_url('courses'); ?>" class="btn btn-primary btn-sm">
        <span>Buka Katalog Course</span>
        <?= icon('arrow-right', 'icon-xs'); ?>
    </a>
</div>
