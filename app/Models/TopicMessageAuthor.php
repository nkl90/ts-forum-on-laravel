<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicMessageAuthor extends Model
{
    use HasFactory;

    public function messages()
    {
        return $this->hasMany(TopicMessage::class, 'author_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
