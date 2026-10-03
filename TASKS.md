# TASKS.md — Digital Learn Platform (LMS MVP) · CodeIgniter 3

> **Dokumen ini adalah instruksi kerja utama untuk AI agent (Antigravity + Context7 MCP).**
> Baca **seluruh Bagian 0–6 sebelum menulis satu baris kode pun**. Setelah itu kerjakan task di Bagian 7 secara berurutan.
>
> disinkronkan dengan `design.pen` & `DESIGN.md` . Jika sebuah task bertanda 🔁 sudah pernah dikerjakan pada versi sebelumnya, terapkan *delta*-nya saja; task bertanda 🆕 adalah task baru.

---

## 0. Cara Memakai Dokumen Ini

**Urutan baca wajib untuk agent:**

1. Bagian 1–2: konteks, stack, dan hierarki sumber kebenaran.
2. Bagian 3: protokol kerja (termasuk **protokol Context7**) dan jebakan CI3.
3. Bagian 4–6: arsitektur, skema database, aturan bisnis kanonik (`BR-xx`).
4. Bagian 7: task (`T-xxx`). Kerjakan sesuai dependensi, satu task per iterasi.
5. Bagian 8–9: matriks keterlacakan ke Acceptance Criteria BRD dan register keputusan terbuka.

**Legenda prioritas:** `P0` wajib untuk MVP · `P1` sebaiknya ada · `P2` opsional, kerjakan hanya jika semua P0/P1 selesai.
**Legenda referensi:** `BRD §x` = section di BRD · `AC-n` = Acceptance Criteria nomor n BRD · `DSG:<nodeID>` = node ID di `design.pen` / `DESIGN.md` · `BR-xx` = aturan bisnis di Bagian 6 · `C7:` = topik yang **wajib** dicari di Context7 sebelum coding.

**Progress tracking:** tandai `- [x]` pada checkbox task yang selesai dan lulus verifikasi. Catat keputusan di `docs/DECISIONS.md` dan hasil lookup di `docs/CONTEXT7_NOTES.md`.
**Penanda revisi:** 🔁 = task berubah dibanding versi sebelumnya · 🆕 = task baru · ~~coret~~ = dibatalkan.

### 0.1 Changelog Revisi 2 (apa yang berubah dan kenapa)

| Area           | Perubahan                                                                                                                                                                                                                         |
| -------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Desain         | Bertambah**7 screen**: Materi Video `am1Jw`, Quiz Checkpoint `qZ1cP`, Materi PDF `Z8TwQg`, Materi Artikel `k5KcIm`, Ujian Akhir `o4asa`, Sertifikat & Verifikasi Publik `D3PHbK`, Koleksi Sertifikat `Rmfvj`. |
| Layout belajar | Halaman belajar/ujian**tanpa sidebar global**: top bar 60px + drawer kiri 396px (playlist / nomor soal) + workspace 976px.                                                                                                  |
| Sidebar user   | Final**4 menu** (Dashboard, Course Saya, Katalog Course, Sertifikat Digital). Menu "Ujian & Evaluasi", "Progres", "Tersimpan", "Bantuan" **tidak ada** di desain → dibuang.                                          |
| Detail Course  | Jadi**single-column** (tanpa kartu aksi/instruktur/rating di kanan).                                                                                                                                                        |
| Pop-up quiz    | Tampil sebagai**halaman workspace fokus** (bukan modal kecil) dengan stepper soal, feedback per soal, dan penjelasan. Quiz juga muncul sebagai **item di playlist**.                                                  |
| Ujian          | Grid nomor soal 5 kolom dengan 4 status warna, tandai ragu-ragu, timer, tombol kumpulkan, tanpa feedback jawaban.                                                                                                                 |
| Sertifikat     | Satu halaman**gabungan** pemilik + verifikasi publik (`/verify/{ID}`); koleksi sertifikat berupa kartu minimalis.                                                                                                         |
| Skema & BR     | Kolom baru (explanation, reference_seconds, allow_download, pdf_page_count, read_minutes, viewed_pages, is_flagged, snapshot sertifikat). BR-05/06/09/11/13/15 direvisi, BR-20 baru.                                              |
| Task           | 🔁 T-005, T-014, T-023, T-033, T-034, T-041, T-051–T-056, T-060–T-063, T-072–T-074, T-090–T-092 · 🆕 T-015, T-A06 ·~~T-064~~ dibatalkan.                                                                                   |

---

## 1. Ringkasan Proyek

**Produk:** Digital Learn Platform — LMS untuk belajar terstruktur: course → modul → materi → ujian akhir → sertifikat digital yang bisa diverifikasi publik.

**Alur end-to-end (BRD §3):**
`Registration → Login → Katalog → Detail Course → Enroll → Belajar modul (bertahap) → Ujian Akhir → Sertifikat → Verifikasi publik`

**Dua role saja:** `user` (peserta) dan `admin`.

### 1.1 Stack (tidak boleh diubah)

| Komponen           | Versi                                                     | Catatan                               |
| ------------------ | --------------------------------------------------------- | ------------------------------------- |
| PHP                | **7.3.33**                                          | Lihat larangan sintaks di §3.3       |
| Framework          | **CodeIgniter 3.1.13**                              | BUKAN CodeIgniter 4                   |
| Database           | **MariaDB 10.4.34**                                 | InnoDB,`utf8mb4_unicode_ci`         |
| Dependency manager | Composer                                                  | Wajib`config.platform.php = 7.3.33` |
| Frontend           | Server-rendered PHP view + CSS murni (token) + vanilla JS | Tanpa SPA framework                   |
| UI source          | `design.pen` (pen.dev) + `DESIGN.md`                  | Lihat §2                             |

### 1.2 Scope

**Dalam scope (BRD §2.1):** registrasi/login/logout/forgot/reset/profil · katalog & detail course · enroll · modul bertahap · materi video/PDF/text · pop-up quiz · progress · ujian akhir · sertifikat + QR + verifikasi publik · admin: dashboard, user, course, modul, materi, pop-up quiz, ujian, monitoring peserta, manajemen sertifikat (view/download/revoke).

**Di luar scope — JANGAN dibangun (BRD §2.2):** payment/course berbayar/marketplace/subscription/kupon, rating/review, live class, **forum diskusi**, gamification, mobile native, SSO, integrasi akademik, corporate account, AI, proctoring, advanced analytics.

---

## 2. Sumber Kebenaran & Resolusi Konflik

### 2.1 Hierarki (jika ada konflik, yang lebih atas menang)

1. **BRD** (PDF) — perilaku & aturan bisnis.
2. **`design.pen`** — tampilan 7 screen yang sudah didesain.
3. **`DESIGN.md` §25–§42** — spesifikasi tertulis 14 screen Digital Learn. **Jika ASCII wireframe di DESIGN.md berbeda dari `design.pen` (mis. daftar menu sidebar), `design.pen` yang menang.**
4. **`DESIGN.md` §4, §6–§9, §11, §13, §17–§23** — token, spacing, komponen, a11y yang masih generik dan berlaku.
5. **`DESIGN.md` §1–§3, §10, §12, §14–§16, §24** — **ABAIKAN isinya**. Bagian ini berasal dari proyek lain (LMS kampus Politeknik STMI: mahasiswa, dosen, SKS, presensi, tugas, SSO, forum). Jangan diimplementasikan.

### 2.2 Screen yang SUDAH ada di `design.pen` (14 frame)

| #  | Screen                          | Node ID    | Route target                | Ref DESIGN.md |
| -- | ------------------------------- | ---------- | --------------------------- | ------------- |
| 1  | Landing Page                    | `mWKjb`  | `/`                       | §27, §28    |
| 2  | Sign In                         | `tsv7W`  | `/login`                  | §30          |
| 3  | Sign Up                         | `ouCKj`  | `/register`               | §31          |
| 4  | User Dashboard                  | `GNm6d`  | `/dashboard`              | §32          |
| 5  | Course Saya                     | `j8saW4` | `/my-courses`             | §33          |
| 6  | Katalog Course                  | `x1TeKK` | `/courses`                | §34          |
| 7  | Detail Course (varian enrolled) | `w8nyqP` | `/courses/{slug}`         | §35          |
| 8  | Materi Video                    | `am1Jw`  | `/learn/{slug}/m/{id}`    | §36          |
| 9  | Quiz Checkpoint (pop-up quiz)   | `qZ1cP`  | `/learn/{slug}/quiz/{id}` | §37          |
| 10 | Materi PDF                      | `Z8TwQg` | `/learn/{slug}/m/{id}`    | §38          |
| 11 | Materi Artikel/Teks             | `k5KcIm` | `/learn/{slug}/m/{id}`    | §39          |
| 12 | Ujian Akhir (pengerjaan)        | `o4asa`  | `/exam/attempt/{id}`      | §40          |
| 13 | Sertifikat & Verifikasi Publik  | `D3PHbK` | `/verify/{ID}`            | §41          |
| 14 | Koleksi Sertifikat              | `Rmfvj`  | `/certificates`           | §42          |

### 2.3 Screen / state yang BELUM didesain (buat mengikuti token & pola komponen yang sama)

Forgot & Reset password · Profil · Detail Course **varian belum enroll** · Halaman pra-ujian (aturan & tombol mulai) · **Hasil ujian** · Halaman verifikasi: form input ID dan state **"Certificate not found / invalid certificate"** · Quiz: state jawaban salah (merah) dan mode `limited` (sisa attempt, peringatan ulang materi) · **Template PDF sertifikat** (turunkan dari kanvas `uUy7X`) · Empty state (Course Saya, Sertifikat) · **Seluruh panel Admin** · Halaman error 403/404.

Aturan membuat screen baru: pakai token §2.5 dan pola komponen yang ada (kartu radius 14/12px, tombol 8px, badge pill, progress bar, top bar, drawer). Dilarang menambah font/warna baru. Jika MCP pen.dev tersedia boleh menambah frame ke `design.pen` (`T-A00`); jika tidak, langsung implementasi HTML/CSS.

### 2.4 Konflik / ketidakselarasan yang sudah diputuskan

| #   | Konflik                                                                                                                                                    | Keputusan (final)                                                                                                                                                                                                                                                                     |
| --- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| C1  | DESIGN.md §5 menyebut**Rubik**; `design.pen` memakai **Plus Jakarta Sans** (719 node) + variabel `font-main`                              | Pakai**Plus Jakarta Sans**. Rubik tidak dipakai.                                                                                                                                                                                                                                |
| C2  | DESIGN.md §1–§24 bernuansa kampus (mahasiswa, tugas, presensi, SSO, forum)                                                                              | Diabaikan (§2.1 poin 5).                                                                                                                                                                                                                                                             |
| C3  | Forum Diskusi & rating instruktur ada di versi desain lama;**di `design.pen` terbaru sudah tidak ada**                                             | Jangan render forum/rating (di luar scope BRD).                                                                                                                                                                                                                                       |
| C4  | ASCII DESIGN.md masih menulis menu "Progres/Tersimpan/Bantuan/Pengaturan Akun";**`design.pen` hanya punya 4 menu** + kartu user (nama + "Peserta") | Sidebar = Dashboard · Course Saya (badge jumlah course) · Katalog Course · Sertifikat Digital. Karena BRD butuh profil,**kartu user di bawah sidebar** membuka menu kecil: Profil · Sign Out. Tidak ada menu "Ujian & Evaluasi".                                            |
| C5  | Sign In: placeholder "email atau username"                                                                                                                 | Login hanya email → placeholder`nama@email.com`.                                                                                                                                                                                                                                   |
| C6  | Desain menyebut "Kredensial LinkedIn" dan tombol**Bagikan ke LinkedIn** (`HDYgO`)                                                                  | Di luar BRD. Teks diganti "Format: PDF Resmi • ID unik • QR Verifikasi Publik"; tombol LinkedIn disembunyikan (opsional`T-A06`).                                                                                                                                                  |
| C7  | Status course BRD: In Progress/Completed; desain: Tersedia / Sedang Berjalan / Selesai & Lulus                                                             | Enum DB mengikuti BRD; label UI dipetakan di`label_helper.php`.                                                                                                                                                                                                                     |
| C8  | Progress: BRD per modul (3/5 = 60%); desain juga menulis "8/14 materi" dan "3 dari 6 item"                                                                 | Persentase utama = modul selesai ÷ total modul (BR-07). "Item" sekunder (BR-20).                                                                                                                                                                                                     |
| C9  | Katalog 6 course (DP-101, DA-201, UI-301, WD-102, DM-204, BE-305); DESIGN.md §25 hanya 5                                                                  | Seed**6 course** sesuai `design.pen`.                                                                                                                                                                                                                                         |
| C10 | "Ingat saya 30 hari" di Sign In                                                                                                                            | `P2` (`T-A02`); jika tidak dikerjakan, sembunyikan checkbox.                                                                                                                                                                                                                      |
| C11 | Lonceng notifikasi di topbar                                                                                                                               | Render statis tanpa badge angka palsu; tidak ada sistem notifikasi.                                                                                                                                                                                                                   |
| C12 | Angka marketing (50+ course, 3.500+ peserta, 500+ modul, 100%)                                                                                             | Ambil dari agregat DB; jangan hardcode.                                                                                                                                                                                                                                               |
| C13 | BRD: "pop-up" yang tak bisa ditutup; desain: halaman workspace fokus (`qZ1cP`) + item di playlist                                                        | **Kedua-duanya benar:** saat titik checkpoint tercapai, pemutar berhenti dan peserta **otomatis dibawa ke halaman quiz** (tidak bisa melanjutkan materi sebelum quiz benar). Tombol "Kembali ke materi" boleh, tetapi server menolak progres melewati checkpoint (BR-09). |
| C14 | Playlist/detail course menghitung quiz sebagai**item** ("3 dari 6 Selesai")                                                                          | Ikuti BR-20: item = materi + checkpoint quiz.                                                                                                                                                                                                                                         |
| C15 | Halaman sertifikat desain menampilkan skor, attempt, dan tombol unduh bersamaan dengan data verifikasi publik                                              | Satu route`/verify/{ID}`, dua tingkat data: **publik** hanya field BRD; **pemilik/admin yang login** melihat tambahan skor, attempt, unduh PDF, salin link (BR-15).                                                                                                     |
| C16 | Tanda tangan, cap hologram "VERIFIED", predikat "Sangat Memuaskan"                                                                                         | Cap = elemen visual statis; tanda tangan = teks nama instruktur (snapshot);**predikat nilai dihapus** (tidak ada di BRD).                                                                                                                                                       |
| C17 | Data mock tidak konsisten (14 vs 15 materi; Modul 4 punya 3 judul berbeda; nama Muhammad Raihan vs Budi Santoso; durasi ujian 45 vs 30 menit)              | Semua angka/teks dari DB. Seeder memakai nilai kanonik (T-014).                                                                                                                                                                                                                       |
| C18 | Teks "Politeknik STMI Jakarta", alamat Kemenperin, host`learn.stmi.ac.id` ada di desain                                                                  | Simpan di`settings` (`issuer_name` = "Digital Learn Platform & Politeknik STMI Jakarta", `org_address`, `org_contact`); host URL verifikasi dari `base_url`.                                                                                                                |
| C19 | Navbar publik di halaman sertifikat (ASCII menulis "Bantuan")                                                                                              | Ikuti`design.pen`: Katalog Course · Verifikasi Publik · (user chip bila login). Tidak ada "Bantuan".                                                                                                                                                                              |

