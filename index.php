<?php
// ==========================================
// 1. DATABASE SEMENTARA (MOCK DATA) - GAMBAR DIPERBARUI
// ==========================================
$stories = [
    // --- BERITA UTAMA (HERO) ---
    [
        "id" => 1,
        "kategori" => "BUSINESS",
        "color" => "text-blue-600",
        "judul" => "IHSG Menguat Signifikan Pasca Pengumuman Suku Bunga",
        "tanggal" => "2 Des 2025",
        "penulis" => "Sarah Jenkins",
        // Gambar Pasar Saham/Finance
        "img" => "https://images.unsplash.com/photo-1611974765270-ca1258634369?q=80&w=800&auto=format&fit=crop",
        "isi" => "Indeks Harga Saham Gabungan (IHSG) ditutup menguat signifikan pada perdagangan hari ini..."
    ],
    // --- LIST BERITA TERBARU ---
    [
        "id" => 2,
        "kategori" => "TECHNOLOGY",
        "color" => "text-purple-600",
        "judul" => "Revolusi AI: Robot Humanoid Mulai Bekerja di Pabrik Mobil",
        "tanggal" => "1 Des 2025",
        "penulis" => "David Kim",
        // Gambar Robot Futuristis
        "img" => "https://images.unsplash.com/photo-1485827404703-89b55fcc595e?q=80&w=800&auto=format&fit=crop",
        "isi" => "Pabrikan otomotif terkemuka mulai mengerahkan robot humanoid berbasis AI..."
    ],
    [
        "id" => 3,
        "kategori" => "LIFESTYLE",
        "color" => "text-green-600",
        "judul" => "Tren 'Slow Living': Mengapa Gen Z Meninggalkan Kota?",
        "tanggal" => "30 Nov 2025",
        "penulis" => "Amanda Putri",
        // Gambar Suasana Tenang/Alam
        "img" => "https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=800&auto=format&fit=crop",
        "isi" => "Fenomena perpindahan anak muda ke desa-desa wisata semakin marak..."
    ],
    [
        "id" => 4,
        "kategori" => "POLITICS",
        "color" => "text-red-600",
        "judul" => "KTT Perubahan Iklim: Sepakati Dana Hijau Baru",
        "tanggal" => "29 Nov 2025",
        "penulis" => "John Doe",
        // Gambar Konferensi PBB
        "img" => "https://images.unsplash.com/photo-1569163139599-0f4517e36b51?q=80&w=800&auto=format&fit=crop",
        "isi" => "Kesepakatan bersejarah tercapai di hari terakhir KTT..."
    ],
    // --- DATA UNTUK REKOMENDASI (EDITORS' PICKS) ---
    [
        "id" => 5,
        "kategori" => "BUSINESS",
        "color" => "text-blue-600",
        "judul" => "Startup Unicorn Baru Muncul di Asia Tenggara",
        "tanggal" => "28 Nov 2025",
        "penulis" => "Budi Santoso",
        // Gambar Tim Startup Modern
        "img" => "https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=800&auto=format&fit=crop",
        "isi" => "Laporan terbaru menunjukkan pertumbuhan ekosistem startup yang pesat..."
    ],
    [
        "id" => 6,
        "kategori" => "TECHNOLOGY",
        "color" => "text-purple-600",
        "judul" => "Smartphone Layar Gulung Siap Rilis Tahun Depan",
        "tanggal" => "28 Nov 2025",
        "penulis" => "Tech Insider",
        // Gambar Gadget/Chip Canggih
        "img" => "https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=800&auto=format&fit=crop",
        "isi" => "Inovasi layar gulung (rollable) diprediksi akan menggantikan tren layar lipat..."
    ],
    [
        "id" => 7,
        "kategori" => "POLITICS",
        "color" => "text-red-600",
        "judul" => "Debat Parlemen Memanas Terkait RUU Digital",
        "tanggal" => "27 Nov 2025",
        "penulis" => "Political Observer",
        // Gambar Gedung Parlemen/Pemerintahan
        "img" => "https://images.unsplash.com/photo-1575320181282-9afab399332c?q=80&w=800&auto=format&fit=crop",
        "isi" => "Anggota parlemen saling adu argumen mengenai pasal privasi data..."
    ],
    [
        "id" => 8,
        "kategori" => "BUSINESS",
        "color" => "text-blue-600",
        "judul" => "Tips Investasi Emas untuk Pemula di 2025",
        "tanggal" => "26 Nov 2025",
        "penulis" => "Financial Advisor",
        // Gambar Emas/Investasi
        "img" => "https://images.unsplash.com/photo-1605792657660-596af9009e82?q=80&w=800&auto=format&fit=crop",
        "isi" => "Emas tetap menjadi instrumen safe haven favorit di tengah ketidakpastian..."
    ]
];

