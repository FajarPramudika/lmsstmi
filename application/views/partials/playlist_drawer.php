<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    $active_item = isset($active_item) ? (int) $active_item : 1;
    $slug        = isset($course_slug) ? $course_slug : 'digital-product-fundamentals';

    // 6 Canonical materials in Module 4 matching design reference
    $raw_items = [
    1 => [
        'id'    => 1,
        'type'  => 'video',
        'title' => '1. Konsep User Journey Mapping',
        'sub'   => 'Video • 18:45 min (98%)',
        'url'   => base_url('learn/' . $slug . '/video/1'),
    ],
    2 => [
        'id'    => 2,
        'type'  => 'quiz',
        'title' => '2. Pop-up Quiz Checkpoint 1',
        'sub'   => 'Pilihan Ganda (Tanpa Attempt)',
        'url'   => base_url('learn/' . $slug . '/quiz/1'),
    ],
    3 => [
        'id'    => 3,
        'type'  => 'pdf',
        'title' => '3. Template Customer Journey Map',
        'sub'   => 'Dokumen PDF • 14 Halaman',
        'url'   => base_url('learn/' . $slug . '/pdf/1'),
    ],
    4 => [
        'id'    => 4,
        'type'  => 'video',
        'title' => '4. Praktik Wireframe Low-Fidelity',
        'sub'   => 'Video • 24:30 min (Progres 45%)',
        'url'   => base_url('learn/' . $slug . '/video/2'),
    ],
    5 => [
        'id'    => 5,
        'type'  => 'quiz',
        'title' => '5. Pop-up Quiz Checkpoint 2',
        'sub'   => 'Pilihan Ganda (2 Attempt)',
        'url'   => base_url('learn/' . $slug . '/quiz/2'),
    ],
    6 => [
        'id'    => 6,
        'type'  => 'article',
        'title' => '6. Handover Desain ke Engineering',
        'sub'   => 'Artikel Teks • Baca 10 min',
        'url'   => base_url('learn/' . $slug . '/article/1'),
    ],
    ];

    // Progress calculation based on active page matching design-reference
    if ($active_item === 1) {
    $progress_text = '3 dari 6 Selesai';
    $fill_percent  = 50;
    } elseif ($active_item === 2) {
    $progress_text = '1 dari 6 Selesai';
    $fill_percent  = 17;
    } elseif ($active_item === 3) {
    $progress_text = '2 dari 6 Selesai';
    $fill_percent  = 33;
    } elseif ($active_item === 6) {
    $progress_text = '5 dari 6 Selesai';
    $fill_percent  = 83;
    } else {
    $progress_text = max(1, $active_item - 1) . ' dari 6 Selesai';
    $fill_percent  = round((max(1, $active_item - 1) / 6) * 100);
    }
?>

