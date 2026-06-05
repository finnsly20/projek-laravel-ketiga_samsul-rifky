<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenFarm - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-serif-custom { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-700 antialiased">

    <header class="bg-white border-b border-slate-100 sticky top-0 z-50 shadow-xs">
        <div class="container mx-auto max-w-7xl px-4 md:px-8 py-4 flex justify-between items-center">
            
            <a href="{{ route('home') }}" class="flex flex-col">
                <span class="font-serif-custom text-2xl font-bold text-[#5c4033] tracking-tight leading-none">Green</span>
                <span class="font-serif-custom text-xl font-bold text-[#7ca982] tracking-wide mt-0.5 pl-4">Farm</span>
            </a>

            <nav class="hidden lg:flex items-center gap-6 xl:gap-8 text-sm font-medium text-slate-600">
                <a href="{{ route('home') }}" class="text-emerald-600 font-semibold transition">Home</a>
                
                <div class="relative group py-2">
                    <button class="hover:text-emerald-600 transition flex items-center gap-1">
                        About Us <i class="fa-solid fa-chevron-down text-[10px] text-slate-400 group-hover:rotate-180 transition-transform duration-200"></i>
                    </button>
                    <div class="absolute right-0 mt-2 w-48 bg-white border border-slate-100 rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <a href="{{ route('about') }}" class="block px-4 py-2.5 text-xs text-slate-600 hover:bg-emerald-50 hover:text-emerald-700 rounded-t-xl transition">Our Profile</a>
                        <a href="#" class="block px-4 py-2.5 text-xs text-slate-600 hover:bg-emerald-50 hover:text-emerald-700 transition">Our History</a>
                        <a href="#" class="block px-4 py-2.5 text-xs text-slate-600 hover:bg-emerald-50 hover:text-emerald-700 rounded-b-xl transition">Certificates</a>
                    </div>
                </div>

                <!-- <a href="#" class="hover:text-emerald-600 transition">Distribution and FAQ</a>
                <a href="/tanaman" class="hover:text-emerald-600 transition">Our Products</a>
                <a href="#" class="hover:text-emerald-600 transition">Article</a>
                <a href="{{ route('contact') }}" class="hover:text-emerald-600 transition">Contact Us</a> -->
            </nav>

            </div>
    </header>

    <section class="relative min-h-[85vh] flex items-center justify-start bg-slate-900 overflow-hidden">
        
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1500937386664-56d1dfef3854?auto=format&fit=crop&w=1920&q=80" 
                 alt="Ladang Kebun Hijau" 
                 class="w-full h-full object-cover opacity-60 object-center">
            <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/30 to-transparent"></div>
        </div>

        <div class="container mx-auto max-w-7xl px-4 md:px-8 relative z-10 py-20 text-white">
            <div class="max-w-2xl space-y-6">
                
                <h1 class="text-5xl md:text-7xl font-black tracking-wide leading-tight drop-shadow-md">
                    FEEDING<br>THE FUTURE
                </h1>

                <p class="text-lg md:text-2xl font-medium tracking-wide text-slate-200 drop-shadow-xs">
                    Stronger Farmer, Healthy Food for Better Life
                </p>

                <div class="pt-4">
                    <a href