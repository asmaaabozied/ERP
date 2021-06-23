<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class OptionTranslation extends Model
{
    use LogsActivity;

    protected $table = "options_translations";
    public $timestamps = false;
    protected $fillable = ['name'];
    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['option_id','name'];
    protected static $logName = 'Option Translation';
}
