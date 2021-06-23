<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class WarehouseTranslation extends Model
{
    use HasFactory;
    use LogsActivity;

    public $timestamps = false;
    protected $fillable = ['ware_name','address','notes'];
    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['warehouse_id','ware_name'];
    protected static $logName = 'Warehouse translation';

}
