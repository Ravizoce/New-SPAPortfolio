<?php

namespace App\Trait;

use Faker\Core\Color;

trait SkillsTrait
{
    /**
     * Get the skills for the user.
     *
     * @return array
     */
    public function getSkills()
    {
        return [
            (object) [
                "name" => 'Laravel',
                "color" => 'text-blue-300',
            ],
            (object) [
                "name" => 'Vue.js',
                "color" => 'text-red-300',
            ],
            (object) [
                "name" => 'HTML',
                "color" => 'text-yellow-300',
            ],
            (object) [
                "name" => 'Tailwind CSS',
                "color" => 'text-tale-600',
            ],
            (object) [
                "name" => 'Bootstrap CSS',
                "color" => 'text-yellow-300',
            ],
            (object) [
                "name" => 'CSS',
                "color" => 'text-orange-400',
            ],
            (object) [
                "name" => 'JavaScript',
                "color" => 'text-yellow-300',
            ],
            (object) [
                "name" => 'PHP',
                "color" => 'text-green-500',
            ],
            (object) [
                "name" => 'MySQL',
                "color" => 'text-purple-300',
            ],
            (object) [
                "name" => 'Git',
                "color" => 'text-pink-300',
            ],
        ];

    }
}
