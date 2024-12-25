<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URU-Borrow</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom Font Integration */
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="bg-cover bg-center min-h-screen flex flex-col items-center pt-12" 
      style="background-image: url('image/46.jpg'); animation: fadeIn 1s ease-out;">
    
    <!-- Top Section -->
    <div class="fixed top-0 left-0 w-full bg-gradient-to-r from-green-500 to-yellow-400 text-white text-center py-4 shadow-md z-20">
        <h1 class="text-lg md:text-2xl font-bold">ระบบยืม-คืนวัสดุครุภัณฑ์และสารเคมี</h1>
    </div>

    <!-- Logo Section -->
    <header class="mt-24 mb-8 text-center">
        <img src="image/logouru.png" alt="Logo" class="w-48 md:w-64 h-auto">
    </header>

    <!-- Links to Systems -->
    <div class="flex flex-col items-center gap-6 px-4">
        <!-- System 1 -->
        <a href="http://sci-borrow.ddns.net:8000/" 
           class="bg-white bg-opacity-90 rounded-lg shadow-lg p-4 text-center hover:shadow-2xl transition transform hover:scale-105 border-2 border-blue-500 hover:border-blue-700 w-3/4 max-w-md">
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-10 w-10 mb-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                </svg>
                <h2 class="text-lg md:text-xl font-bold text-blue-600">ระบบยืม-คืนวัสดุครุภัณฑ์</h2>
                <p class="text-gray-500 mt-2">คลิก เราจะพาคุณไปที่ ระบบยืม-คืนวัสดุ ครุภัณฑ์ประจำห้องปฏิบัติการหลักสูตร ฟิสิกส์ เคมี ชีววิทยา</p>
            </div>
        </a>
        
        <!-- System 2 -->
        <a href="/sci-borrow-main/sci-borrow-main/" 
           class="bg-white bg-opacity-90 rounded-lg shadow-lg p-4 text-center hover:shadow-2xl transition transform hover:scale-105 border-2 border-green-500 hover:border-green-700 w-3/4 max-w-md">
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-10 w-10 mb-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                </svg>
                <h2 class="text-lg md:text-xl font-bold text-green-600">ระบบจัดการสารเคมี</h2>
                <p class="text-gray-500 mt-2">คลิก เราจะพาคุณไปที่ ระบบจัดการสารเคมี</p>
            </div>
        </a>
    </div>

    <!-- Footer -->
    <footer class="fixed bottom-0 left-0 w-full bg-gradient-to-r from-green-500 to-yellow-400 text-gray-900 text-sm z-10">
        <div class="py-4 px-6 flex flex-wrap md:flex-nowrap justify-between items-center">
            <div class="text-center md:text-left mb-4 md:mb-0">
                <p class="font-bold text-lg">U: Unity  R: Responsibility  U: Uniqueness</p>
            </div>
            <div class="flex flex-wrap md:flex-nowrap items-center text-center md:text-right space-y-2 md:space-y-0 md:space-x-4">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                    </svg>
                    <span class="text-gray-900">มหาวิทยาลัยราชภัฏอุตรดิตถ์</span>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1 17v-2h2v2h-2z"/>
                    </svg>
                    <span class="text-gray-900">www.uru.ac.th</span>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M3 9.667V21h7.625v-6h2.75v6H21V9.667l-9-7.5zM19.667 20h-5.5v-6.5h-3.334V20H4.333V9.667L12 4.333l7.667 5.334z"/>
                    </svg>
                    <span class="text-gray-900">055-416001-20 ต่อ 0</span>
                </div>
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
