<?php

namespace App\Models;

use Zoha\Metable;
use Spatie\Tags\HasTags;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

        static::deleting(function ($model) {
            $model->deleteMeta();
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

    // -- ATTRIBUTES -- //

    /**
     * Get the entity's price.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function localPrice(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => get_lang() == 'en' ? '$'. $this->price : 'Rp '. $this->getMeta('price_idr'),
        );
    }
}
