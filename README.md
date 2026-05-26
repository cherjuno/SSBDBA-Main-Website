# SSBDBA Main Website

Dokumentasi singkat untuk proyek SSBDBA Main Website.

## Ringkasan
- Framework: Laravel (>=12) dan PHP ^8.2
- Frontend: Tailwind CSS + Vite
- DB: MySQL (disarankan)
- Node: Node.js + npm

Aplikasi ini adalah website institusi dengan landing page yang dapat diedit melalui Admin Dashboard. Fitur utama: halaman depan editorial, manajemen konten (SiteContent), CRUD Artikel dengan upload thumbnail, Plugin Manager, Events, People, dan formulir kontak.

## Persyaratan
- PHP 8.2+
- Composer
- MySQL (atau MariaDB)
- Node.js (LTS) dan npm
- ekstensi PHP umum: `pdo`, `mbstring`, `openssl`, `tokenizer`, `xml`, `ctype`, `json`

## Instalasi (lokal)
1. Clone repository

	git clone <repo-url> .

2. Install dependensi PHP

	composer install

3. Salin file lingkungan dan atur variabel lingkungan

	cp .env.example .env
	- Atur `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`

4. Generate app key

	php artisan key:generate

5. Jalankan migrasi dan seeder

	php artisan migrate --seed

6. Buat symbolic link storage (untuk upload)

	php artisan storage:link

7. Install dependensi frontend dan jalankan dev server

	npm install
	npm run dev

8. Jalankan server lokal (opsional)

	php artisan serve

Catatan: pada lingkungan XAMPP, arahkan VirtualHost atau DocumentRoot ke folder `public/`.

## Admin
- URL login admin: `/admin/login`
- Kredensial seed awal:
  - Username: `admin123`
  - Password: `admin1234`

Setelah login, Anda dapat mengakses Dashboard admin (prefix `/admin`) untuk:
- Mengedit konten landing page (SiteContent)
- Mengelola Artikel (CRUD + upload thumbnail)
- Mengelola Plugin (unggah, aktif/non-aktif)

File konfigurasi landing: [config/landing.php](config/landing.php)
Model key-value konten: [app/Models/SiteContent.php](app/Models/SiteContent.php)

## Struktur penting
- Layout utama: [resources/views/layouts/app.blade.php](resources/views/layouts/app.blade.php)
- Halaman depan: [resources/views/home.blade.php](resources/views/home.blade.php)
- Admin views: [resources/views/admin](resources/views/admin)
- Controller admin: [app/Http/Controllers/Admin*](app/Http/Controllers)
- Migrations baru: `site_contents`, `articles`, `plugins`

## Uploads dan storage
File upload disimpan pada `storage/app/public` dan dapat diakses dari `public/storage` setelah menjalankan `php artisan storage:link`.

## Perintah berguna
- Migrate & seed: `php artisan migrate --seed`
- Jalankan dev server vite: `npm run dev`
- Build assets produksi: `npm run build`
- Jalankan server laravel: `php artisan serve`

## Catatan pengembang
- Editor WYSIWYG (CKEditor/TinyMCE) belum terpasang penuh; integrasi image-insert endpoint ada pada controller artikel.
- Plugin manager menerima file `.zip` tetapi ekstraksi/instalasi otomatis mungkin perlu pengembangan lebih lanjut.
- Pastikan `APP_URL` di `.env` benar saat menjalankan Vite atau saat membuat link statis.
- Jika menemukan error parsing di tinker pada Windows Powershell, jalankan `php artisan tinker` tanpa embedding perintah yang mengandung kutip tunggal/berganda yang kompleks.

