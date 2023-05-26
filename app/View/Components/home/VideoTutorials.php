<?php

namespace App\View\Components\home;

use Illuminate\View\Component;

class VideoTutorials extends Component
{
    public array $videoTutorials = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->videoTutorials = [
            [
                'videoId' => '', // <- Add your video id
                'title' => 'PHP Tutorial for Absolute Beginners - PHP Course 2023',
                'description' => 'PHP with our comprehensive tutorial designed exclusively for absolute beginners.'
            ],
            [
                'videoId' => '', // <- Add your video id
                'title' => 'Full Stack App with Laravel, Tailwindcss and Vue 3',
                'description' => 'Full-stack application brought to life with Laravel, Tailwind CSS, and Vue 3.'
            ],
            [
                'videoId' => '', // <- Add your video id
                'title' => 'Learn How to build PHP MVC Framework',
                'description' => 'Unlock the power of PHP with our comprehensive guide to building your own MVC framework..'
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.video-tutorials');
    }
}
