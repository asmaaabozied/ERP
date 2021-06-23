<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class DistrictTranslation extends Model
{
    use HasFactory;
    use LogsActivity;

    public $timestamps = false;
    protected $table='districts_translations';
    protected $fillable = ['name'];
    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['district_id','name'];
    protected static $logName = 'District translation';
}
