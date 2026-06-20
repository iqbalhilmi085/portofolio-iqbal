<section id="contact" class="py-20 sm:py-28 bg-white">
    <div class="max-w-2xl mx-auto px-4 sm:px-6">
        <div class="animate-on-scroll text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold">Hubungi Saya</h2>
            <div class="mt-3 w-20 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 mx-auto rounded-full"></div>
            <p class="text-gray-500 mt-4">Ada pertanyaan atau ingin bekerja sama? Silakan kirim pesan melalui form di bawah.</p>
        </div>

        @if(session('success'))
            <div class="animate-on-scroll bg-green-50 border border-green-200 text-green-700 px-5 py-4 rounded-xl mb-8 flex items-center gap-3" role="alert">
                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <form id="contact-form" action="{{ route('contact') }}" method="POST" class="animate-on-scroll space-y-5">
            @csrf

            <div class="absolute left-[-9999px]" aria-hidden="true">
                <label for="_gotcha">Jangan diisi</label>
                <input type="text" name="_gotcha" id="_gotcha" tabindex="-1" autocomplete="off">
            </div>

            <div class="grid sm:grid-cols-2 gap-5">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1.5">Nama <span class="text-red-500">*</span></label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required
                           class="w-full border border-gray-300 rounded-xl px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition @error('name') border-red-400 @enderror"
                           placeholder="Masukkan nama Anda">
                    @error('name') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">Email <span class="text-red-500">*</span></label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required
                           class="w-full border border-gray-300 rounded-xl px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition @error('email') border-red-400 @enderror"
                           placeholder="contoh@email.com">
                    @error('email') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-1.5">Pesan <span class="text-red-500">*</span></label>
                <textarea name="message" id="message" rows="5" required
                          class="w-full border border-gray-300 rounded-xl px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition @error('message') border-red-400 @enderror"
                          placeholder="Tulis pesan Anda di sini...">{{ old('message') }}</textarea>
                @error('message') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
            </div>

            <button type="submit"
                    class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-3 rounded-xl hover:from-indigo-700 hover:to-purple-700 active:from-indigo-800 active:to-purple-800 transition-all font-medium shadow-lg shadow-indigo-200 hover:shadow-indigo-300 disabled:opacity-60 disabled:cursor-not-allowed hover:-translate-y-0.5">
                Kirim Pesan
            </button>
        </form>
    </div>
</section>
