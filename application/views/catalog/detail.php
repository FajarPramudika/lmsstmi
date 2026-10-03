<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Course Detail Single-Column Page matching design.pen DSG:w8nyqP -->

<!-- 1. Breadcrumb & Status Row -->
<div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px;">
    <div style="display:flex; align-items:center; gap:8px; font-size:13px; color:var(--color-text-muted);">
        <a href="<?= base_url('my-courses'); ?>" style="color:var(--color-text-muted); font-weight:600;">← Kembali ke Course Saya</a>
        <span>•</span>
        <a href="<?= base_url('courses'); ?>" style="color:var(--color-text-muted);">Katalog</a>
        <span>•</span>
        <span style="color:var(--color-text-main); font-weight:700;">DP-101</span>
    </div>

    <div style="display:flex; align-items:center; gap:8px;">
        <span class="badge pill-product">PRODUCT MANAGEMENT</span>
        <span class="badge badge-info">● Sedang Berjalan (60%)</span>
    </div>
</div>

<!-- 2. Course Header Summary Card matching design.pen DSG:I2Pg9 -->
<div class="card" style="padding:22px; gap:16px;">
    <div style="display:flex; gap:20px; flex-wrap:wrap; align-items:flex-start;">
        <!-- Thumbnail matching course-detail.html -->
        <div style="width:220px; height:125px; border-radius:10px; background-image:linear-gradient(0deg, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0.80) 100%), url('<?= base_url('assets/img/mountain.png'); ?>'); background-size:cover; background-position:center; display:flex; flex-direction:column; justify-content:space-between; padding:8px 10px; flex-shrink:0; box-sizing:border-box;">
            <span style="background-color:#ffffff; border-radius:999px; padding:3px 8px; font-size:9px; font-weight:800; color:#000000; width:fit-content;">PRODUCT MANAGEMENT</span>
            <span style="background-color:rgba(0,0,0,0.5); border-radius:6px; padding:2px 6px; font-size:10px; font-weight:600; color:#ffffff; width:fit-content;">5 Modul • 15 Jam</span>
        </div>

        <!-- Info Column -->
        <div style="flex:1; min-width:280px;">
            <h1 class="heading-h1" style="font-size:1.5rem; margin-bottom:6px;">Digital Product Fundamentals</h1>
            <p style="font-size:14px; color:var(--color-text-muted); line-height:1.5; margin-bottom:12px;">
                Kuasai kerangka kerja produk digital end-to-end, mulai dari riset masalah pengguna, perumusan user journey, wireframing prototyping, hingga peluncuran MVP terukur.
            </p>

            <!-- 6 Metadata Pills -->
            <div style="display:flex; flex-wrap:wrap; gap:8px; font-size:12px;">
                <span class="badge badge-neutral"><?= icon('user', 'icon-xs'); ?> Andi Setiawan, S.Kom.</span>
                <span class="badge badge-neutral"><?= icon('book-open', 'icon-xs'); ?> 5 Modul</span>
                <span class="badge badge-neutral"><?= icon('clock', 'icon-xs'); ?> 15 Jam Belajar</span>
                <span class="badge badge-neutral"><?= icon('question', 'icon-xs'); ?> 6 Checkpoint Quiz</span>
                <span class="badge badge-warning"><?= icon('check-square-offset', 'icon-xs'); ?> Ujian Akhir (Passing 70)</span>
                <span class="badge badge-emerald"><?= icon('seal-check', 'icon-xs'); ?> Sertifikat Terverifikasi</span>
            </div>
        </div>
    </div>

    <!-- Target & Tujuan Pembelajaran (2-Column Grid) -->
    <div style="border-top:1px solid var(--slate-100); padding-top:14px;">
        <div style="font-size:11px; font-weight:800; text-transform:uppercase; letter-spacing:0.06em; color:var(--slate-600); margin-bottom:8px;">
            Target &amp; Tujuan Pembelajaran
        </div>
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:8px; font-size:13px; color:var(--color-text-secondary);">
            <div style="display:flex; align-items:center; gap:8px;">
                <span style="color:var(--emerald);"><?= icon('check-circle', 'icon-xs'); ?></span>
                <span>Memahami siklus hidup produk digital &amp; perumusan MVP</span>
            </div>
            <div style="display:flex; align-items:center; gap:8px;">
                <span style="color:var(--emerald);"><?= icon('check-circle', 'icon-xs'); ?></span>
                <span>Merancang Customer Journey Map &amp; identifikasi titik sentuh</span>
            </div>
            <div style="display:flex; align-items:center; gap:8px;">
                <span style="color:var(--emerald);"><?= icon('check-circle', 'icon-xs'); ?></span>
                <span>Membuat wireframe low-fidelity &amp; validasi kegunaan</span>
            </div>
            <div style="display:flex; align-items:center; gap:8px;">
                <span style="color:var(--emerald);"><?= icon('check-circle', 'icon-xs'); ?></span>
                <span>Prioritisasi fitur dengan RICE framework scoring</span>
            </div>
        </div>
    </div>
