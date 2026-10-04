<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    /**
 * Course Catalog Page — matching design-reference/course-catalog.html
 * Compatible with PHP 7.3.33
 */

    $all_courses = [
    [
        'code'              => 'DP-101',
        'title'             => 'Digital Product Fundamentals',
        'slug'              => 'digital-product-fundamentals',
        'category'          => 'PRODUCT MANAGEMENT',
        'instructor'        => 'Andi Setiawan, S.Kom.',
        'modules_count'     => 5,
        'duration_hours'    => 15,
        'status'            => 'in_progress',
        'completed_modules' => 3,
        'progress_percent'  => 60,
        'detail_url'        => base_url('digital-product-fundamentals'),
    ],
    [
        'code'              => 'DA-201',
        'title'             => 'Data Analytics Essentials',
        'slug'              => 'data-analytics-essentials',
        'category'          => 'DATA SCIENCE',
        'instructor'        => 'Dian Pratama, M.Sc.',
        'modules_count'     => 6,
        'duration_hours'    => 18,
        'status'            => 'in_progress',
        'completed_modules' => 5,
        'progress_percent'  => 83,
        'detail_url'        => base_url('courses/data-analytics-essentials'),
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
        'detail_url'       => base_url('courses/ui-ux-design-principles'),
    ],
    [
        'code'              => 'WD-102',
        'title'             => 'Web Development Basics',
        'slug'              => 'web-development-basics',
        'category'          => 'DEVELOPMENT',
        'instructor'        => 'Rina Sulistiawati, M.Kom.',
        'modules_count'     => 7,
        'duration_hours'    => 21,
        'status'            => 'available',
        'short_description' => 'Bangun fondasi web modern dengan HTML5 semantik, CSS responsif, JavaScript, dan integrasi RESTful API terstandar.',
        'detail_url'        => base_url('courses/web-development-basics'),
    ],
    [
        'code'              => 'DM-204',
        'title'             => 'Digital Marketing & Growth',
        'slug'              => 'digital-marketing-growth',
        'category'          => 'BUSINESS',
        'instructor'        => 'Ahmad Fauzi, S.E., M.M.',
        'modules_count'     => 6,
        'duration_hours'    => 16,
        'status'            => 'available',
        'short_description' => 'Strategi akuisisi pengguna, funnel pemasaran digital, analitik campaign, SEO/SEM, serta optimasi konversi berbasis data.',
        'detail_url'        => base_url('courses/digital-marketing-growth'),
    ],
    [
        'code'              => 'BE-305',
        'title'             => 'Backend API & Microservices',
        'slug'              => 'backend-api-development',
        'category'          => 'DEVELOPMENT',
        'instructor'        => 'Budi Hartono, M.T.',
        'modules_count'     => 8,
        'duration_hours'    => 24,
        'status'            => 'available',
        'short_description' => 'Arsitektur backend scalable, perancangan RESTful & gRPC API, auth JWT, caching Redis, dan database indexing performa tinggi.',
        'detail_url'        => base_url('courses/backend-api-development'),
    ],
    ];
?>

