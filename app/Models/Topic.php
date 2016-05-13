<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Model\User;

use App\Models\Section;

class Topic extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'body',
        'section_id',
    ];


    public function user()
    {
      return $this->belongsTo(User::class);
    }


    public function section()
    {
      return $this->belongsTo(Section::class);
    }
}
