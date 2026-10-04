<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$course_slug = isset($course_slug) ? $course_slug : 'digital-product-fundamentals';
$course_code = isset($course_code) ? $course_code : 'DP-101';
$course_title = isset($course_title) ? $course_title : 'Digital Product Fundamentals';
?>
<!-- Final Exam Page matching design-reference/final-exam.html with standard Sidebar & Topbar layout -->

<!-- Top Navigation & Breadcrumb (seiras dengan halaman detail courses) -->
<?php $this->load->view('partials/breadcrumb_learn', array(
    'course_slug'  => $course_slug,
    'course_code'  => isset($course_code) ? $course_code : 'DP-101',
    'course_title' => isset($course_title) ? $course_title : 'Digital Product Fundamentals',
    'active_title' => 'Ujian Akhir (Final Exam)'
)); ?>

<!-- Main Learning Area (Drawer + Workspace) -->
<div class="learn-container" id="exam-workspace">
    <!-- Left: Reusable Exam Navigation Drawer (396px) matching design-reference/final-exam.html -->
    <?php $this->load->view('partials/exam_drawer', array(
        'total_questions' => 25,
        'answered_count'  => 18,
        'active_qnum'     => 14,
        'flagged_qnums'   => array(15),
        'answered_qnums'  => array(1,2,3,4,5,6,7,8,9,10,11,12,13,16,17,18)
    )); ?>

    <!-- Right: Exam Workspace Column (976px / flex:1) matching design-reference/final-exam.html -->
    <div class="exam-workspace-col">
        <!-- 1. Exam Header Card -->
        <div class="exam-header-card">
            <h1 class="exam-main-title">Final Assessment: Digital Product Management</h1>
            <div class="exam-timer-card">
                <svg viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" style="width: 16px; height: 16px; flex-shrink: 0;">
                    <path d="M7 1.75q-1.42188 0-2.625 0.71094-1.20313 0.71094-1.91406 1.91406-0.71094 1.20313-0.71094 2.625 0 1.42188 0.71094 2.625 0.71094 1.20313 1.91406 1.91406 1.20313 0.71094 2.625 0.71094 1.42188 0 2.625-0.71094 1.20313-0.71094 1.91406-1.91406 0.71094-1.20313 0.71094-2.625 0-1.42188-0.71094-2.625-0.71094-1.20313-1.91406-1.91406-1.20313-0.71094-2.625-0.71094z m0 9.625q-1.20313 0-2.1875-0.60156-0.98438-0.60156-1.58594-1.58594-0.60156-0.98438-0.60156-2.1875 0-1.20313 0.60156-2.1875 0.60156-0.98438 1.58594-1.58594 0.98438-0.60156 2.1875-0.60156 1.20313 0 2.1875 0.60156 0.98438 0.60156 1.58594 1.58594 0.60156 0.98438 0.60156 2.1875 0 1.20313-0.60156 2.1875-0.60156 0.98438-1.58594 1.58594-0.98438 0.60156-2.1875 0.60156z m2.46094-6.83594q0.16406 0.10938 0.16406 0.30078 0 0.19141-0.16406 0.30078l-2.13281 2.1875q-0.16406 0.10938-0.32813 0.10938-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.10938-0.32813l2.1875-2.13281q0.10938-0.16406 0.30078-0.16406 0.19141 0 0.30078 0.16406z m-4.21094-4.10156q0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672l2.625 0q0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078 0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672l-2.625 0q-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078z" fill="#dc2626"/>
                </svg>
                <div style="display: flex; flex-direction: column; gap: 1px;">
                    <div class="exam-timer-val">Sisa Waktu: <span id="examTimerDigits">24:18</span></div>
                    <div class="exam-timer-sub">Otomatis Dikumpulkan Saat Habis</div>
                </div>
            </div>
        </div>

        <!-- 2. Exam Question Card -->
        <div class="exam-question-card">
            <div class="exam-q-subrow">
                <div class="exam-num-pill" id="examQuestionPill">Soal Nomor 14 dari 25 • Bobot: 4 Poin</div>
                <button type="button" class="exam-doubt-flag-btn" id="btnToggleDoubt">
                    <svg viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" style="width: 12px; height: 12px; flex-shrink: 0;" fill="#d97706">
                        <path d="M12.03125 2.24219q-0.27344-0.10938-0.49219 0.05469-0.71094 0.54688-1.42187 0.6289-0.71094 0.08203-1.47657-0.13672-0.49219-0.16406-1.5039-0.60156-1.01172-0.4375-1.5586-0.54687-0.92969-0.27344-1.75-0.16407-0.98438 0.10938-1.91406 0.82032l-0.10937 0.10937-0.05469 9.40625q0 0.16406 0.13672 0.30078 0.13672 0.13672 0.30078 0.13672 0.16406 0 0.30078-0.13672 0.13672-0.13672 0.13672-0.30078l0-2.40625q0.71094-0.4375 1.36719-0.51953 0.65625-0.08203 1.42187 0.13672 0.4375 0.16406 1.42188 0.54687l0 0.05469q0.92969 0.38281 1.36719 0.49219 0.82031 0.27344 1.47656 0.27344 1.25781 0 2.40625-0.875 0.16406-0.10938 0.16406-0.32813l0-6.5625q0-0.27344-0.21875-0.38281z m-0.65625 6.72656q-0.71094 0.4375-1.36719 0.51953-0.65625 0.08203-1.42187-0.13672-0.4375-0.16406-1.42188-0.54687l0-0.05469q-0.92969-0.38281-1.42187-0.49219-0.82031-0.27344-1.47657-0.27344-0.875 0-1.64062 0.4375l0-5.57812q0.71094-0.4375 1.36719-0.51953 0.65625-0.08203 1.42187 0.13672 0.4375 0.16406 1.42188 0.54687l0 0.05469q0.92969 0.38281 1.42187 0.49219 0.82031 0.27344 1.47656 0.27344 0.875 0 1.64063-0.4375l0 5.57812z"/>
                    </svg>
                    <span id="doubtFlagText">Tandai Ragu-ragu</span>
                </button>
            </div>

            <div class="exam-question-prompt">
                Tim Anda sedang memprioritaskan fitur MVP untuk peluncuran perdana aplikasi e-learning. Berdasarkan framework RICE Scoring (Reach, Impact, Confidence, Effort), Fitur A memiliki skor RICE 450 dengan estimasi effort 2 sprint, sedangkan Fitur B memiliki skor RICE 600 dengan estimasi effort 5 sprint. Jika target peluncuran MVP Anda ditetapkan 4 minggu (2 sprint) ke depan, keputusan produk manakah yang paling tepat diambil?
            </div>

            <div class="exam-options-list" id="examOptionsList">
                <!-- Option A -->
                <div class="exam-option-item" data-opt="A">
                    <input type="radio" name="answer_14" value="A" style="display:none;">
                    <div class="exam-option-circle">A</div>
                    <div class="exam-option-text">
                        Memilih Fitur B karena memiliki nilai absolut skor RICE tertinggi, tanpa memedulikan batasan timeline peluncuran MVP.
                    </div>
                </div>

                <!-- Option B (Selected) -->
                <div class="exam-option-item is-selected" data-opt="B">
                    <input type="radio" name="answer_14" value="B" checked style="display:none;">
                    <div class="exam-option-circle">B</div>
                    <div class="exam-option-text">
                        Memilih Fitur A untuk MVP karena efisiensi rasio impact terhadap batas rilis 2 sprint
                    </div>
                </div>

                <!-- Option C -->
                <div class="exam-option-item" data-opt="C">
                    <input type="radio" name="answer_14" value="C" style="display:none;">
                    <div class="exam-option-circle">C</div>
                    <div class="exam-option-text">
                        Menunda tanggal peluncuran MVP hingga sprint 5 agar kedua fitur dapat diluncurkan secara bersamaan.
                    </div>
                </div>

                <!-- Option D -->
                <div class="exam-option-item" data-opt="D">
                    <input type="radio" name="answer_14" value="D" style="display:none;">
                    <div class="exam-option-circle">D</div>
                    <div class="exam-option-text">
                        Mengabaikan skor RICE dan memilih fitur secara acak berdasarkan preferensi subjektif pemangku kepentingan.
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Exam Action Bar -->
        <div class="exam-action-bar">
            <button type="button" class="exam-prev-btn" id="btnExamPrev">
                <svg viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" style="width: 13px; height: 13px; flex-shrink: 0;" fill="#475467">
                    <path d="M12.25 7q0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672l-8.58594 0 3.22657 3.17188q0.10938 0.16406 0.10937 0.32812 0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672-0.16406 0-0.32812-0.10937l-3.9375-3.9375q-0.10938-0.16406-0.10938-0.32813 0-0.16406 0.10938-0.32812l3.9375-3.9375q0.16406-0.10938 0.32812-0.08204 0.16406 0.02734 0.27344 0.13672 0.10938 0.10938 0.13672 0.27344 0.02734 0.16406-0.08203 0.32813l-3.22657 3.17187 8.58594 0q0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078z"/>
                </svg>
                <span>Soal Sebelumnya (No. 13)</span>
            </button>

            <div style="display: flex; align-items: center; gap: 10px;">
                <button type="button" class="exam-next-btn" id="btnExamNext">
                    <span>Soal Berikutnya (No. 15)</span>
                    <svg viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" style="width: 13px; height: 13px; flex-shrink: 0;" fill="#ffffff">
                        <path d="M12.14063 7.32813l-3.9375 3.9375q-0.16406 0.10938-0.32813 0.10937-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.10938-0.32812l3.22656-3.17188-8.58594 0q-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.30078-0.13672l8.58594 0-3.22657-3.17188q-0.10938-0.16406-0.08203-0.32812 0.02734-0.16406 0.13672-0.27344 0.10938-0.10938 0.27344-0.13672 0.16406-0.02734 0.32812 0.08203l3.9375 3.9375q0.10938 0.16406 0.10938 0.32813 0 0.16406-0.10938 0.32812z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Kumpulkan Ujian -->
