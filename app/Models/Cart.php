<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;



use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Cart extends Model implements TranslatableContract
{
    use Translatable;
    use LogsActivity;

    public $translatedAttributes = ['name' ,'name_type'];

    protected $guarded = ['id','created_at','updated_at	'];

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['id'];
    protected static $logName = 'Cart';

    public function employe()
    {
        return $this->belongsTo(Employ::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class,'Currency_id');
    }

    public function vip()
    {
        return $this->belongsTo(Vip::class);
    }


}
