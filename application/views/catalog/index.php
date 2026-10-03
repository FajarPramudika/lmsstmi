<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Course Catalog Page matching design.pen DSG:x1TeKK -->

<!-- 1. Header Row -->
<div style="display:flex; justify-content:space-between; align-items:flex-end; flex-wrap:wrap; gap:16px;">
    <div>
        <h1 class="heading-h1" style="color:var(--color-text-main); margin-bottom:4px;">Katalog Course Digital</h1>
        <p style="font-size:14px; color:var(--color-text-muted);">
            Eksplorasi seluruh program pembelajaran vokasi mandiri dengan standar industri terakreditasi.
        </p>
    </div>

    <div style="display:flex; align-items:center; gap:8px;">
        <span class="badge badge-primary">6 Course Tersedia</span>
        <span class="badge badge-neutral">5 Bidang Keahlian</span>
    </div>
</div>

<!-- 2. Toolbar Filter & Search -->
<div class="card" style="padding:14px 18px;">
    <div style="display:flex; align-items:center; justify-content:space-between; gap:16px; flex-wrap:wrap;">
        <!-- Search Input Field -->
        <div class="input-wrap" style="flex:1; min-width:280px; max-width:560px;">
            <span class="input-icon-left"><?= icon('magnifying-glass'); ?></span>
            <input type="text" class="form-control has-icon-left" placeholder="Cari topik course, keahlian, atau nama instruktur..." style="height:44px; font-size:13px;">
        </div>

        <div style="display:flex; align-items:center; gap:12px; flex-wrap:wrap;">
            <!-- Category Filter Dropdown -->
            <div style="position:relative; display:inline-flex; align-items:center;">
                <span style="position:absolute; left:12px; color:var(--color-primary); pointer-events:none; display:flex;">
                    <?= icon('funnel', 'icon-xs'); ?>
                </span>
                <select class="form-control form-select" style="height:44px; padding-left:36px; min-width:200px; font-size:13px; font-weight:600;">
                    <option value="">Kategori: Semua Course</option>
                    <option value="pm">Product Management</option>
                    <option value="data">Data Science</option>
                    <option value="design">Design &amp; UI/UX</option>
                    <option value="dev">Software Development</option>
                    <option value="biz">Business &amp; Growth</option>
                </select>
            </div>

            <!-- Sort Dropdown -->
            <select class="form-control form-select" style="height:44px; min-width:160px; font-size:13px;">
                <option value="populer">Urutan: Terpopuler</option>
                <option value="newest">Urutan: Terbaru</option>
                <option value="modules">Jumlah Modul</option>
            </select>
        </div>
    </div>
</div>

<!-- 3. Course Grid (6 Cards per design.pen) -->
<div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(320px, 1fr)); gap:24px;">
    <?php 
    $all_courses = array(
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
            'next_step' => 'Modul 4: User Journey Mapping'
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
            'next_step' => 'Modul 6: Interactive Dashboard'
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
        ),
        array(
            'code' => 'WD-102',
            'title' => 'Web Development Basics',
            'slug' => 'web-development-basics',
            'category' => 'DEVELOPMENT',
            'instructor' => 'Rina Sulistiawati, M.Kom.',
            'modules_count' => 7,
            'duration_hours' => 21,
            'status' => 'available',
            'short_description' => 'Pelajari arsitektur web modern, semantic HTML5, styling CSS kustom, dan vanilla JS interaktif.'
        ),
        array(
            'code' => 'DM-204',
            'title' => 'Digital Marketing & Growth',
            'slug' => 'digital-marketing-growth',
            'category' => 'BUSINESS & MANAGEMENT',
            'instructor' => 'Ahmad Fauzi, S.E., M.M.',
            'modules_count' => 6,
            'duration_hours' => 16,
            'status' => 'available',
            'short_description' => 'Strategi akuisisi pengguna, funnel optimization, performa ads, dan analitik kampanye digital.'
        ),
        array(
            'code' => 'BE-305',
            'title' => 'Backend API Development',
            'slug' => 'backend-api-development',
            'category' => 'DEVELOPMENT',
            'instructor' => 'Budi Hartono, M.T.',
            'modules_count' => 6,
            'duration_hours' => 18,
            'status' => 'available',
            'short_description' => 'Perancangan RESTful API aman, relasional database query, otorisasi token, dan arsitektur backend.'
        )
    );

    foreach ($all_courses as $c) {
        $this->load->view('partials/course_card', array(
            'course' => $c,
            'variant' => 'catalog'
        ));
    }
    ?>
</div>

<!-- 4. Pagination Toolbar matching course-catalog.html -->
<?php $this->load->view('partials/pagination', array('pagination_info' => 'Menampilkan 1–6 dari 6 course pilihan')); ?>