### 2.5 Design tokens

```css
:root{
  /* inti (variabel design.pen) */
  --color-primary:#2872fa; --color-primary-hover:#1559ed; --color-primary-dark:#175d9b;
  --color-primary-soft:#e8f1fa; --color-accent-subtle:#1e73be;
  --color-bg-app:#f4f6f9; --color-bg-page:#FAFBFC; --color-surface:#ffffff; --color-surface-subtle:#f2f5f7;
  --color-border:#dfe3ea; --color-border-subtle:#e1e8ed;
  --color-text-main:#192a3d; --color-text-body:#1d2530; --color-text-muted:#667085;
  --color-sidebar:#16212e;
  --color-success:#1e7e45; --color-success-soft:#e7f6ec;
  --color-warning:#8a6100; --color-warning-soft:#fff6e0;
  --color-danger:#c0392b;  --color-danger-soft:#fdecea;
  --font-main:'Plus Jakarta Sans',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;

  /* tambahan yang dipakai halaman belajar/ujian/sertifikat (dari DESIGN.md §36–§42) */
  --bg-page-user:#f8fafc;
  --emerald:#059669;  --emerald-50:#f0fdf4; --emerald-100:#dcfce7; --emerald-border:#86efac; --emerald-border-soft:#bbf7d0; --emerald-text:#16a34a; --progress-done:#10b981;
  --blue-50:#eff6ff; --blue-border:#bfdbfe; --blue-text:#1d4ed8; --soft-blue-banner:#f0f6fe; --soft-blue-border:#d0e1fd;
  --flag-bg:#fefce8; --flag-border:#fde047; --flag-text:#ca8a04;
  --timer-bg:#fef2f2; --timer-border:#fecaca; --timer-text:#dc2626;
  --info-bg:#f0f9ff; --info-border:#bae6fd; --info-text:#0369a1;
  --slate-900:#0f172a; --slate-800:#1e293b; --slate-700:#334155; --slate-200:#e2e8f0; --slate-100:#f1f5f9;
}
```

**Dimensi baku (dari desain):**

- *Halaman app (dashboard, course saya, katalog, detail, koleksi sertifikat):* sidebar putih **260px** (border kanan `#dfe3ea`), top bar **70px**, canvas padding `22–24px 32px`, lebar konten efektif **1116px**.
- *Halaman belajar & ujian (`am1Jw`, `qZ1cP`, `Z8TwQg`, `k5KcIm`, `o4asa`):* **tanpa sidebar global**; top bar **60px** (← Kembali ke Detail Course · badge DL · judul course (kode) · pill modul/materi · avatar); area utama padding `16 24`, gap `20`; **drawer kiri 396px** (kartu radius 12) + **workspace 976px**.
- *Sertifikat & verifikasi (`D3PHbK`):* navbar publik 74px; kolom 1280px; kanvas sertifikat 780×640 (bezel 732×592) + sidebar verifikasi 476px.
- Radius: kartu 14px, panel 12px, item 10px, input 10px, tombol 8px, badge 999px. Ikon: **Phosphor** (garis).

## 3. Protokol Kerja Agent

### 3.1 Loop eksekusi per task (wajib)

1. Baca task + semua dependensinya (`Depends`). Pastikan dependensi sudah `[x]`.
2. **Context7:** lakukan semua lookup pada baris `C7:` task tersebut (§3.2). Catat ringkas di `docs/CONTEXT7_NOTES.md`.
3. Periksa kode yang sudah ada (jangan menimpa tanpa membaca; jangan duplikasi helper).
4. Implementasi sesuai *Spec* dan *Deliverables*. Controller tipis, logika di library/service, query di model.
5. Verifikasi: jalankan perintah/pengecekan pada *Verify*. Task belum selesai sebelum semua *Verify* lulus.
6. Centang checkbox, tambahkan catatan singkat bila ada deviasi ke `docs/DECISIONS.md`.
7. Commit: satu task = satu commit, format `feat(T-0xx): ringkasan` / `fix(...)` / `chore(...)`.

### 3.2 Protokol Context7 (CodeIgniter 3 — SANGAT PENTING)

Context7 sering mengembalikan dokumentasi **CodeIgniter 4** untuk query "codeigniter". Itu salah untuk proyek ini.

