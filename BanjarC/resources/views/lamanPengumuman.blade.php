<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belgrano&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
    <title>Document</title>
</head>
<body class="font-sora">
    <main class="bg-primary-50 flex flex-col px-[46px] pb-[86px] overflow-x-auto">
        <div class="w-fit min-w-full">
             <h1 class="text-[38px] font-bold text-primary-300 mb-6 text-shadow-[0.95px_0.95px_1.9px_rgb(0_0_0_/_0.25)]">Laman Pengumuman</h1>
            <section class="bg-white w-[1440px] h-[759px] flex flex-col items-center px-[28.5px] pt-[17px] gap-3">
                <div class="flex flex-row w-[1291px] h-[41px] bg-second-50 rounded-[5px] py-[6.5px] pl-2">
                    <div class="bg-[#3771C8] w-[145px] h-7 rounded-[5px] flex items-center justify-center">
                        <h2 class="text-[18px] text-white font-semibold">Berita Utama</h2>
                    </div>
                    <div class="ml-[295px] bg-[#3771C8] w-[326px] h-7 rounded-[5px] flex items-center justify-center">
                        <h2 class="text-[18px] text-white font-semibold">Pembagian Tugas 7 Hari Terdekat</h2>
                    </div>
                    <div class="ml-[122px] mr-[94px] bg-[#3771C8] w-[301px] h-7 rounded-[5px] flex items-center justify-center">
                        <h2 class="text-[18px] text-white font-semibold">Informasi Odalan Berlangsung</h2>
                    </div>
                </div>
                <div class="flex flex-row gap-[53px]">
                    <div class="flex flex-col gap-3">
                        <div class="flex flex-col gap-[7px] w-[395px] h-[195px] bg-second-50 rounded-[5px] px-[8.5px] py-[13px]">
                            <div class="flex flex-row gap-[14px]">
                                <div class="w-[77px] h-[54px] bg-white rounded-[5px] flex items-center justify-center">
                                    <h2 class="text-[15px] font-extrabold text-primary-300">Judul</h2>
                                </div>
                                <div class="w-[254px] h-[54px] bg-white rounded-[5px] flex items-center justify-center">
                                    <h2 class="text-[14px] font-semibold text-[#081E31] leading-tight ml-[10px]">Pembagian Tugas Banten Untuk Odalan Dewata Turun Kabeh</h2>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                    <path d="M5.20833 21.875H19.7917C20.9375 21.875 21.875 20.9375 21.875 19.7917V12.5H19.7917V19.7917H5.20833V5.20833H12.5V3.125H5.20833C4.0625 3.125 3.125 4.0625 3.125 5.20833V19.7917C3.125 20.9375 4.0625 21.875 5.20833 21.875Z" fill="white"/>
                                    <path d="M7.29167 13.5416V16.6666C7.29167 17.2395 7.76042 17.7083 8.33334 17.7083H11.4583C11.7396 17.7083 12 17.5937 12.1979 17.4062L21.5729 8.03119C21.6695 7.93482 21.7461 7.82036 21.7984 7.69434C21.8506 7.56833 21.8776 7.43324 21.8776 7.29682C21.8776 7.16039 21.8506 7.02531 21.7984 6.89929C21.7461 6.77328 21.6695 6.65881 21.5729 6.56244L18.4479 3.43744C18.3516 3.34088 18.2371 3.26426 18.1111 3.21199C17.9851 3.15972 17.85 3.13281 17.7135 3.13281C17.5771 3.13281 17.442 3.15972 17.316 3.21199C17.19 3.26426 17.0755 3.34088 16.9792 3.43744L7.59376 12.802C7.49721 12.8994 7.42083 13.0148 7.369 13.1417C7.31716 13.2686 7.29088 13.4045 7.29167 13.5416ZM17.7083 5.63536L19.3646 7.29161L18.2292 8.42702L16.5729 6.77077L17.7083 5.63536ZM9.37501 13.9687L15.1042 8.23952L16.7604 9.89577L11.0313 15.6249H9.37501V13.9687Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="flex flex-row gap-[14px]">
                                <div class="w-[77px] h-7 bg-white rounded-[5px] flex items-center justify-center">
                                    <h2 class="text-[15px] font-extrabold text-primary-300">Tanggal</h2>
                                </div>
                                <input type="text" class=" bg-white rounded-[5px] w-[254px] h-7 pl-[10px]" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                    <path d="M5.20833 21.875H19.7917C20.9375 21.875 21.875 20.9375 21.875 19.7917V12.5H19.7917V19.7917H5.20833V5.20833H12.5V3.125H5.20833C4.0625 3.125 3.125 4.0625 3.125 5.20833V19.7917C3.125 20.9375 4.0625 21.875 5.20833 21.875Z" fill="white"/>
                                    <path d="M7.29167 13.5416V16.6666C7.29167 17.2395 7.76042 17.7083 8.33334 17.7083H11.4583C11.7396 17.7083 12 17.5937 12.1979 17.4062L21.5729 8.03119C21.6695 7.93482 21.7461 7.82036 21.7984 7.69434C21.8506 7.56833 21.8776 7.43324 21.8776 7.29682C21.8776 7.16039 21.8506 7.02531 21.7984 6.89929C21.7461 6.77328 21.6695 6.65881 21.5729 6.56244L18.4479 3.43744C18.3516 3.34088 18.2371 3.26426 18.1111 3.21199C17.9851 3.15972 17.85 3.13281 17.7135 3.13281C17.5771 3.13281 17.442 3.15972 17.316 3.21199C17.19 3.26426 17.0755 3.34088 16.9792 3.43744L7.59376 12.802C7.49721 12.8994 7.42083 13.0148 7.369 13.1417C7.31716 13.2686 7.29088 13.4045 7.29167 13.5416ZM17.7083 5.63536L19.3646 7.29161L18.2292 8.42702L16.5729 6.77077L17.7083 5.63536ZM9.37501 13.9687L15.1042 8.23952L16.7604 9.89577L11.0313 15.6249H9.37501V13.9687Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="flex flex-row gap-[14px]">
                                <div class="w-[77px] h-7 bg-white rounded-[5px] flex items-center justify-center">
                                    <h2 class="text-[15px] font-extrabold text-primary-300">Gambar</h2>
                                </div>
                                <div class="w-[254px] h-7 bg-white rounded-[5px] flex items-center">
                                    <h2 class="text-[14px] text-[#DEDADA] text-left ml-[10px]">Choice Picture</h2>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11 16V7.85L8.4 10.45L7 9L12 4L17 9L15.6 10.45L13 7.85V16H11ZM6 20C5.45 20 4.97933 19.8043 4.588 19.413C4.19667 19.0217 4.00067 18.5507 4 18V15H6V18H18V15H20V18C20 18.55 19.8043 19.021 19.413 19.413C19.0217 19.805 18.5507 20.0007 18 20H6Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="flex flex-row gap-[14px]">
                                <div class="w-[77px] h-7 bg-white rounded-[5px] flex items-center justify-center">
                                    <h2 class="text-[15px] font-extrabold text-primary-300">File</h2>
                                </div>
                                <div class="w-[254px] h-7 bg-white rounded-[5px] flex items-center">
                                    <h2 class="text-[14px] text-[#DEDADA] text-left ml-[10px]">Choice Picture</h2>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11 16V7.85L8.4 10.45L7 9L12 4L17 9L15.6 10.45L13 7.85V16H11ZM6 20C5.45 20 4.97933 19.8043 4.588 19.413C4.19667 19.0217 4.00067 18.5507 4 18V15H6V18H18V15H20V18C20 18.55 19.8043 19.021 19.413 19.413C19.0217 19.805 18.5507 20.0007 18 20H6Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                         <button class="w-[203px] h-[40px] bg-[#3771C8] rounded-[7.2px] mt- text-white text-[15px] font-semibold flex items-center justify-center gap-[2px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                                <path d="M14.4 2.40039C7.77242 2.40039 2.40002 7.77279 2.40002 14.4004C2.40002 21.028 7.77242 26.4004 14.4 26.4004C21.0276 26.4004 26.4 21.028 26.4 14.4004C26.4 7.77279 21.0276 2.40039 14.4 2.40039ZM20.4 15.6004H15.6V20.4004H13.2V15.6004H8.40002V13.2004H13.2V8.40039H15.6V13.2004H20.4V15.6004Z" fill="white"/>
                            </svg>
                            Tambah Berita Utama
                        </button>
                    </div>
                    <div class="flex flex-col gap-3">
                        <div class="flex flex-col gap-[7px] w-[395px] h-[195px] bg-second-50 rounded-[5px] px-[8.5px] py-[13px]">
                            <div class="flex flex-row gap-[14px]">
                                <div class="w-[77px] h-[54px] bg-white rounded-[5px] flex items-center justify-center">
                                    <h2 class="text-[15px] font-extrabold text-primary-300">Judul</h2>
                                </div>
                                <div class="w-[254px] h-[54px] bg-white rounded-[5px] flex items-center justify-center">
                                    <h2 class="text-[14px] font-semibold text-[#081E31] leading-tight ml-[10px]">Pembagian Tugas Banten Untuk Odalan Dewata Turun Kabeh</h2>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                    <path d="M5.20833 21.875H19.7917C20.9375 21.875 21.875 20.9375 21.875 19.7917V12.5H19.7917V19.7917H5.20833V5.20833H12.5V3.125H5.20833C4.0625 3.125 3.125 4.0625 3.125 5.20833V19.7917C3.125 20.9375 4.0625 21.875 5.20833 21.875Z" fill="white"/>
                                    <path d="M7.29167 13.5416V16.6666C7.29167 17.2395 7.76042 17.7083 8.33334 17.7083H11.4583C11.7396 17.7083 12 17.5937 12.1979 17.4062L21.5729 8.03119C21.6695 7.93482 21.7461 7.82036 21.7984 7.69434C21.8506 7.56833 21.8776 7.43324 21.8776 7.29682C21.8776 7.16039 21.8506 7.02531 21.7984 6.89929C21.7461 6.77328 21.6695 6.65881 21.5729 6.56244L18.4479 3.43744C18.3516 3.34088 18.2371 3.26426 18.1111 3.21199C17.9851 3.15972 17.85 3.13281 17.7135 3.13281C17.5771 3.13281 17.442 3.15972 17.316 3.21199C17.19 3.26426 17.0755 3.34088 16.9792 3.43744L7.59376 12.802C7.49721 12.8994 7.42083 13.0148 7.369 13.1417C7.31716 13.2686 7.29088 13.4045 7.29167 13.5416ZM17.7083 5.63536L19.3646 7.29161L18.2292 8.42702L16.5729 6.77077L17.7083 5.63536ZM9.37501 13.9687L15.1042 8.23952L16.7604 9.89577L11.0313 15.6249H9.37501V13.9687Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="flex flex-row gap-[14px]">
                                <div class="w-[77px] h-7 bg-white rounded-[5px] flex items-center justify-center">
                                    <h2 class="text-[15px] font-extrabold text-primary-300">Tanggal</h2>
                                </div>
                                <input type="text" class=" bg-white rounded-[5px] w-[254px] h-7 pl-[10px]" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                    <path d="M5.20833 21.875H19.7917C20.9375 21.875 21.875 20.9375 21.875 19.7917V12.5H19.7917V19.7917H5.20833V5.20833H12.5V3.125H5.20833C4.0625 3.125 3.125 4.0625 3.125 5.20833V19.7917C3.125 20.9375 4.0625 21.875 5.20833 21.875Z" fill="white"/>
                                    <path d="M7.29167 13.5416V16.6666C7.29167 17.2395 7.76042 17.7083 8.33334 17.7083H11.4583C11.7396 17.7083 12 17.5937 12.1979 17.4062L21.5729 8.03119C21.6695 7.93482 21.7461 7.82036 21.7984 7.69434C21.8506 7.56833 21.8776 7.43324 21.8776 7.29682C21.8776 7.16039 21.8506 7.02531 21.7984 6.89929C21.7461 6.77328 21.6695 6.65881 21.5729 6.56244L18.4479 3.43744C18.3516 3.34088 18.2371 3.26426 18.1111 3.21199C17.9851 3.15972 17.85 3.13281 17.7135 3.13281C17.5771 3.13281 17.442 3.15972 17.316 3.21199C17.19 3.26426 17.0755 3.34088 16.9792 3.43744L7.59376 12.802C7.49721 12.8994 7.42083 13.0148 7.369 13.1417C7.31716 13.2686 7.29088 13.4045 7.29167 13.5416ZM17.7083 5.63536L19.3646 7.29161L18.2292 8.42702L16.5729 6.77077L17.7083 5.63536ZM9.37501 13.9687L15.1042 8.23952L16.7604 9.89577L11.0313 15.6249H9.37501V13.9687Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="flex flex-row gap-[14px]">
                                <div class="w-[77px] h-7 bg-white rounded-[5px] flex items-center justify-center">
                                    <h2 class="text-[15px] font-extrabold text-primary-300">Gambar</h2>
                                </div>
                                <div class="w-[254px] h-7 bg-white rounded-[5px] flex items-center">
                                    <h2 class="text-[14px] text-[#DEDADA] text-left ml-[10px]">Choice Picture</h2>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11 16V7.85L8.4 10.45L7 9L12 4L17 9L15.6 10.45L13 7.85V16H11ZM6 20C5.45 20 4.97933 19.8043 4.588 19.413C4.19667 19.0217 4.00067 18.5507 4 18V15H6V18H18V15H20V18C20 18.55 19.8043 19.021 19.413 19.413C19.0217 19.805 18.5507 20.0007 18 20H6Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="flex flex-row gap-[14px]">
                                <div class="w-[77px] h-7 bg-white rounded-[5px] flex items-center justify-center">
                                    <h2 class="text-[15px] font-extrabold text-primary-300">File</h2>
                                </div>
                                <div class="w-[254px] h-7 bg-white rounded-[5px] flex items-center">
                                    <h2 class="text-[14px] text-[#DEDADA] text-left ml-[10px]">Choice Picture</h2>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11 16V7.85L8.4 10.45L7 9L12 4L17 9L15.6 10.45L13 7.85V16H11ZM6 20C5.45 20 4.97933 19.8043 4.588 19.413C4.19667 19.0217 4.00067 18.5507 4 18V15H6V18H18V15H20V18C20 18.55 19.8043 19.021 19.413 19.413C19.0217 19.805 18.5507 20.0007 18 20H6Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                         <button class="w-[203px] h-[40px] bg-[#3771C8] rounded-[7.2px] mt- text-white text-[15px] font-semibold flex items-center justify-center gap-[2px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                                <path d="M14.4 2.40039C7.77242 2.40039 2.40002 7.77279 2.40002 14.4004C2.40002 21.028 7.77242 26.4004 14.4 26.4004C21.0276 26.4004 26.4 21.028 26.4 14.4004C26.4 7.77279 21.0276 2.40039 14.4 2.40039ZM20.4 15.6004H15.6V20.4004H13.2V15.6004H8.40002V13.2004H13.2V8.40039H15.6V13.2004H20.4V15.6004Z" fill="white"/>
                            </svg>
                            Tambah Berita Utama
                        </button>
                    </div>
                                        <div class="flex flex-col gap-3">
                        <div class="flex flex-col gap-[7px] w-[395px] h-[195px] bg-second-50 rounded-[5px] px-[8.5px] py-[13px]">
                            <div class="flex flex-row gap-[14px]">
                                <div class="w-[77px] h-[54px] bg-white rounded-[5px] flex items-center justify-center">
                                    <h2 class="text-[15px] font-extrabold text-primary-300">Judul</h2>
                                </div>
                                <div class="w-[254px] h-[54px] bg-white rounded-[5px] flex items-center justify-center">
                                    <h2 class="text-[14px] font-semibold text-[#081E31] leading-tight ml-[10px]">Pembagian Tugas Banten Untuk Odalan Dewata Turun Kabeh</h2>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                    <path d="M5.20833 21.875H19.7917C20.9375 21.875 21.875 20.9375 21.875 19.7917V12.5H19.7917V19.7917H5.20833V5.20833H12.5V3.125H5.20833C4.0625 3.125 3.125 4.0625 3.125 5.20833V19.7917C3.125 20.9375 4.0625 21.875 5.20833 21.875Z" fill="white"/>
                                    <path d="M7.29167 13.5416V16.6666C7.29167 17.2395 7.76042 17.7083 8.33334 17.7083H11.4583C11.7396 17.7083 12 17.5937 12.1979 17.4062L21.5729 8.03119C21.6695 7.93482 21.7461 7.82036 21.7984 7.69434C21.8506 7.56833 21.8776 7.43324 21.8776 7.29682C21.8776 7.16039 21.8506 7.02531 21.7984 6.89929C21.7461 6.77328 21.6695 6.65881 21.5729 6.56244L18.4479 3.43744C18.3516 3.34088 18.2371 3.26426 18.1111 3.21199C17.9851 3.15972 17.85 3.13281 17.7135 3.13281C17.5771 3.13281 17.442 3.15972 17.316 3.21199C17.19 3.26426 17.0755 3.34088 16.9792 3.43744L7.59376 12.802C7.49721 12.8994 7.42083 13.0148 7.369 13.1417C7.31716 13.2686 7.29088 13.4045 7.29167 13.5416ZM17.7083 5.63536L19.3646 7.29161L18.2292 8.42702L16.5729 6.77077L17.7083 5.63536ZM9.37501 13.9687L15.1042 8.23952L16.7604 9.89577L11.0313 15.6249H9.37501V13.9687Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="flex flex-row gap-[14px]">
                                <div class="w-[77px] h-7 bg-white rounded-[5px] flex items-center justify-center">
                                    <h2 class="text-[15px] font-extrabold text-primary-300">Tanggal</h2>
                                </div>
                                <input type="text" class=" bg-white rounded-[5px] w-[254px] h-7 pl-[10px]" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                    <path d="M5.20833 21.875H19.7917C20.9375 21.875 21.875 20.9375 21.875 19.7917V12.5H19.7917V19.7917H5.20833V5.20833H12.5V3.125H5.20833C4.0625 3.125 3.125 4.0625 3.125 5.20833V19.7917C3.125 20.9375 4.0625 21.875 5.20833 21.875Z" fill="white"/>
                                    <path d="M7.29167 13.5416V16.6666C7.29167 17.2395 7.76042 17.7083 8.33334 17.7083H11.4583C11.7396 17.7083 12 17.5937 12.1979 17.4062L21.5729 8.03119C21.6695 7.93482 21.7461 7.82036 21.7984 7.69434C21.8506 7.56833 21.8776 7.43324 21.8776 7.29682C21.8776 7.16039 21.8506 7.02531 21.7984 6.89929C21.7461 6.77328 21.6695 6.65881 21.5729 6.56244L18.4479 3.43744C18.3516 3.34088 18.2371 3.26426 18.1111 3.21199C17.9851 3.15972 17.85 3.13281 17.7135 3.13281C17.5771 3.13281 17.442 3.15972 17.316 3.21199C17.19 3.26426 17.0755 3.34088 16.9792 3.43744L7.59376 12.802C7.49721 12.8994 7.42083 13.0148 7.369 13.1417C7.31716 13.2686 7.29088 13.4045 7.29167 13.5416ZM17.7083 5.63536L19.3646 7.29161L18.2292 8.42702L16.5729 6.77077L17.7083 5.63536ZM9.37501 13.9687L15.1042 8.23952L16.7604 9.89577L11.0313 15.6249H9.37501V13.9687Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="flex flex-row gap-[14px]">
                                <div class="w-[77px] h-7 bg-white rounded-[5px] flex items-center justify-center">
                                    <h2 class="text-[15px] font-extrabold text-primary-300">Gambar</h2>
                                </div>
                                <div class="w-[254px] h-7 bg-white rounded-[5px] flex items-center">
                                    <h2 class="text-[14px] text-[#DEDADA] text-left ml-[10px]">Choice Picture</h2>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11 16V7.85L8.4 10.45L7 9L12 4L17 9L15.6 10.45L13 7.85V16H11ZM6 20C5.45 20 4.97933 19.8043 4.588 19.413C4.19667 19.0217 4.00067 18.5507 4 18V15H6V18H18V15H20V18C20 18.55 19.8043 19.021 19.413 19.413C19.0217 19.805 18.5507 20.0007 18 20H6Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="flex flex-row gap-[14px]">
                                <div class="w-[77px] h-7 bg-white rounded-[5px] flex items-center justify-center">
                                    <h2 class="text-[15px] font-extrabold text-primary-300">File</h2>
                                </div>
                                <div class="w-[254px] h-7 bg-white rounded-[5px] flex items-center">
                                    <h2 class="text-[14px] text-[#DEDADA] text-left ml-[10px]">Choice Picture</h2>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11 16V7.85L8.4 10.45L7 9L12 4L17 9L15.6 10.45L13 7.85V16H11ZM6 20C5.45 20 4.97933 19.8043 4.588 19.413C4.19667 19.0217 4.00067 18.5507 4 18V15H6V18H18V15H20V18C20 18.55 19.8043 19.021 19.413 19.413C19.0217 19.805 18.5507 20.0007 18 20H6Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                         <button class="w-[203px] h-[40px] bg-[#3771C8] rounded-[7.2px] mt- text-white text-[15px] font-semibold flex items-center justify-center gap-[2px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                                <path d="M14.4 2.40039C7.77242 2.40039 2.40002 7.77279 2.40002 14.4004C2.40002 21.028 7.77242 26.4004 14.4 26.4004C21.0276 26.4004 26.4 21.028 26.4 14.4004C26.4 7.77279 21.0276 2.40039 14.4 2.40039ZM20.4 15.6004H15.6V20.4004H13.2V15.6004H8.40002V13.2004H13.2V8.40039H15.6V13.2004H20.4V15.6004Z" fill="white"/>
                            </svg>
                            Tambah Berita Utama
                        </button>
                    </div>
                </div>
                </div>
                </div>
            </section>
        </div>
    </main>

</body>
</html>