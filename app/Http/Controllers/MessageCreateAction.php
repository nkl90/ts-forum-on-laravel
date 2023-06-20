<?php
declare(strict_types=1);


namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class MessageCreateAction
{
    public function __invoke(): RedirectResponse
    {
        return redirect()->route('app.topic.show', ['UUID' => '12345678-1234-1234-1234-123456789012']);
    }
}
