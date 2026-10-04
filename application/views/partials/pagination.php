<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    $current_page = isset($current_page) ? (int) $current_page : 1;
    $total_pages  = isset($total_pages) ? (int) $total_pages : 3;
    $info_text    = isset($pagination_info) ? $pagination_info : 'Menampilkan 1–6 dari 6 course terdaftar';
?>
<!-- Course Catalog Pagination Toolbar matching landing.html & course-catalog.html -->
<div class="catalog-pagination-bar">
    <div style="font-size:13px; color:#667085; font-weight:500;">
        <?php echo e($info_text); ?>
    </div>

    <div style="display:flex; align-items:center; gap:8px;">
        <!-- Previous Page Button -->
        <a href="javascript:void(0)" class="page-btn <?php echo($current_page <= 1) ? 'is-disabled' : ''; ?>" style="gap:6px;">
            <?php echo icon('caret-left', 'icon-xs'); ?>
            <span>Sebelumnya</span>
        </a>

        <!-- Page Numbers -->
        <a href="javascript:void(0)" class="page-btn <?php echo($current_page === 1) ? 'is-active' : ''; ?>">1</a>
        <a href="javascript:void(0)" class="page-btn <?php echo($current_page === 2) ? 'is-active' : ''; ?>">2</a>
        <a href="javascript:void(0)" class="page-btn <?php echo($current_page === 3) ? 'is-active' : ''; ?>">3</a>

        <span style="color:#94a3b8; font-size:13px; font-weight:600; padding:0 4px;">...</span>

        <!-- Next Page Button -->
        <a href="javascript:void(0)" class="page-btn <?php echo($current_page >= $total_pages) ? 'is-disabled' : ''; ?>" style="gap:6px;">
            <span>Selanjutnya</span>
            <?php echo icon('caret-right', 'icon-xs'); ?>
        </a>
    </div>
</div>
