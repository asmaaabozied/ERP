<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class GuaranteeTranslation extends Model
{
    use HasFactory;
    use LogsActivity;

    public $timestamps = false;
    protected $fillable = ['kind_guarantee'];

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['guarantee_id','kind_guarantee'];
    protected static $logName = 'Employ';
}
