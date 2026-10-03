<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- PDF Material Integrated Learning Workspace matching design.pen DSG:Z8TwQg -->

<!-- Left: Reusable Curriculum Playlist Drawer -->
<?php $this->load->view('partials/playlist_drawer', array('active_item' => 3)); ?>

<!-- Right: PDF Workspace Column (976px) -->
<div class="learn-workspace">
    <!-- 1. PDF Header Card matching design.pen DSG:mC9rl -->
    <div class="card" style="padding:16px 22px; gap:12px;">
        <div style="display:flex; justify-content:space-between; align-items:flex-start; flex-wrap:wrap; gap:12px;">
            <div>
                <span class="overline" style="color:var(--color-primary); font-weight:800;">
                    MODUL 4 &bull; MATERI 3 DARI 6 (DOKUMEN PDF)
                </span>
                <h1 style="font-size:18px; font-weight:800; color:var(--color-text-main); margin-top:2px;">
                    3. Template &amp; Framework Customer Journey Map
                </h1>
                
                <div style="display:flex; align-items:center; gap:8px; margin-top:8px; flex-wrap:wrap;">
                    <span class="badge badge-neutral">Dokumen PDF &bull; 14 Halaman</span>
                    <span class="badge badge-neutral">Ukuran: 3.4 MB</span>
                    <span class="badge badge-emerald"><?= icon('check-circle', 'icon-xs'); ?> Syarat BRD Terpenuhi: Dibaca 14/14 Hlm</span>
                </div>
            </div>

            <!-- Download Button (since allow_download = 1 per T-014) -->
            <a href="#" class="btn btn-secondary btn-sm" onclick="showToast('Mengunduh template berkas Customer-Journey-Map-Template-v2.pdf...', 'success'); return false;" style="color:var(--color-primary); border-color:var(--color-primary);">
                <?= icon('download-simple', 'icon-xs'); ?>
                <span>Unduh Template PDF</span>
            </a>
        </div>
    </div>

    <!-- 2. Integrated Dark PDF Viewer (976px x 640px) matching design.pen DSG:FwHBK -->
    <div style="background-color:#1e293b; border:1px solid #334155; border-radius:var(--radius-xl); overflow:hidden; box-shadow:var(--shadow-lg);">
        <!-- PDF Viewer Toolbar (Dark) -->
        <div style="background-color:#0f172a; border-bottom:1px solid #334155; height:46px; padding:0 18px; display:flex; justify-content:space-between; align-items:center; color:#ffffff; font-size:12px;">
            <!-- Left: File Name -->
            <div style="display:flex; align-items:center; gap:8px; font-weight:600;">
                <span style="color:#ef4444;"><?= icon('file-pdf', 'icon-sm'); ?></span>
                <span>Customer-Journey-Map-Template-v2.pdf</span>
            </div>

            <!-- Center: Page Pagination Controls -->
            <div style="display:flex; align-items:center; gap:10px;">
                <button type="button" class="btn btn-link" style="color:#ffffff;" title="Halaman Sebelumnya">
                    <?= icon('caret-left', 'icon-xs'); ?>
                </button>
                <span style="font-weight:700;">Halaman 14 dari 14 <span style="color:var(--emerald-border); font-size:11px;">(Selesai ✓)</span></span>
                <button type="button" class="btn btn-link" style="color:#ffffff;" title="Halaman Selanjutnya">
                    <?= icon('caret-right', 'icon-xs'); ?>
                </button>
            </div>

            <!-- Right: Zoom & Fullscreen -->
            <div style="display:flex; align-items:center; gap:12px; font-weight:600;">
                <span style="background:var(--slate-800); padding:3px 8px; border-radius:4px; font-size:11px;">100%</span>
            </div>
        </div>

        <!-- Document Sheet Canvas -->
        <div style="height:590px; background-color:#334155; overflow-y:auto; padding:24px; display:flex; justify-content:center;">
            <!-- Document Sheet Mockup -->
            <div style="width:100%; max-width:740px; background:#ffffff; border-radius:6px; box-shadow:0 10px 25px rgba(0,0,0,0.4); padding:32px 36px; color:#1e293b; display:flex; flex-direction:column; justify-content:space-between;">
                <div>
                    <div style="display:flex; justify-content:space-between; align-items:center; border-bottom:2px solid var(--color-primary); padding-bottom:12px; margin-bottom:20px;">
                        <div>
                            <div style="font-size:11px; font-weight:800; color:var(--color-primary); letter-spacing:1px; text-transform:uppercase;">
                                Digital Learn Platform &bull; PM Toolkit #04
                            </div>
                            <h2 style="font-size:20px; font-weight:800; color:#0f172a; margin-top:4px;">
                                Customer Journey Map: Framework &amp; Matriks MVP
                            </h2>
                        </div>
                        <div class="brand-emblem" style="width:36px; height:36px; font-size:12px; border-radius:8px;">DL</div>
                    </div>

                    <!-- Journey Matrix Table -->
                    <div style="border:1px solid var(--color-border); border-radius:8px; overflow:hidden; margin-bottom:16px;">
                        <table style="width:100%; border-collapse:collapse; font-size:12px; text-align:left;">
                            <thead>
                                <tr style="background-color:var(--slate-100); border-bottom:1px solid var(--color-border); font-weight:700;">
                                    <th style="padding:10px 12px;">Tahapan Fase</th>
                                    <th style="padding:10px 12px;">Titik Sentuh (Touchpoint)</th>
                                    <th style="padding:10px 12px;">Kendala / Pain Point</th>
                                    <th style="padding:10px 12px;">Ide Solusi MVP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="border-bottom:1px solid var(--color-border);">
                                    <td style="padding:10px 12px; font-weight:700; color:var(--color-primary);">1. Awareness</td>
                                    <td style="padding:10px 12px;">Social Media, Search Engine</td>
                                    <td style="padding:10px 12px;">Bingung tools yang terpercaya</td>
                                    <td style="padding:10px 12px;">Landing page jelas dengan preview</td>
                                </tr>
                                <tr style="border-bottom:1px solid var(--color-border); background:#fafbfc;">
                                    <td style="padding:10px 12px; font-weight:700; color:var(--color-primary);">2. Consideration</td>
                                    <td style="padding:10px 12px;">Halaman Katalog Course</td>
                                    <td style="padding:10px 12px;">Ragu materi sesuai kebutuhan</td>
                                    <td style="padding:10px 12px;">Silabus transparan &amp; profil instruktur</td>
                                </tr>
                                <tr style="border-bottom:1px solid var(--color-border);">
                                    <td style="padding:10px 12px; font-weight:700; color:var(--color-primary);">3. Decision / Trial</td>
                                    <td style="padding:10px 12px;">Formulir Pendaftaran Singkat</td>
                                    <td style="padding:10px 12px;">Formulir registrasi rumit</td>
                                    <td style="padding:10px 12px;">One-click enrollment tanpa biaya</td>
                                </tr>
                                <tr style="background:#fafbfc;">
                                    <td style="padding:10px 12px; font-weight:700; color:var(--color-primary);">4. Retention</td>
                                    <td style="padding:10px 12px;">Dashboard Progres Belajar</td>
                                    <td style="padding:10px 12px;">Lupa melanjutkan modul</td>
                                    <td style="padding:10px 12px;">Indikator langkah berikutnya &amp; sertifikat</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div style="background-color:var(--info-bg); border:1px solid var(--info-border); border-radius:6px; padding:10px 14px; font-size:12px; color:var(--info-text); display:flex; align-items:center; gap:8px;">
                        <?= icon('info', 'icon-xs'); ?>
                        <span><strong>Catatan Modul:</strong> Matriks ini menjadi acuan utama pada Materi 4 (Wireframing Low-Fidelity).</span>
                    </div>
                </div>

                <div style="display:flex; justify-content:space-between; font-size:11px; color:var(--color-text-muted); border-top:1px solid var(--color-border); padding-top:12px; margin-top:20px;">
                    <span>Dokumen Pelatihan Vokasi &bull; Politeknik STMI Jakarta</span>
                    <span>Halaman 14 dari 14 (Tuntas Selesai)</span>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Action Bar matching design.pen DSG:h9HD4a -->
    <div class="card" style="padding:14px 20px; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px;">
        <a href="<?= base_url('learn/digital-product-fundamentals/quiz/1'); ?>" class="btn btn-secondary btn-sm">
            <?= icon('arrow-left', 'icon-xs'); ?>
            <span>Kembali ke Quiz Checkpoint 1</span>
        </a>

        <div style="font-size:12px; font-weight:600; color:var(--emerald);">
            Dokumen selesai dibaca hingga halaman 14 (Selesai ✓)
        </div>

        <a href="<?= base_url('learn/digital-product-fundamentals/m/3'); ?>" class="btn btn-primary btn-sm">
            <span>Lanjut: Materi 4 (Video)</span>
            <?= icon('arrow-right', 'icon-xs'); ?>
        </a>
    </div>
</div>
