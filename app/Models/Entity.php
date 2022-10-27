<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entity extends Model
{
    use HasFactory;

    protected $guarded = [];

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
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeProducts($query)
    {
        return $query->where('type', 'product');
    }

    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeServices($query)
    {
        return $query->where('type', 'service');
    }

    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePortfolios($query)
    {
        return $query->where('type', 'portfolios');
    }
}