</div>

<!-- 3. Progress Overview Banner matching design.pen DSG:bV6sa -->
<div class="card" style="padding:18px 22px;">
    <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:14px;">
        <div style="flex:1; min-width:280px;">
            <div style="display:flex; justify-content:space-between; font-size:13px; font-weight:700; margin-bottom:6px;">
                <span style="color:var(--color-text-main);">Progres Anda: 60% Selesai (3/5 Modul • 8/14 Materi)</span>
                <span style="color:var(--color-primary);">60%</span>
            </div>
            <?= ui_progress(60, 8); ?>
            <div style="font-size:12px; color:var(--color-text-muted); margin-top:6px;">
                Materi aktif saat ini: <strong>Modul 4 &bull; Praktik Wireframe Low-Fidelity (Video)</strong>
            </div>
        </div>

        <div>
            <a href="<?= base_url('learn/digital-product-fundamentals'); ?>" class="btn btn-primary">
                <span>Lanjut Belajar: Modul 4</span>
                <?= icon('arrow-right', 'icon-xs'); ?>
            </a>
        </div>
    </div>
</div>

<!-- 4. Kurikulum Header matching design.pen DSG:PYiX0 -->
<div style="display:flex; justify-content:space-between; align-items:center; margin-top:8px;">
    <div>
        <h2 class="heading-h2" style="font-size:1.125rem;">Kurikulum &amp; Modul Pembelajaran</h2>
        <p style="font-size:13px; color:var(--color-text-muted); margin-top:2px;">
            Alur belajar bertahap: selesaikan setiap materi secara berurutan untuk membuka materi berikutnya.
        </p>
    </div>
    <span class="badge badge-primary">5 Modul &bull; 14 Materi &bull; 1 Ujian Akhir</span>
</div>

