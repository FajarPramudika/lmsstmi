<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$total_questions = isset($total_questions) ? (int)$total_questions : 25;
$answered_count = isset($answered_count) ? (int)$answered_count : 18;
$active_qnum = isset($active_qnum) ? (int)$active_qnum : 14;
$flagged_qnums = isset($flagged_qnums) ? $flagged_qnums : array(15);
$answered_qnums = isset($answered_qnums) ? $answered_qnums : array(1,2,3,4,5,6,7,8,9,10,11,12,13,16,17,18);

$pct = round(($answered_count / $total_questions) * 100);
?>
<!-- Exam Navigation Drawer (396px) matching design.pen DSG:DWZ8C -->
<aside class="playlist-drawer" style="gap:14px;">
    <!-- Header & Progress -->
    <div>
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:4px;">
            <span class="playlist-header-title">Daftar Soal Ujian Akhir</span>
            <span class="badge badge-emerald" id="examAnsweredBadge"><?= $answered_count; ?>/<?= $total_questions; ?> Terjawab</span>
        </div>
        <div style="font-size:12px; color:var(--color-text-muted); margin-bottom:8px;">
            Passing Grade: <strong>70%</strong> (Min. 18 Benar)
        </div>
        <div class="progress-track" style="height:8px;">
            <div class="progress-fill progress-fill-emerald" style="width:<?= $pct; ?>%;"></div>
        </div>
    </div>

    <!-- 4-Status Legend Row -->
    <div style="display:flex; justify-content:space-between; align-items:center; font-size:11px; font-weight:600; padding:6px 8px; background:var(--slate-100); border-radius:var(--radius-md);">
        <div style="display:flex; align-items:center; gap:4px; color:var(--emerald);">
            <span style="width:8px; height:8px; border-radius:50%; background:var(--emerald); display:inline-block;"></span>
            <span>Terjawab (18)</span>
        </div>
        <div style="display:flex; align-items:center; gap:4px; color:var(--color-primary);">
            <span style="width:8px; height:8px; border-radius:50%; background:var(--color-primary); display:inline-block;"></span>
            <span>Aktif (1)</span>
        </div>
        <div style="display:flex; align-items:center; gap:4px; color:var(--flag-text);">
            <span style="width:8px; height:8px; border-radius:50%; background:var(--flag-border); display:inline-block;"></span>
            <span>Ragu (1)</span>
        </div>
        <div style="display:flex; align-items:center; gap:4px; color:var(--slate-600);">
            <span style="width:8px; height:8px; border-radius:50%; background:var(--slate-200); display:inline-block;"></span>
            <span>Belum (5)</span>
        </div>
    </div>

    <!-- 5x5 Matrix Question Grid (25 items) -->
    <div class="exam-grid-5">
        <?php for ($i = 1; $i <= $total_questions; $i++): 
            $status_class = 'status-unanswered';
            $label = str_pad($i, 2, '0', STR_PAD_LEFT);

            if ($i === $active_qnum) {
                $status_class = 'status-active';
            } elseif (in_array($i, $flagged_qnums)) {
                $status_class = 'status-flagged';
                $label .= ' ⚐';
            } elseif (in_array($i, $answered_qnums)) {
                $status_class = 'status-answered';
                $label .= ' ✓';
            }
        ?>
        <button type="button" class="exam-num-btn <?= $status_class; ?>" data-qnum="<?= $i; ?>">
            <?= $label; ?>
        </button>
        <?php endfor; ?>
    </div>

    <!-- Exam Parameters Summary Box -->
    <div style="background:#f8fafc; border:1px solid var(--color-border); border-radius:var(--radius-md); padding:10px 14px; font-size:11px; display:flex; flex-direction:column; gap:4px;">
        <div style="display:flex; justify-content:space-between;">
            <span style="color:var(--color-text-muted);">Kesempatan Ujian:</span>
            <strong style="color:var(--color-text-main);">Attempt 1 dari 3</strong>
        </div>
        <div style="display:flex; justify-content:space-between;">
            <span style="color:var(--color-text-muted);">Aturan Skor:</span>
            <strong style="color:var(--color-primary);">Nilai Tertinggi Dipakai</strong>
        </div>
        <div style="display:flex; justify-content:space-between;">
            <span style="color:var(--color-text-muted);">Passing Grade:</span>
            <strong style="color:var(--emerald);">70 / 100</strong>
        </div>
    </div>

    <!-- Direct Submit CTA -->
    <button type="button" class="btn btn-emerald" style="width:100%; height:44px;" onclick="openModal('examSubmitModal')">
        <?= icon('check-circle', 'icon-sm'); ?>
        <span>Kumpulkan Ujian Sekarang</span>
    </button>
</aside>
