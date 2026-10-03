<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$cert_no = isset($cert['certificate_no']) ? $cert['certificate_no'] : 'DL-2026-000001';
$recipient = isset($cert['recipient_name']) ? $cert['recipient_name'] : 'Budi Santoso, S.T.';
$course_title = isset($cert['course_title']) ? $cert['course_title'] : 'Digital Product Fundamentals';
$course_code = isset($cert['course_code']) ? $cert['course_code'] : 'DP-101';
$issue_date = isset($cert['issue_date']) ? $cert['issue_date'] : '14 Oktober 2026, 14:35 WIB';
$score = isset($cert['exam_score']) ? $cert['exam_score'] : 85;
$attempt = isset($cert['attempt']) ? $cert['attempt'] : 'Attempt 1 dari 3 (Tertinggi)';
$status = isset($cert['status']) ? $cert['status'] : 'Aktif & Sah ✓';
$verify_url = base_url('verify/' . $cert_no);
?>

<div style="max-width:1280px; margin:24px auto 48px; padding:0 24px; display:flex; flex-direction:column; gap:20px;">
    <!-- 1. Verification Hero Banner matching design.pen DSG:bHyYD -->
    <div style="background:#f0fdf4; border:1.5px solid #86efac; border-radius:14px; padding:18px 24px; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:16px;">
        <div style="display:flex; align-items:center; gap:16px;">
            <div style="width:48px; height:48px; border-radius:12px; background:#dcfce7; border:1px solid #86efac; display:flex; align-items:center; justify-content:center; color:#059669; flex-shrink:0;">
                <?= icon('shield-check', 'icon-md'); ?>
            </div>
            <div style="display:flex; flex-direction:column; gap:3px;">
                <div style="display:flex; align-items:center; gap:8px;">
                    <span class="badge badge-emerald" style="font-size:10px; font-weight:800; letter-spacing:0.5px;">
                        KREDENSIAL RESMI DIVERIFIKASI ✓
                    </span>
                    <span style="font-size:11px; font-weight:700; color:var(--emerald);">ID: <?= e($cert_no); ?></span>
                </div>
                <h1 style="font-size:16px; font-weight:800; color:#064e3b; margin:0;">
                    Sertifikat Kelulusan Sah &amp; Terdaftar di Basis Data Digital Learn
                </h1>
                <p style="font-size:12px; color:#047857; margin:0;">
                    Diterbitkan otomatis pada <?= e($issue_date); ?> &bull; Validitas Resmi Seumur Hidup
                </p>
            </div>
        </div>

        <!-- Banner Action Buttons matching DSG:YjymB -->
        <div style="display:flex; align-items:center; gap:10px; flex-wrap:wrap;">
            <a href="#" onclick="alert('Mengunduh berkas PDF resmi beresolusi tinggi...'); return false;" class="btn btn-sm" style="background:#059669; color:#ffffff; font-weight:700; border:none; padding:8px 16px; border-radius:8px;">
                <?= icon('download-simple', 'icon-xs'); ?>
                <span>Unduh PDF Resmi</span>
            </a>
            <button type="button" onclick="navigator.clipboard.writeText('<?= $verify_url; ?>'); alert('Tautan verifikasi berhasil disalin: <?= $verify_url; ?>');" class="btn btn-secondary btn-sm" style="background:#ffffff; border-color:#86efac; color:#065f46; font-weight:700;">
                <?= icon('share-network', 'icon-xs'); ?>
                <span>Salin Link</span>
            </button>
            <a href="https://www.linkedin.com" target="_blank" rel="noopener noreferrer" class="btn btn-sm" style="background:#0a66c2; color:#ffffff; font-weight:700; border:none; padding:8px 14px; border-radius:8px;">
                <span>in Bagikan</span>
            </a>
        </div>
    </div>

    <!-- 2. Two-Column Workspace matching design.pen DSG:mnB34 -->
    <div style="display:grid; grid-template-columns: 1fr 440px; gap:24px; align-items:start;">
        <!-- Left: Certificate Showcase Canvas matching DSG:lC9MW -->
        <div style="background:#ffffff; border:1px solid #dfe3ea; border-radius:16px; padding:20px 24px; box-shadow:var(--shadow-card);">
            <?php $this->load->view('partials/certificate_canvas', array(
                'cert' => array(
                    'certificate_no'   => $cert_no,
                    'recipient_name'   => $recipient,
                    'course_title'     => $course_title,
                    'course_code'      => $course_code,
                    'instructor_name'  => 'Andi Setiawan, S.Kom.',
                    'instructor_title' => 'Lead Instructor & PM Specialist',
                    'exam_score'       => $score,
                    'total_hours'      => 15
                )
            )); ?>
        </div>

        <!-- Right: Verification Sidebar Column matching DSG:ApZTy -->
        <div style="display:flex; flex-direction:column; gap:16px;">
            <!-- 1. Credential Metadata Card matching DSG:BZsOT -->
            <div style="background:#ffffff; border:1px solid #dfe3ea; border-radius:14px; padding:18px 20px; box-shadow:var(--shadow-xs);">
                <div style="display:flex; align-items:center; gap:8px; margin-bottom:14px; padding-bottom:10px; border-bottom:1px solid #f1f5f9;">
                    <div style="color:var(--color-primary);"><?= icon('shield-check', 'icon-sm'); ?></div>
                    <h2 style="font-size:14px; font-weight:800; color:var(--color-text-main); margin:0;">
                        Informasi Validasi Kredensial
                    </h2>
                </div>

                <div style="display:flex; flex-direction:column; gap:10px; font-size:12px;">
                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <span style="color:var(--color-text-muted);">Nama Penerima</span>
                        <span style="font-weight:700; color:var(--color-text-main);"><?= e($recipient); ?></span>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <span style="color:var(--color-text-muted);">Nomor Registrasi</span>
                        <span style="font-weight:800; color:var(--color-primary); font-family:monospace;"><?= e($cert_no); ?></span>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <span style="color:var(--color-text-muted);">Status Sertifikat</span>
                        <span class="badge badge-emerald" style="font-size:11px;"><?= e($status); ?></span>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <span style="color:var(--color-text-muted);">Tanggal Terbit</span>
                        <span style="font-weight:600; color:var(--color-text-secondary);"><?= e($issue_date); ?></span>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <span style="color:var(--color-text-muted);">Hasil Ujian Akhir</span>
                        <span style="font-weight:700; color:#059669;"><?= e($score); ?> / 100 <span style="font-size:10px; color:var(--color-text-muted); font-weight:normal;">(Passing: 70)</span></span>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <span style="color:var(--color-text-muted);">Status Percobaan</span>
                        <span style="font-weight:600; color:var(--color-text-secondary);"><?= e($attempt); ?></span>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <span style="color:var(--color-text-muted);">Kelulusan Modul</span>
                        <span style="font-weight:700; color:var(--emerald);">5 dari 5 Modul (100%) ✓</span>
                    </div>
                </div>
            </div>

            <!-- 2. Competencies Card matching DSG:t4QZU -->
            <div style="background:#ffffff; border:1px solid #dfe3ea; border-radius:14px; padding:18px 20px; box-shadow:var(--shadow-xs);">
                <div style="font-size:13px; font-weight:800; color:var(--color-text-main); margin-bottom:12px;">
                    Kompetensi yang Telah Divalidasi:
                </div>
                <div style="display:flex; flex-direction:column; gap:8px;">
                    <div style="display:flex; align-items:flex-start; gap:8px; font-size:12px; color:var(--color-text-secondary);">
                        <div style="color:var(--emerald); flex-shrink:0; margin-top:1px;"><?= icon('check-circle', 'icon-xs'); ?></div>
                        <span>User Journey Mapping &amp; Empathy Framework</span>
                    </div>
                    <div style="display:flex; align-items:flex-start; gap:8px; font-size:12px; color:var(--color-text-secondary);">
                        <div style="color:var(--emerald); flex-shrink:0; margin-top:1px;"><?= icon('check-circle', 'icon-xs'); ?></div>
                        <span>Low-Fidelity Wireframing &amp; Prototyping</span>
                    </div>
                    <div style="display:flex; align-items:flex-start; gap:8px; font-size:12px; color:var(--color-text-secondary);">
                        <div style="color:var(--emerald); flex-shrink:0; margin-top:1px;"><?= icon('check-circle', 'icon-xs'); ?></div>
                        <span>RICE Prioritization Scoring Matrix</span>
                    </div>
                    <div style="display:flex; align-items:flex-start; gap:8px; font-size:12px; color:var(--color-text-secondary);">
                        <div style="color:var(--emerald); flex-shrink:0; margin-top:1px;"><?= icon('check-circle', 'icon-xs'); ?></div>
                        <span>Product Handover to Engineering Protocol</span>
                    </div>
                </div>
            </div>

            <!-- 3. Public Access Notice Card matching DSG:T0FQK -->
            <div style="background:#eff6ff; border:1px solid #bfdbfe; border-radius:12px; padding:14px 16px; display:flex; gap:12px; align-items:flex-start;">
                <div style="color:var(--color-primary); flex-shrink:0; margin-top:2px;">
                    <?= icon('info', 'icon-sm'); ?>
                </div>
                <div style="font-size:12px; line-height:1.5;">
                    <strong style="color:var(--color-primary-dark); display:block; margin-bottom:2px;">Verifikasi Publik Terbuka Tanpa Login</strong>
                    <span style="color:#1e40af;">Halaman kredensial ini dapat diakses secara publik oleh tim rekruter HRD, perusahaan mitra, dan institusi akademik tanpa perlu login untuk memvalidasi keaslian dokumen.</span>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Course Revisit Footer Bar matching design.pen DSG:eO5lK -->
    <div style="background:#ffffff; border:1px solid #dfe3ea; border-radius:12px; padding:14px 20px; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:14px;">
        <div style="display:flex; align-items:center; gap:10px;">
            <div style="color:var(--color-primary);"><?= icon('book-open', 'icon-sm'); ?></div>
            <div style="font-size:12px; color:var(--color-text-secondary);">
                Sebagai alumni yang telah lulus program ini, Anda memiliki <strong>hak akses seumur hidup</strong> untuk meninjau kembali seluruh materi kurikulum Modul 1 s.d. 5.
            </div>
        </div>
        <div style="display:flex; align-items:center; gap:10px;">
            <a href="<?= base_url('courses/dp-101'); ?>" class="btn btn-secondary btn-sm" style="font-weight:700;">
                Detail Course
            </a>
            <a href="<?= base_url('learn/dp-101/m/1'); ?>" class="btn btn-primary btn-sm" style="font-weight:700;">
                <span>Buka Review Modul 1</span>
                <?= icon('caret-right', 'icon-xs'); ?>
            </a>
        </div>
    </div>
</div>
