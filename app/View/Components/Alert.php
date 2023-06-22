<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $text = 'Default text',
        public string $hash = '',
        public string $smallDescription = 'Default small description',
        public string $title = 'Default titleуууууууууу',
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }

    public function randomDigit(): int
    {
        return random_int(1, 9);
    }

    public function lessThanFive(int|string $number): bool
    {
        return intval($number) < 5;
    }
}
