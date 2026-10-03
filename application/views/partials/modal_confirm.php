<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$modal_id = isset($modal_id) ? $modal_id : 'confirmModal';
$title = isset($modal_title) ? $modal_title : 'Konfirmasi Tindakan';
$message = isset($modal_message) ? $modal_message : 'Apakah Anda yakin ingin melanjutkan tindakan ini?';
$confirm_text = isset($modal_confirm_text) ? $modal_confirm_text : 'Ya, Lanjutkan';
$confirm_class = isset($modal_confirm_class) ? $modal_confirm_class : 'btn-primary';
$action_url = isset($modal_action_url) ? $modal_action_url : '#';
?>
<!-- Reusable Modal Confirm Dialog -->
<div class="modal-backdrop" id="<?= e($modal_id); ?>">
    <div class="modal-dialog">
        <div class="modal-header">
            <h3 style="font-size:16px; font-weight:700; color:var(--color-text-main); margin:0;"><?= e($title); ?></h3>
            <button type="button" class="btn btn-link" style="color:var(--color-text-muted); font-size:20px; line-height:1;" onclick="closeModal('<?= e($modal_id); ?>')">&times;</button>
        </div>
        <div class="modal-body" style="font-size:14px; color:var(--color-text-body); line-height:1.5;">
            <p><?= $message; ?></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onclick="closeModal('<?= e($modal_id); ?>')">Batal</button>
            <a href="<?= e($action_url); ?>" class="btn <?= e($confirm_class); ?>"><?= e($confirm_text); ?></a>
        </div>
    </div>
</div>
