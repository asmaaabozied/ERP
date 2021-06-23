<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class CityTranslation extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $table='cities_translations';
    public $timestamps = false;
    protected $fillable = ['name'];

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['city_id', 'name'];
    protected static $logName = 'City Translation';
}
