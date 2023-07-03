<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicMessage extends Model
{
    use HasFactory;

    public $fillable = [
        'uuid',
        'topic_id',
        'author_id',
        'content',
    ];
}
