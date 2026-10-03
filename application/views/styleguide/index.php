<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div style="max-width:1200px; margin:32px auto; padding:0 24px; display:flex; flex-direction:column; gap:36px;">
    <!-- Styleguide Header -->
    <div style="border-bottom:2px solid #e2e8f0; padding-bottom:16px;">
        <span class="badge badge-primary" style="font-size:11px; font-weight:800; margin-bottom:8px;">DESIGN SYSTEM SPECIFICATION</span>
        <h1 style="font-size:28px; font-weight:800; color:var(--color-text-main); margin:4px 0;">
            Digital Learn Platform Component Styleguide
        </h1>
        <p style="font-size:14px; color:var(--color-text-secondary); margin:0;">
            Kompilasi komponen antarmuka terstandarisasi berdasarkan <code style="background:#e2e8f0; padding:2px 6px; border-radius:4px;">design.pen</code> dan arsitektur CodeIgniter 3.1.13.
        </p>
    </div>

    <!-- 1. Color Tokens & Visual Identity -->
    <section style="display:flex; flex-direction:column; gap:16px;">
        <h2 style="font-size:18px; font-weight:800; color:var(--color-text-main); border-left:4px solid var(--color-primary); padding-left:10px;">
            1. Color Tokens Palette
        </h2>
        <div style="display:grid; grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); gap:12px;">
            <div style="background:var(--color-primary); color:#ffffff; padding:16px; border-radius:8px; font-size:12px;">
                <strong>Primary Blue</strong><br>#2872fa / var(--color-primary)
            </div>
            <div style="background:var(--color-primary-dark); color:#ffffff; padding:16px; border-radius:8px; font-size:12px;">
                <strong>Primary Dark</strong><br>#1b54bc
            </div>
            <div style="background:var(--emerald); color:#ffffff; padding:16px; border-radius:8px; font-size:12px;">
                <strong>Emerald (Success)</strong><br>#059669
            </div>
            <div style="background:var(--amber); color:#ffffff; padding:16px; border-radius:8px; font-size:12px;">
                <strong>Amber (Warning)</strong><br>#d97706
            </div>
            <div style="background:var(--rose); color:#ffffff; padding:16px; border-radius:8px; font-size:12px;">
                <strong>Rose (Danger)</strong><br>#e11d48
            </div>
            <div style="background:#0f172a; color:#ffffff; padding:16px; border-radius:8px; font-size:12px;">
                <strong>Dark Canvas</strong><br>#0f172a
            </div>
            <div style="background:#f8fafc; border:1px solid #e2e8f0; color:#192a3d; padding:16px; border-radius:8px; font-size:12px;">
                <strong>Page Background</strong><br>#f8fafc
            </div>
        </div>
    </section>

    <!-- 2. Typography Hierarchy -->
    <section style="display:flex; flex-direction:column; gap:12px; background:#ffffff; padding:20px; border-radius:12px; border:1px solid #dfe3ea;">
        <h2 style="font-size:18px; font-weight:800; color:var(--color-text-main); border-left:4px solid var(--color-primary); padding-left:10px;">
            2. Typography Hierarchy (Plus Jakarta Sans)
        </h2>
        <div style="display:flex; flex-direction:column; gap:10px;">
            <div><span style="font-size:11px; color:#64748b;">Display Hero (36px 900):</span> <div style="font-size:32px; font-weight:900;">Kuasai Keahlian Industri Vokasi Digital</div></div>
            <div><span style="font-size:11px; color:#64748b;">H1 Page Title (24px 800):</span> <div style="font-size:24px; font-weight:800;">Digital Product Fundamentals (DP-101)</div></div>
            <div><span style="font-size:11px; color:#64748b;">H2 Section (18px 800):</span> <div style="font-size:18px; font-weight:800;">Kurikulum &amp; Modul Pembelajaran</div></div>
            <div><span style="font-size:11px; color:#64748b;">H3 Subsection (15px 700):</span> <div style="font-size:15px; font-weight:700;">Modul 4: User Journey Mapping &amp; Wireframing</div></div>
            <div><span style="font-size:11px; color:#64748b;">Body Base (14px 400):</span> <div style="font-size:14px; color:var(--color-text-secondary);">Pelajari tahapan merancang produk digital mulai dari validasi masalah hingga rilis MVP terstruktur.</div></div>
        </div>
    </section>

    <!-- 3. Button Component Hierarchy -->
    <section style="display:flex; flex-direction:column; gap:16px;">
        <h2 style="font-size:18px; font-weight:800; color:var(--color-text-main); border-left:4px solid var(--color-primary); padding-left:10px;">
            3. Buttons &amp; Action States
        </h2>
        <div style="display:flex; flex-wrap:wrap; gap:12px; align-items:center; background:#ffffff; padding:20px; border-radius:12px; border:1px solid #dfe3ea;">
            <?= ui_button('Primary Button', 'primary', 'md', 'caret-right', false); ?>
            <?= ui_button('Secondary Button', 'secondary', 'md', 'download-simple', false); ?>
            <?= ui_button('Emerald Action', 'emerald', 'md', 'check-circle', false); ?>
            <?= ui_button('Danger Button', 'danger', 'md', 'x-circle', false); ?>
            <?= ui_button('Ghost Button', 'ghost', 'md'); ?>
            <?= ui_button('Small Button', 'primary', 'sm', 'play'); ?>
            <button class="btn btn-primary" disabled>Disabled State</button>
        </div>
    </section>

    <!-- 4. Badges & Status Indicators -->
    <section style="display:flex; flex-direction:column; gap:16px;">
        <h2 style="font-size:18px; font-weight:800; color:var(--color-text-main); border-left:4px solid var(--color-primary); padding-left:10px;">
            4. Badges &amp; Status Pills
        </h2>
        <div style="display:flex; flex-wrap:wrap; gap:12px; align-items:center; background:#ffffff; padding:20px; border-radius:12px; border:1px solid #dfe3ea;">
            <?= ui_badge('Sedang Berjalan (60%)', 'primary', 'bolt'); ?>
            <?= ui_badge('Selesai ✓ (100%)', 'emerald', 'check-circle'); ?>
            <?= ui_badge('Terkunci 🔒', 'neutral', 'lock'); ?>
            <?= ui_badge('Ragu-ragu (1)', 'amber', 'flag'); ?>
            <?= ui_badge('Gagal / Expired', 'danger', 'x-circle'); ?>
            <span class="badge badge-purple">PRODUCT MANAGEMENT</span>
            <span class="badge badge-rose">DESIGN &amp; CREATIVE</span>
        </div>
    </section>

    <!-- 5. Progress Bars -->
    <section style="display:flex; flex-direction:column; gap:16px;">
        <h2 style="font-size:18px; font-weight:800; color:var(--color-text-main); border-left:4px solid var(--color-primary); padding-left:10px;">
            5. Progress Bars (Dual States: Standard vs Emerald 100%)
        </h2>
        <div style="display:flex; flex-direction:column; gap:14px; background:#ffffff; padding:20px; border-radius:12px; border:1px solid #dfe3ea;">
            <div>
                <div style="display:flex; justify-content:space-between; font-size:12px; font-weight:700; margin-bottom:4px;">
                    <span>Progress Sedang Berjalan (Blue): 60%</span>
                    <span>3 dari 5 Modul</span>
                </div>
                <?= ui_progress(60, 'sm'); ?>
            </div>
            <div>
                <div style="display:flex; justify-content:space-between; font-size:12px; font-weight:700; margin-bottom:4px;">
                    <span>Progress Tuntas Penuh (Emerald): 100% Selesai</span>
                    <span style="color:var(--emerald);">Lulus Ujian &amp; Terbit Sertifikat</span>
                </div>
                <?= ui_progress(100, 'sm'); ?>
            </div>
        </div>
    </section>

    <!-- 6. Form Controls & Input Fields -->
    <section style="display:flex; flex-direction:column; gap:16px;">
        <h2 style="font-size:18px; font-weight:800; color:var(--color-text-main); border-left:4px solid var(--color-primary); padding-left:10px;">
            6. Form Inputs &amp; Controls
        </h2>
        <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:16px; background:#ffffff; padding:20px; border-radius:12px; border:1px solid #dfe3ea;">
            <div class="form-group">
                <label class="form-label" for="sg_text">Standard Input Field</label>
                <input type="text" id="sg_text" class="form-input" placeholder="Masukkan nama lengkap...">
            </div>
            <div class="form-group">
                <label class="form-label" for="sg_select">Select Dropdown</label>
                <select id="sg_select" class="form-input">
                    <option>Product Management</option>
                    <option>UI/UX Design</option>
                    <option>Data Science</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label" for="sg_pwd">Password Input with Toggle</label>
                <div class="input-with-icon" style="position:relative;">
                    <input type="password" id="sg_pwd" class="form-input" value="Rahasia123!">
                    <button type="button" class="btn-password-toggle" data-target="sg_pwd" style="position:absolute; right:12px; top:50%; transform:translateY(-50%); background:none; border:none; color:#64748b; cursor:pointer;">
                        <?= icon('eye', 'icon-xs'); ?>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Alerts & Callouts -->
    <section style="display:flex; flex-direction:column; gap:16px;">
        <h2 style="font-size:18px; font-weight:800; color:var(--color-text-main); border-left:4px solid var(--color-primary); padding-left:10px;">
            7. Alert Callouts
        </h2>
        <div style="display:flex; flex-direction:column; gap:10px;">
            <?= ui_alert('<strong>Aturan Belajar Bertahap:</strong> Video materi harus ditonton minimal 95% dan kuis checkpoint wajib dijawab benar sebelum modul selanjutnya terbuka.', 'info', 'info'); ?>
            <?= ui_alert('<strong>Ujian Akhir:</strong> Waktu tersisa 24 menit 18 detik. Jawaban otomatis tersimpan di cloud.', 'warning', 'clock-countdown'); ?>
            <?= ui_alert('<strong>Selamat!</strong> Anda telah menyelesaikan 100% modul dan lulus Ujian Akhir dengan nilai 85/100.', 'success', 'check-circle'); ?>
        </div>
    </section>
</div>
