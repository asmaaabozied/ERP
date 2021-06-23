<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Spatie\Activitylog\Traits\LogsActivity;

class Unit extends Model implements TranslatableContract
{
    use Translatable;

    use LogsActivity;

    
    public function properties()
    {
        return $this->hasMany(Property::class);
    }




    public $translatedAttributes = ['name'];
    protected $fillable = ['active'];

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['id'];
    protected static $logName = 'Unit';
}
