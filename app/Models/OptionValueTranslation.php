<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class OptionValueTranslation extends Model
{
    use LogsActivity;

    protected $table = "option_values_translations";
    public $timestamps = false;
    protected $fillable = ['name'];

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['option_value_id','name'];
    protected static $logName = 'Option Values translation';
}
