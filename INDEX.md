# 📚 Project Files Index & Overview

## ✅ Files Created/Modified

### Core Blade Files

| File | Status | Fungsi |
|------|--------|--------|
| `resources/views/layouts/app.blade.php` | ✅ Created | Main layout dengan header, footer, navigation, scroll spy |
| `resources/views/home.blade.php` | ✅ Updated | Home page dengan 5 sections: Hero, About, Team, Portfolio, CTA |

### Styling Files

| File | Status | Fungsi |
|------|--------|--------|
| `resources/css/app.css` | ✅ Updated | Tailwind directives + custom CSS classes + animations |
| `tailwind.config.cjs` | ✅ Verified | Color palette configuration (6 custom colors) |

### Configuration Files

| File | Status | Fungsi |
|------|--------|--------|
| `routes/web.php` | ✅ Verified | Route '/' → home view |
| `vite.config.js` | ✅ Verified | Asset bundling configuration |
| `.env` | ✅ Verified | Environment variables |

### Documentation Files

| File | Status | Fungsi |
|------|--------|--------|
| `SSBDA_SETUP.md` | 📄 Created | **Dokumentasi lengkap** - Setup, struktur, troubleshooting |
| `QUICK_START.md` | 📄 Created | **Panduan cepat** - 3 langkah untuk menjalankan |
| `CONFIG_GUIDE.md` | 📄 Created | **Panduan konfigurasi** - Color palette, components |
| `CUSTOMIZATION_GUIDE.md` | 📄 Created | **Panduan customisasi** - Edit content, layout, styling |
| **INDEX.md** (file ini) | 📄 Created | Daftar lengkap files & overview |

---

## 🏗️ Project Structure

```
laravelProject1/
│
├── 📄 QUICK_START.md                    (← START HERE!)
├── 📄 SSBDA_SETUP.md                    (Setup & Troubleshooting)
├── 📄 CONFIG_GUIDE.md                   (Color palette, components)
├── 📄 CUSTOMIZATION_GUIDE.md            (Customize content)
├── 📄 INDEX.md                          (File listing - ini)
│
├── app/
│   ├── Http/
│   ├── Models/
│   └── Providers/
│
├── bootstrap/
├── config/
├── database/
├── public/                              (Asset files)
│   └── build/
│       └── manifest.json
│
├── resources/
│   ├── css/
│   │   └── app.css                      ✅ MAIN STYLESHEET
│   ├── js/
│   │   ├── app.js
│   │   └── bootstrap.js
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php            ✅ MAIN LAYOUT
│       ├── home.blade.php               ✅ HOME PAGE (ALL SECTIONS)
│       └── ...
│
├── routes/
│   ├── web.php                          ✅ ROUTE CONFIG
│   └── console.php
│
├── storage/
├── tests/
├── vendor/
│
├── .env                                 ✅ Environment config
├── .env.example
├── composer.json
├── package.json
├── tailwind.config.cjs                  ✅ TAILWIND CONFIG
├── vite.config.js                       ✅ VITE CONFIG
├── phpunit.xml
└── artisan
```

---

## 🎯 Main Sections in Home Page

### 1. **Hero Section** (`id="hero"`)
- Gradient background (Primary → Secondary1)
- Large headline + subtitle
- 2 CTA buttons
- Location: `resources/views/home.blade.php` lines 1-20

### 2. **About Us Section** (`id="about"`)
- Lab visi & misi
- 3 key focuses (Social Simulation, Big Data Analytics, Applied Research)
- Stats cards (15+ Researchers, 50+ Papers, etc.)
- Responsive 2-column layout
- Location: `resources/views/home.blade.php` lines 22-85

### 3. **Our Team Section** (`id="team"`)
- 3 team member cards:
  - Dr. R. Santoso (Head - Blue gradient)
  - A. Putri (Senior - Blue-to-Blue gradient)
  - M. Hidayat (Engineer - Orange-to-Blue gradient)
- Each card has: gradient header, name, title, description, skill badges
- Location: `resources/views/home.blade.php` lines 87-153

### 4. **Portfolio Section** (`id="portfolio"`)
- 4 project cards with different border colors:
  1. Social Network Simulation (Primary border)
  2. Traffic Flow Analytics (Accent border)
  3. Public Health Modeling (Secondary2 border)
  4. Consumer Behavior Analysis (Secondary1 border)
- Each has: title, description, skill tags
- Location: `resources/views/home.blade.php` lines 155-223

### 5. **CTA Section**
- Call-to-action untuk kolaborasi
- Link ke email: lab@ssbda.com
- Location: `resources/views/home.blade.php` lines 225-235

---

## 🎨 Color Palette Implementation

### Primary (#063e9c - Deep Blue)
- Used: Header background, section headers, primary text, primary buttons
- Tailwind: `bg-primary`, `text-primary`

