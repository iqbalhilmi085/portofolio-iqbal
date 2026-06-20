<section id="skills" class="py-20 sm:py-28 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold">Skill & Tech Stack</h2>
            <div class="mt-3 w-20 h-1 bg-indigo-600 mx-auto rounded-full"></div>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
            @foreach($skills as $skill)
                <div class="group p-5 bg-gray-50 rounded-xl hover:bg-indigo-50 hover:shadow-md hover:border-indigo-200 transition-all duration-300 border border-transparent">
                    <div class="text-2xl mb-2">{{ $skill['icon'] }}</div>
                    <div class="font-semibold text-gray-800 group-hover:text-indigo-600 transition">{{ $skill['name'] }}</div>
                    <div class="text-xs text-gray-400 mt-0.5">{{ $skill['category'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
