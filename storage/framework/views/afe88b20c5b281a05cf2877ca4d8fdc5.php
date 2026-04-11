<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belgrano&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/bar.js']); ?>
    <title>Banjar C || <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <header class ="bg-white w-full h-[90px] rounded-b-[50px] flex justify-between items-center gap-[200px] px-[103px] py-3 drop-shadow-[0px_4px_4px_rgba(0,0,0,0.25)] sticky top-0 z-50 relative">
        <div class ="flex items-center gap-2 justify-center">
            <h1 class ="font-paytone font-bold text-[33px] text-logo-400">Banjar</h1>
            <img src ="/assets/login/logoC.png" class ="w-[36px] h-[36px]">
        </div>
        <nav class ="font-sora font-bold text-2xl text-primary-400 flex justify-between items-center">
            <a href ="#" class ="w-[120px] flex justify-center items-center hover:h-[90px] hover:bg-primary-200 hover:text-white">Home</a>
            <a href ="#"  class ="w-[204px] flex justify-center items-center hover:h-[90px] hover:bg-primary-200 hover:text-white" >Place To Go</a>
            <a href ="#" class ="w-[212px] flex justify-center items-center hover:h-[90px] hover:bg-primary-200 hover:text-white" >Local Product</a>
        </nav>
        <div>
            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_577_10365)">
                <path d="M22.8755 23.7686C16.3224 23.7686 10.9912 18.4373 10.9912 11.8843C10.9912 5.33131 16.3224 0 22.8755 0C29.4286 0 34.7598 5.33131 34.7598 11.8843C34.7598 18.4373 29.4286 23.7686 22.8755 23.7686ZM22.8755 1.78711C20.8785 1.78711 18.9263 2.3793 17.2658 3.48879C15.6053 4.59828 14.3112 6.17524 13.5469 8.02026C12.7827 9.86528 12.5827 11.8955 12.9723 13.8541C13.3619 15.8128 14.3236 17.6119 15.7357 19.0241C17.1478 20.4362 18.947 21.3978 20.9056 21.7874C22.8643 22.177 24.8945 21.9771 26.7395 21.2128C28.5845 20.4486 30.1615 19.1544 31.271 17.494C32.3805 15.8335 32.9727 13.8813 32.9727 11.8843C32.9697 9.20726 31.9049 6.64075 30.0119 4.74782C28.119 2.85488 25.5525 1.79011 22.8755 1.78711Z" fill="#1E3A5F"/>
                <path d="M44.8564 45.7499H0.893555C0.656569 45.7499 0.42929 45.6557 0.261716 45.4882C0.0941421 45.3206 3.07946e-10 45.0933 3.07945e-10 44.8563C-2.347e-05 40.3321 1.34156 35.9094 3.85509 32.1476C6.36863 28.3858 9.94123 25.4538 14.1211 23.7225C18.301 21.9911 22.9004 21.5381 27.3377 22.4208C31.7751 23.3034 35.851 25.4821 39.0501 28.6812C41.1809 30.8004 42.8702 33.3212 44.0202 36.0977C45.1702 38.8741 45.7582 41.8511 45.75 44.8563C45.75 45.0933 45.6559 45.3206 45.4883 45.4882C45.3207 45.6557 45.0934 45.7499 44.8564 45.7499ZM1.80578 43.9628H43.9442C43.4741 32.7479 34.2034 23.7684 22.875 23.7684C11.5466 23.7684 2.27588 32.7479 1.80578 43.9628Z" fill="#1E3A5F"/>
                </g>
                <defs>
                <clipPath id="clip0_577_10365">
                <rect width="45.75" height="45.75" fill="white"/>
                </clipPath>
                </defs>
            </svg>
            <a href ="/login" class ="font-sora font-bold text-[15px] text-primary-400 mt-0">Login</a>
        </div>
    </header>

    <?php echo $__env->yieldContent('home'); ?>
</body>
</html><?php /**PATH D:\Tugas Tugas Hevan\Universitas Udayana\07_FRONT END BACK END\KELOMPOK C (BANJAR DIGITAL)\BanjarC\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>