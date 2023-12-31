<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Library extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'course_id', 'price', 'audience', 'resource_type', 'url'];

    public function course():BelongsToMany
    {
        # code...
        return $this->belongsToMany(Course::class);
    }

    public function transaction():HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
