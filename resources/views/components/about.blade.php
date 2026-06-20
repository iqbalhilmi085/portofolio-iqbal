<section id="about" class="py-20 sm:py-28 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold">Tentang Saya</h2>
            <div class="mt-3 w-20 h-1 bg-indigo-600 mx-auto rounded-full"></div>
        </div>
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="flex justify-center">
                <div class="w-64 h-64 rounded-2xl bg-gradient-to-br from-indigo-100 to-purple-100 flex items-center justify-center shadow-lg">
                    <span class="text-6xl font-bold text-indigo-400">IQ</span>
                </div>
            </div>
            <div>
                <p class="text-gray-600 leading-relaxed text-lg">{{ $profile['about'] }}</p>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-6 mt-16 max-w-2xl mx-auto">
            <div class="text-center p-6 bg-white rounded-xl shadow-sm border border-gray-100">
                <div class="text-3xl font-bold text-indigo-600">{{ $profile['stats']['projects'] }}+</div>
                <div class="text-sm text-gray-500 mt-1">Proyek Selesai</div>
            </div>
            <div class="text-center p-6 bg-white rounded-xl shadow-sm border border-gray-100">
                <div class="text-3xl font-bold text-indigo-600">{{ $profile['stats']['experience'] }}+</div>
                <div class="text-sm text-gray-500 mt-1">Tahun Pengalaman</div>
            </div>
            <div class="text-center p-6 bg-white rounded-xl shadow-sm border border-gray-100">
                <div class="text-3xl font-bold text-indigo-600">{{ $profile['stats']['clients'] }}+</div>
                <div class="text-sm text-gray-500 mt-1">Klien Puas</div>
            </div>
        </div>
    </div>
</section>
