<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Spatie\Activitylog\Traits\LogsActivity;

class CostWay extends Model implements TranslatableContract
{

    use Translatable;
    use LogsActivity;

    public $translatedAttributes = ['name'];
    protected $fillable = ['active'];

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['id'];
    protected static $logName = 'Costway';

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
