<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    /** @use HasFactory<\Database\Factories\SpeakerFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'bio',
        'photo',
        'event_id'
    ];
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
