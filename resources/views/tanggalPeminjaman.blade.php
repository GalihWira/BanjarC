<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrol Tanggal Peminjaman</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-white min-h-screen">
    <div class="bg-[#FCA311] py-5 flex justify-center items-center shadow-sm">
        <h1 class="text-white text-[28px] font-extrabold tracking-wide uppercase underline decoration-white decoration-[3px] underline-offset-8">
            Kontrol Tanggal Peminjaman
        </h1>
    </div>
    <div class="max-w-225 mx-auto p-10 pt-8">
        <div class="bg-[#2FA4FF] text-white px-5 py-3 mb-8 flex items-center gap-3 cursor-pointer">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path>
            </svg>
            <span class="font-bold text-lg tracking-wide">Pilih Kategori</span>
        </div>
        <div class="flex flex-col md:flex-row gap-10 justify-center items-start">
            <div class="bg-[#C4C4C4] p-2.5 w-max h-max">
                <div class="grid grid-cols-6 gap-1.5 text-center text-white font-bold text-base">
                    <div class="col-span-5 bg-banjar-dark py-3 flex items-center justify-center">Maret 2026</div>
                    <div class="bg-[#A6A6A6] py-3 px-6 flex items-center justify-center">1</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">2</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">3</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">4</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">5</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">6</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">7</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">8</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">9</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">10</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">11</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">12</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">13</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">14</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">15</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">16</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">17</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">18</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">19</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">20</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">21</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">22</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">23</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">24</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">25</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">26</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">27</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">28</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">29</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">30</div>
                    <div class="bg-[#A6A6A6] py-3 flex items-center justify-center">31</div>
                </div>
            </div>
            <div class="w-full max-w-85 flex flex-col gap-5">
                <div>
                    <span class="bg-[#BCE0FD] text-banjar-dark font-bold text-sm px-4 py-1.5 rounded-full inline-block mb-4">
                        Keterangan
                    </span>
                    <div class="flex gap-8 items-center font-bold text-sm text-black ml-1">
                        <div class="flex items-center gap-2">
                            <div class="w-5 h-5 bg-[#2E7D32]"></div>
                            <span>Tersedia</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-5 h-5 bg-[#B44F43]"></div>
                            <span>Tidak Tersedia</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-3 mt-1">
                    <span class="bg-[#BCE0FD] text-banjar-dark font-bold text-sm px-4 py-1.5 rounded-full inline-block w-max">
                        Informasi
                    </span>
                    <div class="relative w-full">
                        <div class="absolute top-4 left-4 text-[#8A8A8A]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                            </svg>
                        </div>
                        <div class="w-full bg-[#D9D9D9] text-[#8A8A8A] text-sm font-medium p-4 pl-10 h-36 flex items-start rounded-sm">
                            Ketik Informasi disini
                        </div>
                    </div>
                </div>
                <button class="w-full bg-[#FCA311] text-white font-bold text-base py-2.5 rounded hover:bg-orange-500 transition-colors mt-2">
                    Simpan Perubahan
                </button>
            </div>
        </div>
    </div>
</body>
</html>
