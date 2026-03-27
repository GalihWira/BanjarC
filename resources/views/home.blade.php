@extends('layouts.sidbarAdmin')

@section('title', 'Home')

@section('home')
    <main class ="font-sora">
    <!--Banner Banjar-->
    <section class="relative h-screen w-full flex items-center justify-between">
        <img src="/assets/home/Cgradasi.jpg" class="h-screen w-screen object-cover absolute -mt-[90px]">
        <div class="relative bg-white rounded-[26.25px] w-[535.5px] h-[313.50px] py-[23.25px] px-[32.5px] ml-[81.75px]">
            <h1 class ="font-bold text-[37.5px] mb-2xl text-second-50">Wellcome</h1>
            <p class ="text-[22.5px] font-normal text-justify">Selamat datang di website resmi Banjar C. Yuk eksplor lebih lanjut lagi mengenai Banjar C, Kabupaten  Extension, Provinsi VsCode</p>
            <div class ="flex items-center justify-between">
                <div class ="flex items-center rounded-[18.75px] bg-second-50 mt-7 w-fit">
                <a class ="font-bold mr-3 text-white text-2xl my-[9px] mx-[14px]" href ="#">Tentang Kita</a>
                <div class ="bg-white w-12 h-12 rounded-[18.75px] border-4 border-second-50 flex items-center justify-center">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.2302 25.0001H5.86679C4.31136 24.9983 2.82014 24.3797 1.72029 23.2798C0.620429 22.1799 0.00175761 20.6887 0 19.1333V7.76987C0.00175761 6.21444 0.620429 4.72322 1.72029 3.62336C2.82014 2.52351 4.31136 1.90483 5.86679 1.90308H7.63671C7.89572 1.90308 8.14411 2.00596 8.32725 2.1891C8.51039 2.37225 8.61328 2.62064 8.61328 2.87964C8.61328 3.13864 8.51039 3.38703 8.32725 3.57017C8.14411 3.75331 7.89572 3.8562 7.63671 3.8562H5.86679C4.82919 3.85738 3.83441 4.27009 3.10071 5.00379C2.36701 5.73749 1.9543 6.73226 1.95312 7.76987V19.1333C1.9543 20.1709 2.36701 21.1657 3.10071 21.8994C3.83441 22.6331 4.82919 23.0458 5.86679 23.047H17.2302C18.2678 23.0458 19.2626 22.6331 19.9963 21.8994C20.73 21.1657 21.1427 20.1709 21.1439 19.1333V17.3634C21.1439 17.1044 21.2468 16.856 21.4299 16.6728C21.6131 16.4897 21.8614 16.3868 22.1204 16.3868C22.3794 16.3868 22.6278 16.4897 22.811 16.6728C22.9941 16.856 23.097 17.1044 23.097 17.3634V19.1335C23.0952 20.6889 22.4765 22.1801 21.3767 23.2799C20.2768 24.3797 18.7856 24.9983 17.2302 25.0001Z" fill="#FFAB1F"/>
                        <path d="M10.7998 14.2002C10.6166 14.0171 10.5137 13.7687 10.5137 13.5097C10.5137 13.2507 10.6166 13.0023 10.7998 12.8191L23.333 0.285941C23.5164 0.104125 23.7643 0.00236651 24.0226 0.00293203C24.2809 0.00349756 24.5284 0.106341 24.711 0.288958C24.8936 0.471575 24.9964 0.719095 24.997 0.977353C24.9976 1.23561 24.8958 1.48358 24.714 1.66699L12.1808 14.2002C11.9977 14.3833 11.7493 14.4862 11.4903 14.4862C11.2313 14.4862 10.9829 14.3833 10.7998 14.2002Z" fill="#FFAB1F"/>
                        <path d="M23.3329 10.644C23.242 10.5535 23.17 10.4458 23.1209 10.3273C23.0718 10.2088 23.0467 10.0818 23.0468 9.95351V1.95312H15.0464C14.7874 1.95312 14.5391 1.85024 14.3559 1.6671C14.1728 1.48395 14.0699 1.23556 14.0699 0.976562C14.0699 0.717562 14.1728 0.469169 14.3559 0.286028C14.5391 0.102887 14.7874 0 15.0464 0L24.0234 0C24.2824 0 24.5308 0.102887 24.7139 0.286028C24.8971 0.469169 25 0.717562 25 0.976562V9.95351C25 10.1467 24.9427 10.3355 24.8354 10.4961C24.7281 10.6566 24.5756 10.7818 24.3971 10.8557C24.2187 10.9296 24.0223 10.949 23.8329 10.9113C23.6434 10.8736 23.4694 10.7806 23.3329 10.644Z" fill="#FFAB1F"/>
                    </svg>
                </div>
            </div>
            <div class ="flex items-center rounded-[18.75px] bg-white mt-7 w-fit ring-inset ring-4 ring-second-50">
                <a class ="font-bold mr-3 text-second-50 text-2xl my-[9px] mx-[14px]" href ="#">Informasi</a>
                <div class ="bg-second-50 w-12 h-12 rounded-[18.75px] border-4 border-second-50 flex items-center justify-center">
                    <svg width="32" height="23" viewBox="0 0 32 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.3802 0.339111C19.8681 0.20619 20.3792 0.182853 20.8773 0.269775C21.3746 0.356558 21.8466 0.551547 22.2601 0.841064C22.6475 1.10797 22.972 1.45738 23.2094 1.86353C23.4171 2.21898 23.5542 2.61055 23.6136 3.01685L23.6342 3.19165V3.19263C23.6427 3.29397 23.6478 3.3959 23.6478 3.49829V15.0305C23.6478 15.1333 23.6428 15.2355 23.6342 15.3362V15.3372C23.5917 15.8056 23.4467 16.2592 23.2094 16.6653C22.972 17.0712 22.6483 17.42 22.2611 17.6868L22.2601 17.6858C21.754 18.0401 21.164 18.2519 20.5511 18.2991L20.2875 18.3088C19.9811 18.3087 19.6759 18.2681 19.3802 18.1877L9.14294 15.4065L9.14099 15.4055C8.99782 15.3648 8.85018 15.3403 8.70154 15.3323H8.69861C7.34372 15.2441 5.99388 15.0916 4.65369 14.8752L4.08044 14.7786C2.54603 14.5099 1.59827 14.2496 1.03064 13.968C0.745022 13.8263 0.540097 13.6713 0.406616 13.4934C0.269076 13.31 0.21814 13.1159 0.21814 12.9211V5.60767C0.21814 5.41289 0.269062 5.2188 0.406616 5.0354C0.540048 4.85763 0.745191 4.70341 1.03064 4.56177C1.59825 4.2802 2.54602 4.01912 4.08044 3.75024C5.609 3.48218 7.15097 3.29722 8.69958 3.19653H8.70154C8.85045 3.18837 8.99846 3.1639 9.14197 3.12329L9.14392 3.12231L19.3802 0.339111ZM20.6342 1.65454C20.3394 1.60324 20.037 1.61774 19.7484 1.69653L9.51111 4.47778L9.51013 4.47681C9.26703 4.54496 9.01718 4.58638 8.76501 4.59888H8.76404C7.79535 4.6405 6.13776 4.83143 4.63611 5.08228C3.88586 5.20761 3.17904 5.34755 2.61951 5.4895C2.33954 5.56053 2.09966 5.63168 1.9115 5.70044C1.78454 5.74685 1.69 5.7891 1.62439 5.82544V12.7014C1.69007 12.7378 1.78434 12.7809 1.9115 12.8274C2.09965 12.8961 2.33961 12.9664 2.61951 13.0374C3.17902 13.1793 3.88593 13.3192 4.63611 13.4446C6.13774 13.6955 7.79537 13.8865 8.76404 13.928H8.76501C9.01815 13.9404 9.26913 13.9813 9.51306 14.05H9.51208L19.7484 16.8313C20.0371 16.91 20.3394 16.9246 20.6342 16.8733C20.929 16.8219 21.2093 16.7062 21.4545 16.5344L21.4574 16.5325C21.6762 16.3847 21.8596 16.1897 21.9935 15.9622C22.1274 15.7346 22.2089 15.48 22.2318 15.217L22.2396 15.0315V3.49731L22.2318 3.31079C22.2089 3.0478 22.1274 2.79319 21.9935 2.56567C21.8596 2.33814 21.6762 2.14307 21.4574 1.99536L21.4545 1.99341C21.2094 1.82158 20.929 1.70592 20.6342 1.65454Z" fill="white" stroke="white" stroke-width="0.436887"/>
                        <path d="M8.18152 3.479C8.36792 3.479 8.54679 3.55326 8.67859 3.68506C8.81039 3.81686 8.88464 3.99573 8.88464 4.18213V14.3452C8.88464 14.5316 8.81037 14.7105 8.67859 14.8423C8.54679 14.9741 8.36792 15.0483 8.18152 15.0483C7.99512 15.0483 7.81625 14.9741 7.68445 14.8423C7.55266 14.7105 7.47839 14.5316 7.47839 14.3452V4.18213C7.47839 3.99573 7.55264 3.81686 7.68445 3.68506C7.81625 3.55326 7.99512 3.479 8.18152 3.479Z" fill="white" stroke="white" stroke-width="0.436887"/>
                        <path d="M6.49438 13.9585C6.58413 13.982 6.66861 14.0224 6.74243 14.0786C6.81631 14.1348 6.87849 14.2053 6.92505 14.2856C6.97151 14.3658 7.00182 14.4545 7.01392 14.5464H7.01294L7.99146 21.5122C8.0173 21.6966 7.96869 21.884 7.85669 22.0327C7.74468 22.1814 7.57808 22.2781 7.3938 22.3042L7.39478 22.3052L7.29321 22.313C7.12414 22.3127 6.96082 22.2511 6.83325 22.1401C6.70556 22.029 6.62242 21.8752 6.59888 21.7075L5.62134 14.7427L5.6145 14.604C5.61675 14.5578 5.62368 14.5114 5.63501 14.4663C5.65767 14.3764 5.69772 14.2916 5.75317 14.2173C5.8086 14.1431 5.87858 14.0809 5.95825 14.0337C6.03815 13.9864 6.12706 13.9548 6.21899 13.9419C6.3109 13.929 6.40459 13.935 6.49438 13.9585Z" fill="white" stroke="white" stroke-width="0.436887"/>
                        <path d="M9.65009 14.3875C9.83355 14.3617 10.0202 14.4094 10.1686 14.5203C10.28 14.6034 10.3626 14.7175 10.4089 14.8464L10.4431 14.9792V14.9812L11.361 21.5125C11.3868 21.6968 11.3382 21.8842 11.2263 22.033C11.1143 22.1816 10.9476 22.2783 10.7634 22.3044L10.7643 22.3054L10.6638 22.3132C10.4947 22.313 10.3314 22.2513 10.2038 22.1404C10.0761 22.0292 9.992 21.8754 9.96844 21.7078L9.05145 15.1775L9.05048 15.1755C9.02641 14.9918 9.07599 14.8054 9.18817 14.658C9.30038 14.5105 9.4666 14.4132 9.65009 14.3875Z" fill="white" stroke="white" stroke-width="0.436887"/>
                        <path d="M10.6646 20.9065C10.851 20.9065 11.0299 20.9808 11.1617 21.1125C11.2935 21.2444 11.3677 21.4232 11.3677 21.6096C11.3677 21.796 11.2935 21.9749 11.1617 22.1067C11.0299 22.2384 10.851 22.3127 10.6646 22.3127H7.29449C7.1081 22.3127 6.92923 22.2385 6.79742 22.1067C6.66562 21.9749 6.59137 21.796 6.59137 21.6096C6.59137 21.4232 6.66562 21.2444 6.79742 21.1125C6.92923 20.9807 7.1081 20.9065 7.29449 20.9065H10.6646Z" fill="white" stroke="white" stroke-width="0.436887"/>
                        <path d="M30.9523 8.45581C31.1387 8.45581 31.3176 8.53011 31.4494 8.66187C31.5812 8.79367 31.6555 8.97254 31.6555 9.15894C31.6555 9.34533 31.5812 9.5242 31.4494 9.65601C31.3176 9.78776 31.1387 9.86206 30.9523 9.86206H25.6135C25.4271 9.86206 25.2482 9.78781 25.1164 9.65601C24.9846 9.5242 24.9103 9.34533 24.9103 9.15894C24.9103 8.97254 24.9846 8.79367 25.1164 8.66187C25.2482 8.53006 25.4271 8.45581 25.6135 8.45581H30.9523Z" fill="white" stroke="white" stroke-width="0.436887"/>
                        <path d="M26.0627 11.7976C26.154 11.8101 26.242 11.8411 26.3215 11.8875L30.9456 14.5564C31.0795 14.6338 31.1842 14.7533 31.2434 14.8962C31.3026 15.0392 31.3127 15.198 31.2727 15.3474C31.2326 15.4967 31.1443 15.6283 31.0217 15.7224C30.899 15.8166 30.7487 15.8679 30.594 15.8679C30.5012 15.868 30.4096 15.8497 30.3245 15.8142L30.2424 15.7732L25.6204 13.1042C25.54 13.0585 25.469 12.9977 25.4124 12.9246C25.3557 12.8514 25.3136 12.7678 25.2893 12.6785C25.265 12.589 25.2588 12.495 25.2708 12.4031C25.2827 12.3112 25.3133 12.2226 25.3596 12.1423C25.406 12.0622 25.4677 11.9916 25.5413 11.9353C25.6148 11.8791 25.6988 11.8379 25.7883 11.8142C25.8778 11.7906 25.9711 11.7851 26.0627 11.7976Z" fill="white" stroke="white" stroke-width="0.436887"/>
                        <path d="M30.7775 2.47192C30.867 2.49558 30.951 2.53685 31.0246 2.59302C31.0981 2.64925 31.1599 2.7199 31.2062 2.80005C31.2525 2.88026 31.2831 2.96895 31.2951 3.06079C31.3071 3.15271 31.3008 3.24673 31.2766 3.33618C31.2523 3.42551 31.2102 3.50911 31.1535 3.58228C31.0967 3.65553 31.0261 3.71713 30.9455 3.76294L30.9445 3.76196L26.3234 6.43188L26.3224 6.43091C26.2157 6.49255 26.0951 6.52572 25.9719 6.52563C25.8172 6.52563 25.6669 6.47431 25.5441 6.38013C25.4215 6.28603 25.3332 6.15438 25.2932 6.00513C25.2531 5.85571 25.2633 5.69687 25.3224 5.55396C25.3816 5.41104 25.4863 5.29147 25.6203 5.21411L30.2433 2.54419V2.54517C30.3231 2.49851 30.4115 2.46784 30.5031 2.45532C30.5948 2.44283 30.6881 2.44829 30.7775 2.47192Z" fill="white" stroke="white" stroke-width="0.436887"/>
                    </svg>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!--Informasi Umum Banjar-->
    <section class ="bg-white w-full py-[71.25px] pr-[101.75px] pl-[105.75px]">
        <div class ="flex items-center justify-between">
            <div class ="mr-[60px]">
                <h1 class ="font-bold text-primary-200 text-[45px] mb-[14.25px]">Informasi Umum Banjar C</h1>
                <p class="text-[22.5px] mb-[12.5px] text-justify">Banjar C terletak di tengah Desa Compiler, Kecamatan Root, Kabupaten Extension, Provinsi VS Code. Saat ini Banjar C dihuni oleh 1523 warga yang terbagi ke dalam 256 kepala keluarga. Secara geografis banjar ini memiliki posisi strategis dengan batas wilayah sebagai berikut:</p>
                <div class ="w-[641px] h-[246px] rounded-[22px] bg-primary-50 drop-shadow-[3px_4px_3px_rgba(0,0,0,0.25)] py-[15px] px-[59px]">
                    
                    <div class ="grid grid-cols-5 gap-[11px]">
                    @foreach ($info as $infoc)
                    <div class =" bg-primary-100 rounded-[20px] w-[95.78px] h-[208px] drop-shadow-[0px_4px_4px_rgba(0,0,0,0.25)]">
                        <div class ="bg-white w-[96px] h-[81px] rounded-t-[20px] flex justify-center items-center">
                            <img src ="{{ $infoc['logo'] }}">
                        </div>
                        <h1 class ="font-bold text-white flex flex-col items-center text-center text-[15px] ml-[26px] mr-[27px] mb-[5px]">{{ $infoc['nama'] }}</h1>
                        <svg class ="ml-[25px] mr-[26.1px] mb-[4.41px] {{ $infoc['rotasi'] }}" width="45" height="43" viewBox="0 0 45 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.3438 38.2666L0 42.5918L22.3438 0V38.2666Z" fill="#FBDE3A"/>
                            <path d="M22.3436 38.2666L44.6864 42.5918L22.3436 0.000976562V38.2666Z" fill="#F49F04"/>
                        </svg>
                        <h1 class ="font-bold text-white flex flex-col items-center text-center text-[15px] ml-[26px] mr-[27px] mb-[8.93px]">{{ $infoc['arah'] }}</h1>
                    </div>
                    @endforeach
                </div>
                </div>
            </div>
            <img src ="/assets/home/home2.png">
        </div>
    </section>

    <!--Ini sejarah-->
    <section class="bg-primary-300 w-full py-[71.25px] pr-[101.75px] pl-[105.75px]">
        <div class="flex items-center gap-[80px]">  
            <div class="flex items-center">
                <img src="/assets/home/sejarah1.png">
                <div class="ml-[11px]">
                    <div class="bg-white w-[305px] h-[221px] mb-[10px] flex flex-col justify-center items-center rounded-l-[100px] rounded-tr-[100px] px-[29px] py-[23px]">
                        <h1 class="text-primary-300 font-bold text-center text-[35px] leading-tight">Sejarah Singkat Mengenai Banjar C</h1>
                    </div>
                    <img src="/assets/home/sejarah2.png">
                </div>
            </div>

            <div class="text-white text-[22.5px] flex-1 flex flex-col gap-[30px] text-justify">
                <p>Banjar C merupakan salah satu banjar tertua yang ada di Desa Compiler. Banjar C didirikan pada tahun 1972 yang dipimpin oleh seorang kepala banjar bernama Putu Dennis. Nama C dipilih sebagai nama agar mudah dipahami dan melekat di masyarakat awam saat itu.</p>
                <p>Pada awal berdirinya, Banjar C hanyalah sebuah hamparan tanah kosong, yang kemudian disusun dan dirancang sedemikian rupa sehingga dapat menjadi tempat tinggal penuh inovasi yang kemudian diadopsi oleh banjar-banjar lain yang ada di sekitarnya.</p>
            </div>
        </div>
    </section>

    <!--Ini visi misi-->
    <section class ="bg-white w-full py-[71.25px] pr-[101.75px] pl-[105.75px] flex justify-between items-center gap-5">
            <div>
                <div class ="w-[512px] h-[218px] px-[55px] bg-primary-50 flex justify-center items-center rounded-tl-[22px] drop-shadow-[0px_6.432px_4.288px_rgba(0,0,0,0.25)] mb-[17.15px]">
                    <h1 class ="font-bold text-[43px] text-primary-200 text-center">“Fondasi Kuat, Warga Berdaulat”</h1>
                </div>
                <div class ="w-[512px] h-[235px] px-[55px] py-[19px] bg-primary-50 rounded-bl-[22px] drop-shadow-[0px_6.432px_4.288px_rgba(0,0,0,0.25)]">
                    <h1 class ="font-bold text-[33px] text-primary-200 text-center">Visi Banjar C</h1>
                    <p class ="text-[20px] text-justify mt-3">Menjadi pilar komunitas desa yang stabil, efisien, dan menjadi dasar bagi kesejahteraan warga yang berkelanjutan.</p>
                </div>
            </div>
            <div class ="w-[512px] h-[469px] px-[55px] py-[19px] bg-primary-50 drop-shadow-[0px_6.432px_4.288px_rgba(0,0,0,0.25)]">
                <h1 class ="font-bold text-[33px] text-primary-200 text-center">Misi Banjar C</h1>
                <p class ="text-[24px] text-justify mt-3">1. Menjamin keamanan dan ketertiban lingkungan sebagai prioritas utama stabilitas banjar.</p>
                <p class ="text-[24px] text-justify">2. Mengoptimalkan potensi setiap warga dan memberdayakan UMKM untuk kemajuan ekonomi bersama.</p>
                <p class ="text-[24px] text-justify">3. Menjaga nilai budaya luhur sebagai fondasi dalam menghadapi modernisasi.</p>
            </div>
            <img src ="/assets/home/vm.png">
    </section>

    <!--Ini data-->
    <section class ="bg-primary-300 w-full py-[38px] px-40">
        <div class ="grid grid-cols-7 gap-[45px]">
        @foreach ($data as $datac)
        <div class ="w-[120px] flex flex-col items-center justify-center">
            {!! $datac['icon'] !!}
            <h1 class ="mt-[15px] text-white text-[26px] font-bold text-center leading-tight">{{ $datac['judul'] }}</h1>
        </div>
        @endforeach
        </div>
    </section>

    <!--Catatan-->
    <section class ="bg-white w-full py-[71.25px] pr-[101.75px] pl-[105.75px]">
        <div class ="flex justify-between items-center">
            <div class ="mr-[53px]">
                <h1 class ="font-bold text-[45px] text-primary-200 mb-[18px]">Catatan Perjalanan Banjar C</h1>
                <p class ="text-[20.5px] text-justify">Perjalanan Banjar C dari hamparan tanah kosong pada tahun 1972 hingga menjadi lingkungan yang penuh inovasi saat ini adalah bukti nyata dari semangat gotong royong yang tak pernah padam. Di tengah arus digitalisasi yang masif di Provinsi VS Code, kami tetap teguh memegang akar budaya warisan leluhur.</p>
                <p class ="text-[20.5px] text-justify">Setiap langkah, program, dan inovasi yang kami rancang selalu bermuara pada satu tujuan: memastikan setiap warga Banjar C dapat berdiri di atas fondasi yang kuat, mandiri secara ekonomi, dan berdaulat di tanahnya sendiri.</p>
            </div>
            <img src ="/assets/home/catatan.png">
        </div>
    </section>
</main>

@include('layouts.footer')
@endsection

