<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    $certificates = isset($certificates) ? $certificates : [
    [
        'id'            => 'DL-2026-000001',
        'code'          => 'DP-101',
        'title'         => 'Digital Product Fundamentals',
        'category'      => 'Product Management',
        'category_slug' => 'product-management',
        'issue_date'    => '14 Oktober 2026',
        'timestamp'     => 1791936000,
        'score'         => 85,
    ],
    [
        'id'            => 'DL-2026-000042',
        'code'          => 'UI-301',
        'title'         => 'UI/UX Design Principles',
        'category'      => 'Design & Creative',
        'category_slug' => 'design-creative',
        'issue_date'    => '28 September 2026',
        'timestamp'     => 1790553600,
        'score'         => 92,
    ],
    [
        'id'            => 'DL-2026-000088',
        'code'          => 'DA-201',
        'title'         => 'Data Analytics Essentials',
        'category'      => 'Data Science',
        'category_slug' => 'data-science',
        'issue_date'    => '15 Agustus 2026',
        'timestamp'     => 1786752000,
        'score'         => 78,
    ],
    ];
?>

<div style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; gap: 20px; justify-content: flex-start; width: 100%; max-width: var(--container-max-app, 1440px); margin: 0 auto;">

    <!-- Certificates Header Row matching design-reference/certificates-collection.html -->
    <div data-pencil-name="Certificates Header Row"
        style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; width: 100%;">
        <div data-pencil-name="Head Left Group"
            style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 4px; height: fit-content; justify-content: flex-start; width: fit-content">
            <div data-pencil-name="Head Main Title"
                style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 22px; font-style: normal; font-weight: 800; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap'>
                Koleksi Sertifikat Digital
            </div>
            <div data-pencil-name="Head Subtitle"
                style='box-sizing: border-box; color: #667085; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 500; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap'>
                Kredensial resmi yang diterbitkan otomatis setelah menyelesaikan seluruh modul dan lulus Ujian Akhir
            </div>
        </div>
    </div>

    <!-- Certificates Search and Filter Toolbar matching design-reference/certificates-collection.html -->
    <div data-pencil-name="Certificates Search and Filter Toolbar"
        style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 16px; height: 44px; justify-content: space-between; width: 100%;">

        <!-- Search Input Box -->
        <div data-pencil-name="Certificates Search Input Box"
            style="align-items: center; background-color: #ffffff; border-radius: 10px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 12px; height: 44px; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 0px 16px; width: 560px;">
            <svg data-pencil-name="Search Icon" data-icon-name="magnifying-glass" data-icon-set="phosphor"
                viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"
                style="box-sizing: border-box; flex-shrink: 0; height: 17px; width: 17px">
                <path
                    d="M12.57813 11.92188l-2.40625-2.35157q0.875-1.03906 1.12109-2.29687 0.24609-1.25781-0.16406-2.51563-0.41016-1.25781-1.39453-2.16015-0.98438-0.90234-2.24219-1.17578-1.25781-0.27344-2.51563 0.05468-1.25781 0.32813-2.21484 1.28516-0.95703 0.95703-1.28516 2.21484-0.32813 1.25781-0.05468 2.51563 0.27344 1.25781 1.17578 2.24219 0.90234 0.98438 2.16015 1.39453 1.25781 0.41016 2.51563 0.16406 1.25781-0.24609 2.29687-1.12109l2.35157 2.40625q0.16406 0.10938 0.32812 0.10937 0.16406 0 0.30078-0.13672 0.13672-0.13672 0.13672-0.30078 0-0.16406-0.10937-0.32812z m-10.39063-5.57813q0-1.14844 0.54688-2.10547 0.54688-0.95703 1.5039-1.50391 0.95703-0.54688 2.10547-0.54687 1.14844 0 2.10547 0.54688 0.95703 0.54688 1.50391 1.5039 0.54688 0.95703 0.54687 2.10547 0 1.14844-0.54688 2.10547-0.54688 0.95703-1.5039 1.50391-0.95703 0.54688-2.10547 0.54687-1.14844 0-2.10547-0.54688-0.95703-0.54688-1.50391-1.5039-0.54688-0.95703-0.54687-2.10547z"
                    fill="#667085"></path>
            </svg>
            <input id="certSearchInput" type="text" placeholder="Cari sertifikat digital, topik course, atau ID..."
                style='box-sizing: border-box; border: none; outline: none; background: transparent; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; width: 100%; padding: 0;'>
        </div>

        <!-- Filters and Sort Action Group -->
        <div data-pencil-name="Filters and Sort Action Group"
            style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 12px; height: fit-content; justify-content: flex-start; width: fit-content">

            <!-- Category Filter Dropdown -->
            <div style="position: relative;">
                <button id="catDropdownBtn" type="button" data-pencil-name="Category Filter Dropdown"
                    style="align-items: center; background-color: #ffffff; border-radius: 10px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: 44px; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 0px 16px; width: fit-content; border: none; cursor: pointer;">
                    <svg data-pencil-name="Filter Funnel Icon" data-icon-name="funnel" data-icon-set="phosphor"
                        viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                        xmlns="http://www.w3.org/2000/svg"
                        style="box-sizing: border-box; flex-shrink: 0; height: 16px; width: 16px">
                        <path
                            d="M6.125 12.74219q-0.21875 0-0.41016-0.10938-0.19141-0.10937-0.32812-0.30078-0.13672-0.19141-0.13672-0.46484l0-4.26563-3.60938-3.9375q-0.16406-0.21875-0.1914-0.46484-0.02734-0.24609 0.05469-0.49219 0.08203-0.24609 0.30078-0.38281 0.21875-0.13672 0.49218-0.13672l9.40625 0q0.27344 0 0.49219 0.13672 0.21875 0.13672 0.30078 0.38281 0.08203 0.24609 0.05469 0.49219-0.02734 0.24609-0.19141 0.46484l-3.60937 3.9375 0 3.11719q0 0.4375-0.38281 0.71094l-1.75 1.14843q-0.21875 0.16406-0.49219 0.16407z m-3.82813-9.67969l3.60938 3.9375q0.21875 0.27344 0.21875 0.60156l0 4.26563 1.75-1.14844 0-3.11719q0-0.32813 0.21875-0.60156l3.60938-3.9375-9.40625 0z"
                            fill="#2872fa"></path>
                    </svg>
                    <div id="catSelectedLabel" data-pencil-name="Dropdown Selected Label"
                        style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap'>
                        Kategori : Semua Kategori
                    </div>
                    <svg data-pencil-name="Dropdown Caret Icon" data-icon-name="caret-down"
                        data-icon-set="phosphor" viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                        xmlns="http://www.w3.org/2000/svg"
                        style="box-sizing: border-box; flex-shrink: 0; height: 14px; width: 14px">
                        <path
                            d="M7 10.0625q-0.16406 0-0.32813-0.10938l-4.375-4.375q-0.10938-0.16406-0.08203-0.32812 0.02734-0.16406 0.13672-0.27344 0.10938-0.10938 0.27344-0.13672 0.16406-0.02734 0.32812 0.08203l4.04688 4.10157 4.04688-4.10156q0.16406-0.10938 0.32812-0.08204 0.16406 0.02734 0.27344 0.13672 0.10937 0.10938 0.13672 0.27344 0.02734 0.16406-0.08203 0.32813l-4.375 4.375q-0.16406 0.10938-0.32813 0.10937z"
                            fill="#667085"></path>
                    </svg>
                </button>

                <!-- Category Popover Menu -->
                <div id="catMenu" style="display: none; position: absolute; top: calc(100% + 6px); left: 0; background: #ffffff; border-radius: 10px; outline: 1px solid #dfe3ea; box-shadow: 0 4px 14px rgba(0,0,0,0.08); z-index: 50; min-width: 220px; padding: 6px;">
                    <div class="cat-menu-item" data-cat="all" style="padding: 9px 14px; font-size: 13px; font-weight: 600; color: #2872fa; border-radius: 6px; cursor: pointer; background: #f0f6fe;">Semua Kategori</div>
                    <div class="cat-menu-item" data-cat="Product Management" style="padding: 9px 14px; font-size: 13px; font-weight: 500; color: #192a3d; border-radius: 6px; cursor: pointer;">Product Management</div>
                    <div class="cat-menu-item" data-cat="Design & Creative" style="padding: 9px 14px; font-size: 13px; font-weight: 500; color: #192a3d; border-radius: 6px; cursor: pointer;">UI/UX Design</div>
                    <div class="cat-menu-item" data-cat="Data Science" style="padding: 9px 14px; font-size: 13px; font-weight: 500; color: #192a3d; border-radius: 6px; cursor: pointer;">Data Science</div>
                </div>
            </div>

            <!-- Sort Order Dropdown -->
            <div style="position: relative;">
                <button id="sortDropdownBtn" type="button" data-pencil-name="Sort Order Dropdown"
                    style="align-items: center; background-color: #ffffff; border-radius: 10px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 8px; height: 44px; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 0px 16px; width: fit-content; border: none; cursor: pointer;">
                    <div id="sortSelectedLabel" data-pencil-name="Sort Selected Label"
                        style='box-sizing: border-box; color: #475467; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 500; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap'>
                        Urutan: Terbaru Diterbitkan
                    </div>
                    <svg data-pencil-name="Sort Caret Icon" data-icon-name="caret-down" data-icon-set="phosphor"
                        viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                        xmlns="http://www.w3.org/2000/svg"
                        style="box-sizing: border-box; flex-shrink: 0; height: 14px; width: 14px">
                        <path
                            d="M7 10.0625q-0.16406 0-0.32813-0.10938l-4.375-4.375q-0.10938-0.16406-0.08203-0.32812 0.02734-0.16406 0.13672-0.27344 0.10938-0.10938 0.27344-0.13672 0.16406-0.02734 0.32812 0.08203l4.04688 4.10157 4.04688-4.10156q0.16406-0.10938 0.32812-0.08204 0.16406 0.02734 0.27344 0.13672 0.10937 0.10938 0.13672 0.27344 0.02734 0.16406-0.08203 0.32813l-4.375 4.375q-0.16406 0.10938-0.32813 0.10937z"
                            fill="#667085"></path>
                    </svg>
                </button>

                <!-- Sort Popover Menu -->
                <div id="sortMenu" style="display: none; position: absolute; top: calc(100% + 6px); right: 0; background: #ffffff; border-radius: 10px; outline: 1px solid #dfe3ea; box-shadow: 0 4px 14px rgba(0,0,0,0.08); z-index: 50; min-width: 200px; padding: 6px;">
                    <div class="sort-menu-item" data-sort="newest" style="padding: 9px 14px; font-size: 13px; font-weight: 600; color: #2872fa; border-radius: 6px; cursor: pointer; background: #f0f6fe;">Terbaru Diterbitkan</div>
                    <div class="sort-menu-item" data-sort="az" style="padding: 9px 14px; font-size: 13px; font-weight: 500; color: #192a3d; border-radius: 6px; cursor: pointer;">Nama Course (A-Z)</div>
                    <div class="sort-menu-item" data-sort="za" style="padding: 9px 14px; font-size: 13px; font-weight: 500; color: #192a3d; border-radius: 6px; cursor: pointer;">Nama Course (Z-A)</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Certificates 3-Card Grid Container matching design-reference/certificates-collection.html -->
    <div data-pencil-name="Certificates 3-Card Grid Container" id="certGrid"
        style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 24px; width: 100%;">

        <?php foreach ($certificates as $cert): ?>
            <!-- Minimal Cert Card matching design-reference/certificates-collection.html -->
            <div class="cert-card"
                data-title="<?php echo strtolower(e($cert['title'])); ?>"
                data-id="<?php echo strtolower(e($cert['id'])); ?>"
                data-category="<?php echo e($cert['category']); ?>"
                data-timestamp="<?php echo isset($cert['timestamp']) ? $cert['timestamp'] : 0; ?>"
                data-title-raw="<?php echo e($cert['title']); ?>"
                style="align-items: flex-start; background-color: #ffffff; border-radius: 14px; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 0px; height: 220px; justify-content: space-between; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 22px; width: 100%; transition: transform 0.15s ease, box-shadow 0.15s ease;">

                <div data-pencil-name="Card Top Group"
                    style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 12px; height: fit-content; justify-content: flex-start; width: 100%;">
                    <div data-pencil-name="Category Row"
                        style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 32px; justify-content: space-between; width: 100%;">
                    </div>
                    <div data-pencil-name="Course Title Text" title="<?php echo e($cert['title']); ?>"
                        style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 17px; font-style: normal; font-weight: 800; letter-spacing: 0px; line-height: 22px; text-align: left; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100%;'>
                        <?php echo e($cert['title']); ?>
                    </div>
                    <div data-pencil-name="Date Row"
                        style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; width: fit-content">
                        <svg data-pencil-name="Calendar Icon" data-icon-name="calendar-blank"
                            data-icon-set="phosphor" viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                            xmlns="http://www.w3.org/2000/svg"
                            style="box-sizing: border-box; flex-shrink: 0; height: 14px; width: 14px">
                            <path
                                d="M11.375 1.75l-1.3125 0 0-0.4375q0-0.16406-0.13672-0.30078-0.13672-0.13672-0.30078-0.13672-0.16406 0-0.30078 0.13672-0.13672 0.13672-0.13672 0.30078l0 0.4375-4.375 0 0-0.4375q0-0.16406-0.13672-0.30078-0.13672-0.13672-0.30078-0.13672-0.16406 0-0.30078 0.13672-0.13672 0.13672-0.13672 0.30078l0 0.4375-1.3125 0q-0.38281 0-0.62891 0.24609-0.24609 0.24609-0.24609 0.62891l0 8.75q0 0.38281 0.24609 0.62891 0.24609 0.24609 0.62891 0.24609l8.75 0q0.38281 0 0.62891-0.24609 0.24609-0.24609 0.24609-0.62891l0-8.75q0-0.38281-0.24609-0.62891-0.24609-0.24609-0.62891-0.24609z m-7.4375 0.875l0 0.4375q0 0.16406 0.13672 0.30078 0.13672 0.13672 0.30078 0.13672 0.16406 0 0.30078-0.13672 0.13672-0.13672 0.13672-0.30078l0-0.4375 4.375 0 0 0.4375q0 0.16406 0.13672 0.30078 0.13672 0.13672 0.30078 0.13672 0.16406 0 0.30078-0.13672 0.13672-0.13672 0.13672-0.30078l0-0.4375 1.3125 0 0 1.75-8.75 0 0-1.75 1.3125 0z m7.4375 8.75l-8.75 0 0-6.125 8.75 0 0 6.125z"
                                fill="#667085"></path>
                        </svg>
                        <div data-pencil-name="Date Text"
                            style='box-sizing: border-box; color: #667085; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 500; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap'>
                            Diterbitkan: <?php echo e($cert['issue_date']); ?>
                        </div>
                    </div>
                </div>

                <div data-pencil-name="Card Actions Row"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; width: 312px">
                    <a href="#" onclick="alert('Mengunduh berkas PDF resmi untuk <?php echo e($cert['title']); ?> (<?php echo e($cert['id']); ?>)...'); return false;" data-pencil-name="PDF Button" class="cert-pdf-btn"
                        style="align-items: center; background-color: #ffffff; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: 38px; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 0px 14px; width: fit-content; text-decoration: none; cursor: pointer; transition: background-color 0.15s ease;">
                        <svg data-pencil-name="Pdf Icon" data-icon-name="download-simple"
                            data-icon-set="phosphor" viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                            xmlns="http://www.w3.org/2000/svg"
                            style="box-sizing: border-box; flex-shrink: 0; height: 14px; width: 14px">
                            <path
                                d="M4.375 6.34375q-0.10938-0.16406-0.10938-0.32813 0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672 0.16406 0 0.32813 0.10938l1.53125 1.58594 0-5.08594q0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672 0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078l0 5.08594 1.53125-1.58594q0.16406-0.10938 0.32813-0.10938 0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078 0 0.16406-0.10938 0.32813l-2.29688 2.29688q-0.16406 0.10938-0.32812 0.10937-0.16406 0-0.32813-0.10937l-2.29687-2.29688z m7.4375 1.53125q-0.16406 0-0.30078 0.13672-0.13672 0.13672-0.13672 0.30078l0 3.0625-8.75 0 0-3.0625q0-0.16406-0.13672-0.30078-0.13672-0.13672-0.30078-0.13672-0.16406 0-0.30078 0.13672-0.13672 0.13672-0.13672 0.30078l0 3.0625q0 0.38281 0.24609 0.62891 0.24609 0.24609 0.62891 0.24609l8.75 0q0.38281 0 0.62891-0.24609 0.24609-0.24609 0.24609-0.62891l0-3.0625q0-0.16406-0.13672-0.30078-0.13672-0.13672-0.30078-0.13672z"
                                fill="#475467"></path>
                        </svg>
                        <div data-pencil-name="Pdf Text"
                            style='box-sizing: border-box; color: #475467; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap'>
                            Unduh PDF
                        </div>
                    </a>
                    <a href="<?php echo base_url('verify/' . $cert['id']); ?>" data-pencil-name="Verify Page Button" class="cert-verify-btn"
                        style="align-items: center; background-color: #2872fa; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: 38px; justify-content: center; padding: 0px 16px; width: 186px; text-decoration: none; cursor: pointer; transition: background-color 0.15s ease;">
                        <div data-pencil-name="Verify Text"
                            style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap'>
                            Lihat Sertifikat
                        </div>
                        <svg data-pencil-name="Arrow Icon" data-icon-name="arrow-right" data-icon-set="phosphor"
                            viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                            xmlns="http://www.w3.org/2000/svg"
                            style="box-sizing: border-box; flex-shrink: 0; height: 13px; width: 13px">
                            <path
                                d="M12.14063 7.32813l-3.9375 3.9375q-0.16406 0.10938-0.32813 0.10937-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.10938-0.32812l3.22656-3.17188-8.58594 0q-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672l8.58594 0-3.22657-3.17188q-0.10938-0.16406-0.08203-0.32812 0.02734-0.16406 0.13672-0.27344 0.10938-0.10938 0.27344-0.13672 0.16406-0.02734 0.32812 0.08203l3.9375 3.9375q0.10938 0.16406 0.10938 0.32813 0 0.16406-0.10938 0.32812z"
                                fill="#ffffff"></path>
                        </svg>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Empty state when search or filter returns no results -->
        <div id="noResultsNotice" style="display: none; width: 100%; padding: 48px 24px; text-align: center; background: #ffffff; border-radius: 14px; outline: 1px solid #dfe3ea;">
            <p style='color: #667085; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 14px; font-weight: 500; margin: 0;'>
                Tidak ada sertifikat digital yang cocok dengan filter atau kata kunci yang dicari.
            </p>
        </div>
    </div>
