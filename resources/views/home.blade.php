<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenSpace - Home</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-serif-custom { font-family: 'Playfair Display', serif; }
        
        /* Efek Zoom Lambat Background */
        .zoom-bg {
            animation: slowZoom 20s ease-out infinite alternate;
        }
        @keyframes slowZoom {
            from { transform: scale(1); }
            to { transform: scale(1.15); }
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-700 antialiased overflow-x-hidden">

    <header class="bg-white/80 backdrop-blur-md border-b border-slate-100 sticky top-0 z-50 shadow-xs transition-all duration-300"
            data-aos="fade-down" 
            data-aos-duration="1000">
        
        <div class="container mx-auto max-w-7xl px-4 md:px-8 py-4 flex justify-between items-center">
            
            <a href="{{ route('home') }}" class="flex flex-col group">
                <span class="font-serif-custom text-2xl font-bold text-[#7ca982] tracking-tight leading-none group-hover:text-emerald-600 transition-colors duration-300">Green</span>
                <span class="font-serif-custom text-xl font-bold text-[#5c4033] tracking-wide mt-0.5 pl-4">Space</span>
            </a>

            <nav class="hidden lg:flex items-center gap-6 xl:gap-8 text-sm font-medium text-slate-600">
                <a href="{{ route('home') }}" class="text-emerald-600 font-semibold transition">Home</a>
                <a href="{{ route('about') }}" class="hover:text-emerald-600 transition">About</a>
            </nav>

        </div>
    </header>

    <section class="relative min-h-[88vh] flex items-center justify-start bg-slate-950 overflow-hidden">
        
        <div class="absolute inset-0 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?q=80&w=1920&auto=format&fit=crop" 
                 alt="Tanaman Hidroponik Modern" 
                 class="w-full h-full object-cover opacity-40 object-center zoom-bg">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950/90 via-slate-950/40 to-transparent"></div>
        </div>

        <div class="container mx-auto max-w-7xl px-4 md:px-8 relative z-10 py-24 text-white">
            <div class="max-w-2xl space-y-8">
                
                <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight leading-tight"
                    data-aos="fade-up"
                    data-aos-duration="1200"
                    data-aos-easing="ease-out-cubic">
                    Hidroponik <br><span class="text-emerald-400">Dan Edukasi</span>
                </h1>

                <p class="text-lg md:text-xl font-normal leading-relaxed text-slate-300 tracking-wide"
                    data-aos="fade-up"
                    data-aos-delay="300"
                    data-aos-duration="1200"
                    data-aos-easing="ease-out-cubic">
                    "Pahami Caranya, Petik Hasilnya: Belajar dan Tanam Hidroponikmu Sekarang!"
                </p>

                <div class="pt-2"
                     data-aos="fade-up"
                     data-aos-delay="600"
                     data-aos-duration="1200"
                     data-aos-easing="ease-out-cubic">
                    <a href="/tanaman" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-500 text-white font-medium px-8 py-3.5 rounded-xl text-sm tracking-wide transition-all duration-300 hover:scale-105 active:scale-98 shadow-lg shadow-emerald-900/30 group">
                        Mulai Belajar 
                        <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>

            </div>
        </div>

    </section>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Mengaktifkan library AOS
        AOS.init({
            once: true 
        });
    </script>
</body>
</html>