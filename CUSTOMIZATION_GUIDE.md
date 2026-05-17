# 🎯 Customization Guide

## Menambah Content ke Website

### 1. Mengedit Sections yang Sudah Ada

Semua section ada di `resources/views/home.blade.php`

#### About Us Section

Untuk mengedit deskripsi:

```blade
<section id="about" class="section bg-light">
    <!-- ... -->
    <div class="fade-in">
        <h3 class="text-2xl font-bold text-primary mb-4">Visi & Misi</h3>
        <p class="text-secondary1 mb-4 leading-relaxed">
            <!-- EDIT TEXT DISINI -->
            Laboratorium SSBDA berfokus pada penelitian...
        </p>
    </div>
    <!-- ... -->
</section>
```

#### Team Members

Untuk menambah/mengedit anggota tim:

```blade
<!-- Team Member 1 -->
<div class="team-card overflow-hidden">
    <div class="h-56 bg-gradient-to-br from-primary to-secondary1">
        <!-- Gradient background color -->
    </div>
    <div class="p-6 text-center">
        <h3 class="text-xl font-bold text-primary mb-1">Dr. R. Santoso</h3>
        <p class="text-accent font-semibold mb-3">Head of Laboratory</p>
        <p class="text-secondary1 text-sm mb-4">
            <!-- EDIT DESKRIPSI DISINI -->
            Spesialisasi dalam social simulation...
        </p>
        <div class="flex justify-center gap-3">
            <!-- Edit badges/skills -->
            <span class="inline-block px-3 py-1 bg-light text-primary text-xs font-semibold rounded-full">
                Research
            </span>
            <span class="inline-block px-3 py-1 bg-light text-primary text-xs font-semibold rounded-full">
                Leadership
            </span>
        </div>
    </div>
</div>
```

#### Portfolio Projects

Untuk menambah/mengedit proyek:

```blade
<!-- Project 1 -->
<div class="portfolio-card overflow-hidden bg-white border-l-4 border-primary">
    <div class="h-48 bg-gradient-to-br from-primary to-secondary1">
        <!-- Icon/gradient - ubah gradient colors untuk berbeda -->
    </div>
    <div class="p-6">
        <h3 class="text-lg font-bold text-primary mb-2">
            <!-- EDIT JUDUL PROYEK -->
            Social Network Simulation
        </h3>
        <p class="text-secondary1 text-sm mb-4">
            <!-- EDIT DESKRIPSI PROYEK -->
            Simulasi dinamika jaringan sosial...
        </p>
        <div class="flex gap-2">
            <!-- Edit skill tags -->
            <span class="inline-block px-2 py-1 bg-secondary3 text-primary text-xs rounded font-medium">
                Simulation
            </span>
            <span class="inline-block px-2 py-1 bg-secondary3 text-primary text-xs rounded font-medium">
                Networks
            </span>
        </div>
    </div>
</div>
```

---

## 2. Menambah Section Baru

Untuk menambah section baru, tambahkan ke `resources/views/home.blade.php`:

### Template Section Baru

```blade
<!-- New Section -->
<section id="new-section" class="section bg-light">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <span class="badge text-sm">04. New Section</span>
            <h2 class="section-header">Section Title</h2>
            <p class="section-subtitle">Section description goes here.</p>
        </div>

        <!-- Content here -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Items -->
        </div>
    </div>
</section>
```

### Update Navigation

Tambahkan link di `resources/views/layouts/app.blade.php`:

```blade
<!-- Desktop Navigation -->
<div class="hidden md:flex space-x-8">
    <a href="#about" class="nav-link" data-section="about">About Us</a>
    <a href="#team" class="nav-link" data-section="team">Our Team</a>
    <a href="#portfolio" class="nav-link" data-section="portfolio">Portfolio</a>
    <a href="#new-section" class="nav-link" data-section="new-section">New Section</a>
</div>
```

Dan di mobile menu:

```blade
<!-- Mobile Menu -->
<div class="px-4 py-4 space-y-3">
    <a href="#about" class="block nav-link py-2 px-4 text-center rounded-lg hover:bg-secondary3 transition-colors" data-section="about">About Us</a>
    <a href="#team" class="block nav-link py-2 px-4 text-center rounded-lg hover:bg-secondary3 transition-colors" data-section="team">Our Team</a>
    <a href="#portfolio" class="block nav-link py-2 px-4 text-center rounded-lg hover:bg-secondary3 transition-colors" data-section="portfolio">Portfolio</a>
    <a href="#new-section" class="block nav-link py-2 px-4 text-center rounded-lg hover:bg-secondary3 transition-colors" data-section="new-section">New Section</a>
</div>
```

Update JavaScript scroll spy di `resources/views/layouts/app.blade.php`:

```javascript
// Scroll Spy
function updateScrollSpy() {
    const sections = ['about', 'team', 'portfolio', 'new-section'];  // Add new section
    // ... rest of code
}
```

---

## 3. Mengubah Warna

### Ubah Single Color

**Option 1: Ubah di Tailwind Config**

File: `tailwind.config.cjs`

```javascript
theme: {
    extend: {
        colors: {
            primary: '#NEW_HEX_COLOR',  // Ubah primary color
            secondary1: '#NEW_HEX_COLOR',
            // ... etc
        },
    },
}
```

**Option 2: Ubah di CSS Variables**

File: `resources/css/app.css`

```css
:root {
    --primary: #NEW_HEX_COLOR;
    --secondary-1: #NEW_HEX_COLOR;
    /* ... etc */
}
```

### Gradient Colors

Untuk mengubah gradient section (hero, portfolio, etc):

