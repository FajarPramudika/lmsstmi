<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Article Material Learning Workspace matching design.pen DSG:k5KcIm -->

<!-- Left: Reusable Curriculum Playlist Drawer -->
<?php $this->load->view('partials/playlist_drawer', array('active_item' => 6)); ?>

<!-- Right: Article Workspace Column (976px) -->
<div class="learn-workspace">
    <!-- 1. Article Header Card matching design.pen DSG:mq9b1 -->
    <div class="card" style="padding:16px 22px; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px;">
        <div>
            <span class="overline" style="color:var(--color-primary); font-weight:800;">
                MODUL 4 &bull; MATERI 6 DARI 6 (ARTIKEL TEKS)
            </span>
            <h1 style="font-size:18px; font-weight:800; color:var(--color-text-main); margin-top:2px;">
                6. Handover Desain ke Engineering
            </h1>
        </div>

        <span class="badge badge-emerald">
            <?= icon('check-circle', 'icon-xs'); ?>
            <span>Selesai Dibaca (Hingga Akhir Artikel) ✓</span>
        </span>
    </div>

    <!-- 2. Article Reader Box matching design.pen DSG:S1u6SD -->
    <div class="card" style="overflow:hidden; padding:0;">
        <!-- Dark Cover Banner matching design.pen DSG:q29Ri6 -->
        <div style="background-color:var(--slate-900); padding:32px 36px; color:#ffffff;">
            <div style="font-size:11px; font-weight:800; color:var(--color-primary); letter-spacing:1px; text-transform:uppercase; margin-bottom:8px;">
                DOKUMENTASI PRODUK &bull; MODUL 4.6
            </div>
            <h2 style="font-size:22px; font-weight:800; color:#ffffff; margin-bottom:8px; line-height:1.3;">
                Panduan Praktis Handover Desain MVP ke Engineering
            </h2>
            <div style="font-size:13px; color:var(--slate-400);">
                Ditulis oleh <strong>Andi Setiawan, S.Kom.</strong> (Senior PM) &bull; Estimasi Baca: 10 Menit
            </div>
        </div>

        <!-- Article Body Content -->
        <div style="padding:32px 36px; font-size:14px; color:var(--color-text-body); line-height:1.7;">
            <h3 style="font-size:16px; font-weight:800; color:var(--color-text-main); margin-bottom:8px;">
                1. Mengapa Handover Desain Menjadi Titik Kritis?
            </h3>
            <p style="margin-bottom:18px;">
                Banyak kegagalan rilis MVP bukan disebabkan oleh minimnya ide, melainkan adanya celah komunikasi (<em>gap</em>) antara spesifikasi desain dan pemahaman tim perekayasa (<em>software engineers</em>). Handover yang efektif memastikan setiap alur dan status antarmuka dapat diimplementasikan tanpa ambiguitas.
            </p>

            <h3 style="font-size:16px; font-weight:800; color:var(--color-text-main); margin-bottom:8px;">
                2. Checklist Esensial Sebelum Sesi Walkthrough:
            </h3>
            <div style="display:flex; flex-direction:column; gap:10px; margin-bottom:20px;">
                <div style="display:flex; align-items:center; gap:10px; padding:10px 14px; background:var(--slate-100); border-radius:var(--radius-md);">
                    <span style="color:var(--color-primary);"><?= icon('check-circle', 'icon-sm'); ?></span>
                    <span><strong>Design Tokens &amp; Komponen:</strong> Seluruh warna, typography scale, dan button variants telah dipetakan ke CSS tokens.</span>
                </div>
                <div style="display:flex; align-items:center; gap:10px; padding:10px 14px; background:var(--slate-100); border-radius:var(--radius-md);">
                    <span style="color:var(--color-primary);"><?= icon('check-circle', 'icon-sm'); ?></span>
                    <span><strong>User Story &amp; Kriteria Penerimaan:</strong> Kriteria DoD (Definition of Done) tercantum jelas per modul.</span>
                </div>
                <div style="display:flex; align-items:center; gap:10px; padding:10px 14px; background:var(--slate-100); border-radius:var(--radius-md);">
                    <span style="color:var(--color-primary);"><?= icon('check-circle', 'icon-sm'); ?></span>
                    <span><strong>Exception Flows &amp; Edge Cases:</strong> Status loading, kosong (empty state), dan pesan kegagalan telah dirancang.</span>
                </div>
            </div>

            <!-- Insight Callout Box -->
            <div style="background-color:var(--color-primary-soft); border-left:4px solid var(--color-primary); padding:14px 18px; border-radius:0 var(--radius-md) var(--radius-md) 0; margin-bottom:24px;">
                <strong style="color:var(--color-primary-dark);">💡 Insight PM:</strong>
                <p style="font-size:13px; color:var(--color-text-main); margin:4px 0 0;">
                    Jadwalkan sesi walkthrough langsung selama 30 menit bersama Tech Lead untuk meninjau kelayakan teknis sebelum sprint pengerjaan dimulai.
                </p>
            </div>

            <!-- Sentinel End of Article Confirmation -->
            <div style="background-color:var(--emerald-50); border:1px solid var(--emerald-border); border-radius:var(--radius-md); padding:14px 18px; display:flex; justify-content:space-between; align-items:center;">
                <div style="display:flex; align-items:center; gap:10px; color:#064e3b; font-weight:700;">
                    <?= icon('check-circle', 'icon-sm', 'style="color:var(--emerald);"'); ?>
                    <span>Anda telah mencapai akhir artikel (Syarat BRD Selesai Terpenuhi)</span>
                </div>
                <span class="badge badge-emerald">Modul 4 Selesai 100% ✓</span>
            </div>
        </div>
    </div>

    <!-- 3. Action Bar matching design.pen DSG:KHvml -->
    <div class="card" style="padding:14px 20px; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px;">
        <a href="<?= base_url('learn/digital-product-fundamentals/m/2'); ?>" class="btn btn-secondary btn-sm">
            <?= icon('arrow-left', 'icon-xs'); ?>
            <span>Kembali ke Dokumen PDF</span>
        </a>

        <a href="<?= base_url('courses/digital-product-fundamentals'); ?>" class="btn btn-primary btn-sm">
            <span>Selesaikan Modul 4 &amp; Buka Modul 5</span>
            <?= icon('arrow-right', 'icon-xs'); ?>
        </a>
    </div>
</div>
