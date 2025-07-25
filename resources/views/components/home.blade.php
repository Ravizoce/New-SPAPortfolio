<section class="min-h-screen pt-3 md:pt-0 bg-gray-900 relative overflow-hidden">
    <!-- Animated background elements -->
    <div class="matrix-bg" id="matrix-bg"></div>

    <div class="container mx-auto px-6 py-16 md:py-24 relative z-10">
        <div class="flex flex-col lg:flex-row items-center justify-between">
            <div class="lg:w-3/5 mb-12 lg:mb-0">
                <div class="mb-6 inline-block">
                    <span
                        class="text-red-500 text-lg font-semibold px-4 py-1 border border-red-500 rounded-full">{{ $introduction->highlights }}</span>
                </div>
                <div class="typewriter mb-6 md:mb-10 overflow-hidden w-fit">
                    <h1 class="text-2xl md:text-4xl lg:text-5xl font-bold leading-tight">
                        <span class="text-blue-400 text-shadow-lg/30 text-shadow-red-200">
                            {{ $introduction->greeting }}
                        </span>
                        <span class="text-red-400 text-shadow-lg/30 text-shadow-blue-600">
                            {{ $introduction->Name }}
                        </span>
                    </h1>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-blue-300">
                    {{ $introduction->title }}
                </h2>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl">
                    {{ $introduction->introduction_text }}
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="#contact"
                        class="px-6 py-3 bg-red-600 text-white font-medium rounded-full shadow-lg hover:bg-red-700 transition duration-300 flex items-center">
                        <span>Get in Touch</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <a href="#projects"
                        class="px-6 py-3 bg-transparent text-blue-300 font-medium rounded-full border border-blue-500 hover:bg-blue-900 hover:text-yellow-300 transition duration-300 flex items-center">
                        <span>View Work</span>
                        <i class="fas fa-briefcase ml-2"></i>
                    </a>
                </div>

                <div class="mt-12 flex items-center">
                    <span class="text-gray-400 mr-4">Follow me:</span>
                    <div class="flex space-x-4">
                        @foreach ($socialLinks as $link)
                            <a href="{{ $link->url }}" target="_blank" class="text-blue-400 hover:text-yellow-400 text-xl transition duration-300">
                                <i class="{{ $link->icon }}"></i>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Interactive Code Display -->
            <div class="lg:w-2/5 relative">
                <div class="bg-gray-800 rounded-lg p-6 shadow-2xl border border-gray-700">
                    <div class="flex items-center mb-4">
                        <div class="flex space-x-2">
                            <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                            <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                        </div>
                        <span class="ml-4 text-gray-400 text-sm">portfolio.js</span>
                    </div>
                    <div class="font-mono text-sm">
                        <div class="text-purple-400">
                            const <span class="text-blue-400">developer</span> = {
                        </div>
                        <div class="ml-4 text-green-400">
                            name: <span class="text-yellow-300">'Ramesh'</span>,
                        </div>
                        <div class="ml-4 text-green-400">
                            skills: [
                            <span class="text-yellow-300">'Laravel'</span>,
                            <span class="text-yellow-300">'View Js'</span>,
                            <span class="text-yellow-300">'Livewire'</span>
                            ],
                        </div>
                        <div class="ml-4 text-green-400">
                            passion:
                            <span class="text-yellow-300">'Building Amazing Apps'</span>,
                        </div>
                        <div class="ml-4 text-green-400">
                            coffee: <span class="text-red-400">true</span>
                        </div>
                        <div class="text-purple-400">};</div>
                        <div class="mt-4 text-blue-400">
                            console.log(<span class="text-yellow-300">'Ready to code!'</span>);
                        </div>
                    </div>
                </div>

                <!-- Floating tech icons -->
                <div
                    class="absolute top-0 right-0 w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center shadow-lg tech-orbit">
                    <i class="fab fa-react text-blue-400 text-xl"></i>
                </div>
                <div class="absolute bottom-0 left-0 w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center shadow-lg tech-orbit"
                    style="animation-delay: -2s">
                    <i class="fab fa-node-js text-green-400 text-xl"></i>
                </div>
                <div class="absolute top-1/2 left-0 w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center shadow-lg tech-orbit"
                    style="animation-delay: -4s">
                    <i class="fas fa-database text-red-400 text-xl"></i>
                </div>
                <div class="absolute top-1/4 right-1/4 w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center shadow-lg tech-orbit"
                    style="animation-delay: -6s">
                    <i class="fab fa-laravel text-red-400 text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Scrolling skills/keywords -->
        <div class="mt-16 md:mt-24 pb-8 overflow-hidden">
            <div class="flex space-x-8 animate-pulse">
                @foreach ($skills as $skill)
                    <span class="text-xl {{ $skill->color }} font-medium whitespace-nowrap">{{ $skill->name }}</span>
                @endforeach
            </div>
        </div>
    </div>

    <!-- SVG Wave Separator
      <svg
        class="w-full text-section-alt-1"
        style="margin-bottom: -5px"
        viewBox="0 0 1440 100"
      >
        <defs>
          <linearGradient id="myGradient" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color: #1e3a8a" />
            <stop offset="45%" style="stop-color: #fdc700" />
            <stop offset="100%" style="stop-color: #dc2626" />
          </linearGradient>
        </defs>
        <path
          fill="url(#myGradient)"
          d="M0,32L60,42.7C120,53,240,75,360,74.7C480,75,600,53,720,48C840,43,960,53,1080,64C1200,75,1320,85,1380,90.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg> -->
</section>
