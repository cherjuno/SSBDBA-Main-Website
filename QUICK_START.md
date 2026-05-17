# 🚀 QUICK START - SSBDA Lab Website

## Langkah Cepat untuk Menjalankan Website

### 1️⃣ Install Dependencies (Jalankan sekali)

```bash
npm install
composer install
```

### 2️⃣ Build Assets & Run Dev Server

**Terminal 1 - Jalankan Tailwind/Vite (Keep running):**
```bash
npm run dev
```

**Terminal 2 - Jalankan Laravel (Keep running):**
```bash
php artisan serve
```

Atau jika pake XAMPP, cukup:
- Start Apache di XAMPP Control Panel
- Buka: `http://localhost/laravelProject1/public`

### 3️⃣ Akses Website

```
http://127.0.0.1:8000  (jika pakai php artisan serve)
atau
http://localhost/laravelProject1/public  (jika pakai XAMPP)
```

---

## ✅ Verifikasi Setup

Pastikan:
- ✅ Tailwind CSS styling visible (blue & orange colors)
- ✅ Navigation menu responsive (hamburger on mobile)
- ✅ Scroll spy working (menu highlight saat scroll)
- ✅ Smooth scroll ke section saat klik menu
- ✅ Footer visible dengan contact info

---

## 🔧 Untuk Production

```bash
npm run build
php artisan config:cache
```

---

## 📁 File Utama yang Sudah Dibuat

| File | Fungsi |
|------|--------|
| `resources/views/layouts/app.blade.php` | Main layout dengan header/footer |
| `resources/views/home.blade.php` | Home page dengan semua sections |
| `resources/css/app.css` | Tailwind + custom styles |
| `tailwind.config.cjs` | Color palette config |
| `routes/web.php` | Route configuration |

---

## 🎨 Color Palette Digunakan

```
🟦 Primary:      #063e9c
🟫 Secondary:    #183447
🔷 Secondary 2:  #7093be
🔹 Secondary 3:  #deedfd
⚪ Light:        #fefefe
🟠 Accent:       #ff8a00
```

---

## 🌟 Features

- ✅ Single page dengan menu scroll spy
- ✅ Hero section dengan gradient
- ✅ About Us dengan stats cards
- ✅ Our Team (3 anggota tim)
- ✅ Portfolio (4 proyek)
- ✅ CTA section (Call to Action)
- ✅ Footer dengan contact
- ✅ Fully responsive mobile/tablet/desktop
- ✅ Smooth animations & hover effects

---

## 💡 Tips Development

1. **Hot Reload**: Jalankan `npm run dev` untuk auto-reload saat edit file
2. **Clear Cache**: `php artisan cache:clear` jika ada cache issues
3. **Debug**: Buka DevTools (F12) untuk check console errors
4. **Tailwind**: Jika style tidak update, restart `npm run dev`

---

Untuk detail lengkap, lihat: `SSBDA_SETUP.md`
