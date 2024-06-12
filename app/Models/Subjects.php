<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany as RelationsHasMany;

class Subjects extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    public function material()
    {
        return $this->hasOne(Materials::class, 'subjects_id');
    }
}
