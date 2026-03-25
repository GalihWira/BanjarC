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
<body class="bg-primary-50">
    <main class="flex items-center pb-[56px] px-20">
        <section class="w-[1282px] h-[641px] bg-white font-sora rounded-[14px] drop-shadow-[7px_8px_4.1px_rgba(0,0,0,0.5)] flex flex-col items-center pt-[39px] -mt-2">
            <h1 class="text-[64px] font-bold text-primary-200 px-12 mb-[21px]">Pengaduan & Peminjaman</h1>
            <div class="rounded-t-[13px] w-280 h-15 bg-second-50 border border-black">
                <h2 class="px-21 text-white font-bold text-[24px] pt-2.5 pl-6.5 ">Layanan Pengaduan</h2>
                <div class="border border-black bg-white w-280 h-33 flex flex-col items-center">
                    <p class="text-black text-[20px] pt-[12.64px] pl-6.5">Banjar C membuka layanan pengaduan seputar kendala ataupun masalah yang terjadi di banjar. Layanan ini diharapkan dapat mempermudah masyarakat  untuk menyampaikan aspirasi ataupun keluhannya. </p>
                    <button class="mt-[8px] text-white bg-primary-300 border border-[#081E31] rounded-lg px-[43px] py-[4px]">Buat Pengaduan</button>
                </div>
            </div>
            <div class="rounded-t-[13px] w-280 h-15 bg-second-50 border border-black mt-[154px]">
                <h2 class="px-21 text-white font-bold text-[24px] pt-2.5 pl-6.5 ">Layanan Peminjaman</h2>
                <div class="border border-black bg-white w-280 h-33 flex flex-col items-center">
                    <p class="text-black text-[20px] pt-[12.64px] pl-6.5">Banjar C membuka layanan peminjaman tempat dan inventaris yang dimiliki oleh banjar secara digital. Layanan ini diharapkan dapat mempermudah masyarakat yang memerlukan tempat ataupun inventaris.</p>
                    <button class="mt-[8px] text-white bg-primary-300 border border-[#081E31] rounded-lg px-[43px] py-[4px]">Ajukan Peminjaman</button>
                </div>
            </div>
        </section>
    </main>
</body>
</html>