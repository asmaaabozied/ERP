<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Currency extends Model implements TranslatableContract
{
    use HasFactory;
    use LogsActivity;
    use Translatable;

    public $translatedAttributes = ['name'];
    protected $guarded = ['id','created_at','updated_at	'];
    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['id'];
    protected static $logName = 'Currency';
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
