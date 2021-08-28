<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level2Category extends Model
{
    protected $guarded = [];

    public function level1Category()
    {
        return $this->belongsTo(level1Category::class);
    }

    public function level3Categories()
    {
        return $this->hasMany(level3Category::class);
    }

}
