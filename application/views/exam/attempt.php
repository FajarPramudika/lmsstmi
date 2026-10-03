<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Final Exam Page matching design.pen DSG:o4asa -->

<!-- Left: Reusable Exam Navigation Drawer (5x5 Number Grid) -->
<?php $this->load->view('partials/exam_drawer', array(
    'total_questions' => 25,
    'answered_count' => 18,
    'active_qnum' => 14
)); ?>

<!-- Right: Exam Workspace Column (976px) -->
<div class="learn-workspace">
    <!-- 1. Exam Header Card matching design.pen DSG:si03I -->
    <div class="card" style="padding:16px 22px; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px;">
        <div>
            <span class="overline" style="color:var(--color-primary); font-weight:800;">
                EVALUASI AKHIR KELULUSAN &bull; SERTIFIKASI KOMPETENSI
            </span>
            <h1 style="font-size:18px; font-weight:800; color:var(--color-text-main); margin-top:2px;">
                Final Assessment: Digital Product Management (DP-101)
            </h1>
        </div>

        <!-- Countdown Timer Box (Red Soft) matching design.pen DSG:rGOCl -->
        <div class="exam-timer-box">
            <?= icon('clock-countdown', 'icon-sm'); ?>
            <span>Sisa Waktu: <span id="examCountdownTimer">24:18</span></span>
            <span style="font-size:10px; opacity:0.85; font-weight:600;">(Auto-Submit)</span>
        </div>
    </div>

    <!-- 2. Main Question Card matching design.pen DSG:livsL -->
    <div class="card" style="padding:22px; gap:18px;">
        <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:10px;">
            <span class="badge badge-neutral" id="examQuestionNumLabel" style="font-size:12px;">
                Soal Nomor 14 dari 25 &bull; Bobot: 4 Poin
            </span>

            <!-- Toggle Flag Button -->
            <button type="button" class="btn btn-secondary btn-sm" id="btnToggleFlag" style="color:var(--flag-text); border-color:var(--flag-border); background:var(--flag-bg);">
                <?= icon('flag', 'icon-xs'); ?>
                <span>Tandai Ragu-ragu (No. 14)</span>
            </button>
        </div>

        <!-- RICE Scoring Scenario Prompt matching design.pen DSG:uk62m -->
        <div style="font-size:15px; font-weight:700; color:var(--color-text-main); line-height:1.5;">
            Tim Anda sedang memprioritaskan fitur MVP untuk peluncuran perdana aplikasi e-learning. Berdasarkan framework RICE Scoring (Reach, Impact, Confidence, Effort), Fitur A memiliki skor RICE 450 dengan estimasi effort 2 sprint, sedangkan Fitur B memiliki skor RICE 600 namun membutuhkan 5 sprint. Manakah keputusan prioritisasi yang paling tepat diambil oleh Product Manager?
        </div>

        <!-- 4 Options -->
        <div style="display:flex; flex-direction:column; gap:10px;">
            <!-- Option A -->
            <label class="quiz-option-card">
                <input type="radio" name="answer_14" value="A" style="display:none;">
                <div class="quiz-option-circle">A</div>
                <div style="font-size:13.5px; color:var(--color-text-main);">
                    Memilih Fitur B karena memiliki skor RICE absolut lebih tinggi tanpa mempertimbangkan batas sprint MVP.
                </div>
            </label>

            <!-- Option B (Selected) -->
            <label class="quiz-option-card is-selected">
                <input type="radio" name="answer_14" value="B" checked style="display:none;">
                <div class="quiz-option-circle">B</div>
                <div style="flex:1; display:flex; justify-content:space-between; align-items:center;">
                    <span style="font-size:13.5px; color:var(--color-text-main); font-weight:600;">
                        Memilih Fitur A untuk MVP karena rasio efisiensi dampak per sprint lebih optimal untuk rilis cepat.
                    </span>
                    <span class="badge badge-primary">Pilihan Anda (Tersimpan ✓)</span>
                </div>
            </label>

            <!-- Option C -->
            <label class="quiz-option-card">
                <input type="radio" name="answer_14" value="C" style="display:none;">
                <div class="quiz-option-circle">C</div>
                <div style="font-size:13.5px; color:var(--color-text-main);">
                    Menunda tanggal peluncuran MVP hingga seluruh 5 sprint Fitur B tuntas dikembangkan.
                </div>
            </label>

            <!-- Option D -->
            <label class="quiz-option-card">
                <input type="radio" name="answer_14" value="D" style="display:none;">
                <div class="quiz-option-circle">D</div>
                <div style="font-size:13.5px; color:var(--color-text-main);">
                    Mengabaikan skor RICE dan memilih fitur secara subjektif berdasarkan preferensi pribadi tim.
                </div>
            </label>
        </div>

        <!-- Autosave Cloud Bar matching design.pen DSG:a1IZ8 -->
        <div style="background-color:var(--slate-100); border:1px solid var(--slate-200); border-radius:var(--radius-md); padding:10px 14px; display:flex; align-items:center; gap:8px; font-size:12px; color:var(--emerald);">
            <?= icon('cloud-check', 'icon-xs'); ?>
            <span style="color:var(--color-text-secondary);">
                Jawaban Anda otomatis tersimpan di cloud. Anda bebas mengubah pilihan kapan saja sebelum ujian diserahkan.
            </span>
        </div>
    </div>

    <!-- 3. Action Navigation Bar matching design.pen DSG:Xm6aN -->
    <div class="card" style="padding:14px 20px; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px;">
        <button type="button" class="btn btn-secondary btn-sm">
            <?= icon('arrow-left', 'icon-xs'); ?>
            <span>Soal Sebelumnya (No. 13)</span>
        </button>

        <div style="font-size:12px; font-weight:600; color:var(--color-text-secondary);">
            18 dari 25 Soal Terjawab &bull; 7 Belum Diisi
        </div>

        <button type="button" class="btn btn-primary btn-sm">
            <span>Soal Berikutnya (No. 15)</span>
            <?= icon('arrow-right', 'icon-xs'); ?>
        </button>
    </div>
</div>

<!-- Modal Konfirmasi Kumpulkan Ujian -->
<?php $this->load->view('partials/modal_confirm', array(
    'modal_id' => 'examSubmitModal',
    'modal_title' => 'Kumpulkan Lembar Ujian Akhir?',
    'modal_message' => 'Anda telah menjawab <strong>18 dari 25 soal</strong> (1 soal masih bertanda ragu-ragu, dan 6 belum diisi). Setelah dikumpulkan, lembar jawaban akan langsung dinilai oleh sistem secara otomatis.<br><br>Apakah Anda yakin ingin menyelesaikan ujian sekarang?',
    'modal_confirm_text' => 'Ya, Kumpulkan Ujian',
    'modal_confirm_class' => 'btn-emerald',
    'modal_action_url' => base_url('verify/DL-2026-000001')
)); ?>
