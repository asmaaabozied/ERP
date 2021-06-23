<?php

namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Employ extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    use LogsActivity;

    protected $table='employes';
    protected $fillable = ['phone_number'];
    public $translatedAttributes =['name','title'];
    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['id'];
    protected static $logName = 'Employ';


    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

}
