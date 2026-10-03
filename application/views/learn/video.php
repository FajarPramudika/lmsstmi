<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Video Material Learning Theater matching design.pen DSG:am1Jw -->

<!-- Left: Reusable Curriculum Playlist Drawer -->
<?php $this->load->view('partials/playlist_drawer', array('active_item' => 1)); ?>

<!-- Right: Video Workspace Column (976px) -->
<div class="learn-workspace">
    <!-- 1. Video Player Dark Container (976px x 480px) -->
    <div style="width:100%; height:480px; background-color:#0f172a; border-radius:var(--radius-xl); overflow:hidden; position:relative; display:flex; flex-direction:column; justify-content:space-between; box-shadow:var(--shadow-lg);">
        <!-- Top Overlay -->
        <div style="padding:16px 20px; background:linear-gradient(180deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 100%); display:flex; justify-content:space-between; align-items:center; z-index:10;">
            <div style="color:#ffffff; font-size:13px; font-weight:700;">
                <span style="color:var(--color-primary); font-weight:800;">[VIDEO MATERI]</span> 1. Konsep Dasar User Journey Mapping
            </div>
            <span class="badge badge-emerald">
                <?= icon('check-circle', 'icon-xs'); ?>
                <span>Syarat BRD 95%: Ditonton 98% ✓</span>
            </span>
        </div>

        <!-- Simulated Video Slide Canvas -->
        <div style="flex:1; display:flex; flex-direction:column; align-items:center; justify-content:center; color:#ffffff; padding:20px; text-align:center;">
            <div style="background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.12); border-radius:var(--radius-xl); padding:28px 40px; max-width:820px; width:100%;">
                <div style="font-size:11px; font-weight:700; color:var(--color-primary); text-transform:uppercase; letter-spacing:1px; margin-bottom:6px;">
                    Framework Desain Produk MVP &bull; Modul 4
                </div>
                <h2 style="font-size:24px; font-weight:800; color:#ffffff; margin-bottom:16px;">
                    Customer Journey Mapping: 4 Tahapan Utama
                </h2>

                <!-- 4 Stages Diagram -->
                <div style="display:grid; grid-template-columns:repeat(4, 1fr); gap:12px; margin-top:20px;">
                    <div style="background:rgba(40,114,250,0.15); border:1px solid var(--color-primary); border-radius:8px; padding:12px 8px;">
                        <div style="font-size:10px; font-weight:800; color:var(--color-primary);">FASE 1</div>
                        <div style="font-size:13px; font-weight:700; color:#ffffff; margin-top:2px;">Awareness</div>
                    </div>
                    <div style="background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.15); border-radius:8px; padding:12px 8px;">
                        <div style="font-size:10px; font-weight:800; opacity:0.7;">FASE 2</div>
                        <div style="font-size:13px; font-weight:700; color:#ffffff; margin-top:2px;">Consideration</div>
                    </div>
                    <div style="background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.15); border-radius:8px; padding:12px 8px;">
                        <div style="font-size:10px; font-weight:800; opacity:0.7;">FASE 3</div>
                        <div style="font-size:13px; font-weight:700; color:#ffffff; margin-top:2px;">Decision / Trial</div>
                    </div>
                    <div style="background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.15); border-radius:8px; padding:12px 8px;">
                        <div style="font-size:10px; font-weight:800; opacity:0.7;">FASE 4</div>
                        <div style="font-size:13px; font-weight:700; color:#ffffff; margin-top:2px;">Retention</div>
                    </div>
                </div>

                <div style="font-size:12px; color:rgba(255,255,255,0.7); margin-top:16px;">
                    🎙️ Instruktur: Andi Setiawan, S.Kom. (Senior Product Manager)
                </div>
            </div>
        </div>

        <!-- Custom Video Controls Bar matching design.pen DSG:hrq23 -->
        <div style="background:rgba(15,23,42,0.95); border-top:1px solid var(--slate-800); padding:10px 20px; display:flex; flex-direction:column; gap:8px; z-index:10;">
            <!-- Scrubber Track with Checkpoint Marker @ 14:00 -->
            <div style="position:relative; width:100%; height:6px; background-color:var(--slate-700); border-radius:3px; cursor:pointer;">
                <!-- Played fill (98%) -->
                <div style="width:98%; height:100%; background-color:var(--color-primary); border-radius:3px;"></div>
                
                <!-- Pop-up Quiz Checkpoint 1 Pin at 75% (14:00 of 18:45) -->
                <div style="position:absolute; left:75%; top:-7px; width:20px; height:20px; border-radius:50%; background-color:var(--emerald); border:2px solid #ffffff; display:flex; align-items:center; justify-content:center; color:#ffffff; font-size:10px; font-weight:900; box-shadow:0 2px 4px rgba(0,0,0,0.3);" title="Checkpoint Kuis 1 (Passed ✓)">
                    ✓
                </div>
            </div>

            <div style="display:flex; justify-content:space-between; align-items:center; color:#ffffff; font-size:12px;">
                <div style="display:flex; align-items:center; gap:16px;">
                    <button type="button" class="btn btn-link" style="color:#ffffff;" title="Pause">
                        <?= icon('pause', 'icon-sm'); ?>
                    </button>
                    <span>18:15 / 18:45</span>
                </div>

                <div style="display:flex; align-items:center; gap:14px; font-weight:600;">
                    <span style="background:var(--slate-800); padding:3px 8px; border-radius:4px; font-size:11px;">1.0x</span>
                    <span style="background:var(--slate-800); padding:3px 8px; border-radius:4px; font-size:11px;">1080p HD</span>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. Video Title & Action Row matching design.pen DSG:oEnMg -->
    <div class="card" style="padding:14px 20px; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px;">
        <div>
            <h2 style="font-size:16px; font-weight:800; color:var(--color-text-main); margin:0;">
                1. Konsep Dasar User Journey Mapping
            </h2>
            <div style="font-size:12px; color:var(--color-text-muted); margin-top:2px;">
                Modul 4 &bull; Materi 1 dari 6 &bull; Durasi: 18:45 Menit
            </div>
        </div>

        <div style="display:flex; align-items:center; gap:10px;">
            <button type="button" class="btn btn-secondary btn-sm disabled" disabled>
                <?= icon('arrow-left', 'icon-xs'); ?>
                <span>Materi Sebelumnya</span>
            </button>
            <a href="<?= base_url('learn/digital-product-fundamentals/quiz/1'); ?>" class="btn btn-primary btn-sm">
                <span>Lanjut: Pop-up Quiz 1</span>
                <?= icon('arrow-right', 'icon-xs'); ?>
            </a>
        </div>
    </div>

    <!-- 3. Ringkasan Materi Tab & Content matching design.pen DSG:T9l9ii -->
    <div class="card" style="padding:20px;">
        <div style="border-bottom:1px solid var(--color-border); padding-bottom:10px; margin-bottom:14px;">
            <div style="font-size:13px; font-weight:700; color:var(--color-primary); border-bottom:2px solid var(--color-primary); display:inline-block; padding-bottom:10px; margin-bottom:-11px;">
                Ringkasan Materi &amp; Catatan Penting
            </div>
        </div>

        <div style="font-size:14px; color:var(--color-text-body); line-height:1.6;">
            <p>
                Pada materi video ini, kita membedah konsep <strong>Customer Journey Mapping (CJM)</strong> sebagai instrumen strategis Product Manager dalam memahami pengalaman komprehensif pengguna terhadap produk digital dari fase awal hingga retensi jangka panjang.
            </p>
            <p>
                <strong>4 Tahapan Utama yang Dibahas:</strong>
            </p>
            <ul style="margin-left:20px; margin-bottom:12px;">
                <li><strong>Awareness:</strong> Titik sentuh pertama kali saat pengguna menyadari masalah dan mencari solusi.</li>
                <li><strong>Consideration:</strong> Pengguna membandingkan fitur, kemudahan, dan nilai tambah produk Anda.</li>
                <li><strong>Decision / Trial:</strong> Langkah konversi ketika pengguna memutuskan mendaftar atau mencoba versi MVP.</li>
                <li><strong>Retention:</strong> Pengalaman berkala yang menjaga pengguna tetap aktif menggunakan produk secara berulang.</li>
            </ul>
        </div>
    </div>
</div>
