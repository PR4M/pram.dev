<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = [];

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

            $model->user_id = auth()->user()->id;
        });
    }

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'publish_at' => 'date',
    ];

    // -- RELATIONSHIP -- //

    /**
     * Get all of the entity's translations.
     */
    public function translations()
    {
        return $this->morphMany(Translation::class, 'translationable');
    }

    //
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // -- SCOPES -- //

    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePosts($query)
    {
        return $query->where('type', 'product');
    }

    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSupports($query)
    {
        return $query->where('intention', 'support');
    }

    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeQuestion($query)
    {
        return $query->where('type', 'question');
    }

}
