<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Level2Category extends Model
{

    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['name'];

    public function level1Category()
    {
        return $this->belongsTo(level1Category::class);
    }

    public function level3Categories()
    {
        return $this->hasMany(level3Category::class);
    }

}
