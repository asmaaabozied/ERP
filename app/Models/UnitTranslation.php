<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class UnitTranslation extends Model
{
    use LogsActivity;

    protected $table = "units_translations";

    public $timestamps = false;
    protected $fillable = ['name'];

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['unit_id','name'];
    protected static $logName = 'Unit Translation';
}
