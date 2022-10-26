<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
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

            $model->user_id = auth()->user()->id;
        });

        static::updating(function($model) {
            $model->slug = $model->slug . '-' . $model->code;
        });
    }

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'publish_at' => 'date',
    ];

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
