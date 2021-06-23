<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class CostWayTranslation extends Model
{
    use LogsActivity;

    protected $table = "cost_ways_translations";
    public $timestamps = false;
    protected $fillable = ['name'];

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['costway_id', 'name'];
    protected static $logName = 'Costway translation';
}