### Secondary 1 (#183447 - Dark Blue)
- Used: Footer, dark text, secondary buttons
- Tailwind: `bg-secondary1`, `text-secondary1`

### Secondary 2 (#7093be - Medium Blue)
- Used: Accents, badges, borders
- Tailwind: `bg-secondary2`, `text-secondary2`

### Secondary 3 (#deedfd - Light Blue)
- Used: Light section backgrounds, card backgrounds
- Tailwind: `bg-secondary3`

### Light (#fefefe - Off White)
- Used: Main background, light text on dark
- Tailwind: `bg-light`, `text-light`

### Accent (#ff8a00 - Orange)
- Used: CTA buttons, highlights, hover states
- Tailwind: `bg-accent`, `text-accent`

---

## 🔧 Key Features Implemented

### ✅ Navigation & Scroll Spy
- Sticky header dengan navigation menu
- Active menu item highlight saat scroll
- Mobile hamburger menu
- Smooth scroll ke section saat klik
- Implemented di: `resources/views/layouts/app.blade.php`

### ✅ Responsive Design
- Mobile-first approach
- Breakpoints: mobile, tablet (md:), desktop (lg:)
- Mobile menu toggle
- Responsive grid layouts
- Touch-friendly buttons

### ✅ Animations & Effects
- Fade-in animation untuk elements
- Hover effects dengan shadow & scale
- Smooth transitions (300ms)
- Card hover effects (lift + shadow)

### ✅ Accessibility
- Semantic HTML structure
- Color contrast WCAG AA compliant
- Respects `prefers-reduced-motion`
- Keyboard navigation support
- Proper heading hierarchy

### ✅ Performance
- Tailwind CSS purging (unused classes removed)
- Optimized asset bundling with Vite
- CSS variables untuk efficient styling
- Minimal JavaScript

---

## 📋 Navigation Structure

### Menu Items (dalam semua breakpoints)
1. About Us → `#about`
2. Our Team → `#team`
3. Portfolio → `#portfolio`

### Footer Links
- About Us → `#about`
- Our Team → `#team`
- Portfolio → `#portfolio`
- Contact: lab@ssbda.com, +62 (0)21 - 123 456

---

## 🚀 Quick Start Reference

```bash
# 1. Install
npm install && composer install

# 2. Dev Mode (run in separate terminals)
npm run dev          # Terminal 1: Build assets
php artisan serve    # Terminal 2: Run Laravel

# 3. Access
# Option A: http://127.0.0.1:8000 (artisan serve)
# Option B: http://localhost/laravelProject1/public (XAMPP)

# 4. Build for Production
npm run build
```

---

## 📖 Documentation Files Guide

### `QUICK_START.md` - ⭐ START HERE
Panduan tercepat untuk menjalankan website. Baca ini dulu!

### `SSBDA_SETUP.md`
Dokumentasi lengkap mencakup:
- Setup details
- Project structure explanation
- All features description
- Development workflow
- Troubleshooting guide

### `CONFIG_GUIDE.md`
Cara menggunakan dan customize:
- Color palette
- Component classes
- Tailwind configuration
- Custom CSS

### `CUSTOMIZATION_GUIDE.md`
Step-by-step untuk:
- Edit content (About, Team, Portfolio)
- Tambah section baru
- Ubah warna & layout
- Tambah images
- CSS customization
- JavaScript customization

---

## 🔍 File Locations Cepat

**Edit Content?**
→ `resources/views/home.blade.php`

**Edit Header/Footer?**
→ `resources/views/layouts/app.blade.php`

**Edit Styling?**
→ `resources/css/app.css`

**Edit Warna?**
→ `resources/css/app.css` dan `tailwind.config.cjs`

**Edit Route?**
→ `routes/web.php`

---

## ⚠️ Important Notes

1. **Always run `npm run dev`** saat development untuk hot reload
2. **Colors defined di 2 tempat**: Tailwind config + CSS variables
3. **Mobile menu toggle** requires JavaScript (check console jika tidak work)
4. **Smooth scroll** adalah CSS built-in, bukan JavaScript

---

## 📞 Contact & Support Info

Email: lab@ssbda.com
Phone: +62 (0)21 - 123 456
Location: Indonesia

---

## 📝 Version Info

- **Created**: 2026
- **Laravel Version**: 11
- **Tailwind CSS**: Latest
- **Vite**: Latest
- **Node**: 18+

---

## 🎓 Learning Resources

- [Laravel Blade Template](https://laravel.com/docs/blade)
- [Tailwind CSS](https://tailwindcss.com/docs)
- [Vite Build Tool](https://vitejs.dev/)
- [Modern JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript)

---

**Next Step**: Buka `QUICK_START.md` dan ikuti langkah-langkahnya untuk menjalankan website! 🚀
