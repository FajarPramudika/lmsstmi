<?php
    defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Sign Up Form Panel matching design.pen DSG:tdAn0 -->
<div class="auth-form-container">
    <!-- Top Back Link -->
    <div style="margin-bottom:20px;">
        <a href="<?php echo base_url(); ?>" class="btn btn-link" style="color:var(--color-text-muted); font-size:13px; display:inline-flex; align-items:center; gap:6px; padding:0;">
            <?php echo icon('arrow-left', 'icon-xs'); ?>
            <span>Kembali ke Beranda</span>
        </a>
    </div>

    <!-- Brand Logo Group matching design-reference -->
    <a href="<?php echo base_url(); ?>" style="display:flex; align-items:center; gap:12px; text-decoration:none; margin-bottom:24px; width:fit-content;">
        <div class="brand-emblem" style="width:40px; height:40px; font-size:14px; border-radius:10px;">DL</div>
        <div class="brand-titles">
            <span class="brand-name" style="font-size:14px; font-weight:800; color:var(--color-text-main);">DigiLearn</span>
            <span class="brand-sub" style="font-size:11px; color:var(--color-text-muted);">Politeknik STMI Jakarta</span>
        </div>
    </a>

    <!-- Header Brand & Title -->
    <div style="margin-bottom:24px;">
        <h1 class="heading-h1" style="color:var(--color-text-main); margin-bottom:6px;">Daftar Akun Baru</h1>
        <p style="font-size:14px; color:var(--color-text-muted);">
            Lengkapi data berikut untuk membuat akun peserta dan mulai belajar mandiri.
        </p>
    </div>

    <!-- Registration Form (4 Mandatory Fields per BRD) -->
    <form action="<?php echo base_url('register'); ?>" method="POST">
        <!-- 1. Full Name -->
        <div class="form-group">
            <label class="form-label" for="name">Nama Lengkap</label>
            <div class="input-wrap">
                <span class="input-icon-left"><?php echo icon('user'); ?></span>
                <input type="text" id="name" name="name" class="form-control has-icon-left" placeholder="Contoh: Muhammad Raihan" required>
            </div>
        </div>

        <!-- 2. Email -->
        <div class="form-group">
            <label class="form-label" for="email">Alamat Email</label>
            <div class="input-wrap">
                <span class="input-icon-left"><?php echo icon('user'); ?></span>
                <input type="email" id="email" name="email" class="form-control has-icon-left" placeholder="nama@email.com" required>
            </div>
        </div>

        <!-- 3. Password -->
        <div class="form-group">
            <label class="form-label" for="password">Kata Sandi</label>
            <div class="input-wrap">
                <span class="input-icon-left"><?php echo icon('lock'); ?></span>
                <input type="password" id="password" name="password" class="form-control has-icon-left has-icon-right" placeholder="Minimal 8 karakter (huruf &amp; angka)" required>
                <span class="input-icon-right toggle-password-btn" data-target="password">
                    <?php echo icon('eye'); ?>
                </span>
            </div>
        </div>

        <!-- 4. Confirm Password -->
        <div class="form-group">
            <label class="form-label" for="confirm_password">Konfirmasi Kata Sandi</label>
            <div class="input-wrap">
                <span class="input-icon-left"><?php echo icon('lock'); ?></span>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control has-icon-left has-icon-right" placeholder="Ulangi kata sandi Anda" required>
                <span class="input-icon-right toggle-password-btn" data-target="confirm_password">
                    <?php echo icon('eye'); ?>
                </span>
            </div>
        </div>

        <!-- Terms & Privacy Checkbox (BRD BR-01) -->
        <div class="form-group" style="margin-top:6px; margin-bottom:20px;">
            <label class="form-check">
                <input type="checkbox" name="terms" class="form-check-input" required checked>
                <span class="form-check-label">
                    Saya menyetujui <a href="#" style="color:var(--color-primary); font-weight:600;">Syarat &amp; Ketentuan</a> serta <a href="#" style="color:var(--color-primary); font-weight:600;">Kebijakan Privasi</a>.
                </span>
            </label>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary btn-lg" style="width:100%; height:48px;">
            <span>Daftar Akun Baru</span>
            <?php echo icon('arrow-right', 'icon-xs'); ?>
        </button>

        <!-- Switcher to Login -->
        <div style="text-align:center; font-size:13px; color:var(--color-text-muted); margin-top:20px;">
            Sudah memiliki akun?
            <a href="<?php echo base_url('login'); ?>" style="font-weight:700; color:var(--color-primary);">Masuk di sini</a>
        </div>
    </form>
</div>

<!-- Form Footer Copyright -->
<div style="font-size:12px; color:var(--color-text-muted); text-align:center; margin-top:24px;">
    &copy; 2026 Digital Learn Platform &bull; Politeknik STMI Jakarta.
</div>
