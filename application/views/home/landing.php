<?php
    defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Hero Section High-End matching design-reference/landing.html -->
<section style="background-color: #fafbfc; padding: 48px 0 64px; border-bottom: 1px solid #dfe3ea;">
    <div class="public-container" style="display:flex; align-items:center; justify-content:space-between; gap:40px; flex-wrap:wrap;">
        <!-- Left Column: Typography, Copywriting & Credibility Metrics -->
        <div style="flex:1; min-width:320px; max-width:620px;">


            <h1 style="color:#192a3d; font-family:'Plus Jakarta Sans', system-ui, sans-serif; font-size:42px; font-weight:800; line-height:1.2; letter-spacing:-1px; margin-bottom:18px;">
                Kuasai Keahlian Baru <br>
                <span style="color:#2872fa; font-style:italic;">Secara Terstruktur</span> <br>
                di Digital Learn
            </h1>

            <p style="font-size:16px; line-height:1.65; color:#667085; margin-bottom:28px;">
                Pelajari materi secara bertahap lewat modul interaktif, ikuti evaluasi ujian akhir dengan attempt terukur, dan raih sertifikat digital resmi yang dapat diverifikasi keasliannya secara publik.
            </p>

            <div style="display:flex; align-items:center; gap:14px; margin-bottom:36px; flex-wrap:wrap;">
                <a href="<?php echo base_url('register'); ?>" class="btn btn-primary btn-lg btn-pill" style="box-shadow: 0px 4px 14px rgba(40, 114, 250, 0.35);">
                    <span>Mulai Belajar — Gratis!</span>
                    <?php echo icon('arrow-right', 'icon-sm'); ?>
                </a>
                <a href="#featured-catalog" class="btn btn-secondary btn-lg btn-pill" style="border: 1px solid #dfe3ea;">
                    <span>Jelajahi Course</span>
                    <?php echo icon('arrow-down', 'icon-sm', 'style="color:#2872fa;"'); ?>
                </a>
            </div>

            <!-- Key Metrics Row -->
            <div style="display:flex; align-items:center; gap:36px; border-top:1px solid #dfe3ea; padding-top:24px;">
                <div>
                    <div style="font-size:32px; font-weight:800; color:#192a3d; line-height:1; letter-spacing:-0.5px;">50+</div>
                    <div style="font-size:13px; color:#667085; font-weight:500; margin-top:4px;">Course Pilihan</div>
                </div>
                <div style="width:1px; height:36px; background-color:#dfe3ea;"></div>
                <div>
                    <div style="font-size:32px; font-weight:800; color:#192a3d; line-height:1; letter-spacing:-0.5px;">3.500+</div>
                    <div style="font-size:13px; color:#667085; font-weight:500; margin-top:4px;">Peserta Aktif</div>
                </div>
                <div style="width:1px; height:36px; background-color:#dfe3ea;"></div>
                <div>
                    <div style="font-size:32px; font-weight:800; color:#10b981; line-height:1; letter-spacing:-0.5px;">100%</div>
                    <div style="font-size:13px; color:#667085; font-weight:500; margin-top:4px;">Sertifikat Terverifikasi</div>
                </div>
            </div>
        </div>

        <!-- Right Column: Visual Composition with people.png & Floating Cards matching landing.html -->
        <div style="flex:1; min-width:320px; max-width:580px; position:relative; min-height:560px; display:flex; align-items:center; justify-content:center;">
            <!-- Main Student Frame -->
            <div style="width:470px; height:520px; border-radius:32px; background-image:url('<?php echo base_url('assets/img/people.png'); ?>'); background-size:cover; background-position:center; box-shadow:0px 16px 36px rgba(16, 24, 40, 0.12); outline:1px solid #dfe6ef; outline-offset:-0.5px; position:relative; z-index:1;"></div>

            <!-- Floating Pill 1: Pembelajaran Bertahap -->
            <div style="position:absolute; top:35px; right:15px; background:#ffffff; border-radius:999px; box-shadow:0px 4px 16px rgba(16, 24, 40, 0.12); outline:1px solid #f1f5f9; padding:6px 14px 6px 8px; display:flex; align-items:center; gap:8px; z-index:3;">
                <div style="width:20px; height:20px; border-radius:10px; background:#2872fa; display:flex; align-items:center; justify-content:center; color:#ffffff;">
                    <?php echo icon('check', 'icon-xs'); ?>
                </div>
                <span style="color:#192a3d; font-size:12px; font-weight:600;">Pembelajaran Bertahap</span>
            </div>

            <!-- Floating Pill 2: Sertifikat Terverifikasi -->
            <div style="position:absolute; top:85px; right:40px; background:#ffffff; border-radius:999px; box-shadow:0px 4px 16px rgba(16, 24, 40, 0.12); outline:1px solid #f1f5f9; padding:6px 14px 6px 8px; display:flex; align-items:center; gap:8px; z-index:3;">
                <div style="width:20px; height:20px; border-radius:10px; background:#2872fa; display:flex; align-items:center; justify-content:center; color:#ffffff;">
                    <?php echo icon('check', 'icon-xs'); ?>
                </div>
                <span style="color:#192a3d; font-size:12px; font-weight:600;">Sertifikat Terverifikasi</span>
            </div>

            <!-- Floating Metric Card 1: 100% -->
            <div style="position:absolute; top:180px; left:0px; background-color:#2872fa; border-radius:20px; box-shadow:0px 12px 28px rgba(40, 114, 250, 0.35); padding:16px; width:140px; height:100px; display:flex; flex-direction:column; justify-content:space-between; z-index:4; color:#ffffff;">
                <div style="font-size:32px; font-weight:800; line-height:1; letter-spacing:-0.5px;">100%</div>
                <div style="font-size:11px; font-weight:500; line-height:14px; opacity:0.95;">Sertifikat Digital Terverifikasi</div>
            </div>

            <!-- Floating Skills Card -->
            <div style="position:absolute; bottom:60px; left:20px; background-color:#ffffff; border-radius:20px; box-shadow:0px 16px 32px rgba(16, 24, 40, 0.12); outline:1px solid #e2e8f0; padding:16px 20px; display:flex; flex-direction:column; gap:10px; z-index:4;">
                <div style="color:#192a3d; font-size:13px; font-weight:700;">Kategori Course Pilihan</div>
                <div style="display:flex; align-items:center; gap:6px; flex-wrap:wrap;">
                    <span style="border-radius:999px; outline:1px solid #2872fa; padding:5px 12px; color:#2872fa; font-size:11px; font-weight:600; background:#ffffff;">+ Product Management</span>
                    <span style="border-radius:999px; outline:1px solid #2872fa; padding:5px 12px; color:#2872fa; font-size:11px; font-weight:600; background:#ffffff;">+ UI/UX Design</span>
                    <span style="border-radius:999px; outline:1px solid #2872fa; padding:5px 12px; color:#2872fa; font-size:11px; font-weight:600; background:#ffffff;">+ Data Analytics</span>
                </div>
            </div>

            <!-- Floating Metric Card 2: 500+ Modul -->
            <div style="position:absolute; bottom:30px; right:10px; background-color:#2872fa; border-radius:20px; box-shadow:0px 12px 28px rgba(40, 114, 250, 0.35); padding:16px; width:155px; height:105px; display:flex; flex-direction:column; justify-content:space-between; z-index:4; color:#ffffff;">
                <div style="font-size:32px; font-weight:800; line-height:1; letter-spacing:-0.5px;">500+</div>
                <div style="font-size:11px; font-weight:500; line-height:14px; opacity:0.95;">Modul &amp; Materi Pembelajaran</div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Courses Section matching landing.html & course-catalog.html -->
