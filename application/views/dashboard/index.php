<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    $user_name = isset($current_user['name']) ? $current_user['name'] : 'Muhammad Raihan';
?>
<!-- User Dashboard View matching design-reference/user-dashboard.html -->

<div style="display:flex; flex-direction:column; gap:20px; width:100%; max-width:var(--container-max-app, 1440px); margin:0 auto;">

    <!-- 1. Welcome Alert Banner matching design-reference/user-dashboard.html line 208 -->
    <div data-pencil-name="Welcome Alert Banner"
        style="align-items: center; background-color: #ffffff; border-radius: 12px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 16px 20px; width: 100%;">
        <div data-pencil-name="Welcome Texts"
            style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 3px; height: fit-content; justify-content: flex-start; width: fit-content">
            <div data-pencil-name="Welcome Title"
                style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 18px; font-style: normal; font-weight: 800; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap'>
                Selamat Datang Kembali, <?php echo e($user_name); ?>!
            </div>
            <div data-pencil-name="Welcome Subtitle"
                style='box-sizing: border-box; color: #667085; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 500; letter-spacing: 0px; line-height: normal; text-align: left;'>
                Lanjutkan pembelajaran modul bertahap Anda. Selesaikan kuis checkpoint untuk membuka materi berikutnya.
            </div>
        </div>
    </div>

    <!-- 2. Dashboard Key Stats Row (4 Columns Grid) matching design-reference/user-dashboard.html line 223 -->
    <div data-pencil-name="Dashboard Key Stats Row" class="dashboard-stats-grid">
        <!-- Stat Card 1: Course Diikuti -->
        <div class="stat-card-custom">
            <div class="stat-top-row">
                <div class="stat-card-label">Course Diikuti</div>
                <div class="stat-icon-wrap" style="background-color: #e8f1fa;">
                    <?php echo icon('book-bookmark', '', 'style="width:16px; height:16px; fill:#2872fa;"'); ?>
                </div>
            </div>
            <div class="stat-card-value">3 Course</div>
            <div class="stat-card-sub" style="color: #2872fa;">2 Dalam Proses • 1 Selesai</div>
        </div>

        <!-- Stat Card 2: Ujian & Evaluasi -->
        <a href="<?php echo base_url('exam/attempt/1'); ?>" class="stat-card-custom" style="text-decoration:none; color:inherit;">
            <div class="stat-top-row">
                <div class="stat-card-label">Ujian &amp; Evaluasi</div>
                <div class="stat-icon-wrap" style="background-color: #fef3c7;">
                    <?php echo icon('clock', '', 'style="width:16px; height:16px; fill:#d97706;"'); ?>
                </div>
            </div>
            <div class="stat-card-value">1 Ujian</div>
            <div class="stat-card-sub" style="color: #d97706;">Siap dikerjakan (3 Attempt) &rarr;</div>
        </a>

        <!-- Stat Card 3: Progres Pembelajaran -->
        <div class="stat-card-custom">
            <div class="stat-top-row">
                <div class="stat-card-label">Progres Pembelajaran</div>
                <div class="stat-icon-wrap" style="background-color: #dcfce7;">
                    <?php echo icon('check-circle', '', 'style="width:16px; height:16px; fill:#16a34a;"'); ?>
                </div>
            </div>
            <div class="stat-card-value">68%</div>
            <div class="stat-card-sub" style="color: #16a34a;">14 dari 21 Modul Selesai</div>
        </div>

        <!-- Stat Card 4: Sertifikat Digital -->
        <div class="stat-card-custom">
            <div class="stat-top-row">
                <div class="stat-card-label">Sertifikat Digital</div>
                <div class="stat-icon-wrap" style="background-color: #ede9fe;">
                    <?php echo icon('trophy', '', 'style="width:16px; height:16px; fill:#7c3aed;"'); ?>
                </div>
            </div>
            <div class="stat-card-value">1 Terbit</div>
            <div class="stat-card-sub" style="color: #7c3aed;">ID: DL-2026-000001</div>
        </div>
    </div>

    <!-- 3. Course List Section (2 Columns Grid on Desktop) -->
    <div style="display:flex; flex-direction:column; gap:16px; width:100%; margin-top:4px;">
        <!-- Header & Filter Tabs -->
        <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px;">
            <h2 style="font-size:18px; font-weight:800; color:#192a3d; margin:0; font-family:'Plus Jakarta Sans', system-ui, sans-serif;">
                Course yang Sedang Diikuti
            </h2>
            <div class="filter-tabs" id="dashboardFilterTabs">
                <button type="button" class="filter-tab active" data-filter="all">Semua (3)</button>
                <button type="button" class="filter-tab" data-filter="in_progress">Sedang Berjalan (2)</button>
                <button type="button" class="filter-tab" data-filter="completed">Selesai (1)</button>
            </div>
        </div>

        <!-- Course Cards 2-Column Grid on Desktop -->
        <div class="dashboard-course-grid" id="dashboardCourseGrid">
            <?php
                $enrolled_courses = [
                    [
                        'code'             => 'DP-101',
                        'title'            => 'Digital Product Fundamentals',
                        'slug'             => 'digital-product-fundamentals',
                        'category'         => 'PRODUCT MANAGEMENT',
                        'instructor'       => 'Andi Setiawan, S.Kom.',
                        'modules_count'    => 5,
                        'duration_hours'   => 15,
                        'status'           => 'in_progress',
                        'progress_percent' => 60,
                        'next_step'        => 'Modul 4: User Journey Mapping & Wireframing',
                    ],
                    [
                        'code'             => 'DA-201',
                        'title'            => 'Data Analytics Essentials',
                        'slug'             => 'data-analytics-essentials',
                        'category'         => 'DATA SCIENCE',
                        'instructor'       => 'Dian Pratama, M.Sc.',
                        'modules_count'    => 6,
                        'duration_hours'   => 18,
                        'status'           => 'in_progress',
                        'progress_percent' => 83,
                        'next_step'        => 'Modul 6: Interactive Dashboard Visualization',
                    ],
                    [
                        'code'             => 'UI-301',
                        'title'            => 'UI/UX Design Principles',
                        'slug'             => 'ui-ux-design-principles',
                        'category'         => 'DESIGN',
                        'instructor'       => 'Siti Rahmawati, M.Ds.',
                        'modules_count'    => 5,
                        'duration_hours'   => 14,
                        'status'           => 'completed',
                        'progress_percent' => 100,
                        'score'            => 85,
                    ],
                ];

                foreach ($enrolled_courses as $c) {
                    $this->load->view('partials/course_card', [
                        'course'  => $c,
                        'variant' => 'enrolled',
                    ]);
                }
            ?>
        </div>
    </div>

