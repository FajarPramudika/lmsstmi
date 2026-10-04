<?php
    defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Course Detail Single-Column Page matching design-reference/course-detail.html -->
<div data-pencil-name="Detail Content Canvas"
    style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 14px; height: fit-content; justify-content: flex-start; width: 100%; max-width: var(--container-max-app, 1440px); margin: 0 auto;">

    <!-- 1. Breadcrumb and Status Row -->
    <div data-pencil-name="Breadcrumb and Status Row"
        style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; width: 100%;">
        <div data-pencil-name="Breadcrumb Nav Group"
            style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; width: fit-content;">
            <a href="<?php echo base_url('courses'); ?>" style="display: inline-flex; align-items: center; gap: 8px; text-decoration: none; color: #2872fa;">
                <svg data-pencil-name="Back Arrow Icon" data-icon-name="arrow-left" data-icon-set="phosphor"
                    viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"
                    style="box-sizing: border-box; flex-shrink: 0; height: 15px; width: 15px;">
                    <path
                        d="M12.25 7q0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672l-8.58594 0 3.22657 3.17188q0.10938 0.16406 0.10937 0.32812 0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672-0.16406 0-0.32812-0.10937l-3.9375-3.9375q-0.10938-0.16406-0.10938-0.32813 0-0.16406 0.10938-0.32812l3.9375-3.9375q0.16406-0.10938 0.32812-0.08204 0.16406 0.02734 0.27344 0.13672 0.10938 0.10938 0.13672 0.27344 0.02734 0.16406-0.08203 0.32813l-3.22657 3.17187 8.58594 0q0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078z"
                        fill="#2872fa"></path>
                </svg>
                <div data-pencil-name="Back Link Text"
                    style='box-sizing: border-box; color: #2872fa; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                    Kembali ke Katalog Course
                </div>
            </a>
            <div data-pencil-name="BC Separator 1"
                style='box-sizing: border-box; color: #94a3b8; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                •
            </div>
            <a href="<?php echo base_url('courses'); ?>" data-pencil-name="BC Catalog Text"
                style='box-sizing: border-box; color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 500; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap; text-decoration: none;'>
                Katalog
            </a>
            <div data-pencil-name="BC Separator 2"
                style='box-sizing: border-box; color: #94a3b8; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                •
            </div>
            <div data-pencil-name="BC Active Code"
                style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                DP-101: Digital Product Fundamentals
            </div>
        </div>
    </div>

    <!-- 2. Course Header Summary Card -->
    <div data-pencil-name="Course Header Summary Card"
        style="align-items: center; background-color: #ffffff; border-radius: 14px; box-shadow: 0px 1px 4px rgba(16, 24, 40, 0.04); box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 14px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 18px 20px; width: 100%;">
        <div data-pencil-name="Header Main Top Row"
            style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 20px; height: fit-content; justify-content: flex-start; width: 100%;">
            <div data-pencil-name="Header Course Thumbnail"
                style="align-items: flex-start; background: linear-gradient(180deg, #7c7c7c 0%, #ebebeb 100%); border-radius: 10px; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 0px; height: 125px; justify-content: space-between; overflow: hidden; padding: 8px 10px; width: 220px;">
                <div data-pencil-name="Header Thumb Top Row"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; width: 100%;">
                    <div data-pencil-name="Thumb Cat Badge"
                        style="align-items: center; background-color: #00000075; border-radius: 4px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; padding: 2px 6px; width: fit-content;">
                        <div data-pencil-name="Cat Badge Text"
                            style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            PRODUCT
                        </div>
                    </div>
                </div>
                <div data-pencil-name="Header Center Play"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: center; width: 100%;">
                    <div data-pencil-name="Header Play Circle"
                        style="align-items: center; background-color: #ffffff; border-radius: 18px; box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.08); box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 36px; justify-content: center; width: 36px;">
                        <svg data-pencil-name="Play Icon Small" data-icon-name="play"
                            data-icon-set="phosphor" viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                            xmlns="http://www.w3.org/2000/svg"
                            style="box-sizing: border-box; flex-shrink: 0; height: 15px; width: 15px;">
                            <path
                                d="M4.375 12.6875q-0.21875 0-0.4375-0.10938-0.21875-0.10938-0.32813-0.32812-0.10938-0.21875-0.10937-0.4375l0-9.625q0-0.21875 0.10937-0.4375 0.10938-0.21875 0.32813-0.32813 0.21875-0.10938 0.46484-0.10937 0.24609 0 0.41016 0.10937l7.875 4.8125q0.4375 0.27344 0.4375 0.76563 0 0.49219-0.4375 0.76562l-7.875 4.8125q-0.16406 0.10938-0.4375 0.10938z m0-10.5l0 9.625 7.875-4.8125-7.875-4.8125z"
                                fill="#2872fa"></path>
                        </svg>
                    </div>
                </div>
                <div data-pencil-name="Header Bottom Row"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; width: 100%;">
                    <div data-pencil-name="Header Dur Pill"
                        style="align-items: center; background-color: #00000075; border-radius: 4px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; padding: 2px 6px; width: fit-content;">
                        <div data-pencil-name="Dur Text"
                            style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            ⏱️ 15 Jam • 5 Modul
                        </div>
                    </div>
                </div>
            </div>
            <div data-pencil-name="Header Right Info Column"
                style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex: 1; min-width: 0; gap: 8px; height: fit-content; justify-content: flex-start;">
                <div data-pencil-name="Title and Subtitle Group"
                    style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 4px; height: fit-content; justify-content: flex-start; width: 100%;">
                    <div data-pencil-name="Course Title Text"
                        style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 24px; font-style: normal; font-weight: 800; letter-spacing: 0px; line-height: normal; text-align: left;'>
                        Digital Product Fundamentals
                    </div>
                    <div data-pencil-name="Course Subtitle Text"
                        style='box-sizing: border-box; color: #475467; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: 20px; text-align: left; width: 100%;'>
                        Kuasai kerangka kerja komprehensif product discovery, pemetaan user journey,
                        perancangan prototipe MVP, hingga evaluasi kesiapan peluncuran produk digital
                        berbasis data pasar.
                    </div>
                </div>
                <div data-pencil-name="Course Meta Pills Row"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; flex-wrap: wrap; gap: 16px; height: fit-content; justify-content: flex-start; width: 100%;">
                    <div data-pencil-name="Meta Item"
                        style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; width: fit-content;">
                        <svg data-pencil-name="Pill Icon" data-icon-name="user-circle"
                            data-icon-set="phosphor" viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                            xmlns="http://www.w3.org/2000/svg"
                            style="box-sizing: border-box; flex-shrink: 0; height: 15px; width: 15px;">
                            <path
                                d="M12.6875 7q0-1.3125-0.54688-2.43359-0.54688-1.12109-1.53124-1.94141-0.98438-0.82031-2.21485-1.14844-1.23047-0.32813-2.48828-0.08203-1.25781 0.24609-2.26953 1.01172-1.01172 0.76563-1.64063 1.88672-0.62891 1.12109-0.68359 2.40625-0.05469 1.28516 0.41016 2.46094 0.46484 1.17578 1.44922 2.05078l0.05468 0.05469q1.03906 0.92969 2.40625 1.25781 1.36719 0.32812 2.73438 0 1.36719-0.32813 2.40625-1.25781l0.05469-0.05469q0.875-0.82031 1.36718-1.91406 0.49219-1.09375 0.49219-2.29688z m-10.5 0q0-1.58594 0.95703-2.87109 0.95703-1.28516 2.51563-1.75 1.55859-0.46484 3.0625 0.10937 1.50391 0.57422 2.35156 1.94141 0.84766 1.36719 0.71094 2.95312-0.13672 1.58594-1.17578 2.78906-0.76563-1.03906-1.96875-1.53125 0.65625-0.54688 0.875-1.33984 0.21875-0.79297-0.05469-1.58594-0.27344-0.79297-0.95703-1.28515-0.68359-0.49219-1.50391-0.49219-0.82031 0-1.50391 0.49219-0.68359 0.49219-0.95703 1.28515-0.27344 0.79297-0.05468 1.58594 0.21875 0.79297 0.875 1.33984-1.20313 0.49219-1.96875 1.53125-0.60156-0.65625-0.90235-1.47656-0.30078-0.82031-0.30078-1.69531z m3.0625-0.4375q0-0.71094 0.51953-1.23047 0.51953-0.51953 1.23047-0.51953 0.71094 0 1.23047 0.51953 0.51953 0.51953 0.51953 1.23047 0 0.71094-0.51953 1.23047-0.51953 0.51953-1.23047 0.51953-0.71094 0-1.23047-0.51953-0.51953-0.51953-0.51953-1.23047z m-1.20313 4.21094q0.49219-0.71094 1.28516-1.14844 0.79297-0.4375 1.66797-0.4375 0.875 0 1.66797 0.4375 0.79297 0.4375 1.28516 1.14844-1.3125 1.03906-2.95313 1.03906-1.64063 0-2.95313-1.03906z"
                                fill="#2872fa"></path>
                        </svg>
                        <div data-pencil-name="Pill Text"
                            style='box-sizing: border-box; color: #334155; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            Andi Setiawan, S.Kom. (Senior PM)
                        </div>
                    </div>
                    <div data-pencil-name="Meta Item"
                        style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; width: fit-content;">
                        <svg data-pencil-name="Pill Icon" data-icon-name="book-open"
                            data-icon-set="phosphor" viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                            xmlns="http://www.w3.org/2000/svg"
                            style="box-sizing: border-box; flex-shrink: 0; height: 15px; width: 15px;">
                            <path
                                d="M12.25 2.625l-3.5 0q-0.49219 0-0.95703 0.21875-0.46484 0.21875-0.79297 0.65625-0.32813-0.4375-0.79297-0.65625-0.46484-0.21875-0.95703-0.21875l-3.5 0q-0.38281 0-0.62891 0.24609-0.24609 0.24609-0.24609 0.62891l0 7q0 0.38281 0.24609 0.62891 0.24609 0.24609 0.62891 0.24609l3.5 0q0.54688 0 0.92969 0.38281 0.38281 0.38281 0.38281 0.92969 0 0.16406 0.13672 0.30078 0.13672 0.13672 0.30078 0.13672 0.16406 0 0.30078-0.13672 0.13672-0.13672 0.13672-0.30078 0-0.54688 0.38281-0.92969 0.38281-0.38281 0.92969-0.38281l3.5 0q0.38281 0 0.62891-0.24609 0.24609-0.24609 0.24609-0.62891l0-7q0-0.38281-0.24609-0.62891-0.24609-0.24609-0.62891-0.24609z m-7 7.875l-3.5 0 0-7 3.5 0q0.54688 0 0.92969 0.38281 0.38281 0.38281 0.38281 0.92969l0 6.125q-0.60156-0.4375-1.3125-0.4375z m7 0l-3.5 0q-0.71094 0-1.3125 0.4375l0-6.125q0-0.54688 0.38281-0.92969 0.38281-0.38281 0.92969-0.38281l3.5 0 0 7z"
                                fill="#2872fa"></path>
                        </svg>
                        <div data-pencil-name="Pill Text"
                            style='box-sizing: border-box; color: #334155; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            5 Modul
                        </div>
                    </div>
                    <div data-pencil-name="Meta Item"
                        style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; width: fit-content;">
                        <svg data-pencil-name="Pill Icon" data-icon-name="clock" data-icon-set="phosphor"
                            viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                            xmlns="http://www.w3.org/2000/svg"
                            style="box-sizing: border-box; flex-shrink: 0; height: 15px; width: 15px;">
                            <path
                                d="M7 1.3125q-1.53125 0-2.84375 0.76563-1.3125 0.76563-2.07813 2.07812-0.76563 1.3125-0.76562 2.84375 0 1.53125 0.76562 2.84375 0.76563 1.3125 2.07813 2.07813 1.3125 0.76563 2.84375 0.76562 1.53125 0 2.84375-0.76562 1.3125-0.76563 2.07813-2.07813 0.76563-1.3125 0.76562-2.84375 0-1.53125-0.76562-2.84375-0.76563-1.3125-2.07813-2.07813-1.3125-0.76563-2.84375-0.76562z m0 10.5q-1.3125 0-2.40625-0.65625-1.09375-0.65625-1.75-1.75-0.65625-1.09375-0.65625-2.40625 0-1.3125 0.65625-2.40625 0.65625-1.09375 1.75-1.75 1.09375-0.65625 2.40625-0.65625 1.3125 0 2.40625 0.65625 1.09375 0.65625 1.75 1.75 0.65625 1.09375 0.65625 2.40625 0 1.3125-0.65625 2.40625-0.65625 1.09375 1.75 1.75-1.09375 0.65625-2.40625 0.65625z m3.5-4.8125q0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672l-3.0625 0q-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078l0-3.0625q0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672 0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078l0 2.625 2.625 0q0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078z"
                                fill="#2872fa"></path>
                        </svg>
                        <div data-pencil-name="Pill Text"
                            style='box-sizing: border-box; color: #334155; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            15 Jam Total Durasi
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-pencil-name="Header Section Divider"
            style="align-items: flex-start; background-color: #f1f5f9; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 1px; justify-content: flex-start; width: 100%;">
        </div>
        <div data-pencil-name="Integrated Objectives Section"
            style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; width: 100%;">
            <div data-pencil-name="Obj Header Row"
                style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; width: fit-content;">
                <svg data-pencil-name="Target Icon Small" data-icon-name="target" data-icon-set="phosphor"
                    viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                    xmlns="http://www.w3.org/2000/svg"
                    style="box-sizing: border-box; flex-shrink: 0; height: 15px; width: 15px;">
                    <path
                        d="M12.14063 4.53906q0.76563 1.64063 0.46484 3.41797-0.30078 1.77734-1.55859 3.03516-0.82031 0.82031-1.85938 1.25781-1.03906 0.4375-2.1875 0.4375-1.14844 0-2.1875-0.4375-1.03906-0.4375-1.83203-1.23047-0.79297-0.79297-1.23047-1.83203-0.4375-1.03906-0.4375-2.1875 0-1.14844 0.4375-2.1875 0.4375-1.03906 1.20313-1.80469 1.03906-1.03906 2.43359-1.44922 1.39453-0.41016 2.78906-0.10937 1.39453 0.30078 2.54297 1.23047l1.20313-1.25782q0.16406-0.10938 0.32812-0.08203 0.16406 0.02734 0.27344 0.13672 0.10937 0.10938 0.13672 0.27344 0.02734 0.16406-0.08204 0.32812l-5.25 5.25q-0.16406 0.10938-0.32812 0.10938-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.10937-0.32813l1.53125-1.47656q-0.65625-0.4375-1.39453-0.38281-0.73828 0.05469-1.3125 0.57422-0.57422 0.51953-0.68359 1.28516-0.10938 0.76563 0.27344 1.42187 0.38281 0.65625 1.09375 0.95703 0.71094 0.30078 1.44922 0.08203 0.73828-0.21875 1.17578-0.84765 0.4375-0.62891 0.38281-1.39454 0-0.21875 0.10937-0.35546 0.10938-0.13672 0.30079-0.13672 0.19141 0 0.32812 0.10937 0.13672 0.10938 0.13672 0.32813 0.05469 1.03906-0.57422 1.9414-0.62891 0.90234-1.66797 1.17578-1.03906 0.27344-2.02344-0.13671-0.98438-0.41016-1.5039-1.36719-0.51953-0.95703-0.30078-1.9961 0.21875-1.03906 1.01172-1.75 0.79297-0.71094 1.88671-0.76562 1.09375-0.05469 1.91407 0.60156l1.25781-1.25781q-0.92969-0.76563-2.07813-0.98438-1.14844-0.21875-2.29687 0.08204-1.14844 0.30078-2.02344 1.14843-0.875 0.84766-1.23047 1.9961-0.35547 1.14844-0.16406 2.29687 0.19141 1.14844 0.92969 2.10547 0.73828 0.95703 1.83203 1.44922 1.09375 0.49219 2.26953 0.41016 1.17578-0.08203 2.21484-0.71094 1.03906-0.62891 1.64063-1.64063 0.60156-1.01172 0.65625-2.21484 0.05469-1.20313-0.49219-2.29688-0.05469-0.16406 0-0.32812 0.05469-0.16406 0.21875-0.24609 0.16406-0.08203 0.32813-0.02735 0.16406 0.05469 0.27343 0.21875z"
                        fill="#2872fa"></path>
                </svg>
                <div data-pencil-name="Obj Head Text"
                    style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                    Tujuan Pembelajaran (Learning Objectives):
                </div>
            </div>
            <div data-pencil-name="Objectives 2-Col Grid"
                style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 24px; height: fit-content; justify-content: flex-start; width: 100%;">
                <div data-pencil-name="Objectives Col Left"
                    style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex: 1; min-width: 0; gap: 6px; height: fit-content; justify-content: flex-start;">
                    <div data-pencil-name="Bullet Item Row"
                        style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; width: 100%;">
                        <svg data-pencil-name="Check Bullet Icon" data-icon-name="check"
                            data-icon-set="phosphor" viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                            xmlns="http://www.w3.org/2000/svg"
                            style="box-sizing: border-box; flex-shrink: 0; height: 13px; width: 13px; margin-top: 2px;">
                            <path
                                d="M5.6875 10.5q-0.16406 0-0.32813-0.10938l-3.0625-3.0625q-0.10938-0.16406-0.08203-0.32812 0.02734-0.16406 0.13672-0.27344 0.10938-0.10938 0.27344-0.13672 0.16406-0.02734 0.32812 0.08203l2.73438 2.78907 5.79688-5.85157q0.16406-0.10938 0.32812-0.08203 0.16406 0.02734 0.27344 0.13672 0.10937 0.10938 0.13672 0.27344 0.02734 0.16406-0.08203 0.32812l-6.125 6.125q-0.16406 0.10938-0.32813 0.10938z"
                                fill="#16a34a"></path>
                        </svg>
                        <div data-pencil-name="Bullet Item Text"
                            style='box-sizing: border-box; color: #475467; flex-shrink: 1; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: 18px; text-align: left;'>
                            Memahami siklus hidup produk digital dari discovery ide hingga iterasi rilis MVP berbasis data.
                        </div>
                    </div>
                    <div data-pencil-name="Bullet Item Row"
                        style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; width: 100%;">
                        <svg data-pencil-name="Check Bullet Icon" data-icon-name="check"
                            data-icon-set="phosphor" viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                            xmlns="http://www.w3.org/2000/svg"
                            style="box-sizing: border-box; flex-shrink: 0; height: 13px; width: 13px; margin-top: 2px;">
                            <path
                                d="M5.6875 10.5q-0.16406 0-0.32813-0.10938l-3.0625-3.0625q-0.10938-0.16406-0.08203-0.32812 0.02734-0.16406 0.13672-0.27344 0.10938-0.10938 0.27344-0.13672 0.16406-0.02734 0.32812 0.08203l2.73438 2.78907 5.79688-5.85157q0.16406-0.10938 0.32812-0.08203 0.16406 0.02734 0.27344 0.13672 0.10937 0.10938 0.13672 0.27344 0.02734 0.16406-0.08203 0.32812l-6.125 6.125q-0.16406 0.10938-0.32813 0.10938z"
                                fill="#16a34a"></path>
                        </svg>
                        <div data-pencil-name="Bullet Item Text"
                            style='box-sizing: border-box; color: #475467; flex-shrink: 1; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: 18px; text-align: left;'>
                            Menyusun riset pasar kualitatif &amp; kuantitatif serta Customer Journey Mapping aplikatif.
                        </div>
                    </div>
                </div>
                <div data-pencil-name="Objectives Col Right"
                    style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex: 1; min-width: 0; gap: 6px; height: fit-content; justify-content: flex-start;">
                    <div data-pencil-name="Bullet Item Row"
                        style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; width: 100%;">
                        <svg data-pencil-name="Check Bullet Icon" data-icon-name="check"
                            data-icon-set="phosphor" viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                            xmlns="http://www.w3.org/2000/svg"
                            style="box-sizing: border-box; flex-shrink: 0; height: 13px; width: 13px; margin-top: 2px;">
                            <path
                                d="M5.6875 10.5q-0.16406 0-0.32813-0.10938l-3.0625-3.0625q-0.10938-0.16406-0.08203-0.32812 0.02734-0.16406 0.13672-0.27344 0.10938-0.10938 0.27344-0.13672 0.16406-0.02734 0.32812 0.08203l2.73438 2.78907 5.79688-5.85157q0.16406-0.10938 0.32812-0.08203 0.16406 0.02734 0.27344 0.13672 0.10937 0.10938 0.13672 0.27344 0.02734 0.16406-0.08203 0.32812l-6.125 6.125q-0.16406 0.10938-0.32813 0.10938z"
                                fill="#16a34a"></path>
                        </svg>
                        <div data-pencil-name="Bullet Item Text"
                            style='box-sizing: border-box; color: #475467; flex-shrink: 1; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: 18px; text-align: left;'>
                            Merancang wireframe interaktif low-fidelity dan skenario usability testing pengguna.
                        </div>
                    </div>
                    <div data-pencil-name="Bullet Item Row"
                        style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; width: 100%;">
                        <svg data-pencil-name="Check Bullet Icon" data-icon-name="check"
                            data-icon-set="phosphor" viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                            xmlns="http://www.w3.org/2000/svg"
                            style="box-sizing: border-box; flex-shrink: 0; height: 13px; width: 13px; margin-top: 2px;">
                            <path
                                d="M5.6875 10.5q-0.16406 0-0.32813-0.10938l-3.0625-3.0625q-0.10938-0.16406-0.08203-0.32812 0.02734-0.16406 0.13672-0.27344 0.10938-0.10938 0.27344-0.13672 0.16406-0.02734 0.32812 0.08203l2.73438 2.78907 5.79688-5.85157q0.16406-0.10938 0.32812-0.08203 0.16406 0.02734 0.27344 0.13672 0.10937 0.10938 0.13672 0.27344 0.02734 0.16406-0.08203 0.32812l-6.125 6.125q-0.16406 0.10938-0.32813 0.10938z"
                                fill="#16a34a"></path>
                        </svg>
                        <div data-pencil-name="Bullet Item Text"
                            style='box-sizing: border-box; color: #475467; flex-shrink: 1; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: 18px; text-align: left;'>
                            Menetapkan metrik keberhasilan produk (KPI/OKR) untuk evaluasi kelayakan peluncuran produk.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Main Workspace Row -->
    <div data-pencil-name="Main Workspace Row"
        style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 20px; height: fit-content; justify-content: flex-start; width: 100%;">
        <div data-pencil-name="Course Main Column"
            style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 12px; height: fit-content; justify-content: flex-start; width: 100%;">

            <!-- Progress Overview Banner -->
            <div data-pencil-name="Progress Overview Banner"
                style="align-items: flex-start; background-color: #ffffff; border-radius: 12px; box-shadow: 0px 1px 3px #10182806; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 14px 18px; width: 100%;">
                <div data-pencil-name="Progress Top Row"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; width: 100%;">
                    <div data-pencil-name="Progress Title Group"
                        style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 2px; height: fit-content; justify-content: flex-start; width: fit-content;">
                        <div data-pencil-name="Prog Title"
                            style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 14px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            Progres Belajar Anda
                        </div>
                        <div data-pencil-name="Prog Sub"
                            style='box-sizing: border-box; color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            3 dari 5 modul selesai (8 dari 14 materi tuntas)
                        </div>
                    </div>
                    <div data-pencil-name="Prog Percent"
                        style='box-sizing: border-box; color: #2872fa; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 16px; font-style: normal; font-weight: 800; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                        60% Selesai
                    </div>
                </div>
                <div data-pencil-name="Track Frame"
                    style="align-items: flex-start; background-color: #e2e8f0; border-radius: 999px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 8px; justify-content: flex-start; width: 100%;">
                    <div data-pencil-name="Fill Frame"
                        style="align-items: flex-start; background-color: #2872fa; border-radius: 999px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 8px; justify-content: flex-start; width: 60%;">
                    </div>
                </div>
                <div data-pencil-name="Progress Bottom Row"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; width: 100%;">
                    <div data-pencil-name="Next Step Note"
                        style='box-sizing: border-box; color: #334155; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                        Materi aktif saat ini: Modul 4 — Praktik Pembuatan Wireframe Low-Fidelity
                    </div>
                    <a href="<?php echo base_url('learn/digital-product-fundamentals'); ?>" data-pencil-name="Mini CTA Button"
                        style="align-items: center; background-color: #2872fa; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; padding: 5px 12px; width: fit-content; text-decoration: none;">
                        <div data-pencil-name="Mini CTA Text"
                            style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            Lanjut Belajar →
                        </div>
                    </a>
                </div>
            </div>

            <!-- Curriculum Section Header -->
            <div data-pencil-name="Curriculum Section Header"
                style="align-items: flex-end; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: auto; justify-content: space-between; padding-top: 10px; width: 100%;">
                <div data-pencil-name="Curriculum Title Col"
                    style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 2px; height: fit-content; justify-content: flex-start; width: fit-content;">
                    <div data-pencil-name="Curr Title"
                        style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 16px; font-style: normal; font-weight: 800; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                        Kurikulum &amp; Modul Pembelajaran
                    </div>
                    <div data-pencil-name="Curr Sub"
                        style='box-sizing: border-box; color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                        Sistem Belajar Bertahap: Modul terbuka berurutan setelah modul sebelumnya diselesaikan.
                    </div>
                </div>
                <div data-pencil-name="Curr Stats Badge"
                    style="align-items: center; background-color: #f1f5f9; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; padding: 3px 8px; width: fit-content;">
                    <div data-pencil-name="Curr Stats Text"
                        style='box-sizing: border-box; color: #475467; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                        5 Modul • 14 Materi • 1 Ujian Akhir
                    </div>
                </div>
            </div>

            <!-- Module 1 Card - Completed -->
            <div data-pencil-name="Module 1 Card - Completed"
                style="align-items: center; background-color: #ffffff; border-radius: 10px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 11px 16px; width: 100%;">
                <div data-pencil-name="Mod Left"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; width: fit-content;">
                    <svg data-pencil-name="Check Circle Icon" data-icon-name="check-circle"
                        data-icon-set="phosphor" viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                        xmlns="http://www.w3.org/2000/svg"
                        style="box-sizing: border-box; flex-shrink: 0; height: 18px; width: 18px;">
                        <path
                            d="M9.73438 5.35938q0.10938 0.16406 0.10937 0.35546 0 0.19141-0.10937 0.30079l-3.22657 3.0625q-0.10938 0.10938-0.30078 0.10937-0.19141 0-0.30078-0.10937l-1.58594-1.53125q-0.21875-0.16406-0.16406-0.4375 0.05469-0.27344 0.30078-0.32813 0.24609-0.05469 0.41016 0.10938l1.3125 1.25781 2.95312-2.78906q0.10938-0.10938 0.30078-0.10938 0.19141 0 0.30078 0.16406l0-0.05468z m2.95312 1.64062q0 1.53125-0.76563 2.84375-0.76563 1.3125-2.07812 2.07813-1.3125 0.76563-2.84375 0.76562-1.53125 0-2.84375-0.76562-1.3125-0.76563-2.07813-2.07813-0.76563-1.3125-0.76562-2.84375 0-1.53125 0.76562-2.84375 0.76563-1.3125 2.07813-2.07813 1.3125-0.76563 2.84375-0.76562 1.53125 0 2.84375 0.76562 1.3125 0.76563 2.07813 2.07813 0.76563 1.3125 0.76562 2.84375z m-0.875 0q0-1.3125-0.65625-2.40625-0.65625-1.09375-1.75-1.75-1.09375-0.65625-2.40625-0.65625-1.3125 0-2.40625 0.65625-1.09375 0.65625-1.75 1.75-0.65625 1.09375-0.65625 2.40625 0 1.3125 0.65625 2.40625 0.65625 1.09375 1.75 1.75 1.09375 0.65625 2.40625 0.65625 1.3125 0 2.40625-0.65625 1.09375-0.65625 1.75-1.75 0.65625-1.09375 0.65625-2.40625z"
                            fill="#10b981"></path>
                    </svg>
                    <div data-pencil-name="Mod Text Group"
                        style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 2px; height: fit-content; justify-content: flex-start; width: fit-content;">
                        <div data-pencil-name="Mod Title Text"
                            style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            Modul 1: Pengantar Produk Digital &amp; Mindset PM
                        </div>
                        <div data-pencil-name="Mod Details Text"
                            style='box-sizing: border-box; color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            3 Materi • 3 Jam • Selesai pada 28 Sep 2026
                        </div>
                    </div>
                </div>
                <div data-pencil-name="Mod Right"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; width: fit-content;">
                    <div data-pencil-name="Done Badge"
                        style="align-items: center; background-color: #ecfdf5; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #a7f3d0; padding: 3px 8px; width: fit-content;">
                        <div data-pencil-name="Done Text"
                            style='box-sizing: border-box; color: #059669; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            Selesai ✓
                        </div>
                    </div>
                    <a href="<?php echo base_url('learn/digital-product-fundamentals'); ?>" data-pencil-name="Review Btn"
                        style="align-items: center; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 3px 8px; width: fit-content; text-decoration: none;">
                        <div data-pencil-name="Review Btn Text"
                            style='box-sizing: border-box; color: #334155; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            Akses Ulang
                        </div>
                    </a>
                </div>
            </div>

            <!-- Module 2 Card - Completed -->
            <div data-pencil-name="Module 2 Card - Completed"
                style="align-items: center; background-color: #ffffff; border-radius: 10px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 11px 16px; width: 100%;">
                <div data-pencil-name="Mod Left"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; width: fit-content;">
                    <svg data-pencil-name="Check Circle Icon" data-icon-name="check-circle"
                        data-icon-set="phosphor" viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                        xmlns="http://www.w3.org/2000/svg"
                        style="box-sizing: border-box; flex-shrink: 0; height: 18px; width: 18px;">
                        <path
                            d="M9.73438 5.35938q0.10938 0.16406 0.10937 0.35546 0 0.19141-0.10937 0.30079l-3.22657 3.0625q-0.10938 0.10938-0.30078 0.10937-0.19141 0-0.30078-0.10937l-1.58594-1.53125q-0.21875-0.16406-0.16406-0.4375 0.05469-0.27344 0.30078-0.32813 0.24609-0.05469 0.41016 0.10938l1.3125 1.25781 2.95312-2.78906q0.10938-0.10938 0.30078-0.10938 0.19141 0 0.30078 0.16406l0-0.05468z m2.95312 1.64062q0 1.53125-0.76563 2.84375-0.76563 1.3125-2.07812 2.07813-1.3125 0.76563-2.84375 0.76562-1.53125 0-2.84375-0.76562-1.3125-0.76563-2.07813-2.07813-0.76563-1.3125-0.76562-2.84375 0-1.53125 0.76562-2.84375 0.76563-1.3125 2.07813-2.07813 1.3125-0.76563 2.84375-0.76562 1.53125 0 2.84375 0.76562 1.3125 0.76563 2.07813 2.07813 0.76563 1.3125 0.76562 2.84375z m-0.875 0q0-1.3125-0.65625-2.40625-0.65625-1.09375-1.75-1.75-1.09375-0.65625-2.40625-0.65625-1.3125 0-2.40625 0.65625-1.09375 0.65625-1.75 1.75-0.65625 1.09375-0.65625 2.40625 0 1.3125 0.65625 2.40625 0.65625 1.09375 1.75 1.75 1.09375 0.65625 2.40625 0.65625 1.3125 0 2.40625-0.65625 1.09375-0.65625 1.75-1.75 0.65625-1.09375 0.65625-2.40625z"
                            fill="#10b981"></path>
                    </svg>
                    <div data-pencil-name="Mod Text Group"
                        style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 2px; height: fit-content; justify-content: flex-start; width: fit-content;">
                        <div data-pencil-name="Mod Title Text"
                            style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            Modul 2: Market Research &amp; Problem Validation
                        </div>
                        <div data-pencil-name="Mod Details Text"
                            style='box-sizing: border-box; color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            3 Materi + 1 Pop-up Quiz • 3.5 Jam • Selesai pada 30 Sep 2026
                        </div>
                    </div>
                </div>
                <div data-pencil-name="Mod Right"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; width: fit-content;">
                    <div data-pencil-name="Done Badge"
                        style="align-items: center; background-color: #ecfdf5; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #a7f3d0; padding: 3px 8px; width: fit-content;">
                        <div data-pencil-name="Done Text"
                            style='box-sizing: border-box; color: #059669; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            Selesai ✓
                        </div>
                    </div>
                    <a href="<?php echo base_url('learn/digital-product-fundamentals'); ?>" data-pencil-name="Review Btn"
                        style="align-items: center; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 3px 8px; width: fit-content; text-decoration: none;">
                        <div data-pencil-name="Review Btn Text"
                            style='box-sizing: border-box; color: #334155; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            Akses Ulang
                        </div>
                    </a>
                </div>
            </div>

            <!-- Module 3 Card - Completed -->
            <div data-pencil-name="Module 3 Card - Completed"
                style="align-items: center; background-color: #ffffff; border-radius: 10px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 11px 16px; width: 100%;">
                <div data-pencil-name="Mod Left"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; width: fit-content;">
                    <svg data-pencil-name="Check Circle Icon" data-icon-name="check-circle"
                        data-icon-set="phosphor" viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                        xmlns="http://www.w3.org/2000/svg"
                        style="box-sizing: border-box; flex-shrink: 0; height: 18px; width: 18px;">
                        <path
                            d="M9.73438 5.35938q0.10938 0.16406 0.10937 0.35546 0 0.19141-0.10937 0.30079l-3.22657 3.0625q-0.10938 0.10938-0.30078 0.10937-0.19141 0-0.30078-0.10937l-1.58594-1.53125q-0.21875-0.16406-0.16406-0.4375 0.05469-0.27344 0.30078-0.32813 0.24609-0.05469 0.41016 0.10938l1.3125 1.25781 2.95312-2.78906q0.10938-0.10938 0.30078-0.10938 0.19141 0 0.30078 0.16406l0-0.05468z m2.95312 1.64062q0 1.53125-0.76563 2.84375-0.76563 1.3125-2.07812 2.07813-1.3125 0.76563-2.84375 0.76562-1.53125 0-2.84375-0.76562-1.3125-0.76563-2.07813-2.07813-0.76563-1.3125-0.76562-2.84375 0-1.53125 0.76562-2.84375 0.76563-1.3125 2.07813-2.07813 1.3125-0.76563 2.84375-0.76562 1.53125 0 2.84375 0.76562 1.3125 0.76563 2.07813 2.07813 0.76563 1.3125 0.76562 2.84375z m-0.875 0q0-1.3125-0.65625-2.40625-0.65625-1.09375-1.75-1.75-1.09375-0.65625-2.40625-0.65625-1.3125 0-2.40625 0.65625-1.09375 0.65625-1.75 1.75-0.65625 1.09375-0.65625 2.40625 0 1.3125 0.65625 2.40625 0.65625 1.09375 1.75 1.75 1.09375 0.65625 2.40625 0.65625 1.3125 0 2.40625-0.65625 1.09375-0.65625 1.75-1.75 0.65625-1.09375 0.65625-2.40625z"
                            fill="#10b981"></path>
                    </svg>
                    <div data-pencil-name="Mod Text Group"
                        style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 2px; height: fit-content; justify-content: flex-start; width: fit-content;">
                        <div data-pencil-name="Mod Title Text"
                            style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            Modul 3: Product Strategy &amp; Roadmapping
                        </div>
                        <div data-pencil-name="Mod Details Text"
                            style='box-sizing: border-box; color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            2 Materi + 1 Pop-up Quiz • 3 Jam • Selesai pada 02 Okt 2026
                        </div>
                    </div>
                </div>
                <div data-pencil-name="Mod Right"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; width: fit-content;">
                    <div data-pencil-name="Done Badge"
                        style="align-items: center; background-color: #ecfdf5; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #a7f3d0; padding: 3px 8px; width: fit-content;">
                        <div data-pencil-name="Done Text"
                            style='box-sizing: border-box; color: #059669; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            Selesai ✓
                        </div>
                    </div>
                    <a href="<?php echo base_url('learn/digital-product-fundamentals'); ?>" data-pencil-name="Review Btn"
                        style="align-items: center; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 3px 8px; width: fit-content; text-decoration: none;">
                        <div data-pencil-name="Review Btn Text"
                            style='box-sizing: border-box; color: #334155; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            Akses Ulang
                        </div>
                    </a>
                </div>
            </div>

            <!-- Module 4 Card - Active Expanded -->
            <div data-pencil-name="Module 4 Card - Active Expanded"
                style="align-items: flex-start; background-color: #ffffff; border-radius: 12px; box-shadow: 0px 2px 6px #2872fa15; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; outline-offset: -0.75px; outline: 1.5px solid #2872fa; width: 100%;">
                <div data-pencil-name="Mod 4 Header"
                    style="align-items: center; background-color: #f0f7ff; border-color: #dbeafe; border-radius: 11px 11px 0px 0px; border-style: solid; border-width: 0px 0px 1px 0px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: auto; justify-content: space-between; padding: 12px 16px; width: 100%;">
                    <div data-pencil-name="Mod 4 Left"
                        style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; width: fit-content;">
                        <svg data-pencil-name="Play Icon Blue" data-icon-name="play-circle"
                            data-icon-set="phosphor" viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                            xmlns="http://www.w3.org/2000/svg"
                            style="box-sizing: border-box; flex-shrink: 0; height: 20px; width: 20px;">
                            <path
                                d="M7 1.3125q-1.53125 0-2.84375 0.76563-1.3125 0.76563-2.07813 2.07812-0.76563 1.3125-0.76562 2.84375 0 1.53125 0.76562 2.84375 0.76563 1.3125 2.07813 2.07813 1.3125 0.76563 2.84375 0.76562 1.53125 0 2.84375-0.76562 1.3125-0.76563 2.07813-2.07813 0.76563-1.3125 0.76562-2.84375 0-1.53125-0.76562-2.84375-0.76563-1.3125-2.07813-2.07813-1.3125-0.76563-2.84375-0.76562z m0 10.5q-1.3125 0-2.40625-0.65625-1.09375-0.65625-1.75-1.75-0.65625-1.09375-0.65625-2.40625 0-1.3125 0.65625-2.40625 0.65625-1.09375 1.75-1.75 1.09375-0.65625 2.40625-0.65625 1.3125 0 2.40625 0.65625 1.09375 0.65625 1.75 1.75 0.65625 1.09375 0.65625 2.40625 0 1.3125-0.65625 2.40625-0.65625 1.09375-1.75 1.75-1.09375 0.65625-2.40625 0.65625z m1.96875-5.19531l-2.625-1.75q-0.21875-0.10938-0.4375 0-0.21875 0.10938-0.21875 0.38281l0 3.5q0 0.27344 0.21875 0.38281 0.10938 0.05469 0.21875 0.05469 0.10938 0 0.21875-0.05469l2.625-1.75q0.21875-0.16406 0.21875-0.38281 0-0.21875-0.21875-0.38281z m-2.40625 1.3125l0-1.85938 1.42188 0.92969-1.42188 0.92969z"
                                fill="#2872fa"></path>
                        </svg>
                        <div data-pencil-name="Mod 4 Texts"
                            style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 2px; height: fit-content; justify-content: flex-start; width: fit-content;">
                            <div data-pencil-name="Mod 4 Title"
                                style='box-sizing: border-box; color: #1e40af; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 14px; font-style: normal; font-weight: 800; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                Modul 4: User Journey Mapping &amp; Wireframing
                            </div>
                            <div data-pencil-name="Mod 4 Sub"
                                style='box-sizing: border-box; color: #3b82f6; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                Sedang Berjalan • 3 dari 6 Item Selesai • 3 Jam Estimasi
                            </div>
                        </div>
                    </div>
                    <div data-pencil-name="Mod 4 Active Badge"
                        style="align-items: center; background-color: #2872fa; border-radius: 999px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; padding: 4px 12px; width: fit-content;">
                        <div data-pencil-name="Active Badge Text"
                            style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            Sedang Berjalan
                        </div>
                    </div>
                </div>
                <div data-pencil-name="Sub Materials Container"
                    style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; padding: 8px 14px; width: 100%;">

                    <!-- 4.1 Video -->
                    <div data-pencil-name="Sub Material Row"
                        style="align-items: center; background-color: #f8fafc; border-radius: 7px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; outline-offset: -0.5px; outline: 1px solid #eaecf0; padding: 7px 12px; width: 100%;">
                        <div data-pencil-name="Sub Left"
                            style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; width: fit-content;">
                            <svg data-pencil-name="Sub Icon" data-icon-name="video-camera"
                                data-icon-set="phosphor" viewBox="0 0 14 14"
                                preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"
                                style="box-sizing: border-box; flex-shrink: 0; height: 15px; width: 15px;">
                                <path
                                    d="M13.34375 3.99219q-0.21875-0.10938-0.4375 0l-2.40625 1.36719 0-0.32813q0-0.92969-0.62891-1.55859-0.62891-0.62891-1.55859-0.62891l-7 0q-0.38281 0-0.62891 0.24609-0.24609 0.24609-0.24609 0.62891l0 5.25q0 0.92969 0.62891 1.55859 0.62891 0.62891 1.55859 0.62891l7 0q0.38281 0 0.62891-0.24609 0.24609-0.24609 0.24609-0.62891l0-1.64063 2.40625 1.36719q0.10938 0.05469 0.21875 0.05469 0.10938 0 0.21875-0.05469 0.21875-0.10937 0.21875-0.38281l0-5.25q0-0.27344-0.21875-0.38281z m-3.71875 6.28906l-7 0q-0.54688 0-0.92969-0.38281-0.38281-0.38281-0.38281-0.92969l0-5.25 7 0q0.54688 0 0.92969 0.38281 0.38281 0.38281 0.38281 0.92969l0 5.25z m3.0625-1.42188l-2.1875-1.25781 0-1.20312 2.1875-1.25781 0 3.71875z"
                                    fill="#10b981"></path>
                            </svg>
                            <div data-pencil-name="Sub Texts"
                                style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; width: fit-content;">
                                <div data-pencil-name="Sub Title"
                                    style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                    1. Konsep Dasar User Journey Mapping
                                </div>
                            </div>
                        </div>
                        <div data-pencil-name="Sub Badge"
                            style="align-items: center; background-color: #ecfdf5; border-radius: 4px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; padding: 2px 7px; width: fit-content;">
                            <div data-pencil-name="Sub Badge Text"
                                style='box-sizing: border-box; color: #059669; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                98% Ditonton ✓
                            </div>
                        </div>
                    </div>

                    <!-- 4.2 Quiz Checkpoint 1 -->
                    <div data-pencil-name="Sub Material Row"
                        style="align-items: center; background-color: #f8fafc; border-radius: 7px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; outline-offset: -0.5px; outline: 1px solid #eaecf0; padding: 7px 12px; width: 100%;">
                        <div data-pencil-name="Sub Left"
                            style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; width: fit-content;">
                            <svg data-pencil-name="Sub Icon" data-icon-name="question"
                                data-icon-set="phosphor" viewBox="0 0 14 14"
                                preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"
                                style="box-sizing: border-box; flex-shrink: 0; height: 15px; width: 15px;">
                                <path
                                    d="M7 1.3125q-1.53125 0-2.84375 0.76563-1.3125 0.76563-2.07813 2.07812-0.76563 1.3125-0.76562 2.84375 0 1.53125 0.76562 2.84375 0.76563 1.3125 2.07813 2.07813 1.3125 0.76563 2.84375 0.76562 1.53125 0 2.84375-0.76562 1.3125-0.76563 2.07813-2.07813 0.76563-1.3125 0.76562-2.84375 0-1.53125-0.76562-2.84375-0.76563-1.3125-2.07813-2.07813-1.3125-0.76563-2.84375-0.76562z m0 10.5q-1.3125 0-2.40625-0.65625-1.09375-0.65625-1.75-1.75-0.65625-1.09375-0.65625-2.40625 0-1.3125 0.65625-2.40625 0.65625-1.09375 1.75-1.75 1.09375-0.65625 2.40625-0.65625 1.3125 0 2.40625 0.65625 1.09375 0.65625 1.75 1.75 0.65625 1.09375 0.65625 2.40625 0 1.3125-0.65625 2.40625-0.65625 1.09375-1.75 1.75-1.09375 0.65625-2.40625 0.65625z m0.65625-1.96875q0 0.27344-0.19141 0.46484-0.19141 0.19141-0.46484 0.19141-0.27344 0-0.46484-0.19141-0.19141-0.19141-0.19141-0.46484 0-0.27344 0.19141-0.46484 0.19141-0.19141 0.46484-0.19141 0.27344 0 0.46484 0.19141 0.19141 0.19141 0.19141 0.46484z m1.3125-3.9375q0 0.71094-0.4375 1.23047-0.4375 0.51953-1.09375 0.68359l0 0.05469q0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078l0-0.4375q0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672 0.4375 0 0.76563-0.32813 0.32813-0.32813 0.32812-0.76562 0-0.4375-0.32813-0.76563-0.32813-0.32813-0.76562-0.32812-0.4375 0-0.76563 0.32813-0.32813 0.32813-0.32812 0.76562 0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.82031 0.57422-1.39453 0.57422-0.57422 1.39453-0.57422 0.82031 0 1.39453 0.57422 0.57422 0.57422 0.57422 1.39453z"
                                    fill="#10b981"></path>
                            </svg>
                            <div data-pencil-name="Sub Texts"
                                style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; width: fit-content;">
                                <div data-pencil-name="Sub Title"
                                    style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                    2. Quiz Checkpoint 1: Pemahaman User Journey
                                </div>
                            </div>
                        </div>
                        <div data-pencil-name="Sub Badge"
                            style="align-items: center; background-color: #ecfdf5; border-radius: 4px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; padding: 2px 7px; width: fit-content;">
                            <div data-pencil-name="Sub Badge Text"
                                style='box-sizing: border-box; color: #059669; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                Jawaban Benar ✓
                            </div>
                        </div>
                    </div>

                    <!-- 4.3 Template & Framework -->
                    <div data-pencil-name="Sub Material Row"
                        style="align-items: center; background-color: #f8fafc; border-radius: 7px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; outline-offset: -0.5px; outline: 1px solid #eaecf0; padding: 7px 12px; width: 100%;">
                        <div data-pencil-name="Sub Left"
                            style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; width: fit-content;">
                            <svg data-pencil-name="Sub Icon" data-icon-name="file-text"
                                data-icon-set="phosphor" viewBox="0 0 14 14"
                                preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"
                                style="box-sizing: border-box; flex-shrink: 0; height: 15px; width: 15px;">
                                <path
                                    d="M11.70313 4.48438l-3.0625-3.0625q-0.16406-0.10938-0.32813-0.10938l-5.25 0q-0.38281 0-0.62891 0.24609-0.24609 0.24609-0.24609 0.62891l0 9.625q0 0.38281 0.24609 0.62891 0.24609 0.24609 0.62891 0.24609l7.875 0q0.38281 0 0.62891-0.24609 0.24609-0.24609 0.24609-0.62891l0-7q0-0.16406-0.10937-0.32813z m-2.95313-1.69532l1.58594 1.58594-1.58594 0 0-1.58594z m2.1875 9.02344l-7.875 0 0-9.625 4.8125 0 0 2.625q0 0.16406 0.13672 0.30078 0.13672 0.13672 0.30078 0.13672l2.625 0 0 6.5625z m-1.75-4.375q0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672l-3.5 0q-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672l3.5 0q0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078z m0 1.75q0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672l-3.5 0q-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672l3.5 0q0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078z"
                                    fill="#10b981"></path>
                            </svg>
                            <div data-pencil-name="Sub Texts"
                                style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; width: fit-content;">
                                <div data-pencil-name="Sub Title"
                                    style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                    3. Template &amp; Framework Customer Journey Map
                                </div>
                            </div>
                        </div>
                        <div data-pencil-name="Sub Badge"
                            style="align-items: center; background-color: #ecfdf5; border-radius: 4px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; padding: 2px 7px; width: fit-content;">
                            <div data-pencil-name="Sub Badge Text"
                                style='box-sizing: border-box; color: #059669; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                Selesai Dibaca ✓
                            </div>
                        </div>
                    </div>

                    <!-- 4.4 Praktik Wireframe (Active) -->
                    <div data-pencil-name="Sub Material Row"
                        style="align-items: center; background-color: #eff6ff; border-radius: 7px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; outline-offset: -0.75px; outline: 1.5px solid #93c5fd; padding: 7px 12px; width: 100%;">
                        <div data-pencil-name="Sub Left"
                            style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; width: fit-content;">
                            <svg data-pencil-name="Sub Icon" data-icon-name="play" data-icon-set="phosphor"
                                viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                                xmlns="http://www.w3.org/2000/svg"
                                style="box-sizing: border-box; flex-shrink: 0; height: 15px; width: 15px;">
                                <path
                                    d="M4.375 12.6875q-0.21875 0-0.4375-0.10938-0.21875-0.10938-0.32813-0.32812-0.10938-0.21875-0.10937-0.4375l0-9.625q0-0.21875 0.10937-0.4375 0.10938-0.21875 0.32813-0.32813 0.21875-0.10938 0.46484-0.10937 0.24609 0 0.41016 0.10937l7.875 4.8125q0.4375 0.27344 0.4375 0.76563 0 0.49219-0.4375 0.76562l-7.875 4.8125q-0.16406 0.10938-0.4375 0.10938z m0-10.5l0 9.625 7.875-4.8125-7.875-4.8125z"
                                    fill="#2872fa"></path>
                            </svg>
                            <div data-pencil-name="Sub Texts"
                                style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; width: fit-content;">
                                <div data-pencil-name="Sub Title"
                                    style='box-sizing: border-box; color: #1d4ed8; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                    4. Praktik Pembuatan Wireframe Low-Fidelity
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('learn/digital-product-fundamentals'); ?>" data-pencil-name="Sub Action Btn"
                            style="align-items: center; background-color: #2872fa; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; padding: 4px 10px; width: fit-content; text-decoration: none;">
                            <div data-pencil-name="Sub Action Text"
                                style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                Lanjutkan Menonton ▶
                            </div>
                        </a>
                    </div>

                    <!-- 4.5 Quiz Checkpoint 2 (Locked) -->
                    <div data-pencil-name="Sub Material Row"
                        style="align-items: center; background-color: #f8fafc; border-radius: 7px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; opacity: 0.7; outline-offset: -0.5px; outline: 1px solid #eaecf0; padding: 7px 12px; width: 100%;">
                        <div data-pencil-name="Sub Left"
                            style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; width: fit-content;">
                            <svg data-pencil-name="Sub Icon" data-icon-name="lock" data-icon-set="phosphor"
                                viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                                xmlns="http://www.w3.org/2000/svg"
                                style="box-sizing: border-box; flex-shrink: 0; height: 15px; width: 15px;">
                                <path
                                    d="M11.375 4.375l-1.96875 0 0-1.53125q0-0.98438-0.71094-1.69531-0.71094-0.71094-1.69531-0.71094-0.98438 0-1.69531 0.71094-0.71094 0.71094-0.71094 1.69531l0 1.53125-1.96875 0q-0.38281 0-0.62891 0.24609-0.24609 0.24609-0.24609 0.62891l0 6.125q0 0.38281 0.24609 0.62891 0.24609 0.24609 0.62891 0.24609l8.75 0q0.38281 0 0.62891-0.24609 0.24609-0.24609 0.24609-0.62891l0-6.125q0-0.38281-0.24609-0.62891-0.24609-0.24609-0.62891-0.24609z m-5.90625-1.53125q0-0.65625 0.4375-1.09375 0.4375-0.4375 1.09375-0.4375 0.65625 0 1.09375 0.4375 0.4375 0.4375 0.4375 1.09375l0 1.53125-3.0625 0 0-1.53125z m5.90625 8.53125l-8.75 0 0-6.125 8.75 0 0 6.125z m-3.71875-3.0625q0 0.27344-0.19141 0.46484-0.19141 0.19141-0.46484 0.19141-0.27344 0-0.46484-0.19141-0.19141-0.19141-0.19141-0.46484 0-0.27344 0.19141-0.46484 0.19141-0.19141 0.46484-0.19141 0.27344 0 0.46484 0.19141 0.19141 0.19141 0.19141 0.46484z"
                                    fill="#94a3b8"></path>
                            </svg>
                            <div data-pencil-name="Sub Texts"
                                style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; width: fit-content;">
                                <div data-pencil-name="Sub Title"
                                    style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                    5. Quiz Checkpoint 2: Validasi Wireframe
                                </div>
                            </div>
                        </div>
                        <div data-pencil-name="Sub Badge"
                            style="align-items: center; background-color: #f1f5f9; border-radius: 4px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; padding: 2px 7px; width: fit-content;">
                            <div data-pencil-name="Sub Badge Text"
                                style='box-sizing: border-box; color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                Terkunci
                            </div>
                        </div>
                    </div>

                    <!-- 4.6 Handover Desain (Locked) -->
                    <div data-pencil-name="Sub Material Row"
                        style="align-items: center; background-color: #f8fafc; border-radius: 7px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; opacity: 0.7; outline-offset: -0.5px; outline: 1px solid #eaecf0; padding: 7px 12px; width: 100%;">
                        <div data-pencil-name="Sub Left"
                            style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; width: fit-content;">
                            <svg data-pencil-name="Sub Icon" data-icon-name="lock" data-icon-set="phosphor"
                                viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                                xmlns="http://www.w3.org/2000/svg"
                                style="box-sizing: border-box; flex-shrink: 0; height: 15px; width: 15px;">
                                <path
                                    d="M11.375 4.375l-1.96875 0 0-1.53125q0-0.98438-0.71094-1.69531-0.71094-0.71094-1.69531-0.71094-0.98438 0-1.69531 0.71094-0.71094 0.71094-0.71094 1.69531l0 1.53125-1.96875 0q-0.38281 0-0.62891 0.24609-0.24609 0.24609-0.24609 0.62891l0 6.125q0 0.38281 0.24609 0.62891 0.24609 0.24609 0.62891 0.24609l8.75 0q0.38281 0 0.62891-0.24609 0.24609-0.24609 0.24609-0.62891l0-6.125q0-0.38281-0.24609-0.62891-0.24609-0.24609-0.62891-0.24609z m-5.90625-1.53125q0-0.65625 0.4375-1.09375 0.4375-0.4375 1.09375-0.4375 0.65625 0 1.09375 0.4375 0.4375 0.4375 0.4375 1.09375l0 1.53125-3.0625 0 0-1.53125z m5.90625 8.53125l-8.75 0 0-6.125 8.75 0 0 6.125z m-3.71875-3.0625q0 0.27344-0.19141 0.46484-0.19141 0.19141-0.46484 0.19141-0.27344 0-0.46484-0.19141-0.19141-0.19141-0.19141-0.46484 0-0.27344 0.19141-0.46484 0.19141-0.19141 0.46484-0.19141 0.27344 0 0.46484 0.19141 0.19141 0.19141 0.19141 0.46484z"
                                    fill="#94a3b8"></path>
                            </svg>
                            <div data-pencil-name="Sub Texts"
                                style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; width: fit-content;">
                                <div data-pencil-name="Sub Title"
                                    style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                    6. Handover Desain Wireframe ke Engineering
                                </div>
                            </div>
                        </div>
                        <div data-pencil-name="Sub Badge"
                            style="align-items: center; background-color: #f1f5f9; border-radius: 4px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; padding: 2px 7px; width: fit-content;">
                            <div data-pencil-name="Sub Badge Text"
                                style='box-sizing: border-box; color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                Terkunci
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Module 5 Card - Locked -->
            <div data-pencil-name="Module 5 Card - Locked"
                style="align-items: center; background-color: #fafbfc; border-radius: 10px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; opacity: 0.8; outline-offset: -0.5px; outline: 1px solid #e2e8f0; padding: 11px 16px; width: 100%;">
                <div data-pencil-name="Mod 5 Left"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; width: fit-content;">
                    <svg data-pencil-name="Lock Icon" data-icon-name="lock" data-icon-set="phosphor"
                        viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                        xmlns="http://www.w3.org/2000/svg"
                        style="box-sizing: border-box; flex-shrink: 0; height: 18px; width: 18px;">
                        <path
                            d="M11.375 4.375l-1.96875 0 0-1.53125q0-0.98438-0.71094-1.69531-0.71094-0.71094-1.69531-0.71094-0.98438 0-1.69531 0.71094-0.71094 0.71094-0.71094 1.69531l0 1.53125-1.96875 0q-0.38281 0-0.62891 0.24609-0.24609 0.24609-0.24609 0.62891l0 6.125q0 0.38281 0.24609 0.62891 0.24609 0.24609 0.62891 0.24609l8.75 0q0.38281 0 0.62891-0.24609 0.24609-0.24609 0.24609-0.62891l0-6.125q0-0.38281-0.24609-0.62891-0.24609-0.24609-0.62891-0.24609z m-5.90625-1.53125q0-0.65625 0.4375-1.09375 0.4375-0.4375 1.09375-0.4375 0.65625 0 1.09375 0.4375 0.4375 0.4375 0.4375 1.09375l0 1.53125-3.0625 0 0-1.53125z m5.90625 8.53125l-8.75 0 0-6.125 8.75 0 0 6.125z m-3.71875-3.0625q0 0.27344-0.19141 0.46484-0.19141 0.19141-0.46484 0.19141-0.27344 0-0.46484-0.19141-0.19141-0.19141-0.19141-0.46484 0-0.27344 0.19141-0.46484 0.19141-0.19141 0.46484-0.19141 0.27344 0 0.46484 0.19141 0.19141 0.19141 0.19141 0.46484z"
                            fill="#94a3b8"></path>
                    </svg>
                    <div data-pencil-name="Mod 5 Text Group"
                        style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 2px; height: fit-content; justify-content: flex-start; width: fit-content;">
                        <div data-pencil-name="Mod 5 Title Text"
                            style='box-sizing: border-box; color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            Modul 5: Usability Testing &amp; Peluncuran MVP
                        </div>
                        <div data-pencil-name="Mod 5 Details Text"
                            style='box-sizing: border-box; color: #94a3b8; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            3 Materi • 2.5 Jam • Terkunci sampai Modul 4 diselesaikan
                        </div>
                    </div>
                </div>
                <div data-pencil-name="Mod 5 Lock Badge"
                    style="align-items: center; background-color: #f1f5f9; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; padding: 3px 8px; width: fit-content;">
                    <div data-pencil-name="Mod 5 Lock Text"
                        style='box-sizing: border-box; color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                        Terkunci
                    </div>
                </div>
            </div>

            <!-- Final Exam Card -->
            <div data-pencil-name="Final Exam Card"
                style="align-items: flex-start; background-color: #ffffff; border-radius: 12px; box-shadow: 0px 1px 3px #10182806; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 12px 16px; width: 100%;">
                <div data-pencil-name="Exam Top Row"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; width: 100%;">
                    <div data-pencil-name="Exam Left"
                        style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; width: fit-content;">
                        <svg data-pencil-name="Exam Icon" data-icon-name="check-square-offset"
                            data-icon-set="phosphor" viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                            xmlns="http://www.w3.org/2000/svg"
                            style="box-sizing: border-box; flex-shrink: 0; height: 18px; width: 18px;">
                            <path
                                d="M12.03125 2.84375l0 8.3125q0 0.38281-0.24609 0.62891-0.24609 0.24609-0.62891 0.24609l-3.71875 0q-0.21875 0-0.32813-0.13672-0.10938-0.13672-0.10937-0.30078 0-0.16406 0.10937-0.30078 0.10938-0.13672 0.32813-0.13672l3.71875 0 0-8.3125-8.3125 0 0 4.97656q0 0.21875-0.13672 0.32813-0.13672 0.10938-0.30078 0.10937-0.16406 0-0.30078-0.10937-0.13672-0.10938-0.13672-0.32813l0-4.97656q0-0.38281 0.24609-0.62891 0.24609-0.24609 0.62891-0.24609l8.3125 0q0.38281 0 0.62891 0.24609 0.24609 0.24609 0.24609 0.62891z m-4.70313 5.14063q-0.16406-0.10938-0.32812-0.10938-0.16406 0-0.32813 0.10938l-3.17187 3.22656-1.42188-1.47656q-0.16406-0.10938-0.32812-0.08204-0.16406 0.02734-0.27344 0.13672-0.10938 0.10938-0.13672 0.27344-0.02734 0.16406 0.08204 0.32813l1.75 1.75q0.16406 0.10938 0.32812 0.10937 0.16406 0 0.32813-0.10937l3.5-3.5q0.10938-0.16406 0.10937-0.32813 0-0.16406-0.10937-0.32812z"
                                fill="#475467"></path>
                        </svg>
                        <div data-pencil-name="Exam Text Group"
                            style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 1px; height: fit-content; justify-content: flex-start; width: fit-content;">
                            <div data-pencil-name="Exam Title Text"
                                style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 800; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                Ujian Akhir (Final Exam): Digital Product Fundamentals
                            </div>
                            <div data-pencil-name="Exam Sub Text"
                                style='box-sizing: border-box; color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                Evaluasi menyeluruh Modul
                            </div>
                        </div>
                    </div>
                    <div style="display:flex; align-items:center; gap:8px;">
                        <a href="<?php echo base_url('exam/attempt/1'); ?>" class="btn btn-primary btn-sm" style="padding:5px 12px; font-size:12px; font-weight:700; text-decoration:none; display:inline-flex; align-items:center; gap:6px;">
                            <span>Mulai Ujian Akhir</span>
                            <svg viewBox="0 0 14 14" style="height: 12px; width: 12px;" xmlns="http://www.w3.org/2000/svg"><path d="M12.14063 7.32813l-3.9375 3.9375q-0.16406 0.10938-0.32813 0.10937-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.10938-0.32812l3.22656-3.17188-8.58594 0q-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672l8.58594 0-3.22657-3.17188q-0.10938-0.16406-0.08203-0.32812 0.02734-0.16406 0.13672-0.27344 0.10938-0.10938 0.27344-0.13672 0.16406-0.02734 0.32812 0.08203l3.9375 3.9375q0.10938 0.16406 0.10938 0.32813 0 0.16406-0.10938 0.32812z" fill="#ffffff"></path></svg>
                        </a>
                    </div>
                </div>
                <div data-pencil-name="Exam Params Row"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; flex-wrap: wrap; gap: 8px; height: fit-content; justify-content: flex-start; width: 100%;">
                    <div data-pencil-name="Param Box"
                        style="align-items: center; background-color: #f8fafc; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #e2e8f0; padding: 3px 8px; width: fit-content;">
                        <div data-pencil-name="Param Text"
                            style='box-sizing: border-box; color: #334155; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            25 Soal Pilihan Ganda
                        </div>
                    </div>
                    <div data-pencil-name="Param Box"
                        style="align-items: center; background-color: #f8fafc; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #e2e8f0; padding: 3px 8px; width: fit-content;">
                        <div data-pencil-name="Param Text"
                            style='box-sizing: border-box; color: #334155; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            Durasi: 45 Menit
                        </div>
                    </div>
                    <div data-pencil-name="Param Box"
                        style = "align-items: center; background-color: #f8fafc; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #e2e8f0; padding: 3px 8px; width: fit-content;" >
						<div data-pencil-name="Param Text"
                            style='box-sizing: border-box; color: #334155; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            Passing Grade: 70
                        </div>
                    </div>
                    <div data-pencil-name="Param Box"
                    	style = "align-items: center; background-color: #f8fafc; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #e2e8f0; padding: 3px 8px; width: fit-content;" >
						<div data-pencil-name="Param Text"
                            style='box-sizing: border-box; color: #334155; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            Maks. 3 Attempt (Nilai Tertinggi)
                        </div>
                    </div>
                </div>
            </div>

            <!-- Certificate Card -->
            <div data-pencil-name="Certificate Card"
                style="align-items: flex-start; background-color: #ffffff; border-radius: 12px; box-shadow: 0px 1px 3px #10182806; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 12px 16px; width: 100%;">
                <div data-pencil-name="Cert Top Row"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; width: 100%;">
                    <div data-pencil-name="Cert Left"
                        style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; width: fit-content;">
                        <svg data-pencil-name="Cert Icon" data-icon-name="medal" data-icon-set="phosphor"
                            viewBox="0 0 14 14" preserveAspectRatio="xMidYMid meet"
                            xmlns="http://www.w3.org/2000/svg"
                            style="box-sizing: border-box; flex-shrink: 0; height: 18px; width: 18px;">
                            <path
                                d="M11.8125 5.25q0-1.69531-1.03906-3.00781-1.03906-1.3125-2.67969-1.69531-1.64063-0.38281-3.14453 0.32812-1.50391 0.71094-2.24219 2.21484-0.73828 1.50391-0.41016 3.14453 0.32813 1.64063 1.64063 2.73438l0 4.15625q0 0.21875 0.21875 0.35547 0.21875 0.13672 0.4375 0.02734l2.40625-1.20312 2.40625 1.20312q0.10938 0.05469 0.24609 0.05469 0.13672 0 0.27344-0.13672 0.13672-0.13672 0.13672-0.30078l0-4.15625q0.82031-0.71094 1.28516-1.66797 0.46484-0.95703 0.46484-2.05078z m-8.75 0q0-1.09375 0.51953-1.99609 0.51953-0.90234 1.42188-1.42188 0.90234-0.51953 1.99609-0.51953 1.09375 0 1.99609 0.51953 0.90234 0.51953 1.42188 1.42188 0.51953 0.90234 0.51953 1.99609 0 1.09375-0.51953 1.99609-0.51953 0.90234-1.42188 1.42188-0.90234 0.51953-1.99609 0.51953-1.09375 0-1.99609-0.51953-0.90234-0.51953-1.42188-1.42188-0.51953-0.90234-0.51953-1.99609z m6.125 7.16406l-1.96875-0.98437q-0.21875-0.10938-0.4375 0l-1.96875 0.98437 0-2.89844q1.03906 0.54688 2.1875 0.54688 1.14844 0 2.1875-0.54688l0 2.89844z m-2.1875-4.10156q0.82031 0 1.53125-0.41016 0.71094-0.41016 1.12109-1.12109 0.41016-0.71094 0.41016-1.53125 0-0.82031-0.41016-1.53125-0.41016-0.71094-1.12109-1.12109-0.71094-0.41016-1.53125-0.41016-0.82031 0-1.53125 0.41016-0.71094 0.41016-1.12109 1.12109-0.41016 0.71094-0.41016 1.53125 0 0.82031 0.41016 1.53125 0.41016 0.71094 1.12109 1.12109 0.71094 0.41016 1.53125 0.41016z m0-5.25q0.92969 0 1.55859 0.62891 0.62891 0.62891 0.62891 1.55859 0 0.92969-0.62891 1.55859-0.62891 0.62891-1.55859 0.62891-0.92969 0-1.55859-0.62891-0.62891-0.62891-0.62891-1.55859 0-0.92969 0.62891-1.55859 0.62891-0.62891 1.55859-0.62891z"
                                fill="#2872fa"></path>
                        </svg>
                        <div data-pencil-name="Cert Text Group"
                            style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 1px; height: fit-content; justify-content: flex-start; width: fit-content;">
                            <div data-pencil-name="Cert Title Text"
                                style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 800; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                Sertifikat Digital Resmi Kelulusan
                            </div>
                            <div data-pencil-name="Cert Sub Text"
                                style='box-sizing: border-box; color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                                Diterbitkan otomatis dengan Certificate ID unik dan tautan verifikasi publik
                            </div>
                        </div>
                    </div>
                    <div data-pencil-name="Cert Lock Badge"
                        style="align-items: center; background-color: #f1f5f9; border-radius: 999px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; padding: 3px 10px; width: fit-content;">
                        <div data-pencil-name="Cert Lock Text"
                            style='box-sizing: border-box; color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                            Belum Terbit
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
