<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Pop-up Quiz Checkpoint 1 Workspace matching design-reference/quiz-checkpoint-1.html -->

<!-- Left: Reusable Curriculum Playlist Drawer (396px) -->
<?php $this->load->view('partials/playlist_drawer', array('active_item' => 2)); ?>

<!-- Right: Quiz Workspace Column (976px) -->
<div class="learn-workspace" style="width:976px; flex:1; display:flex; flex-direction:column; gap:12px;">
    <!-- 1. Quiz Header Card -->
    <div style="background-color:#ffffff; border-radius:12px; outline:1px solid #dfe3ea; outline-offset:-0.5px; padding:14px 18px; display:flex; flex-direction:column; gap:10px;">
        <div style="display:flex; justify-content:space-between; align-items:center;">
            <div style="color:#192a3d; font-size:20px; font-weight:800;">
                2. Quiz Checkpoint 1: Pemahaman User Journey
            </div>
            <span class="badge badge-emerald" style="font-size:11px;">
                Mode Bebas Attempt (Mengulang Sampai Benar)
            </span>
        </div>

        <div style="background-color:#f1f5f9; border-radius:3px; height:6px; width:100%; overflow:hidden;">
            <div style="background-color:#2872fa; border-radius:3px; height:6px; width:33%;"></div>
        </div>
    </div>

    <!-- 2. Main Question Card -->
    <div style="background-color:#ffffff; border-radius:12px; outline:1px solid #dfe3ea; outline-offset:-0.5px; padding:16px 20px; display:flex; flex-direction:column; gap:14px;">
        <div style="display:flex; justify-content:space-between; align-items:center;">
            <div style="background-color:#f8fafc; border-radius:6px; outline:1px solid #dfe3ea; outline-offset:-0.5px; padding:4px 8px; color:#475467; font-size:11px; font-weight:600;">
                Pertanyaan 1 dari 3
            </div>
            <a href="<?= base_url('learn/digital-product-fundamentals/video/1'); ?>" style="color:#2872fa; font-size:12px; font-weight:600; text-decoration:none; display:flex; align-items:center; gap:4px;">
                <?= icon('play', 'icon-xs'); ?>
                <span>Review Video Materi 1 (Menit 14:00)</span>
            </a>
        </div>

        <div style="color:#192a3d; font-size:15px; font-weight:700; line-height:22px;">
            Dalam pemetaan Customer Journey Map untuk perancangan produk MVP, pada tahapan manakah calon pengguna pertama kali menyadari adanya problem/kebutuhan dan mulai mencari informasi mengenai alternatif solusi digital?
        </div>

        <!-- Options List (A, B, C, D) -->
        <div style="display:flex; flex-direction:column; gap:8px;">
            <!-- Option A -->
            <div class="quiz-opt-card">
                <div style="display:flex; align-items:center; gap:12px;">
                    <div class="quiz-letter-circle">A</div>
                    <div style="color:#475467; font-size:12px; font-weight:500;">
                        Consideration — Pengguna menimbang alternatif fitur, membandingkan harga, dan membaca ulasan produk.
                    </div>
                </div>
            </div>

            <!-- Option B (Selected & Correct) -->
            <div class="quiz-opt-card is-active">
                <div style="display:flex; align-items:center; gap:12px;">
                    <div class="quiz-letter-circle">B</div>
                    <div style="color:#192a3d; font-size:12px; font-weight:700;">
                        Awareness — Pengguna pertama kali merasakan rasa frustrasi/masalah dan mencari solusi baru.
                    </div>
                </div>
                <div class="quiz-verified-badge">
                    Pilihan Anda (Benar ✓)
                </div>
            </div>

            <!-- Option C -->
            <div class="quiz-opt-card">
                <div style="display:flex; align-items:center; gap:12px;">
                    <div class="quiz-letter-circle">C</div>
                    <div style="color:#475467; font-size:12px; font-weight:500;">
                        Decision / Trial — Pengguna mendaftarkan akun perdana dan mencoba fitur MVP produk.
                    </div>
                </div>
            </div>

            <!-- Option D -->
            <div class="quiz-opt-card">
                <div style="display:flex; align-items:center; gap:12px;">
                    <div class="quiz-letter-circle">D</div>
                    <div style="color:#475467; font-size:12px; font-weight:500;">
                        Retention — Pengguna menggunakan produk secara berkelanjutan dan loyalitas terbangun.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Action Bar matching quiz-checkpoint-1.html -->
    <div style="background-color:#ffffff; border-radius:12px; outline:1px solid #dfe3ea; outline-offset:-0.5px; padding:10px 16px; display:flex; justify-content:space-between; align-items:center;">
        <a href="<?= base_url('learn/digital-product-fundamentals/video/1'); ?>" style="display:flex; align-items:center; gap:6px; background-color:#f8fafc; border-radius:8px; outline:1px solid #dfe3ea; outline-offset:-0.5px; padding:8px 14px; color:#475467; font-size:12px; font-weight:600; text-decoration:none;">
            <?= icon('arrow-left', 'icon-xs'); ?>
            <span>Kembali ke Video Materi</span>
        </a>

        <div style="display:flex; align-items:center; gap:6px;">
            <?= icon('check-circle', 'icon-sm', 'style="color:#10b981;"'); ?>
            <span style="color:#192a3d; font-size:12px; font-weight:600;">
                Soal 1 dari 3 terjawab benar (Progres Kuis: 33%)
            </span>
        </div>

        <a href="<?= base_url('learn/digital-product-fundamentals/pdf/1'); ?>" style="display:flex; align-items:center; gap:6px; background-color:#2872fa; border-radius:8px; padding:8px 18px; color:#ffffff; font-size:12px; font-weight:700; text-decoration:none; box-shadow:0px 2px 6px rgba(40,114,250,0.25);">
            <span>Lanjut ke Soal 2</span>
            <?= icon('arrow-right', 'icon-xs'); ?>
        </a>
    </div>
</div>
