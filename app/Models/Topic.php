<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property int $id
 * @property string $title
 * @property string $icon
 * @property string $created_at
 * @property Collection|TopicMessage[] $messages
 */
class Topic extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'title',
        'icon',
        'created_at',
    ];

    public $incrementing = false;

    protected $keyType = 'string';

    public function messages()
    {
        return $this->hasMany(TopicMessage::class);
    }
}
