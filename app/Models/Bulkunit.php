<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Spatie\Activitylog\Traits\LogsActivity;

class Bulkunit extends Model implements TranslatableContract
{
    use Translatable;
    use LogsActivity;

    public $translatedAttributes = ['name','description'];
    protected $table = 'bulk_units';
    protected $fillable = [
        'active',
        'divide',
        'multiply',
        'quantity',
        'price',
        'greet_numper',
        'small_numper',
        'order_limit',
        'Consumer_price',
        'min_price_sell',
        'price_buy',
    ];

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['id'];
    protected static $logName = 'Bulkunit';
}
