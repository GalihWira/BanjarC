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
    <title>Tagihan Admin</title>
</head>
<body class='font-sora bg-primary-50 mx-[150px] my-[61px]'>
    <main class='bg-white h-[380px] bg-center rounded-[20px] shadow-[4px_4px_10px_rgba(0,0,0,0.25)]'>
        <h1 class="text-primary-300 font-bold text-[48px] text-center pt-[25px]">Tagihan</h1> 
        <div class="bg-second-50 mx-[79px] mt-[20px]  mr-[79px] rounded-t-[10px] h-[42px] flex items-center justify-center">
            <h2 class="text-[16px] text-white">Masukan Nominal Tagihan Untuk Setiap Kepala Keluarga Dengan NIB Sebagai Karakter Unik </h2>
        </div>
        <div class="px-[79px_79px] mt-[25px] ">
            <div class="flex items-center justify-betweenn gap-[1%] grid grid-cols-[20%_28%_30%_20%]">
                <div>
                    <h4 class="text-[16.5px]">NIB <span class="text-red-500">*</span></h4> 
                    <input type="text" placeholder="Contoh : 0001" class="bg-input-50 rounded-[7px] mt-[4.7px] text-[16px] h-[31.25px] w-full pl-[12.5px] shadow-[1.4px_1.4px_2px_rgba(0,0,0,0.25)]">
                </div>
                <div>
                    <h5>Kategori Pembayaran<span class="text-red-500">*</span></h5>
                    <input type="text" placeholder="Contoh : Pembayaran Air" class="bg-input-50 rounded-[7px] mt-[4.7px] text-[16px] h-[31.25px] w-full pl-[12.5px] shadow-[1.4px_1.4px_2px_rgba(0,0,0,0.25)]">
                </div>
                <div>
                    <h6>Batas Akhir Pembayaran <span class="text-red-500">*</span></h6> 
                    <input type="text" placeholder="Contoh : 12 Januari 1999" class="bg-input-50 rounded-[7px] mt-[4.7px] text-[16px] h-[31.25px] w-full pl-[12.5px] shadow-[1.4px_1.4px_2px_rgba(0,0,0,0.25)]">
                </div>
                 <div class="mr-[10px]">
                    <h6 >Bulan  <span class="text-red-500">*</span></h6> 
                    <input type="text" placeholder="Contoh : Januari" class="bg-input-50 rounded-[7px] mt-[4.7px] text-[16px] h-[31.25px] w-full pl-[12.5px] shadow-[1.4px_1.4px_2px_rgba(0,0,0,0.25)]">
                </div>
            </div>
            
            <div class="flex items-center justify-between gap-[820px] mt-[60px] font-bold text-[16px]">
                <button class="w-1/2 ">
                    <a href="" class="text-white bg-second-50 rounded-[15px] w-full h-[37.35px] flex items-center justify-center shadow-[0px_3px_3px_rgba(0,0,0,0.25)]">Batal</a>
                </button>
                 <button class="w-1/2">
                    <a href="" class="text-white bg-second-50 rounded-[15px] w-full h-[37.35px] flex items-center justify-center shadow-[0px_3px_3px_rgba(0,0,0,0.25)]">Kirim</a>
                </button>
            </div>     
        </div>
                
    </main>
</body>
</html>