<!-- 5. Single Column Modules List -->
<div style="display:flex; flex-direction:column; gap:12px;">
    <!-- Modul 1 (Completed) -->
    <div class="card" style="padding:14px 20px; display:flex; justify-content:space-between; align-items:center;">
        <div style="display:flex; align-items:center; gap:12px;">
            <div style="color:var(--emerald);"><?= icon('check-circle', 'icon-md'); ?></div>
            <div>
                <div style="font-size:14px; font-weight:700; color:var(--color-text-main);">
                    Modul 1: Pengantar Produk Digital &amp; Mindset PM
                </div>
                <div style="font-size:12px; color:var(--color-text-muted);">
                    3 Materi &bull; 3 Jam &bull; Selesai pada 28 September 2026
                </div>
            </div>
        </div>
        <div style="display:flex; align-items:center; gap:10px;">
            <span class="badge badge-emerald">Selesai ✓</span>
            <a href="<?= base_url('learn/digital-product-fundamentals'); ?>" class="btn btn-secondary btn-sm">Akses Ulang</a>
        </div>
    </div>

    <!-- Modul 2 (Completed) -->
    <div class="card" style="padding:14px 20px; display:flex; justify-content:space-between; align-items:center;">
        <div style="display:flex; align-items:center; gap:12px;">
            <div style="color:var(--emerald);"><?= icon('check-circle', 'icon-md'); ?></div>
            <div>
                <div style="font-size:14px; font-weight:700; color:var(--color-text-main);">
                    Modul 2: Market Research &amp; Problem Validation
                </div>
                <div style="font-size:12px; color:var(--color-text-muted);">
                    3 Materi + 1 Pop-up Quiz &bull; 3.5 Jam &bull; Selesai pada 30 September 2026
                </div>
            </div>
        </div>
        <div style="display:flex; align-items:center; gap:10px;">
            <span class="badge badge-emerald">Selesai ✓</span>
            <a href="<?= base_url('learn/digital-product-fundamentals'); ?>" class="btn btn-secondary btn-sm">Akses Ulang</a>
        </div>
    </div>

    <!-- Modul 3 (Completed) -->
    <div class="card" style="padding:14px 20px; display:flex; justify-content:space-between; align-items:center;">
        <div style="display:flex; align-items:center; gap:12px;">
            <div style="color:var(--emerald);"><?= icon('check-circle', 'icon-md'); ?></div>
            <div>
                <div style="font-size:14px; font-weight:700; color:var(--color-text-main);">
                    Modul 3: Product Strategy &amp; Roadmapping
                </div>
                <div style="font-size:12px; color:var(--color-text-muted);">
                    2 Materi + 1 Pop-up Quiz &bull; 3 Jam &bull; Selesai pada 02 Oktober 2026
                </div>
            </div>
        </div>
        <div style="display:flex; align-items:center; gap:10px;">
            <span class="badge badge-emerald">Selesai ✓</span>
            <a href="<?= base_url('learn/digital-product-fundamentals'); ?>" class="btn btn-secondary btn-sm">Akses Ulang</a>
        </div>
    </div>

    <!-- Modul 4 (ACTIVE / EXPANDED ACCORDION) matching design.pen DSG:k0vzZ -->
    <div class="card" style="border:1.5px solid var(--color-primary); overflow:hidden;">
        <!-- Modul 4 Header -->
        <div style="background-color:#f0f7ff; padding:14px 20px; border-bottom:1px solid #d0e1fd; display:flex; justify-content:space-between; align-items:center;">
            <div style="display:flex; align-items:center; gap:12px;">
                <div style="color:var(--color-primary);"><?= icon('play', 'icon-md'); ?></div>
                <div>
                    <div style="font-size:15px; font-weight:800; color:var(--color-primary-dark);">
                        Modul 4: User Journey Mapping &amp; Wireframing
                    </div>
                    <div style="font-size:12px; color:var(--color-text-muted);">
                        6 Item Pembelajaran (3 Selesai &bull; 1 Aktif &bull; 2 Terkunci)
                    </div>
                </div>
            </div>
            <span class="badge badge-primary">Sedang Berjalan ⚡</span>
        </div>

        <!-- 6 Items Sub-list -->
        <div style="padding:16px 20px; display:flex; flex-direction:column; gap:8px;">
            <!-- 4.1 Video (Completed) -->
            <div style="display:flex; justify-content:space-between; align-items:center; padding:10px 14px; background:#ffffff; border:1px solid var(--color-border); border-radius:var(--radius-md);">
                <div style="display:flex; align-items:center; gap:10px;">
                    <span style="color:var(--emerald);"><?= icon('check-circle', 'icon-sm'); ?></span>
                    <span style="font-size:13px; font-weight:600; color:var(--color-text-main);">4.1 Video: Konsep Dasar User Journey Mapping</span>
                    <span style="font-size:11px; color:var(--color-text-muted);">(18:45 min)</span>
                </div>
                <span class="badge badge-emerald">Ditonton 98% ✓</span>
            </div>

            <!-- 4.2 Pop-up Quiz 1 (Completed) -->
            <div style="display:flex; justify-content:space-between; align-items:center; padding:10px 14px; background:#ffffff; border:1px solid var(--color-border); border-radius:var(--radius-md);">
                <div style="display:flex; align-items:center; gap:10px;">
                    <span style="color:var(--emerald);"><?= icon('check-circle', 'icon-sm'); ?></span>
                    <span style="font-size:13px; font-weight:600; color:var(--color-text-main);">4.2 Pop-up Quiz Checkpoint 1: Pemahaman Journey</span>
                    <span style="font-size:11px; color:var(--color-text-muted);">(3 Soal)</span>
                </div>
                <span class="badge badge-emerald">Dijawab Benar ✓</span>
            </div>

            <!-- 4.3 PDF Document (Completed) -->
            <div style="display:flex; justify-content:space-between; align-items:center; padding:10px 14px; background:#ffffff; border:1px solid var(--color-border); border-radius:var(--radius-md);">
                <div style="display:flex; align-items:center; gap:10px;">
                    <span style="color:var(--emerald);"><?= icon('check-circle', 'icon-sm'); ?></span>
                    <span style="font-size:13px; font-weight:600; color:var(--color-text-main);">4.3 Dokumen PDF: Template Customer Journey Map</span>
                    <span style="font-size:11px; color:var(--color-text-muted);">(14 Halaman)</span>
                </div>
                <span class="badge badge-emerald">Selesai Dibaca ✓</span>
            </div>

            <!-- 4.4 Video (CURRENT ACTIVE) -->
            <div style="display:flex; justify-content:space-between; align-items:center; padding:10px 14px; background:var(--blue-50); border:1.5px solid var(--color-primary); border-radius:var(--radius-md);">
                <div style="display:flex; align-items:center; gap:10px;">
                    <span style="color:var(--color-primary);"><?= icon('play', 'icon-sm'); ?></span>
                    <span style="font-size:13px; font-weight:700; color:var(--color-primary);">4.4 Video: Praktik Wireframe Low-Fidelity</span>
                    <span style="font-size:11px; color:var(--color-primary);">(24:30 min)</span>
                </div>
                <a href="<?= base_url('learn/digital-product-fundamentals/m/3'); ?>" class="btn btn-primary btn-sm">
                    <span>▶ Lanjutkan Menonton (45%)</span>
                </a>
            </div>

            <!-- 4.5 Pop-up Quiz 2 (Locked) -->
            <div style="display:flex; justify-content:space-between; align-items:center; padding:10px 14px; background:#fafbfc; border:1px solid var(--slate-200); border-radius:var(--radius-md); opacity:0.75;">
                <div style="display:flex; align-items:center; gap:10px;">
                    <span style="color:var(--slate-500);"><?= icon('lock', 'icon-sm'); ?></span>
                    <span style="font-size:13px; font-weight:500; color:var(--slate-600);">4.5 Pop-up Quiz Checkpoint 2: Validasi Wireframe</span>
                </div>
                <span class="badge badge-neutral">Terkunci 🔒</span>
            </div>

            <!-- 4.6 Article (Locked) -->
            <div style="display:flex; justify-content:space-between; align-items:center; padding:10px 14px; background:#fafbfc; border:1px solid var(--slate-200); border-radius:var(--radius-md); opacity:0.75;">
                <div style="display:flex; align-items:center; gap:10px;">
                    <span style="color:var(--slate-500);"><?= icon('lock', 'icon-sm'); ?></span>
                    <span style="font-size:13px; font-weight:500; color:var(--slate-600);">4.6 Artikel Teks: Handover Desain ke Engineering</span>
                    <span style="font-size:11px; color:var(--color-text-muted);">(Baca 10 min)</span>
                </div>
                <span class="badge badge-neutral">Terkunci 🔒</span>
            </div>
        </div>
    </div>

    <!-- Modul 5 (Locked) -->
    <div class="card" style="padding:14px 20px; display:flex; justify-content:space-between; align-items:center; background:#fafbfc; opacity:0.75;">
        <div style="display:flex; align-items:center; gap:12px;">
            <div style="color:var(--slate-500);"><?= icon('lock', 'icon-md'); ?></div>
            <div>
                <div style="font-size:14px; font-weight:600; color:var(--slate-700);">
                    Modul 5: Usability Testing &amp; Peluncuran MVP
                </div>
                <div style="font-size:12px; color:var(--color-text-muted);">
                    3 Materi &bull; 2.5 Jam &bull; Terkunci hingga Modul 4 tuntas
                </div>
            </div>
        </div>
        <span class="badge badge-neutral">Terkunci 🔒</span>
    </div>
