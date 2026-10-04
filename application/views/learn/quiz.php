<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    $course_slug = isset($course_slug) ? $course_slug : 'digital-product-fundamentals';
?>
<!-- Pop-up Quiz Checkpoint 1 Workspace matching design-reference/quiz-checkpoint-1.html -->

<!-- Top Navigation & Breadcrumb (seiras dengan halaman detail courses) -->
<?php $this->load->view('partials/breadcrumb_learn', [
    'course_slug'  => $course_slug,
    'course_code'  => isset($course_code) ? $course_code : 'DP-101',
    'course_title' => isset($course_title) ? $course_title : 'Digital Product Fundamentals',
    'active_title' => '2. Quiz Checkpoint 1: Pemahaman User Journey',
]); ?>

<div class="learn-container">
    <!-- Left: Reusable Curriculum Playlist Drawer (396px) -->
    <?php $this->load->view('partials/playlist_drawer', ['active_item' => 2, 'course_slug' => $course_slug]); ?>

    <!-- Right: Quiz Workspace Column -->
    <div data-pencil-name="Quiz Workspace Column" class="learn-workspace"
        style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; gap: 12px; height: fit-content; justify-content: flex-start; flex: 1; min-width: 0;">

    <!-- 1. Quiz Header Card -->
    <div data-pencil-name="Quiz Header Card"
        style="align-items: flex-start; background-color: #ffffff; border-radius: 12px; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 14px 18px; width: 100%;">
        <div data-pencil-name="Header Row 1"
            style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; width: 100%;">
            <div data-pencil-name="Title Group"
                style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 2px; height: fit-content; justify-content: flex-start; width: fit-content">
                <div data-pencil-name="Main Title"
                    style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 20px; font-style: normal; font-weight: 800; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap'>
                    2. Quiz Checkpoint 1: Pemahaman User Journey
                </div>
            </div>
        </div>
        <div data-pencil-name="Progress Track Frame"
            style="align-items: flex-start; background-color: #f1f5f9; border-radius: 3px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 6px; justify-content: flex-start; width: 100%;">
            <div data-pencil-name="Progress Fill"
                style="align-items: flex-start; background-color: #2872fa; border-radius: 3px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 6px; justify-content: flex-start; width: 33%;">
            </div>
        </div>
    </div>

    <!-- 2. Main Question Card -->
    <div data-pencil-name="Main Question Card"
        style="align-items: flex-start; background-color: #ffffff; border-radius: 12px; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 12px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 16px 20px; width: 100%;">
        <div data-pencil-name="Question Metadata Subrow"
            style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; width: 100%;">
            <div data-pencil-name="Question Tag Badge"
                style="align-items: flex-start; background-color: #f8fafc; border-radius: 6px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 4px 8px; width: fit-content">
                <div data-pencil-name="Tag Text"
                    style='box-sizing: border-box; color: #475467; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap'>
                    Pertanyaan 1 dari 3
                </div>
            </div>
        </div>
        <div data-pencil-name="Question Prompt"
            style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 15px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: 22px; text-align: left; width: 100%;'>
            Dalam pemetaan Customer Journey Map untuk perancangan produk MVP, pada tahapan manakah
            calon pengguna pertama kali menyadari adanya problem/kebutuhan dan mulai mencari
            informasi mengenai alternatif solusi digital?
        </div>

        <!-- Options List -->
        <div data-pencil-name="Options List"
            style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; width: 100%;">

            <!-- Option A -->
            <div data-pencil-name="Option A Container" class="quiz-option"
                style="cursor:pointer; align-items: center; background-color: #ffffff; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 12px; min-height: 48px; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 10px 14px; width: 100%;">
                <div data-pencil-name="Letter Circle"
                    style="align-items: center; background-color: #f1f5f9; border-radius: 12px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 24px; justify-content: center; width: 24px">
                    <div data-pencil-name="Letter"
                        style='box-sizing: border-box; color: #475467; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap'>
                        A
                    </div>
                </div>
                <div data-pencil-name="Option Text"
                    style='box-sizing: border-box; color: #475467; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 500; letter-spacing: 0px; line-height: 1.4; text-align: left; flex: 1;'>
                    Consideration — Pengguna menimbang alternatif fitur, membandingkan harga, dan membaca ulasan produk.
                </div>
            </div>

            <!-- Option B Container Active / Correct -->
            <div data-pencil-name="Option B Container Active" class="quiz-option is-active"
                style="cursor:pointer; align-items: center; background-color: #eff6ff; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-wrap: wrap; flex-shrink: 0; gap: 10px; min-height: 48px; justify-content: space-between; outline-offset: -0.75px; outline: 1.5px solid #2872fa; padding: 10px 14px; width: 100%;">
                <div data-pencil-name="Opt Left"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 12px; flex: 1; min-width: 200px;">
                    <div data-pencil-name="Letter Circle"
                        style="align-items: center; background-color: #2872fa; border-radius: 12px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 24px; justify-content: center; width: 24px">
                        <div data-pencil-name="Letter"
                            style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap'>
                            B
                        </div>
                    </div>
                    <div data-pencil-name="Option Text"
                        style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: 1.4; text-align: left; flex: 1;'>
                        Awareness — Pengguna pertama kali merasakan rasa frustrasi/masalah dan mencari solusi baru.
                    </div>
                </div>
            </div>

            <!-- Option C -->
            <div data-pencil-name="Option C Container" class="quiz-option"
                style="cursor:pointer; align-items: center; background-color: #ffffff; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 12px; min-height: 48px; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 10px 14px; width: 100%;">
                <div data-pencil-name="Letter Circle"
                    style="align-items: center; background-color: #f1f5f9; border-radius: 12px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 24px; justify-content: center; width: 24px">
                    <div data-pencil-name="Letter"
                        style='box-sizing: border-box; color: #475467; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap'>
                        C
                    </div>
                </div>
                <div data-pencil-name="Option Text"
                    style='box-sizing: border-box; color: #475467; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 500; letter-spacing: 0px; line-height: 1.4; text-align: left; flex: 1;'>
                    Decision / Trial — Pengguna mendaftarkan akun perdana dan mencoba fitur MVP produk.
                </div>
            </div>

            <!-- Option D -->
            <div data-pencil-name="Option D Container" class="quiz-option"
                style="cursor:pointer; align-items: center; background-color: #ffffff; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 12px; min-height: 48px; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 10px 14px; width: 100%;">
                <div data-pencil-name="Letter Circle"
                    style="align-items: center; background-color: #f1f5f9; border-radius: 12px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 24px; justify-content: center; width: 24px">
                    <div data-pencil-name="Letter"
                        style='box-sizing: border-box; color: #475467; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap'>
                        D
                    </div>
                </div>
                <div data-pencil-name="Option Text"
                    style='box-sizing: border-box; color: #475467; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 500; letter-spacing: 0px; line-height: 1.4; text-align: left; flex: 1;'>
                    Retention — Pengguna menggunakan produk secara berkelanjutan dan loyalitas terbangun.
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Action Bar -->
    <div data-pencil-name="Action Bar"
        style="align-items: center; background-color: #ffffff; border-radius: 12px; box-sizing: border-box; display: flex; flex-direction: row; flex-wrap: wrap; flex-shrink: 0; gap: 12px; height: fit-content; justify-content: space-between; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 10px 16px; width: 100%;">
        <a href="<?php echo base_url('learn/' . $course_slug . '/video/1'); ?>" data-pencil-name="Prev Video Btn"
            style="text-decoration:none; align-items: center; background-color: #f8fafc; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 8px 14px; width: fit-content">
            <svg viewBox="0 0 14 14" style="height: 13px; width: 13px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.25 7q0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672l-8.58594 0 3.22657 3.17188q0.10938 0.16406 0.10937 0.32812 0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672-0.16406 0-0.32812-0.10937l-3.9375-3.9375q-0.10938-0.16406-0.10938-0.32813 0-0.16406 0.10938-0.32812l3.9375-3.9375q0.16406-0.10938 0.32812-0.08204 0.16406 0.02734 0.27344 0.13672 0.10938 0.10938 0.13672 0.27344 0.02734 0.16406-0.08203 0.32813l-3.22657 3.17187 8.58594 0q0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078z" fill="#475467"></path>
            </svg>
            <div data-pencil-name="Prev Text"
                style='box-sizing: border-box; color: #475467; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap'>
                Kembali ke Video Materi
            </div>
        </a>



        <a href="<?php echo base_url('learn/' . $course_slug . '/pdf/1'); ?>" data-pencil-name="Next Quest Btn"
            style="text-decoration:none; align-items: center; background-color: #2872fa; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; padding: 8px 18px; width: fit-content">
            <div data-pencil-name="Next Text"
                style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap'>
                Lanjut ke Soal 2
            </div>
            <svg viewBox="0 0 14 14" style="height: 13px; width: 13px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.14063 7.32813l-3.9375 3.9375q-0.16406 0.10938-0.32813 0.10937-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.10938-0.32812l3.22656-3.17188-8.58594 0q-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672l8.58594 0-3.22657-3.17188q-0.10938-0.16406-0.08203-0.32812 0.02734-0.16406 0.13672-0.27344 0.10938-0.10938 0.27344-0.13672 0.16406-0.02734 0.32812 0.08203l3.9375 3.9375q0.10938 0.16406 0.10938 0.32813 0 0.16406-0.10938 0.32812z" fill="#ffffff"></path>
            </svg>
        </a>
    </div>

    </div>
</div>
