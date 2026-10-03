<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$user_name = isset($current_user['name']) ? $current_user['name'] : 'Muhammad Raihan';
?>
<!-- User Dashboard View matching design.pen DSG:GNm6d -->

<!-- 1. Welcome & Alert Banner -->
<div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:16px;">
    <div>
        <h1 class="heading-h1" style="color:var(--color-text-main); margin-bottom:4px;">
            Selamat Datang Kembali, <?= e($user_name); ?>! 👋
        </h1>
        <p style="font-size:14px; color:var(--color-text-muted);">
            Lanjutkan pembelajaran Anda untuk menyelesaikan target modul dan meraih sertifikasi resmi.
        </p>
    </div>

    <!-- Alert Pill -->
    <a href="<?= base_url('exam/attempt/1'); ?>" style="display:inline-flex; align-items:center; gap:8px; padding:8px 14px; background:var(--color-warning-soft); border:1px solid var(--color-warning-border); border-radius:var(--radius-pill); font-size:12px; font-weight:700; color:var(--color-warning); text-decoration:none;">
        <?= icon('flag', 'icon-xs'); ?>
        <span>Ujian Akhir Tersedia: UI/UX Principles (Siap Dikerjakan)</span>
    </a>
</div>

<!-- 2. 4 Key Stats Cards Row (4 Columns Grid) -->
<div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(240px, 1fr)); gap:16px;">
    <!-- Stat 1: Course -->
    <div class="stat-card">
        <div class="stat-icon-box stat-icon-primary">
            <?= icon('book-open', 'icon-md'); ?>
        </div>
        <div class="stat-info">
            <div class="stat-value">3 Course</div>
            <div class="stat-label">2 Proses • 1 Selesai</div>
        </div>
    </div>

    <!-- Stat 2: Exams -->
    <div class="stat-card">
        <div class="stat-icon-box stat-icon-warning">
            <?= icon('check-square-offset', 'icon-md'); ?>
        </div>
        <div class="stat-info">
            <div class="stat-value">1 Ujian Siap</div>
            <div class="stat-label">3 Attempt Tersisa</div>
        </div>
    </div>

    <!-- Stat 3: Overall Progress -->
    <div class="stat-card">
        <div class="stat-icon-box stat-icon-info">
            <?= icon('sparkle', 'icon-md'); ?>
        </div>
        <div class="stat-info">
            <div class="stat-value">68%</div>
            <div class="stat-label">14 dari 21 Modul Selesai</div>
        </div>
    </div>

    <!-- Stat 4: Digital Certificates -->
    <div class="stat-card">
        <div class="stat-icon-box stat-icon-emerald">
            <?= icon('medal', 'icon-md'); ?>
        </div>
        <div class="stat-info">
            <div class="stat-value">1 Terbit</div>
            <div class="stat-label">ID: DL-2026-000001</div>
        </div>
    </div>
</div>

