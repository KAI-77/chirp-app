<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    public function chirps()
    {
        return $this->belongsTo(Chirp::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
