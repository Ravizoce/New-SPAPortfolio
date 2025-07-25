<?php

namespace App\View\Components;

use App\Trait\SocialTait;
use App\Trait\SkillsTrait;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Home extends Component
{

    use SkillsTrait, SocialTait;
    protected $introduction = [
        'title' => 'Full Stack Developer',
        'highlights' => 'Web developer',
        'greeting' => "Hello, I'm",
        "Name" => 'Ramesh Joshi',
        'introduction_text' => 'I craft digital experiences through clean code and innovative solutions. Specializing in modern web applications with focus on performance, scalability, and user experience.',
    ];
    
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $introduction = (object) $this->introduction;
        $skills = (object) $this->getSkills();
        $socialLinks = (object) $this->getSocialLinks();
        return view('components.home', compact('introduction', 'skills', 'socialLinks'));
    }
}
