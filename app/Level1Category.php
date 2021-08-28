<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Level1Category extends Model
{
    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['name'];

    public function level2Categories()
    {
        return $this->hasMany(level2Category::class);
    }

    public function level3Categories()
    {
        return $this->hasMany(level3Category::class);
    }

}
