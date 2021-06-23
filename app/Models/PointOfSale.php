<?php

namespace App\Models;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class PointOfSale extends Model implements TranslatableContract
{
    //use HasFactory;
    use Translatable;
    use LogsActivity;

    protected $table='pointofsales';
    public $translationForeignKey = 'pointofsale_id';
    public $translatedAttributes = ['point_name'];
    protected $fillable = ['code'];

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['id'];
    protected static $logName = 'Point of sale';
}
