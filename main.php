<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URU-Borrow</title>
    <!-- Import Noto Sans Thai -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Noto Sans Thai', sans-serif;
        }
    </style>
</head>
<body class="bg-cover bg-center min-h-screen flex flex-col items-center pt-16 pb-16" 
      style="background-image: url('image/46.jpg'); animation: fadeIn 1s ease-out;">

<!-- Top Section -->
<div class="fixed top-0 left-0 w-full bg-gradient-to-r from-green-500 to-yellow-400 text-white text-center py-3 shadow-md z-20 flex flex-col md:flex-row justify-between items-center px-4 space-y-2 md:space-y-0">
    <h1 class="text-sm md:text-xl font-bold text-center md:text-left flex-1">ระบบยืม-คืนวัสดุครุภัณฑ์และจัดการสารเคมีประจำห้องปฏิบัติการหลักสูตร ฟิสิกส์ เคมี ชีววิทยา มหาวิทยาลัยราชภัฏอุตรดิตถ์</h1>
    <div class="flex space-x-2">
        <a href="http://www.facebook.com/scienceuru" 
           class="bg-white text-green-500 font-bold text-sm md:text-base py-2 px-4 rounded-lg shadow hover:bg-gray-200 transition transform hover:scale-105">
           ระบบมีปัญหา
        </a>
        <a href="http://www.facebook.com/scienceuru" 
           class="bg-white text-green-500 font-bold text-sm md:text-base py-2 px-4 rounded-lg shadow hover:bg-gray-200 transition transform hover:scale-105">
           คู่มือการใช้งาน
        </a>
    </div>
</div>


    <!-- Logo Section -->
    <header class="mt-20 mb-6 text-center">
        <img src="image/logouru.png" alt="Logo" class="w-36 md:w-48 h-auto">
    </header>

<!-- Links to Systems -->
<div class="flex flex-col items-center gap-4 px-4">
    <!-- System 1 -->
    <a href="http://sci-borrow.ddns.net:8001/" target="_blank" rel="noopener noreferrer"
       class="bg-white bg-opacity-90 rounded-lg shadow-lg p-4 text-center hover:shadow-2xl transition transform hover:scale-105 border-2 border-blue-500 hover:border-blue-700 w-11/12 max-w-md">
        <div class="flex flex-col items-center">
            <!-- Icon for System 1 -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-10 w-10 mb-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
            </svg>
            <h2 class="text-base md:text-lg font-bold text-blue-600">ระบบยืม-คืนวัสดุครุภัณฑ์</h2>
            <p class="text-gray-500 mt-2 text-sm md:text-base">คลิก เราจะพาคุณไปที่ ระบบยืม-คืนวัสดุ ครุภัณฑ์ประจำห้องปฏิบัติการหลักสูตร ฟิสิกส์ เคมี ชีววิทยา</p>
        </div>
    </a>
    
    <!-- System 2 -->
    <a href="http://sci-borrow.ddns.net:8002/" target="_blank" rel="noopener noreferrer"
       class="bg-white bg-opacity-90 rounded-lg shadow-lg p-4 text-center hover:shadow-2xl transition transform hover:scale-105 border-2 border-green-500 hover:border-green-700 w-11/12 max-w-md">
        <div class="flex flex-col items-center">
            <!-- Icon for System 2 -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-10 w-10 mb-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
            </svg>
            <h2 class="text-base md:text-lg font-bold text-green-600">ระบบจัดการสารเคมี</h2>
            <p class="text-gray-500 mt-2 text-sm md:text-base">คลิก เราจะพาคุณไปที่ ระบบจัดการสารเคมีประจำห้องปฏิบัติการหลักสูตร ฟิสิกส์ เคมี ชีววิทยา</p>
        </div>
    </a>
</div>


    <footer class="fixed bottom-0 left-0 w-full bg-gradient-to-r from-green-500 to-yellow-400 text-gray-900 text-sm z-10">
        <div class="py-4 px-6 flex flex-wrap md:flex-nowrap justify-between items-center">
            <div class="text-center md:text-left mb-2 md:mb-0">
                <p class="font-bold text-base md:text-lg">U: Uttaradit  R: Rajabhat   U: University</p>
            </div>
            <div class="flex flex-wrap md:flex-nowrap items-center text-center md:text-right space-y-1 md:space-y-0 md:space-x-6">
                <span class="text-base">มหาวิทยาลัยราชภัฏอุตรดิตถ์</span>
                <span class="text-base">www.uru.ac.th</span>
                <span class="text-base">055-416001-20 ต่อ 0</span>
            </div>
        </div>
    </footer>

    <!-- Custom Animations -->
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</body>
</html>
