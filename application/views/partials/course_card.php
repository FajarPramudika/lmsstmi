<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * course_card.php — Modular Reusable Course Card Component
 * Supports:
 * 1. 'catalog' / double-bezel variant (landing.html, course-catalog.html)
 * 2. 'enrolled' variant (my-course.html, user-dashboard.html)
 */

$code = isset($course['code']) ? $course['code'] : 'DP-101';
$title = isset($course['title']) ? $course['title'] : 'Digital Product Fundamentals';
$slug = isset($course['slug']) ? $course['slug'] : 'digital-product-fundamentals';
$category = isset($course['category']) ? $course['category'] : 'PRODUCT MANAGEMENT';
$instructor = isset($course['instructor']) ? $course['instructor'] : 'Andi Setiawan, S.Kom.';
$role = isset($course['instructor_role']) ? $course['instructor_role'] : 'Senior Product Manager';
$modules = isset($course['modules_count']) ? (int)$course['modules_count'] : 5;
$duration = isset($course['duration_hours']) ? $course['duration_hours'] : 15;
$status = isset($course['status']) ? $course['status'] : 'available';
$progress = isset($course['progress_percent']) ? (int)$course['progress_percent'] : 0;
$next_step = isset($course['next_step']) ? $course['next_step'] : 'Modul 4: User Journey Mapping';
$score = isset($course['score']) ? $course['score'] : null;
$description = isset($course['short_description']) ? $course['short_description'] : 'Pelajari dasar manajemen produk digital mulai dari riset kebutuhan pengguna, product discovery, hingga penyusunan roadmap produk.';

// Determine card variant (catalog or enrolled)
$variant = isset($variant) ? $variant : (($status === 'in_progress' || $status === 'completed') ? 'enrolled' : 'catalog');

$detail_url = base_url('courses/' . $slug);
$learn_url = base_url('learn/' . $slug);
$img_banner = base_url('assets/img/mountain.png');
?>

<?php if ($variant === 'enrolled'): ?>
    <!-- Enrolled Variant: Matches my-course.html & user-dashboard.html -->
    <div class="enrolled-card">
        <div class="enrolled-thumb" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0.55) 100%), url('<?= e($img_banner); ?>');">
            <div class="enrolled-thumb-top">
                <span class="enrolled-cat-pill"><?= e($category); ?></span>
                <?php if ($status === 'completed'): ?>
                    <span class="enrolled-status-pill is-done">Selesai ✓</span>
                <?php else: ?>
                    <span class="enrolled-status-pill">Sedang Berjalan</span>
                <?php endif; ?>
            </div>
            <div class="enrolled-duration-pill">
                <?= $modules; ?> Modul &bull; <?= $duration; ?> Jam Belajar
            </div>
        </div>

        <div class="enrolled-details">
            <div style="display:flex; flex-direction:column; gap:4px;">
                <div class="enrolled-code">COURSE ID: <?= e($code); ?></div>
                <h3 class="enrolled-title">
                    <a href="<?= e($detail_url); ?>"><?= e($title); ?></a>
                </h3>
                <div class="enrolled-instructor">Instruktur: <?= e($instructor); ?></div>
            </div>

            <div style="display:flex; flex-direction:column; gap:6px;">
                <div class="enrolled-prog-labels">
                    <span class="enrolled-prog-label-left">Progres Belajar</span>
                    <?php if ($status === 'completed'): ?>
                        <span class="enrolled-prog-label-right" style="color:var(--emerald);">100% (Selesai)</span>
                    <?php else: ?>
                        <span class="enrolled-prog-label-right"><?= $progress; ?>% (<?= round(($progress / 100) * $modules); ?>/<?= $modules; ?> Modul)</span>
                    <?php endif; ?>
                </div>
                <div class="enrolled-prog-track">
                    <div class="enrolled-prog-fill <?= $status === 'completed' ? 'is-complete' : ''; ?>" style="width: <?= $status === 'completed' ? 100 : $progress; ?>%; <?= $status === 'completed' ? 'background-color: var(--emerald);' : ''; ?>"></div>
                </div>
            </div>

            <?php if ($status === 'completed'): ?>
                <a href="<?= base_url('certificates'); ?>" class="enrolled-resume-btn is-completed">
                    <span>Lihat Sertifikat</span>
                    <?= icon('medal', 'icon-xs'); ?>
                </a>
            <?php else: ?>
                <a href="<?= e($learn_url); ?>" class="enrolled-resume-btn">
                    <span>Lanjutkan Belajar</span>
                    <?= icon('arrow-right', 'icon-xs'); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>

<?php else: ?>
    <!-- Double-Bezel Catalog Variant: Matches landing.html & course-catalog.html -->
    <div class="course-shell">
        <div class="course-inner">
            <div class="course-banner" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0.60) 100%), url('<?= e($img_banner); ?>');">
                <div class="banner-jurusan-pill"><?= e($category); ?></div>
                <div class="banner-duration-label"><?= $modules; ?> Modul &bull; <?= $duration; ?> Jam Belajar</div>
            </div>

            <div class="course-body">
                <h3 class="course-body-title">
                    <a href="<?= e($detail_url); ?>"><?= e($title); ?></a>
                </h3>

                <p class="course-body-desc"><?= e($description); ?></p>

                <div class="instructor-row">
                    <div class="instructor-avatar-box">
                        <?= icon('user', 'icon-sm'); ?>
                    </div>
                    <div class="instructor-info">
                        <div class="instructor-name"><?= e($instructor); ?></div>
                        <div class="instructor-role"><?= e($role); ?></div>
                    </div>
                </div>

                <div class="card-hairline"></div>

                <div class="card-action-footer">
                    <a href="<?= e($detail_url); ?>" class="btn-enroll-island">
                        <span>Lihat Detail Course</span>
                        <div class="btn-dot-circle">
                            <?= icon('arrow-right', 'icon-xs'); ?>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
