
<h1 align="center">Haiii!  Selamat datang di Web Sistem Informasi Dinas Sosial versi aku. 👋</h1>
<img width="1920" height="1332" alt="screencapture-127-0-0-1-8000-2025-11-29-20_00_01" src="https://github.com/user-attachments/assets/db20e495-d74e-409b-a9cf-a00293e3fa18" />
<div align="center">

**Ini adalah website yang aku buat untuk project UKK 2025 – Dibuat dengan cinta, beberapa gelas matcha, dan error yang tidak terhitung 😭🍵**

</div>
<h2 id="tentang"> 🎀 Apa sih konsep web yang aku buat ini?</h2>
Website ini adalah sistem informasi Dinas Sosial yang berfungsi untuk menampilkan berita, pengaduan masyarakat, dan informasi seputar pelayanan sosial. Dibuat untuk mempermudah masyarakat dan admin dalam mengakses dan mengelola data.
<h2 id="fitur">✨ Fitur apa aja sih yang ada di project ini?</h2>

1. **Halaman Berita**
   => Menampilkan informasi dan update terbaru dari Dinas Sosial yang dapat dibaca oleh seluruh pengguna.
   
2. **Halaman Sosial Pedia**
   => Menampilkan penjelasan kata-kata atau singkatan dalam bidang sosial yang jarang orang ketahui.

3. **Form Pengaduan**
   => Pengguna dapat mengirim laporan/pengaduan secara online melalui formulir yang telah disediakan.

4. **Sistem Login & Role**
   => Terdapat dua role utama: *User* dan *Admin* dengan hak akses yang berbeda.

5. **Dashboard Admin**
   => Admin dapat mengelola berita, sosiap pedia, melihat dan memproses pengaduan, serta mengatur data lain yang diperlukan.

6. **CRUD Lengkap**
   => Admin dapat menambah, mengedit, dan menghapus data seperti berita dan sosial pedia.

7. **Manajemen Laporan**
   => Laporan yang dikirim user akan tersimpan dan dapat di-review oleh admin secara terstruktur.
<h2 id="testing-account">🧑‍💼 Akun Default untuk Pengujian</h2>
   
   ### 👤 Admin

-   Emai: admin@gmail.com
-   Password: 251251

   ### 🧑‍🎨 User (opsional)

-   Email: user@gmail.com
-   Kata Sandi: 162120

<h2 id="erd">🌸 ERD Diagram & Schema antar tabel</h2>
<img width="3744" height="1467" alt="erdplus" src="https://github.com/user-attachments/assets/837656ae-cd3c-46c3-bc58-75121da52861" />
<img width="1437" height="808" alt="Cuplikan layar 2025-11-29 140804" src="https://github.com/user-attachments/assets/cf30e507-dda8-4002-87c0-7ac758935725" />
<h2 id="uml">💙 UML Diagram Use Case</h2>
<img width="1920" height="1332" alt="screencapture-127-0-0-1-8000-2025-11-29-20_00_01" src="https://github.com/user-attachments/assets/fe5da1fd-d9df-467c-808d-f469121d56ac" />

## 🛠️ Tools yang Digunakan
- Laravel (Backend Framework)
- PHP (Bahasa Backend)
- MySQL (Database)
- HTML, CSS, JS (Frontend)
- Composer (Dependency Manager)
- Git & GitHub (Version Control)
- Xampp (Web Server
- VS Code (Code Editor)
<h2 id="installation">📩 Instalasi (Versi XAMPP</h2>

1. Clone Repository dari Github
   
    Buka CMD / Terminal / Git Bash lalu ikuti langkah-langkah berikut:
    ```bash
    cd C:\xampp\htdocs
    git clone https://github.com/yayaa11-create/WebDinsos.git
    cd simak
    ```

2. Install Dependensi Laravel (Composer)

    ```bash
    composer install
    ```

3. Copy File .env

    ```bash
    copy .env.example .env
    ```
    Jika memakai VSCode → duplikasi manual juga bisa.

4. Buat Database di phpMyAdmin

    -   Buka browser → http://localhost/phpmyadmin (Atau klik "Admin" pada bagian MySQL di XAMPP)
    -   Klik Database
    -   Buat database baru, misalnya: simak
  
5. Atur Koneksi Database di .env

    Buka file .env, lalu ubah:
    ```makefile
    DB_DATABASE=simak
    DB_USERNAME=root
    DB_PASSWORD=
    ```

6. Generate App Key

     ```bash
     php artisan key:generate
     ```
   
7. Jalankan Migrasi Database

    ```bash
    php artisan migrate
    php artisan db:seed    # Jalankan jika memiliki seeder
    ```
   
8. Jalankan Server Laravel

    ```bash
    php artisan serve
    ```
    Lalu buka:
    👉 http://127.0.0.1:8000
    Atau
    👉 http://localhost:8000

💡 Catatan untuk XAMPP
-   Pastikan Apache dan MySQL sedang START dan tidak error.
-   Simpan project di folder htdocs.

**🧸✨ Selesai!**

<h2 id="pembuat">Web ini dibuat oleh <a href="https://www.instagram.com/urfav.yaya11?igsh=MWE2d2d0ZXFudTRmcw==">yayaww</a> 🌷</h2>
