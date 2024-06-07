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

    public function materials(): RelationsHasMany
    {
        return $this->hasMany(Materials::class);
    }
}
