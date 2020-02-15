<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Banner extends Model
{
    protected $fillable = [
        'title', 'image', 'url', 'status', 'position',
    ];

    public function find_all()
    {
        return DB::table('banners')->paginate(5);
    }
}
