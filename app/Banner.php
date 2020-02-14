<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'title', 'image', 'url', 'status', 'position',
    ];

    public function find_all()
    {
        return Banner::all();
    }
}