</div>

<style>
/* 1. Key Stats 4 Columns Grid */
.dashboard-stats-grid {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 16px;
    width: 100%;
}

.stat-card-custom {
    align-items: flex-start;
    background-color: #ffffff;
    border-radius: 12px;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    gap: 10px;
    height: fit-content;
    justify-content: flex-start;
    outline-offset: -0.5px;
    outline: 1px solid #dfe3ea;
    padding: 16px;
    transition: transform 0.15s ease, box-shadow 0.15s ease;
}

.stat-card-custom:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(16, 24, 40, 0.05);
}

.stat-top-row {
    align-items: center;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    gap: 0px;
    height: fit-content;
    justify-content: space-between;
    width: 100%;
}

.stat-card-label {
    box-sizing: border-box;
    color: #667085;
    font-family: "Plus Jakarta Sans", system-ui, sans-serif;
    font-size: 12px;
    font-style: normal;
    font-weight: 600;
    letter-spacing: 0px;
    line-height: normal;
    text-align: left;
    white-space: nowrap;
}

.stat-icon-wrap {
    align-items: center;
    border-radius: 8px;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    height: 32px;
    justify-content: center;
    width: 32px;
    flex-shrink: 0;
}

.stat-card-value {
    box-sizing: border-box;
    color: #192a3d;
    font-family: "Plus Jakarta Sans", system-ui, sans-serif;
    font-size: 22px;
    font-style: normal;
    font-weight: 800;
    letter-spacing: 0px;
    line-height: normal;
    text-align: left;
    white-space: nowrap;
}

.stat-card-sub {
    box-sizing: border-box;
    font-family: "Plus Jakarta Sans", system-ui, sans-serif;
    font-size: 11px;
    font-style: normal;
    font-weight: 600;
    letter-spacing: 0px;
    line-height: normal;
    text-align: left;
    white-space: nowrap;
}

/* 2. Course Cards 2 Columns Grid on Desktop */
.dashboard-course-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 20px;
    width: 100%;
}

/* Responsive Breakpoints */
@media (max-width: 992px) {
    .dashboard-stats-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media (max-width: 768px) {
    .dashboard-stats-grid {
        grid-template-columns: 1fr;
    }
    .dashboard-course-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('#dashboardFilterTabs .filter-tab');
    const courseCards = document.querySelectorAll('#dashboardCourseGrid .enrolled-card');

    filterButtons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            filterButtons.forEach(function (b) { b.classList.remove('active'); });
            this.classList.add('active');

            const filter = this.getAttribute('data-filter');
            courseCards.forEach(function (card) {
                const status = card.getAttribute('data-status');
                if (filter === 'all' || status === filter) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>
