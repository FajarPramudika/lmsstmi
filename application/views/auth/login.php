<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Sign In Form Panel matching design.pen DSG:Iu83q -->
<div class="auth-form-container">
    <!-- Top Back Link -->
    <a href="<?= base_url(); ?>" class="btn btn-link" style="color:var(--color-text-muted); font-size:13px; margin-bottom:32px; display:inline-flex; align-items:center; gap:6px;">
        <?= icon('arrow-left', 'icon-xs'); ?>
        <span>Kembali ke Beranda</span>
    </a>

    <!-- Header Brand & Title -->
    <div style="margin-bottom:28px;">
        <h1 class="heading-h1" style="color:var(--color-text-main); margin-bottom:6px;">Masuk ke Akun Anda</h1>
        <p style="font-size:14px; color:var(--color-text-muted);">
            Gunakan email dan kata sandi Anda untuk mengakses platform pembelajaran digital.
        </p>
    </div>

    <!-- Sign In Form -->
    <form action="<?= base_url('login'); ?>" method="POST">
        <!-- Email Field -->
        <div class="form-group">
            <label class="form-label" for="email">Alamat Email</label>
            <div class="input-wrap">
                <span class="input-icon-left"><?= icon('user'); ?></span>
                <input type="email" id="email" name="email" class="form-control has-icon-left" placeholder="nama@email.com" value="raihan@digitallearn.test" required>
            </div>
        </div>

        <!-- Password Field -->
        <div class="form-group">
            <div class="form-label">
                <label for="password" style="margin:0;">Kata Sandi</label>
                <a href="<?= base_url('forgot-password'); ?>" style="font-size:12px; font-weight:600; color:var(--color-primary);">Lupa kata sandi?</a>
            </div>
            <div class="input-wrap">
                <span class="input-icon-left"><?= icon('lock'); ?></span>
                <input type="password" id="password" name="password" class="form-control has-icon-left has-icon-right" placeholder="••••••••••••" value="password123" required>
                <span class="input-icon-right toggle-password-btn" data-target="password" title="Lihat Sandi">
                    <?= icon('eye'); ?>
                </span>
            </div>
        </div>

        <!-- Remember Me Checkbox -->
        <div class="form-group" style="margin-top:4px; margin-bottom:24px;">
            <label class="form-check">
                <input type="checkbox" name="remember" class="form-check-input" checked>
                <span class="form-check-label">Ingat saya selama 30 hari</span>
            </label>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary btn-lg" style="width:100%; height:48px;">
            <span>Masuk Sekarang</span>
            <?= icon('arrow-right', 'icon-xs'); ?>
        </button>

        <!-- Switcher to Register -->
        <div style="text-align:center; font-size:13px; color:var(--color-text-muted); margin-top:24px;">
            Belum memiliki akun? 
            <a href="<?= base_url('register'); ?>" style="font-weight:700; color:var(--color-primary);">Daftar Akun Baru</a>
        </div>
    </form>
</div>

<!-- Form Footer Copyright -->
<div style="font-size:12px; color:var(--color-text-muted); text-align:center; margin-top:32px;">
    &copy; 2026 Digital Learn Platform &bull; Politeknik STMI Jakarta.
</div>
