<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [


        'content', 'chirp_id', 'user_id'
    ];
    public function chirps()
    {
        return $this->belongsTo(Chirp::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
