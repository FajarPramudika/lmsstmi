<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    $cert_no      = isset($cert['certificate_no']) ? $cert['certificate_no'] : 'DL-2026-000001';
    $recipient    = isset($cert['recipient_name']) ? $cert['recipient_name'] : 'Budi Santoso, S.T.';
    $course_title = isset($cert['course_title']) ? $cert['course_title'] : 'Digital Product Fundamentals';
    $course_code  = isset($cert['course_code']) ? $cert['course_code'] : 'DP-101';
    $issue_date   = isset($cert['issue_date']) ? $cert['issue_date'] : '14 Oktober 2026, 14:35 WIB';
    $score        = isset($cert['exam_score']) ? $cert['exam_score'] : 85;
    $attempt      = isset($cert['attempt']) ? $cert['attempt'] : 'Attempt 1 dari 3 (Tertinggi)';
    $status       = isset($cert['status']) ? $cert['status'] : 'Aktif & Sah ✓';
    $verify_url   = base_url('verify/' . $cert_no);
?>

<div style="max-width:1280px; margin:32px auto 48px; padding:0 24px;">
    <!-- Two-Column Workspace matching design.pen DSG:mnB34 -->
    <div class="verify-grid-layout">
        <!-- Left: Certificate Showcase Canvas matching DSG:lC9MW -->
        <div style="background:#ffffff; border:1px solid #dfe3ea; border-radius:16px; padding:20px 24px; box-shadow:var(--shadow-card);">
            <?php $this->load->view('partials/certificate_canvas', [
                    'cert' => [
                        'certificate_no'   => $cert_no,
                        'recipient_name'   => $recipient,
                        'course_title'     => $course_title,
                        'course_code'      => $course_code,
                        'instructor_name'  => 'Andi Setiawan, S.Kom.',
                        'instructor_title' => 'Lead Instructor & PM Specialist',
                        'exam_score'       => $score,
                        'total_hours'      => 15,
                    ],
            ]); ?>
        </div>

        <!-- Right: Verification Sidebar Column matching DSG:ApZTy -->
        <div style="display:flex; flex-direction:column; gap:16px;">
            <!-- 1. Credential Metadata Card matching DSG:BZsOT -->
            <div style="background:#ffffff; border:1px solid #dfe3ea; border-radius:14px; padding:18px 20px; box-shadow:var(--shadow-xs);">
                <div style="display:flex; align-items:center; gap:8px; margin-bottom:14px; padding-bottom:10px; border-bottom:1px solid #f1f5f9;">
                    <div style="color:var(--color-primary);"><?php echo icon('shield-check', 'icon-sm'); ?></div>
                    <h2 style="font-size:14px; font-weight:800; color:var(--color-text-main); margin:0;">
                        Informasi Validasi Kredensial
                    </h2>
                </div>

                <div style="display:flex; flex-direction:column; gap:10px; font-size:12px;">
                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <span style="color:var(--color-text-muted);">Nama Penerima</span>
                        <span style="font-weight:700; color:var(--color-text-main);"><?php echo e($recipient); ?></span>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <span style="color:var(--color-text-muted);">Nomor Registrasi</span>
                        <span style="font-weight:800; color:var(--color-primary); font-family:monospace;"><?php echo e($cert_no); ?></span>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <span style="color:var(--color-text-muted);">Status Sertifikat</span>
                        <span class="badge badge-emerald" style="font-size:11px;"><?php echo e($status); ?></span>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <span style="color:var(--color-text-muted);">Tanggal Terbit</span>
                        <span style="font-weight:600; color:var(--color-text-secondary);"><?php echo e($issue_date); ?></span>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <span style="color:var(--color-text-muted);">Hasil Ujian Akhir</span>
                        <span style="font-weight:700; color:#059669;"><?php echo e($score); ?> / 100 <span style="font-size:10px; color:var(--color-text-muted); font-weight:normal;">(Passing: 70)</span></span>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <span style="color:var(--color-text-muted);">Status Percobaan</span>
                        <span style="font-weight:600; color:var(--color-text-secondary);"><?php echo e($attempt); ?></span>
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
                        <div style="color:var(--emerald); flex-shrink:0; margin-top:1px;"><?php echo icon('check-circle', 'icon-xs'); ?></div>
                        <span>User Journey Mapping &amp; Empathy Framework</span>
                    </div>
                    <div style="display:flex; align-items:flex-start; gap:8px; font-size:12px; color:var(--color-text-secondary);">
                        <div style="color:var(--emerald); flex-shrink:0; margin-top:1px;"><?php echo icon('check-circle', 'icon-xs'); ?></div>
                        <span>Low-Fidelity Wireframing &amp; Prototyping</span>
                    </div>
                    <div style="display:flex; align-items:flex-start; gap:8px; font-size:12px; color:var(--color-text-secondary);">
                        <div style="color:var(--emerald); flex-shrink:0; margin-top:1px;"><?php echo icon('check-circle', 'icon-xs'); ?></div>
                        <span>RICE Prioritization Scoring Matrix</span>
                    </div>
                    <div style="display:flex; align-items:flex-start; gap:8px; font-size:12px; color:var(--color-text-secondary);">
                        <div style="color:var(--emerald); flex-shrink:0; margin-top:1px;"><?php echo icon('check-circle', 'icon-xs'); ?></div>
                        <span>Product Handover to Engineering Protocol</span>
                    </div>
                </div>
            </div>

            <!-- 3. Action Buttons: Unduh PDF & Salin Link -->
            <div style="display:flex; gap:12px; align-items:center;">
                <a href="#" onclick="alert('Mengunduh berkas PDF resmi beresolusi tinggi...'); return false;" class="btn btn-emerald" style="flex:1; justify-content:center; height:44px; font-weight:700; border-radius:10px; display:inline-flex; align-items:center; gap:8px; text-decoration:none;">
                    <?php echo icon('download-simple', 'icon-sm'); ?>
                    <span>Unduh PDF</span>
                </a>
                <button type="button" onclick="navigator.clipboard.writeText('<?php echo $verify_url; ?>'); alert('Tautan verifikasi berhasil disalin: <?php echo $verify_url; ?>');" class="btn btn-secondary" style="flex:1; justify-content:center; height:44px; font-weight:700; border-radius:10px; display:inline-flex; align-items:center; gap:8px; cursor:pointer;">
                    <?php echo icon('share-network', 'icon-sm'); ?>
                    <span>Salin Link</span>
                </button>
            </div>
        </div>
    </div>


</div>