```blade
<!-- Change gradient colors -->
<div class="bg-gradient-to-r from-primary to-secondary1">
    <!-- from-primary to-secondary1 = your gradient -->
    <!-- Ubah nama color untuk gradient berbeda -->
</div>

<!-- Examples -->
<div class="bg-gradient-to-br from-accent to-primary">Orange ke Blue</div>
<div class="bg-gradient-to-r from-secondary1 to-secondary2">Dark Blue ke Medium Blue</div>
```

---

## 4. Mengubah Layout & Spacing

### Hero Section Height

File: `resources/views/home.blade.php`

```blade
<section id="hero" class="hero-section pt-32 pb-16">
    <!-- pt-32 = padding-top, pb-16 = padding-bottom -->
    <!-- Ubah nilai untuk lebih besar/kecil -->
</section>

<!-- Contoh perubahan -->
<section id="hero" class="hero-section pt-48 pb-24">  <!-- Lebih besar -->
```

### Grid Columns

```blade
<!-- Current: 4 columns on large screens -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

<!-- Change to 3 columns -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

<!-- Change to 2 columns -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
```

### Gap/Spacing

```blade
<!-- gap-6 = spacing between items -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Perubahan -->
    <!-- gap-4 = lebih kecil -->
    <!-- gap-8 = lebih besar -->
</div>

<!-- Padding -->
<div class="p-6">  <!-- All sides -->
    <!-- p-4 = lebih kecil, p-8 = lebih besar -->
</div>

<!-- Margin -->
<h2 class="mb-4">Title</h2>
    <!-- mb-4 = margin-bottom 4 units -->
    <!-- mb-8 = lebih besar, mb-2 = lebih kecil -->
```

---

## 5. Mengubah Typography

### Heading Sizes

```blade
<!-- Current sizes -->
<h1 class="text-4xl md:text-6xl">Hero Title</h1>
<h2 class="section-header">Section Title (text-4xl)</h2>
<h3 class="text-2xl">Subsection</h3>

<!-- Perubahan -->
<h1 class="text-5xl md:text-7xl">Lebih besar</h1>
<h1 class="text-3xl md:text-5xl">Lebih kecil</h1>
```

### Font Weights

```blade
<!-- font-bold = bold (700) -->
<!-- font-semibold = semi-bold (600) -->
<!-- font-medium = medium (500) -->
<!-- font-normal = normal (400) -->

<h2 class="text-4xl font-bold">Bold heading</h2>
<p class="text-lg font-semibold">Semi-bold text</p>
```

---

## 6. Menambah Images

### Add Team Member Photos

Replace SVG icons dengan images:

```blade
<!-- Current (icon) -->
<div class="h-56 bg-gradient-to-br from-primary to-secondary1 flex items-center justify-center">
    <svg class="w-24 h-24 text-secondary3">...</svg>
</div>

<!-- With image -->
<div class="h-56 overflow-hidden">
    <img src="/path/to/image.jpg" alt="Dr. R. Santoso" class="w-full h-full object-cover">
</div>
```

### Add Portfolio Images

```blade
<!-- Current (gradient + icon) -->
<div class="h-48 bg-gradient-to-br from-primary to-secondary1 flex items-center justify-center">
    <svg class="w-16 h-16 text-light">...</svg>
</div>

<!-- With image -->
<div class="h-48 overflow-hidden">
    <img src="/path/to/project-image.jpg" alt="Project title" class="w-full h-full object-cover">
</div>
```

**Letakkan images di:** `public/images/`

---

## 7. CSS Customization

### Add Custom Classes

Edit `resources/css/app.css`:

```css
/* Custom class example */
.my-custom-button {
    @apply px-6 py-3 bg-accent text-light rounded-lg font-bold hover:bg-opacity-90 transition-all;
}

.my-custom-card {
    @apply rounded-xl shadow-lg p-6 hover:shadow-2xl transition-all duration-300;
}
```

Gunakan di Blade:

```blade
<button class="my-custom-button">Click me</button>
<div class="my-custom-card">Card content</div>
```

---

## 8. JavaScript Customization

Edit script section di `resources/views/layouts/app.blade.php`:

```javascript
// Add custom functionality
document.addEventListener('DOMContentLoaded', function() {
    // Your custom code here
    console.log('Custom JS loaded');
    
    // Example: Add click tracking
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', function() {
            console.log('Clicked:', this.getAttribute('href'));
        });
    });
});
```

---

## 9. Responsive Breakpoints

Tailwind responsive prefixes:

```
sm:  640px      (small devices)
md:  768px      (tablets)
lg:  1024px     (desktops)
xl:  1280px     (large desktops)
2xl: 1536px     (extra large)
```

Example:

```blade
<!-- Mobile first -->
<div class="text-sm sm:text-base md:text-lg lg:text-xl">
    Text yang berubah ukuran berdasarkan screen size
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    Columns: 1 mobile, 2 tablet, 3 desktop, 4 large desktop
</div>
```

---

## 10. Useful Tailwind Classes

| Class | Fungsi |
|-------|--------|
| `flex` | Display flex |
| `grid` | Display grid |
| `gap-4` | Gap between items |
| `px-6` | Horizontal padding |
| `py-4` | Vertical padding |
| `mb-4` | Margin bottom |
| `mt-4` | Margin top |
| `rounded-lg` | Border radius |
| `shadow-lg` | Box shadow |
| `hover:scale-105` | Scale on hover |
| `transition-all` | Smooth transition |
| `duration-300` | Transition duration |
| `text-center` | Text align center |
| `items-center` | Flex/grid align center |
| `justify-between` | Justify content between |

---

Untuk dokumentasi lengkap Tailwind: https://tailwindcss.com/docs
