<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUPING REZIM - Sistem Informasi Pengaduan Masyarakat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#ecfdf5',
                            100: '#d1fae5',
                            500: '#10b981',
                            600: '#059669',
                            700: '#047857',
                            800: '#065f46',
                            900: '#064e3b'
                        },
                        secondary: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a'
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-white text-secondary-900 antialiased">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-secondary-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-primary-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-comments text-white text-lg"></i>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-secondary-900">KUPING REZIM</h1>
                        <p class="text-xs text-secondary-600">Sistem Pengaduan Masyarakat</p>
                    </div>
                </div>

                <nav class="hidden md:flex items-center space-x-8">
                    <a href="#beranda"
                        class="text-secondary-700 hover:text-primary-600 font-medium transition-colors">Beranda</a>
                    <a href="#cara-kerja"
                        class="text-secondary-700 hover:text-primary-600 font-medium transition-colors">Cara Kerja</a>
                    <a href="#pengaduan"
                        class="text-secondary-700 hover:text-primary-600 font-medium transition-colors">Buat
                        Pengaduan</a>
                    <a href="#kontak"
                        class="text-secondary-700 hover:text-primary-600 font-medium transition-colors">Kontak</a>
                </nav>

                <div class="flex items-center space-x-4">
                    <div class="sm:flex items-center space-x-2 text-sm">
                        <a href="{{ route('login') }}"
                            class="flex items-center gap-2 bg-primary-600 text-white px-4 py-2 rounded-md hover:bg-primary-700 transition duration-200 shadow-md">
                            <i class="fas fa-user"></i>
                            <span>Login</span>
                        </a>
                    </div>
                    <button class="md:hidden text-secondary-700" onclick="toggleMobileMenu()">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section id="beranda" class="bg-gradient-to-br from-primary-50 to-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-8">
                        <div class="space-y-4">
                            <h1 class="text-4xl lg:text-5xl font-bold text-secondary-900 leading-tight">
                                Suara Anda mungkin <span class="text-primary-600">Penting</span> untuk Perubahan
                            </h1>
                            <p class="text-xl text-secondary-600 leading-relaxed">
                                Sampaikan keluhan, saran, dan aspirasi Anda melalui KUPING REZIM.
                                Kami berkomitmen untuk mendengar dan menindaklanjuti setiap pengaduan masyarakat.
                            </p>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#pengaduan"
                                class="bg-primary-600 text-white px-8 py-4 rounded-lg font-semibold hover:bg-primary-700 transition-colors text-center">
                                <i class="fas fa-edit mr-2"></i>
                                Buat Pengaduan Sekarang
                            </a>
                            <a href="#cara-kerja"
                                class="border-2 border-primary-600 text-primary-600 px-8 py-4 rounded-lg font-semibold hover:bg-primary-50 transition-colors text-center">
                                <i class="fas fa-info-circle mr-2"></i>
                                Pelajari Cara Kerja
                            </a>
                        </div>

                        <div class="flex items-center space-x-6 text-sm text-secondary-600">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-shield-alt text-primary-600"></i>
                                <span>Data Aman</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-clock text-primary-600"></i>
                                <span>Respon 24 Jam</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-users text-primary-600"></i>
                                <span>Gratis untuk Semua</span>
                            </div>
                        </div>
                    </div>

                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=600&h=400&fit=crop&crop=center"
                            alt="Masyarakat menyampaikan pengaduan" class="rounded-2xl shadow-2xl w-full h-auto">
                        <div
                            class="absolute -bottom-6 -left-6 bg-white p-6 rounded-xl shadow-lg border border-secondary-100">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-check text-primary-600 text-lg"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-secondary-900">1,247 Pengaduan</p>
                                    <p class="text-sm text-secondary-600">Telah Ditangani Bulan Ini</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section id="cara-kerja" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                        Cara Kerja KUPING REZIM
                    </h2>
                    <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                        Proses pengaduan yang mudah, transparan, dan dapat dipertanggungjawabkan
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center group">
                        <div
                            class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary-600 transition-colors">
                            <i class="fas fa-edit text-primary-600 text-2xl group-hover:text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-secondary-900 mb-3">1. Tulis Pengaduan</h3>
                        <p class="text-secondary-600">Sampaikan keluhan atau saran Anda melalui formulir yang telah
                            disediakan</p>
                    </div>

                    <div class="text-center group">
                        <div
                            class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary-600 transition-colors">
                            <i class="fas fa-search text-primary-600 text-2xl group-hover:text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-secondary-900 mb-3">2. Verifikasi</h3>
                        <p class="text-secondary-600">Tim kami akan memverifikasi dan mengkategorikan pengaduan Anda</p>
                    </div>

                    <div class="text-center group">
                        <div
                            class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary-600 transition-colors">
                            <i class="fas fa-cogs text-primary-600 text-2xl group-hover:text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-secondary-900 mb-3">3. Proses</h3>
                        <p class="text-secondary-600">Pengaduan diteruskan ke instansi terkait untuk ditindaklanjuti</p>
                    </div>

                    <div class="text-center group">
                        <div
                            class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary-600 transition-colors">
                            <i class="fas fa-bell text-primary-600 text-2xl group-hover:text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-secondary-900 mb-3">4. Notifikasi</h3>
                        <p class="text-secondary-600">Anda akan mendapat update status dan hasil tindak lanjut pengaduan
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-20 bg-secondary-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                        Pencapaian KUPING REZIM
                    </h2>
                    <p class="text-xl text-secondary-600">
                        Komitmen kami dalam melayani masyarakat
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-white p-8 rounded-xl shadow-sm text-center">
                        <div class="text-4xl font-bold text-primary-600 mb-2">15,847</div>
                        <div class="text-secondary-600">Total Pengaduan</div>
                    </div>

                    <div class="bg-white p-8 rounded-xl shadow-sm text-center">
                        <div class="text-4xl font-bold text-primary-600 mb-2">92%</div>
                        <div class="text-secondary-600">Tingkat Penyelesaian</div>
                    </div>

                    <div class="bg-white p-8 rounded-xl shadow-sm text-center">
                        <div class="text-4xl font-bold text-primary-600 mb-2">3.2</div>
                        <div class="text-secondary-600">Hari Rata-rata Respon</div>
                    </div>

                    <div class="bg-white p-8 rounded-xl shadow-sm text-center">
                        <div class="text-4xl font-bold text-primary-600 mb-2">4.8/5</div>
                        <div class="text-secondary-600">Rating Kepuasan</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Complaint Form Section -->
        <section id="pengaduan" class="py-20 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                        Sampaikan Pengaduan Anda
                    </h2>
                    <p class="text-xl text-secondary-600">
                        Isi formulir di bawah ini dengan lengkap dan jelas
                    </p>
                </div>

                <div class="bg-secondary-50 rounded-2xl p-8">
                    <form class="space-y-6" wire:submit.prevent="submitComplaint">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-secondary-900 mb-2">
                                    Nama Lengkap *
                                </label>
                                <input type="text" wire:model="name"
                                    class="w-full px-4 py-3 border border-secondary-200 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors"
                                    placeholder="Masukkan nama lengkap Anda">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-secondary-900 mb-2">
                                    Email *
                                </label>
                                <input type="email" wire:model="email"
                                    class="w-full px-4 py-3 border border-secondary-200 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors"
                                    placeholder="nama@email.com">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-secondary-900 mb-2">
                                    Nomor Telepon *
                                </label>
                                <input type="tel" wire:model="phone"
                                    class="w-full px-4 py-3 border border-secondary-200 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors"
                                    placeholder="08xxxxxxxxxx">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-secondary-900 mb-2">
                                    Kategori Pengaduan *
                                </label>
                                <select wire:model="category"
                                    class="w-full px-4 py-3 border border-secondary-200 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                                    <option value="">Pilih kategori</option>
                                    <option value="infrastruktur">Infrastruktur</option>
                                    <option value="pelayanan">Pelayanan Publik</option>
                                    <option value="lingkungan">Lingkungan</option>
                                    <option value="keamanan">Keamanan</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-secondary-900 mb-2">
                                Judul Pengaduan *
                            </label>
                            <input type="text" wire:model="title"
                                class="w-full px-4 py-3 border border-secondary-200 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors"
                                placeholder="Ringkasan singkat pengaduan Anda">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-secondary-900 mb-2">
                                Detail Pengaduan *
                            </label>
                            <textarea wire:model="description" rows="6"
                                class="w-full px-4 py-3 border border-secondary-200 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors"
                                placeholder="Jelaskan pengaduan Anda secara detail...">
                            </textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-secondary-900 mb-2">
                                Lokasi Kejadian
                            </label>
                            <input type="text"
                                class="w-full px-4 py-3 border border-secondary-200 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors"
                                wire:model="location" placeholder="Alamat atau lokasi kejadian">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-secondary-900 mb-2">
                                Upload Foto/Dokumen Pendukung
                            </label>
                            <div
                                class="border-2 border-dashed border-secondary-300 rounded-lg p-6 text-center hover:border-primary-400 transition-colors">
                                <input type="file" multiple wire:model="attachments" class="hidden"
                                    accept="image/*,.pdf,.doc,.docx" id="file-upload">
                                <label for="file-upload" class="cursor-pointer">
                                    <i class="fas fa-cloud-upload-alt text-4xl text-secondary-400 mb-4"></i>
                                    <p class="text-secondary-600">Klik untuk upload atau drag & drop</p>
                                    <p class="text-sm text-secondary-500 mt-2">PNG, JPG, PDF hingga 10MB</p>
                                </label>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <input type="checkbox" id="agreement" wire:model="agreement"
                                class="mt-1 w-4 h-4 text-primary-600 border-secondary-300 rounded focus:ring-primary-500">
                            <label for="agreement" class="text-sm text-secondary-600">
                                Saya menyetujui bahwa data yang saya berikan adalah benar dan dapat
                                dipertanggungjawabkan.
                                Saya juga memahami bahwa pengaduan palsu dapat dikenakan sanksi sesuai peraturan yang
                                berlaku.
                            </label>
                        </div>

                        <button type="submit"
                            class="w-full bg-primary-600 text-white py-4 px-8 rounded-lg font-semibold hover:bg-primary-700 transition-colors">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Kirim Pengaduan
                        </button>
                    </form>

                    <div class="mt-8 p-6 bg-white rounded-lg border border-secondary-200">
                        <h4 class="font-semibold text-secondary-900 mb-3">
                            <i class="fas fa-lightbulb text-primary-600 mr-2"></i>
                            Tips Pengaduan Efektif:
                        </h4>
                        <ul class="space-y-2 text-sm text-secondary-800">
                            <li class="font-medium text-secondary-900">• Gunakan bahasa yang sopan dan jelas</li>
                            <li class="font-medium text-secondary-900">• Sertakan foto atau dokumen pendukung jika ada
                            </li>
                            <li class="font-medium text-secondary-900">• Berikan informasi lokasi yang spesifik</li>
                            <li class="font-medium text-secondary-900">• Pastikan data kontak Anda aktif untuk
                                follow-up</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="kontak" class="bg-secondary-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-primary-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-comments text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">KUPING REZIM</h3>
                            <p class="text-sm text-secondary-400">Sistem Pengaduan Masyarakat</p>
                        </div>
                    </div>
                    <p class="text-secondary-300">
                        Platform resmi pemerintah untuk menampung aspirasi dan pengaduan masyarakat.
                    </p>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-secondary-300">
                        <li><a href="#" class="hover:text-primary-400 transition-colors">Pengaduan Online</a>
                        </li>
                        <li><a href="#" class="hover:text-primary-400 transition-colors">Lacak Status</a></li>
                        <li><a href="#" class="hover:text-primary-400 transition-colors">FAQ</a></li>
                        <li><a href="#" class="hover:text-primary-400 transition-colors">Panduan</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-3 text-secondary-300">
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-phone text-primary-400"></i>
                            <span>Hotline: 1500-123</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-envelope text-primary-400"></i>
                            <span>info@kupingrezim.go.id</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt text-primary-400"></i>
                            <span>Jl. Merdeka No. 123, Jakarta</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-clock text-primary-400"></i>
                            <span>24/7 Online</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">Ikuti Kami</h4>
                    <div class="flex space-x-4 mb-4">
                        <a href="#"
                            class="w-10 h-10 bg-secondary-800 rounded-lg flex items-center justify-center hover:bg-primary-600 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-secondary-800 rounded-lg flex items-center justify-center hover:bg-primary-600 transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-secondary-800 rounded-lg flex items-center justify-center hover:bg-primary-600 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-secondary-800 rounded-lg flex items-center justify-center hover:bg-primary-600 transition-colors">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                    <p class="text-sm text-secondary-400">
                        Dapatkan update terbaru tentang layanan KUPING REZIM
                    </p>
                </div>
            </div>

            <div
                class="border-t border-secondary-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-secondary-400 text-sm">
                    © 2024 KUPING REZIM. Hak Cipta Dilindungi Undang-Undang.
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#"
                        class="text-secondary-400 hover:text-primary-400 text-sm transition-colors">Kebijakan
                        Privasi</a>
                    <a href="#"
                        class="text-secondary-400 hover:text-primary-400 text-sm transition-colors">Syarat &
                        Ketentuan</a>
                    <a href="#"
                        class="text-secondary-400 hover:text-primary-400 text-sm transition-colors">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Mobile menu toggle
        function toggleMobileMenu() {
            console.log('Mobile menu toggled');
            // Add mobile menu toggle logic here for Livewire
        }
    </script>
</body>

</html>
