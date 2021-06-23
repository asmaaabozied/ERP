<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Guarantee extends Model implements TranslatableContract
{
    use Translatable;
    use LogsActivity;

    public $translatedAttributes = ['kind_guarantee'];
    protected $guarded = ['id','created_at','updated_at	'];

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['id'];
    protected static $logName = 'Gurantee';

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