</div>

<!-- 6. Seksi Ujian Akhir matching design.pen DSG:Udofg -->
<div class="card" style="padding:20px; background:#ffffff;">
    <div style="display:flex; justify-content:space-between; align-items:flex-start; flex-wrap:wrap; gap:16px;">
        <div style="display:flex; gap:14px;">
            <div style="width:44px; height:44px; border-radius:10px; background:var(--color-warning-soft); color:var(--color-warning); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                <?= icon('check-square-offset', 'icon-md'); ?>
            </div>
            <div>
                <div style="display:flex; align-items:center; gap:8px;">
                    <h3 style="font-size:16px; font-weight:800; color:var(--color-text-main); margin:0;">
                        Ujian Akhir (Final Assessment)
                    </h3>
                    <span class="badge badge-warning">Terkunci 🔒</span>
                </div>
                <div style="font-size:13px; color:var(--color-text-muted); margin-top:4px;">
                    Selesaikan Modul 1 sampai 5 untuk membuka akses lembar ujian akhir.
                </div>
                <div style="display:flex; flex-wrap:wrap; gap:10px; margin-top:8px; font-size:12px; color:var(--color-text-secondary);">
                    <span>&bull; 25 Soal Pilihan Ganda</span>
                    <span>&bull; Durasi 45 Menit (Auto-Submit)</span>
                    <span>&bull; Passing Grade 70%</span>
                    <span>&bull; Maks 3 Attempt (Nilai Tertinggi)</span>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-secondary disabled" disabled>
            <?= icon('lock', 'icon-xs'); ?>
            <span>Ujian Belum Terbuka</span>
        </button>
    </div>
