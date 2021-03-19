<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\Likable;

class Tweet extends Model
{
    use Likable;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
