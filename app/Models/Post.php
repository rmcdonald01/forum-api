<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;

use App\Models\Topic;

class Post extends Model
{
    protected $fillable = [
            'body',
            'user_id',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function topic()
    {
      return $this->belongsTo(Topic::class);
    }

}