</div>

<!-- 7. Seksi Sertifikat Digital matching design.pen DSG:iwcr0 -->
<div class="card" style="padding:20px; background:#ffffff;">
    <div style="display:flex; justify-content:space-between; align-items:flex-start; flex-wrap:wrap; gap:16px;">
        <div style="display:flex; gap:14px;">
            <div style="width:44px; height:44px; border-radius:10px; background:var(--color-primary-soft); color:var(--color-primary); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                <?= icon('medal', 'icon-md'); ?>
            </div>
            <div>
                <div style="display:flex; align-items:center; gap:8px;">
                    <h3 style="font-size:16px; font-weight:800; color:var(--color-text-main); margin:0;">
                        Sertifikat Digital Resmi
                    </h3>
                    <span class="badge badge-neutral">Belum Terbit 🔒</span>
                </div>
                <div style="font-size:13px; color:var(--color-text-muted); margin-top:4px;">
                    Diterbitkan otomatis pasca kelulusan ujian akhir dan penyelesaian 100% modul.
                </div>
                <div style="font-size:12px; color:var(--color-primary); font-weight:600; margin-top:6px;">
                    Format: PDF Resmi &bull; ID Unik (DL-2026-XXXXXX) &bull; QR Verifikasi Publik Tanpa Login
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-outline disabled" disabled>
            <?= icon('medal', 'icon-xs'); ?>
            <span>Lihat Sertifikat</span>
        </button>
    </div>
</div>
