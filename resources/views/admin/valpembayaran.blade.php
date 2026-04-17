@extends('layouts.sidbarUser')

@section('title', 'Validasi Pembayaran')

@section('validasiPembayaran')

<body class ="font-sora bg-primary-50 px-[140px] pt-[34px] flex justify-center">
    <main>
        <section class ="flex items-center gap-4">
            <h1 class ="font-bold text-[40px] text-primary-300 drop-shadow-[1px_1px_1px_rgba(0,0,0,100)]">Validasi Pembayaran</h1>
            <div class ="bg-white ring-inset ring-2 ring-primary-300 w-[688px] h-11 rounded-[10px] flex items-center">
                    <p class ="text-search-50 text-[18px] ml-2">Ketik disini...</p>
            </div>
            <div class ="w-[42px] h-11 bg-primary-300 rounded-[10px] flex items-center justify-center">
                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.61816 3.61816C7.84214 -0.605866 14.7135 -0.605746 18.9375 3.61816C20.4524 5.13307 21.4843 7.06286 21.9023 9.16406C22.3203 11.2653 22.1059 13.4435 21.2861 15.4229C20.4662 17.4023 19.0773 19.0948 17.2959 20.2852C15.6394 21.3919 13.7123 22.0181 11.7275 22.1006V22.1094L11.2793 22.1104L11.2783 22.1094L11.2773 22.1104V22.1094C9.85437 22.113 8.44455 21.8356 7.12988 21.291C5.8148 20.7462 4.62097 19.9458 3.61719 18.9365V18.9355C-0.605343 14.7114 -0.605325 7.84171 3.61816 3.61816ZM11.2773 2.40039C10.1112 2.39837 8.95558 2.62657 7.87793 3.07227C6.80035 3.51796 5.8211 4.17197 4.99707 4.99707C1.53424 8.46015 1.53432 14.0958 4.99707 17.5586C6.02949 18.5923 7.30137 19.3554 8.69922 19.7803C10.0972 20.2051 11.5786 20.2787 13.0117 19.9941C14.4448 19.7096 15.7854 19.076 16.915 18.1494C18.0447 17.2228 18.928 16.0314 19.4873 14.6816C20.0465 13.3319 20.2644 11.8651 20.1211 10.4111C19.9778 8.95721 19.4779 7.5613 18.666 6.34668C17.8541 5.13201 16.7555 4.13561 15.4668 3.44727C14.1781 2.75897 12.7393 2.39979 11.2783 2.40039H11.2773Z" fill="white" stroke="white" stroke-width="0.899065"/>
                    <path d="M18.249 17.2708C18.3773 17.2711 18.5047 17.2965 18.623 17.3459C18.7414 17.3955 18.8491 17.4677 18.9395 17.5588L18.9385 17.5598L27.9805 26.5999C28.1169 26.7363 28.2094 26.9107 28.2471 27.0999C28.2847 27.289 28.2652 27.4852 28.1914 27.6633C28.1176 27.8413 27.9931 27.9937 27.833 28.1008C27.7128 28.1812 27.5764 28.234 27.4346 28.2551L27.291 28.2649C27.1628 28.265 27.0355 28.2407 26.917 28.1917C26.7985 28.1425 26.6912 28.0696 26.6006 27.9788L17.5605 18.9377C17.4694 18.8474 17.3962 18.7407 17.3467 18.6223C17.2972 18.5039 17.2718 18.3766 17.2715 18.2483C17.2712 18.1198 17.2957 17.992 17.3447 17.8733C17.3937 17.7546 17.4658 17.6467 17.5566 17.5559C17.6474 17.4651 17.7553 17.393 17.874 17.344C17.9927 17.295 18.1206 17.2705 18.249 17.2708Z" fill="white" stroke="white" stroke-width="0.899065"/>
                </svg>
            </div>
        </section>

        <section class ="w-[256px] h-10 bg-second-50 rounded-[10px] mt-[15px] flex items-center pl-3">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 8L12 16L19 8H5Z" fill="#004481"/>
            </svg>
            <h1 class ="font-sora font-bold text-[17px] text-primary-300 ml-[10px]">Kategori</h1>
        </section>

        <section class ="w-[1160px] h-16 bg-second-50 mt-[27px] flex items-center px-[10px]">
            <div class ="w-[42px] h-10 bg-primary-300 mr-0.5 flex justify-center items-center">
                <h1 class ="font-sora font-bold text-white text-4">No</h1>
            </div>
            <div class ="w-[104px] h-10 bg-primary-300 mr-0.5 flex justify-center items-center">
                <h1 class ="font-sora font-bold text-white text-4">NIB</h1>
            </div>
            <div class ="w-[284.86px] h-10 bg-primary-300 mr-0.5 flex justify-center items-center">
                <h1 class ="font-sora font-bold text-white text-4">Nama Kepala Keluarga</h1>
            </div>
            <div class ="w-[229px] h-10 bg-primary-300 mr-0.5 flex justify-center items-center">
                <h1 class ="font-sora font-bold text-white text-4">Nominal</h1>
            </div>
            <div class ="w-[221px] h-10 bg-primary-300 mr-0.5 flex justify-center items-center">
                <h1 class ="font-sora font-bold text-white text-4">Tanggal Pembayaran</h1>
            </div>
            <div class ="w-[153px] h-10 bg-primary-300 mr-0.5 flex justify-center items-center">
                <h1 class ="font-sora font-bold text-white text-4">Bukti Bayar</h1>
            </div>
            <div class ="w-[112px] h-10 bg-primary-300 mr-0.5 flex justify-center items-center">
                <h1 class ="font-sora font-bold text-white text-4">Status</h1>
            </div>
        </section>
        
        <section class ="w-[1160px] h-[400px] bg-second-50 mt-1 mb-[25px] px-[10px] py-3">
            <div class ="flex flex-col">
            @foreach ($pembayaran as $pembayaranc )
            
            <div class ="flex mb-0.5">
            <div class ="w-[42px] h-10 bg-white mr-0.5 flex justify-center items-center">
                <h1 class ="font-sora font-bold text-primary-300 text-4">{{$pembayaranc['nomor']}}</h1>
            </div>
            <div class ="w-[104px] h-10 bg-white mr-0.5 flex justify-center items-center">
                <h1 class ="font-sora font-bold text-primary-300 text-4">{{$pembayaranc['nib']}}</h1>
            </div>
            <div class ="w-[284.86px] h-10 bg-white mr-0.5 flex items-center px-3">
                <h1 class ="font-sora font-bold text-primary-300 text-4">{{$pembayaranc['nama']}}</h1>
            </div>
            <div class ="w-[229px] h-10 bg-white mr-0.5 flex items-center justify-between px-3">
                <h1 class ="font-sora font-bold text-primary-300 text-4">{{$pembayaranc['nominal']}}</h1>
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="36" height="36" rx="5.51489" fill="#FFAB1F"/>
                    <path d="M22.1621 9.01111C22.3442 9.01116 22.5187 9.08352 22.6475 9.21228L26.7891 13.3529C26.9179 13.4817 26.9902 13.6571 26.9902 13.8392C26.9901 14.0212 26.9177 14.1959 26.7891 14.3246L12.6611 28.4525C12.5709 28.5427 12.4571 28.6058 12.333 28.6351L6.91406 29.9125C6.86261 29.9246 6.80969 29.93 6.75684 29.9301C6.65328 29.93 6.55123 29.9068 6.45801 29.8617C6.36487 29.8166 6.28303 29.7514 6.21875 29.6703C6.15444 29.5891 6.10945 29.4941 6.08691 29.3929C6.0644 29.2919 6.06419 29.1871 6.08789 29.0863L7.36523 23.6674C7.39455 23.5433 7.45774 23.4294 7.54785 23.3392H7.54883L21.6758 9.21228C21.8046 9.08347 21.9799 9.01111 22.1621 9.01111ZM8.65723 24.1722L7.67969 28.3197L11.8271 27.3422L25.3311 13.8383L22.1611 10.6683L8.65723 24.1722Z" fill="white" stroke="white" stroke-width="0.459574"/>
                    <path d="M26.3027 6.07074C27.2523 6.07074 28.1636 6.44704 28.8359 7.11761L28.8828 7.16449C29.5532 7.8367 29.9296 8.74732 29.9297 9.69672C29.9297 10.6463 29.5534 11.5576 28.8828 12.2299L26.7891 14.3237C26.7254 14.3876 26.6497 14.4385 26.5664 14.4731C26.4832 14.5077 26.3938 14.5258 26.3037 14.5258C26.2134 14.5259 26.1235 14.5076 26.04 14.4731C25.9568 14.4385 25.8811 14.3875 25.8174 14.3237V14.3246L21.6768 10.183C21.613 10.1193 21.5619 10.0437 21.5273 9.96039C21.4929 9.87717 21.4756 9.78777 21.4756 9.69769C21.4756 9.60748 21.4928 9.51736 21.5273 9.43402C21.5619 9.35078 21.613 9.27508 21.6768 9.21136L23.7705 7.11761C24.4427 6.44716 25.3533 6.07086 26.3027 6.07074ZM26.3037 7.44379C25.718 7.44379 25.1558 7.67658 24.7412 8.09027L23.1328 9.69672L26.3027 12.8666L27.9111 11.2592L28.0576 11.0971C28.3791 10.7039 28.5566 10.21 28.5566 9.69769C28.5566 9.1852 28.3792 8.6906 28.0576 8.2973L27.9111 8.13519L27.8652 8.08929V8.09027C27.4507 7.67664 26.8893 7.44381 26.3037 7.44379Z" fill="white" stroke="white" stroke-width="0.459574"/>
                </svg>
            </div>
            <div class ="w-[221px] h-10 bg-white mr-0.5 flex items-center justify-center">
                <h1 class ="font-sora font-bold text-primary-300 text-4">{{$pembayaranc['tanggal']}}</h1>
            </div>
            <div class ="w-[153px] h-10 bg-white mr-0.5 flex items-center justify-center gap-1">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M28 25.3333V6.66667C28 5.2 26.8 4 25.3333 4H6.66667C5.2 4 4 5.2 4 6.66667V25.3333C4 26.8 5.2 28 6.66667 28H25.3333C26.8 28 28 26.8 28 25.3333ZM11.3333 18L14.6667 22.0133L19.3333 16L25.3333 24H6.66667L11.3333 18Z" fill="#3771C8"/>
                </svg>
                <h1 class ="font-sora font-bold text-primary-300 text-4">Foto</h1>
            </div>
            <div class ="w-[112px] h-10 bg-white mr-0.5 flex justify-center items-center gap-2">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="1.41756" y="1.41756" width="22.1649" height="22.1649" rx="2.83512" fill="#308252" stroke="#308252" stroke-width="2.83512"/>
                    <path d="M6.25 12.75L10.3125 17.125L18.4375 5.875" stroke="white" stroke-width="3.5439" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="1.41756" y="1.41756" width="21.9722" height="21.9722" rx="2.83512" fill="#AE594E" stroke="#AE594E" stroke-width="2.83512"/>
                    <path d="M6.82227 6.82178L18.2957 17.9851" stroke="white" stroke-width="3.5439" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18.2959 6.82178L6.82251 17.9851" stroke="white" stroke-width="3.5439" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="24" height="24" rx="3.6" fill="#FFAB1F"/>
                    <path d="M12.2676 6.63879C14.8565 6.63882 17.3013 7.42044 19.1494 8.84778C21.0279 10.2987 22.0752 12.2489 22.0752 14.3409C22.0751 14.4879 22.0169 14.6286 21.9131 14.7325C21.8092 14.8364 21.6684 14.8955 21.5215 14.8956C21.3744 14.8956 21.2329 14.8365 21.1289 14.7325C21.0251 14.6286 20.9668 14.4879 20.9668 14.3409C20.9668 12.6159 20.0897 10.9755 18.4717 9.72571C16.8245 8.45357 14.6221 7.74819 12.2676 7.74817C9.91309 7.74817 7.71069 8.4536 6.06348 9.72571C4.44549 10.9754 3.56836 12.6159 3.56836 14.3409C3.56831 14.4878 3.51 14.6286 3.40625 14.7325C3.30226 14.8365 3.16073 14.8956 3.01367 14.8956C2.86668 14.8956 2.72601 14.8365 2.62207 14.7325C2.51813 14.6286 2.45903 14.4879 2.45898 14.3409C2.45898 12.249 3.50637 10.2987 5.38477 8.84778C7.23291 7.42025 9.67844 6.63879 12.2676 6.63879Z" fill="white" stroke="white" stroke-width="0.356658"/>
                    <path d="M12.2676 9.08386C15.1662 9.08386 17.5244 11.4421 17.5244 14.3407C17.5244 17.2393 15.1662 19.5975 12.2676 19.5975C9.36901 19.5975 7.01074 17.2393 7.01074 14.3407C7.01078 11.4421 9.36903 9.0839 12.2676 9.08386ZM11.9609 10.205C11.2487 10.2578 10.5606 10.4938 9.96387 10.8925C9.28181 11.3482 8.74946 11.9959 8.43555 12.7538C8.12172 13.5116 8.04018 14.3458 8.2002 15.1503C8.36028 15.9546 8.75505 16.6934 9.33496 17.2733C9.915 17.8534 10.6544 18.249 11.459 18.4091C12.2632 18.5689 13.0969 18.4865 13.8545 18.1727C14.6122 17.8589 15.2601 17.3272 15.7158 16.6454C16.1716 15.9633 16.415 15.161 16.415 14.3407C16.4137 13.2411 15.9767 12.1866 15.1992 11.4091C14.4217 10.6315 13.3672 10.1945 12.2676 10.1932L11.9609 10.205Z" fill="white" stroke="white" stroke-width="0.356658"/>
                </svg>
            </div>
            </div>
            </div>
            @endforeach
        </section>

            <section class ="flex justify-center font-sora font-bold text-[13px] gap-2">
                <div class ="w-[34px] h-[34px] rounded-[3px] bg-primary-300 hover:ring-inset hover:ring-2 hover:ring-primary-300 hover:bg-primary-50">
                    <a class ="w-[34px] h-[34px] flex justify-center items-center text-white hover:text-primary-300">1</a>
                </div>
                <div class ="w-[34px] h-[34px] rounded-[3px] bg-primary-50 hover:ring-inset hover:ring-2 hover:ring-primary-300 hover:bg-primary-50">
                    <a class ="w-[34px] h-[34px] flex justify-center items-center text-primary-300">2</a>
                </div>
                <div class ="w-[34px] h-[34px] rounded-[3px] bg-primary-50 hover:ring-inset hover:ring-2 hover:ring-primary-300 hover:bg-primary-50">
                    <a class ="w-[34px] h-[34px] flex justify-center items-center text-primary-300">3</a>
                </div>
                <div class ="flex items-center gap-[5px]">
                    <h1 class ="text-primary-300 text-[15px]">Next</h1>
                    <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.834961 11.415L5.99017 6.8979C6.50134 6.45 6.49559 5.65266 5.97801 5.21218L0.834961 0.835205" stroke="#004481" stroke-width="1.6705" stroke-linecap="round"/>
                    </svg>
                </div>
            </section>
    </main>
</body>

@endsection
