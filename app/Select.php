<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Select extends Model
{
    protected $guarded = [];

    public function level1Category()
    {
        return $this->belongsTo(level1Category::class);
    }

    public function level2Category()
    {
        return $this->belongsTo(level2Category::class);
    }

    public function level3Category()
    {
        return $this->belongsTo(level3Category::class);
    }

}
