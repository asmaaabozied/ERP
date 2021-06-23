<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class BulkunitTranslation extends Model
{
    use LogsActivity;

    public $timestamps = false;
    protected $fillable = ['name','description'];
    public $table = "bulk_units_translations";

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['bulk_unit_id','name'];
    protected static $logName = 'BulkUnit Translation';

}
