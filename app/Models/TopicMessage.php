<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property TopicMessageAuthor author
 */
class TopicMessage extends Model
{
    use HasFactory;

    public $fillable = [
        'topic_id',
        'author_id',
        'content',
    ];

    public function author()
    {
        return $this->belongsTo(TopicMessageAuthor::class);
    }
}
