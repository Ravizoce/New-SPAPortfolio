<?php

namespace App\Trait;

trait SocialTait
{
    /**
     * Get the social links for the user.
     *
     * @return array
     */
    public function getSocialLinks()
    {
        return [
            (object) [
                "platform" => 'GitHub',
                "url" => 'https://github.com/Ravizoce',
                "icon" => 'fa-brands fa-github',
            ],
            (object) [
                "platform" => 'LinkedIn',
                "url" => 'https://www.linkedin.com/in/ramesh-prasad-joshi-32ab4426a/',
                "icon" => 'fa-brands fa-linkedin',
            ],
            (object) [
                "platform" => 'Facebook',
                "url" => 'https://www.facebook.com/ravi.zo.ce',
                "icon" => 'fa-brands fa-facebook',
            ],
            // (object) [
            //     "platform" => 'Instagram',
            //     "url" => '',
            //     "icon" => 'fa-brands fa-instagram',
            // ],
        ];
    }
}