<div data-pencil-name="Main Content Canvas"
    style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 18px; height: fit-content; justify-content: flex-start; width: 100%; max-width: var(--container-max-app, 1440px); margin: 0 auto;">

    <!-- 1. Catalog Header Row -->
    <div data-pencil-name="Catalog Header Row"
        style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; width: 100%;">
        <div data-pencil-name="Title Group"
            style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 4px; height: fit-content; justify-content: flex-start; width: fit-content;">
            <div data-pencil-name="Page Title"
                style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 28px; font-style: normal; font-weight: 800; letter-spacing: -0.6px; line-height: normal; text-align: left; white-space: nowrap;'>
                Katalog Course Digital
            </div>
            <div data-pencil-name="Page Subtitle"
                style='box-sizing: border-box; color: #667085; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 14px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left;'>
                Eksplorasi dan pelajari beragam course terstruktur dari berbagai bidang keahlian digital.
            </div>
        </div>
    </div>

    <!-- 2. Catalog Search and Filter Toolbar -->
    <div data-pencil-name="Catalog Search and Filter Toolbar"
        style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 16px; height: fit-content; justify-content: space-between; width: 100%; flex-wrap: wrap;">
        <div data-pencil-name="Catalog Search Input Box"
            style="align-items: center; background-color: #ffffff; border-radius: 10px; box-shadow: 0px 1px 3px rgba(16, 24, 40, 0.04); box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 12px; height: 44px; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 0px 16px; width: 560px; max-width: 100%;">
            <svg data-pencil-name="Search Icon" data-icon-name="magnifying-glass" data-icon-set="phosphor"
                viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"
                style="box-sizing: border-box; flex-shrink: 0; height: 17px; width: 17px;">
                <path
                    d="M12.57813 11.92188l-2.40625-2.35157q0.875-1.03906 1.12109-2.29687 0.24609-1.25781-0.16406-2.51563-0.41016-1.25781-1.39453-2.16015-0.98438-0.90234-2.24219-1.17578-1.25781-0.27344-2.51563 0.05468-1.25781 0.32813-2.21484 1.28516-0.95703 0.95703-1.28516 2.21484-0.32813 1.25781-0.05468 2.51563 0.27344 1.25781 1.17578 2.24219 0.90234 0.98438 2.16015 1.39453 1.25781 0.41016 2.51563 0.16406 1.25781-0.24609 2.29687-1.12109l2.35157 2.40625q0.16406 0.10938 0.32812 0.10937 0.16406 0 0.30078-0.13672 0.13672-0.13672 0.13672-0.30078 0-0.16406-0.10937-0.32812z m-10.39063-5.57813q0-1.14844 0.54688-2.10547 0.54688-0.95703 1.5039-1.50391 0.95703-0.54688 2.10547-0.54687 1.14844 0 2.10547 0.54688 0.95703 0.54688 1.50391 1.5039 0.54688 0.95703 0.54687 2.10547 0 1.14844-0.54688 2.10547-0.54688 0.95703-1.5039 1.50391-0.95703 0.54688-2.10547 0.54687-1.14844 0-2.10547-0.54688-0.95703-0.54688-1.50391-1.5039-0.54688-0.95703-0.54687-2.10547z"
                    fill="#667085"></path>
            </svg>
            <input type="text" id="catalogSearchInput" placeholder="Cari topik course, keahlian, atau nama instruktur..."
                style='border: none; outline: none; background: transparent; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-weight: 400; width: 100%;'>
        </div>
        <div data-pencil-name="Filters and Sort Action Group"
            style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 12px; height: fit-content; justify-content: flex-start; width: fit-content;">
            <!-- Category Filter Dropdown -->
            <div data-pencil-name="Category Filter Dropdown"
                style="align-items: center; background-color: #ffffff; border-radius: 10px; box-shadow: 0px 1px 3px rgba(16, 24, 40, 0.04); box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: 44px; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 0px 14px; position: relative;">
                <svg data-pencil-name="Filter Funnel Icon" data-icon-name="funnel" data-icon-set="phosphor"
                    viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                    xmlns="http://www.w3.org/2000/svg"
                    style="box-sizing: border-box; flex-shrink: 0; height: 16px; width: 16px; pointer-events: none;">
                    <path
                        d="M6.125 12.74219q-0.21875 0-0.41016-0.10938-0.19141-0.10937-0.32812-0.30078-0.13672-0.19141-0.13672-0.46484l0-4.26563-3.60938-3.9375q-0.16406-0.21875-0.1914-0.46484-0.02734-0.24609 0.05469-0.49219 0.08203-0.24609 0.30078-0.38281 0.21875-0.13672 0.49218-0.13672l9.40625 0q0.27344 0 0.49219 0.13672 0.21875 0.13672 0.30078 0.38281 0.08203 0.24609 0.05469 0.49219-0.02734 0.24609-0.19141 0.46484l-3.60937 3.9375 0 3.11719q0 0.4375-0.38281 0.71094l-1.75 1.14843q-0.21875 0.16406-0.49219 0.16407z m-3.82813-9.67969l3.60938 3.9375q0.21875 0.27344 0.21875 0.60156l0 4.26563 1.75-1.14844 0-3.11719q0-0.32813 0.21875-0.60156l3.60938-3.9375-9.40625 0z"
                        fill="#2872fa"></path>
                </svg>
                <select id="categoryFilter"
                    style='background: transparent; border: none; outline: none; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-weight: 600; cursor: pointer; padding-right: 18px; -webkit-appearance: none; -moz-appearance: none; appearance: none;'>
                    <option value="">Kategori : Semua Course</option>
                    <option value="PRODUCT MANAGEMENT">Product Management</option>
                    <option value="DATA SCIENCE">Data Science</option>
                    <option value="DESIGN">Design &amp; UI/UX</option>
                    <option value="DEVELOPMENT">Development</option>
                    <option value="BUSINESS">Business &amp; Growth</option>
                </select>
                <svg data-pencil-name="Dropdown Caret Icon" data-icon-name="caret-down"
                    data-icon-set="phosphor" viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                    xmlns="http://www.w3.org/2000/svg"
                    style="box-sizing: border-box; flex-shrink: 0; height: 14px; width: 14px; pointer-events: none; margin-left: -14px;">
                    <path
                        d="M7 10.0625q-0.16406 0-0.32813-0.10938l-4.375-4.375q-0.10938-0.16406-0.08203-0.32812 0.02734-0.16406 0.13672-0.27344 0.10938-0.10938 0.27344-0.13672 0.16406-0.02734 0.32812 0.08203l4.04688 4.10157 4.04688-4.10156q0.16406-0.10938 0.32812-0.08204 0.16406 0.02734 0.27344 0.13672 0.10937 0.10938 0.13672 0.27344 0.02734 0.16406-0.08203 0.32813l-4.375 4.375q-0.16406 0.10938-0.32813 0.10937z"
                        fill="#667085"></path>
                </svg>
            </div>
            <!-- Sort Order Dropdown -->
            <div data-pencil-name="Sort Order Dropdown"
                style="align-items: center; background-color: #ffffff; border-radius: 10px; box-shadow: 0px 1px 3px rgba(16, 24, 40, 0.04); box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 8px; height: 44px; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 0px 14px; position: relative;">
                <select id="sortOrder"
                    style='background: transparent; border: none; outline: none; color: #475467; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-weight: 500; cursor: pointer; padding-right: 18px; -webkit-appearance: none; -moz-appearance: none; appearance: none;'>
                    <option value="popular">Urutan: Terpopuler</option>
                    <option value="newest">Urutan: Terbaru</option>
                    <option value="modules">Urutan: Jumlah Modul</option>
                </select>
                <svg data-pencil-name="Sort Caret Icon" data-icon-name="caret-down" data-icon-set="phosphor"
                    viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                    xmlns="http://www.w3.org/2000/svg"
                    style="box-sizing: border-box; flex-shrink: 0; height: 14px; width: 14px; pointer-events: none; margin-left: -14px;">
                    <path
                        d="M7 10.0625q-0.16406 0-0.32813-0.10938l-4.375-4.375q-0.10938-0.16406-0.08203-0.32812 0.02734-0.16406 0.13672-0.27344 0.10938-0.10938 0.27344-0.13672 0.16406-0.02734 0.32812 0.08203l4.04688 4.10157 4.04688-4.10156q0.16406-0.10938 0.32812-0.08204 0.16406 0.02734 0.27344 0.13672 0.10937 0.10938 0.13672 0.27344 0.02734 0.16406-0.08203 0.32813l-4.375 4.375q-0.16406 0.10938-0.32813 0.10937z"
                        fill="#667085"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- 3. Catalog Cards Grid Container -->
    <div id="catalogGrid" data-pencil-name="Catalog Cards Grid Container"
        style="display: grid; grid-template-columns: repeat(auto-fill, minmax(340px, 1fr)); gap: 24px; width: 100%;">
        <?php foreach ($all_courses as $c): ?>
            <div class="course-catalog-card"
                data-code="<?php echo e($c['code']); ?>"
                data-title="<?php echo strtolower(e($c['title'])); ?>"
                data-instructor="<?php echo strtolower(e($c['instructor'])); ?>"
                data-category="<?php echo e($c['category']); ?>"
                data-pencil-name="Catalog Card - <?php echo e($c['title']); ?>"
                style="align-items: flex-start; background-color: #ffffff; border-radius: 14px; box-shadow: 0px 2px 6px rgba(16, 24, 40, 0.04); box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 0px; height: 345px; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; overflow: hidden; width: 100%; transition: transform 0.2s ease, box-shadow 0.2s ease;">

                <!-- Thumbnail Banner with Gradient matching design -->
                <div data-pencil-name="Thumbnail Banner"
                    style="align-items: flex-start; background: linear-gradient(180deg, #787878 0%, #e8e8e8 100%); box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 0px; height: 130px; justify-content: space-between; padding: 10px 12px; width: 100%;">
                    <div data-pencil-name="Thumb Top Row"
                        style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; width: 100%;">
                        <div data-pencil-name="Category Pill"
                            style="align-items: center; background-color: #ffffff; border-radius: 999px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; padding: 3px 8px; width: fit-content;">
                            <div data-pencil-name="Cat Text"
                                style='box-sizing: border-box; color: #000000; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 9px; font-style: normal; font-weight: 800; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                <?php echo e($c['category']); ?>
                            </div>
                        </div>
                        <?php if ($c['status'] === 'in_progress'): ?>
                            <div data-pencil-name="Status Pill"
                                style="align-items: center; background-color: #2872fa; border-radius: 999px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; padding: 3px 8px; width: fit-content;">
                                <div data-pencil-name="Status Text"
                                    style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                    Sedang Berjalan
                                </div>
                            </div>
                        <?php elseif ($c['status'] === 'completed'): ?>
                            <div data-pencil-name="Status Pill"
                                style="align-items: center; background-color: #10b981; border-radius: 999px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; padding: 3px 8px; width: fit-content;">
                                <div data-pencil-name="Status Text"
                                    style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                    Selesai &amp; Lulus
                                </div>
                            </div>
                        <?php else: ?>
                            <div data-pencil-name="Status Pill"
                                style="align-items: center; background-color: #00000060; border-radius: 999px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; padding: 3px 8px; width: fit-content;">
                                <div data-pencil-name="Status Text"
                                    style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                    Tersedia
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div data-pencil-name="Duration Pill"
                        style="align-items: center; background-color: #00000050; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; padding: 2px 7px; width: fit-content;">
                        <div data-pencil-name="Duration Text"
                            style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            <?php echo (int) $c['modules_count']; ?> Modul • <?php echo (int) $c['duration_hours']; ?> Jam Belajar
                        </div>
                    </div>
                </div>

                <!-- Details Column -->
                <div data-pencil-name="Details Column"
                    style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-grow: 1; flex-shrink: 0; gap: 0px; height: 215px; justify-content: space-between; padding: 14px 16px; width: 100%;">

                    <div data-pencil-name="Top Info"
                        style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 3px; height: fit-content; justify-content: flex-start; width: 100%;">
                        <div data-pencil-name="Course Code"
                            style='box-sizing: border-box; color: #98a2b3; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-style: normal; font-weight: 700; letter-spacing: 0.5px; line-height: normal; text-align: left; white-space: nowrap;'>
                            COURSE ID: <?php echo e($c['code']); ?>
                        </div>
                        <div data-pencil-name="Course Title"
                            style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 15px; font-style: normal; font-weight: 800; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100%;'>
                            <?php echo e($c['title']); ?>
                        </div>
                        <div data-pencil-name="Instructor Name"
                            style='box-sizing: border-box; color: #667085; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            Instruktur: <?php echo e($c['instructor']); ?>
                        </div>
                    </div>

                    <?php if ($c['status'] === 'in_progress'): ?>
                        <!-- Progress Box for In-Progress Courses -->
                        <div data-pencil-name="Progress Box"
                            style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 5px; height: fit-content; justify-content: flex-start; width: 100%;">
                            <div data-pencil-name="Prog Labels"
                                style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; width: 100%;">
                                <div data-pencil-name="Prog Text Left"
                                    style='box-sizing: border-box; color: #2872fa; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                    Progres Belajar: <?php echo (int) $c['completed_modules']; ?>/<?php echo (int) $c['modules_count']; ?> Modul
                                </div>
                                <div data-pencil-name="Prog Text Right"
                                    style='box-sizing: border-box; color: #2872fa; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                    <?php echo (int) $c['progress_percent']; ?>%
                                </div>
                            </div>
                            <div data-pencil-name="Progress Track"
                                style="align-items: flex-start; background-color: #f1f5f9; border-radius: 999px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 5px; justify-content: flex-start; width: 100%;">
                                <div data-pencil-name="Bar Fill"
                                    style="align-items: flex-start; background-color: #2872fa; border-radius: 999px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 5px; justify-content: flex-start; width: <?php echo (int) $c['progress_percent']; ?>%;">
                                </div>
                            </div>
                        </div>

                        <!-- Action Button: Lanjutkan Belajar -->
                        <a href="<?php echo e($c['detail_url']); ?>" data-pencil-name="Action Button"
                            style="align-items: center; background-color: #2872fa; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: 38px; justify-content: center; outline-offset: -0.5px; outline: 1px solid #2872fa; width: 100%; text-decoration: none; cursor: pointer; transition: background-color 0.15s ease;">
                            <div data-pencil-name="Action Label"
                                style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                Lanjutkan Belajar
                            </div>
                            <svg data-pencil-name="Action Icon" data-icon-name="arrow-right"
                                data-icon-set="phosphor" viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                                xmlns="http://www.w3.org/2000/svg"
                                style="box-sizing: border-box; flex-shrink: 0; height: 13px; width: 13px;">
                                <path
                                    d="M12.14063 7.32813l-3.9375 3.9375q-0.16406 0.10938-0.32813 0.10937-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.10938-0.32812l3.22656-3.17188-8.58594 0q-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672l8.58594 0-3.22657-3.17188q-0.10938-0.16406-0.08203-0.32812 0.02734-0.16406 0.13672-0.27344 0.10938-0.10938 0.27344-0.13672 0.16406-0.02734 0.32812 0.08203l3.9375 3.9375q0.10938 0.16406 0.10938 0.32813 0 0.16406-0.10938 0.32812z"
                                    fill="#ffffff"></path>
                            </svg>
                        </a>

                    <?php elseif ($c['status'] === 'completed'): ?>
                        <!-- Progress Box for Completed Courses -->
                        <div data-pencil-name="Progress Box"
                            style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 5px; height: fit-content; justify-content: flex-start; width: 100%;">
                            <div data-pencil-name="Prog Labels"
                                style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; width: 100%;">
                                <div data-pencil-name="Prog Text Left"
                                    style='box-sizing: border-box; color: #059669; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                    Ujian Lulus (Skor <?php echo (int) $c['score']; ?>) • Bersertifikat
                                </div>
                                <div data-pencil-name="Prog Text Right"
                                    style='box-sizing: border-box; color: #059669; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                    100%
                                </div>
                            </div>
                            <div data-pencil-name="Progress Track"
                                style="align-items: flex-start; background-color: #f1f5f9; border-radius: 999px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 5px; justify-content: flex-start; width: 100%;">
                                <div data-pencil-name="Bar Fill"
                                    style="align-items: flex-start; background-color: #10b981; border-radius: 999px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 5px; justify-content: flex-start; width: 100%;">
                                </div>
                            </div>
                        </div>

                        <!-- Action Button: Review Course -->
                        <a href="<?php echo e($c['detail_url']); ?>" data-pencil-name="Review Course Button"
                            style="align-items: center; background-color: #ffffff; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: 38px; justify-content: center; outline-offset: -0.75px; outline: 1.5px solid #2872fa; width: 100%; text-decoration: none; cursor: pointer; transition: background-color 0.15s ease;">
                            <svg data-pencil-name="Rev Icon" data-icon-name="book-open" data-icon-set="phosphor"
                                viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                                xmlns="http://www.w3.org/2000/svg"
                                style="box-sizing: border-box; flex-shrink: 0; height: 14px; width: 14px;">
                                <path
                                    d="M12.25 2.625l-3.5 0q-0.49219 0-0.95703 0.21875-0.46484 0.21875-0.79297 0.65625-0.32813-0.4375-0.79297-0.65625-0.46484-0.21875-0.95703-0.21875l-3.5 0q-0.38281 0-0.62891 0.24609-0.24609 0.24609-0.24609 0.62891l0 7q0 0.38281 0.24609 0.62891 0.24609 0.24609 0.62891 0.24609l3.5 0q0.54688 0 0.92969 0.38281 0.38281 0.38281 0.38281 0.92969 0 0.16406 0.13672 0.30078 0.13672 0.13672 0.30078 0.13672 0.16406 0 0.30078-0.13672 0.13672-0.13672 0.13672-0.30078 0-0.54688 0.38281-0.92969 0.38281-0.38281 0.92969-0.38281l3.5 0q0.38281 0 0.62891-0.24609 0.24609-0.24609 0.24609-0.62891l0-7q0-0.38281-0.24609-0.62891-0.24609-0.24609-0.62891-0.24609z m-7 7.875l-3.5 0 0-7 3.5 0q0.54688 0 0.92969 0.38281 0.38281 0.38281 0.38281 0.92969l0 6.125q-0.60156-0.4375-1.3125-0.4375z m7 0l-3.5 0q-0.71094 0-1.3125 0.4375l0-6.125q0-0.54688 0.38281-0.92969 0.38281-0.38281 0.92969-0.38281l3.5 0 0 7z"
                                    fill="#2872fa"></path>
                            </svg>
                            <div data-pencil-name="Rev Label"
                                style='box-sizing: border-box; color: #2872fa; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                Review Course
                            </div>
                        </a>

                    <?php else: ?>
                        <!-- Description Box for Available Courses -->
                        <div data-pencil-name="Desc Box"
                            style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; width: 100%;">
                            <div data-pencil-name="Desc Text"
                                style='box-sizing: border-box; color: #475467; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: 16px; text-align: left;'>
                                <?php echo e($c['short_description']); ?>
                            </div>
                        </div>

                        <!-- Action Button: Daftar Course -->
                        <a href="<?php echo e($c['detail_url']); ?>" data-pencil-name="Action Button"
                            style="align-items: center; background-color: #3a3b3c; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: 38px; justify-content: center; outline-offset: -0.5px; outline: 1px solid #3d3d3d; width: 100%; text-decoration: none; cursor: pointer; transition: background-color 0.15s ease;">
                            <div data-pencil-name="Action Label"
                                style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                Daftar Course
                            </div>
                            <svg data-pencil-name="Action Icon" data-icon-name="plus" data-icon-set="phosphor"
                                viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                                xmlns="http://www.w3.org/2000/svg"
                                style="box-sizing: border-box; flex-shrink: 0; height: 13px; width: 13px;">
                                <path
                                    d="M12.25 7q0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672l-4.375 0 0 4.375q0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078l0-4.375-4.375 0q-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672l4.375 0 0-4.375q0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672 0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078l0 4.375 4.375 0q0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078z"
                                    fill="#ffffff"></path>
                            </svg>
                        </a>
                    <?php endif; ?>

                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- 4. Catalog Pagination Toolbar -->
    <div data-pencil-name="Catalog Pagination Toolbar"
        style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 40px; justify-content: space-between; width: 100%;">
        <div id="paginationText" data-pencil-name="Pagination Showing Text"
            style='box-sizing: border-box; color: #667085; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
            Menampilkan 1-6 dari 6 course pilihan
        </div>
        <div data-pencil-name="Page Buttons Group"
            style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; width: fit-content;">
            <div data-pencil-name="Prev Page Button"
                style="align-items: center; background-color: #f8fafc; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; opacity: 0.6; outline-offset: -0.5px; outline: 1px solid #eaecf0; padding: 6px 12px; width: fit-content; cursor: default;">
                <svg data-pencil-name="Prev Icon" data-icon-name="caret-left" data-icon-set="phosphor"
                    viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                    xmlns="http://www.w3.org/2000/svg"
                    style="box-sizing: border-box; flex-shrink: 0; height: 13px; width: 13px;">
                    <path
                        d="M8.75 11.8125q-0.16406 0-0.32813-0.10938l-4.375-4.375q-0.10938-0.16406-0.10937-0.32812 0-0.16406 0.10937-0.32813l4.375-4.375q0.16406-0.10938 0.32813-0.08203 0.16406 0.02734 0.27344 0.13672 0.10938 0.10938 0.13672 0.27344 0.02734 0.16406-0.08204 0.32812l-4.10156 4.04688 4.10156 4.04688q0.10938 0.16406 0.10938 0.32812 0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672z"
                        fill="#98a2b3"></path>
                </svg>
                <div data-pencil-name="Prev Text"
                    style='box-sizing: border-box; color: #98a2b3; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 500; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                    Sebelumnya
                </div>
            </div>
            <div data-pencil-name="Page 1 Active"
                style="align-items: center; background-color: #2872fa; border-radius: 6px; box-shadow: 0px 2px 4px rgba(40, 114, 250, 0.2); box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 32px; justify-content: center; width: 32px; cursor: pointer;">
                <div data-pencil-name="P1 Text"
                    style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                    1
                </div>
            </div>
            <div data-pencil-name="Page 2"
                style="align-items: center; background-color: #ffffff; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 32px; justify-content: center; outline-offset: -0.5px; outline: 1px solid #dfe3ea; width: 32px; cursor: pointer;">
                <div data-pencil-name="P2 Text"
                    style='box-sizing: border-box; color: #344054; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                    2
                </div>
            </div>
            <div data-pencil-name="Next Page Button"
                style="align-items: center; background-color: #ffffff; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: 32px; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 0px 12px; width: fit-content; cursor: pointer;">
                <div data-pencil-name="Next Text"
                    style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                    Selanjutnya
                </div>
                <svg data-pencil-name="Next Icon" data-icon-name="caret-right" data-icon-set="phosphor"
                    viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                    xmlns="http://www.w3.org/2000/svg"
                    style="box-sizing: border-box; flex-shrink: 0; height: 13px; width: 13px;">
                    <path
                        d="M5.25 11.8125q-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.10938-0.32813l4.10156-4.04687-4.10156-4.04688q-0.10938-0.16406-0.08204-0.32812 0.02734-0.16406 0.13672-0.27344 0.10938-0.10938 0.27344-0.13672 0.16406-0.02734 0.32813 0.08203l4.375 4.375q0.10938 0.16406 0.10937 0.32813 0 0.16406-0.10937 0.32812l-4.375 4.375q-0.16406 0.10938-0.32813 0.10938z"
                        fill="#2872fa"></path>
                </svg>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('catalogSearchInput');
    const categoryFilter = document.getElementById('categoryFilter');
    const sortOrder = document.getElementById('sortOrder');
    const cards = Array.from(document.querySelectorAll('.course-catalog-card'));
    const paginationText = document.getElementById('paginationText');

    function filterCourses() {
        const query = (searchInput.value || '').trim().toLowerCase();
        const selectedCat = (categoryFilter.value || '').trim().toUpperCase();

        let visibleCount = 0;

        cards.forEach(card => {
            const title = card.getAttribute('data-title') || '';
            const code = (card.getAttribute('data-code') || '').toLowerCase();
            const instructor = card.getAttribute('data-instructor') || '';
            const category = (card.getAttribute('data-category') || '').toUpperCase();

            const matchesQuery = !query || title.includes(query) || code.includes(query) || instructor.includes(query);
            const matchesCategory = !selectedCat || category === selectedCat;

            if (matchesQuery && matchesCategory) {
                card.style.display = 'flex';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        if (paginationText) {
            paginationText.textContent = 'Menampilkan 1-' + visibleCount + ' dari ' + visibleCount + ' course pilihan';
        }
    }

    if (searchInput) {
        searchInput.addEventListener('input', filterCourses);
    }
    if (categoryFilter) {
        categoryFilter.addEventListener('change', filterCourses);
    }
});
</script>
