<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Invitation - Brandon & Meyca</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        .playfair {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-100 to-white">
    <div class="min-h-screen flex items-center">
        <div class="container mx-auto px-4 pt-0 pb-4 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-0 items-center">
                <!-- Left Content -->
                <div class="lg:col-span-5 px-5 pt-8 pb-4 lg:pt-12 lg:pb-4 hero-left">
                    <!-- Wedding Icon -->
                    <div class="mb-6">
                        <svg class="w-16 h-16" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="25" r="8" stroke="#1a1a1a" stroke-width="1.5" fill="none"/>
                            <circle cx="40" cy="25" r="8" stroke="#1a1a1a" stroke-width="1.5" fill="none"/>
                            <path d="M20 33 C20 45, 40 45, 40 33" stroke="#1a1a1a" stroke-width="1.5" fill="none"/>
                            <path d="M30 20 L30 15 M27 15 L33 15" stroke="#1a1a1a" stroke-width="1.5"/>
                        </svg>
                    </div>

                    <!-- Invitation Text -->
                    <p class="text-xs tracking-widest text-gray-600 font-normal mb-4">WEDDING INVITATION</p>

                    <!-- Couple Names -->
                    <h1 class="text-6xl lg:text-7xl font-bold leading-tight text-gray-900 mb-0 playfair">Brandon</h1>
                    <h1 class="text-6xl lg:text-7xl font-bold leading-tight text-gray-900 mb-6 playfair">& Meyca</h1>

                    <!-- Guest Name -->
                    <p class="text-xs tracking-widest text-gray-600 font-normal mb-2">DEAR SIR / MADAM</p>
                    <h5 class="text-lg font-bold mb-6 text-gray-900">Guests Name</h5>

                    <!-- Open Invitation Button -->
                    <button class="border-2 border-gray-900 px-12 py-3 bg-transparent text-gray-900 tracking-widest text-xs font-medium transition-all duration-300 hover:bg-gray-900 hover:text-white">
                        OPEN INVITATION
                    </button>
                </div>

                <!-- Right Content - Photo & Date -->
                <div class="lg:col-span-7 relative px-0 hero-right">
                    <!-- Photo Section -->
                    <div class="relative mt-4 lg:mt-6">
                        <div class="relative overflow-hidden shadow-lg" style="border-top-left-radius: 250px;">
                                <!-- Placeholder Image - Replace with actual photo -->
                                <img src="https://images.unsplash.com/photo-1583939003579-730e3918a45a?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                     alt="Brandon & Meyca"
                                 class="w-full h-[500px] lg:h-[600px] object-cover grayscale brightness-110 hero-image">

                                <!-- Decorative Floral Line -->
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 pb-4">
                                <svg class="opacity-30 w-full max-w-[500px]" viewBox="0 0 500 50" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0,25 Q50,15 100,25 T200,25 T300,25 T400,25 T500,25" stroke="#fff" stroke-width="1" fill="none" opacity="0.7"/>
                                        <circle cx="100" cy="25" r="3" fill="#fff" opacity="0.7"/>
                                        <circle cx="250" cy="25" r="4" fill="#fff" opacity="0.7"/>
                                        <circle cx="400" cy="25" r="3" fill="#fff" opacity="0.7"/>
                                    </svg>
                            </div>
                        </div>

                        <!-- Save The Date - Overlapping with image (half on image) -->
                        <div class="absolute top-0 right-0 text-center lg:text-right lg:pr-5 pt-0 lg:pt-0 z-10" style="transform: translateX(50%);">
                            <div class="text-7xl lg:text-8xl font-light text-gray-300 leading-none playfair">03</div>
                            <div class="text-7xl lg:text-8xl font-light text-gray-300 leading-none playfair">14</div>
                            <div class="text-7xl lg:text-8xl font-light text-gray-300 leading-none playfair">25</div>
                            <p class="text-base tracking-widest text-gray-400 font-light mt-4 leading-relaxed">
                                SAVE<br>THE<br>DATE
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bride & Groom Section -->
    <section class="bg-white pt-4 pb-4 relative overflow-hidden min-h-screen flex items-center bride-groom-section">
        <!-- Subtle Background Pattern -->
        <div class="absolute inset-0 opacity-[0.02] pointer-events-none">
            <div class="absolute top-20 left-10 w-32 h-32 border border-gray-400 rounded-full"></div>
            <div class="absolute bottom-20 right-10 w-24 h-24 border border-gray-400 rounded-full"></div>
            <div class="absolute top-1/2 left-1/4 w-16 h-16 border border-gray-400 rounded-full"></div>
        </div>
        <div class="container mx-auto px-4 sm:px-6 md:px-6 lg:px-8 xl:px-12 max-w-[95%] sm:max-w-[90%] md:max-w-6xl lg:max-w-7xl relative z-10">
            <div class="flex flex-col md:flex-row items-center justify-center gap-4 sm:gap-6 md:gap-6 lg:gap-10 xl:gap-14 2xl:gap-16">
                <!-- Bride Section -->
                <div class="flex flex-col items-center md:flex-row md:gap-2 lg:gap-4 xl:gap-6 md:items-center md:justify-end w-full md:w-auto md:flex-1 lg:flex-none">
                    <div class="text-center md:text-right mb-4 sm:mb-5 md:mb-0 order-2 md:order-1 w-full md:w-auto md:max-w-full overflow-hidden px-2 md:px-0 relative">
                        <!-- Decorative Line Above Name -->
                        <div class="hidden md:block absolute -top-3 md:-top-2 lg:-top-3 right-0 w-16 md:w-20 lg:w-24 h-px bg-gray-300"></div>
                        <!-- Decorative Dot -->
                        <div class="hidden md:block absolute -top-3 md:-top-2 lg:-top-3 right-0 w-1 h-1 bg-gray-400 rounded-full transform translate-x-full"></div>
                        <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-7xl font-bold text-gray-900 playfair mb-1 sm:mb-2 break-words leading-tight relative text-animate" style="writing-mode: vertical-rl; text-orientation: mixed;">
                            <span class="relative z-10">Meyca</span>
                        </h2>
                        <p class="text-[10px] sm:text-xs tracking-widest text-gray-600 font-normal mb-2 sm:mb-3 md:mb-4 text-animate" style="writing-mode: vertical-rl; text-orientation: mixed;">THE BRIDE</p>
                    </div>
                    <!-- Bride Photo with Rounded Corner -->
                    <div class="order-1 md:order-2 flex flex-col items-center w-full md:w-auto">
                        <div class="relative w-full md:w-[300px] lg:w-[380px] xl:w-[450px] 2xl:w-[500px] h-[500px] lg:h-[600px] flex-shrink-0 group overflow-hidden shadow-xl rounded-tr-[80px] sm:rounded-tr-[100px] md:rounded-tr-[120px] lg:rounded-tr-[140px] xl:rounded-tr-[160px] photo-animate">
                        <img src="https://images.unsplash.com/photo-1583939003579-730e3918a45a?w=400&h=500&fit=crop"
                             alt="Meyca"
                             class="w-full h-full object-cover grayscale absolute inset-0 transition-all duration-300 group-hover:grayscale-[85%]"
                             style="filter: grayscale(100%);">
                        <!-- Floral Decorative Elements -->
                        <div class="absolute -top-2 -right-2 w-6 h-6 opacity-30 hidden md:block">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full text-gray-400">
                                <path d="M12 2C12 8 6 10 6 10C6 10 12 12 12 18C12 12 18 10 18 10C18 10 12 8 12 2Z" stroke="currentColor" stroke-width="1" fill="none"/>
                            </svg>
                        </div>
                        <div class="absolute -bottom-2 -left-2 w-5 h-5 opacity-25 hidden md:block">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full text-gray-400">
                                <path d="M12 2C12 8 6 10 6 10C6 10 12 12 12 18C12 12 18 10 18 10C18 10 12 8 12 2Z" stroke="currentColor" stroke-width="1" fill="none"/>
                            </svg>
                        </div>
                        </div>
                        <!-- Social Media Icons -->
                        <div class="flex gap-1 sm:gap-1.5 md:gap-2 justify-center mt-3 sm:mt-4">
                            <div class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 bg-gray-200 rounded-sm flex items-center justify-center cursor-pointer transition-all duration-300 hover:bg-gray-300 hover:scale-110 hover:shadow-md">
                                <svg class="w-3 h-3 sm:w-3.5 sm:h-3.5 md:w-4 md:h-4 text-gray-400 transition-colors duration-300 hover:text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </div>
                            <div class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 bg-gray-200 rounded-sm flex items-center justify-center cursor-pointer transition-all duration-300 hover:bg-gray-300 hover:scale-110 hover:shadow-md">
                                <svg class="w-3 h-3 sm:w-3.5 sm:h-3.5 md:w-4 md:h-4 text-gray-400 transition-colors duration-300 hover:text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </div>
                            <div class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 bg-gray-200 rounded-sm flex items-center justify-center cursor-pointer transition-all duration-300 hover:bg-gray-300 hover:scale-110 hover:shadow-md">
                                <svg class="w-3 h-3 sm:w-3.5 sm:h-3.5 md:w-4 md:h-4 text-gray-400 transition-colors duration-300 hover:text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                            </div>
                            <div class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 bg-gray-200 rounded-sm flex items-center justify-center cursor-pointer transition-all duration-300 hover:bg-gray-300 hover:scale-110 hover:shadow-md">
                                <svg class="w-3 h-3 sm:w-3.5 sm:h-3.5 md:w-4 md:h-4 text-gray-400 transition-colors duration-300 hover:text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </div>
                            <div class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 bg-gray-200 rounded-sm flex items-center justify-center cursor-pointer transition-all duration-300 hover:bg-gray-300 hover:scale-110 hover:shadow-md">
                                <svg class="w-3 h-3 sm:w-3.5 sm:h-3.5 md:w-4 md:h-4 text-gray-400 transition-colors duration-300 hover:text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ampersand -->
                <div class="text-center my-4 sm:my-6 md:my-6 lg:my-0 flex items-center justify-center flex-shrink-0 px-2 md:px-0 relative">
                    <!-- Decorative Dots -->
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-gray-300 rounded-full opacity-40 hidden lg:block"></div>
                    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-gray-300 rounded-full opacity-40 hidden lg:block"></div>
                    <span class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl xl:text-9xl 2xl:text-[12rem] font-bold text-gray-900 playfair relative z-10 opacity-90">&</span>
                </div>

                <!-- Groom Section -->
                <div class="flex flex-col items-center md:flex-row md:gap-2 lg:gap-4 xl:gap-6 md:items-center md:justify-start w-full md:w-auto md:flex-1 lg:flex-none">
                    <!-- Groom Photo with Rounded Corner -->
                    <div class="order-1 md:order-1 flex flex-col items-center w-full md:w-auto">
                        <div class="relative w-full md:w-[300px] lg:w-[380px] xl:w-[450px] 2xl:w-[500px] h-[500px] lg:h-[600px] flex-shrink-0 group overflow-hidden shadow-xl rounded-tl-[80px] sm:rounded-tl-[100px] md:rounded-tl-[120px] lg:rounded-tl-[140px] xl:rounded-tl-[160px] photo-animate">
                        <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?w=400&h=500&fit=crop"
                             alt="Brandon"
                             class="w-full h-full object-cover grayscale absolute inset-0 transition-all duration-300 group-hover:grayscale-[85%]"
                             style="filter: grayscale(100%);">
                        <!-- Floral Decorative Elements -->
                        <div class="absolute -top-2 -left-2 w-6 h-6 opacity-30 hidden md:block">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full text-gray-400">
                                <path d="M12 2C12 8 6 10 6 10C6 10 12 12 12 18C12 12 18 10 18 10C18 10 12 8 12 2Z" stroke="currentColor" stroke-width="1" fill="none"/>
                            </svg>
                        </div>
                        <div class="absolute -bottom-2 -right-2 w-5 h-5 opacity-25 hidden md:block">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full text-gray-400">
                                <path d="M12 2C12 8 6 10 6 10C6 10 12 12 12 18C12 12 18 10 18 10C18 10 12 8 12 2Z" stroke="currentColor" stroke-width="1" fill="none"/>
                            </svg>
                        </div>
                        </div>
                        <!-- Social Media Icons -->
                        <div class="flex gap-1 sm:gap-1.5 md:gap-2 justify-center mt-3 sm:mt-4">
                            <div class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 bg-gray-200 rounded-sm flex items-center justify-center cursor-pointer transition-all duration-300 hover:bg-gray-300 hover:scale-110 hover:shadow-md">
                                <svg class="w-3 h-3 sm:w-3.5 sm:h-3.5 md:w-4 md:h-4 text-gray-400 transition-colors duration-300 hover:text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </div>
                            <div class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 bg-gray-200 rounded-sm flex items-center justify-center cursor-pointer transition-all duration-300 hover:bg-gray-300 hover:scale-110 hover:shadow-md">
                                <svg class="w-3 h-3 sm:w-3.5 sm:h-3.5 md:w-4 md:h-4 text-gray-400 transition-colors duration-300 hover:text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </div>
                            <div class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 bg-gray-200 rounded-sm flex items-center justify-center cursor-pointer transition-all duration-300 hover:bg-gray-300 hover:scale-110 hover:shadow-md">
                                <svg class="w-3 h-3 sm:w-3.5 sm:h-3.5 md:w-4 md:h-4 text-gray-400 transition-colors duration-300 hover:text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                            </div>
                            <div class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 bg-gray-200 rounded-sm flex items-center justify-center cursor-pointer transition-all duration-300 hover:bg-gray-300 hover:scale-110 hover:shadow-md">
                                <svg class="w-3 h-3 sm:w-3.5 sm:h-3.5 md:w-4 md:h-4 text-gray-400 transition-colors duration-300 hover:text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </div>
                            <div class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 bg-gray-200 rounded-sm flex items-center justify-center cursor-pointer transition-all duration-300 hover:bg-gray-300 hover:scale-110 hover:shadow-md">
                                <svg class="w-3 h-3 sm:w-3.5 sm:h-3.5 md:w-4 md:h-4 text-gray-400 transition-colors duration-300 hover:text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="text-center md:text-left order-2 md:order-2 w-full md:w-auto md:max-w-full overflow-hidden px-2 md:px-0 relative">
                        <!-- Decorative Line Above Name -->
                        <div class="hidden md:block absolute -top-3 md:-top-2 lg:-top-3 left-0 w-16 md:w-20 lg:w-24 h-px bg-gray-300"></div>
                        <!-- Decorative Dot -->
                        <div class="hidden md:block absolute -top-3 md:-top-2 lg:-top-3 left-0 w-1 h-1 bg-gray-400 rounded-full transform -translate-x-full"></div>
                        <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-7xl font-bold text-gray-900 playfair mb-1 sm:mb-2 break-words leading-tight relative text-animate" style="writing-mode: vertical-rl; text-orientation: mixed;">
                            <span class="relative z-10">Brandon</span>
                        </h2>
                        <p class="text-[10px] sm:text-xs tracking-widest text-gray-600 font-normal mb-2 sm:mb-3 md:mb-4 text-animate" style="writing-mode: vertical-rl; text-orientation: mixed;">THE GROOM</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wedding Day Section -->
    <section class="bg-white py-16 md:py-24 relative overflow-hidden min-h-screen flex items-center wedding-day-section">
        <div class="container mx-auto px-4 sm:px-6 md:px-8 max-w-6xl">
            <!-- Title -->
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-center text-gray-900 playfair mb-12 text-animate">Wedding Day</h2>

            <!-- Countdown Timer -->
            <div class="flex justify-center gap-4 md:gap-6 mb-12">
                <div class="bg-gray-100 rounded-lg px-6 py-8 text-center min-w-[120px] md:min-w-[140px] countdown-item">
                    <div class="text-3xl md:text-4xl font-bold text-gray-800 mb-2" id="days">215</div>
                    <div class="text-xs md:text-sm text-gray-600 tracking-wider">Days</div>
                </div>
                <div class="bg-gray-100 rounded-lg px-6 py-8 text-center min-w-[120px] md:min-w-[140px] countdown-item">
                    <div class="text-3xl md:text-4xl font-bold text-gray-800 mb-2" id="hours">19</div>
                    <div class="text-xs md:text-sm text-gray-600 tracking-wider">Hours</div>
                </div>
                <div class="bg-gray-100 rounded-lg px-6 py-8 text-center min-w-[120px] md:min-w-[140px] countdown-item">
                    <div class="text-3xl md:text-4xl font-bold text-gray-800 mb-2" id="minutes">11</div>
                    <div class="text-xs md:text-sm text-gray-600 tracking-wider">Minutes</div>
                </div>
                <div class="bg-gray-100 rounded-lg px-6 py-8 text-center min-w-[120px] md:min-w-[140px] countdown-item">
                    <div class="text-3xl md:text-4xl font-bold text-gray-800 mb-2" id="seconds">05</div>
                    <div class="text-xs md:text-sm text-gray-600 tracking-wider">Seconds</div>
                </div>
            </div>

            <!-- Ceremony Section -->
            <div class="mb-16 event-section">
                <div class="flex justify-center items-center pt-12 mb-12">
                    <svg class="w-full max-w-4xl opacity-40" viewBox="0 0 1200 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Left line with dot -->
                        <circle cx="0" cy="10" r="1.5" fill="#6b7280"/>
                        <line x1="0" y1="10" x2="500" y2="10" stroke="#9ca3af" stroke-width="0.5"/>

                        <!-- Center geometric pattern -->
                        <line x1="520" y1="5" x2="520" y2="15" stroke="#6b7280" stroke-width="0.5"/>
                        <line x1="520" y1="10" x2="680" y2="10" stroke="#9ca3af" stroke-width="0.5"/>
                        <line x1="680" y1="5" x2="680" y2="15" stroke="#6b7280" stroke-width="0.5"/>

                        <!-- Right line with dot -->
                        <line x1="700" y1="10" x2="1200" y2="10" stroke="#9ca3af" stroke-width="0.5"/>
                        <circle cx="1200" cy="10" r="1.5" fill="#6b7280"/>
                    </svg>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold text-center text-gray-900 playfair mb-12 text-animate">Ceremony</h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12 mb-8">
                    <!-- Date -->
                    <div class="text-center">
                        <p class="text-xs md:text-sm text-gray-600 tracking-wider mb-2">Date</p>
                        <p class="text-xl md:text-2xl font-bold text-gray-900">14 Mar 2025</p>
                    </div>

                    <!-- Location -->
                    <div class="text-center">
                        <p class="text-xs md:text-sm text-gray-600 tracking-wider mb-2">Location</p>
                        <p class="text-xl md:text-2xl font-bold text-gray-900 mb-1">The Great Hall</p>
                        <p class="text-sm text-gray-600">Your Happiest Day Street, Number 1234</p>
                    </div>

                    <!-- Time -->
                    <div class="text-center">
                        <p class="text-xs md:text-sm text-gray-600 tracking-wider mb-2">Time</p>
                        <p class="text-xl md:text-2xl font-bold text-gray-900">08 AM - Till Finish</p>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mt-8">
                    <button class="border-2 border-gray-900 px-8 py-3 bg-transparent text-gray-900 tracking-widest text-xs font-medium transition-all duration-300 hover:bg-gray-900 hover:text-white flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        VIEW LOCATION
                    </button>
                    <button class="border-2 border-gray-900 px-8 py-3 bg-transparent text-gray-900 tracking-widest text-xs font-medium transition-all duration-300 hover:bg-gray-900 hover:text-white flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        ADD TO CALENDAR
                    </button>
                </div>
            </div>

            <!-- Reception Section -->
            <div class="event-section">
                <div class="flex justify-center items-center pt-12 mb-12">
                    <svg class="w-full max-w-4xl opacity-40" viewBox="0 0 1200 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Left line with dot -->
                        <circle cx="0" cy="10" r="1.5" fill="#6b7280"/>
                        <line x1="0" y1="10" x2="500" y2="10" stroke="#9ca3af" stroke-width="0.5"/>

                        <!-- Center geometric pattern -->
                        <line x1="520" y1="5" x2="520" y2="15" stroke="#6b7280" stroke-width="0.5"/>
                        <line x1="520" y1="10" x2="680" y2="10" stroke="#9ca3af" stroke-width="0.5"/>
                        <line x1="680" y1="5" x2="680" y2="15" stroke="#6b7280" stroke-width="0.5"/>

                        <!-- Right line with dot -->
                        <line x1="700" y1="10" x2="1200" y2="10" stroke="#9ca3af" stroke-width="0.5"/>
                        <circle cx="1200" cy="10" r="1.5" fill="#6b7280"/>
                    </svg>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold text-center text-gray-900 playfair mb-12 text-animate">Reception</h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12 mb-8">
                    <!-- Date -->
                    <div class="text-center">
                        <p class="text-xs md:text-sm text-gray-600 tracking-wider mb-2">Date</p>
                        <p class="text-xl md:text-2xl font-bold text-gray-900">14 Mar 2025</p>
                    </div>

                    <!-- Location -->
                    <div class="text-center">
                        <p class="text-xs md:text-sm text-gray-600 tracking-wider mb-2">Location</p>
                        <p class="text-xl md:text-2xl font-bold text-gray-900 mb-1">Alilas Uluwatu Village</p>
                        <p class="text-sm text-gray-600">Your Happiest Day Street, Number 1234</p>
                    </div>

                    <!-- Time -->
                    <div class="text-center">
                        <p class="text-xs md:text-sm text-gray-600 tracking-wider mb-2">Time</p>
                        <p class="text-xl md:text-2xl font-bold text-gray-900">07 PM - Till Finish</p>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mt-8">
                    <button class="border-2 border-gray-900 px-8 py-3 bg-transparent text-gray-900 tracking-widest text-xs font-medium transition-all duration-300 hover:bg-gray-900 hover:text-white flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        VIEW LOCATION
                    </button>
                    <button class="border-2 border-gray-900 px-8 py-3 bg-transparent text-gray-900 tracking-widest text-xs font-medium transition-all duration-300 hover:bg-gray-900 hover:text-white flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        ADD TO CALENDAR
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Live Streaming & Video Section -->
    <section class="bg-white video-section min-h-screen flex flex-col">
        <!-- Top Section - Live Streaming -->
        <div class="bg-white py-16 md:py-24 pb-20 md:pb-32">
            <div class="container mx-auto px-4 sm:px-6 md:px-8 max-w-6xl">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-center text-gray-900 playfair mb-4 text-animate">Live Streaming</h2>
                <p class="text-center text-gray-600 mb-8 text-sm md:text-base">We will broadcast the wedding ceremony virtually</p>
                <div class="flex justify-center">
                    <button class="border-2 border-gray-900 px-8 py-3 bg-transparent text-gray-900 tracking-widest text-xs font-medium transition-all duration-300 hover:bg-gray-900 hover:text-white flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                        ACCESS LIVE STREAMING
                    </button>
                </div>
            </div>
        </div>

        <!-- Bottom Section - Video Player (Overlapping) -->
        <div class="flex-1 bg-gray-800 pt-0">
            <div class="container mx-auto px-4 sm:px-6 md:px-8 max-w-6xl -mt-16 md:-mt-24 relative z-10">
                <!-- YouTube Video Embed -->
                <div class="relative w-full bg-gray-900 rounded-lg overflow-hidden shadow-2xl" style="padding-bottom: 56.25%; height: 0; overflow: hidden;">
                    <iframe
                        class="absolute top-0 left-0 w-full h-full"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                        title="Wedding Video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="bg-gray-800 py-16 md:py-24 gallery-section min-h-screen flex items-center">
        <div class="container mx-auto px-4 sm:px-6 md:px-8 max-w-6xl">
            <!-- Title -->
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-center text-white playfair mb-4 text-animate">
                <span class="tracking-widest text-sm md:text-base font-normal text-gray-400 block mb-2">GALLERY</span>
                Our Moments
            </h2>

            <!-- Gallery Grid - Creative Layout -->
            <div class="grid grid-cols-4 gap-2 md:gap-3 mt-12 md:mt-16" style="grid-template-rows: repeat(4, minmax(0, 1fr));">
                <!-- Photo 1 - Top Left (Medium) -->
                <div class="col-span-2 row-span-2 overflow-hidden group gallery-item">
                    <img src="https://images.unsplash.com/photo-1583939003579-730e3918a45a?w=600&h=800&fit=crop"
                         alt="Wedding Moment 1"
                         class="w-full h-full object-cover grayscale transition-all duration-700 hover:grayscale-0">
                </div>

                <!-- Photo 2 - Top Right (Small) -->
                <div class="col-span-2 row-span-1 overflow-hidden group gallery-item">
                    <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?w=600&h=800&fit=crop"
                         alt="Wedding Moment 2"
                         class="w-full h-full object-cover grayscale transition-all duration-700 hover:grayscale-0">
                </div>

                <!-- Photo 3 - Middle Right Top (Small) -->
                <div class="col-span-1 row-span-1 overflow-hidden group gallery-item">
                    <img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=600&h=800&fit=crop"
                         alt="Wedding Moment 3"
                         class="w-full h-full object-cover grayscale transition-all duration-700 hover:grayscale-0">
                </div>

                <!-- Photo 4 - Middle Right Bottom (Small) -->
                <div class="col-span-1 row-span-1 overflow-hidden group gallery-item">
                    <img src="https://images.unsplash.com/photo-1465495976277-4387d4b0b4c6?w=600&h=800&fit=crop"
                         alt="Wedding Moment 4"
                         class="w-full h-full object-cover grayscale transition-all duration-700 hover:grayscale-0">
                </div>

                <!-- Photo 5 - Bottom Left (Small) -->
                <div class="col-span-1 row-span-2 overflow-hidden group gallery-item">
                    <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?w=600&h=800&fit=crop"
                         alt="Wedding Moment 5"
                         class="w-full h-full object-cover grayscale transition-all duration-700 hover:grayscale-0">
                </div>

                <!-- Photo 6 - Bottom Right (Large) -->
                <div class="col-span-3 row-span-2 overflow-hidden group gallery-item">
                    <img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=600&h=800&fit=crop"
                         alt="Wedding Moment 6"
                         class="w-full h-full object-cover grayscale transition-all duration-700 hover:grayscale-0">
                </div>
            </div>
        </div>
    </section>

    <script>
        // Button click handlers
        document.addEventListener('DOMContentLoaded', function() {
            // Open invitation button
            const openInvitationBtn = document.querySelector('.hero-left button');
            if (openInvitationBtn) {
                openInvitationBtn.addEventListener('click', function() {
                    alert('Opening invitation...');
                });
            }

            // View location buttons
            const viewLocationBtns = document.querySelectorAll('button:has(svg)');
            viewLocationBtns.forEach(btn => {
                if (btn.textContent.includes('VIEW LOCATION')) {
                    btn.addEventListener('click', function() {
                        alert('Opening location...');
                    });
                } else if (btn.textContent.includes('ADD TO CALENDAR')) {
                    btn.addEventListener('click', function() {
                        alert('Adding to calendar...');
                    });
                }
            });
        });

        // Countdown Timer
        function updateCountdown() {
            // Set target date: March 14, 2025
            const targetDate = new Date('2025-03-14T08:00:00').getTime();
            const now = new Date().getTime();
            const distance = targetDate - now;

            if (distance > 0) {
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById('days').textContent = days;
                document.getElementById('hours').textContent = hours;
                document.getElementById('minutes').textContent = minutes;
                document.getElementById('seconds').textContent = seconds;
            } else {
                document.getElementById('days').textContent = '0';
                document.getElementById('hours').textContent = '0';
                document.getElementById('minutes').textContent = '0';
                document.getElementById('seconds').textContent = '0';
            }
        }

        // Update countdown every second
        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>
</body>
</html>
