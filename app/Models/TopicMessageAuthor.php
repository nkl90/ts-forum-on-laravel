<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicMessageAuthor extends Model
{
    use HasFactory;

    public function latestOrder()
    {
        return $this->hasOne(Topic::class)->latestOfMany();
    }
}