</div>

<style>
.cert-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
}
.cert-pdf-btn:hover {
    background-color: #f8fafc !important;
}
.cert-verify-btn:hover {
    background-color: #1a5cd8 !important;
}
.cat-menu-item:hover, .sort-menu-item:hover {
    background-color: #f1f5f9 !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('certSearchInput');
    const catBtn = document.getElementById('catDropdownBtn');
    const catMenu = document.getElementById('catMenu');
    const catLabel = document.getElementById('catSelectedLabel');
    const sortBtn = document.getElementById('sortDropdownBtn');
    const sortMenu = document.getElementById('sortMenu');
    const sortLabel = document.getElementById('sortSelectedLabel');
    const grid = document.getElementById('certGrid');
    const cards = Array.from(document.querySelectorAll('.cert-card'));
    const emptyNotice = document.getElementById('noResultsNotice');

    let currentCategory = 'all';
    let currentSort = 'newest';

    // Dropdown toggles
    catBtn.addEventListener('click', function (e) {
        e.stopPropagation();
        const isOpen = catMenu.style.display === 'block';
        catMenu.style.display = isOpen ? 'none' : 'block';
        sortMenu.style.display = 'none';
    });

    sortBtn.addEventListener('click', function (e) {
        e.stopPropagation();
        const isOpen = sortMenu.style.display === 'block';
        sortMenu.style.display = isOpen ? 'none' : 'block';
        catMenu.style.display = 'none';
    });

    // Close on click outside
    document.addEventListener('click', function () {
        catMenu.style.display = 'none';
        sortMenu.style.display = 'none';
    });

    // Category selection
    catMenu.querySelectorAll('.cat-menu-item').forEach(function (item) {
        item.addEventListener('click', function (e) {
            e.stopPropagation();
            currentCategory = this.getAttribute('data-cat');
            catLabel.textContent = 'Kategori : ' + (currentCategory === 'all' ? 'Semua Kategori' : currentCategory);

            catMenu.querySelectorAll('.cat-menu-item').forEach(function (el) {
                el.style.fontWeight = '500';
                el.style.color = '#192a3d';
                el.style.background = 'transparent';
            });
            this.style.fontWeight = '600';
            this.style.color = '#2872fa';
            this.style.background = '#f0f6fe';

            catMenu.style.display = 'none';
            filterAndSort();
        });
    });

    // Sort selection
    sortMenu.querySelectorAll('.sort-menu-item').forEach(function (item) {
        item.addEventListener('click', function (e) {
            e.stopPropagation();
            currentSort = this.getAttribute('data-sort');
            sortLabel.textContent = 'Urutan: ' + this.textContent.trim();

            sortMenu.querySelectorAll('.sort-menu-item').forEach(function (el) {
                el.style.fontWeight = '500';
                el.style.color = '#192a3d';
                el.style.background = 'transparent';
            });
            this.style.fontWeight = '600';
            this.style.color = '#2872fa';
            this.style.background = '#f0f6fe';

            sortMenu.style.display = 'none';
            filterAndSort();
        });
    });

    // Search input
    searchInput.addEventListener('input', function () {
        filterAndSort();
    });

    function filterAndSort() {
        const query = (searchInput.value || '').trim().toLowerCase();
        let visibleCards = [];

        cards.forEach(function (card) {
            const title = card.getAttribute('data-title') || '';
            const id = card.getAttribute('data-id') || '';
            const cat = card.getAttribute('data-category') || '';

            const matchesQuery = !query || title.includes(query) || id.includes(query);
            const matchesCat = (currentCategory === 'all') || (cat.toLowerCase() === currentCategory.toLowerCase());

            if (matchesQuery && matchesCat) {
                card.style.display = 'flex';
                visibleCards.push(card);
            } else {
                card.style.display = 'none';
            }
        });

        // Sort visible cards
        visibleCards.sort(function (a, b) {
            if (currentSort === 'newest') {
                return parseInt(b.getAttribute('data-timestamp') || 0) - parseInt(a.getAttribute('data-timestamp') || 0);
            } else if (currentSort === 'az') {
                return (a.getAttribute('data-title-raw') || '').localeCompare(b.getAttribute('data-title-raw') || '');
            } else if (currentSort === 'za') {
                return (b.getAttribute('data-title-raw') || '').localeCompare(a.getAttribute('data-title-raw') || '');
            }
            return 0;
        });

        // Re-append in sorted order before emptyNotice
        visibleCards.forEach(function (card) {
            grid.insertBefore(card, emptyNotice);
        });

        if (visibleCards.length === 0) {
            emptyNotice.style.display = 'block';
        } else {
            emptyNotice.style.display = 'none';
        }
    }
});
</script>
