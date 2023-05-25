<?php

namespace App\View\Components\home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Tailwind.css', 'Vue3'],
                'title' => 'App with Laravel, Tailwindcss and Vue 3',
                'image' => url('/img/laracasts.png'),
                'github' => 'https://github.com/laracasts'
            ],
            [
                'category' => ['Laravel', 'Bootstrap'],
                'title' => 'Laravel 9 with tailwindcc',
                'image' => url('/img/laracasts.png'),
                'github' => 'https://github.com/laracasts'
            ],
            [
                'category' => ['PHP', 'Laravel'],
                'title' => 'REST API with Laravel 8 and Sanctum',
                'image' => url('/img/laracasts.png'),
                'github' => 'https://github.com/laracasts'
            ],
            [
                'category' => ['PHP'],
                'title' => 'PHP MVC Framework',
                'image' => url('/img/images.png'),
                'github' => 'https://github.com/laracasts'
            ],
            [
                'category' => ['Laravel', 'Bootstrap'],
                'title' => 'YouTube clone with ',
                'image' => url('/img/image2.png'),
                'github' => 'https://github.com/laracasts'
            ],
            [
                'category' => ['Laravel', 'VueJs'],
                'title' => 'Laravel + VueJs Notes application',
                'image' => url('/img/image1.png'),
                'github' =>  'https://github.com/laracasts'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
