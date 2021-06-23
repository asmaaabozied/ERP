<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class BranchTranslation extends Model
{
    use HasFactory;

    use LogsActivity;
    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['branch_id','country_id'];
    protected static $logName = 'Branch Translation';

    public $timestamps = false;
    protected $table='branches_translations';
    protected $fillable = ['name'];
}