<section id="featured-catalog" style="padding: 64px 0 80px; background-color: #ffffff;">
    <div class="public-container" style="display:flex; flex-direction:column; gap:28px;">
        <!-- Catalog Title Header -->
        <div>
            <h2 style="color:#192a3d; font-size:36px; font-weight:800; letter-spacing:-0.8px; margin:0 0 10px 0;">
                Katalog Course Digital
            </h2>
            <p style="color:#667085; font-size:16px; line-height:26px; margin:0; max-width:840px;">
                Pilih course sesuai minat dan kebutuhan belajarmu. Akses materi bertahap, selesaikan kuis evaluasi, dan peroleh sertifikat kompetensi.
            </p>
        </div>

        <!-- Search and Filter Toolbar -->
        <div style="display:flex; align-items:center; justify-content:space-between; gap:16px; flex-wrap:wrap;">
            <!-- Search Box -->
            <div style="display:flex; align-items:center; background:#ffffff; border-radius:10px; box-shadow:0px 1px 3px rgba(16,24,40,0.06); outline:1px solid #dfe3ea; outline-offset:-0.5px; padding:0 16px; height:48px; flex:1; min-width:280px; max-width:620px;">
                <span style="color:#667085; margin-right:12px; display:flex;">
                    <?php echo icon('magnifying-glass', 'icon-sm'); ?>
                </span>
                <input type="text" placeholder="Cari topik course, keahlian, atau nama instruktur..." style="border:none; outline:none; width:100%; font-family:inherit; font-size:14px; color:#192a3d; background:transparent;">
            </div>

            <!-- Filters Group -->
            <div style="display:flex; align-items:center; gap:12px; flex-wrap:wrap;">
                <!-- Category Filter -->
                <div style="display:flex; align-items:center; background:#ffffff; border-radius:10px; box-shadow:0px 1px 3px rgba(16,24,40,0.06); outline:1px solid #dfe3ea; outline-offset:-0.5px; padding:0 16px; height:48px; gap:10px; cursor:pointer;">
                    <span style="color:#2872fa; display:flex;">
                        <?php echo icon('funnel', 'icon-sm'); ?>
                    </span>
                    <span style="color:#192a3d; font-size:14px; font-weight:600;">Kategori: Semua Course</span>
                    <span style="color:#667085; display:flex;">
                        <?php echo icon('caret-down', 'icon-xs'); ?>
                    </span>
                </div>

                <!-- Sort Filter -->
                <div style="display:flex; align-items:center; background:#ffffff; border-radius:10px; box-shadow:0px 1px 3px rgba(16,24,40,0.06); outline:1px solid #dfe3ea; outline-offset:-0.5px; padding:0 16px; height:48px; gap:10px; cursor:pointer;">
                    <span style="color:#475467; font-size:14px; font-weight:500;">Urutan: Terbaru</span>
                    <span style="color:#667085; display:flex;">
                        <?php echo icon('caret-down', 'icon-xs'); ?>
                    </span>
                </div>
            </div>
        </div>

        <!-- 6 Double-Bezel Course Cards 3-Column Grid -->
        <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(360px, 1fr)); gap:24px;">
            <?php
                $featured_courses = [
                    [
                        'code'              => 'DP-101',
                        'title'             => 'Digital Product Fundamentals',
                        'slug'              => 'digital-product-fundamentals',
                        'category'          => 'PRODUCT MANAGEMENT',
                        'instructor'        => 'Andi Setiawan, S.Kom.',
                        'instructor_role'   => 'Senior Product Manager',
                        'modules_count'     => 5,
                        'duration_hours'    => 15,
                        'status'            => 'available',
                        'short_description' => 'Pelajari dasar manajemen produk digital mulai dari riset kebutuhan pengguna, product discovery, hingga penyusunan roadmap produk.',
                    ],
                    [
                        'code'              => 'DA-201',
                        'title'             => 'Data Analytics Essentials',
                        'slug'              => 'data-analytics-essentials',
                        'category'          => 'DATA SCIENCE',
                        'instructor'        => 'Dian Pratama, M.Sc.',
                        'instructor_role'   => 'Lead Data Scientist',
                        'modules_count'     => 6,
                        'duration_hours'    => 18,
                        'status'            => 'available',
                        'short_description' => 'Fondasi analisis data modern, SQL data extraction, statistik bisnis praktis, dan visualisasi dashboard interaktif.',
                    ],
                    [
                        'code'              => 'UI-301',
                        'title'             => 'UI/UX Design Principles',
                        'slug'              => 'ui-ux-design-principles',
                        'category'          => 'DESIGN',
                        'instructor'        => 'Siti Rahmawati, M.Ds.',
                        'instructor_role'   => 'Principal Product Designer',
                        'modules_count'     => 5,
                        'duration_hours'    => 14,
                        'status'            => 'available',
                        'short_description' => 'Prinsip desain antarmuka modern, atomic design systems, low/high-fidelity wireframing, dan usability testing teruji.',
                    ],
                    [
                        'code'              => 'SC-401',
                        'title'             => 'Supply Chain Digitalization',
                        'slug'              => 'digital-product-fundamentals',
                        'category'          => 'SUPPLY CHAIN',
                        'instructor'        => 'Budi Santoso, M.T.',
                        'instructor_role'   => 'Supply Chain Director',
                        'modules_count'     => 5,
                        'duration_hours'    => 16,
                        'status'            => 'available',
                        'short_description' => 'Transformasi logistik digital, integrasi ERP, inventory predictive tracking, dan manajemen rantai pasok industri 4.0.',
                    ],
                    [
                        'code'              => 'AI-501',
                        'title'             => 'Applied Industrial AI & Automation',
                        'slug'              => 'data-analytics-essentials',
                        'category'          => 'ARTIFICIAL INTELLIGENCE',
                        'instructor'        => 'Ir. Hendra Wijaya, Ph.D.',
                        'instructor_role'   => 'AI Research Engineer',
                        'modules_count'     => 7,
                        'duration_hours'    => 20,
                        'status'            => 'available',
                        'short_description' => 'Penerapan automasi cerdas, computer vision inspeksi kualitas pabrik, dan machine learning praktis untuk operasi industri.',
                    ],
                    [
                        'code'              => 'CS-601',
                        'title'             => 'Cybersecurity in Manufacturing Systems',
                        'slug'              => 'ui-ux-design-principles',
                        'category'          => 'SECURITY',
                        'instructor'        => 'Ahmad Fadhil, M.Kom.',
                        'instructor_role'   => 'Cybersecurity Specialist',
                        'modules_count'     => 5,
                        'duration_hours'    => 15,
                        'status'            => 'available',
                        'short_description' => 'Proteksi sistem OT/IT, protokol mitigasi ancaman jaringan industri, pemenuhan standar regulasi kepatuhan data.',
                    ],
                ];

                foreach ($featured_courses as $c) {
                    $this->load->view('partials/course_card', [
                        'course'  => $c,
                        'variant' => 'catalog',
                    ]);
                }
            ?>
        </div>

        <!-- Pagination Toolbar matching landing.html & course-catalog.html -->
        <?php $this->load->view('partials/pagination', [
                'current_page'    => 1,
                'total_pages'     => 3,
                'pagination_info' => 'Menampilkan 1–6 dari 6 course terdaftar',
        ]); ?>
    </div>
</section>
