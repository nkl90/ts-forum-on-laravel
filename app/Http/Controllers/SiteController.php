<?php
declare(strict_types=1);


namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Support\Facades\View;

class SiteController
{
    public function index()
    {
        dump(View::exists('forum.topic_showsdfsdf'));
        $view = view('index');
        if(5 > $random = random_int(0, 9)){
            $view
                ->with('title', 'Рандом больше 5');
        }else{
            $view
                ->with('title', 'Рандом меньше 5');
        }
        return $view
            ->with('random', $random);
    }
}
