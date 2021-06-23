<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class PointOfSaleTranslation extends Model
{
    use HasFactory;
    use LogsActivity;

    public $timestamps = false;
    protected $table='pointofsales_translations';
    protected $fillable = ['point_name'];
    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['pointofsale_id','name'];
    protected static $logName = 'Point of sale translation';
}
