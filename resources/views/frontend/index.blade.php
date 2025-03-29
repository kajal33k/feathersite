<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black">
    {{-- navbar --}}
    <nav class="bg-black text-gray-400 shadow-[#7f7f4b] shadow-lg">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-[#FFFF00] drop-shadow-[0_0_5px_#FFFF00]">
               Feather Site
              </a>
              
            <button id="menu-toggle" class="md:hidden text-[#FFFF00] focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            <ul id="menu" class="hidden md:flex space-x-6 font-semibold">
                <li><a href="#" class="hover:text-black font-bold text-[#FFFF00] drop-shadow-[0_0_5px_#FFFF00]">Home</a></li>
                <li><a href="#" class="hover:text-black font-bold text-[#FFFF00] drop-shadow-[0_0_5px_#FFFF00]">About</a></li>
                <li><a href="#" class="hover:text-black font-bold text-[#FFFF00] drop-shadow-[0_0_5px_#FFFF00]">Services</a></li>
                <li><a href="#" class="hover:text-black font-bold text-[#FFFF00] drop-shadow-[0_0_5px_#FFFF00]">Contact</a></li>
            </ul>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-black text-[#FFFF00] hover:text-[#FFFF00] font-semibold p-4">
            <a href="#" class="block py-2">Home</a>
            <a href="#" class="block py-2">About</a>
            <a href="#" class="block py-2">Services</a>
            <a href="#" class="block py-2">Contact</a>
        </div>
    </nav>

    {{-- BANNER SECTION --}}

    <div class="bg-black text-white flex items-center justify-center h-[80vh]">
        <div class="text-center px-6">
            <div class="bg-gray-800 py-4 border border-[#FFFF00] drop-shadow-[0_0_5px_#FFFF00] text-[#FFFF00] px-8 rounded-full inline-block text-sm font-medium">
                Biggest Performance Update Ever →
            </div>
            <h1 class="text-5xl font-bold mt-6">
                Feather<span class="text-[#FFFF00] drop-shadow-[0_0_5px_#FFFF00]">Site.</span>
            </h1>
            <p class="text-gray-400 mt-4 text-lg">
                Lightweight, ultra-fast, and beautifully simple websites.
            </p>
            <div class="mt-6 flex justify-center gap-4">
                <a href="#" class=" px-6 py-3 rounded-lg font-medium text-lg shadow-lg  hover:bg-[#FFFF00] hover:text-black border border-[#FFFF00] text-[#FFFF00] transition">
                    Download for Mac
                </a>
                <a href="#" class=" bg-[#FFFF00] text-black border border-[#FFFF00] hover:bg-transparent hover:text-[#FFFF00]  px-6 py-3 rounded-lg font-medium text-lg shadow-lg transition">
                    Download for Windows
                </a>
            </div>
        </div>
    </div>


    <main class="text-center py-16 px-6">
        <div class="text-4xl font-bold text-gray-200">Works on Everything</div>
        <p class="text-gray-400 mt-2">Invisible to all screen-recording software.</p>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-8 mt-10 items-center justify-center text-gray-300 text-lg">
            <div class="flex flex-col items-center">
                <img src="zoom.png" alt="Zoom" class="h-12 mb-2">
                <span class="text-[#FFFF00] drop-shadow-[0_0_5px_#FFFF00]">Zoom</span>
            </div>
            <div class="flex flex-col items-center">
                <img src="hackerrank.png" alt="HackerRank" class="h-12 mb-2">
                <span class="text-[#FFFF00] drop-shadow-[0_0_5px_#FFFF00]">Hackerrank</span>
            </div>
            <div class="flex flex-col items-center">
                <img src="codesignal.png" alt="CodeSignal" class="h-12 mb-2">
                <span class="text-[#FFFF00] drop-shadow-[0_0_5px_#FFFF00]">Code Signal</span>
            </div>
            <div class="flex flex-col items-center">
                <img src="coderpad.png" alt="CoderPad" class="h-12 mb-2">
                <span class="text-[#FFFF00] drop-shadow-[0_0_5px_#FFFF00]">Codepad</span>
            </div>
            <div class="flex flex-col items-center">
                <img src="chime.png" alt="Amazon Chime" class="h-12 mb-2">
                <span class="text-[#FFFF00] drop-shadow-[0_0_5px_#FFFF00]">Amazon Chimine</span>
            </div>
            <div class="flex flex-col items-center">
                <img src="teams.png" alt="Microsoft Teams" class="h-12 mb-2">
                <span class="text-[#FFFF00] drop-shadow-[0_0_5px_#FFFF00]">Microsoft Teams</span>
            </div>
        </div>
    </main>
    
    <section class="bg-gray-800 py-16 px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-200">About FeatherSite</h2>
        <p class="text-gray-400 mt-4 max-w-3xl mx-auto">
            FeatherSite is a cutting-edge platform designed to ensure seamless integration and undetectable operation across various online tools. 
            Our mission is to provide users with a smooth, interference-free experience while maintaining the highest standards of performance and reliability.
        </p>
    </section>
    










    {{-- NAV-SCRIPT --}}
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