<!-- Curriculum Playlist Drawer matching design-reference/video-material.html line 79 -->
<aside data-pencil-name="Curriculum Playlist Drawer"
    style="align-items: flex-start; background-color: #ffffff; border-radius: 12px; box-shadow: 0px 1px 4px rgba(16, 24, 40, 0.04); box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 10px; height: fit-content; min-height: 720px; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 14px 16px; width: 396px;">

    <!-- Playlist Header -->
    <div data-pencil-name="Playlist Header"
        style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 4px; height: fit-content; justify-content: flex-start; width: 100%;">
        <div data-pencil-name="Playlist Title Row"
            style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; width: 100%;">
            <div data-pencil-name="PL Title"
                style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 14px; font-weight: 800; text-align: left; white-space: nowrap;'>
                Kurikulum Modul 4
            </div>
            <div data-pencil-name="PL Progress Text"
                style='box-sizing: border-box; color: #2872fa; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 700; text-align: left; white-space: nowrap;'>
                <?php echo $progress_text; ?>
            </div>
        </div>
        <div data-pencil-name="PL Sub"
            style='box-sizing: border-box; color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-weight: 400; text-align: left; white-space: nowrap;'>
            User Journey Mapping &amp; Wireframing
        </div>
        <div data-pencil-name="PL Track"
            style="align-items: flex-start; background-color: #e2e8f0; border-radius: 999px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 6px; justify-content: flex-start; width: 100%;">
            <div data-pencil-name="PL Fill"
                style="align-items: flex-start; background-color: #2872fa; border-radius: 999px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 6px; justify-content: flex-start; width: <?php echo $fill_percent; ?>%;">
            </div>
        </div>
    </div>

    <!-- Playlist Items List -->
    <div data-pencil-name="PL Items List"
        style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; width: 100%;">
        <?php
            foreach ($raw_items as $idx => $it):
                $is_current = ($idx === $active_item);

                // Determine state and badge matching design references
                if ($is_current) {
                    $state = 'active';
                    if ($it['type'] === 'video') {
                        $badge_text = 'Diputar ▶';
                    } elseif ($it['type'] === 'quiz') {
                    $badge_text = 'Aktif';
                } elseif ($it['type'] === 'pdf') {
                    $badge_text = 'Dibuka';
                } else {
                    $badge_text = 'Dibaca';
                }
            } elseif ($active_item === 1 && $idx === 4) {
                // Special case for video-material.html Screen 8: item 4 is in progress 45%
                $state      = 'in_progress';
                $badge_text = '45%';
            } elseif ($idx < $active_item || ($active_item === 1 && ($idx === 2 || $idx === 3))) {
                $state = 'completed';
                if ($it['type'] === 'quiz') {
                    $badge_text = 'Benar ✓';
                } else {
                    $badge_text = 'Selesai ✓';
                }
            } else {
                $state      = 'locked';
                $badge_text = 'Terkunci';
            }
        ?>

        <?php if ($state === 'active'): ?>
            <!-- Active Item (Outline Blue 1.5px, Soft Blue BG) -->
            <a href="<?php echo e($it['url']); ?>" data-pencil-name="Playlist Item Frame"
                style="text-decoration:none; align-items: center; background-color: #eff6ff; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; outline-offset: -0.75px; outline: 1.5px solid #2872fa; padding: 8px 10px; width: 100%;">
                <div style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; gap: 8px; height: fit-content; justify-content: flex-start;">
                    <?php if ($it['type'] === 'video'): ?>
                        <svg viewBox="0 0 14 14" style="height: 15px; width: 15px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 1.3125q-1.53125 0-2.84375 0.76563-1.3125 0.76563-2.07813 2.07812-0.76563 1.3125-0.76562 2.84375 0 1.53125 0.76562 2.84375 0.76563 1.3125 2.07813 2.07813 1.3125 0.76563 2.84375 0.76562 1.53125 0 2.84375-0.76562 1.3125-0.76563 2.07813-2.07813 0.76563-1.3125 0.76562-2.84375 0-1.53125-0.76562-2.84375-0.76563-1.3125-2.07813-2.07813-1.3125-0.76563-2.84375-0.76562z m0 10.5q-1.3125 0-2.40625-0.65625-1.09375-0.65625-1.75-1.75-0.65625-1.09375-0.65625-2.40625 0-1.3125 0.65625-2.40625 0.65625-1.09375 1.75-1.75 1.09375-0.65625 2.40625-0.65625 1.3125 0 2.40625 0.65625 1.09375 0.65625 1.75 1.75 0.65625 1.09375 0.65625 2.40625 0 1.3125-0.65625 2.40625-0.65625 1.09375-1.75 1.75-1.09375 0.65625-2.40625 0.65625z m1.96875-5.19531l-2.625-1.75q-0.21875-0.10938-0.4375 0-0.21875 0.10938-0.21875 0.38281l0 3.5q0 0.27344 0.21875 0.38281 0.10938 0.05469 0.21875 0.05469 0.10938 0 0.21875-0.05469l2.625-1.75q0.21875-0.16406 0.21875-0.38281 0-0.21875-0.21875-0.38281z" fill="#2872fa"></path>
                        </svg>
                    <?php elseif ($it['type'] === 'quiz'): ?>
                        <svg viewBox="0 0 14 14" style="height: 15px; width: 15px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 1.3125q-1.53125 0-2.84375 0.76563-1.3125 0.76563-2.07813 2.07812-0.76563 1.3125-0.76562 2.84375 0 1.53125 0.76562 2.84375 0.76563 1.3125 2.07813 2.07813 1.3125 0.76563 2.84375 0.76562 1.53125 0 2.84375-0.76562 1.3125-0.76563 2.07813-2.07813 0.76563-1.3125 0.76562-2.84375 0-1.53125-0.76562-2.84375-0.76563-1.3125-2.07813-2.07813-1.3125-0.76563-2.84375-0.76562z m0.65625 8.53125q0 0.27344-0.19141 0.46484-0.19141 0.19141-0.46484 0.19141-0.27344 0-0.46484-0.19141-0.19141-0.19141-0.19141-0.46484 0-0.27344 0.19141-0.46484 0.19141-0.19141 0.46484-0.19141 0.27344 0 0.46484 0.19141 0.19141 0.19141 0.19141 0.46484z" fill="#2872fa"></path>
                        </svg>
                    <?php elseif ($it['type'] === 'pdf'): ?>
                        <svg viewBox="0 0 14 14" style="height: 15px; width: 15px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.70313 4.48438l-3.0625-3.0625q-0.16406-0.10938-0.32813-0.10938l-5.25 0q-0.38281 0-0.62891 0.24609-0.24609 0.24609-0.24609 0.62891l0 9.625q0 0.38281 0.24609 0.62891 0.24609 0.24609 0.62891 0.24609l7.875 0q0.38281 0 0.62891-0.24609 0.24609-0.24609 0.24609-0.62891l0-7q0-0.16406-0.10937-0.32813z" fill="#2872fa"></path>
                        </svg>
                    <?php else: ?>
                        <svg viewBox="0 0 14 14" style="height: 15px; width: 15px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.8125 2.1875l-9.625 0q-0.38281 0-0.62891 0.24609-0.24609 0.24609-0.24609 0.62891l0 7.875q0 0.38281 0.24609 0.62891 0.24609 0.24609 0.62891 0.24609l9.625 0q0.38281 0 0.62891-0.24609 0.24609-0.24609 0.24609-0.62891l0-7q0-0.16406-0.24609-0.62891-0.24609-0.24609-0.62891-0.24609z" fill="#2872fa"></path>
                        </svg>
                    <?php endif; ?>
                    <div style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; gap: 1px;">
                        <div style='color: #1d4ed8; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-weight: 700; white-space: nowrap;'>
                            <?php echo e($it['title']); ?>
                        </div>
                        <div style='color: #2563eb; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 400; white-space: nowrap;'>
                            <?php echo e($it['sub']); ?>
                        </div>
                    </div>
                </div>
                <div style="align-items: center; background-color: #2872fa; border-radius: 4px; box-sizing: border-box; display: flex; padding: 2px 6px;">
                    <div style='color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 700; white-space: nowrap;'>
                        <?php echo e($badge_text); ?>
                    </div>
                </div>
            </a>

        <?php elseif ($state === 'completed'): ?>
            <!-- Completed Item (Green Badge & Green Icon) -->
            <a href="<?php echo e($it['url']); ?>" data-pencil-name="Playlist Item Frame"
                style="text-decoration:none; align-items: center; background-color: #ffffff; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 8px 10px; width: 100%; transition: background 0.15s ease;">
                <div style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; gap: 8px; height: fit-content; justify-content: flex-start;">
                    <svg viewBox="0 0 14 14" style="height: 15px; width: 15px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.73438 5.35938q0.10938 0.16406 0.10937 0.35546 0 0.19141-0.10937 0.30079l-3.22657 3.0625q-0.10938 0.10938-0.30078 0.10937-0.19141 0-0.30078-0.10937l-1.58594-1.53125q-0.21875-0.16406-0.16406-0.4375 0.05469-0.27344 0.30078-0.32813 0.24609-0.05469 0.41016 0.10938l1.3125 1.25781 2.95312-2.78906q0.10938-0.10938 0.30078-0.10938 0.19141 0 0.30078 0.16406l0-0.05468z m2.95312 1.64062q0 1.53125-0.76563 2.84375-0.76563 1.3125-2.07812 2.07813-1.3125 0.76563-2.84375 0.76562-1.53125 0-2.84375-0.76562-1.3125-0.76563-2.07813-2.07813-0.76563-1.3125-0.76562-2.84375 0-1.53125 0.76562-2.84375 0.76563-1.3125 2.07813-2.07813 1.3125-0.76563 2.84375-0.76562 1.53125 0 2.84375 0.76562 1.3125 0.76563 2.07813 2.07813 0.76563 1.3125 0.76562 2.84375z" fill="#10b981"></path>
                    </svg>
                    <div style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; gap: 1px;">
                        <div style='color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-weight: 600; white-space: nowrap;'>
                            <?php echo e($it['title']); ?>
                        </div>
                        <div style='color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 400; white-space: nowrap;'>
                            <?php echo e($it['sub']); ?>
                        </div>
                    </div>
                </div>
                <div style="align-items: center; background-color: #ecfdf5; border-radius: 4px; box-sizing: border-box; display: flex; padding: 2px 6px;">
                    <div style='color: #059669; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 700; white-space: nowrap;'>
                        <?php echo e($badge_text); ?>
                    </div>
                </div>
            </a>

        <?php elseif ($state === 'in_progress'): ?>
            <!-- In-progress item (Item 4 in video-material.html) -->
            <a href="<?php echo e($it['url']); ?>" data-pencil-name="Playlist Item Frame"
                style="text-decoration:none; align-items: center; background-color: #ffffff; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 8px 10px; width: 100%;">
                <div style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; gap: 8px; height: fit-content; justify-content: flex-start;">
                    <svg viewBox="0 0 14 14" style="height: 15px; width: 15px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.34375 3.99219q-0.21875-0.10938-0.4375 0l-2.40625 1.36719 0-0.32813q0-0.92969-0.62891-1.55859-0.62891-0.62891-1.55859-0.62891l-7 0q-0.38281 0-0.62891 0.24609-0.24609 0.24609-0.24609 0.62891l0 5.25q0 0.92969 0.62891 1.55859 0.62891 0.62891 1.55859 0.62891l7 0q0.38281 0 0.62891-0.24609 0.24609-0.24609 0.24609-0.62891l0-1.64063 2.40625 1.36719q0.10938 0.05469 0.21875 0.05469 0.10938 0 0.21875-0.05469 0.21875-0.10937 0.21875-0.38281l0-5.25q0-0.27344-0.21875-0.38281z" fill="#2872fa"></path>
                    </svg>
                    <div style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; gap: 1px;">
                        <div style='color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-weight: 600; white-space: nowrap;'>
                            <?php echo e($it['title']); ?>
                        </div>
                        <div style='color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 400; white-space: nowrap;'>
                            <?php echo e($it['sub']); ?>
                        </div>
                    </div>
                </div>
                <div style="align-items: center; background-color: #f0f9ff; border-radius: 4px; box-sizing: border-box; display: flex; padding: 2px 6px;">
                    <div style='color: #0284c7; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 700; white-space: nowrap;'>
                        <?php echo e($badge_text); ?>
                    </div>
                </div>
            </a>

        <?php else: ?>
            <!-- Locked Item (Opacity 0.7, Lock Icon) -->
            <div data-pencil-name="Playlist Item Frame"
                style="align-items: center; background-color: #ffffff; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; opacity: 0.7; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 8px 10px; width: 100%;">
                <div style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; gap: 8px; height: fit-content; justify-content: flex-start;">
                    <svg viewBox="0 0 14 14" style="height: 15px; width: 15px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.375 4.375l-1.96875 0 0-1.53125q0-0.98438-0.71094-1.69531-0.71094-0.71094-1.69531-0.71094-0.98438 0-1.69531 0.71094-0.71094 0.71094-0.71094 1.69531l0 1.53125-1.96875 0q-0.38281 0-0.62891 0.24609-0.24609 0.24609-0.24609 0.62891l0 6.125q0 0.38281 0.24609 0.62891 0.24609 0.24609 0.62891 0.24609l8.75 0q0.38281 0 0.62891-0.24609 0.24609-0.24609 0.24609-0.62891l0-6.125q0-0.38281-0.24609-0.62891-0.24609-0.24609-0.62891-0.24609z m-5.90625-1.53125q0-0.65625 0.4375-1.09375 0.4375-0.4375 1.09375-0.4375 0.65625 0 1.09375 0.4375 0.4375 0.4375 0.4375 1.09375l0 1.53125-3.0625 0 0-1.53125z" fill="#94a3b8"></path>
                    </svg>
                    <div style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; gap: 1px;">
                        <div style='color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-weight: 600; white-space: nowrap;'>
                            <?php echo e($it['title']); ?>
                        </div>
                        <div style='color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 400; white-space: nowrap;'>
                            <?php echo e($it['sub']); ?>
                        </div>
                    </div>
                </div>
                <div style="align-items: center; background-color: #f1f5f9; border-radius: 4px; box-sizing: border-box; display: flex; padding: 2px 6px;">
                    <div style='color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 700; white-space: nowrap;'>
                        <?php echo e($badge_text); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php endforeach; ?>
    </div>
</aside>
