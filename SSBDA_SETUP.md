# SSBDA Lab Website - Setup & Running Guide

Website single-page untuk **Social Simulation & Big Data Analytics Laboratory** dengan Laravel 11 dan Tailwind CSS.

## 📋 Requirements

- PHP 8.2+ (atau yang sesuai dengan Laravel 11)
- Node.js & npm
- Composer
- XAMPP atau server lokal lainnya

## 🚀 Setup & Installation

### 1. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

### 2. Environment Configuration

File `.env` sudah dikonfigurasi untuk development. Jika belum ada:

```bash
cp .env.example .env
php artisan key:generate
```

### 3. Build Assets (CSS/JS)

**Untuk Development:**
```bash
npm run dev
```

Ini akan menjalankan development server dengan hot reload.

**Untuk Production:**
```bash
npm run build
```

### 4. Run Laravel Server

Opsi 1 - Menggunakan PHP Built-in Server:
```bash
php artisan serve
```
Akses: `http://127.0.0.1:8000`

Opsi 2 - Menggunakan XAMPP:
- Pastikan project ada di `C:\xampp\htdocs\laravelProject1\`
- Start Apache di XAMPP Control Panel
- Akses: `http://localhost/laravelProject1/public`

## 📁 Project Structure

```
laravelProject1/
├── app/
│   ├── Http/Controllers/
│   ├── Models/
│   └── Providers/
├── bootstrap/
├── config/
├── database/
├── public/              # Entry point (index.php)
├── resources/
│   ├── css/
│   │   └── app.css     # Tailwind CSS + Custom styles
│   ├── js/
│   │   ├── app.js      # Main JS file
│   │   └── bootstrap.js
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php    # Main layout dengan header/footer
│       └── home.blade.php       # Home page dengan semua sections
├── routes/
│   ├── web.php         # Route '/' → home
│   └── console.php
├── storage/
├── tests/
├── vendor/
├── tailwind.config.cjs  # Tailwind configuration
├── vite.config.js       # Vite configuration
├── composer.json
└── package.json
```

## 🎨 Sections Overview

### 1. **Hero Section**
- Gradient background dengan primary color
- Judul besar dan subtitle
- 2 buttons: "Explore More" dan "Our Projects"

### 2. **About Us Section**
- Deskripsi lab dengan 3 key points (Social Simulation, Big Data Analytics, Applied Research)
- Stats cards (15+ Researchers, 50+ Papers, 20+ Projects, 8+ Years)
- Responsive grid layout

### 3. **Our Team Section**
- 3 kartu anggota tim dengan:
  - Gradient background header dengan icon
  - Nama, posisi, deskripsi
  - Skill badges
- Hover effect dengan shadow dan translate

### 4. **Portfolio Section**
- 4 proyek dengan cards yang elegans:
  - Gradient background header
  - Judul, deskripsi, skill tags
  - Border accent dengan warna berbeda
- Responsive grid (1 kolom mobile, 2 tablet, 4 desktop)

### 5. **CTA Section**
- Call-to-action untuk kolaborasi
- Link ke email untuk kontak

### 6. **Footer**
- 3 kolom: About, Quick Links, Contact
- Responsive layout
- Copyright year otomatis

## 🎯 Navigation & Features

### Scroll Spy
- Menu aktif ter-highlight saat scroll ke section
- Otomatis update saat user scroll halaman

### Smooth Scroll
- Klik menu → smooth scroll ke section terkait
- CSS `scroll-behavior: smooth`

### Mobile Responsive
- Mobile menu toggle dengan hamburger icon
- Adaptive grid layout (1-4 kolom)
- Touch-friendly buttons dan spacing

### Accessibility
- Semantic HTML
- Color contrast sesuai WCAG
- Motion preferences respected

## 🎨 Color Palette

```
Primary:      #063e9c  (Deep Blue)
Secondary 1:  #183447  (Dark Blue)
Secondary 2:  #7093be  (Medium Blue)
Secondary 3:  #deedfd  (Light Blue)
Light:        #fefefe  (Off White)
Accent:       #ff8a00  (Orange)
```

Semua warna sudah dikonfigurasi di:
- `tailwind.config.cjs` - Tailwind classes
- `resources/css/app.css` - CSS variables

## 🔄 Development Workflow

### Ketika Mengubah Blade Files
Jika running `npm run dev`, perubahan akan reload otomatis.

### Ketika Mengubah Styles (CSS)
Tailwind akan rebuild otomatis saat develop mode berjalan.

### Ketika Mengubah JS
JavaScript berubah akan reload otomatis.

## 🧪 Testing

Jalankan tests dengan:
```bash
php artisan test
```

## 📦 Deployment

Untuk production:

1. Build assets:
```bash
npm run build
```

2. Optimize Laravel:
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

3. Upload ke server dan configure sesuai hosting provider.

## 🐛 Troubleshooting

### Assets tidak loading
- Pastikan `npm run dev` atau `npm run build` sudah dijalankan
- Clear cache: `php artisan cache:clear`
- Clear browser cache atau hard refresh (Ctrl+Shift+R)

### Mobile menu tidak berfungsi
- Check browser console untuk JS errors
- Pastikan JavaScript tidak di-disable

### Styles tidak terlihat
- Verify Tailwind process running: `npm run dev`
- Check `app.css` linked di layout
- Verify `tailwind.config.cjs` configuration

### Route error
- Pastikan file di `routes/web.php` benar
- Restart Laravel server: `php artisan serve`

## 📞 Contact Information

Email: lab@ssbda.com
Phone: +62 (0)21 - 123 456
Location: Indonesia

## 📝 Notes

- Website sepenuhnya responsive untuk mobile, tablet, desktop
- Menggunakan modern CSS & JavaScript practices
- Performance optimized dengan Tailwind CSS
- SEO-friendly dengan semantic HTML
- Accessibility compliant

## 🔗 Useful Links

- [Laravel Documentation](https://laravel.com/docs)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [Vite Documentation](https://vitejs.dev/)
- [Blade Template Engine](https://laravel.com/docs/blade)

---

**Created:** 2026
**Version:** 1.0
**License:** MIT
