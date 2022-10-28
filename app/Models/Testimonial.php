<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;
use Spatie\Translatable\HasTranslations;

class Testimonial extends Model
{
    use HasFactory, HasTranslations, HasTags;

    protected $guarded = [];

    public $translatable = ['body'];

    public function entity()
    {
        return $this->belongsTo(Entity::class, 'entity_id');
    }
}