<?php $this->load->view('partials/modal_confirm', array(
    'modal_id'            => 'examSubmitModal',
    'modal_title'         => 'Kumpulkan Lembar Ujian Akhir?',
    'modal_message'       => 'Anda telah menjawab <strong>18 dari 25 soal</strong> (1 soal masih bertanda ragu-ragu, dan 6 belum diisi). Setelah dikumpulkan, lembar jawaban akan langsung dinilai oleh sistem secara otomatis.<br><br>Apakah Anda yakin ingin menyelesaikan ujian sekarang?',
    'modal_confirm_text'  => 'Ya, Kumpulkan Ujian',
    'modal_confirm_class' => 'btn-emerald',
    'modal_action_url'    => base_url('verify/DL-2026-000001')
)); ?>

<!-- Interactive Script for Exam Functionality -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. Radio option selection click handler
    var optItems = document.querySelectorAll('.exam-option-item');
    optItems.forEach(function(item) {
        item.addEventListener('click', function() {
            optItems.forEach(function(el) {
                el.classList.remove('is-selected');
                var radio = el.querySelector('input[type="radio"]');
                if (radio) radio.checked = false;
            });
            this.classList.add('is-selected');
            var selectedRadio = this.querySelector('input[type="radio"]');
            if (selectedRadio) selectedRadio.checked = true;
        });
    });

    // 2. Countdown Timer (24:18 -> 24:17...)
    var timerEl = document.getElementById('examTimerDigits');
    if (timerEl) {
        var totalSecs = (24 * 60) + 18;
        var timerInterval = setInterval(function() {
            totalSecs--;
            if (totalSecs <= 0) {
                clearInterval(timerInterval);
                timerEl.textContent = '00:00';
                if (typeof openModal === 'function') {
                    openModal('examSubmitModal');
                }
                return;
            }
            var m = Math.floor(totalSecs / 60);
            var s = totalSecs % 60;
            timerEl.textContent = (m < 10 ? '0' + m : m) + ':' + (s < 10 ? '0' + s : s);
        }, 1000);
    }

    // 3. Doubt flag toggle
    var flagBtn = document.getElementById('btnToggleDoubt');
    if (flagBtn) {
        var isFlagged = false;
        flagBtn.addEventListener('click', function() {
            isFlagged = !isFlagged;
            var textSpan = document.getElementById('doubtFlagText');
            var btn14 = document.querySelector('.exam-grid-qbtn[data-qnum="14"]');
            if (isFlagged) {
                flagBtn.style.backgroundColor = '#fde68a';
                if (textSpan) textSpan.textContent = 'Ragu-ragu Terpasang ✓';
                if (btn14) {
                    btn14.classList.remove('status-active');
                    btn14.classList.add('status-flagged');
                    btn14.textContent = '14 ⚐';
                }
            } else {
                flagBtn.style.backgroundColor = '#fffbeb';
                if (textSpan) textSpan.textContent = 'Tandai Ragu-ragu';
                if (btn14) {
                    btn14.classList.remove('status-flagged');
                    btn14.classList.add('status-active');
                    btn14.textContent = '14';
                }
            }
        });
    }

    // 4. Number Grid interaction
    var gridBtns = document.querySelectorAll('.exam-grid-qbtn');
    gridBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            var qnum = this.getAttribute('data-qnum');
            var pill = document.getElementById('examQuestionPill');
            if (pill) {
                pill.textContent = 'Soal Nomor ' + qnum + ' dari 25 • Bobot: 4 Poin';
            }
            gridBtns.forEach(function(b) {
                if (b.classList.contains('status-active')) {
                    b.classList.remove('status-active');
                    b.classList.add('status-answered');
                    var bNum = b.getAttribute('data-qnum');
                    b.textContent = (parseInt(bNum, 10) < 10 ? '0' + bNum : bNum) + ' ✓';
                }
            });
            this.classList.remove('status-answered', 'status-unanswered', 'status-flagged');
            this.classList.add('status-active');
            this.textContent = qnum;
        });
    });
});
</script>