<!-- 3. Two-Column Split Workspace -->
<div style="display:flex; gap:24px; flex-wrap:wrap; align-items:flex-start;">
    <!-- Main Column: Enrolled Courses (696px on desktop) -->
    <div style="flex:1; min-width:320px; display:flex; flex-direction:column; gap:16px;">
        <!-- Header & Filter Tabs -->
        <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px;">
            <h2 class="heading-h2" style="font-size:1.125rem;">Course yang Sedang Diikuti</h2>
            <div class="filter-tabs">
                <button type="button" class="filter-tab active">Semua (3)</button>
                <button type="button" class="filter-tab">Sedang Berjalan (2)</button>
                <button type="button" class="filter-tab">Selesai (1)</button>
            </div>
        </div>

        <!-- Course Cards List -->
        <div style="display:flex; flex-direction:column; gap:16px;">
            <?php 
            $enrolled_courses = array(
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

            foreach ($enrolled_courses as $c) {
                $this->load->view('partials/course_card', array(
                    'course' => $c,
                    'variant' => 'enrolled'
                ));
            }
            ?>
        </div>
    </div>

    <!-- Sidebar Widget Column (404px on desktop) -->
    <div style="width:100%; max-width:404px; display:flex; flex-direction:column; gap:16px;">
        <!-- Widget 1: Ongoing Learning Activities -->
        <div class="card" style="padding:18px;">
            <div style="display:flex; align-items:center; gap:8px; margin-bottom:14px;">
                <?= icon('clock', 'icon-sm', 'style="color:var(--color-primary);"'); ?>
                <h3 style="font-size:14px; font-weight:700; color:var(--color-text-main); margin:0;">
                    Aktivitas Belajar Berjalan
                </h3>
            </div>

            <div style="display:flex; flex-direction:column; gap:12px;">
                <div style="padding:10px; background:var(--slate-100); border-radius:var(--radius-md); display:flex; justify-content:space-between; align-items:center;">
                    <div>
                        <div style="font-size:12px; font-weight:700; color:var(--color-text-main);">Digital Product Fundamentals</div>
                        <div style="font-size:11px; color:var(--color-text-muted);">Materi 4.1 Video &bull; 18 Menit</div>
                    </div>
                    <a href="<?= base_url('learn/digital-product-fundamentals'); ?>" class="btn btn-primary btn-sm" style="padding:4px 8px; font-size:11px;">
                        Lanjut
                    </a>
                </div>

                <div style="padding:10px; background:var(--slate-100); border-radius:var(--radius-md); display:flex; justify-content:space-between; align-items:center;">
                    <div>
                        <div style="font-size:12px; font-weight:700; color:var(--color-text-main);">Data Analytics Essentials</div>
                        <div style="font-size:11px; color:var(--color-text-muted);">Modul 6 Terbuka &bull; Dashboard 22m</div>
                    </div>
                    <a href="<?= base_url('learn/data-analytics-essentials'); ?>" class="btn btn-secondary btn-sm" style="padding:4px 8px; font-size:11px;">
                        Buka
                    </a>
                </div>
            </div>
        </div>

        <!-- Widget 2: Final Assessment & Evaluation -->
        <div class="card" style="padding:18px; border-color:var(--color-primary-soft);">
            <div style="display:flex; align-items:center; gap:8px; margin-bottom:12px;">
                <?= icon('medal', 'icon-sm', 'style="color:var(--color-warning);"'); ?>
                <h3 style="font-size:14px; font-weight:700; color:var(--color-text-main); margin:0;">
                    Ujian &amp; Evaluasi Akhir
                </h3>
            </div>

            <p style="font-size:12px; color:var(--color-text-muted); line-height:1.4; margin-bottom:14px;">
                Modul 1–5 pada UI/UX Principles telah selesai. Anda siap mengerjakan Ujian Akhir untuk menerbitkan sertifikat.
            </p>

            <a href="<?= base_url('exam/attempt/1'); ?>" class="btn btn-primary btn-sm" style="width:100%; justify-content:center;">
                <?= icon('check-square-offset', 'icon-xs'); ?>
                <span>Mulai Ujian Akhir (25 Soal)</span>
            </a>
        </div>

        <!-- Widget 3: Quick Shortcuts -->
        <div class="card" style="padding:18px;">
            <div style="font-size:12px; font-weight:700; color:var(--color-text-muted); text-transform:uppercase; margin-bottom:10px;">
                Pintasan Belajar Cepat
            </div>
            <div style="display:flex; flex-direction:column; gap:8px; font-size:13px;">
                <a href="<?= base_url('courses'); ?>" style="display:flex; align-items:center; justify-content:space-between; padding:8px 10px; background:#ffffff; border:1px solid var(--color-border); border-radius:var(--radius-sm); color:var(--color-text-main); text-decoration:none;">
                    <span>Jelajahi Katalog Course Baru</span>
                    <?= icon('arrow-right', 'icon-xs'); ?>
                </a>
                <a href="<?= base_url('verify'); ?>" style="display:flex; align-items:center; justify-content:space-between; padding:8px 10px; background:#ffffff; border:1px solid var(--color-border); border-radius:var(--radius-sm); color:var(--color-text-main); text-decoration:none;">
                    <span>Cek Status Verifikasi Sertifikat</span>
                    <?= icon('arrow-right', 'icon-xs'); ?>
                </a>
            </div>
        </div>
    </div>
</div>
