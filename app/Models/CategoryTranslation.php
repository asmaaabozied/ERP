<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Spatie\Activitylog\Traits\LogsActivity;

class CategoryTranslation extends Model
{
    use LogsActivity;

    public $timestamps = false;
    protected $table ="categories_translation";
    protected $fillable = ['name', 'description','notes'];

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['category_id'];
    protected static $logName = 'Category Translation';
}