$page = 'home';
$active_story = null;
$kategori_aktif = 'ALL'; 

if (isset($_GET['kategori'])) {
    $kategori_aktif = $_GET['kategori'];
}

// Jika User Klik Berita (Detail)
if (isset($_GET['id'])) {
    $page = 'detail';
    $id = $_GET['id'];
    foreach ($stories as $s) {
        if ($s['id'] == $id) {
            $active_story = $s;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Insight News App</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Lora:ital,wght@0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { navy: '#0A2540', secondary: '#475569' },
                    fontFamily: { serif: ['Lora', 'serif'], sans: ['Inter', 'sans-serif'] }
                }
            }
        }
    </script>
    <style>
        .hide-scroll::-webkit-scrollbar { display: none; }
        .hide-scroll { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-gray-100 font-sans text-slate-800">

    <div class="max-w-[480px] mx-auto bg-white min-h-screen shadow-2xl relative overflow-hidden">

        <?php if ($page == 'home'): ?>
        
        <div class="px-6 pt-12 pb-4 bg-white sticky top-0 z-20 border-b border-gray-100 flex justify-between items-center">
            <div>
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1"><?php echo date('l, d M Y'); ?></p>
                <h1 class="font-serif text-3xl font-bold text-navy">Insight.</h1>
            </div>
            <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-navy cursor-pointer hover:bg-gray-200 transition">
                <i class="ph ph-user text-xl"></i>
            </div>
        </div>

        <div class="pb-24 overflow-y-auto h-screen hide-scroll">
            
            <div class="px-6 mt-4 mb-6">
                <div class="flex gap-6 overflow-x-auto hide-scroll pb-2">
                    <a href="index.php" class="<?php echo $kategori_aktif == 'ALL' ? 'text-navy border-navy' : 'text-gray-400 border-transparent'; ?> font-bold border-b-2 pb-1 text-sm whitespace-nowrap transition">Top Stories</a>
                    <a href="?kategori=BUSINESS" class="<?php echo $kategori_aktif == 'BUSINESS' ? 'text-navy border-navy' : 'text-gray-400 border-transparent'; ?> font-bold border-b-2 pb-1 text-sm whitespace-nowrap transition hover:text-navy">Business</a>
                    <a href="?kategori=TECHNOLOGY" class="<?php echo $kategori_aktif == 'TECHNOLOGY' ? 'text-navy border-navy' : 'text-gray-400 border-transparent'; ?> font-bold border-b-2 pb-1 text-sm whitespace-nowrap transition hover:text-navy">Technology</a>
                    <a href="?kategori=POLITICS" class="<?php echo $kategori_aktif == 'POLITICS' ? 'text-navy border-navy' : 'text-gray-400 border-transparent'; ?> font-bold border-b-2 pb-1 text-sm whitespace-nowrap transition hover:text-navy">Politics</a>
                </div>
            </div>

            <?php if ($kategori_aktif == 'ALL'): ?>
                <div class="px-6 mb-8">
                    <a href="?id=<?php echo $stories[0]['id']; ?>" class="block group">
                        <div class="relative h-80 rounded-2xl overflow-hidden shadow-lg">
                            <img src="<?php echo $stories[0]['img']; ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-navy/90 via-navy/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 p-6">
                                <span class="bg-blue-600 text-white text-[10px] font-bold px-2 py-1 rounded mb-2 inline-block">TRENDING</span>
                                <h2 class="font-serif text-2xl font-bold text-white leading-snug mb-2 shadow-sm"><?php echo $stories[0]['judul']; ?></h2>
                                <p class="text-gray-300 text-xs flex items-center gap-2"><span>3 min read</span> &bull; <span><?php echo $stories[0]['penulis']; ?></span></p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="px-6 space-y-6">
                    <h3 class="font-bold text-lg text-navy border-l-4 border-navy pl-3">Latest News</h3>
                    <?php 
                    $count = 0;
                    foreach ($stories as $item): 
                        if ($item['id'] == 1) continue; // Skip Hero
                        if ($count >= 3) break; // Batasi cuma 3 berita di sini
                        $count++;
                    ?>
                        <a href="?id=<?php echo $item['id']; ?>" class="flex gap-4 group cursor-pointer border-b border-gray-100 pb-4 last:border-0">
                            <div class="w-24 h-24 rounded-xl overflow-hidden flex-shrink-0 bg-gray-200">
                                <img src="<?php echo $item['img']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                            </div>
                            <div class="flex flex-col justify-between py-1">
                                <span class="text-[10px] font-bold <?php echo $item['color']; ?> tracking-wider uppercase"><?php echo $item['kategori']; ?></span>
                                <h4 class="font-serif font-bold text-base leading-snug text-navy group-hover:text-blue-600 transition line-clamp-2"><?php echo $item['judul']; ?></h4>
                                <span class="text-xs text-gray-400"><?php echo $item['tanggal']; ?></span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>

                <div class="mt-10 bg-slate-50 py-8 border-t border-gray-200">
                    <div class="px-6 mb-4">
                        <h3 class="font-serif text-xl font-bold text-navy">Editors' Picks</h3>
                        <p class="text-xs text-gray-500">Curated specifically for you</p>
                    </div>

                    <div class="px-6 mb-6">
                        <h4 class="text-xs font-bold text-blue-600 uppercase mb-3 border-b border-blue-100 pb-1">Recommended: Business</h4>
                        <?php foreach($stories as $s): if($s['kategori'] == 'BUSINESS' && $s['id'] != 1): ?>
                            <a href="?id=<?php echo $s['id']; ?>" class="block bg-white p-3 rounded-xl shadow-sm border border-gray-100 mb-3 hover:shadow-md transition">
                                <h5 class="font-bold text-sm text-navy mb-1 line-clamp-1"><?php echo $s['judul']; ?></h5>
                                <p class="text-[10px] text-gray-400">By <?php echo $s['penulis']; ?></p>
                            </a>
                        <?php endif; endforeach; ?>
                    </div>

                    <div class="px-6 grid grid-cols-2 gap-4">
                        <div>
                            <h4 class="text-xs font-bold text-purple-600 uppercase mb-3 border-b border-purple-100 pb-1">Tech Radar</h4>
                            <?php foreach($stories as $s): if($s['kategori'] == 'TECHNOLOGY' && $s['id'] != 2): ?>
                                <a href="?id=<?php echo $s['id']; ?>" class="block mb-2 group">
                                    <div class="h-24 rounded-lg overflow-hidden mb-2"><img src="<?php echo $s['img']; ?>" class="w-full h-full object-cover"></div>
                                    <h5 class="font-bold text-xs text-navy group-hover:text-purple-600 line-clamp-2"><?php echo $s['judul']; ?></h5>
                                </a>
                            <?php endif; endforeach; ?>
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-red-600 uppercase mb-3 border-b border-red-100 pb-1">Politics</h4>
                            <?php foreach($stories as $s): if($s['kategori'] == 'POLITICS'): ?>
                                <a href="?id=<?php echo $s['id']; ?>" class="block mb-2 group">
                                    <div class="h-24 rounded-lg overflow-hidden mb-2"><img src="<?php echo $s['img']; ?>" class="w-full h-full object-cover"></div>
                                    <h5 class="font-bold text-xs text-navy group-hover:text-red-600 line-clamp-2"><?php echo $s['judul']; ?></h5>
                                </a>
                            <?php endif; endforeach; ?>
                        </div>
                    </div>
                </div>

            <?php else: ?>
                <div class="px-6 space-y-6 mt-4">
                    <h3 class="font-bold text-xl text-navy">Category: <?php echo ucfirst(strtolower($kategori_aktif)); ?></h3>
                    <?php 
                    $found = false;
                    foreach ($stories as $item): 
                        if ($item['kategori'] == $kategori_aktif):
                        $found = true;
                    ?>
                        <a href="?id=<?php echo $item['id']; ?>" class="block group cursor-pointer border-b border-gray-100 pb-6 last:border-0">
                            <div class="h-48 rounded-xl overflow-hidden mb-3 shadow-sm bg-gray-200">
                                <img src="<?php echo $item['img']; ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>
                            <span class="text-[10px] font-bold <?php echo $item['color']; ?> tracking-wider uppercase"><?php echo $item['kategori']; ?></span>
                            <h4 class="font-serif font-bold text-lg leading-snug text-navy group-hover:text-blue-600 transition mt-1"><?php echo $item['judul']; ?></h4>
                            <p class="text-xs text-gray-500 mt-2 line-clamp-2 text-justify"><?php echo strip_tags($item['isi']); ?></p>
                        </a>
                    <?php 
                        endif;
                    endforeach; 
                    
                    if (!$found): ?>
                        <div class="text-center py-10 text-gray-400">Belum ada berita di kategori ini.</div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

        </div>

        <div class="absolute bottom-0 w-full bg-white/95 backdrop-blur border-t border-gray-200 py-3 px-6 flex justify-between items-center z-30">
            <a href="index.php" class="flex flex-col items-center text-navy gap-1"><i class="ph ph-house-fill text-2xl"></i><span class="text-[10px] font-bold">Home</span></a>
            <a href="#" class="flex flex-col items-center text-gray-400 hover:text-navy gap-1"><i class="ph ph-compass text-2xl"></i><span class="text-[10px] font-medium">Explore</span></a>
            <a href="#" class="flex flex-col items-center text-gray-400 hover:text-navy gap-1"><i class="ph ph-bookmark-simple text-2xl"></i><span class="text-[10px] font-medium">Saved</span></a>
        </div>


        <?php elseif ($page == 'detail' && $active_story): ?>
        <div class="bg-white min-h-screen pb-10 animate-[fadeIn_0.3s_ease-out]">
            <div class="sticky top-0 bg-white/90 backdrop-blur z-40 px-6 py-4 flex justify-between items-center border-b border-gray-100 shadow-sm">
                <a href="index.php" class="p-2 -ml-2 rounded-full hover:bg-gray-100 text-navy transition"><i class="ph ph-arrow-left text-2xl"></i></a>
                <div class="flex gap-2">
                    <button class="p-2 rounded-full hover:bg-gray-100 text-navy"><i class="ph ph-text-aa text-xl"></i></button>
                    <button class="p-2 rounded-full hover:bg-gray-100 text-navy"><i class="ph ph-share-network text-xl"></i></button>
                </div>
            </div>
            <div class="px-6">
                <span class="<?php echo $active_story['color']; ?> font-bold text-xs tracking-widest uppercase mt-6 block mb-3"><?php echo $active_story['kategori']; ?> &mdash; Analysis</span>
                <h1 class="font-serif text-3xl font-bold text-navy leading-tight mb-4"><?php echo $active_story['judul']; ?></h1>
                <div class="flex items-center gap-3 mb-6 border-b border-gray-100 pb-6">
                    <div class="w-10 h-10 rounded-full bg-gray-200 overflow-hidden"><img src="https://ui-avatars.com/api/?name=<?php echo urlencode($active_story['penulis']); ?>&background=random" class="w-full h-full"></div>
                    <div>
                        <p class="text-sm font-bold text-navy"><?php echo $active_story['penulis']; ?></p>
                        <p class="text-xs text-gray-500"><?php echo $active_story['tanggal']; ?> &bull; 5 min read</p>
                    </div>
                </div>
                <div class="rounded-xl overflow-hidden mb-8 shadow-md"><img src="<?php echo $active_story['img']; ?>" class="w-full h-full object-cover"></div>
                <div class="font-serif text-lg leading-relaxed text-gray-700 space-y-6 mb-20">
                    <p class="first-letter:text-5xl first-letter:font-bold first-letter:float-left first-letter:mr-3 first-letter:text-navy first-letter:mt-[-6px]"><?php echo strip_tags($active_story['isi']); ?></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <blockquote class="border-l-4 border-navy pl-4 italic text-navy text-xl font-medium my-6">"Teknologi bukan sekadar alat, melainkan perpanjangan dari potensi manusia itu sendiri."</blockquote>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
        </div>
        <?php else: ?>
            <div class="h-screen flex flex-col items-center justify-center p-10 text-center"><h2 class="text-xl font-bold text-navy mb-2">Berita Tidak Ditemukan</h2><a href="index.php" class="text-blue-600 underline">Kembali ke Home</a></div>
        <?php endif; ?>

    </div>
</body>
</html>                 