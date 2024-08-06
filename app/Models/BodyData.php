<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodyData extends Model
{
    use HasFactory;

    protected $fillable = [
        'goal',
        'weight',
        'height',
        'goal_weight',
        'user_id',
        'bmi'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
