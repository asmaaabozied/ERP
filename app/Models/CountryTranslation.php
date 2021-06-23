<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class CountryTranslation extends Model
{
    use HasFactory;
    use LogsActivity;
    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['country_id','name'];
    protected static $logName = 'Country';
    protected $table='countries_translations';
    public $timestamps = false;
    protected $fillable = ['name'];
}
