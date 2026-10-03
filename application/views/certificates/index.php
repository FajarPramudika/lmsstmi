<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$certificates = isset($certificates) ? $certificates : array(
    array(
        'id'          => 'DL-2026-000001',
        'code'        => 'DP-101',
        'title'       => 'Digital Product Fundamentals',
        'category'    => 'PRODUCT MANAGEMENT',
        'cat_class'   => 'badge-primary',
        'issue_date'  => '14 Oktober 2026',
        'score'       => 85,
        'attempt'     => 'Attempt 1 dari 3'
    ),
    array(
        'id'          => 'DL-2026-000042',
        'code'        => 'UI-301',
        'title'       => 'UI/UX Design Principles',
        'category'    => 'DESIGN & CREATIVE',
        'cat_class'   => 'badge-rose',
        'issue_date'  => '28 September 2026',
        'score'       => 92,
        'attempt'     => 'Attempt 1 dari 3'
    ),
    array(
        'id'          => 'DL-2026-000088',
        'code'        => 'DA-201',
        'title'       => 'Data Analytics Essentials',
        'category'    => 'DATA SCIENCE',
        'cat_class'   => 'badge-emerald',
        'issue_date'  => '15 Agustus 2026',
        'score'       => 78,
        'attempt'     => 'Attempt 2 dari 3'
    ),
);
?>

<div style="display:flex; flex-direction:column; gap:20px;">
    <!-- 1. Certificates Header Row matching design.pen DSG:Q4mEM -->
    <div style="display:flex; justify-content:space-between; align-items:flex-start; flex-wrap:wrap; gap:16px;">
        <div>
            <h1 style="font-size:22px; font-weight:800; color:var(--color-text-main); margin-bottom:4px;">
                Koleksi Sertifikat Digital
            </h1>
            <p style="font-size:13px; color:var(--color-text-secondary); margin:0;">
                Kredensial resmi yang diterbitkan setelah menyelesaikan seluruh modul &amp; lulus Ujian Akhir dengan standar industri vokasi.
            </p>
        </div>

        <div style="display:flex; align-items:center; gap:8px;">
            <span class="badge badge-emerald" style="padding:6px 14px; font-size:12px; font-weight:700;">
                <?= icon('seal-check', 'icon-xs'); ?>
                <span>3 Sertifikat Diterbitkan</span>
            </span>
            <span class="badge badge-primary" style="padding:6px 14px; font-size:12px; font-weight:700;">
                <?= icon('shield-check', 'icon-xs'); ?>
                <span>Verifikasi Publik Aktif</span>
            </span>
        </div>
    </div>

    <!-- 2. Filter & Sort Toolbar matching design.pen DSG:q6QJju -->
    <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px; padding:12px 16px; background:#ffffff; border:1px solid #dfe3ea; border-radius:12px;">
        <div style="display:flex; align-items:center; gap:8px; flex-wrap:wrap;">
            <button type="button" class="btn btn-sm btn-primary" style="border-radius:var(--radius-pill); padding:4px 14px; font-weight:700;">
                Semua (3)
            </button>
            <button type="button" class="btn btn-sm btn-ghost" style="border-radius:var(--radius-pill); padding:4px 14px; font-weight:600; color:var(--color-text-secondary);">
                Product Management (1)
            </button>
            <button type="button" class="btn btn-sm btn-ghost" style="border-radius:var(--radius-pill); padding:4px 14px; font-weight:600; color:var(--color-text-secondary);">
                UI/UX Design (1)
            </button>
            <button type="button" class="btn btn-sm btn-ghost" style="border-radius:var(--radius-pill); padding:4px 14px; font-weight:600; color:var(--color-text-secondary);">
                Data Science (1)
            </button>
        </div>

        <div style="display:flex; align-items:center; gap:8px;">
            <span style="font-size:12px; color:var(--color-text-muted);">Urutan:</span>
            <select class="form-input form-input-sm" style="width:auto; font-weight:600; font-size:12px; padding:4px 10px;">
                <option selected>Terbaru Diterbitkan ↓</option>
                <option>Nama Course (A-Z)</option>
                <option>Nilai Ujian Tertinggi</option>
            </select>
        </div>
    </div>

    <!-- 3. Minimalist Certificates 3-Card Grid matching design.pen DSG:Koe6n -->
    <div style="display:grid; grid-template-columns: repeat(auto-fill, minmax(340px, 1fr)); gap:24px;">
        <?php foreach ($certificates as $cert): ?>
            <!-- Individual Minimalist Card (356px x 220px) matching DSG:p9VEE -->
            <div style="background:#ffffff; border:1px solid #dfe3ea; border-radius:14px; padding:22px; display:flex; flex-direction:column; justify-content:space-between; min-height:220px; box-shadow:var(--shadow-xs); transition:transform 0.2s ease, box-shadow 0.2s ease;">
                <!-- Card Header: Category & Shield Icon matching DSG:f4Hc2 -->
                <div>
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:12px;">
                        <span class="badge <?= $cert['cat_class']; ?>" style="font-size:10px; font-weight:800; letter-spacing:0.5px;">
                            <?= e($cert['category']); ?>
                        </span>
                        <div style="color:var(--color-primary);"><?= icon('shield-check', 'icon-sm'); ?></div>
                    </div>

                    <!-- Course Title matching DSG:G5T44O -->
                    <h2 style="font-size:17px; font-weight:800; color:var(--color-text-main); margin:0 0 8px 0; line-height:1.3;">
                        <?= e($cert['title']); ?>
                    </h2>

                    <!-- Issue Date matching DSG:O8wqG -->
                    <div style="display:flex; align-items:center; gap:6px; font-size:12px; color:var(--color-text-muted);">
                        <?= icon('clock-countdown', 'icon-xs'); ?>
                        <span>Diterbitkan: <strong><?= e($cert['issue_date']); ?></strong></span>
                    </div>
                </div>

                <!-- Action Buttons matching DSG:AwJYY -->
                <div style="display:flex; align-items:center; gap:10px; margin-top:18px; padding-top:14px; border-top:1px solid #f1f5f9;">
                    <a href="#" onclick="alert('Mengunduh PDF Sertifikat <?= e($cert['code']); ?>...'); return false;" class="btn btn-secondary btn-sm" style="flex:1; justify-content:center; font-weight:700;">
                        <?= icon('download-simple', 'icon-xs'); ?>
                        <span>Unduh PDF</span>
                    </a>
                    <a href="<?= base_url('verify/' . $cert['id']); ?>" class="btn btn-primary btn-sm" style="flex:1.2; justify-content:center; font-weight:700;">
                        <span>Lihat Sertifikat</span>
                        <?= icon('caret-right', 'icon-xs'); ?>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