1. Panggil `resolve-library-id` dengan query seperti `CodeIgniter 3` / `codeigniter 3.1`. Pilih library/versi yang **jelas CI3 (3.1.x)**. **Tolak** hasil CI4 (`codeigniter4`, `CodeIgniter\` namespace, `app/Controllers`, `$this->request`, `view()`, `Entity`, `$allowedFields`, `.env`, `spark`).
2. Ambil dokumentasi dengan tool fetch-docs milik server Context7 (nama bisa `get-library-docs` atau `query-docs` tergantung versi) menggunakan ID yang valid, dengan `topic` spesifik (mis. `form validation`, `session library`, `query builder transactions`).
3. Validasi cepat setiap potongan dokumentasi: kode CI3 memakai `class X extends CI_Controller`, `$this->load->...`, `$this->input->post()`, tanpa namespace. Jika tidak cocok, buang dan cari ulang.
4. Untuk library pihak ketiga (dompdf, pustaka QR, PHPMailer, PHPUnit), cari juga di Context7 **dan** pastikan kompatibel PHP 7.3 (lihat §3.3). Jika Context7 tidak punya, gunakan dokumentasi resmi paket via Composer, jangan menebak API dari ingatan.
5. Jika dokumentasi dan ingatan bertentangan, **dokumentasi menang**. Jika Context7 tidak tersedia, hentikan task dan laporkan; jangan lanjut dengan asumsi sintaks CI4.
6. Jangan menyalin dokumen panjang ke repo. Catat: topik, library ID, 2–3 poin kunci yang dipakai.

### 3.3 Batasan PHP 7.3.33 & MariaDB 10.4.34

**PHP 7.3 — DILARANG (fatal error):** typed properties (`private int $x`), arrow function `fn() =>`, null-coalescing assignment `??=`, `match`, named arguments, constructor property promotion, union types, `str_contains/str_starts_with/str_ends_with`, nullsafe `?->`, `enum`, attributes `#[...]`, spread array dengan string key. **Boleh:** `??`, `<=>`, scalar type hints parameter/return, nullable `?string`, `random_bytes`, `password_hash`, `array_key_first/last`, trailing comma di pemanggilan fungsi.
Gunakan `strpos(...) !== false` sebagai pengganti `str_contains`.

**Composer:** `composer.json` wajib berisi

```json
"config": { "platform": { "php": "7.3.33" }, "sort-packages": true }
```

agar resolver tidak memasang versi paket yang membutuhkan PHP ≥7.4.

**MariaDB 10.4:** tidak ada tipe `JSON` native (alias `LONGTEXT`) → simpan JSON sebagai `TEXT` dan validasi di PHP; hindari fitur MySQL 8-only (mis. `->>`, `CHECK` kolom dengan fungsi JSON, `ADD COLUMN IF ... INSTANT`). Window function & CTE tersedia. Semua tabel `ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci`. Kolom indexed `VARCHAR(190)` untuk email/slug.

### 3.4 Jebakan CodeIgniter 3 (baca sebelum coding)

- Nama file controller/model/library **Kapital di awal** (`Catalog.php` → `class Catalog`). Konstruktor wajib `parent::__construct();`.
- **Tidak ada namespace, `use`, atau autoload PSR-4** untuk kode aplikasi. Hanya `vendor/` (Composer) yang di-autoload: set `$config['composer_autoload'] = FCPATH.'vendor/autoload.php';`.
- Subfolder controller didukung (`controllers/admin/Courses.php` → `/admin/courses`). Hindari **nama kelas yang sama** antara controller user dan admin; aturan penamaan ada di §4.2.
- CSRF: `csrf_protection = TRUE`; `form_open()` otomatis menyisipkan token. Untuk AJAX kirim token via body POST (`csrf_test_name`). Default proyek: `csrf_regenerate = FALSE` supaya multi-request AJAX tidak gagal; **catat** trade-off di DECISIONS.
- **Jangan** memakai `global_xss_filtering` (deprecated). Escape saat output dengan `html_escape()` / helper `e()` buatan sendiri.
- Query Builder selalu parameterized; untuk SQL mentah gunakan binding `?`. Transaksi: `$this->db->trans_start()` … `trans_complete()` dan cek `trans_status()`. `SELECT ... FOR UPDATE` via `$this->db->query()`.
- Session driver `database` membutuhkan tabel dengan skema spesifik (`id, ip_address, timestamp, data`). Set `sess_match_ip = FALSE`, panggil `$this->session->sess_regenerate(TRUE)` setelah login.
- `dbforge` lemah untuk foreign key → migration memakai **SQL mentah** via `$this->db->query()`.
- Migration CI3: `migration_enabled`, `migration_type='timestamp'`, file `YYYYMMDDHHIISS_nama.php`, kelas `Migration_Nama extends CI_Migration`, method `up()` & `down()`. Jalankan hanya via CLI.
- Respons JSON: `$this->output->set_content_type('application/json')->set_output(json_encode($payload));` — jangan `echo` lalu `exit` sembarangan.
- Upload: library `upload` (`encrypt_name=TRUE`, `allowed_types`, `max_size` dalam KB). Samakan dengan `upload_max_filesize` & `post_max_size` di `php.ini`.
- Validasi form: `form_validation->set_rules()`; custom rule lewat `callback_*` atau `MY_Form_validation`. Untuk data non-POST gunakan `set_data()`.
- Pagination library: set `reuse_query_string = TRUE` agar filter tetap terbawa.
- `index.php` jangan tampak di URL: `index_page = ''` + `.htaccess` rewrite.
- `ENVIRONMENT` ditentukan lewat env var `CI_ENV` (`development` / `production`); production: `display_errors=0`, log threshold 1–2.
- **Daftar kebiasaan CI4 yang DILARANG:** `namespace App\...`, `extends BaseController`, `$this->request->getPost()`, `return view()`, `model()` helper, `$allowedFields`, `Entity`, `Filters`, `spark`, `.env` bawaan CI4, `service()`.

### 3.5 Standar kode

- PSR-12 sebisa mungkin; indent 4 spasi; satu kelas per file; komentar bahasa Indonesia atau Inggris konsisten (pilih Inggris untuk kode, Indonesia untuk teks UI).
- **Semua teks UI Bahasa Indonesia**; kode, nama tabel/kolom/method bahasa Inggris.
- Controller maksimal ±150 baris: validasi input → panggil service → render/JSON. Tidak ada query di controller/view.
- Jangan pernah mengirim `is_correct`, kunci jawaban, atau path file privat ke browser.
- Semua aksi mutasi memakai method POST + CSRF. Tidak ada mutasi lewat GET.
- Hindari N+1 query (gunakan JOIN / `WHERE IN`). Index sesuai §5.
- Secrets (`encryption_key`, kredensial DB/SMTP) di `application/config/local.php` (git-ignored) atau env var; **commit** hanya `local.php.example`.

### 3.6 Definition of Done (berlaku untuk semua task)

- [ ] Fitur berjalan end-to-end di browser (bukan hanya unit).
- [ ] Input divalidasi server-side; error ditampilkan jelas (Bahasa Indonesia).
- [ ] Otorisasi diperiksa di server (role + kepemilikan resource + status lock).
- [ ] Output ter-escape; CSRF aktif pada form/AJAX.
- [ ] UI sesuai token §2.5 dan responsif (≥1000 / 768–999 / <768 px).
- [ ] Tidak ada PHP notice/warning di log; kode kompatibel PHP 7.3.
- [ ] Checklist *Verify* task lulus; migration up & down tidak error.
- [ ] Catatan Context7 & DECISIONS diperbarui bila relevan.

### 3.7 Kapan agent HARUS berhenti dan bertanya ke manusia

- Task bertentangan dengan BRD, atau butuh fitur di luar scope.
- Context7 tidak tersedia / hanya mengembalikan CI4 setelah 3 kali percobaan.
- Paket Composer tidak ada yang kompatibel PHP 7.3.
- Perubahan skema yang merusak data/migration yang sudah dijalankan.
  Untuk ambiguitas BRD lain: **gunakan default pada §9, catat di DECISIONS, lanjutkan** (jangan memblokir).

---

## 4. Arsitektur Aplikasi

### 4.1 Struktur folder

```
/                          (project root, DocumentRoot menunjuk ke /public)
├── application/
│   ├── config/            (config.php, database.php, routes.php, autoload.php, migration.php, local.php[.example], lms.php)
│   ├── controllers/
│   │   ├── Home.php Auth.php Dashboard.php Catalog.php My_courses.php Learn.php Media.php
│   │   ├── Exams.php Certificates.php Verify.php Profile.php Errors.php
│   │   ├── api/ (Progress.php Popup_quiz.php Exam_api.php)
│   │   ├── admin/ (Auth.php Dashboard.php Users.php Courses.php Modules.php Materials.php
│   │   │          Popup_quizzes.php Exams.php Participants.php Certificates.php)
│   │   └── cli/ (Migrate.php Seed.php)
│   ├── core/              (MY_Controller.php  MY_Form_validation via libraries/)
│   ├── helpers/           (label_helper.php icon_helper.php format_helper.php ui_helper.php)
│   ├── hooks/ (opsional)
│   ├── libraries/         (Layout.php Auth_lib.php Mailer.php Upload_service.php
│   │                       Progress_service.php Popup_quiz_service.php Exam_service.php
│   │                       Certificate_service.php Dashboard_service.php
│   │                       Score_calculator.php Progress_calculator.php Certificate_number.php   <- pure PHP, tanpa CI)
│   ├── migrations/
│   ├── models/            (User_model Course_model Module_model Material_model Popup_quiz_model Exam_model
│   │                       Enrollment_model Progress_model Exam_attempt_model Certificate_model Category_model Setting_model)
│   ├── views/
│   │   ├── layouts/ (public.php auth.php app.php classroom.php admin.php)
│   │   ├── partials/ (sidebar_user, topbar, alert, pagination, badge, progress_bar, modal_confirm, empty_state)
│   │   ├── auth/ catalog/ learn/ exams/ certificates/ verify/ profile/ dashboard/ errors/ emails/ pdf/
│   │   └── admin/ ...
│   └── storage/           (PRIVAT — di luar webroot: materials/video, materials/pdf, certificates, tmp)
├── public/                (index.php, .htaccess, assets/css, assets/js, assets/img, uploads/public [avatar, thumbnail])
├── system/                (CI 3.1.13 — jangan diedit)
├── tests/                 (PHPUnit untuk class pure-PHP)
├── docs/                  (CONTEXT7_NOTES.md DECISIONS.md API.md UAT.md)
├── vendor/  composer.json  .gitignore  README.md  TASKS.md
```

**Catatan:** pindahkan `index.php` ke `public/` dan sesuaikan `$system_path` & `$application_folder`. Materi pembelajaran **tidak boleh** berada di folder publik (lihat BR-05, T-051).

### 4.2 Penamaan agar tidak bentrok

Controller user dan admin tidak boleh berbagi nama kelas. Pakai: user `Catalog`, `My_courses`, `Learn`, `Exams`, `Certificates`; admin di subfolder dengan nama berbeda secara semantik (`Courses`, `Modules`, `Materials`, `Exams` admin → **beri awalan `Admin_` pada nama kelas**: `Admin_courses`, `Admin_exams`, dst., file tetap `controllers/admin/Courses.php` bila CI mengizinkan; jika terjadi bentrok, pakai file `Admin_courses.php` di subfolder `admin/`). Agent harus memverifikasi dengan test request sebelum lanjut dan mencatat pola yang dipakai di DECISIONS.

### 4.3 Base controller

- `MY_Controller` (extends `CI_Controller`): load session, database, helper umum, deteksi user login, `json()` helper, `abort($code)`.
- `Public_Controller`: halaman tanpa login (landing, verify).
- `Guest_Controller`: hanya untuk belum login (login/register) — redirect jika sudah login.
- `User_Controller`: wajib login & `role=user` & `status=active`; layout `app`.
- `Admin_Controller`: wajib login & `role=admin`; layout `admin`. Admin yang membuka URL user → boleh; user membuka `/admin/*` → 403.
- File: `application/core/MY_Controller.php` berisi semua kelas di atas (CI3 memuat core class `MY_` otomatis; kelas tambahan di file yang sama dimuat via `require_once` di `MY_Controller.php`).

### 4.4 Peta route (`routes.php`) 🔁

| URL                                                                           | Method   | Controller::method                                | Akses                                                     |
| ----------------------------------------------------------------------------- | -------- | ------------------------------------------------- | --------------------------------------------------------- |
| `/`                                                                         | GET      | Home::index                                       | publik                                                    |
| `/login` `/register`                                                      | GET/POST | Auth::login / register                            | guest                                                     |
| `/logout`                                                                   | POST     | Auth::logout                                      | login                                                     |
| `/forgot-password` `/reset-password/(:any)`                               | GET/POST | Auth::forgot / reset                              | guest                                                     |
| `/dashboard`                                                                | GET      | Dashboard::index                                  | user                                                      |
| `/courses`                                                                  | GET      | Catalog::index                                    | user                                                      |
| `/courses/(:any)`                                                           | GET      | Catalog::detail/$1                                | user                                                      |
| `/courses/(:any)/enroll`                                                    | POST     | Catalog::enroll/$1                                | user                                                      |
| `/my-courses`                                                               | GET      | My_courses::index                                 | user                                                      |
| `/learn/(:any)`                                                             | GET      | Learn::course/$1 (redirect ke item aktif)         | user                                                      |
| `/learn/(:any)/m/(:num)`                                                    | GET      | Learn::material/$1/$2                             | user                                                      |
| `/learn/(:any)/quiz/(:num)`                                                 | GET      | Learn::quiz/$1/$2                                 | user                                                      |
| `/media/(:num)`                                                             | GET      | Media::stream/$1 (inline, Range)                  | user (authz + lock)                                       |
| `/media/(:num)/download`                                                    | GET      | Media::download/$1 (hanya bila`allow_download`) | user                                                      |
| `/api/progress/heartbeat` `/api/progress/complete` `/api/progress/page` | POST     | api/Progress                                      | user                                                      |
| `/api/popup/answer`                                                         | POST     | api/Popup_quiz::answer                            | user                                                      |
| `/exam/(:any)`                                                              | GET      | Exams::intro/$1 (pra-ujian)                       | user                                                      |
| `/exam/(:any)/start`                                                        | POST     | Exams::start/$1                                   | user                                                      |
| `/exam/attempt/(:num)`                                                      | GET      | Exams::attempt/$1 (workspace)                     | user                                                      |
| `/api/exam/answer` `/api/exam/flag` `/api/exam/submit`                  | POST     | api/Exam_api                                      | user                                                      |
| `/exam/result/(:num)`                                                       | GET      | Exams::result/$1                                  | user                                                      |
| `/certificates`                                                             | GET      | Certificates::index (koleksi)                     | user                                                      |
| `/certificates/(:any)/download`                                             | GET      | Certificates::download/$1                         | pemilik/admin                                             |
| `/verify`                                                                   | GET      | Verify::index (form ID)                           | **publik**                                          |
| `/verify/(:any)`                                                            | GET      | Verify::show/$1                                   | **publik** (data tambahan bila pemilik/admin login) |
| `/profile`                                                                  | GET/POST | Profile::*                                        | user                                                      |
| `/admin/login`                                                              | GET/POST | admin/Auth                                        | guest                                                     |
| `/admin/...`                                                                | *        | admin/*                                           | admin                                                     |
| CLI`migrate`, `seed`                                                      | —       | cli/*                                             | hanya CLI                                                 |

Catatan: tidak ada route `/exams` (daftar ujian) karena menu "Ujian & Evaluasi" tidak ada di desain; status ujian tampil di Detail Course dan Dashboard.

## 5. Desain Database

**Aturan umum:** InnoDB, `utf8mb4_unicode_ci`, PK `BIGINT UNSIGNED AUTO_INCREMENT` (`INT UNSIGNED` boleh untuk tabel kecil), semua FK eksplisit dengan `ON DELETE` sesuai tabel, `created_at`/`updated_at` `DATETIME` (zona waktu aplikasi `Asia/Jakarta`; set `date_default_timezone_set` dan `SET time_zone='+07:00'` pada koneksi DB). Tidak ada kolom `JSON` native. Boolean = `TINYINT(1)`.

### 5.1 Daftar tabel & kolom kunci

| Tabel                      | Kolom penting                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | Constraint / Index                                                                         |
| -------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------ |
| `ci_sessions`            | `id VARCHAR(128)`, `ip_address`, `timestamp INT UNSIGNED`, `data BLOB`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | PK(`id`), idx(`timestamp`)                                                             |
| `users`                  | `name`, `email VARCHAR(190)`, `password_hash`, `role ENUM('user','admin')`, `status ENUM('active','suspended')`, `avatar_path`, `terms_accepted_at`, `last_login_at`                                                                                                                                                                                                                                                                                                                                                                                                                 | **UQ(`email`)**, idx(`role`,`status`)                                          |
| `password_resets`        | `user_id`, `token_hash CHAR(64)`, `expires_at`, `used_at`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | FK users CASCADE, idx(`token_hash`)                                                      |
| `login_attempts`         | `email`, `ip_address`, `attempted_at`, `success`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             | idx(`email`,`attempted_at`), idx(`ip_address`,`attempted_at`)                      |
| `categories`             | `name`, `slug`, `sort_order`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | UQ(`slug`)                                                                               |
| `courses`                | `category_id`, `code`, `title`, `slug`, `thumbnail_path`, `short_description`, `description`, `learning_objectives TEXT` (satu baris per poin), `instructor_name`, `instructor_title`, `instructor_bio`, `estimated_minutes`, `status ENUM('draft','published','archived')`, `published_at`, `created_by`                                                                                                                                                                                                                                                              | UQ(`slug`), UQ(`code`), idx(`status`,`category_id`)                                |
| `modules`                | `course_id`, `title`, `description`, `sort_order`, `estimated_minutes`, `completion_rule ENUM('all_required_materials')`                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | FK courses CASCADE, idx(`course_id`,`sort_order`)                                      |
| `materials`              | `module_id`, `type ENUM('video','pdf','text')`, `title`, `description` (dipakai tab "Ringkasan Materi"), `sort_order`, `status ENUM('draft','published')`, `duration_seconds` (video), `file_path`, `file_name`, `mime_type`, `file_size`, `pdf_page_count` (pdf), `content_html` (text), `read_minutes` (text; otomatis dari jumlah kata, bisa di-override), `author_name` (text, default nama instruktur), `allow_download TINYINT(1) DEFAULT 0` (pdf; tombol "Unduh Template PDF"), `min_view_seconds` (text, default 15), `is_required TINYINT(1) DEFAULT 1` | FK modules CASCADE, idx(`module_id`,`sort_order`)                                      |
| `popup_quizzes`          | `material_id`, `title`, `position ENUM('start','middle','end')`, `trigger_percent TINYINT` (start=0, middle=50, end=100 default), `attempt_mode ENUM('unlimited','limited')`, `max_attempts TINYINT NULL`                                                                                                                                                                                                                                                                                                                                                                                | FK materials CASCADE, idx(`material_id`)                                                 |
| `popup_quiz_questions`   | `popup_quiz_id`, `question_text`, `explanation TEXT` (penjelasan edukatif saat jawaban benar), `reference_seconds INT NULL` (klip video relevan, mis. 840 = menit 14:00), `sort_order`                                                                                                                                                                                                                                                                                                                                                                                                     | FK CASCADE                                                                                 |
| `popup_quiz_options`     | `question_id`, `option_text`, `is_correct`, `sort_order`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | FK CASCADE; tepat 1 benar per soal (validasi aplikasi)                                     |
| `exams`                  | `course_id`, `title`, `description`, `duration_minutes`, `passing_grade TINYINT`, `max_attempts TINYINT`, `question_count SMALLINT` (jumlah soal yang diambil per attempt), `shuffle_questions`, `shuffle_options`, `status ENUM('draft','published')`                                                                                                                                                                                                                                                                                                                           | **UQ(`course_id`)** (1 ujian akhir per course)                                     |
| `exam_questions`         | `exam_id`, `question_text`, `sort_order`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | FK CASCADE                                                                                 |
| `exam_options`           | `question_id`, `option_text`, `is_correct`, `sort_order`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | FK CASCADE                                                                                 |
| `enrollments`            | `user_id`, `course_id`, `status ENUM('in_progress','completed','failed')`, `progress_percent TINYINT` (cache), `enrolled_at`, `completed_at`, `last_activity_at`                                                                                                                                                                                                                                                                                                                                                                                                                       | **UQ(`user_id`,`course_id`)**, idx(`course_id`,`status`)                     |
| `module_progress`        | `enrollment_id`, `module_id`, `status ENUM('locked','open','completed')`, `started_at`, `completed_at`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | **UQ(`enrollment_id`,`module_id`)**                                              |
| `material_progress`      | `enrollment_id`, `material_id`, `status ENUM('not_started','in_progress','completed')`, `last_position_seconds`, `watched_buckets MEDIUMTEXT` (bitstring per bucket 5 detik, video), `viewed_pages MEDIUMTEXT` (daftar halaman terbaca, pdf), `view_started_at`, `completed_at`                                                                                                                                                                                                                                                                                                      | **UQ(`enrollment_id`,`material_id`)**                                            |
| `popup_quiz_progress`    | `enrollment_id`, `popup_quiz_id`, `status ENUM('pending','passed')`, `attempts_used`, `passed_at`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | **UQ(`enrollment_id`,`popup_quiz_id`)**                                          |
| `popup_quiz_answers`     | `progress_id`, `question_id`, `option_id`, `is_correct`, `created_at`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      | log append-only                                                                            |
| `exam_attempts`          | `enrollment_id`, `user_id`, `exam_id`, `attempt_no`, `status ENUM('in_progress','submitted','auto_submitted')`, `started_at`, `expires_at`, `submitted_at`, `total_questions`, `correct_count`, `wrong_count`, `score DECIMAL(5,2)`, `passed TINYINT(1)`, `duration_seconds_used`                                                                                                                                                                                                                                                                                        | **UQ(`enrollment_id`,`attempt_no`)**, idx(`exam_id`,`status`)                |
| `exam_attempt_questions` | `attempt_id`, `question_id`, `sort_order`, `option_order` (CSV id opsi), `selected_option_id NULL`, `is_flagged TINYINT(1) DEFAULT 0` (tandai ragu-ragu), `is_correct NULL`, `answered_at`                                                                                                                                                                                                                                                                                                                                                                                           | FK CASCADE, UQ(`attempt_id`,`question_id`)                                             |
| `certificate_sequences`  | `year SMALLINT` PK, `last_number INT UNSIGNED`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | dikunci`FOR UPDATE`                                                                      |
| `certificates`           | `certificate_no VARCHAR(20)`, `user_id`, `course_id`, `enrollment_id`, `exam_attempt_id`, **snapshot:** `recipient_name`, `course_title`, `course_code`, `issuer_name`, `instructor_name`, `instructor_title`, `competencies TEXT` (dari learning_objectives), `exam_score DECIMAL(5,2)`, `attempt_no`, `passing_grade`, `max_attempts`, `modules_total`, `total_minutes`; `issued_at`, `status ENUM('active','revoked')`, `revoked_at`, `revoked_by`, `revoke_reason`, `pdf_path`                                                             | **UQ(`certificate_no`)**, **UQ(`user_id`,`course_id`)**, idx(`status`) |
| `settings`               | `key VARCHAR(100)` PK, `value TEXT`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | `issuer_name`, `platform_name`, `platform_tagline`, `org_address`, `org_contact` |

### 5.2 Catatan desain penting

- `ON DELETE`: konten (course→module→material→quiz/soal) `CASCADE`; tabel progres/attempt/sertifikat yang menunjuk `users`/`courses` **`RESTRICT`** (course yang sudah punya enrollment tidak boleh dihapus — hanya archive). Hapus modul/materi pada course berpenghuni: lihat BR-14.
- `certificates` menyimpan **snapshot** nama & judul course agar sertifikat tidak berubah bila profil/judul diedit.
- `exam_attempt_questions` menyimpan soal & urutan opsi per attempt (snapshot) supaya konsisten saat resume dan agar skor tidak bergantung perubahan bank soal.
- Index tambahan: `enrollments(user_id,status)`, `exam_attempts(user_id,exam_id)`, `material_progress(enrollment_id,status)`.
- Seeder wajib: 1 admin (`admin@digitallearn.test`, password dari env/CLI arg, **bukan** hardcode di repo), 5 kategori (Product Management, Data Science, Design, Development, Business & Management), 6 course sesuai desain, `settings` (lihat C18), dan **seeder demo** peserta (T-015).

---

## 6. Aturan Bisnis Kanonik (BR)

> Semua task merujuk ke sini. Jika implementasi menyimpang dari BR, itu bug.

**BR-01 Akun.** Email unik (case-insensitive, simpan lowercase). Password ≥ 8 karakter, mengandung huruf dan angka, di-hash `password_hash(PASSWORD_DEFAULT)`. Registrasi wajib centang Terms/Privacy. Nama pada sertifikat berasal dari `users.name` saat penerbitan (snapshot).

**BR-02 Role & akses.** `user` tidak bisa mengakses `/admin/*`. User `suspended` tidak bisa login. Admin dibuat via seeder/CLI, tidak ada registrasi admin.

**BR-03 Status course.** `draft → published → archived`. Hanya `published` yang tampil di katalog dan bisa di-enroll. Course non-published tidak dapat diakses peserta (404/403) termasuk URL belajar. Publish memerlukan *Publish Checklist* (T-036): ≥1 modul, tiap modul ≥1 materi published, ada ujian published dengan bank soal ≥ `question_count`, thumbnail & deskripsi terisi.

**BR-04 Enrollment.** Enroll hanya pada course published, sekali per user (UQ). Saat enroll: buat `module_progress` seluruh modul (Modul urutan 1 = `open`, lainnya `locked`) dalam satu transaksi.

**BR-05 Progressive learning & akses aman.** 🔁

- Modul n+1 `open` hanya setelah modul n `completed`. Tidak bisa melompat; status disimpan DB.
- Di dalam modul, **item** (materi dan checkpoint quiz, lihat BR-20) dikerjakan **berurutan**: item k+1 terkunci sampai item k selesai (selaras `DSG:k0vzZ` dan playlist drawer: 🔒 Terkunci).
- Modul `completed` boleh diakses ulang (tombol "Akses Ulang").
- **Setiap** request ke halaman materi, halaman quiz, endpoint API progres, dan `/media/{id}` memverifikasi di server: kepemilikan enrollment + course published + modul tidak locked + item tidak locked. Tidak ada akses via URL/ID tebakan (NFR Security). File materi disajikan lewat controller, bukan URL statis.

**BR-06 Penyelesaian materi.** 🔁

| Tipe  | Aturan selesai                                                                                                                                                                                                                                              |
| ----- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| video | cakupan tontonan ≥**95%** durasi (dari bucket 5-detik unik yang benar-benar terputar, bukan sekadar posisi akhir) **dan** semua pop-up quiz materi itu `passed`. Kecepatan putar maks 2× (validasi waktu memperhitungkan `playbackRate`). |
| pdf   | **seluruh halaman telah ditampilkan** di viewer (pdf.js, pelacakan halaman, indikator "Dibaca x/y Hlm"); pop-up quiz (jika ada) `passed`. Tombol unduh hanya bila `allow_download=1`.                                                             |
| text  | peserta mencapai akhir konten (sentinel "akhir artikel" terlihat) dan`min_view_seconds` terlampaui (divalidasi server); pop-up quiz (jika ada) `passed`.                                                                                                |

Materi `draft` tidak tampil dan tidak dihitung. Materi `is_required=0` tidak menghalangi penyelesaian modul.

**BR-07 Progress.** `progress_percent = floor(modul_completed / total_modul_published × 100)` (contoh BRD: 3/5 = 60%). Disimpan di `enrollments.progress_percent` dan dihitung ulang setiap perubahan status modul. Tampilkan juga "x/y materi" sebagai info sekunder.

**BR-08 Completion modul.** Modul `completed` bila semua materi `is_required` published di dalamnya `completed`. Saat itu: set `completed_at`, buka modul berikutnya (`open`) bila ada, hitung ulang progress — **dalam satu transaksi, idempotent**.

**BR-09 Pop-up quiz (checkpoint).** 🔁 Pilihan ganda, satu jawaban benar per soal; quiz berisi ≥1 soal (desain: 3 soal dengan stepper). Posisi `start` / `middle` / `end` (`trigger_percent`); satu materi boleh punya banyak quiz.

- **Pemicu:** video → saat playhead mencapai `trigger_percent` durasi (player pause); pdf → saat halaman target (≈ persen halaman) ditampilkan; text → saat scroll mencapai persen tersebut; posisi `end` → saat akhir materi. Peserta **otomatis dibawa ke halaman quiz** (`/learn/{slug}/quiz/{id}`); quiz juga muncul sebagai item di playlist dan lewat tombol "Lanjut: Pop-up Quiz n".
- **Tidak dapat dilewati:** server menolak `heartbeat`/`complete`/akses item berikutnya selama ada quiz pada materi/ posisi sebelumnya yang belum `passed`. Tombol "Kembali ke materi" boleh, tetapi playhead tidak bisa melewati checkpoint (seek ke depan dibatasi di klien **dan** server).
- **Feedback per soal:** jawaban benar → kotak hijau "Jawaban Anda Benar!" + `explanation`, tombol "Lanjut ke Soal n+1" (soal terakhir: "Selesai & kembali ke materi"). Jawaban salah → kotak merah "Jawaban belum tepat", **tanpa membuka kunci jawaban**, soal tetap aktif. Soal yang sudah benar tersimpan (stepper hijau) walau halaman ditutup.
- **Mode `unlimited`** ("Tanpa Attempt"): ulangi sampai benar; helper box: "Tanpa Batas Percobaan".
- **Mode `limited`** (`max_attempts` = N): tiap jawaban salah `attempts_used+1` dan sisa attempt ditampilkan. Jika `attempts_used ≥ N` → **peserta mengulang materi**: reset `material_progress` (posisi 0, bucket/halaman kosong, `not_started`) dan seluruh quiz materi itu kembali `pending` (`attempts_used=0`, jawaban benar dihapus).
- Quiz `passed` bila **semua soal** telah dijawab benar. Hanya kebenaran + penjelasan yang dikirim ke klien; kunci jawaban dievaluasi di server.
- Quiz yang sudah `passed` tidak dipicu lagi, tetapi tetap bisa dibuka (read-only) dari playlist.

**BR-10 Syarat ujian.** Ujian terbuka hanya jika **semua modul `completed`**. Ujian pilihan ganda, `question_count` soal diambil acak dari bank (≤ jumlah bank), urutan soal/opsi boleh diacak.

**BR-11 Attempt ujian.** 🔁

- Maks `max_attempts`. Attempt baru hanya bila tidak ada attempt `in_progress`, attempt tersisa > 0, dan belum pernah lulus.
- Timer **server-side**: `expires_at = started_at + duration`. Jawaban ditolak lewat `expires_at` (+5 dtk toleransi). Waktu habis → otomatis dikumpulkan (**lazy finalize**, status `auto_submitted`) dengan jawaban yang sudah tersimpan.
- Jawaban **autosave** per soal; peserta bebas mengubah jawaban sampai submit. Tidak ada feedback benar/salah selama ujian. Reload = lanjut attempt (sisa waktu dari server).
- Navigasi: grid nomor soal (kolom 5) dengan 4 status — **Terjawab** (hijau), **Aktif** (biru), **Ragu-ragu** (kuning, `is_flagged` disimpan server), **Belum dijawab** (abu). Tombol "Kumpulkan Ujian Sekarang" memunculkan modal konfirmasi berisi jumlah soal belum dijawab/ragu.
- Bobot per soal = `100 / total_soal` (desain: 25 soal × 4 poin). Skor = `round(benar / total × 100, 2)`. Lulus bila `score ≥ passing_grade`. Tampilkan "Min. N benar" = `ceil(passing_grade × total / 100)`.
- **Nilai resmi = skor attempt tertinggi.** Skor dihitung **hanya di server**; klien tidak pernah menerima kunci jawaban.
- Contoh BRD wajib lolos: passing 70, max 3 → 60 (Failed), 65 (Failed), 80 (Passed → sertifikat).
- Setelah attempt terakhir gagal → `enrollments.status='failed'` (lihat D2).

**BR-12 Hasil ujian.** Tampilkan: nilai, status LULUS/TIDAK LULUS, jumlah benar, jumlah salah, waktu pengerjaan, passing grade, sisa attempt. **Jangan** menampilkan kunci jawaban.

**BR-13 Sertifikat.** 🔁 Terbit **otomatis & idempotent** tepat saat attempt lulus **dan** semua modul `completed`, dalam satu transaksi: update enrollment `completed`, buat sertifikat, generate nomor. UQ(`user_id`,`course_id`) mencegah duplikat. Peserta yang tidak lulus tidak mendapat sertifikat. Wajib (BRD): nama peserta, nama course, penerbit, tanggal terbit, Certificate ID, QR Code, Verification URL. Snapshot tambahan untuk tampilan desain: kode course, nama & jabatan instruktur, kompetensi (dari `learning_objectives`), skor, attempt ke-n, passing grade, jumlah modul, total durasi.

**BR-14 Certificate ID.** Format `DL-{YYYY}-{6 digit}` (contoh `DL-2026-000001`). Nomor urut per tahun dari `certificate_sequences` dengan `SELECT ... FOR UPDATE` dalam transaksi yang sama. Unik, tidak pernah dipakai ulang (revoke tidak membebaskan nomor).

**BR-15 Verifikasi publik & tingkat data.** 🔁 `/verify/{ID}` tanpa login. Input dinormalisasi (trim, uppercase) dan divalidasi regex `^DL-\d{4}-\d{6}$`. Rate limit sederhana per IP.

- **Tingkat publik** (siapa pun): jika ditemukan dan `status='active'` → banner hijau "KREDENSIAL RESMI DIVERIFIKASI ✓", kanvas sertifikat, nama peserta, nama course, tanggal terbit, Certificate ID, penerbit, status "Aktif & Sah", daftar kompetensi course. **Tidak** menampilkan skor, attempt, email, atau data pribadi lain.
- **Tingkat pemilik/admin** (login & pemilik sertifikat, atau admin): tambahan skor/passing, attempt ke-n dari max, kelulusan modul, tombol **Unduh PDF** dan **Salin Link**, serta bar "Akses seumur hidup" (link ke Detail Course / Review Modul 1; sembunyikan bila course tidak `published`).
- Tidak ditemukan / format salah / `revoked` → tampilkan **"Certificate not found / invalid certificate"** tanpa membocorkan alasan. QR code mengarah ke URL absolut `/verify/{ID}`.

**BR-16 Revoke.** Admin dapat mencabut sertifikat (status `revoked`, simpan alasan, waktu, admin). Sertifikat revoked tidak valid di verifikasi dan tidak bisa diunduh peserta; Certificate ID tetap tercatat.

**BR-17 Perubahan struktur course yang sudah ada enrollment.** Menambah modul/materi diizinkan → panggil `Progress_service::resync()` (modul baru menjadi `locked`/`open` sesuai urutan, progress dihitung ulang; enrollment `completed` tidak berubah). Menghapus modul/materi pada course yang punya progres: **diblokir** dengan pesan, sarankan unpublish/archive atau ubah ke `draft` (materi). Mengubah urutan modul pada course berpenghuni: diblokir bila ada enrollment `in_progress`, kecuali P2.

**BR-18 Definisi metrik dashboard admin.** Total user = `role=user`. User baru = dibuat 30 hari terakhir. Course aktif = `published`. Peserta aktif = user unik dengan `last_activity_at` ≤ 30 hari di enrollment `in_progress`. Course completion = `enrollment completed ÷ total enrollment × 100`. Pass rate = `enrollment dengan ≥1 attempt lulus ÷ enrollment dengan ≥1 attempt submitted × 100`. Total certificate issued = sertifikat `active`.

**BR-19 Status monitoring peserta.** `In Progress` (belum selesai, attempt masih ada) · `Completed` (lulus & sertifikat terbit) · `Failed` (attempt habis, tidak lulus). Kolom Nilai = semua skor attempt dipisah `/` (mis. `30/70/85`), `–` bila belum ada. Kolom Sertifikat = `Issued` / `–`.

**BR-20 Komposisi & penomoran item playlist.** 🆕 Item belajar = materi `published` (urut `sort_order`) + checkpoint quiz yang **disisipkan tepat setelah materi induknya** (urut `trigger_percent`). Penomoran berurutan 1..n per modul, dihitung server (contoh desain Modul 4: 1 Video · 2 Quiz Checkpoint 1 · 3 PDF · 4 Video · 5 Quiz Checkpoint 2 · 6 Artikel). "x dari y Selesai" di drawer/detail course menghitung item (materi + quiz). Subtitle item: Video `Video • 18:45 min (98%)`, PDF `Dokumen PDF • 14 Halaman`, Artikel `Artikel Teks • Baca 10 min`, Quiz `Pilihan Ganda (Tanpa Attempt)` / `Pilihan Ganda (2 Attempt)`. Status item: Selesai ✓ (hijau) · Aktif/Diputar/Dibaca (biru `#eff6ff`, border `#2872fa`) · persen/⏱ · Terkunci 🔒.

---

## 7. Daftar Task

> Format: **ID · Judul** — `Prioritas` · `Depends` · Referensi · `C7` · Deliverables · Spec · Verify.

---

### FASE 0 — Setup, Bootstrap & Fondasi

- [ ] **T-001 · Verifikasi environment & koneksi Context7** — `P0` · Depends: –

  - **C7:** resolve library CodeIgniter 3 (bukan CI4), topik "Installation", "Controllers", "Models".
  - **Spec:** cek `php -v` = 7.3.x, ekstensi `mysqli`, `mbstring`, `gd`, `fileinfo`, `intl` (opsional), `openssl`; `composer -V`; versi MariaDB 10.4.x; mod_rewrite aktif. Jika versi PHP tidak 7.3.x, **tulis peringatan** dan tetap patuhi larangan §3.3. Buat `docs/CONTEXT7_NOTES.md` berisi library ID CI3 yang valid dan contoh kode CI3 yang terverifikasi.
  - **Verify:** file notes ada; satu snippet controller CI3 dari Context7 diverifikasi tanpa namespace.
- [ ] **T-002 · Bootstrap project CI 3.1.13** — `P0` · Depends: T-001

  - **C7:** "Installation", "Application folder / system folder", "URLs / .htaccess".
  - **Deliverables:** struktur §4.1, `public/index.php` yang menunjuk `system/` & `application/`, `public/.htaccess` (rewrite ke index.php, blok akses `application/`, `system/`), `composer.json` (platform PHP 7.3.33, require `dompdf`, library QR, `phpmailer` bila dipakai, dev: `phpunit` 9.x), `.gitignore` (vendor, `application/config/local.php`, `application/storage/*`, `public/uploads/*`), `README.md` (cara setup), `application/config/local.php.example`.
  - **Spec:** gunakan rilis CI **3.1.13** resmi. Pasang paket Composer dengan resolver terkunci platform 7.3.33; jika sebuah paket tidak kompatibel, pilih rilis lama yang kompatibel dan catat versinya di DECISIONS.
  - **Verify:** `composer install` sukses; `http://localhost/` menampilkan halaman default tanpa `index.php` di URL.
- [ ] **T-003 · Konfigurasi inti** — `P0` · Depends: T-002

  - **C7:** "Config class", "Database configuration", "Session library (database driver)", "Security class / CSRF", "Cookie helper", "Migrations".
  - **Spec:** `config.php`: `base_url` dinamis (dari env/local.php), `index_page=''`, `subclass_prefix='MY_'`, `composer_autoload`, `csrf_protection=TRUE` (+`csrf_regenerate=FALSE`, `csrf_exclude_uris` kosong), `sess_driver='database'`, `sess_save_path='ci_sessions'`, `sess_match_ip=FALSE`, `sess_expiration=7200`, `cookie_httponly=TRUE`, `cookie_secure` mengikuti HTTPS, `encryption_key` dari local.php, `global_xss_filtering` tidak dipakai, timezone `Asia/Jakarta`. `database.php`: `utf8mb4`/`utf8mb4_unicode_ci`, `stricton=TRUE`, `save_queries=FALSE` di production. `autoload.php`: libraries `database`, `session`; helpers `url`, `form`, custom helpers. `migration.php` timestamp. `lms.php`: konstanta bisnis (`PASSWORD_MIN`, `VIDEO_COMPLETE_RATIO=0.95`, `BUCKET_SECONDS=5`, `EXAM_GRACE_SECONDS=5`, `PDF_MIN_VIEW_SECONDS=15`, batas upload).
  - **Verify:** session tersimpan di tabel; request POST tanpa token ditolak (403).
- [ ] **T-004 · Base controller, Layout & helper dasar** — `P0` · Depends: T-003

  - **C7:** "Controllers (MY_Controller / extending core classes)", "Loader", "Output class".
  - **Deliverables:** `core/MY_Controller.php` (kelas §4.3), `libraries/Layout.php` (`render($view,$data,$layout)` memakai `$this->load->view(...,TRUE)`), helper `e()`, `flash_*`, `icon()`, `label_*` (peta enum→label Indonesia), `format_*` (tanggal Indonesia, durasi, ukuran file), halaman error 403/404/500 bergaya desain.
  - **Verify:** akses `/admin` sebagai guest → redirect login; sebagai user → 403; method `json()` menghasilkan header JSON benar.
- [ ] **T-005 · Design system: CSS token, komponen, ikon, JS util** 🔁 — `P0` · Depends: T-002

  - **Ref:** DESIGN.md §2.5 (di dokumen ini), `DSG:R8qHF`, `DSG:TPXUm`, `DSG:wKYlM`, `DSG:f5Mpy`, `DSG:y1Mrz`, `DSG:FwHBK`, `DSG:rtFAY`.
  - **Deliverables:** `public/assets/css/tokens.css` (token inti + tambahan §2.5), `base.css`, `components.css`, `layout.css`; `public/assets/js/app.js` (fetch wrapper ber-CSRF, toast, modal, confirm dialog, mobile sidebar/drawer toggle); font Plus Jakarta Sans (self-host atau Google Fonts); helper `icon('name')` (inline SVG, set Phosphor: `magnifying-glass funnel caret-down caret-left caret-right check-circle lock play pause arrow-right arrow-left book-open medal target info sign-in sign-out check-square-offset shield-check download-simple clipboard flag cloud-check clock-countdown file-pdf video article question seal-check globe calendar bell user`).
  - **Komponen wajib:** button (primary/secondary/danger/link/sm, varian emerald untuk "Kumpulkan Ujian"), input/select/textarea + label/hint/error, badge/pill, card, progress bar (biru; hijau `#10b981` saat 100%), alert, toast, modal (varian **non-dismissible**), table + `.table-wrap`, accordion modul, empty state, pagination (`DSG:tG1GV`/`U3y7H`).
  - **Layout & komponen belajar (baru):** (a) *App shell* sidebar 260px + topbar 70px; (b) *Learn shell* top bar 60px + grid `396px | 976px` (gap 20, padding 16/24, responsif: drawer menjadi akordeon di bawah workspace pada <1000px); (c) *Playlist drawer* (header modul + progres, kotak panduan belajar bertahap, daftar item dengan 4 state, teaser modul berikutnya); (d) *Player card* gelap + control bar custom; (e) *PDF viewer* gelap (toolbar nama file/halaman/zoom/fullscreen + kanvas lembar); (f) *Article reader* (cover banner gelap `#0f172a` + body); (g) *Question card* + opsi pilihan (state: default/terpilih/benar/salah) + stepper soal; (h) *Number grid* 5 kolom (4 status warna §2.5); (i) *Certificate canvas* (bezel ganda, seal, QR slot); (j) *Action bar* bawah workspace.
  - **Verify:** halaman `/_styleguide` (hanya `development`) menampilkan semua komponen & state; kontras teks memenuhi WCAG AA; `prefers-reduced-motion` dihormati.
- [ ] **T-006 · Infrastruktur migration & seeder (CLI)** — `P0` · Depends: T-003

  - **C7:** "Migration class", "Running via CLI".
  - **Spec:** `controllers/cli/Migrate.php` (`latest`, `current`, `rollback`, `status`) dan `Seed.php` (`all`, `admin`, `demo`); blok non-CLI (`is_cli()` else 404). Migration menulis SQL mentah dengan FK.
  - **Verify:** `php public/index.php cli/migrate latest` jalan di DB kosong; ulangi tanpa error.

---

### FASE 1 — Database

- [ ] **T-010 · Migration: auth & sistem** — `P0` · Depends: T-006 · `ci_sessions`, `users`, `password_resets`, `login_attempts`, `settings`.
- [ ] **T-011 · Migration: konten** — `P0` · Depends: T-010 · `categories`, `courses`, `modules`, `materials`, `popup_quizzes`, `popup_quiz_questions`, `popup_quiz_options`, `exams`, `exam_questions`, `exam_options`.
- [ ] **T-012 · Migration: progres & enrollment** — `P0` · Depends: T-011 · `enrollments`, `module_progress`, `material_progress`, `popup_quiz_progress`, `popup_quiz_answers`.
- [ ] **T-013 · Migration: ujian & sertifikat** — `P0` · Depends: T-012 · `exam_attempts`, `exam_attempt_questions`, `certificate_sequences`, `certificates`.

  - **Untuk T-010–T-013:** ikuti §5 persis (kolom, UQ, FK, index). `down()` menghapus tabel urutan terbalik. **Verify:** `latest` lalu `rollback` sampai nol lalu `latest` lagi sukses; `SHOW CREATE TABLE` cocok; coba insert duplikat email/certificate_no → ditolak DB.
- [ ] **T-014 · Seeder konten** 🔁 — `P0` · Depends: T-013

  - **Spec:** admin (kredensial dari argumen CLI/env), kategori, `settings` (C18: `issuer_name`, `platform_name`, `platform_tagline`, `org_address`, `org_contact`), 6 course sesuai `design.pen` (kode, judul, instruktur, jumlah modul & durasi sesuai DESIGN.md §25; BE-305 "Backend API" / Budi Hartono, M.T.).
  - **DP-101 *Digital Product Fundamentals*** (5 modul, 15 jam, instruktur Andi Setiawan, S.Kom. — Senior PM) dengan konten kanonik:
    - M1 *Pengantar Produk Digital & Mindset PM* — 3 materi · 3 jam.
    - M2 *Market Research & Problem Validation* — 3 materi + 1 quiz · 3,5 jam.
    - M3 *Product Strategy & Roadmapping* — 2 materi + 1 quiz · 3 jam.
    - M4 ***User Journey Mapping & Wireframing*** (judul kanonik, C17): 4.1 Video *Konsep Dasar User Journey Mapping* (18:45) → **Quiz Checkpoint 1** *Pemahaman User Journey* (3 soal, mode `unlimited`, posisi `middle`, `trigger_percent`=75 ≈ menit 14:00, `reference_seconds`=840; soal 1 = tahapan Awareness dengan opsi A Consideration / **B Awareness** / C Decision-Trial / D Retention + penjelasan) → 4.2 PDF *Template & Framework Customer Journey Map* (14 hlm, `allow_download=1`) → 4.3 Video *Praktik Pembuatan Wireframe Low-Fidelity* (24:30) → **Quiz Checkpoint 2** *Validasi Wireframe* (mode `limited`, 2 attempt, posisi `end`) → 4.4 Artikel *Handover Desain ke Engineering* (baca 10 menit). (= 6 item di playlist.)
    - M5 *Usability Testing & Peluncuran MVP* — 3 materi · 2,5 jam.
    - Ujian akhir: 25 soal, 45 menit, passing 70, max 3 attempt (soal contoh dibangkitkan generator; soal 14 contoh skenario RICE Fitur A vs B).
  - Course lain: minimal 2 modul + ujian 10 soal agar seluruh alur teruji (UI-301 durasi ujian 30 menit). Semua `published`. File video/PDF contoh berukuran kecil dibangkitkan generator (jangan commit biner besar). Angka jumlah materi/item **dihitung dari DB** (boleh 14 atau 15, lihat C17).
  - **Verify:** seed idempotent (jalan 2×); katalog menampilkan 6 course; playlist Modul 4 persis 6 item berurutan seperti di atas.
- [ ] **T-015 · Seeder demo peserta untuk QA visual** 🆕 — `P1` · Depends: T-014, T-071

  - **Spec:** (`cli/seed demo`, password dari env) peserta **Muhammad Raihan** dengan 3 enrollment sesuai desain: DP-101 60% (Modul 1–3 selesai, Modul 4 aktif: 4.1 98%, quiz 1 benar, 4.2 selesai, 4.3 45%), DA-201 83%, UI-301 100% (siap ujian). Peserta **Budi Santoso, S.T.** dengan 3 sertifikat terbit (DP-101 skor 85 attempt 1/3 terbit 14 Okt 2026 `DL-2026-000001`; UI-301 28 Sep 2026; DA-201 15 Agu 2026) dibuat lewat `Certificate_service` (atau insert setara + update `certificate_sequences`).
  - **Verify:** dashboard, Course Saya, detail course, koleksi sertifikat, dan halaman verifikasi tampil mendekati `design.pen`.

### FASE 2 — Autentikasi & Profil

- [ ] **T-020 · Registrasi** — `P0` · Depends: T-004, T-005, T-014 · BRD §4 · AC-1 · `DSG:ouCKj` · BR-01

  - **C7:** "Form Validation (rules, callbacks, set_message)", "Form helper (form_open + CSRF)", "Security (password hashing note)".
  - **Spec:** form 4 field (Nama Lengkap, Email, Kata Sandi, Konfirmasi) + checkbox Terms. Validasi: required, `valid_email`, `is_unique` (cek lowercase), `min_length[8]`, regex huruf+angka, `matches`. Tampilkan toggle lihat-sandi. Simpan `terms_accepted_at`. Setelah sukses → login otomatis atau redirect `/login` dengan flash (pilih redirect login; catat). Panel kanan sesuai desain (metrik dari DB, T-091).
  - **Verify:** duplikat email ditolak (juga beda huruf besar/kecil); password lemah ditolak; hash tersimpan, bukan plaintext.
- [ ] **T-021 · Login, logout, throttling** — `P0` · Depends: T-020 · AC-1 · `DSG:tsv7W` · BR-02

  - **C7:** "Session library (regenerate, destroy)", "Input class".
  - **Spec:** login email+password, `password_verify`, `sess_regenerate(TRUE)`, tolak `suspended`, pesan error generik ("Email atau kata sandi salah"). Throttle: ≥5 gagal/15 menit per email+IP → tolak sementara (pakai `login_attempts`). Logout via POST. Redirect: user → `/dashboard`, admin → `/admin`. Update `last_login_at`. "Kembali ke Beranda", link "Lupa kata sandi?".
  - **Verify:** 6 percobaan salah memicu blokir; setelah login ID sesi berubah.
- [ ] **T-022 · Forgot & reset password** — `P0` · Depends: T-021, T-025 · BRD §4

  - **C7:** "Email class", "Security class (random bytes note)".
  - **Spec:** `/forgot-password` selalu menjawab netral (tidak membocorkan keberadaan email). Token `bin2hex(random_bytes(32))`, simpan **hash SHA-256**, kedaluwarsa 60 menit, sekali pakai. `/reset-password/{token}` validasi → set password baru (aturan BR-01) → hapus/tandai token → invalidasi sesi lain bila memungkinkan. Rate limit per email/IP. Desain halaman mengikuti Sign In (layout 50/50).
  - **Verify:** token kedaluwarsa/dipakai ulang ditolak; email dikirim (transport `log` di dev).
- [ ] **T-023 · Profil user** 🔁 — `P0` · Depends: T-021, T-092 · BRD §4

  - **Spec:** ubah nama, email (unik, konfirmasi password saat ganti email), foto profil (jpg/png/webp ≤2MB, validasi MIME nyata, resize, simpan di `public/uploads/avatars` nama acak), ganti password. Catatan: "Nama ini akan tercetak di sertifikat berikutnya"; sertifikat lama tidak berubah (snapshot, BR-01). **Akses:** dari menu kartu user di sidebar (C4) dan avatar di top bar halaman belajar. Avatar di desain berupa inisial (mis. "MR") bila foto belum ada.
  - **Verify:** upload file `.php` yang di-rename `.jpg` ditolak.
- [ ] **T-024 · Login admin & guard role** — `P0` · Depends: T-021 · BRD §7 · BR-02

  - **Spec:** `/admin/login` (halaman sederhana ber-token yang sama), hanya akun `role=admin`; user biasa gagal login di sini. Semua `admin/*` melalui `Admin_Controller`.
  - **Verify:** user biasa → 403 di `/admin/*`.
- [ ] **T-025 · Mailer** — `P1` · Depends: T-003

  - **C7:** "Email class (SMTP config)".
  - **Spec:** `libraries/Mailer.php` dengan transport `smtp` dan `log` (menulis email ke `application/logs/mail.log` untuk dev). Template HTML di `views/emails/`.

---

### FASE 3 — Admin: Pengelolaan Konten

- [ ] **T-030 · Shell admin** — `P0` · Depends: T-024, T-005 · BRD §7

  - **Spec:** layout `admin` (sidebar: Dashboard, Course, Ujian, Peserta, Sertifikat, User; topbar dengan nama admin & logout), tabel & form generik, breadcrumb, konfirmasi hapus (modal), flash. Gaya konsisten desain (sidebar dapat memakai skema yang sama dengan user; tidak wajib gelap).
  - **Verify:** responsif; sidebar off-canvas di <768px.
- [ ] **T-031 · Course management** — `P0` · Depends: T-030, T-014 · BRD §7 · AC-2, AC-10 · BR-03

  - **C7:** "Form Validation", "File Uploading class", "Pagination library", "Query Builder (like, order_by, limit)".
  - **Spec:** daftar (cari, filter status/kategori, pagination), create/edit (kode, judul, slug otomatis unik, kategori, thumbnail, deskripsi singkat & lengkap, tujuan belajar [satu baris = satu poin], instruktur [nama, jabatan, bio], estimasi durasi), view, **publish / unpublish / archive** (POST) dengan transisi valid `draft→published→archived` (+ `published→draft` untuk unpublish), konfirmasi modal. Publish memanggil *Publish Checklist* (T-036). Hapus hanya untuk `draft` tanpa enrollment.
  - **Verify:** course draft tidak muncul di katalog user dan URL detailnya 404 untuk user (AC-10).
- [ ] **T-032 · Module management** — `P0` · Depends: T-031 · AC-11 · BR-17

  - **Spec:** CRUD modul dalam course, urutan via drag-and-drop **atau** tombol naik/turun (fallback tanpa JS wajib), simpan `sort_order` berurutan dalam transaksi. Judul, deskripsi, estimasi durasi, completion rule (default semua materi wajib). Guard BR-17 saat ada progres.
  - **Verify:** urutan yang disimpan = urutan akses peserta.
- [ ] **T-033 · Material management** 🔁 — `P0` · Depends: T-032 · AC-11 · BR-05, BR-06

  - **C7:** "File Uploading class (allowed_types, max_size, encrypt_name)", "Security (sanitize_filename)", "Output class (set_header)".
  - **Spec:** tambah materi `video` (mp4/webm; `duration_seconds` via `ffprobe` bila ada, **fallback input manual wajib**), `pdf` (application/pdf; `pdf_page_count` via `pdfinfo` bila ada → fallback hitung `/Type /Page` → fallback input manual; flag `allow_download`), `text` (editor rich-text sederhana; **sanitasi HTML** whitelist, tanpa `<script>`; `read_minutes` otomatis ≈ kata/200, bisa di-override; `author_name`). Deskripsi materi dipakai pada tab "Ringkasan Materi". File di `application/storage/materials/{type}/` nama acak (privat). Edit/hapus, urutan, status Draft/Published, `is_required`, `min_view_seconds`. Pratinjau admin lewat route khusus admin. Daftar materi memperlihatkan item playlist final (termasuk quiz) sesuai BR-20.
  - **Verify:** URL langsung ke file storage tidak dapat diakses; `.exe` ditolak; hapus materi menghapus file fisik.
- [ ] **T-034 · Pop-up quiz management** 🔁 — `P0` · Depends: T-033 · AC-13 · BR-09

  - **Spec:** pada setiap materi: tambah/ubah/hapus quiz; atur `position` (awal/tengah/akhir) → `trigger_percent` (boleh override 1–100; untuk video tampilkan perkiraan menit), mode `unlimited`/`limited` + `max_attempts` (1–10), soal & opsi (2–6 opsi, **tepat satu** benar), **penjelasan** (`explanation`) per soal, `reference_seconds` opsional (klip video relevan), urutan soal. Pratinjau quiz sebagai peserta. Validasi server; ringkasan quiz muncul di daftar materi.
  - **Verify:** soal tanpa jawaban benar / >1 benar → ditolak; quiz dengan 3 soal tersimpan dan terurut.
- [ ] **T-035 · Examination management** — `P0` · Depends: T-032 · AC-12 · BR-10, BR-11

  - **Spec:** satu ujian per course: judul, deskripsi, durasi (menit), passing grade (1–100), `max_attempts`, `question_count`, acak soal/opsi, status draft/published. CRUD bank soal (pilihan ganda, 1 benar) + import CSV (P2). Validasi `question_count ≤ jumlah soal`.
  - **Verify:** ubah passing/durasi/attempt langsung memengaruhi attempt **baru** (attempt berjalan memakai snapshot).
- [ ] **T-036 · Publish checklist & validasi struktur** — `P0` · Depends: T-034, T-035 · BR-03

  - **Spec:** `Course_service::publish_checklist($course_id)` mengembalikan daftar syarat & status; tampil di halaman course admin; publish ditolak server bila gagal.

---

### FASE 4 — User: Katalog, Detail Course, Enrollment

- [ ] **T-040 · Katalog course** — `P0` · Depends: T-031, T-005 · BRD §4 · AC-2 · `DSG:x1TeKK`, `DSG:tG1GV`

  - **C7:** "Pagination library", "Query Builder (joins, group_by)".
  - **Spec:** grid 3 kolom (responsif), search (judul/deskripsi/instruktur), filter kategori, urutan (Terpopuler = jumlah enrollment, Terbaru), pagination dengan info "Menampilkan x–y dari z course". Kartu menampilkan judul, thumbnail, kategori, instruktur, deskripsi singkat, jumlah modul, estimasi durasi, dan **status per user**: `Tersedia` / `Sedang Berjalan (n%)` / `Selesai & Lulus` dengan CTA `Daftar Course +` / `Lanjutkan Belajar →` / `Review Course`. Hanya course `published`.
  - **Verify:** filter/sort/pagination mempertahankan query string.
- [ ] **T-041 · Detail course** 🔁 — `P0` · Depends: T-040 · BRD §4 · AC-3 · `DSG:w8nyqP` (`kDo9D`, `I2Pg9`, `bV6sa`, `PYiX0`, `XMo13`…`U4rOfv`, `Udofg`, `iwcr0`) · DESIGN.md §35

  - **Spec:** layout **single-column** (tanpa kartu aksi/instruktur di kanan). Urutan: breadcrumb (← Kembali ke Course Saya • Katalog • kode) + pill kategori + badge status; **kartu header** (thumbnail 190×110, judul, deskripsi, instruktur, jumlah modul, total durasi, tujuan pembelajaran 2 kolom); banner progres (n% Selesai, x/y modul • x/y materi, "Materi aktif saat ini", tombol **Lanjut Belajar →**); header kurikulum + badge "n Modul • n Materi • 1 Ujian Akhir"; daftar modul (Selesai ✓ + **Akses Ulang** / **Sedang Berjalan** terbuka dengan daftar item sesuai BR-20 / **Terkunci**); seksi **Ujian Akhir** (terkunci sampai semua modul selesai; 25 soal, durasi, passing, maks attempt "nilai tertinggi", tombol Mulai bila terbuka, riwayat skor bila ada); seksi **Sertifikat** (Belum Terbit 🔒 → tombol Lihat Sertifikat setelah terbit; teks "Format: PDF Resmi • ID unik • QR Verifikasi Publik", C6).
  - **Varian belum enroll (tidak ada di desain):** header + tujuan + kurikulum ringkas (semua modul terkunci, tanpa tautan materi) + info ujian & sertifikat + tombol **Daftar Course**.
  - **Verify:** tidak ada link aktif ke modul/item terkunci; semua label berasal dari data nyata; tidak ada forum/rating/LinkedIn.
- [ ] **T-042 · Enrollment** — `P0` · Depends: T-041, T-050 · BRD §4 · AC-2, AC-3 · BR-04

  - **Spec:** `POST /courses/{slug}/enroll`: validasi course published, belum enroll; transaksi: insert `enrollments` + `module_progress` (Modul 1 `open`, sisanya `locked`). Redirect ke detail dengan flash sukses. Idempotent bila di-klik ganda.
  - **Verify:** setelah enroll, Modul 1 terbuka, Modul 2 locked (AC-3).
- [ ] **T-043 · Halaman Course Saya** — `P0` · Depends: T-042 · `DSG:j8saW4`

  - **Spec:** header "Course Saya" + badge jumlah aktif + tombol Katalog; tab filter **Semua / Sedang Berjalan / Selesai** dengan counter; pencarian + urutan; grid 3 kolom kartu (thumbnail, kategori, badge status, judul, instruktur, progres "n% (x/y modul)", kotak "Next: Modul n", tombol **Lanjutkan Modul n →** atau **Review Course** + info nilai ujian lulus); banner discovery katalog. State kosong dengan empty-state.
  - **Verify:** angka & tombol sesuai data DB.

---

### FASE 5 — Mesin Pembelajaran (Learning Engine)

- [ ] **T-050 · Progress_service & kalkulator** — `P0` · Depends: T-013 · BR-04–BR-08, BR-17

  - **C7:** "Query Builder transactions", "Database (trans_start / trans_complete / trans_status)".
  - **Deliverables:** `Progress_calculator.php` (pure PHP: persentase, cakupan bucket, penentuan modul selesai), `Progress_service.php`: `init_enrollment()`, `get_state($enrollment)` (status modul + materi + gembok), `can_access_material()`, `mark_material_complete()`, `complete_module_if_ready()`, `unlock_next_module()`, `recalc_progress()`, `resync()`. Semua mutasi dalam transaksi & idempotent.
  - **Verify:** unit test PHPUnit untuk kalkulator (contoh 3/5=60%); test manual: menyelesaikan materi terakhir membuka modul berikutnya tepat sekali walau request dikirim ganda.
- [ ] **T-051 · Penyajian media aman** 🔁 — `P0` · Depends: T-033, T-050 · NFR Security · BR-05

  - **C7:** "Output class (set_header, set_output)", "Download helper (force_download)", HTTP Range di PHP.
  - **Spec:** `Media::stream($material_id)`: cek login, enrollment, course published, modul & item tidak locked (admin boleh semua). **HTTP Range (206)** untuk video **dan PDF** (pdf.js memuat berkas lewat Range); header `Content-Type`, `Cache-Control: private, no-store`, `X-Content-Type-Options: nosniff`; streaming per chunk; tolak path traversal. `Media::download($id)` hanya untuk PDF dengan `allow_download=1` (`Content-Disposition: attachment`) dan tetap dengan pemeriksaan akses yang sama.
  - **Verify:** `/media/{id}` untuk item locked → 403; seek video bekerja; PDF terbuka di viewer; download ditolak bila `allow_download=0`.
- [ ] **T-052 · Learning shell (video / pdf / artikel / quiz)** 🔁 — `P0` · Depends: T-050, T-051, T-005 · AC-3, AC-4 · `DSG:am1Jw`, `DSG:Z8TwQg`, `DSG:k5KcIm`, `DSG:qZ1cP` · DESIGN.md §36–§39

  - **Spec:** layout `learn` (tanpa sidebar global): top bar 60px (← Kembali ke Detail Course · badge DL · "Judul Course (KODE)" · pill modul/materi · avatar); kolom kiri **drawer playlist 396px**: header "Kurikulum Modul n" + "x dari y Selesai" + progress bar, kotak panduan belajar bertahap, daftar item (BR-20, 4 state), teaser **Modul berikutnya** (terkunci sampai modul ini selesai); kolom kanan workspace 976px. Route `/learn/{slug}` mengarah ke item aktif berikutnya. Tombol **Sebelumnya/Berikutnya**: "Berikutnya" nonaktif sampai item selesai; pada item terakhir modul berlabel **"Selesaikan Modul n & Buka Modul n+1 →"**, pada item terakhir course "Selesaikan Modul n & Buka Ujian Akhir →". Responsif: drawer di bawah workspace (akordeon) <1000px.
  - **Verify:** membuka item locked via URL → redirect ke item aktif + pesan; `aria-expanded` pada akordeon; navigasi keyboard.
- [ ] **T-053 · Materi video: pemutar & tracking** 🔁 — `P0` · Depends: T-052 · BR-06, BR-09 · `DSG:am1Jw`

  - **C7:** "Input class (post, raw_input_stream)", "Output class (JSON)".
  - **Spec:** workspace: kartu **player gelap** 976×480 (`<video>` + overlay judul + badge "Syarat 95%: Ditonton n%"); **control bar custom** (play/pause, waktu `18:15 / 18:45`, kecepatan 0.75×–2×, scrubber dengan **penanda checkpoint ❓ @mm:ss** yang berubah ✓ saat passed; tidak ada pilihan kualitas); baris judul + tombol **Materi Sebelumnya / Lanjut: Pop-up Quiz n** (sesuai item berikut); tab **Ringkasan Materi** (`description`). Heartbeat 5 detik hanya saat `playing`: `{material_id, position, played_buckets[], rate}`; server validasi monoton & wajar terhadap waktu nyata × rate, tandai bucket unik, simpan `last_position_seconds` (resume). Seek ke depan dibatasi sampai posisi sah **dan** checkpoint belum-passed (klien + server). Saat playhead mencapai `trigger_percent` → pause & redirect ke halaman quiz (T-055); kembali ke posisi checkpoint setelah quiz. Selesai otomatis saat cakupan ≥95% dan semua quiz materi passed → `{completed:true, next_url}`.
  - **Verify:** menggeser ke 100% tidak menyelesaikan; menonton 95% menyelesaikan (video pendek); resume benar.
- [ ] **T-054 · Materi PDF & artikel: viewer & tracking** 🔁 — `P0` · Depends: T-052 · BR-06 · `DSG:Z8TwQg`, `DSG:k5KcIm`

  - **C7:** (library pdf.js: ambil dokumentasi resmi; **bundle lokal** build kompatibel browser target, tanpa CDN).
  - **PDF:** header card (judul, pil "PDF • n Halaman", ukuran, badge "Syarat terpenuhi: Dibaca x/y Hlm", tombol **Unduh Template PDF** hanya jika `allow_download`); viewer gelap (toolbar: nama berkas, `<` Halaman x dari y `>`, zoom −/+/%, fullscreen); kanvas lembar; `POST /api/progress/page {material_id, page}` mencatat halaman terbaca; selesai bila semua halaman terbaca (+ quiz passed); action bar: ← item sebelumnya · status baca · Lanjut →.
  - **Artikel:** cover banner gelap (kategori • "MODUL n.m", judul, "Ditulis oleh {author} • {read_minutes} Menit"); body (heading, checklist, callout insight dari HTML ter-sanitasi); sentinel + `min_view_seconds` → bar "Anda telah mencapai akhir artikel" + badge "Selesai Dibaca"; `complete` divalidasi server (terlalu cepat ditolak).
  - **Verify:** melompat langsung ke halaman terakhir PDF tidak menyelesaikan; endpoint `complete` artikel yang dipanggil terlalu cepat ditolak.
- [ ] **T-055 · Halaman Quiz Checkpoint (pop-up quiz)** 🔁 — `P0` · Depends: T-053, T-054, T-034 · AC-4, AC-5 · BR-09 · `DSG:qZ1cP` · DESIGN.md §37

  - **Spec:** workspace fokus: **header card** (kategori "MODUL n • CHECKPOINT KUIS n (MATERI k/N)", judul, **stepper** Soal 1..n, banner aturan hijau "Mode: Tanpa Attempt" **atau** banner attempt "Sisa attempt: x" untuk mode limited, progress bar kuis); **question card** (meta "Pertanyaan i dari n • Pilihan Ganda Tunggal", tautan klip "Video Menit mm:ss" bila `reference_seconds`, teks soal, opsi A–D, feedback); **action bar** (← Kembali ke Materi · "Soal i dari n terjawab benar (x%)" · **Lanjut ke Soal i+1 →**); **helper box** 3 pilar (🔄 Tanpa Batas Percobaan / sisa attempt · 🔒 Materi berikutnya terbuka pasca semua soal benar · ✓ Hasil tersimpan otomatis). `POST /api/popup/answer` → `{correct, explanation?, attempts_left, reset_material, next}`. Mode limited habis → pesan "Anda perlu mengulang materi", server mereset (BR-09), tombol kembali ke awal materi. Quiz passed → tombol kembali ke materi/lanjut item berikutnya.
  - **Verify (AC-4/AC-5):** posisi awal/tengah/akhir terpicu benar; unlimited mengulang sampai benar; limited habis → materi mengulang & attempt pulih; tutup tab lalu kembali tidak melewati checkpoint; kunci jawaban tidak pernah terkirim saat salah.
- [ ] **T-056 · Penyelesaian modul & unlock otomatis** — `P0` · Depends: T-050, T-053, T-054 · AC-3 · BR-08

  - **Spec:** setelah item terakhir modul selesai → `complete_module_if_ready()` → modul `completed`, modul berikutnya `open`, `recalc_progress`. Pada modul terakhir tampilkan CTA "Ikuti Ujian Akhir". Halaman detail course dan Course Saya mencerminkan perubahan segera. Tombol aksi item terakhir sesuai T-052 (idempotent bila diklik ganda).
  - **Verify:** E2E AC-3 pada DP-101; Modul 3 tetap locked saat Modul 1 baru selesai.

### FASE 6 — Ujian Akhir

- [ ] **T-060 · Exam_service & kalkulator skor** — `P0` · Depends: T-013, T-050 · BR-10, BR-11

  - **Deliverables:** `Score_calculator.php` (pure PHP: `score`, `passed`, `best`, `min_correct`), `Exam_service.php`: `can_start()`, `start_attempt()` (transaksi: syarat, `attempt_no`, soal acak, snapshot soal/urutan opsi, `expires_at`), `save_answer()`, `toggle_flag()`, `submit()`, `finalize_if_expired()`, `get_state()` (jawaban/flag/sisa waktu).
  - **Verify:** PHPUnit skenario BRD (60/65/80, passing 70 → best 80, lulus di attempt 3; attempt habis tanpa lulus → `failed`).
- [ ] **T-061 · UI ujian: pra-ujian & pengerjaan** 🔁 — `P0` · Depends: T-060 · AC-6 · `DSG:o4asa` · DESIGN.md §40

  - **Pra-ujian (belum didesain):** aturan, jumlah soal, durasi, passing, sisa attempt, "nilai tertinggi dipakai", tombol Mulai + modal konfirmasi.
  - **Pengerjaan (sesuai desain):** layout learn shell; **drawer kiri** menggantikan playlist: "Daftar Soal Ujian Akhir" + "x/n Terjawab", passing grade & "Min. N benar", progress bar emerald, legend 4 status, **grid nomor soal 5 kolom** (tombol 68×40; jumlah dinamis dari `question_count`), kotak parameter (Attempt k dari N · Nilai Tertinggi Dipakai · Passing x/100), tombol **Kumpulkan Ujian Sekarang** (emerald) + modal konfirmasi (jumlah belum dijawab/ragu). **Workspace:** header card (judul + **timer** merah "Otomatis Dikumpulkan Saat Habis", sisa waktu dari server, sinkron berkala), question card ("Soal Nomor i dari n • Bobot: p Poin", tombol **Tandai Ragu**, opsi pilihan), bar autosave ("Jawaban otomatis tersimpan"), action bar (← Soal Sebelumnya · "x dari n terjawab • y belum diisi" · Soal Berikutnya →). **Tanpa feedback benar/salah.**
  - **Verify:** manipulasi timer di console tidak memperpanjang waktu; jawaban setelah `expires_at` ditolak; flag & jawaban bertahan setelah reload.
- [ ] **T-062 · Submit, grading, auto-expire** — `P0` · Depends: T-060, T-061 · AC-6 · BR-11

  - **Spec:** `submit` menghitung skor di server dari `exam_attempt_questions`, simpan `score/correct/wrong/passed/duration_used`, ubah status; jika lulus → `Certificate_service::issue_if_eligible()` (T-071); attempt terakhir gagal → `enrollments.status='failed'`. Lazy finalize dipanggil di akses ujian/dashboard/detail course untuk attempt kedaluwarsa. Submit ganda tidak menggandakan hasil/sertifikat.
  - **Verify:** AC-6 — nilai dihitung otomatis.
- [ ] **T-063 · Halaman hasil ujian** 🔁 — `P0` · Depends: T-062 · BRD §6 · BR-12 · *belum didesain*

  - **Spec:** (pakai gaya header card + kartu statistik) nilai, badge **LULUS/TIDAK LULUS**, benar/salah, waktu pengerjaan, passing grade, riwayat attempt (skor tiap attempt + tertinggi), sisa attempt; CTA "Lihat Sertifikat" (→ `/verify/{ID}`) atau "Coba Lagi" bila attempt tersisa. Tanpa kunci jawaban.
  - **Verify:** skor 85 vs passing 70 → PASSED + sertifikat langsung tersedia.

- ~~**T-064 · Halaman Ujian & Evaluasi**~~ — **DIBATALKAN.** Menu "Ujian & Evaluasi" tidak ada di desain terbaru (C4). Status ujian ditampilkan di Detail Course (T-041) dan Dashboard (T-090).

### FASE 7 — Sertifikat & Verifikasi

- [ ] **T-070 · Certificate number generator** — `P0` · Depends: T-013 · BR-14

  - **Deliverables:** `Certificate_number.php` (pure: format & parse `DL-YYYY-NNNNNN`) + method `next_number()` di model memakai `certificate_sequences` + `SELECT ... FOR UPDATE` dalam transaksi pemanggil.
  - **Verify:** PHPUnit format; uji paralel (2 proses) tidak menghasilkan nomor kembar.
- [ ] **T-071 · Penerbitan sertifikat otomatis** — `P0` · Depends: T-070, T-062 · AC-7 · BR-13

  - **C7:** "Database transactions", "Query Builder (insert, get_where)".
  - **Spec:** `Certificate_service::issue_if_eligible($enrollment_id)`: cek semua modul completed + ada attempt lulus + belum ada sertifikat → transaksi: nomor, snapshot nama/judul/penerbit, insert, `enrollments.status='completed'`, `completed_at`; panggil generator PDF (T-072) setelahnya (kegagalan PDF **tidak** membatalkan sertifikat; PDF dibuat ulang saat diunduh).
  - **Verify:** user lulus → tepat 1 sertifikat; user gagal → 0 (AC-7).
- [ ] **T-072 · PDF sertifikat + QR** 🔁 — `P0` · Depends: T-071 · BRD §6 · `DSG:uUy7X` (kanvas) · DESIGN.md §41

  - **C7:** dompdf (versi kompatibel PHP 7.3), pustaka QR (kompatibel PHP 7.3), "Download helper".
  - **Spec:** template HTML/CSS landscape A4 mengikuti kanvas desain: bezel ganda, header (badge DL + penerbit • `NO: DL-2026-000001`), judul "SERTIFIKAT KELULUSAN RESMI", nama peserta, nama course (+ kode), pill "Passing 70 • Skor 85/100 • n jam" (**tanpa predikat nilai**, C16), baris bawah: tanda tangan teks instruktur (nama + jabatan snapshot), cap "VERIFIED" statis, **QR → URL verifikasi** + URL tertulis. Font tersedia di dompdf (embed Plus Jakarta Sans bila memungkinkan; fallback sans-serif). Generate on-demand + cache `application/storage/certificates/`. QR dibuat lokal (tanpa layanan eksternal).
  - **Verify:** PDF terbuka; QR dapat discan dan mengarah ke `/verify/{ID}` valid.
- [ ] **T-073 · Koleksi Sertifikat** 🔁 — `P0` · Depends: T-072, T-092 · BRD §6 · `DSG:Rmfvj` · DESIGN.md §42

  - **Spec:** layout app shell (menu "Sertifikat Digital" aktif); top bar dengan pencarian "Cari sertifikat digital, nama course, atau ID..."; header "Koleksi Sertifikat Digital" + badge "n Sertifikat Diterbitkan" & "Verifikasi Publik Aktif"; toolbar pil filter kategori (dengan jumlah) + urutan Terbaru/Terlama; grid 3 kolom kartu minimalis 356×220: pil kategori + ikon perisai, judul course, "Diterbitkan: {tanggal}", tombol **Unduh PDF** dan **Lihat Sertifikat →** (ke `/verify/{ID}`). Sertifikat `revoked` ditandai dan tidak bisa diunduh (BR-16). Empty state bila belum ada.
  - **Verify:** user A tidak bisa mengunduh sertifikat user B; filter & pencarian bekerja.
- [ ] **T-074 · Halaman Sertifikat & Verifikasi Publik** 🔁 — `P0` · Depends: T-071, T-072 · AC-8 · BRD §6 · BR-15 · `DSG:D3PHbK` · DESIGN.md §41

  - **Spec:** `/verify` = form input Certificate ID; `/verify/{ID}` = halaman gabungan. Navbar publik (Katalog Course · Verifikasi Publik · user chip bila login), **banner hijau** "KREDENSIAL RESMI DIVERIFIKASI ✓ • ID", split: kiri **kanvas sertifikat** (versi HTML dari template T-072), kanan **kartu metadata** (Nama Penerima, Nomor Registrasi, Status "Aktif & Sah ✓", Tanggal Terbit [+ jam WIB], dan — **hanya pemilik/admin** — Hasil Ujian, Attempt, Kelulusan Modul), **kartu kompetensi** (dari `competencies`), kartu "Verifikasi Publik Terbuka Tanpa Login"; **bar akses seumur hidup** hanya untuk pemilik. Tombol Unduh PDF / Salin Link hanya pemilik/admin. State tidak valid: kartu merah "Certificate not found / invalid certificate" (halaman tetap bergaya). Normalisasi + regex ID, rate limit per IP, meta `noindex`, tanpa email/data sensitif.
  - **Verify:** akses tanpa login hanya menampilkan field BRD; ID acak/format salah/revoked → pesan invalid sama; pemilik melihat tambahan skor & tombol.

### FASE 8 — Admin: Monitoring & Manajemen

- [ ] **T-080 · Dashboard admin** — `P0` · Depends: T-062, T-071 · AC-15 · BR-18

  - **Spec:** kartu metrik: total user, user baru, total course, course aktif, total enrollment, peserta aktif, course completion, total ujian, pass rate, total certificate issued; definisi sesuai BR-18 (tooltip). `Dashboard_service` dengan query agregat efisien (satu query per kelompok).
  - **Verify:** angka cocok dengan hitung manual dari data seed/uji.
- [ ] **T-081 · Manajemen user** — `P0` · Depends: T-030 · BRD §7

  - **Spec:** daftar + cari + filter status/role, detail (profil, enrollment, nilai, sertifikat), aktifkan/suspend (POST + konfirmasi). Admin tidak bisa suspend dirinya sendiri.
- [ ] **T-082 · Participant monitoring** — `P0` · Depends: T-062 · AC-9 · BR-19

  - **Spec:** tabel Peserta · Course · Progress · Status · Nilai (semua attempt `30/70/85`) · Sertifikat (`Issued`/`–`); filter: course, peserta, status, progress (rentang), nilai, status sertifikat; pagination; ekspor CSV (P2). Klik baris → detail attempt (waktu, skor, benar/salah).
  - **Verify:** tiga contoh BRD (User A Completed/Issued, User B In Progress 75%, User C Failed 60/63/65) dapat direproduksi dengan data uji.
- [ ] **T-083 · Manajemen sertifikat** — `P0` · Depends: T-072 · AC-14 · BR-16

  - **Spec:** daftar (Certificate ID, peserta, course, tanggal terbit, status), cari/filter, **View**, **Download PDF**, **Revoke** (modal + alasan wajib; simpan admin & waktu). Revoke segera memengaruhi verifikasi publik & unduhan user.
  - **Verify:** setelah revoke, `/verify/{ID}` menampilkan invalid.

---

### FASE 9 — Dashboard User, Landing & Navigasi

- [ ] **T-090 · Dashboard user** 🔁 — `P0` · Depends: T-043, T-073, T-092 · `DSG:GNm6d` · DESIGN.md §32

  - **Spec:** sapaan "Selamat Datang Kembali, {nama}!" + subjudul; **4 kartu statistik**: Course Diikuti (n • x proses • y selesai) · Ujian & Evaluasi (jumlah ujian siap + sisa attempt) · Progres Pembelajaran (% = total modul selesai ÷ total modul semua enrollment, "x dari y Modul Selesai") · Sertifikat Digital (n Terbit); kolom utama "Course yang Sedang Diikuti" + filter Semua/Sedang Berjalan/Telah Selesai (kartu progres, "Berikutnya: Modul n — …", tombol **Lanjutkan Modul n** / **Ikuti Ujian Akhir**); kolom samping: **Aktivitas Belajar Berjalan** (modul terbuka + jenis materi/estimasi) dan **Ujian & Evaluasi Akhir** (ujian siap + checkpoint quiz tertunda dengan tombol "Jawab"/"Mulai Ujian"). Data nyata; lazy finalize ujian kedaluwarsa dipanggil di sini.
  - **Verify:** mendekati desain pada 1440px; kolom menumpuk <1000px.
- [ ] **T-091 · Landing page** 🔁 — `P1` · Depends: T-040, T-074 · `DSG:mWKjb` (`R8qHF`, `XmrXu`, `LnRP1`, `IGOVi`)

  - **Spec:** navbar (Beranda, Katalog Kursus, Login / nama user), hero split (headline "Kuasai Keahlian Baru Secara Terstruktur di Digital Learn", CTA "Mulai Belajar — Gratis!" → `/register` & "Jelajahi Course ↓", metrik **dari DB**), kartu floating, section katalog (course published, read-only; CTA ke login/daftar), footer (alamat & kontak dari `settings`, C18; link "Verifikasi Sertifikat" → `/verify`).
  - **Verify:** responsif; tanpa angka hardcode palsu (C12).
- [ ] **T-092 · Shell navigasi user** 🔁 — `P0` · Depends: T-005 · `DSG:TPXUm`, `DSG:wKYlM`, `DSG:VDEbe`

  - **Spec:** sidebar putih 260px: brand "DL / Digital Learn / Platform Belajar Digital", label **MENU UTAMA**: Dashboard · Course Saya (badge "n Course") · Katalog Course · Sertifikat Digital; item aktif `#e8f1fa` + teks `#2872fa`; **kartu user** di bawah (avatar/inisial, nama, "Peserta") yang membuka menu kecil **Profil · Sign Out** (C4). Top bar 70px: pencarian cepat (placeholder sesuai halaman) + lonceng statis + kartu profil. Off-canvas di <768px dengan backdrop.
  - **Verify:** menu tidak memuat "Ujian & Evaluasi/Progres/Tersimpan/Bantuan".

### FASE 10 — Non-Functional, QA, Dokumentasi

- [ ] **T-100 · Audit keamanan (NFR Security)** — `P0` · Depends: semua P0

  - **Checklist:** password hash; CSRF di semua POST/AJAX; semua query via Query Builder/binding; output ter-escape; HTML materi disanitasi; upload tervalidasi (MIME nyata, ekstensi, ukuran) dan disimpan privat; `/media` otorisasi + lock; role check di semua `admin/*`; IDOR (user tidak bisa membaca enrollment/attempt/sertifikat orang lain — uji dengan mengganti ID); hasil ujian tidak bisa diubah klien (skor hanya dari server); throttle login/forgot/verify; header keamanan (`X-Frame-Options`, `X-Content-Type-Options`, `Referrer-Policy`); `display_errors` off di production; cookie `HttpOnly`; direktori `application/`, `system/`, `storage/` tidak dapat diakses langsung. Dokumentasikan hasil di `docs/SECURITY_CHECK.md`.
- [ ] **T-101 · Performa & skalabilitas** — `P1` · Depends: T-100

  - **Checklist:** `EXPLAIN` untuk query katalog, monitoring peserta, dashboard; tidak ada N+1; index sesuai §5; pagination di semua daftar; streaming media per chunk; ukuran heartbeat kecil; `save_queries=FALSE`. Pastikan desain tidak mengunci jumlah course/modul/materi (tidak ada nilai hardcode).
- [ ] **T-102 · Test otomatis untuk logika inti** — `P1` · Depends: T-050, T-060, T-070

  - **Spec:** PHPUnit 9.x (kompatibel PHP 7.3) untuk class pure-PHP: `Progress_calculator`, `Score_calculator`, `Certificate_number`, pencocokan format ID, logika bucket video, aturan attempt (skenario 60/65/80). Tidak perlu bootstrap CI penuh. `composer test` menjalankannya.
- [ ] **T-103 · UAT end-to-end per Acceptance Criteria** — `P0` · Depends: semua P0

  - **Deliverable:** `docs/UAT.md` berisi langkah & hasil untuk **AC-1 s/d AC-15** (lihat §8). Jalankan skenario penuh: daftar → login → enroll DP-101 → selesaikan modul 1–5 (termasuk quiz mode unlimited & limited) → ujian gagal 2× lalu lulus → sertifikat → scan QR → verifikasi → admin revoke → verifikasi invalid. Sertakan skenario negatif (akses modul locked via URL, draft course via URL).
- [ ] **T-104 · Dokumentasi & deployment** — `P1` · Depends: T-103

  - **Spec:** `README.md` (prasyarat PHP 7.3.33/MariaDB 10.4, langkah instal, konfigurasi `local.php`, migrate & seed, konfigurasi upload `php.ini`, virtual host/`.htaccess`, SMTP), `docs/API.md` (endpoint AJAX & payload), `docs/DECISIONS.md` final.
- [ ] **T-105 · Final cleanup** — `P1` · Depends: T-104

  - **Spec:** hapus kode mati/komentar debug, pastikan tidak ada fitur di luar scope (forum, rating, dll.), lint `php -l` seluruh file di bawah PHP 7.3, cek log bersih.

---

### Task Opsional (P2)

- [ ] **T-A00 · Tambahkan screen yang belum ada ke `design.pen`** (via MCP pen.dev bila tersedia): classroom, modal pop-up quiz, ujian, hasil, sertifikat, verifikasi, admin.
- [ ] **T-A01 · Import soal ujian dari CSV** (admin).
- [ ] **T-A02 · "Ingat saya 30 hari"** (token persisten ter-hash + rotasi).
- [ ] **T-A03 · Reset attempt ujian oleh admin** (lihat D2).
- [ ] **T-A04 · Ekspor CSV monitoring peserta & daftar sertifikat.**
- [ ] **T-A05 · Reorder modul pada course berpenghuni** (dengan resync).
- [ ] **T-A06 · Tombol "Bagikan ke LinkedIn"** 🆕 (hanya tautan *Add to profile* statis; di luar BRD, C6).

---

## 8. Matriks Keterlacakan — Acceptance Criteria BRD

| AC | Skenario                                                            | Task utama                 |
| -- | ------------------------------------------------------------------- | -------------------------- |
| 1  | Registration                                                        | T-020, T-021               |
| 2  | Course (admin publish → user lihat & ikuti)                        | T-031, T-040, T-042        |
| 3  | Progressive Learning                                                | T-042, T-050, T-052, T-056 |
| 4  | Pop-up Quiz peserta (posisi awal/tengah/akhir, tidak bisa dilewati) | T-034, T-055               |
| 5  | Pop-up Quiz attempt (unlimited vs limited + ulang materi)           | T-034, T-055               |
| 6  | Exam (setelah semua modul; nilai otomatis)                          | T-035, T-060–T-063        |
| 7  | Certificate otomatis hanya untuk yang lulus                         | T-071, T-072               |
| 8  | Verification publik                                                 | T-074                      |
| 9  | Admin monitoring                                                    | T-080–T-083               |
| 10 | Course management (Draft tak bisa diikuti)                          | T-031, T-036               |
| 11 | Module & Material management + urutan = urutan akses                | T-032, T-033               |
| 12 | Examination management                                              | T-035                      |
| 13 | Pop-up quiz management                                              | T-034                      |
| 14 | Certificate management (view/download/revoke)                       | T-083                      |
| 15 | Dashboard admin                                                     | T-080                      |

**NFR:** Security → T-003, T-051, T-100 · Performance → T-101 · Availability → T-104 (setup produksi) · Scalability → T-101.

---

## 9. Register Keputusan Terbuka (gunakan default, catat di `docs/DECISIONS.md`, jangan memblokir)

| #   | Ambiguitas BRD                                                | Default yang dipakai                                                                                                                                          |
| --- | ------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| D1  | Boleh ujian ulang setelah lulus?                              | **Tidak.** Setelah lulus, attempt baru diblokir.                                                                                                        |
| D2  | Attempt habis & belum lulus?                                  | Status`failed`, tidak ada attempt lagi, pesan "hubungi admin". Reset oleh admin = `T-A03` (P2).                                                           |
| D3  | Tampilan verifikasi sertifikat revoked                        | Sama dengan "tidak ditemukan/invalid" (tanpa membocorkan alasan).                                                                                             |
| D4  | Definisi "selesai" untuk PDF/Text ("sampai dianggap selesai") | 🔁 PDF:**semua halaman terbaca** di viewer (sesuai desain "Dibaca 14/14 Hlm"); Text: sentinel akhir artikel + `min_view_seconds` (BR-06).             |
| D5  | Hosting video                                                 | Upload lokal + streaming Range (BRD "upload video"). Embed YouTube = di luar MVP.                                                                             |
| D6  | Pop-up quiz berisi >1 soal?                                   | 🔁**Ya, default** (desain: 3 soal dengan stepper). Semua soal harus benar; soal benar tersimpan; mode limited menghitung jawaban salah sebagai attempt. |
| D7  | Setelah attempt limited habis, quiz mana yang direset?        | Semua quiz pada materi tersebut kembali`pending`.                                                                                                           |
| D8  | Perubahan struktur course berpenghuni                         | BR-17.                                                                                                                                                        |
| D9  | "Final Assessment" sebagai modul (contoh BRD)                 | Ujian akhir**bukan** modul; entitas `exams` terpisah.                                                                                                 |
| D10 | Pengiriman email                                              | SMTP via config; dev memakai transport`log`.                                                                                                                |
| D11 | Pembuatan akun admin                                          | Hanya seeder/CLI. Admin dapat melihat & suspend user; tidak ada tambah user manual di MVP.                                                                    |
| D12 | Akses ke course yang di-unpublish/archive                     | Peserta tidak dapat membuka materi; sertifikat yang sudah terbit tetap valid.                                                                                 |
| D13 | Registrasi: auto-login atau redirect login?                   | Redirect ke`/login` dengan flash sukses.                                                                                                                    |
| D14 | Bank soal vs jumlah soal per attempt                          | `question_count` ≤ bank; acak tiap attempt, snapshot per attempt.                                                                                          |
| D15 | Pop-up quiz = modal atau halaman?                             | Halaman workspace fokus (`qZ1cP`) yang **dipicu otomatis** pada checkpoint dan tidak bisa dilewati (C13, BR-09).                                      |
| D16 | Data apa yang tampil di halaman sertifikat publik?            | Hanya field BRD + kompetensi; skor/attempt hanya untuk pemilik/admin (C15, BR-15).                                                                            |
| D17 | Akses Profil karena tidak ada menu di sidebar                 | Lewat menu kartu user (Profil · Sign Out) (C4).                                                                                                              |
| D18 | Berkas PDF materi boleh diunduh?                              | Hanya bila admin mengaktifkan`allow_download` per materi.                                                                                                   |

---

## 10. Prompt Pembuka (tempel ke Antigravity untuk memulai)

```
Kamu adalah Backend Developer + Database Engineer + System Architect untuk proyek LMS
"Digital Learn Platform" berbasis CodeIgniter 3.1.13, PHP 7.3.33, MariaDB 10.4.34.

1. Baca TASKS.md sampai tuntas (terutama Bagian 2, 3, 5, 6). Baca juga DESIGN.md §25–§42 dan
   struktur design.pen. Abaikan DESIGN.md §1–§24 sesuai TASKS.md §2.1.
2. Gunakan Context7 MCP untuk SEMUA dokumentasi CodeIgniter. Pastikan library yang dipakai
   adalah CodeIgniter 3.x, bukan CodeIgniter 4. Ikuti protokol di TASKS.md §3.2.
3. Kerjakan task berurutan mulai dari T-001. Satu task per iterasi, ikuti loop di §3.1:
   Context7 → implementasi → verifikasi → centang checkbox → commit.
4. Kode harus kompatibel PHP 7.3 (lihat §3.3). Bila ragu terhadap sintaks, pilih yang lebih konservatif.
5. Jika menemukan ambiguitas, gunakan default di §9 dan catat di docs/DECISIONS.md.
   Berhenti dan tanya saya hanya pada kondisi di §3.7.
Mulai dengan T-001 dan laporkan hasil verifikasinya sebelum lanjut ke T-002.
```
