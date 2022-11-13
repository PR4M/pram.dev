<?php

namespace App\Models;

use Spatie\Tags\HasTags;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
use Zoha\Metable;

class Entity extends Model
{
    use HasFactory, HasTranslations, HasTags, Metable;

    protected $guarded = [];

    protected $casts = [
        'order_channels' => 'array',
    ];

    public $translatable = ['title', 'summary', 'body'];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::creating(function ($model) {
            // append the slug with generated unique code
            $code = Str::random(4);
            $model->code = $code;
            $model->slug = $model->slug . '-' . $code;
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // -- RELATIONSHIP -- //

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class, 'entity_id');
    }

    public function translations()
    {
        return $this->morphMany(Translation::class, 'translationable');
    }

    // -- SCOPES -- //

    /**
     * Scope a query to only include Product records.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeProducts($query)
    {
        return $query->where('type', 'product');
    }

    /**
     * Scope a query to only include Service records.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeServices($query)
    {
        return $query->where('type', 'service');
    }

    /**
     * Scope a query to only include Work records.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWorks($query)
    {
        return $query->where('type', 'work');
    }

    /**
     * Scope a query to only include published records.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished($query)
    {
        return $query->where('published_at', '>=', Carbon::today());
    }
}
