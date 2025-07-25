<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Skill extends Component
{

    protected $skillData = [
        'title' => 'Skills & Technologies',
        'description' => 'Core technologies and tools I use for full-stack development',
        'skills' => [
             ["name" => "HTML", 'icon' => 'fab fa-html5'],
             ["name" => "CSS", 'icon' => 'fab fa-css3-alt'],
             ["name" => "JavaScript", 'icon' => 'fab fa-js'],
             ["name" => "Vue.js", 'icon' => 'fab fa-vuejs'],
             ["name" => "React", 'icon' => 'fab fa-react'],
             ["name" => "PHP", 'icon' => 'fab fa-php'],
             ["name" => "Laravel", 'icon' => 'fab fa-laravel'],
            //  ["name" => "Node.js", 'icon' => 'fab fa-node-js'],
            //  ["name" => "Express.js", 'icon' => 'fab fa-node-js'],
             ["name" => "MySQL", 'icon' => 'devicon-mysql-original'],
             ["name" => "PostgreSQL", 'icon' => 'devicon-postgresql-plain'],
             ['name' => "Git", 'icon' => 'fab fa-git-alt'],
        ],
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
        $skillData = (object) $this->skillData;
        return view('components.skill', compact('skillData'));
    }
}



// "frontend" => [
//                 ["name" => "HTML", 'icon' => 'fab fa-html5'],
//                 ["name" => "CSS", 'icon' => 'fab fa-css3-alt'],
//                 ["name" => "JavaScript", 'icon' => 'fab fa-js'],
//                 ["name" => "Vue.js", 'icon' => 'fab fa-vuejs'],
//                 ["name" => "React", 'icon' => 'fab fa-react'],
//             ],
//             "backend" => [
//                 ["name" => "PHP", 'icon' => 'fab fa-php'],
//                 ["name" => "Laravel", 'icon' => 'fab fa-laravel'],
//                 ["name" => "Node.js", 'icon' => 'fab fa-node-js'],
//                 ["name" => "Express.js", 'icon' => 'fab fa-node-js'],
//             ],
//             "database" => [
//                 ["name" => "MySQL", 'icon' => 'fab fa-mysql'],
//                 ["name" => "PostgreSQL", 'icon' => 'fab fa-postgresql'],
//                 // ["name" => "MongoDB", 'icon' => 'fab fa-mongodb'],
//             ],
//             "cloud" => [
//                 ["name" => "AWS", 'icon' => ''],
//                 ["name" => "Azure", 'icon' => ''],
//                 ["name" => "Google Cloud", 'icon' => '']
//             ],
//             "tools" => [
//                 ['name' => "Git", 'icon' => ''],
//                 // ['name' => "VS Code", 'icon' => ''],
//                 // ['name' => "GitHub", 'icon' => ''],
//                 // ['name' => "Docker", 'icon' => ''],
//                 // ['name' => "Webpack", 'icon' => ''],
//                 // ['name' => "NPM", 'icon' => ''],
//                 // ['name' => "Composer", 'icon' => ''],
//             ],