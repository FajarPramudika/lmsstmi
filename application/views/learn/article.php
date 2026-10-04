<?php
defined('BASEPATH') or exit('No direct script access allowed');
$course_slug = isset($course_slug) ? $course_slug : 'digital-product-fundamentals';
?>
<!-- Article Material Learning Workspace matching design-reference/article-material.html -->

<!-- Top Navigation & Breadcrumb (seiras dengan halaman detail courses) -->
<?php $this->load->view('partials/breadcrumb_learn', array(
    'course_slug'  => $course_slug,
    'course_code'  => isset($course_code) ? $course_code : 'DP-101',
    'course_title' => isset($course_title) ? $course_title : 'Digital Product Fundamentals',
    'active_title' => '6. Studi Kasus Implementasi Journey Maps'
)); ?>

<div class="learn-container">
    <!-- Left: Reusable Curriculum Playlist Drawer (396px) -->
    <?php $this->load->view('partials/playlist_drawer', ['active_item' => 6, 'course_slug' => $course_slug]); ?>

    <!-- Right: Article Workspace Column -->
    <div data-pencil-name="Quiz Workspace Column" class="learn-workspace"
        style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; gap: 12px; height: fit-content; justify-content: flex-start; flex: 1; min-width: 0;">
    
    <!-- 1. Article Header Card -->
    <div data-pencil-name="Article Header Card"
        style="align-items: center; background-color: #ffffff; border-radius: 12px; box-sizing: border-box; display: flex; flex-direction: row; flex-wrap: wrap; flex-shrink: 0; gap: 12px; height: fit-content; justify-content: space-between; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 14px 18px; width: 100%;">
        <div data-pencil-name="Title Group"
            style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 2px; height: fit-content; justify-content: flex-start;">
            <div data-pencil-name="Main Title"
                style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 20px; font-style: normal; font-weight: 800; letter-spacing: 0px; line-height: normal; text-align: left;'>
                6. Handover Desain ke Engineering
            </div>
        </div>
        <div data-pencil-name="Reading Done Badge"
            style="align-items: center; background-color: #f0fdf4; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #bbf7d0; padding: 8px 14px; width: fit-content;">
            <svg viewBox="0 0 14 14" style="height: 14px; width: 14px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.73438 5.35938q0.10938 0.16406 0.10937 0.35546 0 0.19141-0.10937 0.30079l-3.22657 3.0625q-0.10938 0.10938-0.30078 0.10937-0.19141 0-0.30078-0.10937l-1.58594-1.53125q-0.21875-0.16406-0.16406-0.4375 0.05469-0.27344 0.30078-0.32813 0.24609-0.05469 0.41016 0.10938l1.3125 1.25781 2.95312-2.78906q0.10938-0.10938 0.30078-0.10938 0.19141 0 0.30078 0.16406l0-0.05468z m2.95312 1.64062q0 1.53125-0.76563 2.84375-0.76563 1.3125-2.07812 2.07813-1.3125 0.76563-2.84375 0.76562-1.53125 0-2.84375-0.76562-1.3125-0.76563-2.07813-2.07813-0.76563-1.3125-0.76562-2.84375 0-1.53125 0.76562-2.84375 0.76563-1.3125 2.07813-2.07813 1.3125-0.76563 2.84375-0.76562 1.53125 0 2.84375 0.76562 1.3125 0.76563 2.07813 2.07813 0.76563 1.3125 0.76562 2.84375z" fill="#10b981"></path>
            </svg>
            <div data-pencil-name="Done Text"
                style='box-sizing: border-box; color: #10b981; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                Selesai Dibaca (Hingga Akhir Artikel) ✓
            </div>
        </div>
    </div>

    <!-- 2. Article Reader Container (640px) -->
    <div data-pencil-name="Article Reader Container"
        style="align-items: flex-start; background-color: #ffffff; border-radius: 12px; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 0px; height: 640px; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; overflow: hidden; width: 100%;">
        
        <!-- Article Cover Banner -->
        <div data-pencil-name="Article Cover Banner"
            style="align-items: flex-start; background-color: #0f172a; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 6px; height: auto; min-height: 105px; justify-content: center; padding: 16px 24px; width: 100%;">
            <div data-pencil-name="Cover Tag"
                style='box-sizing: border-box; color: #38bdf8; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left;'>
                DOKUMENTASI PRODUK &amp; KOLABORASI TIM • MODUL 4.6
            </div>
            <div data-pencil-name="Cover Headline"
                style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 18px; font-weight: 800; letter-spacing: 0px; line-height: 1.3; text-align: left;'>
                Panduan Praktis Handover Desain MVP ke Tim Software Engineering
            </div>
            <div data-pencil-name="Cover Meta"
                style='box-sizing: border-box; color: #94a3b8; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-weight: 500; letter-spacing: 0px; line-height: normal; text-align: left;'>
                Ditulis oleh Andi Setiawan (Senior PM) • Diperbarui Oktober 2026 • 10 Menit Waktu Baca
            </div>
        </div>

        <!-- Article Body Container (535px with overflow scroll) -->
        <div data-pencil-name="Article Body Container"
            style="align-items: flex-start; background-color: #ffffff; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 12px; height: 535px; justify-content: flex-start; padding: 18px 24px; width: 100%; overflow-y: auto;">
            
            <!-- Section 1 -->
            <div data-pencil-name="Section 1 Group"
                style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 4px; height: fit-content; justify-content: flex-start; width: 100%;">
                <div data-pencil-name="Sec 1 Title"
                    style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 14px; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                    1. Mengapa Handover Desain Menjadi Titik Kritis?
                </div>
                <div data-pencil-name="Sec 1 Body"
                    style='box-sizing: border-box; color: #475467; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 500; letter-spacing: 0px; line-height: 17px; text-align: left; width: 100%;'>
                    Banyak proyek MVP mengalami keterlambatan peluncuran bukan karena kendala teknis
                    penulisan kode, melainkan karena ambiguitas spesifikasi desain. Handover yang
                    efektif bukan sekadar memberikan tautan Figma, melainkan menyelaraskan pemahaman
                    bersama mengenai user flow, edge cases, dan prioritas backlog pengembangan.
                </div>
            </div>

            <!-- Section 2 -->
            <div data-pencil-name="Section 2 Group"
                style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; width: 100%;">
                <div data-pencil-name="Sec 2 Title"
                    style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 14px; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                    2. Checklist Esensial Sebelum Sesi Walkthrough
                </div>
                
                <!-- Check Card 1 -->
                <div data-pencil-name="Check Card 1"
                    style="align-items: center; background-color: #f8fafc; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #e2e8f0; padding: 8px 12px; width: 100%;">
                    <div data-pencil-name="Num Circle 1"
                        style="align-items: center; background-color: #2872fa; border-radius: 11px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; height: 22px; justify-content: center; width: 22px;">
                        <div data-pencil-name="Num"
                            style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-weight: 700; line-height: normal; text-align: left; white-space: nowrap;'>
                            1
                        </div>
                    </div>
                    <div data-pencil-name="Check Desc 1"
                        style='box-sizing: border-box; color: #334155; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-weight: 500; line-height: 15px; text-align: left;'>
                        Design Token &amp; Komponen: Pastikan warna, tipografi, dan padding sudah terstandarisasi, serta komponen yang siap dibuat diberi label 'Ready for Dev' di Figma.
                    </div>
                </div>

                <!-- Check Card 2 -->
                <div data-pencil-name="Check Card 2"
                    style="align-items: center; background-color: #f8fafc; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #e2e8f0; padding: 8px 12px; width: 100%;">
                    <div data-pencil-name="Num Circle 2"
                        style="align-items: center; background-color: #2872fa; border-radius: 11px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; height: 22px; justify-content: center; width: 22px;">
                        <div data-pencil-name="Num"
                            style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-weight: 700; line-height: normal; text-align: left; white-space: nowrap;'>
                            2
                        </div>
                    </div>
                    <div data-pencil-name="Check Desc 2"
                        style='box-sizing: border-box; color: #334155; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-weight: 500; line-height: 15px; text-align: left;'>
                        User Story &amp; Kriteria Penerimaan: Cantumkan skenario interaksi utama, validasi input formulir (error states), serta kondisi empty state untuk setiap layar MVP.
                    </div>
                </div>

                <!-- Check Card 3 -->
                <div data-pencil-name="Check Card 3"
                    style="align-items: center; background-color: #f8fafc; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #e2e8f0; padding: 8px 12px; width: 100%;">
                    <div data-pencil-name="Num Circle 3"
                        style="align-items: center; background-color: #2872fa; border-radius: 11px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; height: 22px; justify-content: center; width: 22px;">
                        <div data-pencil-name="Num"
                            style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-weight: 700; line-height: normal; text-align: left; white-space: nowrap;'>
                            3
                        </div>
                    </div>
                    <div data-pencil-name="Check Desc 3"
                        style='box-sizing: border-box; color: #334155; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-weight: 500; line-height: 15px; text-align: left;'>
                        Dokumentasi Edge Cases &amp; Exception: Jelaskan apa yang terjadi saat koneksi internet lambat, sesi login kedaluwarsa, atau pengguna memasukkan format data yang tidak valid.
                    </div>
                </div>
            </div>

            <!-- Insight Callout Box -->
            <div data-pencil-name="Insight Callout Box"
                style="align-items: flex-start; background-color: #f0fdf4; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 3px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #bbf7d0; padding: 10px 14px; width: 100%;">
                <div data-pencil-name="Insight Header"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; gap: 6px; height: fit-content; justify-content: flex-start;">
                    <svg viewBox="0 0 14 14" style="height: 14px; width: 14px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.625 12.6875q0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672l-4.375 0q-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672l4.375 0q0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078z m2.1875-7q0 1.09375-0.49219 2.10547-0.49219 1.01172-1.36719 1.66797-0.32813 0.27344-0.32812 0.71094l0 0.32812q0 0.38281-0.24609 0.62891-0.24609 0.24609-0.62891 0.24609l-3.5 0q-0.38281 0-0.62891-0.24609-0.24609-0.24609-0.24609-0.62891l0-0.32813q0-0.4375-0.32813-0.71093-0.875-0.65625-1.36718-1.64063-0.49219-0.98438-0.49219-2.13281 0-1.25781 0.62891-2.35156 0.62891-1.09375 1.69531-1.75 1.06641-0.65625 2.37891-0.71094 0.98438 0 1.88671 0.35547 0.90234 0.35547 1.58594 1.01172 0.68359 0.65625 1.06641 1.55859 0.38281 0.90234 0.38281 1.88672z m-0.875 0q0-0.82031-0.30078-1.53125-0.30078-0.71094-0.875-1.28516-0.57422-0.57422-1.3125-0.84765-0.73828-0.27344-1.55859-0.27344-1.03906 0-1.91407 0.54688-0.875 0.54688-1.39453 1.44921-0.51953 0.90234-0.51953 1.94141 0 0.92969 0.41016 1.75 0.41016 0.82031 1.12109 1.36719 0.27344 0.21875 0.46484 0.60156 0.19141 0.38281 0.19141 0.76563l0 0.32812 3.5 0 0-0.32812q0-0.38281 0.19141-0.76563 0.19141-0.38281 0.51953-0.60156 0.71094-0.60156 1.09375-1.39453 0.38281-0.79297 0.38281-1.72266z" fill="#16a34a"></path>
                    </svg>
                    <div data-pencil-name="Insight Title"
                        style='box-sizing: border-box; color: #15803d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-weight: 700; white-space: nowrap;'>
                        💡 Rekomendasi Eksekusi: Jadwalkan Sesi Walkthrough 30 Menit
                    </div>
                </div>
                <div data-pencil-name="Insight Desc"
                    style='box-sizing: border-box; color: #166534; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-weight: 500; line-height: 15px; text-align: left; width: 100%;'>
                    Selalu jadwalkan sesi Q&amp;A sinkron selama 30 menit bersama Tech Lead dan
                    Frontend Engineer sebelum sprint dimulai. Sesi tatap muka ini memangkas hingga 70%
                    kesalahpahaman spesifikasi saat development berlangsung.
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Action Bar -->
    <div data-pencil-name="Action Bar"
        style="align-items: center; background-color: #ffffff; border-radius: 12px; box-sizing: border-box; display: flex; flex-direction: row; flex-wrap: wrap; flex-shrink: 0; gap: 12px; height: fit-content; justify-content: space-between; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 10px 16px; width: 100%;">
        <a href="<?php echo base_url('learn/' . $course_slug . '/quiz/2'); ?>" data-pencil-name="Prev Quiz 2 Btn"
            style="text-decoration:none; align-items: center; background-color: #f8fafc; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 8px 14px; width: fit-content;">
            <svg viewBox="0 0 14 14" style="height: 13px; width: 13px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.25 7q0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672l-8.58594 0 3.22657 3.17188q0.10938 0.16406 0.10937 0.32812 0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672-0.16406 0-0.32812-0.10937l-3.9375-3.9375q-0.10938-0.16406-0.10938-0.32813 0-0.16406 0.10938-0.32812l3.9375-3.9375q0.16406-0.10938 0.32812-0.08204 0.16406 0.02734 0.27344 0.13672 0.10938 0.10938 0.13672 0.27344 0.02734 0.16406-0.08203 0.32813l-3.22657 3.17187 8.58594 0q0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078z" fill="#475467"></path>
            </svg>
            <div data-pencil-name="Prev Text"
                style='box-sizing: border-box; color: #475467; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                Kembali ke Pop-up Quiz 2
            </div>
        </a>

        <a href="<?php echo base_url('courses/' . $course_slug); ?>" data-pencil-name="Next Modul Btn"
            style="text-decoration:none; align-items: center; background-color: #2872fa; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; padding: 8px 20px; width: fit-content;">
            <div data-pencil-name="Next Text"
                style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                Selesaikan Modul 4 &amp; Buka Modul 5
            </div>
            <svg viewBox="0 0 14 14" style="height: 13px; width: 13px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.14063 7.32813l-3.9375 3.9375q-0.16406 0.10938-0.32813 0.10937-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.10938-0.32812l3.22656-3.17188-8.58594 0q-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672l8.58594 0-3.22657-3.17188q-0.10938-0.16406-0.08203-0.32812 0.02734-0.16406 0.13672-0.27344 0.10938-0.10938 0.27344-0.13672 0.16406-0.02734 0.32812 0.08203l3.9375 3.9375q0.10938 0.16406 0.10938 0.32813 0 0.16406-0.10938 0.32812z" fill="#ffffff"></path>
            </svg>
        </a>
    </div>

    </div>
</div>
