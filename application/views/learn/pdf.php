<?php
defined('BASEPATH') or exit('No direct script access allowed');
$course_slug = isset($course_slug) ? $course_slug : 'digital-product-fundamentals';
?>
<!-- PDF Material Learning Workspace matching design-reference/pdf-material.html -->

<!-- Top Navigation & Breadcrumb (seiras dengan halaman detail courses) -->
<?php $this->load->view('partials/breadcrumb_learn', array(
    'course_slug'  => $course_slug,
    'course_code'  => isset($course_code) ? $course_code : 'DP-101',
    'course_title' => isset($course_title) ? $course_title : 'Digital Product Fundamentals',
    'active_title' => '3. Panduan Praktis Interview Pengguna (PDF)'
)); ?>

<div class="learn-container">
    <!-- Left: Reusable Curriculum Playlist Drawer (396px) -->
    <?php $this->load->view('partials/playlist_drawer', ['active_item' => 3, 'course_slug' => $course_slug]); ?>

    <!-- Right: PDF Workspace Column -->
    <div data-pencil-name="Quiz Workspace Column" class="learn-workspace"
        style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; gap: 12px; height: fit-content; justify-content: flex-start; flex: 1; min-width: 0;">
    
    <!-- 1. PDF Header Card -->
    <div data-pencil-name="PDF Header Card"
        style="align-items: center; background-color: #ffffff; border-radius: 12px; box-sizing: border-box; display: flex; flex-direction: row; flex-wrap: wrap; flex-shrink: 0; gap: 12px; height: fit-content; justify-content: space-between; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 14px 18px; width: 100%;">
        <div data-pencil-name="Title Group"
            style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 2px; height: fit-content; justify-content: flex-start;">
            <div data-pencil-name="Main Title"
                style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 20px; font-style: normal; font-weight: 800; letter-spacing: 0px; line-height: normal; text-align: left;'>
                3. Template &amp; Framework Customer Journey Map
            </div>
        </div>
        <a href="#" onclick="if(window.showToast) { showToast('Mengunduh template berkas Customer-Journey-Map-Template-v2.pdf...', 'success'); } else { alert('Mengunduh template PDF...'); } return false;"
            data-pencil-name="Download PDF Btn"
            style="text-decoration:none; align-items: center; background-color: #eff6ff; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #bfdbfe; padding: 8px 14px; width: fit-content;">
            <svg viewBox="0 0 14 14" style="height: 14px; width: 14px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.375 6.34375q-0.10938-0.16406-0.10938-0.32813 0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672 0.16406 0 0.32813 0.10938l1.53125 1.58594 0-5.08594q0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672 0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078l0 5.08594 1.53125-1.58594q0.16406-0.10938 0.32813-0.10938 0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078 0 0.16406-0.10938 0.32813l-2.29688 2.29688q-0.16406 0.10938-0.32812 0.10937-0.16406 0-0.32813-0.10937l-2.29687-2.29688z m7.4375 1.53125q-0.16406 0-0.30078 0.13672-0.13672 0.13672-0.13672 0.30078l0 3.0625-8.75 0 0-3.0625q0-0.16406-0.13672-0.30078-0.13672-0.13672-0.30078-0.13672-0.16406 0-0.30078 0.13672-0.13672 0.13672-0.13672 0.30078l0 3.0625q0 0.38281 0.24609 0.62891 0.24609 0.24609 0.62891 0.24609l8.75 0q0.38281 0 0.62891-0.24609 0.24609-0.24609 0.24609-0.62891l0-3.0625q0-0.16406-0.13672-0.30078-0.13672-0.13672-0.30078-0.13672z" fill="#2872fa"></path>
            </svg>
            <div data-pencil-name="Download Text"
                style='box-sizing: border-box; color: #2872fa; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;'>
                Unduh Template PDF
            </div>
        </a>
    </div>

    <!-- 2. PDF Viewer Container (640px) -->
    <div data-pencil-name="PDF Viewer Container"
        style="align-items: flex-start; background-color: #1e293b; border-radius: 12px; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 0px; height: 640px; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #334155; overflow: hidden; width: 100%;">
        
        <!-- PDF Toolbar -->
        <div data-pencil-name="PDF Toolbar"
            style="align-items: center; background-color: #0f172a; border-color: #334155; border-style: solid; border-width: 0px 0px 1px 0px; box-sizing: border-box; display: flex; flex-direction: row; flex-wrap: wrap; flex-shrink: 0; min-height: 44px; justify-content: space-between; padding: 8px 16px; gap: 10px; width: 100%;">
            <div data-pencil-name="Toolbar Left"
                style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start;">
                <svg viewBox="0 0 14 14" style="height: 15px; width: 15px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.625 7.4375q0.16406 0 0.30078-0.13672 0.13672-0.13672 0.13672-0.30078l0-4.8125 4.8125 0 0 2.625q0 0.16406 0.13672 0.30078 0.13672 0.13672 0.30078 0.13672l2.625 0 0 1.75q0 0.16406 0.13672 0.30078 0.13672 0.13672 0.30078 0.13672 0.16406 0 0.30078-0.13672 0.13672-0.13672 0.13672-0.30078l0-2.1875q0-0.16406-0.10938-0.32813l-3.0625-3.0625q-0.16406-0.10938-0.32812-0.10937l-5.25 0q-0.38281 0-0.62891 0.24609-0.24609 0.24609-0.24609 0.62891l0 4.8125q0 0.16406 0.13672 0.30078 0.13672 0.13672 0.30078 0.13672z m6.125-4.64844l1.58594 1.58594-1.58594 0 0-1.58594z m-5.25 5.96094l-0.875 0q-0.16406 0-0.30078 0.13672-0.13672 0.13672-0.13672 0.30078l0 2.625q0 0.16406 0.13672 0.30078 0.13672 0.13672 0.30078 0.13672 0.16406 0 0.30078-0.13672 0.13672-0.13672 0.13672-0.30078l0-0.4375 0.4375 0q0.54688 0 0.92969-0.38281 0.38281-0.38281 0.38281-0.92969 0-0.54688-0.38281-0.92969-0.38281-0.38281-0.92969-0.38281z" fill="#f87171"></path>
                </svg>
                <div data-pencil-name="File Name"
                    style='box-sizing: border-box; color: #f8fafc; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 600; white-space: nowrap;'>
                    Customer-Journey-Map-Template-v2.pdf
                </div>
            </div>
            
            <div data-pencil-name="Toolbar Center Pagination"
                style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; gap: 12px; height: fit-content; justify-content: flex-start;">
                <div data-pencil-name="Page Prev Btn"
                    style="align-items: center; background-color: #334155; border-radius: 4px; box-sizing: border-box; display: flex; height: 26px; justify-content: center; width: 26px; cursor:pointer;">
                    <svg viewBox="0 0 14 14" style="height: 14px; width: 14px;" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.75 11.8125q-0.16406 0-0.32813-0.10938l-4.375-4.375q-0.10938-0.16406-0.10937-0.32812 0-0.16406 0.10937-0.32813l4.375-4.375q0.16406-0.10938 0.32813-0.08203 0.16406 0.02734 0.27344 0.13672 0.10938 0.10938 0.13672 0.27344 0.02734 0.16406-0.08204 0.32812l-4.10156 4.04688 4.10156 4.04688q0.10938 0.16406 0.10938 0.32812 0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672z" fill="#cbd5e1"></path>
                    </svg>
                </div>
                <div data-pencil-name="Page Counter Text"
                    style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 700; white-space: nowrap;'>
                    Halaman 14 dari 14 (Selesai ✓)
                </div>
                <div data-pencil-name="Page Next Btn Disabled"
                    style="align-items: center; background-color: #1e293b; border-radius: 4px; box-sizing: border-box; display: flex; height: 26px; justify-content: center; width: 26px; cursor:not-allowed;">
                    <svg viewBox="0 0 14 14" style="height: 14px; width: 14px;" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.25 11.8125q-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.10938-0.32813l4.10156-4.04687-4.10156-4.04688q-0.10938-0.16406-0.08204-0.32812 0.02734-0.16406 0.13672-0.27344 0.10938-0.10938 0.27344-0.13672 0.16406-0.02734 0.32813 0.08203l4.375 4.375q0.10938 0.16406 0.10937 0.32813 0 0.16406-0.10937 0.32812l-4.375 4.375q-0.16406 0.10938-0.32813 0.10938z" fill="#64748b"></path>
                    </svg>
                </div>
            </div>
            
            <div data-pencil-name="Toolbar Right Tools"
                style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; gap: 12px; height: fit-content; justify-content: flex-start;">
                <div data-pencil-name="Zoom Group"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; gap: 6px; height: fit-content; justify-content: flex-start;">
                    <svg viewBox="0 0 14 14" style="height: 14px; width: 14px; cursor:pointer;" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.8125 7.4375l-9.625 0q-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672l9.625 0q0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078 0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672z" fill="#94a3b8"></path>
                    </svg>
                    <div data-pencil-name="Zoom Text"
                        style='box-sizing: border-box; color: #cbd5e1; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-weight: 600; white-space: nowrap;'>
                        100%
                    </div>
                    <svg viewBox="0 0 14 14" style="height: 14px; width: 14px; cursor:pointer;" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.25 7q0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672l-4.375 0 0 4.375q0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078l0-4.375-4.375 0q-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672l4.375 0 0-4.375q0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672 0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078l0 4.375 4.375 0q0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078z" fill="#94a3b8"></path>
                    </svg>
                </div>
                <div style="background-color: #334155; height: 16px; width: 1px;"></div>
                <svg viewBox="0 0 14 14" style="height: 14px; width: 14px; cursor:pointer;" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.8125 2.625l0 2.1875q0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078l0-1.14844-2.29688 2.35156q-0.16406 0.10938-0.32812 0.10938-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.10937-0.32813l2.35157-2.29687-1.14844 0q-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672l2.1875 0q0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078z" fill="#94a3b8"></path>
                </svg>
            </div>
        </div>

        <!-- PDF Doc Canvas -->
        <div data-pencil-name="PDF Doc Canvas"
            style="align-items: center; background-color: #334155; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; height: 596px; justify-content: center; padding: 16px 0px; width: 100%;">
            
            <!-- PDF Page Sheet Mockup (740px x 564px) -->
            <div data-pencil-name="PDF Page Sheet Mockup"
                style="align-items: flex-start; background-color: #ffffff; border-radius: 6px; box-shadow: 0px 4px 16px rgba(0,0,0,0.35); box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 12px; height: 564px; justify-content: flex-start; padding: 22px 28px; width: 740px;">
                
                <!-- Sheet Header Row -->
                <div data-pencil-name="Sheet Header Row"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; justify-content: space-between; width: 100%;">
                    <div data-pencil-name="Sheet Brand"
                        style='box-sizing: border-box; color: #2872fa; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 800; letter-spacing: 0px; white-space: nowrap;'>
                        DIGITAL LEARN PLATFORM • PRODUCT MANAGEMENT TOOLKIT
                    </div>
                    <div data-pencil-name="Sheet Badge"
                        style='box-sizing: border-box; color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 700; letter-spacing: 0px; white-space: nowrap;'>
                        TEMPLATE DOKUMEN RESMI #04
                    </div>
                </div>

                <!-- Sheet Title Group -->
                <div data-pencil-name="Sheet Title Group"
                    style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; gap: 2px;">
                    <div data-pencil-name="Sheet Title"
                        style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 16px; font-weight: 800; white-space: nowrap;'>
                        Customer Journey Map: Framework &amp; Matriks Eksekusi MVP
                    </div>
                    <div data-pencil-name="Sheet Sub"
                        style='box-sizing: border-box; color: #64748b; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 11px; font-weight: 500; line-height: 14px; width: 100%;'>
                        Panduan langkah demi langkah memetakan alur interaksi persona pengguna dari fase discovery hingga retensi produk digital.
                    </div>
                </div>

                <!-- Sheet Divider -->
                <div style="background-color: #e2e8f0; height: 1px; width: 100%;"></div>

                <!-- Framework Table Grid -->
                <div data-pencil-name="Framework Table Grid"
                    style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; gap: 6px; width: 100%;">
                    <!-- Header Row -->
                    <div data-pencil-name="Table Header Row"
                        style="align-items: center; background-color: #f1f5f9; border-radius: 4px; box-sizing: border-box; display: flex; flex-direction: row; height: 28px; justify-content: flex-start; padding: 0px 10px; width: 100%;">
                        <div style='color: #334155; flex-shrink: 0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 700; width: 120px;'>
                            TAHAPAN JOURNEY
                        </div>
                        <div style='color: #334155; flex-shrink: 0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 700; width: 170px;'>
                            TOUCHPOINTS &amp; CHANNEL
                        </div>
                        <div style='color: #334155; flex-shrink: 0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 700; width: 194px;'>
                            PAIN POINTS &amp; EMOSI
                        </div>
                        <div style='color: #334155; flex-shrink: 0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 700; width: 180px;'>
                            OPPORTUNITY &amp; FITUR MVP
                        </div>
                    </div>
                    <!-- Row 1 Awareness -->
                    <div data-pencil-name="Row 1 Awareness"
                        style="align-items: center; background-color: #f8fafc; border-radius: 4px; box-sizing: border-box; display: flex; flex-direction: row; padding: 8px 10px; width: 100%;">
                        <div style='color: #1e40af; flex-shrink: 0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 700; width: 120px;'>
                            1. Awareness
                        </div>
                        <div style='color: #475467; flex-shrink: 0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 500; line-height: 13px; width: 170px;'>
                            Instagram Ads, Google Search, Referensi Kolega
                        </div>
                        <div style='color: #475467; flex-shrink: 0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 500; line-height: 13px; width: 194px;'>
                            Bingung mencari tools yang mudah; ragu efektivitas
                        </div>
                        <div style='color: #15803d; flex-shrink: 0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 600; line-height: 13px; width: 180px;'>
                            Landing page ringkas dengan benefit utama &amp; studi kasus
                        </div>
                    </div>
                    <!-- Row 2 Consideration -->
                    <div data-pencil-name="Row 2 Consideration"
                        style="align-items: center; background-color: #f8fafc; border-radius: 4px; box-sizing: border-box; display: flex; flex-direction: row; padding: 8px 10px; width: 100%;">
                        <div style='color: #1e40af; flex-shrink: 0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 700; width: 120px;'>
                            2. Consideration
                        </div>
                        <div style='color: #475467; flex-shrink: 0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 500; line-height: 13px; width: 170px;'>
                            Halaman Fitur, Demo Interaktif, Review User
                        </div>
                        <div style='color: #475467; flex-shrink: 0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 500; line-height: 13px; width: 194px;'>
                            Takut sulit diintegrasikan; membandingkan pricing
                        </div>
                        <div style='color: #15803d; flex-shrink: 0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 600; line-height: 13px; width: 180px;'>
                            Tabel komparasi fitur jelas &amp; opsi free trial 14 hari
                        </div>
                    </div>
                    <!-- Row 3 Decision / Trial -->
                    <div data-pencil-name="Row 3 Decision"
                        style="align-items: center; background-color: #f8fafc; border-radius: 4px; box-sizing: border-box; display: flex; flex-direction: row; padding: 8px 10px; width: 100%;">
                        <div style='color: #1e40af; flex-shrink: 0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 700; width: 120px;'>
                            3. Decision / Trial
                        </div>
                        <div style='color: #475467; flex-shrink: 0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 500; line-height: 13px; width: 170px;'>
                            Form Registrasi, Onboarding Wizard MVP
                        </div>
                        <div style='color: #475467; flex-shrink: 0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 500; line-height: 13px; width: 194px;'>
                            Proses signup terlalu panjang; verifikasi rumit
                        </div>
                        <div style='color: #15803d; flex-shrink: 0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 600; line-height: 13px; width: 180px;'>
                            Single-click social signup &amp; panduan 3 langkah awal
                        </div>
                    </div>
                    <!-- Row 4 Retention -->
                    <div data-pencil-name="Row 4 Retention"
                        style="align-items: center; background-color: #f8fafc; border-radius: 4px; box-sizing: border-box; display: flex; flex-direction: row; padding: 8px 10px; width: 100%;">
                        <div style='color: #1e40af; flex-shrink: 0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 700; width: 120px;'>
                            4. Retention
                        </div>
                        <div style='color: #475467; flex-shrink: 0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 500; line-height: 13px; width: 170px;'>
                            Email Rekomendasi, In-app Checkpoint, Notifikasi
                        </div>
                        <div style='color: #475467; flex-shrink: 0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 500; line-height: 13px; width: 194px;'>
                            Lupa kembali menggunakan; motivasi menurun
                        </div>
                        <div style='color: #15803d; flex-shrink: 0; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 600; line-height: 13px; width: 180px;'>
                            Sertifikat bertahap &amp; gamifikasi reward penyelesaian
                        </div>
                    </div>
                </div>

                <!-- Sheet Footer Row -->
                <div data-pencil-name="Sheet Footer Row"
                    style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; justify-content: space-between; margin-top: auto; padding-top: 10px; width: 100%;">
                    <div style='color: #94a3b8; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 500;'>
                        Dokumen Resmi Pelatihan Vokasi • Politeknik STMI Jakarta
                    </div>
                    <div style='color: #15803d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 10px; font-weight: 700;'>
                        Halaman 14 dari 14 (Tuntas Selesai)
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Action Bar -->
    <div data-pencil-name="Action Bar"
        style="align-items: center; background-color: #ffffff; border-radius: 12px; box-sizing: border-box; display: flex; flex-direction: row; flex-wrap: wrap; flex-shrink: 0; gap: 12px; height: fit-content; justify-content: space-between; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 10px 16px; width: 100%;">
        <a href="<?php echo base_url('learn/' . $course_slug . '/quiz/1'); ?>" data-pencil-name="Prev Quiz 1 Btn"
            style="text-decoration:none; align-items: center; background-color: #f8fafc; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 8px 14px; width: fit-content;">
            <svg viewBox="0 0 14 14" style="height: 13px; width: 13px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.25 7q0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672l-8.58594 0 3.22657 3.17188q0.10938 0.16406 0.10937 0.32812 0 0.16406-0.13672 0.30078-0.13672 0.13672-0.30078 0.13672-0.16406 0-0.32812-0.10937l-3.9375-3.9375q-0.10938-0.16406-0.10938-0.32813 0-0.16406 0.10938-0.32812l3.9375-3.9375q0.16406-0.10938 0.32812-0.08204 0.16406 0.02734 0.27344 0.13672 0.10938 0.10938 0.13672 0.27344 0.02734 0.16406-0.08203 0.32813l-3.22657 3.17187 8.58594 0q0.16406 0 0.30078 0.13672 0.13672 0.13672 0.13672 0.30078z" fill="#475467"></path>
            </svg>
            <div data-pencil-name="Prev Text"
                style='box-sizing: border-box; color: #475467; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 600; white-space: nowrap;'>
                Kembali ke Pop-up Quiz 1
            </div>
        </a>

        <div data-pencil-name="Status Center"
            style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; width: fit-content;">
            <svg viewBox="0 0 14 14" style="height: 14px; width: 14px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.73438 5.35938q0.10938 0.16406 0.10937 0.35546 0 0.19141-0.10937 0.30079l-3.22657 3.0625q-0.10938 0.10938-0.30078 0.10937-0.19141 0-0.30078-0.10937l-1.58594-1.53125q-0.21875-0.16406-0.16406-0.4375 0.05469-0.27344 0.30078-0.32813 0.24609-0.05469 0.41016 0.10938l1.3125 1.25781 2.95312-2.78906q0.10938-0.10938 0.30078-0.10938 0.19141 0 0.30078 0.16406l0-0.05468z m2.95312 1.64062q0 1.53125-0.76563 2.84375-0.76563 1.3125-2.07812 2.07813-1.3125 0.76563-2.84375 0.76562-1.53125 0-2.84375-0.76562-1.3125-0.76563-2.07813-2.07813-0.76563-1.3125-0.76562-2.84375 0-1.53125 0.76562-2.84375 0.76563-1.3125 2.07813-2.07813 1.3125-0.76563 2.84375-0.76562 1.53125 0 2.84375 0.76562 1.3125 0.76563 2.07813 2.07813 0.76563 1.3125 0.76562 2.84375z" fill="#10b981"></path>
            </svg>
            <div data-pencil-name="Status Text"
                style='box-sizing: border-box; color: #192a3d; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 600; white-space: nowrap;'>
                Dokumen selesai dibaca hingga halaman 14 (Syarat BRD Terpenuhi ✓)
            </div>
        </div>

        <a href="<?php echo base_url('learn/' . $course_slug . '/article/1'); ?>" data-pencil-name="Next Modul Btn"
            style="text-decoration:none; align-items: center; background-color: #2872fa; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; padding: 8px 18px; width: fit-content;">
            <div data-pencil-name="Next Text"
                style='box-sizing: border-box; color: #ffffff; font-family: "Plus Jakarta Sans", system-ui, sans-serif; font-size: 12px; font-weight: 700; white-space: nowrap;'>
                Lanjut: Praktik Wireframe
            </div>
            <svg viewBox="0 0 14 14" style="height: 13px; width: 13px; flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.14063 7.32813l-3.9375 3.9375q-0.16406 0.10938-0.32813 0.10937-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.10938-0.32812l3.22656-3.17188-8.58594 0q-0.16406 0-0.30078-0.13672-0.13672-0.13672-0.13672-0.30078 0-0.16406 0.13672-0.30078 0.13672-0.13672 0.30078-0.13672l8.58594 0-3.22657-3.17188q-0.10938-0.16406-0.08203-0.32812 0.02734-0.16406 0.13672-0.27344 0.10938-0.10938 0.27344-0.13672 0.16406-0.02734 0.32812 0.08203l3.9375 3.9375q0.10938 0.16406 0.10938 0.32813 0 0.16406-0.10938 0.32812z" fill="#ffffff"></path>
            </svg>
        </a>
    </div>

    </div>
</div>
