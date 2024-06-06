<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'subjects_id',
        'users_id',
    ];

    public function subject()
    {
        return $this->belongsTo(Subjects::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
