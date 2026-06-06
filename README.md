# 🚌 Rara Travel & Tour – Tema Website Transportasi & Travel

Tema website statis modern untuk perusahaan penyedia layanan bus pariwisata, charter, dan perjalanan grup. Dilengkapi dengan slider otomatis pada bagian **Most Requested**, **Popular Routes**, serta **Testimonials**, serta halaman _shop_ dan _article_ untuk konten produk dan blog.

## ✨ Fitur Utama

- **Hero Section** dengan statistik & CTA
- **Slider interaktif pada kartu "Most requested"** (gambar berganti dengan ilustrasi rute populer)
- **Slider otomatis untuk Popular Routes** (4 rute unggulan)
- **Slider testimoni pelanggan** (auto-slide & kontrol manual)
- **Bagian Layanan** (bus charter, city transfer, tour packages, corporate trips)
- **Fleet & Fasilitas** (mini bus, medium bus, big bus)
- **Toko (Shop)** – contoh produk perjalanan (WooCommerce-style)
- **Artikel (Blog)** – konten tips perjalanan
- **Formulir pemesanan** sederhana dengan validasi
- **Payment marquee** (QRIS, kartu kredit, e-wallet, bank)
- **Responsif** (mobile friendly)
- **Menu navigasi sticky** dengan hamburger menu untuk mobile

## 🛠 Teknologi

- HTML5
- CSS3 (Flexbox, Grid, animasi keyframes)
- JavaScript Native (Vanilla JS)
- Font: Inter (Google Fonts)
- Ikon: emoji & teks

## 📁 Struktur File
index.html # File utama tema (semua kode dalam satu file)
README.md # Dokumentasi

> Karena tema ini dibuat dalam satu file HTML, tidak diperlukan build tools atau dependensi eksternal.

## 🚀 Cara Menggunakan

1. **Download** atau salin kode `index.html` ke dalam proyek lokal Anda.
2. Buka file tersebut menggunakan **browser modern** (Chrome, Firefox, Edge, Safari).
3. Untuk mengubah konten:
   - Edit teks, gambar (emoji/gradient) pada **slider "Most requested"** di bagian `.trip-card`
   - Ganti rute pada **Popular Routes slider** di bagian `#routesTrack`
   - Ubah produk & artikel sesuai kebutuhan Anda
   - Sesuaikan nomor telepon, email, dan deskripsi di bagian **contact & footer**
4. Jika ingin menghubungkan ke sistem backend (WooCommerce, CMS), Anda perlu memodifikasi form dan tombol "Add to Cart" / "Read More" untuk mengirim data ke server.

## 📱 Responsivitas
Tema ini mendukung layar desktop, tablet, dan ponsel. Pada lebar < 768px:

Menu berubah menjadi hamburger

Ukuran font & padding mengecil

Slider tompan dan dots tetap berfungsi


## 📄 Lisensi
Tema ini dibuat untuk keperluan demonstrasi dan dapat digunakan secara bebas untuk proyek pribadi atau komersial. Tidak ada ketergantungan pustaka eksternal berlisensi terbatas.

Dikembangkan dengan ☕ dan Vanilla JS untuk [Rara Travel & Tour](https://raratravel.id).


## ⚙️ Kustomisasi

### Mengganti Gambar Slider Most Requested
Di dalam `index.html`, cari:
```html
<div class="trip-image" style="background-image: linear-gradient(...);">🚌✨</div>
Ubah nilai background-image atau ganti dengan URL gambar sebenarnya:

html
style="background-image: url('gambar-rute-1.jpg'); background-size: cover;"
Mengatur Durasi Slider
Pada bagian script JavaScript untuk masing-masing slider, ubah nilai AUTOPLAY_DELAY (dalam milidetik):

Most requested: AUTOPLAY_DELAY = 5000

Popular routes: AUTOPLAY_DELAY = 4500

Testimonial: AUTOPLAY_DELAY = 4000


## Menambah Slide Baru
Most requested: duplikat div .trip-card di dalam #tripSliderTrack

Popular routes: tambahkan div .route-card di dalam #routesTrack

Testimoni: tambahkan div .testimonial-card di dalam #testimonialTrack

Jangan lupa jumlah dots akan otomatis menyesuaikan.
