<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$total_questions = isset($total_questions) ? (int)$total_questions : 25;
$answered_count  = isset($answered_count) ? (int)$answered_count : 18;
$active_qnum     = isset($active_qnum) ? (int)$active_qnum : 14;
$flagged_qnums   = isset($flagged_qnums) ? $flagged_qnums : array(15);
$answered_qnums  = isset($answered_qnums) ? $answered_qnums : array(1,2,3,4,5,6,7,8,9,10,11,12,13,16,17,18);

$pct = round(($answered_count / $total_questions) * 100);
?>
<!-- Curriculum Playlist Drawer (matching design-reference/final-exam.html) -->
<aside class="exam-playlist-drawer">
    <!-- Nav Header -->
    <div class="exam-nav-header">
        <div class="exam-nav-title-row">
            <div class="exam-nav-title">Daftar Soal Ujian Akhir</div>
            <div class="exam-nav-progress" id="examAnsweredProgress"><?= $answered_count; ?>/<?= $total_questions; ?> Terjawab</div>
        </div>
        <div class="exam-nav-sub">Passing Grade: 70% (Min. 18 Benar)</div>
        <div class="exam-nav-track">
            <div class="exam-nav-fill" id="examProgressBar" style="width: <?= $pct; ?>%;"></div>
        </div>
    </div>

    <!-- Legend Row -->
    <div class="exam-legend-row">
        <div class="exam-legend-item">
            <div class="exam-legend-dot" style="background-color: #10b981;"></div>
            <span>Terjawab (<?= $answered_count; ?>)</span>
        </div>
        <div class="exam-legend-item">
            <div class="exam-legend-dot" style="background-color: #2872fa;"></div>
            <span>Aktif (1)</span>
        </div>
        <div class="exam-legend-item">
            <div class="exam-legend-dot" style="background-color: #f59e0b;"></div>
            <span>Ragu (1)</span>
        </div>
        <div class="exam-legend-item">
            <div class="exam-legend-dot" style="background-color: #cbd5e1;"></div>
            <span>Belum (5)</span>
        </div>
    </div>

    <!-- 5x5 Matrix Question Grid (25 items) -->
    <div class="exam-numbers-grid" id="examNumbersGrid">
        <?php for ($i = 1; $i <= $total_questions; $i++): 
            $status_class = 'status-unanswered';
            $label = str_pad($i, 2, '0', STR_PAD_LEFT);

            if ($i === $active_qnum) {
                $status_class = 'status-active';
                $label = (string)$i;
            } elseif (in_array($i, $flagged_qnums)) {
                $status_class = 'status-flagged';
                $label .= ' ⚐';
            } elseif (in_array($i, $answered_qnums)) {
                $status_class = 'status-answered';
                $label .= ' ✓';
            }
        ?>
        <button type="button" 
                class="exam-grid-qbtn <?= $status_class; ?>" 
                data-qnum="<?= $i; ?>"
                title="Soal Nomor <?= $i; ?>">
            <?= $label; ?>
        </button>
        <?php endfor; ?>
    </div>

    <!-- Exam Parameters Summary Box -->
    <div class="exam-params-box">
        <div class="exam-param-row">
            <span class="exam-param-label">Kesempatan Ujian:</span>
            <span class="exam-param-val" style="color: #192a3d;">Attempt 1 dari 3</span>
        </div>
        <div class="exam-param-row">
            <span class="exam-param-label">Aturan Skor:</span>
            <span class="exam-param-val" style="color: #10b981;">Nilai Tertinggi Dipakai</span>
        </div>
        <div class="exam-param-row">
            <span class="exam-param-label">Passing Grade:</span>
            <span class="exam-param-val" style="color: #2872fa;">70 / 100</span>
        </div>
    </div>

    <!-- Direct Submit CTA -->
    <button type="button" class="exam-sidebar-submit-btn" onclick="openModal('examSubmitModal')">
        <svg viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" style="width: 15px; height: 15px; flex-shrink: 0;" fill="currentColor">
            <path d="M9.73438 5.35938q0.10938 0.16406 0.10937 0.35546 0 0.19141-0.10937 0.30079l-3.22657 3.0625q-0.10938 0.10938-0.30078 0.10937-0.19141 0-0.30078-0.10937l-1.58594-1.53125q-0.21875-0.16406-0.16406-0.4375 0.05469-0.27344 0.30078-0.32813 0.24609-0.05469 0.41016 0.10938l1.3125 1.25781 2.95312-2.78906q0.10938-0.10938 0.30078-0.10938 0.19141 0 0.30078 0.16406l0-0.05468z m2.95312 1.64062q0 1.53125-0.76563 2.84375-0.76563 1.3125-2.07812 2.07813-1.3125 0.76563-2.84375 0.76562-1.53125 0-2.84375-0.76562-1.3125-0.76563-2.07813-2.07813-0.76563-1.3125-0.76562-2.84375 0-1.53125 0.76562-2.84375 0.76563-1.3125 2.07813-2.07813 1.3125-0.76563 2.84375-0.76562 1.53125 0 2.84375 0.76562 1.3125 0.76563 2.07813 2.07813 0.76563 1.3125 0.76562 2.84375z m-0.875 0q0-1.3125-0.65625-2.40625-0.65625-1.09375-1.75-1.75-1.09375-0.65625-2.40625-0.65625-1.3125 0-2.40625 0.65625-1.09375 0.65625-1.75 1.75-0.65625 1.09375-0.65625 2.40625 0 1.3125 0.65625 2.40625 0.65625 1.09375 1.75 1.75 1.09375 0.65625 2.40625 0.65625 1.3125 0 2.40625-0.65625 1.09375-0.65625 1.75-1.75 0.65625-1.09375 0.65625-2.40625z"/>
        </svg>
        <span>Kumpulkan Ujian Sekarang</span>
    </button>
</aside>
