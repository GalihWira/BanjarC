

<?php $__env->startSection('title', 'Validasi Pengaduan'); ?>

<?php $__env->startSection('validasiPengaduan'); ?>

<body class ="font-sora bg-primary-50 px-[140px] pt-[34px] flex justify-center">
    <main>
        <section class ="flex items-center gap-4">
            <h1 class ="font-bold text-[40px] text-primary-300 drop-shadow-[1px_1px_1px_rgba(0,0,0,100)]">Validasi Pengaduan</h1>
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

        <section class ="w-[1160px] h-[552px] bg-white ring-inset ring-[5px] ring-second-50 rounded-[14px] mt-[27px] mb-[25px] overflow-hidden">
            <div class ="bg-second-50 w-[1160px] h-[43px] flex items-center">
                <div class ="w-[73.77px] h-[43px] border-r-2 border-white flex justify-center items-center">
                    <h1 class ="font-semibold text-[21px] text-white">No</h1>
                </div>
                <div class ="w-[286px] h-[43px] border-r-2 border-white flex justify-center items-center">
                    <h1 class ="font-semibold text-[21px] text-white">Nama</h1>
                </div>
                <div class ="w-[270px] h-[43px] border-r-2 border-white flex justify-center items-center">
                    <h1 class ="font-semibold text-[21px] text-white">Kategori</h1>
                </div>
                <div class ="w-[316px] h-[43px] border-r-2 border-white flex justify-center items-center">
                    <h1 class ="font-semibold text-[21px] text-white">Subjek Pengaduan</h1>
                </div>
                <div class ="w-[210px] h-[43px] flex justify-center items-center">
                    <h1 class ="font-semibold text-[21px] text-white">Status</h1>
                </div>
            </div>

            <div class ="grid-cols-5 ml-[5px] mt-2">
                <?php $__currentLoopData = $pengaduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengaduanc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class ="w-[1150px] h-fit flex items-center mb-2">
                <div class ="w-[73.77px] h-[43px] flex justify-center items-center">
                    <h1 class ="text-[17px] text-black"><?php echo e($pengaduanc['nomor']); ?></h1>
                </div>
                <div class ="w-[286px] h-fit flex justify-left items-center">
                    <h1 class ="text-[17px] text-black px-2"><?php echo e($pengaduanc['nama']); ?></h1>
                </div>
                <div class ="w-[270px] h-[43px] flex justify-left items-center">
                    <h1 class ="text-[17px] text-black px-2"><?php echo e($pengaduanc['adu']); ?></h1>
                </div>
                <div class ="w-[316px] h-[43px] flex justify-left items-center">
                    <h1 class ="text-[17px] text-black px-2"><?php echo e($pengaduanc['subjek']); ?></h1>
                </div>
                <div class ="w-[210px] h-[43px] flex justify-center items-center gap-[17px]">
                    <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.995" y="1.99512" width="35.91" height="35.91" rx="3.99" stroke="#308252" stroke-width="3.99"/>
                        <path d="M9.97559 21.9453L16.4593 28.9278L29.4268 10.9728" stroke="#308252" stroke-width="4.9875" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.995" y="1.99512" width="35.91" height="35.91" rx="3.99" stroke="#AE594E" stroke-width="3.99"/>
                        <path d="M10.9727 10.9728L29.4264 28.9278" stroke="#AE594E" stroke-width="4.9875" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M29.4268 10.9729L10.973 28.9279" stroke="#AE594E" stroke-width="4.9875" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="39.9" height="39.9" rx="5.985" fill="#FFAB1F"/>
                        <path d="M20 9.1864C24.3018 9.1864 28.3639 10.4845 31.4346 12.8563C34.5557 15.267 36.2959 18.5064 36.2959 21.9823C36.2959 22.2266 36.1991 22.4609 36.0264 22.6337C35.8536 22.8064 35.6193 22.9032 35.375 22.9032C35.1307 22.9032 34.8964 22.8064 34.7236 22.6337C34.5509 22.4609 34.4541 22.2266 34.4541 21.9823C34.4541 19.1162 32.9969 16.3908 30.3086 14.3143C27.5717 12.2006 23.9122 11.0282 20 11.0282C16.0878 11.0282 12.4283 12.2005 9.69141 14.3143C7.00309 16.3907 5.5459 19.1162 5.5459 21.9823C5.5459 22.2266 5.44914 22.4609 5.27637 22.6337C5.10359 22.8064 4.86934 22.9032 4.625 22.9032C4.38066 22.9032 4.14641 22.8064 3.97363 22.6337C3.80086 22.4609 3.7041 22.2266 3.7041 21.9823C3.7041 18.5064 5.44432 15.267 8.56543 12.8563C11.6361 10.4845 15.6982 9.1864 20 9.1864Z" fill="white" stroke="white" stroke-width="0.592593"/>
                        <path d="M20 13.2489C24.8161 13.2489 28.7334 17.1662 28.7334 21.9823C28.7334 26.7984 24.8161 30.7157 20 30.7157C15.1839 30.7157 11.2666 26.7984 11.2666 21.9823C11.2666 17.1662 15.1839 13.2489 20 13.2489ZM19.7451 15.0956C18.4715 15.1427 17.2343 15.5429 16.1719 16.2528C15.0386 17.01 14.1554 18.0864 13.6338 19.3456C13.1123 20.6047 12.9753 21.9903 13.2412 23.327C13.5071 24.6637 14.1633 25.8917 15.127 26.8553C16.0906 27.819 17.3186 28.4752 18.6553 28.7411C19.992 29.007 21.3776 28.87 22.6367 28.3485C23.8959 27.8269 24.9723 26.9437 25.7295 25.8104C26.4866 24.6772 26.8916 23.3452 26.8916 21.9823C26.8894 20.1553 26.162 18.4041 24.8701 17.1122C23.5782 15.8203 21.827 15.0929 20 15.0907L19.7451 15.0956Z" fill="white" stroke="white" stroke-width="0.592593"/>
                    </svg>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class ="flex justify-center font-sora font-bold text-[13px] gap-2">
                <div class ="w-[34px] h-[34px] rounded-[3px] bg-second-50 hover:ring-inset hover:ring-2 hover:ring-second-50 hover:bg-white">
                    <a class ="w-[34px] h-[34px] flex justify-center items-center text-white hover:text-second-50">1</a>
                </div>
                <div class ="w-[34px] h-[34px] rounded-[3px] bg-white hover:ring-inset hover:ring-2 hover:ring-second-50 hover:bg-white">
                    <a class ="w-[34px] h-[34px] flex justify-center items-center text-second-50">2</a>
                </div>
                <div class ="w-[34px] h-[34px] rounded-[3px] bg-white hover:ring-inset hover:ring-2 hover:ring-second-50 hover:bg-white">
                    <a class ="w-[34px] h-[34px] flex justify-center items-center text-second-50">3</a>
                </div>
                <div class ="flex items-center gap-[5px]">
                    <h1 class ="text-second-50 text-[15px]">Next</h1>
                    <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.834961 11.415L5.99017 6.8979C6.50134 6.45 6.49559 5.65266 5.97801 5.21218L0.834961 0.835205" stroke="#FFAB1F" stroke-width="1.6705" stroke-linecap="round"/>
                    </svg>
                </div>
            </div>
        </section>
    </main>
</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.sidbarUser', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Tugas Tugas Hevan\Universitas Udayana\07_FRONT END BACK END\KELOMPOK C (BANJAR DIGITAL)\BanjarC\resources\views/valpengaduan.blade.php ENDPATH**/ ?>