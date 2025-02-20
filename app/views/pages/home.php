<template>
    <div
        class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-r from-blue-900 to-blue-700 text-white text-center">
        <div class="bg-white/10 p-10 rounded-2xl shadow-lg backdrop-blur-md max-w-md animate-fadeIn">
            <div class="flex w-full justify-center">
                <img src="<?= $icon ?>" alt="LMSN Logo"
                    class="w-32 mb-5 transition-transform duration-300 hover:scale-110 ">
            </div>
            <h1 class="text-4xl font-bold mb-2">Welcome to <?= $title ?></h1>
            <p class="text-lg opacity-80 mb-4">Your custom PHP framework is ready! 🚀</p>
            <a href="https://github.com/lmsn-id" target="_blank"
                class="inline-block bg-white text-blue-900 font-semibold px-6 py-2 rounded-lg shadow-md transition duration-300 hover:bg-gray-200 hover:-translate-y-1">
                Visit LMSN GitHub
            </a>
            <div class="mt-5 text-sm opacity-70">© <?= date('Y') ?> LMSN Framework. All rights reserved.</div>
        </div>
    </div>
</template>