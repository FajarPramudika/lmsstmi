<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_item = isset($active_item) ? (int)$active_item : 2;
$slug = isset($course_slug) ? $course_slug : 'digital-product-fundamentals';

// 6 Canonical items for Module 4 matching design reference
$items = array(
    1 => array(
        'num' => 1,
        'type' => 'video',
        'title' => '1. Konsep User Journey Mapping',
        'sub' => 'Video • 18:45 min (98% Ditonton)',
        'default_status' => 'completed',
        'url' => base_url('learn/' . $slug . '/video/1')
    ),
    2 => array(
        'num' => 2,
        'type' => 'quiz',
        'title' => '2. Pop-up Quiz Checkpoint 1',
        'sub' => 'Pilihan Ganda (Tanpa Attempt)',
        'default_status' => 'active',
        'url' => base_url('learn/' . $slug . '/quiz/1')
    ),
    3 => array(
        'num' => 3,
        'type' => 'pdf',
        'title' => '3. Template Customer Journey Map',
        'sub' => 'Dokumen PDF • 14 Halaman',
        'default_status' => 'locked',
        'url' => base_url('learn/' . $slug . '/pdf/1')
    ),
    4 => array(
        'num' => 4,
        'type' => 'video',
        'title' => '4. Praktik Wireframe Low-Fidelity',
        'sub' => 'Video • 24:30 min',
        'default_status' => 'locked',
        'url' => base_url('learn/' . $slug . '/video/2')
    ),
    5 => array(
        'num' => 5,
        'type' => 'quiz',
        'title' => '5. Pop-up Quiz Checkpoint 2',
        'sub' => 'Pilihan Ganda (2 Attempt)',
        'default_status' => 'locked',
        'url' => base_url('learn/' . $slug . '/quiz/2')
    ),
    6 => array(
        'num' => 6,
        'type' => 'article',
        'title' => '6. Handover Desain ke Engineering',
        'sub' => 'Artikel Teks • Baca 10 min',
        'default_status' => 'locked',
        'url' => base_url('learn/' . $slug . '/article/1')
    )
);

// Determine dynamic item status based on active_item
$finished_count = max(1, $active_item - 1);
$track_width = round(($finished_count / count($items)) * 100);
?>
<!-- Playlist / Curriculum Drawer (396px) matching quiz-checkpoint-1.html & video-material.html -->
<aside class="pl-drawer">
    <!-- Drawer Header Card -->
    <div class="pl-header-card">
        <div style="display:flex; justify-content:space-between; align-items:center;">
            <div style="color:#192a3d; font-size:14px; font-weight:700;">Kurikulum Modul 4</div>
            <div style="color:#2872fa; font-size:12px; font-weight:600;"><?= $finished_count; ?> dari <?= count($items); ?> Selesai</div>
        </div>
        <div style="color:#64748b; font-size:11px; font-weight:500;">User Journey Mapping &amp; Wireframing</div>
        <div style="background-color:#f1f5f9; border-radius:3px; height:6px; width:100%; overflow:hidden;">
            <div style="background-color:#2872fa; border-radius:3px; height:6px; width:<?= $track_width; ?>%;"></div>
        </div>
    </div>

    <!-- Items List -->
    <div style="display:flex; flex-direction:column; gap:8px; width:100%;">
        <?php foreach ($items as $idx => $it): 
            $status = 'locked';
            if ($idx < $active_item) {
                $status = 'completed';
            } elseif ($idx === $active_item) {
                $status = 'active';
            }
        ?>
            <?php if ($status === 'completed'): ?>
                <!-- Completed State -->
                <a href="<?= e($it['url']); ?>" class="pl-item" style="color:inherit; text-decoration:none;">
                    <div style="display:flex; align-items:center; gap:10px;">
                        <?= icon('check-circle', 'icon-sm', 'style="color:#10b981; flex-shrink:0;"'); ?>
                        <div style="display:flex; flex-direction:column; gap:2px;">
                            <div style="color:#192a3d; font-size:12px; font-weight:600;"><?= e($it['title']); ?></div>
                            <div style="color:#64748b; font-size:10px; font-weight:500;"><?= e($it['sub']); ?></div>
                        </div>
                    </div>
                    <span class="pl-item-badge-done">Selesai ✓</span>
                </a>

            <?php elseif ($status === 'active'): ?>
                <!-- Active State -->
                <a href="<?= e($it['url']); ?>" class="pl-item is-active" style="color:inherit; text-decoration:none;">
                    <div style="display:flex; align-items:center; gap:10px;">
                        <?php if ($it['type'] === 'quiz'): ?>
                            <?= icon('question', 'icon-sm', 'style="color:#2872fa; flex-shrink:0;"'); ?>
                        <?php elseif ($it['type'] === 'pdf'): ?>
                            <?= icon('file-text', 'icon-sm', 'style="color:#2872fa; flex-shrink:0;"'); ?>
                        <?php elseif ($it['type'] === 'article'): ?>
                            <?= icon('browser', 'icon-sm', 'style="color:#2872fa; flex-shrink:0;"'); ?>
                        <?php else: ?>
                            <?= icon('video', 'icon-sm', 'style="color:#2872fa; flex-shrink:0;"'); ?>
                        <?php endif; ?>
                        <div style="display:flex; flex-direction:column; gap:2px;">
                            <div style="color:#192a3d; font-size:12px; font-weight:700;"><?= e($it['title']); ?></div>
                            <div style="color:#2872fa; font-size:10px; font-weight:600;"><?= e($it['sub']); ?></div>
                        </div>
                    </div>
                    <span class="pl-item-badge-active">Aktif ✍️</span>
                </a>

            <?php else: ?>
                <!-- Locked State -->
                <div class="pl-item is-locked">
                    <div style="display:flex; align-items:center; gap:10px;">
                        <?php if ($it['type'] === 'quiz'): ?>
                            <?= icon('question', 'icon-sm', 'style="color:#94a3b8; flex-shrink:0;"'); ?>
                        <?php elseif ($it['type'] === 'pdf'): ?>
                            <?= icon('file-text', 'icon-sm', 'style="color:#94a3b8; flex-shrink:0;"'); ?>
                        <?php elseif ($it['type'] === 'article'): ?>
                            <?= icon('browser', 'icon-sm', 'style="color:#94a3b8; flex-shrink:0;"'); ?>
                        <?php else: ?>
                            <?= icon('video', 'icon-sm', 'style="color:#94a3b8; flex-shrink:0;"'); ?>
                        <?php endif; ?>
                        <div style="display:flex; flex-direction:column; gap:2px;">
                            <div style="color:#64748b; font-size:12px; font-weight:500;"><?= e($it['title']); ?></div>
                            <div style="color:#94a3b8; font-size:10px; font-weight:500;"><?= e($it['sub']); ?></div>
                        </div>
                    </div>
                    <span class="pl-item-badge-locked">Terkunci 🔒</span>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</aside>
