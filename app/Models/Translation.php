<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the parent translationable model (post or entity).
     */
    public function translationable()
    {
        return $this->morphTo();
    }
}
