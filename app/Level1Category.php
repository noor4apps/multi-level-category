<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level1Category extends Model
{
    protected $guarded = [];

    public function level2Categories()
    {
        return $this->hasMany(level2Category::class);
    }

    public function level3Categories()
    {
        return $this->hasMany(level3Category::class);
    }

}
