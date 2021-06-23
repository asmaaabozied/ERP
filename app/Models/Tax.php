<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Spatie\Activitylog\Traits\LogsActivity;

class Tax extends Model implements TranslatableContract
{
    use Translatable;
    use LogsActivity;

    public $translatedAttributes = ['name'];
    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['id', 'percentage'];
    protected static $logName = 'Tax';
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    protected $fillable = ['active', 'percentage','start_date'];
}
