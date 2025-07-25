    <section class="skills-section">
        

        <div class="skills-container">
            <h2 class="text-3xl font-bold text-center mb-4 text-red-400">
                {{ $skillData->title }}
            </h2>
            <p class="skills-subtitle">
                {{ $skillData->description }}
            </p>

            <div class="skills-grid">
                {{-- @foreach ($skillData->skills as $category => $skills) --}}
                @foreach ($skillData->skills as $skills)
                <div class="skill-card">
                    <span class="skill-icon">
                        <i class="{{ $skills['icon'] }}"></i>
                    </span>
                    <h3>{{ $skills['name'] }}</h3>
                </div>
                @endforeach
            </div>
        </div>
    </section>
