<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movies extends Model
{
    protected $table = 'movies';
    protected $guarded = [];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}