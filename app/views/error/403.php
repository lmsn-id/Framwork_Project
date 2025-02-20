<template>
    <div class="flex items-center justify-center min-h-screen bg-gray-900 text-white text-center">
        <div class="bg-gray-800 p-10 rounded-lg shadow-lg">
            <h1 class="text-4xl font-bold mb-2">403 Forbidden</h1>
            <p class="text-lg mb-4"><strong>Kesalahan:</strong> File tampilan yang diminta tidak terletak di dalam
                direktori
                <code class="bg-gray-700 px-2 py-1 rounded">/pages/</code>
            </p>
            <p class="text-lg opacity-80 mb-6">Semua file tampilan harus ditempatkan di dalam <code
                    class="bg-gray-700 px-2 py-1 rounded">/views/pages/</code> agar dapat diakses.</p>
            <a href="/"
                class="px-6 py-2 bg-blue-500 hover:bg-blue-600 transition rounded-md shadow-md text-white font-semibold">Go
                Back Home</a>
        </div>
    </div>
</template>