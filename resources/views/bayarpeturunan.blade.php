<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belgrano&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Sora:wght@100..800&display=swap" rel="stylesheet">
     @vite(['resources/css/app.css'])
    <title>Bayar Tagihan</title>
</head>
<body class='font-sora bg-primary-50 mx-[150px] my-[61px]'>
    <main class='bg-white h-175 bg-center rounded-[20px] shadow-[4px_4px_10px_rgba(0,0,0,0.25)]'>
        <h1 class="text-primary-300 font-bold text-[48px] text-center pt-[34px]">Pembayaran Peturunan</h1> 
        <div class="bg-second-50 mx-[79px] mt-[20px] rounded-t-[10px] h-[42px] flex items-center justify-center">
            <h2 class="text-[16px] text-white">Pembayaran ditransfer ke rekening BNI nomor <span class="text-red-500">12345678</span> atas nama Banjar C</h2>
        </div>
        <div>
            <div class="bg-primary-50 h-[35px] ml-[79px] w-[168px] rounded-[13px] mt-[28.69px] flex items-center justify-center gap-[5px] font-semibold">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" class=" w-[20px] h-[20px]">
                <path d="M9.29258 10.9637C8.49921 10.1704 8.10253 9.21662 8.10253 8.10253C8.10253 6.98843 8.49921 6.0347 9.29258 5.24133C10.086 4.44796 11.0397 4.05127 12.1538 4.05127C13.2679 4.05127 14.2216 4.44796 15.015 5.24133C15.8084 6.0347 16.205 6.98843 16.205 8.10253C16.205 9.21662 15.8084 10.1704 15.015 10.9637C14.2216 11.7571 13.2679 12.1538 12.1538 12.1538C11.0397 12.1538 10.086 11.7571 9.29258 10.9637ZM4.05127 18.2307V17.4204C4.05127 16.8465 4.19914 16.3191 4.49488 15.8384C4.79062 15.3576 5.18292 14.9903 5.67177 14.7365C6.71835 14.2132 7.7818 13.8209 8.86214 13.5596C9.94247 13.2983 11.0397 13.1673 12.1538 13.1666C13.2679 13.1659 14.3651 13.2969 15.4454 13.5596C16.5258 13.8222 17.5892 14.2145 18.6358 14.7365C19.1253 14.9897 19.518 15.357 19.8137 15.8384C20.1094 16.3198 20.257 16.8472 20.2563 17.4204V18.2307C20.2563 18.7877 20.0581 19.2647 19.6618 19.6618C19.2654 20.0588 18.7884 20.257 18.2307 20.2563H6.0769C5.51985 20.2563 5.04315 20.0581 4.6468 19.6618C4.25046 19.2654 4.05194 18.7884 4.05127 18.2307Z" fill="#004481"/>
                </svg>
                <h3 class="text-primary-300 text-[18px] ">Identitas Diri</h3>
            </div>
            <div class=" mx-[79px] mt-[10px] flex items-center justify-betweenn gap-[38px] grid grid-cols-3">
                <div>
                    <h4 class="text-[16.5px]">Nama Lengkap <span class="text-red-500">*</span></h4> 
                    <input type="text" placeholder="Contoh : Kadek Aditya" class="bg-input-50 rounded-[7px] mt-[4.7px] text-[16px] h-[31.25px] w-full pl-[12.5px] shadow-[1.4px_1.4px_2px_rgba(0,0,0,0.25)]">
                </div>
                <div>
                    <h5>Nomor Telepon  <span class="text-red-500">*</span></h5>
                    <input type="text" placeholder="Contoh : 08123456789" class="bg-input-50 rounded-[7px] mt-[4.7px] text-[16px] h-[31.25px] w-full pl-[12.5px] shadow-[1.4px_1.4px_2px_rgba(0,0,0,0.25)]">
                </div>
                <div>
                    <h6>NIB  <span class="text-red-500">*</span></h6> 
                    <input type="text" placeholder="Contoh : 0001" class="bg-input-50 rounded-[7px] mt-[4.7px] text-[16px] h-[31.25px] w-full pl-[12.5px] shadow-[1.4px_1.4px_2px_rgba(0,0,0,0.25)]">
                </div>
            </div>
            <div class="bg-primary-50 h-[34.37px] ml-[79px] w-[213.91px] rounded-[13px] mt-[28.69px] flex items-center justify-center gap-[5px] font-semibold">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class=" w-[20px] h-[20px]">
                <path d="M16.3086 7.21137L16.7239 6.79513C17.0546 6.46431 17.5032 6.2784 17.971 6.27832C18.4387 6.27824 18.8874 6.46398 19.2182 6.79468C19.549 7.12538 19.7349 7.57396 19.735 8.04173C19.7351 8.5095 19.5494 8.95814 19.2187 9.28897L18.8033 9.7052M16.3086 7.21137C16.3086 7.21137 16.3606 8.09408 17.1402 8.87363C17.9197 9.65317 18.8033 9.7052 18.8033 9.7052M16.3086 7.21137L12.4871 11.0329C12.2269 11.2912 12.0978 11.4213 11.9865 11.5639C11.855 11.7326 11.7431 11.9138 11.651 12.1075C11.573 12.2708 11.5156 12.4439 11.3998 12.7911L11.0294 13.9035L10.9092 14.2632M18.8033 9.7052L14.9818 13.5267C14.7217 13.7868 14.5925 13.916 14.4499 14.0273C14.2812 14.1588 14.1 14.2707 13.9062 14.3628C13.743 14.4408 13.5698 14.4982 13.2227 14.6139L12.1103 14.9844L11.7506 15.1046M10.9092 14.2632L10.7898 14.6238C10.7621 14.7075 10.7581 14.7973 10.7784 14.8831C10.7987 14.969 10.8425 15.0474 10.9049 15.1098C10.9672 15.1722 11.0457 15.216 11.1316 15.2363C11.2174 15.2566 11.3072 15.2526 11.3909 15.2248L11.7506 15.1046M10.9092 14.2632L11.7506 15.1046" stroke="#004481" stroke-width="1.04175"/>
                <path d="M7.17624 11.6612H9.4189M7.17624 8.0729H13.0072M7.17624 15.2494H8.52183M17.7867 2.84482C16.7362 1.79346 15.0444 1.79346 11.6616 1.79346H9.86743C6.4846 1.79346 4.79274 1.79346 3.74228 2.84482C2.69181 3.89617 2.69092 5.58714 2.69092 8.96997V12.5582C2.69092 15.9411 2.69092 17.6329 3.74228 18.6834C4.79364 19.7338 6.4846 19.7347 9.86743 19.7347H11.6616C15.0444 19.7347 16.7362 19.7347 17.7867 18.6834C18.6335 17.8374 18.7977 16.5771 18.83 14.3524" stroke="#004481" stroke-width="1.04175" stroke-linecap="round"/>
                </svg>

                <h7 class="text-primary-300 text-[18px] ">Detail Pembayaran</h7>
            </div>
            <div class=" mx-[79px] mt-[10px] flex items-center justify-betweenn gap-[38px] grid grid-cols-3">
                <div>
                    <h8 class="text-[16.5px]">Tanggal Pembayaran <span class="text-red-500">*</span></h8>
                    <input type="text" placeholder="Contoh : 12/12/2121" class="bg-input-50 rounded-[7px] mt-[4.7px] text-[16px] h-[31.25px] w-full pl-[12.5px] shadow-[1.4px_1.4px_2px_rgba(0,0,0,0.25)]">
                </div>
                <div>
                    <h9 class="text-[16.5px]">Upload Bukti Bayar <span class="text-red-500">*</span></h9>
                    <label for="upload" class="flex items-center text-[#6D6D6D] bg-input-50 rounded-[7px] mt-[4.7px] h-[31.25px] w-full pl-[12.5px] shadow-[1.4px_1.4px_2px_rgba(0,0,0,0.25)]  ">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[20px] h-[20px] pr-[3px]">
                        <path d="M4.68812 15.626C4.25839 15.626 3.89065 15.4731 3.5849 15.1674C3.27915 14.8616 3.12601 14.4936 3.12549 14.0634V12.5007C3.12549 12.2794 3.20049 12.0939 3.35051 11.9445C3.50052 11.795 3.68595 11.72 3.9068 11.7194C4.12765 11.7189 4.31335 11.7939 4.46388 11.9445C4.61441 12.095 4.68916 12.2804 4.68812 12.5007V14.0634H14.0639V12.5007C14.0639 12.2794 14.1389 12.0939 14.2889 11.9445C14.4389 11.795 14.6243 11.72 14.8452 11.7194C15.066 11.7189 15.2517 11.7939 15.4023 11.9445C15.5528 12.095 15.6275 12.2804 15.6265 12.5007V14.0634C15.6265 14.4931 15.4736 14.8611 15.1679 15.1674C14.8621 15.4736 14.4941 15.6265 14.0639 15.626H4.68812ZM8.59468 6.13304L7.12972 7.59801C6.97346 7.75427 6.78803 7.82927 6.57343 7.82302C6.35882 7.81677 6.17313 7.73526 6.01635 7.57847C5.87311 7.42221 5.7981 7.2399 5.79133 7.03155C5.78456 6.8232 5.85956 6.6409 6.01635 6.48463L8.82908 3.6719C8.90721 3.59377 8.99185 3.53856 9.083 3.50627C9.17416 3.47397 9.27182 3.45756 9.376 3.45704C9.48017 3.45652 9.57784 3.47293 9.66899 3.50627C9.76014 3.5396 9.84479 3.59481 9.92292 3.6719L12.7356 6.48463C12.8919 6.6409 12.9669 6.8232 12.9607 7.03155C12.9544 7.2399 12.8794 7.42221 12.7356 7.57847C12.5794 7.73473 12.394 7.81625 12.1794 7.82302C11.9647 7.82979 11.7791 7.75479 11.6223 7.59801L10.1573 6.13304V11.7194C10.1573 11.9408 10.0823 12.1265 9.93229 12.2765C9.78228 12.4265 9.59685 12.5013 9.376 12.5007C9.15515 12.5002 8.96971 12.4252 8.8197 12.2757C8.66969 12.1262 8.59468 11.9408 8.59468 11.7194V6.13304Z" fill="#9A9A9A"/>
                        </svg>
                        Upload Bukti JPG/PDF
                    </label>
                    <input type="file" name="bukti" id="upload" class="hidden">
                   
                </div>
                <div>
                    <h10 class="text-[16.5px]">Bulan <span class="text-red-500">*</span></h10>
                    <input type="text" placeholder="Contoh : Januari" class="bg-input-50 rounded-[7px] mt-[4.7px] text-[16px] h-[31.25px] w-full pl-[12.5px] shadow-[1.4px_1.4px_2px_rgba(0,0,0,0.25)]">
                </div>
            </div>
             <div class="my-[10px] mx-[79px]">
                <h11 class="text-[16.5px]" >Catatan (Opsional)</h11>
                <input type="text" placeholder="" class="bg-input-50 rounded-[7px] mt-[4.7px] text-[16px] h-[60px] w-full pl-[12.5px] shadow-[1.4px_1.4px_2px_rgba(0,0,0,0.25)]">
            </div>
            <h12 class="text-[16px] font-extralight mx-[79px]">Kolom bertanda bintang (<span class="text-red-500">*</span>) wajib diisi</h12>
            <div class="flex items-center justify-between mx-[79px] gap-[820px] mt-[48px] font-bold text-[16px]">
                <button class="w-1/2 ">
                    <a href="{{ route('tagihan') }}"" class="text-white bg-second-50 rounded-[15px] w-full h-[37.35px] flex items-center justify-center shadow-[0px_3px_3px_rgba(0,0,0,0.25)]">Batal</a>
                </button>
                 <button class="w-1/2">
                    <a href="" class="text-white bg-second-50 rounded-[15px] w-full h-[37.35px] flex items-center justify-center shadow-[0px_3px_3px_rgba(0,0,0,0.25)]">Kirim</a>
                </button>
            </div>     
        </div>
                
    </main>
</body>
</html>