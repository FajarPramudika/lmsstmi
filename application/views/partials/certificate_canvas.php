<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$cert_no = isset($cert['certificate_no']) ? $cert['certificate_no'] : 'DL-2026-000001';
$recipient = isset($cert['recipient_name']) ? $cert['recipient_name'] : 'Budi Santoso, S.T.';
$course_title = isset($cert['course_title']) ? $cert['course_title'] : 'Digital Product Fundamentals';
$course_code = isset($cert['course_code']) ? $cert['course_code'] : 'DP-101';
$instructor = isset($cert['instructor_name']) ? $cert['instructor_name'] : 'Andi Setiawan, S.Kom.';
$instructor_title = isset($cert['instructor_title']) ? $cert['instructor_title'] : 'Lead Instructor & PM Specialist';
$score = isset($cert['exam_score']) ? $cert['exam_score'] : '85';
$hours = isset($cert['total_hours']) ? $cert['total_hours'] : 15;
$verify_url = base_url('verify/' . $cert_no);
?>
<!-- Official Certificate Canvas matching design.pen DSG:uUy7X -->
<div class="cert-canvas-wrap">
    <div class="cert-inner-bezel">
        <!-- Certificate Header Row -->
        <div style="display:flex; justify-content:space-between; align-items:center;">
            <div style="display:flex; align-items:center; gap:8px;">
                <div class="brand-emblem" style="width:28px; height:28px; font-size:11px; border-radius:6px;">DL</div>
                <div style="font-size:11px; font-weight:800; color:var(--color-text-main); letter-spacing:0.5px;">
                    DIGITAL LEARN PLATFORM • STMI
                </div>
            </div>
            <div style="font-size:12px; font-weight:800; color:var(--color-primary); letter-spacing:0.5px;">
                NO: <?= e($cert_no); ?>
            </div>
        </div>

        <!-- Certificate Center Body -->
        <div style="display:flex; flex-direction:column; align-items:center; text-align:center; gap:8px;">
            <h1 style="font-size:22px; font-weight:900; letter-spacing:1px; color:#0f172a; text-transform:uppercase;">
                Sertifikat Kelulusan Resmi
            </h1>
            <div style="font-size:12px; font-weight:600; color:var(--color-text-muted); font-style:italic;">
                Certificate of Completion &amp; Professional Mastery
            </div>

            <div style="font-size:11px; color:var(--color-text-muted); margin-top:8px;">
                Diberikan dengan bangga kepada:
            </div>

            <div style="font-size:26px; font-weight:800; color:var(--color-text-main); border-bottom:2px solid var(--color-primary); padding:0 24px 4px;">
                <?= e($recipient); ?>
            </div>

            <div style="font-size:12px; color:var(--color-text-secondary); max-width:540px; margin-top:6px; line-height:1.4;">
                Telah berhasil menyelesaikan seluruh kurikulum modul pembelajaran dan dinyatakan <strong>LULUS</strong> evaluasi Ujian Akhir program:
            </div>

            <div style="font-size:18px; font-weight:800; color:var(--color-primary); margin-top:2px;">
                <?= e($course_title); ?> (<?= e($course_code); ?>)
            </div>

            <!-- Score Pill -->
            <div style="margin-top:6px; display:inline-flex; align-items:center; gap:8px; padding:4px 14px; background:var(--blue-50); border:1px solid var(--blue-border); border-radius:var(--radius-pill); font-size:11px; font-weight:700; color:var(--blue-text);">
                <span>Passing: 70</span>
                <span>•</span>
                <span>Skor Ujian: <?= e($score); ?>/100</span>
                <span>•</span>
                <span><?= e($hours); ?> Jam Belajar</span>
            </div>
        </div>

        <!-- Certificate Footer Row -->
        <div style="display:flex; justify-content:space-between; align-items:flex-end; padding-top:10px;">
            <!-- Left: Digital Signature -->
            <div style="display:flex; flex-direction:column; gap:2px; min-width:160px;">
                <div style="font-family:'Courier New', monospace; font-size:16px; font-weight:700; color:#1e293b; font-style:italic; padding-bottom:4px;">
                    <?= e($instructor); ?>
                </div>
                <div style="width:140px; height:1px; background-color:#334155; margin-bottom:2px;"></div>
                <div style="font-size:11px; font-weight:700; color:var(--color-text-main);"><?= e($instructor); ?></div>
                <div style="font-size:10px; color:var(--color-text-muted);"><?= e($instructor_title); ?></div>
            </div>

            <!-- Center: Verified Hologram Seal -->
            <div class="cert-seal">
                <?= icon('shield-check', 'icon-sm', 'style="color:#f59e0b;"'); ?>
                <span class="cert-seal-text">VERIFIED</span>
            </div>

            <!-- Right: Dynamic QR Code Box -->
            <div style="display:flex; align-items:center; gap:10px;">
                <div style="width:52px; height:52px; background:#ffffff; border:1px solid #cbd5e1; border-radius:6px; padding:4px; display:flex; align-items:center; justify-content:center;">
                    <!-- Static Scalable QR Icon Replica -->
                    <svg viewBox="0 0 24 24" width="44" height="44" fill="#0f172a">
                        <path d="M2,2H10V10H2V2M4,4V8H8V4H4M14,2H22V10H14V2M16,4V8H20V4H16M2,14H10V22H2V14M4,16V20H8V16H4M18,14V18H22V14H18M14,14H16V16H14V14M16,16H18V18H16V16M14,18H16V20H14V18M18,20H22V22H18V20M14,20H16V22H14V20M20,18H22V20H20V18Z"/>
                    </svg>
                </div>
                <div style="display:flex; flex-direction:column; gap:2px; font-size:10px;">
                    <span style="font-weight:700; color:var(--color-text-main);">Pindai QR Verifikasi</span>
                    <span style="color:var(--color-text-muted); font-size:9px;"><?= e($cert_no); ?></span>
                    <span style="color:var(--emerald); font-weight:700;">Status: Sah &amp; Valid ✓</span>
                </div>
            </div>
        </div>
    </div>
</div>
